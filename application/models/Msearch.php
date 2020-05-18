<?php

class Msearch extends CI_Model {

	function get_data($key) {

		$this->db->select('berita.*')
				 ->from('berita')
				 ->like('judul', $key)
				 ->or_like('deskripsi', $key)
				 ->or_like('isi', $key)
				 ->order_by('id', 'DESC');

		return $this->db->get()->result();

	}

}
