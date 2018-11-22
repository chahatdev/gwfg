<?php 
   Class model_users extends CI_Model { 
	
     public function can_login(){
         $this->db->where('email',$this->input->post('email'));
         $this->db->where('password', md5($this->input->post('password')));
         $query = $this->db->get('users');
         
         if($query->num_rows() == 1)
         {
             return true;
         }
         else
         {
             return false;
         }
     }
     
     
     public function add_temp_user($key)
     {
         $data = array(
             'temp_email' => $this->input->post('email'),
             'password' => rand(),
             'temp_key' => $key,
             'user_role'=> $this->input->post('user_role'),
         );
      
        $query = $this->db->insert('temp_users',$data);
        if($query){
            return true;
        }
        else
        {
            return false;
        }
     }
     
     
     
     public function is_valid_key($key)
     {
         $this->db->where('temp_key',$key);
         $query = $this->db->get('temp_users');
         if($query->num_rows() == 1){
            return true;
         }
         else
         {
             return false;
         }
     }
     
     
     public function add_user($key)
     {
         $this->db->where('temp_key',$key);
         $temp_user = $this->db->get('temp_users');
         
         if($temp_user){
             $row = $temp_user->row();
             
             $data = array(
                 'email' =>$row->temp_email,
                 'password'=>$row->password,
             );
             $did_add_user = $this->db->insert('users',$data);
             if($did_add_user){
               $this->db->where('temp_key',$key); 
               $this->db->delete('temp_users');
               return $data['email'];
         }
         else
         {
             return false;
         }
             
         }
         
         
     }
     
     public function get_client()
     {
          $result = $this->db->select('*')
                    ->from('add_client')
                    ->get()->result_array();
          return $result;
     }
     
     
     function get($id)
    {
        $query = $this->db->get_where("add_client",array("id" => $id));
        return $query->row_array();		  
    }
     
   } 
?> 