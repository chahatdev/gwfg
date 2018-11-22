<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Payment extends CI_Controller {

	public function __construct() 
    {
        parent::__construct();
        $this->load->library('email');
    }

	public function payment_user($token)
	{
		if(isset($token))
		{
			$user = $this->db->select('users.id')->from('users')->where('payment_token="'.$token.'"')->get()->row();
			if(isset($user->id) && !empty($user->id))
			{
				$return_data = array();
		        require_once(APPPATH.'libraries/Mollie/API/Autoloader.php');
		        $mollie = new Mollie_API_Client;
		          
		        $mollie->setApiKey('test_fuh6eDusv37SVCQVgzkkAh3JHJj8qV');
		        $payment = $mollie->payments->create(array(
		            "amount"      => '5',
		            "description" => "Insurance Payment",
		            "redirectUrl" => base_url('/payment_status'),
		            "webhookUrl"  => base_url("payment/mollie_response"),
		            "method" 		=> Mollie_API_Object_Method::IDEAL,
		            "metadata" => array(
		                "user_id" => $user->id,
		            ),
		        ));
		        
		        if(isset($payment) && !empty($payment))
		        {
		            $return_data = array('transaction_id' => $payment->id, 'payment_status' => $payment->status, 
		                                'payment_url' => $payment->getPaymentUrl());
		        }
		        redirect($payment->getPaymentUrl(), "refresh");
		    }
		    else
		    {
		    	$response['flag'] = 0;
    			$response['message']	= 'Token Not Valid';
		    }
		    
	    }
	    else
	    {
	    	$response['flag'] = 0;
	    	$response['message']	= 'Token Not Found';
	    }
	    $this->load->view('payment/token_problem', $response);
	}

	/*
	aFTER pAYMENT landing
	*/
	public function payment_status()
	{
		$this->load->view('payment/payment_status');
	}


	/**
     * Mollie Response
     */
    public function mollie_response()
    {
        require_once(APPPATH.'libraries/Mollie/API/Autoloader.php');
        $mollie = new Mollie_API_Client;
        $mollie->setApiKey('test_fuh6eDusv37SVCQVgzkkAh3JHJj8qV');
        
        $payment  = $mollie->payments->get($_POST["id"]);
        $user_id = $payment->metadata->user_id;
        
    	$user = $this->db->select('email')->from('users')->where('id='.$user_id)->get()->row();
        $payment_status = ($payment->status == 'paid') ? 1 : 0;
        $data = array('payment_method' => $payment->method,
					'payment_status' => ($payment->status == 'paid') ? 1 : 0 ,
					'is_payment_done'	=> ($payment->status == 'paid') ? 1 : 0 ,
					'paying_amount' => $payment->amount,
					'response_gateway' => serialize($payment));
        
        $this->db->where('id',$user_id)->update('users',$data);
        
        $message = 'Your Payment Status is '.$payment->status;
        $this->email->from('insurance@gwfg.com', 'insurance@gwfg.com');
        $this->email->to($user->email);
        $this->email->subject('Payment Update');
        $this->email->message($message);
        $this->email->send();

    }
    

	
} // .Test