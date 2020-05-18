<?php

class Mpengaduan extends CI_Model {

	function get_data() {

		$this->db->order_by('id', 'DESC');
		return $this->db->get('pengaduan', 5, 0)->result();

	}

	function get_data_all() {

		$this->db->order_by('id', 'DESC');
		return $this->db->get('pengaduan')->result();

	}

	function cek_data($id) {

		$this->db->where('id', $id);
		return $this->db->get('pengaduan')->row();

	}

	function get_pengaduan($id) {

		$this->db->where('id <>', $id);
		$this->db->order_by('id', 'DESC');
		return $this->db->get('pengaduan', 5, 0)->result();

	}

	function cek_data2() {

		$query = "SELECT * FROM `berita`
				  ORDER BY hits DESC
				  LIMIT 0, 6";

		return $this->db->query($query)->result();

	}

	function insert_data($data) {

		return $this->db->insert('pengaduan', $data);

	}

}
