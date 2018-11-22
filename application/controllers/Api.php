<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api extends CI_Controller {

    
    
    function __construct() 
    {
        parent::__construct();
       
        $this->load->library('form_validation');
        $this->load->helper('url');
        $this->load->model(array("model_api"));
    }
	
	
	
		public function add_client() {
        global $cidb;

        $response = array();
        $data = $this->input->post();
        // validations
        if( empty( $data ) || empty( $data['first_name'] ) || empty( $data['last_name'] ) || empty( $data['email'] ) || empty( $data['contact'] ) || empty($data['created_by'])) {
            $response['flag'] = 0;
            $response['message'] = 'Invalid Request';
            echo json_encode( $response );
            return;
        }
        
        //validate form input    
         $this->form_validation->set_rules("email", "Email", "valid_email|is_unique[users.email]");
		 if ($this->form_validation->run() == true)
                {

                    $client_id = $cidb->insert( 'users', 
                            array( 
                                    'email' => $data['email'],
                                    'password' => md5( '12345' ),
                                    'user_role' => '5',
                                    'status' => '1',
                            )   
                        );
                    
                    $insert_id = $this->db->insert_id();

          
                    User_data::set_meta_data( $insert_id, 'created_by', $data['created_by'] );
					User_data::set_meta_data( $insert_id, 'first_name', $data['first_name'] );
					User_data::set_meta_data( $insert_id, 'last_name', $data['last_name'] );
					User_data::set_meta_data( $insert_id, 'email', $data['email'] );
					User_data::set_meta_data( $insert_id, 'contact', $data['contact'] );
					
						

                    if( isset( $client_id ) )  {
                            $response['flag'] = 1;
                            $response['user_id'] = $insert_id;
                            $response['message'] = 'Successfully added.';
                    }  else  {
                            $response['flag'] = 0;
                            $response['message'] = 'Unable to add.';
                    }
                }
			else{
				$response['flag'] = 0;
				$response['message'] = 'Email Already exists';
			}

        echo json_encode( $response );
    }
    
    
   
    public function do_add_client()
    {
        global $cidb;

        $response = array();
        $data = $this->input->post();
        
        // validations
        if( empty( $data ) || empty( $data['user_id'] )  ) {
            $response['flag'] = 0;
            $response['message'] = 'Invalid Request';
            echo json_encode( $response );
            return;
        }
        
        //validate form input    
         $client_id = $data['user_id'];
  
			if(isset($data['date_of_birth'])){User_data::set_meta_data( $client_id, 'date_of_birth', $data['date_of_birth'] ); }
			if(isset($data['country_of_birth'])){User_data::set_meta_data( $client_id, 'country_of_birth', $data['country_of_birth'] ); }
			if(isset($data['social_insurance_no'])){User_data::set_meta_data( $client_id, 'social_insurance_no', $data['social_insurance_no'] ); }
			if(isset($data['driver_licence_no'])){User_data::set_meta_data( $client_id, 'driver_licence_no', $data['driver_licence_no'] ); }
			if(isset($data['driver_licence_expiry'])){User_data::set_meta_data( $client_id, 'driver_licence_expiry', $data['driver_licence_expiry'] ); }
			if(isset($data['home_address'])){User_data::set_meta_data( $client_id, 'home_address', $data['home_address'] ); }
		   if(isset($data['years_at_current_address'])){User_data::set_meta_data( $client_id, 'years_at_current_address', $data['years_at_current_address'] ); }
		   if(isset($data['total_years_in_canada'])){User_data::set_meta_data( $client_id, 'total_years_in_canada', $data['total_years_in_canada'] ); }
		   if(isset($data['residency_status'])){User_data::set_meta_data( $client_id, 'residency_status', $data['residency_status'] ); }
		   if(isset($data['occupation'])){User_data::set_meta_data( $client_id, 'occupation', $data['occupation'] ); }
		   if(isset($data['employee_name'])){User_data::set_meta_data( $client_id, 'employee_name', $data['employee_name'] ); }
		   if(isset($data['employee_address'])){User_data::set_meta_data( $client_id, 'employee_address', $data['employee_address'] ); }
		   if(isset($data['employee_since_when'])){User_data::set_meta_data( $client_id, 'employee_since_when', $data['employee_since_when'] ); }
		   if(isset($data['duties'])){User_data::set_meta_data( $client_id, 'duties', $data['duties'] ); }
		   if(isset($data['employer_contact_no'])){User_data::set_meta_data( $client_id, 'employer_contact_no', $data['employer_contact_no'] ); }
		   if(isset($data['gross_income'])){User_data::set_meta_data( $client_id, 'gross_income', $data['gross_income'] ); }
		   if(isset($data['height_and_any_change'])){User_data::set_meta_data( $client_id, 'height_and_any_change', $data['height_and_any_change'] ); }
		   if(isset($data['weight_and_any_change'])){User_data::set_meta_data( $client_id, 'weight_and_any_change', $data['weight_and_any_change'] ); }
		   if(isset($data['family_doctor_name'])){User_data::set_meta_data( $client_id, 'family_doctor_name', $data['family_doctor_name'] ); }
		   if(isset($data['family_doctor_address'])){User_data::set_meta_data( $client_id, 'family_doctor_address', $data['family_doctor_address'] ); }
		   if(isset($data['doctor_contact_no'])){User_data::set_meta_data( $client_id, 'doctor_contact_no', $data['doctor_contact_no'] ); }
		   if(isset($data['last_visit_to_doctor'])){User_data::set_meta_data( $client_id, 'last_visit_to_doctor', $data['last_visit_to_doctor'] ); }
		   if(isset($data['reason'])){User_data::set_meta_data( $client_id, 'reason', $data['reason'] ); }
		   if(isset($data['any_treatment_or_followup'])){User_data::set_meta_data( $client_id, 'any_treatment_or_followup', $data['any_treatment_or_followup'] ); }
		   if(isset($data['taking_any_medication'])){User_data::set_meta_data( $client_id, 'taking_any_medication', $data['taking_any_medication'] ); }
		   if(isset($data['father'])){User_data::set_meta_data( $client_id, 'father', $data['father'] ); }
		   if(isset($data['mother'])){User_data::set_meta_data( $client_id, 'mother', $data['mother'] ); }
		   if(isset($data['siblings'])){User_data::set_meta_data( $client_id, 'siblings', $data['siblings'] ); }
		   if(isset($data['alcohol_smoking'])){User_data::set_meta_data( $client_id, 'alcohol_smoking', $data['alcohol_smoking'] ); }
		   if(isset($data['any_criminal_offence'])){User_data::set_meta_data( $client_id, 'any_criminal_offence', $data['any_criminal_offence'] ); }
		   if(isset($data['any_risk_activity'])){User_data::set_meta_data( $client_id, 'any_risk_activity', $data['any_risk_activity'] ); }
		   if(isset($data['Bank_ruptcy'])){User_data::set_meta_data( $client_id, 'Bank_ruptcy', $data['Bank_ruptcy'] ); }
		   if(isset($data['traffic_ticket'])){User_data::set_meta_data( $client_id, 'traffic_ticket', $data['traffic_ticket'] ); }
			if(isset($data['driver_licence_suspended'])){User_data::set_meta_data( $client_id, 'driver_licence_suspended', $data['driver_licence_suspended'] ); }
		   if(isset($data['going_out_of_country'])){User_data::set_meta_data( $client_id, 'going_out_of_country', $data['going_out_of_country'] ); }
		   if(isset($data['company'])){User_data::set_meta_data( $client_id, 'company', $data['company'] ); }
		   if(isset($data['policy'])){User_data::set_meta_data( $client_id, 'policy', $data['policy'] ); }
		   if(isset($data['issue_year'])){User_data::set_meta_data( $client_id, 'issue_year', $data['issue_year'] ); }
		   if(isset($data['benificiary_name'])){User_data::set_meta_data( $client_id, 'benificiary_name', $data['benificiary_name'] ); }
		   if(isset($data['trustee'])){User_data::set_meta_data( $client_id, 'trustee', $data['trustee'] ); }
		   if(isset($data['angina_heart_attack'])){User_data::set_meta_data( $client_id, 'angina_heart_attack', $data['angina_heart_attack'] ); }
		   if(isset($data['Diabieties'])){User_data::set_meta_data( $client_id, 'Diabieties', $data['Diabieties'] ); }
		   if(isset($data['Hepatitis'])){User_data::set_meta_data( $client_id, 'Hepatitis', $data['Hepatitis'] ); }
		   if(isset($data['Cerebral_Vascular_Stroke'])){User_data::set_meta_data( $client_id, 'Cerebral_Vascular_Stroke', $data['Cerebral_Vascular_Stroke'] ); }
		   if(isset($data['Major_Dipression'])){User_data::set_meta_data( $client_id, 'Major_Dipression', $data['Major_Dipression'] ); }
		   if(isset($data['Bipolar_Disorder'])){User_data::set_meta_data( $client_id, 'Bipolar_Disorder', $data['Bipolar_Disorder'] ); }
		   if(isset($data['Cronic_Obstructive'])){User_data::set_meta_data( $client_id, 'Cronic_Obstructive', $data['Cronic_Obstructive'] ); }
		   if(isset($data['Crohns_Disease'])){User_data::set_meta_data( $client_id, 'Crohns_Disease', $data['Crohns_Disease'] ); }
		   if(isset($data['Cancer_Malign'])){User_data::set_meta_data( $client_id, 'Cancer_Malign', $data['Cancer_Malign'] ); }
		   if(isset($data['Have_you_been_hospitialized'])){User_data::set_meta_data( $client_id, 'Have_you_been_hospitialized', $data['Have_you_been_hospitialized'] ); }
		   if(isset($data['followed_for_another_illness'])){User_data::set_meta_data( $client_id, 'followed_for_another_illness', $data['followed_for_another_illness'] ); }
		   if(isset($data['Disability_or_absence_from_work'])){User_data::set_meta_data( $client_id, 'Disability_or_absence_from_work', $data['Disability_or_absence_from_work'] ); }
					  
       

            if( isset( $client_id ) )  {
                    $response['flag'] = 1;
                    $response['message'] = 'Successfully added.';
            }  else  {
                    $response['flag'] = 0;
                    $response['message'] = 'Unable to add.';
            }
    
        echo json_encode( $response );

        
    }
	
	
	
    public function view_client_details()
    {
		global $cidb;
        $response = array();
       $data = $this->input->post();
     
        // validations
      
        
      if( isset( $data['user_id'] ) && !empty($data['user_id'] ))  {
		   
		 
                    $response['flag'] = 1;
                    $response['client_data'] = User_data::get_meta_data( $data['user_id']); 
            }  else  {
                    $response['flag'] = 0;
					$response['message'] = 'Invalid Request';
            }
    
        echo json_encode( $response );
		

    }

    public function view_client()
    {
        global $cidb;
		$data = $this->input->post();
        
        $response = array(); 
    
        if (isset($data) && !empty($data) && !empty($data['user_id'])) 
        {
			 $response['flag'] = 1;
			$response['client_data'] = get_clients_by_user_id( $data['user_id'] ); 
			
		}
		else  {
                    $response['flag'] = 0;
					$response['message'] = 'Invalid Request';
            }
    
        echo json_encode( $response );

    }

    public function login()
    {
        $data = $this->input->post();
        
        $response = array(); 
    
        if (isset($data) && !empty($data) && !empty($data['email']) && !empty($data['password'])) 
        {

                //if the login is successful
                $record = array(
				"email" => $data['email'],
				"password" => md5($data['password']),
				);
				$query = $this->db->get_where("users",$record);
                $result = $query->row_array();

				$user_details_data    = array('device_token' => isset($data['device_id']) ? $data['device_id'] : '', 
                                            'last_login_datetime' => date('Y-m-d H:i:s'),
                                            'is_logged_in'  => 1
                    );
                //Update user record
                $this->edit_record('users',$user_details_data  , $result["id"], 'id');
				
					
                $user_info = array(
                                "id" => $result["id"],
                                "email" => $result["email"],
								"password" => $result["password"],
                                "user_role" => $result["user_role"],
                                "team_name" => $result["team_name"],
                                "created_on" => $result["created_on"],
                            ); 
			if(($user_info['email'] == $data['email']) && $user_info['password'] ==  md5($data['password']))
			{	
		
				$response['flag'] = 1;
				$response['user_data'] = $user_info;
				$response['message'] = "Successfully logged in";
			}
			else{
				
				$response['flag']= 0;
				$response['message'] = "invalid email or password";
			}
        }
        else
        {
            $response['flag'] = 0;
            $response['message'] = 'Invalid Request';
        }
        echo json_encode($response);
    }

    public function logout()
    {
      $id = $this->input->post('user_id');
       if(!empty($id))
       {

            $this->load->model("Model_api");
            $result = $this->Model_api->logout($id);
            if(($result)){
              $response['flag'] = 1;
              $response['message'] = 'Logout Successfully';
            }else
            {
              $response['flag'] = 0;
              $response['message'] = 'Logout Problem!';
            }
       }
       else
       {
           $response['flag'] = 0;
           $response['message'] = 'Logout Problem!';
       }
       echo json_encode($response);
       
    }

     public function forgot_password()
    {
        $data = $this->input->post();
        $resonse = array(); 
        $flag = 0;
        if (!empty($data) && !empty($data['email'])) 
        {
            // $data = $this->input->post();
             
            $user = $this->db->get_where ("users", array("email" => $data['email'], "status" => 0));
            $user_data = $user->row_array();
            
            if ($user_data) 
            { 
                $this->load->helper('string');
                $user_data['new_password'] = random_string('alnum',8);;
                //Update new password in db
                $hashed_password = md5($user_data['new_password']);
                $query = $this->db->update('users', ['password' => $hashed_password], ['id' => $user_data['id']]);
                // $this->edit_record('users', $updated_data, $user_data['id'], 'id');
                        
                //Send an email
                $to = $user_data['email'];
                $subject = "Forgot Password";
                $email_template = "forgot_password_email";
                $this->send_email($user_data['email'], $subject, $email_template, $user_data);
                
                //Response
                $response['flag'] = 1;
                $response['message'] = 'Your temporary password has been sent to your registered email. Please be sure to check your Spam/ Junk box'; 
            }
            else 
            {
                $response['flag'] = 0;
                $response['message'] = 'Invalid email'; 
            }
        }
        else
        {
            $response['flag'] = 0;
            $response['user_data'] = array();
            $response['message'] = 'Invalid Request';
        }
        echo json_encode($response);
    }
	
	
	
	 public function view_events()
    {
        $response = array();
        $this->load->model('Model_api');
        $response = array();
        $data = $this->Model_api->events_view();
        

    }

    public function view_events_details()
    {
        $response = array();
        $this->load->model('Model_api');
        $data = $this->input->post();
        if (!empty($data) && !empty($data['event_id'])) 
        {
            $this->Model_api->events_view_details($data);
        }
        

    }
	
	  public function view_forms()
    {
        $response = array();
        $this->load->model('forms_model');
        $response = array();
        $data = $this->forms_model->get_forms();
        if($data){
            $response['flag'] = 0;
            $response['forms'] = $data;
            $response['fileUrl'] = base_url().'assets/dist/img/forms';
            $response['message'] = 'Invalid Request';
        }else{
            $response['flag'] = 0;
            $response['forms'] = array();
            $response['fileUrl'] = base_url().'assets/dist/img/forms';
            $response['message'] = 'Invalid Request';
        }
        echo json_encode($response, true);
        

    }

      public function send_email($to, $subject, $email_template, $data) 
      {
          $data ["email_data"] = $data;
          $html_email = $this->load->view($email_template, $data, true);
            //echo $html_email; exit; 
          $this->email->mailtype = "html";
          $this->email->from('noreply@admin.com', 'GWFG');  
          $this->email->to($to);        
          $this->email->subject($subject);
          $this->email->message($html_email);           
          $this->email->send();
      }



      public function add_team() {
        global $cidb;

        $data = $this->input->post();

        if ( empty( $data ) ) {
          $this->return( 'Invalid Data' );
          return;
        }


        // If email empty or not valid
        if ( empty( $data['email'] ) || ! filter_var( $data['email'], FILTER_VALIDATE_EMAIL ) ) {
          $this->return( 'Invalid Email' );
          return;
        }

        // Auto genrated password
        $password = uniqid();

        // Insert data into database
        $user_id = $cidb->insert( 'users', array(
          'user_role'  => $data['role'],
          'password'   => md5( $password ),
          'email'      => $data['email'],
          'status'     => '1',
        ) );

        // add user meta data
        User_data::set_meta_data( $user_id, 'created_by', $data['current_user_id'] );

        // Send email
        $mail_data = array(
          'email'     => $data['email'],
          'password'  => $password,
        );

        $message = $this->load->view('mail/register', $mail_data, TRUE);
        Mail::send( $data['email'], 'Welcome to the world', $message );

        // Team member created message
        $return_data = array(
          'id' => $user_id,
        );
        $this->return( 'Successfully', '1', $return_data );

      }


      public function appointment_list_by_user_id() {
        global $cidb;

        $data = $this->input->post();

        if ( empty( $data ) ) {
          $this->return( 'Invalid Data' );
          return;
        }

        $appointment =  $cidb->get_all_where( 'appointments', array( 'smd_id' => $data['id'] ) ); 

        if ( empty( $appointment ) ) {
          $this->return( 'No Appointment' );
          return;
        }

        // Team member created message
        $return_data = array(
          'appointment' => $appointment,
        );
        $this->return( 'Successfully', '1', $return_data );

      }

      public function appointment_list_by_date() {
        global $cidb;

        $data = $this->input->post();

        if ( empty( $data ) ) {
          $this->return( 'Invalid Data' );
          return;
        }

        $appointment =  $cidb->get_all_where( 'appointments', array( 'appointment_date' => $data['date'] ) );

        if ( empty( $appointment ) ) {
          $this->return( 'No Appointment' );
          return;
        }

        // Team member created message
        $return_data = array(
          'appointment' => $appointment,
        );
        $this->return( 'Successfully', '1', $return_data );

      }


      public function appointment_list_by_month() {
        global $cidb;

        $data = $this->input->get();

        if ( empty( $data ) ) {
          $this->return( 'Invalid Data' );
          return;
        }

        $appointment =  $cidb->get_results( "SELECT * FROM appointments WHERE appointment_date LIKE '___".$data['month']."'" );

        if ( empty( $appointment ) ) {
          $this->return( 'No Appointment' );
          return;
        }

        // Team member created message
        $return_data = array(
          'appointment' => $appointment,
        );
        $this->return( 'Successfully', '1', $return_data );

      }



      public function return( $message, $flag = '0', $data = '' ) {
        $response['flag'] = $flag;

        if ( ! empty( $data ) )
          $response['data'] = $data;
        
        $response['message'] = $message;
        echo json_encode($response);
      }


	public function mortgage_renewal()
	{
		
		$data = $this->input->post();
        
        $response = array(); 
    
        if ((isset($data)) && !empty($data) && !empty($data['login_id']) && !empty($data['date']) && !empty($data['client_id']))
        {
			$sql = array(
			'user_id' => $data['login_id'],
			'client_id' => $data['client_id'],
			'date' => date('Y-m-d',$data['date']),
			);
			
			$query = $this->db->insert('mortgage_renewal',$query);
			if($query)
			{
				$response['flag'] = 1;
				$response['message`'] = 'succeffuly added'; 
			}
			else
			{
				
				$response['flag'] = 0;
				$response['message'] = 'unable to add ';
			}
		}
		else  
		{
			$response['flag'] = 0;
			$response['message'] = 'Invalid Request';
		}
    
        echo json_encode( $response );
		
	}
	
	public function add_appointment() {

     global $cidb;

     $data = $this->input->post();

     if ( empty($data) && empty($data['smd_id']))  {
         $response = array(
             'flag' => 0,
             'message' => 'Invalid Request',
         );
         echo json_encode($response);
         return;
     }


     $appointment = $cidb->insert( 'appointments',
         array(
             'smd_id'                    => $data['smd_id'],
             'appointment_date'          => $data['appointment_date'],
             'appointment_start_time'    => $data['appointment_start_time'],
             'appointment_end_time'      => $data['appointment_end_time'],
             'reminder'                  => $data['reminder'],
             'client_name'               => $data['client_name'],
             'client_contact'            => $data['client_contact'],
             'client_location'           => $data['client_location'],
             'client_policy'             => $data['client_policy'],
             'description'               => $data['description'],
         )
     );

     
     $response = array(
         'flag' => 1,
         'message' => 'Successfully',
         'appointment_id' => $appointment,
     );
     echo json_encode($response);

   }



   public function get_appointment() {

     global $cidb;

     $data = $this->input->post();

     if ( empty($data) )  {
         $response = array(
             'flag' => 0,
             'message' => 'Invalid Request',
         );
         echo json_encode($response);
         return;
     }


     $appointment['flag'] = '1';
     $appointment['message'] = 'Successfully';
     $appointment['data'] = $cidb->get_row( 'appointments',
                                         array(
                                             'id' => $data['id'],
                                         )
                                     );


     echo json_encode($appointment);

   }
 


    public function get_appointment_by_smd() {

      global $cidb;

      $data = $this->input->post();

      if ( empty($data) )  {
          $response = array(
              'flag' => 0,
              'message' => 'Invalid Request',
          );
          echo json_encode($response);
          return;
      }


      $appointment['flag'] = '1';
      $appointment['message'] = 'Successfully';
      $appointment['data'] = $cidb->get_all_where( 'appointments',
                                          array(
                                              'smd_id' => $data['smd_id'],
                                          )
                                      );


      echo json_encode($appointment);

    }

	public function profile()
	
	{
		$response = array();
		$data = $this->input->post();
		if(isset($data) && !empty($data) && !empty($data['user_id']))
		{
			$image = User_data::get_meta_data($data['user_id'],'image');
			$response['flag'] = 1;
			$response['data'] = User_data::get_meta_data($data['user_id']);
			$response['image_path'] = base_url().'assets/dist/img/'.$image;
		}
		else{
			$response['flag'] = 0;
			$response['message'] = ' invalid data';
		}
		echo json_encode($response);
	}
	
} // end class


