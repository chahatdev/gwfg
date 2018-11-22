<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	
	public function index()
	{
          $this->load->database();
          $this->load->library('form_validation');
          $this->form_validation->set_rules('email','Email','required|trim|callback_validate_credentials');
          $this->form_validation->set_rules('password','Password','required|trim');
           
           if($this->form_validation->run() == false) {
              $this->load->view('login');
           } else {

              $email = $this->input->post('email');
              $data = array(
                 'email' => $email,
                 'role' => get_user_role_by_email( $email ),
                 'is_logged_in' => 1,
                 'user_id' => get_user_id_by_email( $email ),        
             );

             $this->session->set_userdata($data);
             
            redirect( 'main/dashboard' );

             if($this->session->userdata('is_logged_in'))
             {
                  
             }
             else
             {
                redirect('restricted');
               }
               
           }
          
	}
         
       public function restricted()
       {
		   $content = array('content'=>'restricted');
           $this->load->view('layout/main', $content);
       }
       


       public function get_user( $user_id ) {
         dump( User_data::get_meta_data( $user_id ) );
       }


       public function set_rank( $user_id, $rank ) {

        User_data::set_meta_data( $user_id, 'user_rank', $rank );

       }

       public function get_rank( $user_id ) {

        echo User_data::get_meta_data( $user_id, 'user_rank' );

       }
       
       

       
       public function validate_credentials()
        {
           $this->load->model('model_users');
           if($this->model_users->can_login())
           {
               return true;
           }
           else
           {
               $this->form_validation->set_message('validate_credentials','Incorrect Username Or Password');
               return false;
           }
        }
        
        /**
         * Register an user
         * @author Sonu Kaushal
         * @return bool
         */
        public function register_validation() {

          global $cidb;

          // Current logged in user id
          $current_user_id = $this->session->userdata( 'user_id' );

          // Data pass from post form
          $email  = trim( $this->input->post( 'email' ) );
          $role   = trim( $this->input->post( 'user_role' ) );

          // Explode all the emails
          $emails = explode( ',', $email);


          foreach ($emails as $email ) {
            // Trim email if any space is there
            $email = trim( $email );

            // If email empty or not valid
            if ( empty( $email ) || ! filter_var( $email, FILTER_VALIDATE_EMAIL ) ) {
              $this->session->set_flashdata('team_register_message', $email .': Please check your email.');
              redirect( 'main/register' );
            }
            // Auto genrated password
            $password = uniqid();

            // Insert data into database
            $user_id = $cidb->insert( 'users', array(
              'user_role'  => $role,
              'password'   => md5( $password ),
              'email'      => $email,
              'status'     => '1',
            ) );

            // add user meta data
            User_data::set_meta_data( $user_id, 'created_by', $current_user_id );

            // Send email
            $mail_data = array(
              'email'     => $email,
              'password'  => $password,
            );

            $message = $this->load->view('mail/register', $mail_data, TRUE);
            Mail::send( $email, 'Welcome to the world', $message );

            // Team member created message
            $this->session->set_flashdata( 'team_register_message', 'Member added successfully.' );

          }

          redirect( 'main/register' );

        } // .register_validation
        


        public function logout() {
          $user_data = $this->session->all_userdata();
          foreach ($user_data as $key => $value) {
            if ($key != 'session_id' && $key != 'ip_address' && $key != 'user_agent' && $key != 'last_activity') {
              $this->session->unset_userdata($key);
          }
        }
        $this->session->sess_destroy();
         echo  '<div class="alert alert-success">';
           echo '<a href="#" class="close" data-dismiss="alert">&times;</a>';
            echo '<strong>Successfully logged Out</strong>' .$this->session->flashdata('Succefully logged Out');
        echo '</div>';
        redirect('main','refresh');

       }
       
       
       public function register()
       {
           
           $data = array();
            $q = $this->db->select('*')
                        ->from('groups');
            $user_data = $q->get()->result();
            $data['user_role'] = $user_data;
			$content = array('content'=>'register1', 'user_role' => $user_data);
           $this->load->view('layout/main',$content);
           
           
    }
       
      public function register_user($key)
        {
         
            $this->load->model('model_users');
            if($this->model_users->is_valid_key($key))
            {
                
               if($newuseremail = $this->model_users->add_user($key))
               {
                   $data = array(
                       'email' => $newuseremail,
                       'is_logged_in' => 1,
                       
                   );
                   
                  $this->session->set_userdata($data);
                  echo "account verify";
                   echo  '<div class="alert alert-success">';
           echo '<a href="#" class="close" data-dismiss="alert">&times;</a>';
            echo '<strong> Your Account is verified. Kindly log in</strong>' .$this->session->flashdata(' Your Account is verified. Kindly log in');
        echo '</div>';
                   redirect('main');
               }
               else
                {
                   echo "failed to add user";
                }
            }
            else 
            {
              echo "invalid key";
            }
        }
        
        public function dashboard()
        {
			$content = array('content'=>'dashboard');
            $this->load->view('layout/main', $content);
        }
        
       
}
