<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Test extends CI_Controller {

	public function functions( $user_id ) {
		dump( get_team_ids_by_leader_id( $user_id ) );
	}
	public function test()
	{
		echo "hello";
	}
	
} // .Test