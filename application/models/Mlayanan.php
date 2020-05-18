<?php

class Mlayanan extends CI_Model {

	function get_program() {

		$this->db->order_by('id', 'ASC');
		return $this->db->get('program_detail')->result();

	}	

	function cek_data($id) {
		
		$this->db->where('id', $id);
		return $this->db->get('program_detail')->row();
		
	}


}
