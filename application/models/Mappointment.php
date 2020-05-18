<?php

class Mappointment extends CI_Model {
	
	function get_program() {

		$this->db->order_by('id', 'ASC');
		return $this->db->get('program_detail')->result();

	}	

	function insert_data($data) {

		return $this->db->insert('booking', $data);

	}	

}
