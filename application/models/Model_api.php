<?php 
   Class Model_api extends CI_Model { 
	
    public function Add_client($data){
        
        $insertAr = array(
                'first_name' => $data['first_name'],
                'last_name' => $data['last_name'],
                'email' => $data['email'],
                'contact' => $data['phone']
        );
        // print_r($insertAr);
        // exit;
        $query = $this->db->insert('add_client', $insertAr);
         if($query)
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    public function client_view($team_id){
        
        $query = $this->db
                ->select('*')
                ->where(['id' => $team_id])
                ->get('users');
        $team = $query->result_array();

        $client_data =array();
        

        foreach ($team as $team_m) {
            $query = $this->db
                    ->select('*')
                    ->get('users');
            $userrow = $query->result_array();
            foreach ($userrow as $userrows) {
                $client_row = (User_data::get_meta_data( $userrows['id'] ));
                if(!empty($client_row['created_by'])){
                    $creatBy = $client_row['created_by'];
                }else{
                    $creatBy = 0;
                }
                if($team_m['id']==$creatBy && $userrows['user_role']==5){
                    // print_r($userrows);
                    $udata = User_data::get_meta_data( $userrows['id'] );
                    unset($userrows['team_name']);
                    unset($userrows['rank']);
                    unset($userrows['created_on']);
                    $uploadData = sizeof(array_filter(array_merge($userrows, (array)$udata)));
                    $allData = sizeof(array_merge($userrows, (array)$udata));

                    $prfile_com['profile_comp'] = round($uploadData*100/$allData, 2);

                    $prfile_com['first_name'] = $client_row['first_name'];
                    $prfile_com['last_name'] = $client_row['last_name'];
                    $prfile_com['contact'] = $client_row['contact'];
                    $client_data[] = $prfile_com + $userrows;
                    $client_data;
                }
                if($team_m['id']==$creatBy && $userrows['user_role']==3){
                    $query2 = $this->db
                            ->select('*')
                            ->get('users');
                    $userrow2 = $query2->result_array();
                    foreach ($userrow2 as $userrows2) {
                        $client_row2 = (User_data::get_meta_data( $userrows2['id'] ));
                        if(!empty($client_row2['created_by'])){
                            $creatBy2 = $client_row2['created_by'];
                        }else{
                            $creatBy2 = 0;
                        }
                        if($userrows['id']==$creatBy2 && $userrows2['user_role']==5){
                            // print_r($userrows2);
                            $udata = User_data::get_meta_data( $userrows2['id'] );
                            unset($userrows2['team_name']);
                            unset($userrows2['rank']);
                            unset($userrows2['created_on']);
                            $uploadData = sizeof(array_filter(array_merge($userrows2, (array)$udata)));
                            $allData = sizeof(array_merge($userrows2, (array)$udata));

                            $prfile_com['profile_comp'] = round($uploadData*100/$allData, 2);
                            $prfile_com['first_name'] = $client_row2['first_name'];
                            $prfile_com['last_name'] = $client_row2['last_name'];
                            $prfile_com['contact'] = $client_row2['contact'];
                            $client_data[] = $prfile_com + $userrows;
                            $client_data;
                        }
                    }
                }
                if($team_m['id']==$creatBy && $userrows['user_role']==3){
                    $query2 = $this->db
                            ->select('*')
                            ->get('users');
                    $userrow2 = $query2->result_array();
                    foreach ($userrow2 as $userrows2) {
                        $client_row2 = (User_data::get_meta_data( $userrows2['id'] ));
                        if(!empty($client_row2['created_by'])){
                            $creatBy2 = $client_row2['created_by'];
                        }else{
                            $creatBy2 = 0;
                        }
                        if($userrows['id']==$creatBy2 && $userrows2['user_role']==4){
                            $query3 = $this->db
                                    ->select('*')
                                    ->get('users');
                            $userrow3 = $query3->result_array();
                            foreach ($userrow3 as $userrows3) {
                                $client_row3 = (User_data::get_meta_data( $userrows3['id'] ));
                                if(!empty($client_row3['created_by'])){
                                    $creatBy3 = $client_row3['created_by'];
                                }else{
                                    $creatBy3 = 0;
                                }
                                if($userrows2['id']==$creatBy3 && $userrows3['user_role']==5){
                                        // $userrows3;
                                        $udata = User_data::get_meta_data( $userrows3['id'] );
                                        unset($userrows3['team_name']);
                                        unset($userrows3['rank']);
                                        unset($userrows3['created_on']);
                                        $uploadData = sizeof(array_filter(array_merge($userrows3, (array)$udata)));
                                        $allData = sizeof(array_merge($userrows3, (array)$udata));

                                        $prfile_com['profile_comp'] = round($uploadData*100/$allData, 2);
                                        $prfile_com['first_name'] = $client_row3['first_name'];
                                        $prfile_com['last_name'] = $client_row3['last_name'];
                                        $prfile_com['contact'] = $client_row3['contact'];
                                        $client_data[] = $prfile_com + $userrows;
                                        $client_data;
                                    }
                            }
                        }
                    }
                }
                if($team_m['id']==$creatBy && $userrows['user_role']==4){
                    $query2 = $this->db
                            ->select('*')
                            ->get('users');
                    $userrow2 = $query2->result_array();
                    foreach ($userrow2 as $userrows2) {
                        $client_row2 = (User_data::get_meta_data( $userrows2['id'] ));
                            // print_r($client_row2);
                            if(!empty($client_row2['created_by'])){
                                $creatBy2 = $client_row2['created_by'];
                            }else{
                                $creatBy2 = 0;
                            }
                        if($userrows['id']==$creatBy2 && $userrows2['user_role']==5){
                            $udata = User_data::get_meta_data( $userrows2['id'] );
                            unset($userrows2['team_name']);
                            unset($userrows2['rank']);
                            unset($userrows2['created_on']);
                            $uploadData = sizeof(array_filter(array_merge($userrows2, (array)$udata)));
                            $allData = sizeof(array_merge($userrows2, (array)$udata));

                            $prfile_com['profile_comp'] = round($uploadData*100/$allData, 2);
                            $prfile_com['first_name'] = $client_row2['first_name'];
                            $prfile_com['last_name'] = $client_row2['last_name'];
                            $prfile_com['contact'] = $client_row2['contact'];
                            $client_data[] = $prfile_com + $userrows;
                            $client_data;
                        }
                    }
                }
            }
        }

        

        if($query)
        {
            $response['flag'] = 1;
            $response['client_data'] = $client_data;
            $response['message'] = "Successfull";
            echo json_encode($response);
            return true;
        }
        else
        {
            $response['flag'] = 0;
            $response['message'] = 'Invalid Request';
            echo json_encode($response);
            return false;
        }
    }



    public function client_view_details($id){
        $query = $this->db
                    ->select('*')
                    ->where(['id' => $id])
                    ->get('users');
        $row = $query->row_array();
        $udata = User_data::get_meta_data( $id);
        unset($row['team_name']);
        unset($row['rank']);
        unset($row['created_on']);
        $uploadData = sizeof(array_filter(array_merge($row, (array)$udata)));
        $allData = sizeof(array_merge($row, (array)$udata));

        $prfile_com['profile_comp'] = round($uploadData*100/$allData, 2);
        $client_data[] = $row + $udata + $prfile_com;
        // print_r($udata);
        if($query)
        {
            $response['flag'] = 1;
            $response['client_data'] = $client_data;
            $response['message'] = "Successfull";
            echo json_encode($response);
            return true;
        }
        else
        {
            $response['flag'] = 0;
            $response['message'] = 'Invalid Request';
            echo json_encode($response);
            return false;
        }
    }


    public function events_view(){
        $query = $this->db
                    ->select('*')
                    ->get('events');
        $row = $query->result_array();
        $data=[];
        foreach ($row as $value) {
            unset($value['bannres'], $value['speakers'], $value['ticket'], $value['publish']);
            $data[]=($value);
        }

        if($query)
        {
            $response['flag'] = 1;
            $response['client_data'] = $data;
            $response['message'] = "Successfull";
            echo json_encode($response);
            return true;
        }
        else
        {
            $response['flag'] = 0;
            $response['message'] = 'Invalid Request';
            echo json_encode($response);
            return false;
        }
    }

    public function events_view_details($data){
        $query = $this->db
                    ->select('*')
                    ->where(['id'=>$data['event_id']])
                    ->get('events');
        $row = $query->row_array();
        unset($row['publish']);

        if($query)
        {
            $response['flag'] = 1;
            $response['client_data'] = $row;
            $response['imgUrl'] = base_url().'assets/dist/img/event';
            $response['message'] = "Successfull";
            echo json_encode($response);
            return true;
        }
        else
        {
            $response['flag'] = 0;
            $response['imgUrl'] = base_url().'assets/dist/img/event';
            $response['message'] = 'Invalid Request';
            echo json_encode($response);
            return false;
        }
    }

    public function login($data){
        $whereAr = array(
                'email' => $data['email'],
                'password' => md5($data['password']),
                'status' => 0
        );
        $query = $this->db
                ->select('*')
                ->where($whereAr)
                ->get('users');
        $row = $query->row_array();
         if($query)
        {
            return ($row);
        }
        else
        {
            return false;
        }
    }   
   
    
    public function logout($id){
        $whereAr = array(
                'id' => $id
        );
        $query = $this->db
                ->select('*')
                ->where($whereAr)
                ->get('users');
        $row = $query->row_array();
         if($query)
        {
            return ($row);
        }
        else
        {
            return false;
        }
    } 


} 
?> 