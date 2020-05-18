<?php

class Mprofil extends CI_Model {

	function get_data($page=null, $num=null) {

		$this->db->order_by('id', 'ASC');
		return $this->db->get('profil')->result();

	}

	function get_data_pegawai() {

		$this->db->order_by('id', 'ASC');
		return $this->db->get('pegawai')->result();

	}

	function cek_data($id) {

		$this->db->where('id', $id);
		return $this->db->get('profil')->row();

	}

	function row_pegawai($id) {
		$this->db->select('p.*')
				 ->from('pegawai p')
				 ->where('p.id', $id);
		return $this->db->get()->row();
	}

}
