<?php

class Forms_model extends CI_Model 
{
    public function __construct()
    {
        $this->load->database();
    }
    public function get_forms()
     {
          $result = $this->db->select('*')
                    ->from('forms')
                    ->get()->result_array();
          return $result;
     }

    public function insert($data){
      $query = $this->db->insert('forms',$data);
      if($query){
        return "done";
      }
    }

    public function delete($id, $data){
      
       $record = array('isDeleted' => 1);
       
      $query = $this->db->update('forms',$record, array('id' => $id));
      if($query){
        return "done";
      }
    }

}