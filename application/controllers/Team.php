<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Team extends CI_Controller {

	public function view() {
		$content['logged_in_id'] = $this->session->userdata( 'user_id' );
		$content['content'] = 'team/list';
		$this->load->view('layout/main', $content);

	}


	public function single( $user_id ) {
		$content['user_id'] = $user_id;
		$content['content'] = 'team/single';
		$this->load->view('layout/main', $content);
	}


	public function ressign( $user_id ) {

		$content['content'] = 'team/reassign';
		$content['user_id'] = $user_id;
		$this->load->view('layout/main', $content);

	} 


	public function change_team_name() {
			User_data::set_meta_data( $_POST['team_leader_id'], 'team_name', $_POST['team_name'] );
			redirect( $_SERVER['HTTP_REFERER'] );
	}


	public function delete_and_assign( $user_id, $assign_id = '' ) {

		global $cidb;

		// assing new user
		$assign_id = $_POST['assign_id'];

		User_data::user_delete( $user_id );

		$cidb->update( 'user_meta', 
			array( 'meta_value' => $assign_id ),
			array( 'meta_key' => 'created_by', 'meta_value' => $user_id )
		);
		

		redirect( base_url( 'team/list' ) );
	}
	
	public function profile($user_id) {

		$id = $this->session->userdata('user_id');
		$content['content'] = 'team/profile';
		$content['user_id'] = $user_id;
		$this->load->view('layout/main', $content);
		

	}
	
	public function add_profile($user_id)
	{
		$id = $this->session->userdata('user_id');
	  $first_name = $this->input->post('first_name');
	   $last_name = $this->input->post('last_name');
	   $phone = $this->input->post('phone');
	   
	  User_data::set_meta_data($user_id,'first_name',$first_name);
	  User_data::set_meta_data($user_id,'last_name',$last_name);
	  User_data::set_meta_data($user_id,'phone',$phone);
	  
	  
	    
	$config = array(
            'upload_path' => "assets/dist/img",
            'allowed_types' => "gif|jpg|png|jpeg|pdf",
            'max_height' => "768",
            'max_width' => "1024"
            );
			
    $this->load->library('upload', $config);
    $this->upload->initialize($config);
        if($this->upload->do_upload('image'))
           {
			   
                $data['image'] = array('upload_data' => $this->upload->data()); 
                print_r($image = $data['image']['upload_data']['file_name']);
              
				User_data::set_meta_data($user_id,'image',$image);
               
                
           }    
           else
           {
               $error = array('error' => $this->upload->display_errors()); 
         
           } 
		   redirect('team/profile/'.$id);
	   
	}
	
	public function get_profile($user_id)
	{
		$id = $this->session->userdata('user_id');
		$content['user_detail'] = User_data::get_meta_data($user_id);
		$content['content'] = 'team/profile';
		$content['user_id'] = $user_id;
		
		$this->load->view('layout/main', $content);
		
	}
 
	
} // .Team