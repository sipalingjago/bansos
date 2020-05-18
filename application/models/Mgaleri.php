<?php

class Mgaleri extends CI_Model {

	function get_ketegori_foto() {
			$sql = "SELECT foto.*, COUNT(id_kategori_foto) jml_foto, kategori_foto.kategori
							FROM foto
							JOIN kategori_foto ON kategori_foto.id = foto.id_kategori_foto
							GROUP BY id_kategori_foto";
			return $this->db->query($sql)->result();
	}

	function get_foto($id) {
		$this->db->select('foto.*, kategori_foto.kategori')
				 ->from('foto')
				 ->join('kategori_foto', 'kategori_foto.id=foto.id_kategori_foto')
				 ->where('foto.id_kategori_foto', $id)
				 ->order_by('foto.id', 'ASC');
		return $this->db->get()->result();
	}

	function get_video() {
		$this->db->order_by('id', 'DESC');
		return $this->db->get('video')->result();
	}

	function cek_data($id) {
		$this->db->where('id', $id);
		return $this->db->get('photo')->row();
	}

}
