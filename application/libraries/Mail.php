<?php

	class Mail {

		public static function send( $to, $subject, $message ) {
			$ci =& get_instance();

			$config['mailtype'] = 'html';

			$ci->email->initialize($config);

			$ci->load->library('email');

			$ci->email->from('your@example.com', 'Your Name');
			$ci->email->to( $to );
			// $ci->email->cc('another@another-example.com');
			// $ci->email->bcc('them@their-example.com');

			$ci->email->subject( $subject );
			$ci->email->message( $message );

			return $ci->email->send();
		}

	} // .Mail