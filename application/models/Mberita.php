<?php  

class Mberita extends CI_Model {
	
	function get_data($page, $num) {
		
		$this->db->order_by('id', 'DESC');
		return $this->db->get('berita', $page, $num)->result();
		
	}
	
	function cek_data($id) {
		
		$this->db->where('id', $id);
		return $this->db->get('berita')->row();
		
	}

	function get_tema() {
		
		$this->db->order_by('id', 'ASC');
		return $this->db->get('tema_wisata')->result();
		
	}
	
	function get_lokasi() {
		
		$this->db->order_by('id', 'ASC');
		return $this->db->get('lokasi_wisata')->result();
		
	}

	function get_berita($id) {
		
		$this->db->where('id <>', $id);
		$this->db->order_by('date', 'DESC');
		return $this->db->get('berita', 3, 0)->result();
		
	}
	
	function cek_data2($id) {
		
		$query = "SELECT * FROM `berita` 
				  WHERE id <> ".$id."
				  ORDER BY hits DESC
				  LIMIT 0, 6";
				  
		return $this->db->query($query)->result();
			
	}
	
	function cek_data3() {
		
		$query = "SELECT * FROM `berita` 
				  ORDER BY hits DESC
				  LIMIT 0, 6";
				  
		return $this->db->query($query)->result();
			
	}
	
	function update_data($id, $data) {
		
		$this->db->where('id', $id);
		return $this->db->update('berita', $data);
		
	}
	
}