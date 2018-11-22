<?php

/**
 * Dump helper. Functions to dump variables to the screen, in a nicley formatted manner.
 * @author Joost van Veen
 * @version 1.0
 */
if (!function_exists('dump')) {
    function dump ($var, $label = 'Dump', $echo = TRUE)
    {
        // Store dump in variable 
        ob_start();
        var_dump($var);
        $output = ob_get_clean();
        
        // Add formatting
        $output = preg_replace("/\]\=\>\n(\s+)/m", "] => ", $output);
        $output = '<pre style="background: #FFFEEF; color: #000; border: 1px dotted #000; padding: 10px; margin: 10px 0; text-align: left; position: relative; z-index: 9999;">' . $label . ' => ' . $output . '</pre>';
        
        // Output
        if ($echo == TRUE) {
            echo $output;
        }
        else {
            return $output;
        }
    }
}
if (!function_exists('dump_exit')) {
    function dump_exit($var, $label = 'Dump', $echo = TRUE) {
        dump ($var, $label, $echo);
        exit;
    }
}






	function get_user_role_by_email( $email ) {
		global $cidb;
		$role = $cidb->get_var( "SELECT user_role FROM users WHERE email = '$email'" );
		return isset( $role ) ? $role : false;
	}


	function get_user_id_by_email( $email ) {
		global $cidb;
		$id = $cidb->get_var( "SELECT id FROM users WHERE email = '$email'" );
		return isset( $id ) ? $id : false;
	}

	function get_user_role_name_by_id( $user_id ) {
		global $cidb;
		$role_id = $cidb->get_var( "SELECT user_role FROM users WHERE id = '$user_id'" );
		$role_name = $cidb->get_var( "SELECT name FROM groups WHERE id = '$role_id'" );
		return isset( $role_name ) ? $role_name : false;
	}


	function get_user_email( $user_id ) {
		global $cidb;
		$email = $cidb->get_var( "SELECT email FROM users WHERE id = '$user_id'" );
		return isset( $email ) ? $email : false;
	}

	function get_role_by_user_id( $user_id ) {
		global $cidb;
		$user_role = $cidb->get_var( "SELECT user_role FROM users WHERE id = '$user_id'" );
		return isset( $user_role ) ? $user_role : false;
	}

	function is_created_by_admin( $user_id ) {
		$data = User_data::get_meta_data( $user_id, 'created_by' );
		return ( $data == 1 ) ? true : false;
	}

	function the_team_list( $user_id ) {
		global $cidb;

		$lists = $cidb->get_results( "SELECT user_id FROM user_meta WHERE meta_key = 'created_by' AND meta_value = $user_id" );

		echo "<ul class='view-team-indent'>";

			foreach ( $lists as $list ) {

				$id = $list['user_id'];
				$role = get_role_by_user_id( $list['user_id'] );
				$role_name = get_user_role_name_by_id( $list['user_id'] );
				$email = get_user_email( $list['user_id'] );

				if( $role == 5 )
					continue;

				if ( $role == 2 ) {
					$team_name = User_data::get_meta_data( $list['user_id'], 'team_name' );
					$team_name = ( $team_name ) ? "<h4>$team_name</h4>" : '';
				} else {
					$team_name = '';
				}

				// style
				if ( $role == '2' )
					$color = 'color: #E91E63;';
				else if ( $role == '3' )
					$color = 'color: #009688;';
				else if ( $role == '4' )
					$color = 'color: #FF9800;';
				else
					$color = 'color: #333;';

				echo $team_name;
				echo "<li style='$color'>$email ( $role_name ) <a href='".base_url( 'team/single/'.$id )."' class='btn btn-primary btn-sm'><i class='fa fa-eye'></i></a> <a href='".base_url( 'team/ressign/'.$id )."' class='btn btn-danger btn-sm'><i class='fa fa-trash'></i></a></li> ";

				the_team_list( $list['user_id'] );

			}

		echo "</ul>";

	}



	function get_users_dropdown( $args = '' ) {
		global $cidb;

		$name = ( isset( $args['name'] ) ) ? 'name="' . $args['name'] . '"' : '';

		$users = $cidb->get_results( "SELECT id, email, user_role FROM users" );

		echo "<select $name>";
			foreach ( $users as $user ) {

				if ( $user['user_role'] == 5 )
					continue;

				echo '<option value="' . $user['id'] . '">' . $user['email'] . "</option>";
			}
		echo "</select>";

	}



	function get_team_name( $user_id ) {
		
		$con = array();

		$ids = $user_id;

		while ( $ids >= 1 ) {
			if ( $ids == 1 ) break;

			$created_by = User_data::get_meta_data( $ids, 'created_by' );
			
			if ( $created_by != 1 )
				$con[] = $created_by;

			$ids = $created_by;

		}

		$team_leader_id = end( $con );

		if ( $team_leader_id != false )
			return User_data::get_meta_data( $team_leader_id, 'team_name' );
		else
			return User_data::get_meta_data( $user_id, 'team_name' );

	}


	function get_team_leader_id( $user_id ) {
		
		$con = array();
		$ids = $user_id;

		while ( $ids >= 1 ) {
			if ( $ids == 1 ) break;

			$created_by = User_data::get_meta_data( $ids, 'created_by' );
			
			if ( $created_by != 1 )
				$con[] = $created_by;

			$ids = $created_by;
		}

		$team_leader_id = end( $con );

		if ( $team_leader_id != false )
			return $team_leader_id;
		else
			return $user_id;

	}


	function get_team_ids_by_leader_id( $team_leader_id ) {
		global $cidb;


		$lists = $cidb->get_results( "SELECT user_id FROM user_meta WHERE meta_key = 'created_by' AND meta_value = $team_leader_id" );
		dump( $lists );

	}
	
	function get_clients_by_user_id( $user_id ) {
		global $cidb;

		$client_ids = $cidb->get_results( "SELECT user_id FROM user_meta WHERE meta_key = 'created_by' AND meta_value = $user_id" );

		foreach ( $client_ids as $client_id ) {

			if ( get_role_by_user_id( $client_id['user_id'] ) != 5 )
				continue; 
			
			$data[ $client_id['user_id'] ] = User_data::get_user( $client_id['user_id'] );

		}

		return $data;

	} 