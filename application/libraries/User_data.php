<?php

	/**
	 * User library
	 */
	class User_data {

		public $user_id; 
		
		public function __construct( $user_id = NULL ) {
			
			$this->user_id = $user_id;

		}


		public function get_user_email() {
			return $this->_get_data( 'email' );
		}

		public function set_user_email( $email ) {
			$this->_set_data( 'email', $email );
		}


		public function get_user_role() {
			return $this->_get_data( 'user_role' );
		}

		public function get_user_role_name() {
			return get_user_role_name_by_id( $this->user_id );
		}

		public function set_user_role( $user_role ) {
			$this->_set_data( 'user_role', $user_role );
		}

		public function get_user_status() {
			return $this->_get_data( 'status' );
		}

		public function set_user_status( $status ) {
			$this->_set_data( 'status', $status );
		}


		public static function get_user( $user_id ) {
			global $cidb;

			if ( empty( $user_id ) )
				return false;

			$user_data_1 = $cidb->get_row( 'users', array( 'id' => $user_id ) ); 
			$user_data_2 = self::get_meta_data( $user_id );

			return $user_data_1 + $user_data_2;

		}

		/**
		 * Delete user completely
		 * @param  int $user_id User id
		 */
		public static function user_delete( $user_id ) {
			global $cidb;
			$cidb->delete( 'users', array( 'id' => $user_id ) );
			$cidb->delete( 'user_meta', array( 'user_id' => $user_id ) );
		}

		/**
		 * Get user meta data
		 * @param  int $user_id  User id
		 * @param  string $meta_key
		 * @return mixed
		 */
		public static function get_meta_data( $user_id, $meta_key = '' ) {
			global $cidb;

			if ( empty( $meta_key ) ) {
				$datas = $cidb->get_results( "SELECT meta_key, meta_value FROM user_meta WHERE user_id = $user_id");

				foreach ($datas as $data_key => $data_value) {
					$data[$data_value['meta_key']] = $data_value['meta_value'];
				}

			} else {
				$data = $cidb->get_var( "SELECT meta_value FROM user_meta WHERE user_id = $user_id AND meta_key = '$meta_key'" );
			}

			return ( ! empty( $data ) ) ? $data : false;
		}

		/**
		 * Set user meta data
		 * @param int $user_id    User id
		 * @param mixed $meta_key
		 * @param mixed $meta_value
		 */
		public static function set_meta_data( $user_id, $meta_key, $meta_value ) {
			global $cidb;

			if ( self::get_meta_data( $user_id, $meta_key ) == false )
				$cidb->insert( 'user_meta', array( 'user_id' => $user_id, 'meta_key' => $meta_key, 'meta_value' => $meta_value ) );
			else
				$cidb->update( 'user_meta', array( 'meta_value' => $meta_value ), array( 'user_id' => $user_id, 'meta_key' => $meta_key ) );	

		}


		public static function get_data( $user_id, $column_name ) {
			global $cidb;
			$data = $cidb->get_var( "SELECT $column_name FROM users WHERE id = $user_id" );
			return ( ! empty( $data ) ) ? $data : false;
		}

		/**
		 * Set user data
		 * @param string $column column name
		 * @param mixed $data
		 */
		protected function _set_data( $column, $data ) {
			global $cidb;
			return $cidb->update( 'users', array( $column => $data ), array( 'id' => $this->user_id ) );
		}

		/**
		 * Get user data
		 * @param  mixed $data
		 * @return mixed 
		 */
		protected function _get_data( $data ) {
			global $cidb;
			$data = $cidb->get_var( "SELECT $data FROM users WHERE id = $this->user_id" );
			return ( ! empty( $data ) ) ? $data : false;
		} 



	}




	global $user, $ci;
	$ci =& get_instance();
	$user = new User_data( $ci->session->userdata( 'user_id' ) );