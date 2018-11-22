<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Forms extends CI_Controller {

        
  public function event_detail()
  {
	 
     $content = array('content'=>'event_detail');
            
             $this->load->view('layout/main', $content);

  }  

  public function add_forms()
  {
    

    $content = array('content'=>'forms/add_forms');
            $this->load->view('layout/main', $content);

  }

  public function form_submit(){

    $this->load->model('forms_model');
    $data = $this->input->post();
    
    if (!empty($data['title'])) 
    {
      $banner_image=array();
       $config=[
            'upload_path'=>'./assets/dist/img/forms',
            'allowed_types'=>'pdf|PDF',
            'encrypt_name'=>true
          ];
          $files = $_FILES;
       $this->load->library('upload', $config);
       if($this->upload->do_upload('file')==true){

        $fileInfo = $this->upload->data();

        $insertData=array('title'=>$data['title'],
                          'file'=>$fileInfo['file_name']
                          );

        $result = $this->forms_model->insert($insertData);
        if($result=="done"){
         $content = array('content'=>'forms/add_forms', 'result'=>'done');
          $this->load->view('layout/main', $content);
        }else{
          $content = array('content'=>'forms/add_forms', 'result'=>'ndone');
          $this->load->view('layout/main', $content);
        }
      }else{
        $error = array('error' => $this->upload->display_errors());
        $this->session->set_flashdata('error',$error['error']);
        redirect('forms/add_forms');
      }
    }else{
	   redirect('forms/add_forms');
    }
  }
        
		
		
  public function view_forms()
  {
    $this->load->model('forms_model');
    $data = array();
    if($row = $this->forms_model->get_forms())
    {
	
      $data['record'] = $row;
      $content = array('content'=>'forms/view_forms', 'record'=>$row);
            $this->load->view('layout/main', $content);
            //print_r($row);
  	}

  	else{
  	echo "no record found";
  	}
  }


  public function delete($id)
  {
    $this->load->model('forms_model');
    $data = $this->input->post();
    
    if (!empty($id)) 
    {
      $result = $this->forms_model->delete($id, $data);
      $row = $this->forms_model->get_forms();
      if($result=="done"){
       $content = array('content'=>'forms/view_forms', 'result'=>'done', 'record'=> $row);
        $this->load->view('layout/main', $content);
      }else{
        $content = array('content'=>'forms/view_forms', 'result'=>'ndone', 'record'=> $row);
        $this->load->view('layout/main', $content);
      }
    }else{
     redirect('forms/view_forms');
    }
  }



}
