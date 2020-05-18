<?php

class Mabout extends CI_Model {
	function get_tentang() {

		$this->db->order_by('id', 'ASC');
		return $this->db->get('tentang_desa')->row();

	}

	function get_visi() {

		$this->db->order_by('id', 'ASC');
		return $this->db->get('visi')->row();

	}

	function get_misi() {

		$this->db->order_by('id', 'ASC');
		return $this->db->get('misi')->result();

	}

	function get_unggulan() {

		$this->db->order_by('id', 'ASC');
		return $this->db->get('program')->result();

	}

	function get_pegawai() {

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
