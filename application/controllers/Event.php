<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Event extends CI_Controller {

        
  public function event_detail()
  {
	 
     $content = array('content'=>'event_detail');
            
             $this->load->view('layout/main', $content);

  }  

  public function add_events()
  {
    

    $content = array('content'=>'events/add_events');
            $this->load->view('layout/main', $content);

  }

  public function check_old_event()
  {
    
    $data = $this->input->post();
    $this->load->model('event_model');
    $result = $this->event_model->check_events($data);
    echo base_url("front/events/".($result['id']+1)."/" .strtolower(str_replace(' ', '-', $data['ename'])));
  }

  public function form_submit(){

    $this->load->model('event_model');
    $data = $this->input->post();
    
    if (!empty($data['event_name']) && !empty($data['date'] && !empty($data['time']))) 
    {
      $result = $this->event_model->insert($data);
      if($result=="done"){
       $content = array('content'=>'events/add_events', 'result'=>'done');
        $this->load->view('layout/main', $content);
      }else{
        $content = array('content'=>'events/add_events', 'result'=>'ndone');
        $this->load->view('layout/main', $content);
      }
    }else{
	   redirect('event/add_events');
    }
  }
        
		
		
  public function view_events()
  {
    $this->load->model('event_model');
    $data = array();
    if($row = $this->event_model->get_event())
    {
	
      $data['record'] = $row;
      $content = array('content'=>'events/view_events', 'record'=>$row);
            $this->load->view('layout/main', $content);
            //print_r($row);
  	}

  	else{
  	echo "no record found";
  	}
  }


  public function edit($id)
  {
    
    $this->load->model('event_model');
    $row = $this->event_model->get($id);
    $content = array('content'=>'events/edit_events', 'rowData'=> $row);
            $this->load->view('layout/main', $content);

  }


  public function update($id){

    $this->load->model('event_model');
    $data = $this->input->post();
    
    if (!empty($data['event_name']) && !empty($data['date'] && !empty($data['time']) && !empty($id))) 
    {
      $result = $this->event_model->update($id, $data);
      $row = $this->event_model->get($id);
      if($result=="done"){
       $content = array('content'=>'events/view_events', 'result'=>'done', 'rowData'=> $row);
        $this->load->view('layout/main', $content);
      }else{
        $content = array('content'=>'events/view_events', 'result'=>'ndone', 'rowData'=> $row);
        $this->load->view('layout/main', $content);
      }
    }else{
     redirect('event/edit');
    }
  }

  public function delete($id)
  {
    $this->load->model('event_model');
    $data = $this->input->post();
    
    if (!empty($id)) 
    {
      $result = $this->event_model->delete($id, $data);
      $row = $this->event_model->get_event();
      if($result=="done"){
       $content = array('content'=>'events/view_events', 'result'=>'done', 'record'=> $row);
        $this->load->view('layout/main', $content);
      }else{
        $content = array('content'=>'events/view_events', 'result'=>'ndone', 'record'=> $row);
        $this->load->view('layout/main', $content);
      }
    }else{
     redirect('event/view_events');
    }
  }

  public function events_front($id, $name)
  {
    $this->load->model('event_model');
    if($row = $this->event_model->get($id))
    {
      $data= array('data' => $row);

      if($row['isDeleted']==0){
        $this->load->view('fronted/events_frontend/index',  $data);
      }else{
        $this->load->view('fronted/events_frontend/404');
      }
    }
  }



}
