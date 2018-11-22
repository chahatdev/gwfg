<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Client extends CI_Controller {
    
    public function client_show()
    {
        global $cidb;

        $this->load->library('form_validation');
        $this->form_validation->set_rules('email','Email','required|trim|valid_email|is_unique[add_client.email]');
        $this->form_validation->set_rules('first_name','First Name','required');
        $this->form_validation->set_rules('last_name','Last Name','required');
        $this->form_validation->set_rules('contact','Contact','required');

        $this->form_validation->set_message('is_unique',"This Email already Exists");
        if($this->form_validation->run())
        {
            if(isset($_POST) && !empty($_POST))
            {

                // Current logged in user id
                $current_user_id = $this->session->userdata( 'user_id' );

                $first_name = $this->input->post( 'first_name' );
                $last_name = $this->input->post( 'last_name' );
                $email = $this->input->post( 'email' );
                $contact = $this->input->post( 'contact' );

                $client_add_type = $this->input->post( 'client_add_type' );



                if ( isset( $_POST['client_id'] ) ) {
                    $client_id = $_POST['client_id'];
                } else {
                    $client_id = $cidb->insert( 'users', 
                        array( 
                            'email' => $email,
                            'password' => md5( '12345' ),
                            'user_role' => '5',
                            'status' => '1', 
                        ) 
                  );      
                }

                User_data::set_meta_data( $client_id, 'first_name', $first_name );
                User_data::set_meta_data( $client_id, 'last_name', $last_name );
                User_data::set_meta_data( $client_id, 'date_of_birth', $this->input->post( 'date_of_birth' ) );
                User_data::set_meta_data( $client_id, 'country_of_birth', $this->input->post( 'country_of_birth' ) );
                User_data::set_meta_data( $client_id, 'social_insurance_no', $this->input->post( 'social_insurance_no' ) );
                User_data::set_meta_data( $client_id, 'driver_licence_no', $this->input->post( 'driver_licence_no' ) );
                User_data::set_meta_data( $client_id, 'driver_licence_expiry', $this->input->post( 'driver_licence_expiry' ) );
                User_data::set_meta_data( $client_id, 'home_address', $this->input->post( 'home_address' ) );
                User_data::set_meta_data( $client_id, 'years_at_current_address', $this->input->post( 'years_at_current_address' ) );
                User_data::set_meta_data( $client_id, 'total_years_in_canada', $this->input->post( 'total_years_in_canada' ) );
                User_data::set_meta_data( $client_id, 'residency_status', $this->input->post( 'residency_status' ) );
                User_data::set_meta_data( $client_id, 'occupation', $this->input->post( 'occupation' ) );
                User_data::set_meta_data( $client_id, 'employee_name', $this->input->post( 'employee_name' ) );
                User_data::set_meta_data( $client_id, 'employee_address', $this->input->post( 'employee_address' ) );
                User_data::set_meta_data( $client_id, 'employee_since_when', $this->input->post( 'employee_since_when' ) );
                User_data::set_meta_data( $client_id, 'duties', $this->input->post( 'duties' ) );
                User_data::set_meta_data( $client_id, 'employer_contact_no', $this->input->post( 'employer_contact_no' ) );
                User_data::set_meta_data( $client_id, 'gross_income', $this->input->post( 'gross_income' ) );
                User_data::set_meta_data( $client_id, 'height_and_any_change', $this->input->post( 'height_and_any_change' ) );
                User_data::set_meta_data( $client_id, 'weight_and_any_change', $this->input->post( 'weight_and_any_change' ) );
                User_data::set_meta_data( $client_id, 'family_doctor_name', $this->input->post( 'family_doctor_name' ) );
                User_data::set_meta_data( $client_id, 'family_doctor_address', $this->input->post( 'family_doctor_address' ) );
                User_data::set_meta_data( $client_id, 'doctor_contact_no', $this->input->post( 'doctor_contact_no' ) );
                User_data::set_meta_data( $client_id, 'last_visit_to_doctor', $this->input->post( 'last_visit_to_doctor' ) );
                User_data::set_meta_data( $client_id, 'reason', $this->input->post( 'reason' ) );
                User_data::set_meta_data( $client_id, 'any_treatment_or_followup', $this->input->post( 'any_treatment_or_followup' ) );
                User_data::set_meta_data( $client_id, 'taking_any_medication', $this->input->post( 'taking_any_medication' ) );
                
				User_data::set_meta_data( $client_id, 'family_history_father', $this->input->post( 'family_history_father' ) );
				User_data::set_meta_data( $client_id, 'family_history_mother', $this->input->post( 'family_history_mother' ) );
				User_data::set_meta_data( $client_id, 'family_history_siblings', $this->input->post( 'family_history_siblings' ) );
				
                User_data::set_meta_data( $client_id, 'alcohol_smoking', $this->input->post( 'alcohol_smoking' ) );
                User_data::set_meta_data( $client_id, 'any_criminal_offence', $this->input->post( 'any_criminal_offence' ) );
                User_data::set_meta_data( $client_id, 'any_risk_activity', $this->input->post( 'any_risk_activity' ) );
                User_data::set_meta_data( $client_id, 'Bank_ruptcy', $this->input->post( 'Bank_ruptcy' ) );
                User_data::set_meta_data( $client_id, 'traffic_ticket', $this->input->post( 'traffic_ticket' ) );
                User_data::set_meta_data( $client_id, 'driver_licence_suspended', $this->input->post( 'driver_licence_suspended' ) );
                User_data::set_meta_data( $client_id, 'going_out_of_country', $this->input->post( 'going_out_of_country' ) );
				
                User_data::set_meta_data( $client_id, 'insurance_history_company', $this->input->post( 'insurance_history_company' ) );
				User_data::set_meta_data( $client_id, 'insurance_history_policy', $this->input->post( 'insurance_history_policy' ) );
				User_data::set_meta_data( $client_id, 'insurance_history_issue_year', $this->input->post( 'insurance_history_issue_year' ) );
                
				User_data::set_meta_data( $client_id, 'benefixiary_name', $this->input->post( 'benefixiary_name' ) );
                User_data::set_meta_data( $client_id, 'trustee', $this->input->post( 'trustee' ) );
                User_data::set_meta_data( $client_id, 'contact', $contact );
				
				User_data::set_meta_data( $client_id, 'Angina_Heart_attack', $this->input->post( 'Angina_Heart_attack' ) );
				User_data::set_meta_data( $client_id, 'diabieties', $this->input->post( 'diabieties' ) );
				User_data::set_meta_data( $client_id, 'hepatitis', $this->input->post( 'hepatitis' ) );
				User_data::set_meta_data( $client_id, 'vascular_stroke', $this->input->post( 'vascular_stroke' ) );
				User_data::set_meta_data( $client_id, 'depression', $this->input->post( 'depression' ) );
				User_data::set_meta_data( $client_id, 'bipolar_disorder', $this->input->post( 'bipolar_disorder' ) );
				User_data::set_meta_data( $client_id, 'cronic_obstructive', $this->input->post( 'cronic_obstructive' ) );
				User_data::set_meta_data( $client_id, 'crohn_disease', $this->input->post( 'crohn_disease' ) );
				User_data::set_meta_data( $client_id, 'cancer', $this->input->post( 'cancer' ) );
				User_data::set_meta_data( $client_id, 'disability', $this->input->post( 'disability' ) );
				
				User_data::set_meta_data( $client_id, 'hospitalized', $this->input->post( 'hospitalized' ) );
				User_data::set_meta_data( $client_id, 'hospitalized_date', $this->input->post( 'hospitalized_date' ) );
				User_data::set_meta_data( $client_id, 'hospital_name', $this->input->post( 'hospital_name' ) );
				
				User_data::set_meta_data( $client_id, 'illness', $this->input->post( 'illness' ) );
				User_data::set_meta_data( $client_id, 'ill_date', $this->input->post( 'ill_date' ) );
				User_data::set_meta_data( $client_id, 'ill_hospital_name', $this->input->post( 'ill_hospital_name' ) );
				
				User_data::set_meta_data( $client_id, 'id_proof', $this->input->post( 'id_proof' ) );
				User_data::set_meta_data( $client_id, 'residency_proof', $this->input->post( 'residency_proof' ) );
                User_data::set_meta_data( $client_id, 'viod_proof', $this->input->post( 'viod_proof' ) );
                User_data::set_meta_data( $client_id, 'medication_proof', $this->input->post( 'medication_proof' ) );
                User_data::set_meta_data( $client_id, 'conclusion_proof', $this->input->post( 'conclusion_proof' ) );
                
				$client_policies = implode(',',$_POST['client_policies']);
                
                if(!empty($client_policies)) {
				    User_data::set_meta_data( $client_id, 'client_policies', $client_policies);
				}
				
                User_data::set_meta_data( $client_id, 'add_child', $this->input->post( 'add_child' ) );
				
				//$child_form_data1 = serialize($this->input->post( 'child_form_data' ));
				//User_data::set_meta_data( $client_id, 'child_form_data1', $child_form_data1);
				/*echo "<pre>";
                print_r($this->input->post( 'child_form_data' ));
                echo "</pre>";
                exit;*/

				$child_form_data = json_encode($this->input->post( 'child_form_data' ));
				User_data::set_meta_data( $client_id, 'child_form_data', $child_form_data);


				
                if ( $client_add_type == 'directly' ) {
                    User_data::set_meta_data( $client_id, 'created_by', $current_user_id );
                }

                if ( $client_add_type == 'assigned' ) {
                    $assigned_to = $this->input->post( 'assigned_to' );
                    User_data::set_meta_data( $client_id, 'created_by', $assigned_to );
                }

                

                redirect( base_url( 'client/client_view' ) );


            }
            else 
            {
                echo "problem added data";
            }
        }
        else
        {
				$content = array('content'=>'add_client');
             $this->load->view('layout/main', $content);
        }
       
           
    }
    
    public function client_view(){
        
        global $cidb;

        $content['all_clients'] = $cidb->get_results( "SELECT id FROM users WHERE user_role = 5"  );
        $content['content'] = 'view_client';
        $this->load->view('layout/main', $content);
      
    }
    





    public function do_add_client() {
        global $cidb;

        // Current logged in user id
        $current_user_id = $this->session->userdata( 'user_id' );

        $first_name = $this->input->post( 'first_name' );
        $last_name = $this->input->post( 'last_name' );
        $email = $this->input->post( 'email' );
        $contact = $this->input->post( 'contact' );


        $client_id = $cidb->insert( 'users', 
            array( 
                'email' => $email,
                'password' => md5( '12345' ),
                'user_role' => '5',
                'status' => '1', 
            ) 
        );

        User_data::set_meta_data( $client_id, 'first_name', $first_name );
        User_data::set_meta_data( $client_id, 'last_name', $last_name );
        User_data::set_meta_data( $client_id, 'date_of_birth', $this->input->post( 'date_of_birth' ) );
        User_data::set_meta_data( $client_id, 'country_of_birth', $this->input->post( 'country_of_birth' ) );
        User_data::set_meta_data( $client_id, 'social_insurance_no', $this->input->post( 'social_insurance_no' ) );
        User_data::set_meta_data( $client_id, 'driver_licence_no', $this->input->post( 'driver_licence_no' ) );
        User_data::set_meta_data( $client_id, 'driver_licence_expiry', $this->input->post( 'driver_licence_expiry' ) );
        User_data::set_meta_data( $client_id, 'home_address', $this->input->post( 'home_address' ) );
        User_data::set_meta_data( $client_id, 'years_at_current_address', $this->input->post( 'years_at_current_address' ) );
        User_data::set_meta_data( $client_id, 'total_years_in_canada', $this->input->post( 'total_years_in_canada' ) );
        User_data::set_meta_data( $client_id, 'residency_status', $this->input->post( 'residency_status' ) );
        User_data::set_meta_data( $client_id, 'occupation', $this->input->post( 'occupation' ) );
        User_data::set_meta_data( $client_id, 'employee_name', $this->input->post( 'employee_name' ) );
        User_data::set_meta_data( $client_id, 'employee_address', $this->input->post( 'employee_address' ) );
        User_data::set_meta_data( $client_id, 'employee_since_when', $this->input->post( 'employee_since_when' ) );
        User_data::set_meta_data( $client_id, 'duties', $this->input->post( 'duties' ) );
        User_data::set_meta_data( $client_id, 'employer_contact_no', $this->input->post( 'employer_contact_no' ) );
        User_data::set_meta_data( $client_id, 'gross_income', $this->input->post( 'gross_income' ) );
        User_data::set_meta_data( $client_id, 'height_and_any_change', $this->input->post( 'height_and_any_change' ) );
        User_data::set_meta_data( $client_id, 'weight_and_any_change', $this->input->post( 'weight_and_any_change' ) );
        User_data::set_meta_data( $client_id, 'family_doctor_name', $this->input->post( 'family_doctor_name' ) );
        User_data::set_meta_data( $client_id, 'family_doctor_address', $this->input->post( 'family_doctor_address' ) );
        User_data::set_meta_data( $client_id, 'doctor_contact_no', $this->input->post( 'doctor_contact_no' ) );
        User_data::set_meta_data( $client_id, 'last_visit_to_doctor', $this->input->post( 'last_visit_to_doctor' ) );
        User_data::set_meta_data( $client_id, 'reason', $this->input->post( 'reason' ) );
        User_data::set_meta_data( $client_id, 'any_treatment_or_followup', $this->input->post( 'any_treatment_or_followup' ) );
        User_data::set_meta_data( $client_id, 'taking_any_medication', $this->input->post( 'taking_any_medication' ) );
        User_data::set_meta_data( $client_id, 'family_history', $this->input->post( 'family_history' ) );
        User_data::set_meta_data( $client_id, 'alcohol_smoking', $this->input->post( 'alcohol_smoking' ) );
        User_data::set_meta_data( $client_id, 'any_criminal_offence', $this->input->post( 'any_criminal_offence' ) );
        User_data::set_meta_data( $client_id, 'any_risk_activity', $this->input->post( 'any_risk_activity' ) );
        User_data::set_meta_data( $client_id, 'Bank_ruptcy', $this->input->post( 'Bank_ruptcy' ) );
        User_data::set_meta_data( $client_id, 'traffic_ticket', $this->input->post( 'traffic_ticket' ) );
        User_data::set_meta_data( $client_id, 'driver_licence_suspended', $this->input->post( 'driver_licence_suspended' ) );
        User_data::set_meta_data( $client_id, 'going_out_of_country', $this->input->post( 'going_out_of_country' ) );
        User_data::set_meta_data( $client_id, 'insurance_history', $this->input->post( 'insurance_history' ) );
        User_data::set_meta_data( $client_id, 'benefixiary_name', $this->input->post( 'benefixiary_name' ) );
        User_data::set_meta_data( $client_id, 'trustee', $this->input->post( 'trustee' ) );
        User_data::set_meta_data( $client_id, 'contact', $contact );

        User_data::set_meta_data( $client_id, 'created_by', $current_user_id );


        redirect( base_url( 'client/client_view' ) );

    }


    public function delete( $client_id ) {
        User_data::user_delete( $client_id );
        redirect( $_SERVER['HTTP_REFERER'] );
    }


    public function edit( $client_id ) {
        global $cidb;
        $content['client'] = $cidb->get_row( 'users', array( 'id' => $client_id ) );
        $content['client_meta'] = User_data::get_meta_data( $client_id );
        $content['content'] = 'client/edit';
        $this->load->view('layout/main', $content);
    }



}

