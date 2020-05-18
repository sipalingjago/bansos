<?php

class Mhome extends CI_Model {

  function get_slider() {
		$this->db->order_by('id', 'ASC');
		return $this->db->get('slider', 4, 0)->result();
	}

  function get_berita() {

		$this->db->order_by('date', 'DESC');
		$this->db->order_by('id', 'DESC');
		return $this->db->get('berita', 3, 0)->result();

	}

  function get_artikel() {

		$this->db->order_by('date', 'DESC');
		$this->db->order_by('id', 'DESC');
		return $this->db->get('artikel', 3, 0)->result();

	}

  function get_keunggulan() {

		$this->db->order_by('id', 'ASC');
		return $this->db->get('program')->result();

	}

  function get_program() {

		$this->db->order_by('id', 'ASC');
		return $this->db->get('program_detail')->result();

	}

  function get_pengaduan() {

		// $this->db->order_by('date', 'DESC');
		$this->db->order_by('id', 'DESC');
		return $this->db->get('pengaduan', 7, 0)->result();

	}

  function get_agenda() {

		$this->db->order_by('tanggal', 'DESC');
		return $this->db->get('agenda')->result();

	}

  function get_sambutan() {

		$this->db->order_by('id', 'DESC');
		return $this->db->get('sambutan')->row();

	}

  function get_tentang() {
		$this->db->order_by('id', 'DESC');
		return $this->db->get('tentang_desa')->row();
	}
  function get_download() {

		$this->db->order_by('id', 'DESC');
		return $this->db->get('download')->result();

	}

  function get_link() {

		$this->db->order_by('id', 'ASC');
		return $this->db->get('link')->result();

	}

  function get_profil_web() {

		$this->db->order_by('id', 'DESC');
		return $this->db->get('profil_web')->row();

	}

  function get_video() {
		$this->db->order_by('id', 'DESC');
		return $this->db->get('video', 4, 0)->result();
	}

  function get_ketegori_foto() {
			$sql = "SELECT foto.*, COUNT(id_kategori_foto) jml_foto, kategori_foto.kategori
							FROM foto
							JOIN kategori_foto ON kategori_foto.id = foto.id_kategori_foto
							GROUP BY id_kategori_foto LIMIT 4";
			return $this->db->query($sql)->result();
	}

}
