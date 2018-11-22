<?php

	class CIDB {

		protected $CI;



		public function __construct() {

			$this->CI =& get_instance();

		}

		/**
		 * Get Results
		 * @param  [type] $query       [description]
		 * @param  string $output_type [description]
		 * @return [type]              [description]
		 */
		public function get_results( $query , $output_type = 'ARRAY_A') {

			switch ( $output_type ) {
				case 'OBJECT':
					return $this->CI->db->query( $query )->result_object();
					break;
				
				default:
					return $this->CI->db->query( $query )->result_array();
					break;
			}
		}


		public function get_all( $table , $output_type = 'ARRAY_A') {

			switch ( $output_type ) {
				case 'OBJECT':
					return $this->CI->db->query( "SELECT * FROM {$table}" )->result_object();
					break;
				
				default:
					return $this->CI->db->query( "SELECT * FROM {$table}" )->result_array();
					break;
			}
		}


		/**
		 * Get the variable form database
		 * @param type $query 
		 * @param type|string $column_offset 
		 * @param type|string $row_offset 
		 * @return type
		 */
		public function get_var( $query, $column_offset = '0', $row_offset = '0' ) {

			$data = $this->get_results( $query );

			if ( empty( $data ) )
				return false;

			foreach (reset( $data ) as $key => $value) {
				$data = $value;
				break;
			}

			return ( ! is_null( $data ) ) ? $data : false;

		}


		/**
		 * Get row
		 * @param  [type] $query       [description]
		 * @param  string $output_type [description]
		 * @param  string $row_offset  [description]
		 * @return [type]              [description]
		 */
		public function get_row( $table, $where = array(), $output_type = 'ARRAY_A', $row_offset = '0' ) {

			$this->CI->db->select( '*' );

			foreach ( $where as $key => $value) {
				$this->CI->db->where( $key, $value );
			}

			$this->CI->db->from( $table );

			$query = $this->CI->db->get()->result_array();

			return $query['0'];

		}


		/**
		 * Insert into database
		 * @param  [type] $table [description]
		 * @param  array  $data  [description]
		 * @return [type]        [description]
		 */
		public function insert( $table, $data = array() ) {

			$this->CI->db->insert($table, $data); 
			return $this->insert_id();

		}

		/**
		 * Update data
		 * @param type $table 
		 * @param type|array $data 
		 * @param type|array $where 
		 * @return type
		 */
		public function update( $table, $data = array(), $where = array() ) {
			
			if ( empty( $where ) ) {
				return $this->insert( $table, $data );
			}

			foreach ( $where as $key => $value) {
				$this->CI->db->where( $key, $value );
			}

			return $this->CI->db->update( $table, $data); 

		}

		/**
		 * Delete data
		 * @param type $table 
		 * @param type|array $where 
		 * @return type
		 */
		public function delete( $table, $where = array() ) {

			foreach ( $where as $key => $value) {
				$this->CI->db->where( $key, $value );
			}
			return $this->CI->db->delete( $table ); 

		}

		/**
		 * Return last Auto_Increament generated ID
		 * @return type
		 */
		public function insert_id() {
			return $this->CI->db->insert_id();
		}



		public function get_all_where( $table, $where = array() ) {

			$this->CI->db->select( '*' );

			foreach ( $where as $key => $value) {
				$this->CI->db->where( $key, $value );
			}

			$this->CI->db->from( $table );

			return $this->CI->db->get()->result_array();

		}



	} // end Class


 global $cidb;
 return $cidb = new CIDB;