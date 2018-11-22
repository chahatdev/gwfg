<?php

class Event_model extends CI_Model 
{
    public function __construct()
    {
        $this->load->database();
    }
    public function get_event()
     {
          $result = $this->db->select('*')
                    ->from('events')
                    ->get()->result_array();
          return $result;
     }
     
     
     function get($id)
    {
        $query = $this->db->get_where("events",array("id" => $id));
        return $query->row_array();		  
    }

    public function insert($data){

       $banner_image=array();
       $config=[
            'upload_path'=>'./assets/dist/img/events',
            'allowed_types'=>'jpg|png|jpeg',
            'encrypt_name'=>true
          ];
          $files = $_FILES;
       $this->load->library('upload', $config);
       for($i=0;$i<sizeof($files['banner_image']['name']);$i++) {
          $_FILES = array();

        foreach( $files['banner_image'] as $k=>$v )
        {

          $_FILES['banner_image'][$k] = $v[$i];
        }
        $this->upload->do_upload('banner_image');

        $fileInfo = $this->upload->data();

         $banner_image[] = array('banner_image' => $fileInfo['file_name'],
                                  'heading' => $data['heading'][$i],
                                  'subHeading' => $data['subHeading'][$i],
                                  'dateLocation' => $data['dateLocation'][$i]
                                );
       }

       $guest_speakers=array();

       for($i=0;$i<sizeof($files['gImage']['name']);$i++) {
        $_FILES = array();

        foreach( $files['gImage'] as $k=>$v )
        {
          $_FILES['gImage'][$k] = $v[$i];
        }

        $this->upload->do_upload('gImage');

        $fileInfo = $this->upload->data();

         $guest_speakers[] = array('gImage' => $fileInfo['file_name'],
                                  'gName' => $data['gName'][$i],
                                  'designation' => $data['designation'][$i]
                                );
       }

       $ticket=array();
       for($i=0;$i<sizeof($data['ticketType']);$i++) {

         $ticket[] = array('ticketType' => $data['ticketType'][$i],
                                  'price' => $data['price'][$i],
                                  'description' => $data['description'][$i]
                                );
       }

       $record = array('event_name' => $data['event_name'],
                        'date' => $data['date'],
                        'time' => $data['time'],
                        'aboutText' => $data['aboutText'],
                        'vLocation' => $data['vLocation'],
                        'vPhone' => $data['vPhone'],
                        'vEmail' => $data['vEmail'],
                        'vMap' => $data['vMap'],
                        'vWeb' => $data['vWeb'],
                        'bannres ' => json_encode($banner_image, true),
                        'speakers' => json_encode($guest_speakers, true),
                        'ticket' => json_encode($ticket, true),
                        // 'publish' => $data['publish'],
                        );
       
      $query = $this->db->insert('events',$record);
      if($query){
        return "done";
      }
    }



    public function update($id, $data){
      // print_r($data);
       $config=[
            'upload_path'=>'./assets/dist/img/events',
            'allowed_types'=>'jpg|png|jpeg',
            'encrypt_name'=>true
          ];
       $banner_image=array();
          $files = $_FILES;
       $this->load->library('upload', $config);
       for($i=0;$i<sizeof($files['banner_image']['name']);$i++) {
          $_FILES = array();

        foreach( $files['banner_image'] as $k=>$v )
        {

          $_FILES['banner_image'][$k] = $v[$i];
        }
        $this->upload->do_upload('banner_image');

        $fileInfo = $this->upload->data();
          if(!empty($_FILES['banner_image']['name'])){
            $imName = $fileInfo['file_name'];
          }else{
            $imName = $data['banner_image_old'][$i];
          }
         $banner_image[] = array('banner_image' => $imName,
                                  'heading' => $data['heading'][$i],
                                  'subHeading' => $data['subHeading'][$i],
                                  'dateLocation' => $data['dateLocation'][$i]
                                );
       }

       $guest_speakers=array();

       for($i=0;$i<sizeof($files['gImage']['name']);$i++) {
        $_FILES = array();

        foreach( $files['gImage'] as $k=>$v )
        {
          $_FILES['gImage'][$k] = $v[$i];
        }

        $this->upload->do_upload('gImage');

        $fileInfo = $this->upload->data();

        if(!empty($_FILES['gImage']['name'])){
            $imName = $fileInfo['file_name'];
          }else{
            $imName = $data['gImage_old'][$i];
          }

         $guest_speakers[] = array('gImage' => $imName,
                                  'gName' => $data['gName'][$i],
                                  'designation' => $data['designation'][$i]
                                );
       }

       $ticket=array();
       for($i=0;$i<sizeof($data['ticketType']);$i++) {

         $ticket[] = array('ticketType' => $data['ticketType'][$i],
                                  'price' => $data['price'][$i],
                                  'description' => $data['description'][$i]
                                );
       }


       $record = array('event_name' => $data['event_name'],
                        'date' => $data['date'],
                        'time' => $data['time'],
                        'aboutText' => $data['aboutText'],
                        'vLocation' => $data['vLocation'],
                        'vPhone' => $data['vPhone'],
                        'vEmail' => $data['vEmail'],
                        'vMap' => $data['vMap'],
                        'vWeb' => $data['vWeb'],
                        'bannres ' => json_encode($banner_image, true),
                        'speakers' => json_encode($guest_speakers, true),
                        'ticket' => json_encode($ticket, true),
                        // 'publish' => $data['publish'],
                        );
       
      $query = $this->db->update('events',$record, array('id' => $id));
      if($query){
        return "done";
      }
    }


    public function delete($id, $data){
      
       $record = array('isDeleted' => 1);
       
      $query = $this->db->update('events',$record, array('id' => $id));
      if($query){
        return "done";
      }
    }


    public function check_events($data)
    {
        $result = $this->db->select('*')
                        ->from('events', 0,1)
                        ->order_by("id", "DESC")
                        ->get()->row_array();
        return $result;
    }
}