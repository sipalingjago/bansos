<?php

class Mkontak extends CI_Model {

  function get_data() {

    return $this->db->get('profil_web')->row();

  }

  function insert_data($data) {

    return $this->db->insert('bukutamu', $data);

  }


	// function cek_data2() {
  //
	// 	$query = "SELECT * FROM `berita`
	// 			  ORDER BY hits DESC
	// 			  LIMIT 0, 6";
  //
	// 	return $this->db->query($query)->result();
  //
	// }

}
