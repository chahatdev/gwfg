<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Appointment extends CI_Controller {
    
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




 }


