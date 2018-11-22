<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Owner extends CI_Controller {

	 public function __construct() 
    {
        parent::__construct();

       
        $this->load->library('email');

        }
		
		
	public function index()
	{    
      $this->load->view( 'owner/login' );
	}
         
       public function restricted()
       {
		  
           $this->load->view('restricted');
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
       
       public function owner_info(){
           $data = array();
           $query = $this->db->select('*')
                   ->from('users')
                   ->where('user_role = owner');
           $sql = $query->get()->result();
           
          //     print_r($sql);
           
                
           
       }
       public function dashboard()
        {
  			$content = array('content'=>'owner/dashboard');
        $this->load->view('layout/main', $content);
        }
        
        
         public function register()
       {
           
           $data = array();
            $q = $this->db->select('*')
                        ->from('groups')
                        ->where('id = 2');
            $user_data = $q->get()->result();
            $data['user_role'] = $user_data;
            $content = array('content'=>'owner/register1', 'user_role' => $user_data);
           $this->load->view('layout/main',$content);
           
           
    }  


	
     public function xxx( $user_id ) {
		 User_data::set_meta_data($user_id,'ip_address', $_SERVER['REMOTE_ADDR']);
       echo User_data::get_meta_data( $user_id, 'ip_address' );
       }
	   
	   
	   
    public function register_validation() {
		// Current logged in user id
          $current_user_id = $this->session->userdata( 'user_id' );
		  
        global $cidb;
            $this->load->library('form_validation');
            $this->form_validation->set_rules('email','Email','required|trim');
            if($this->form_validation->run() == false) {
             redirect( 'owner/register' );
               //echo "false";
           }
           else 
            {
                $email  = trim( $this->input->post( 'email' ) );
                $role   = trim( $this->input->post( 'user_role' ) );
                $team   = trim( $this->input->post( 'team_name' ) );

            // Auto genrated password
               
              
         $email_ex = explode( ',', $email );
         foreach ($email_ex as $mail) {

            $password = uniqid();
            
            $payment_token =  $this->payment_token(25);

           // Insert data into database
            $user_id =  $cidb->insert( 'users', array(
              'user_role'  => $role,
              'password'   => md5( $password ),
              'email'      => $mail,
              'status'     => '1',
              'payment_token'      => $payment_token,
              'is_payment_done' => 0,

            ));

            // add user meta data
            User_data::set_meta_data( $user_id, 'created_by', $current_user_id );
            User_data::set_meta_data( $user_id, 'team_name', $team );
			
			   
           // Send email
            $mail_data = array(
              'email' => $mail,
              'password' => $password,
              'token'   => $payment_token,
            );

         
            $message = $this->load->view('mail/register', $mail_data, TRUE);
           //  Mail::send( $mail, 'Welcome to the world', $message );

            $this->email->from('insurance@gwfg.com', 'insurance@gwfg.com');
            $this->email->to($mail);
            $this->email->subject('Your Login details');
            $this->email->message($message);
            $this->email->send();

         
          }
            // Team member created message
            $this->session->set_flashdata('error_reg', 'Member added successfully.');
            redirect( 'owner/register' );

           
        } // .register_validation
        
    }


    //Generate payment verification Token
    function payment_token($length)
    {
        $token = "";
       $codeAlphabet = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
       $codeAlphabet.= "abcdefghijklmnopqrstuvwxyz";
       $codeAlphabet.= "0123456789";
       $max = strlen($codeAlphabet); // edited

      for ($i=0; $i < $length; $i++) {
          $token .= $codeAlphabet[random_int(0, $max-1)];
      }

      return $token;

    }

    
    public function view_team()
    {
        $data = array();
       $query =  $this->db->select("users.*, groups.name")
                ->from("users")
				->join('groups','groups.id = users.user_role');
				
       $sql = $query->get()->result_array();
       $data['team_name'] = $sql;
     $content = array('content'=>'owner/show_team','team_name' => $sql);
            $this->load->view('layout/main', $content);
        
    }
        
    
    public function view_team_member($id){
        $data = array();
       $query =  $this->db->select("*")
                ->from("users")
               ->where("id =".$id);
       $sql = $query->get()->row();
        $data['team_member'] = $sql;
     $content = array('content'=>'owner/team_member','team_member' => $sql);
            $this->load->view('layout/main', $content);
        
        
    }
	
	public function login_details( $user_id ) {

		$last_login_ip    = User_data::get_meta_data( $user_id, 'last_login_ip' );
    $last_login_time  = User_data::get_meta_data( $user_id, 'last_login_time' );
   $log = "last login is from <strong>" . $last_login_ip . " </strong> ip address at ". $last_login_time;
   $data['log'] = $log;
 
		 $content = array('content'=>'owner/login_details','log' => $log);
            $this->load->view('layout/main', $content);
		 
	}
	
	public function add_rank($id)
	{
		
		$data = array();
       $query =  $this->db->select("*")
                ->from("users")
               ->where("id =".$id);
       $sql1 = $query->get()->row();
        $data['team_member'] = $sql1;
		
		
		 $query =  $this->db->select("*")
                ->from("team_rank");
              
       $sql = $query->get()->result();
	    $data['rank'] = $sql;
		
		
     $content = array('content'=>'owner/team_rank','rank' => $sql,'team_member' =>$sql1);
            $this->load->view('layout/main', $content);
	}
	
	public function show_rank($user_id)
	{
		 $rank = $this->input->post('rank');
	   User_data::set_meta_data( $user_id, 'user_rank', $rank );
			redirect('owner/view_team');
	}
}
   