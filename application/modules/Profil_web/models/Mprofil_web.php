<?php

class Mprofil_web extends CI_Model {

	function get_data() {

		$this->db->order_by('id', 'ASC');
		return $this->db->get('profil_web')->row();

	}

	function cek_data($id) {

		$this->db->where('id', $id);
		return $this->db->get('profil_web')->row();

	}

	function insert_data($data) {

		return $this->db->insert('profil_web', $data);

	}

	function update_data($data, $id) {

		$this->db->where('id', $id);
		return $this->db->update('profil_web', $data);

	}

	function delete_data($id) {

		$this->db->where('id', $id);
		return $this->db->delete('profil_web');

	}

}
