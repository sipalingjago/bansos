<?php  

class Magenda extends CI_Model {
	
	function get_data() {
		
		$this->db->order_by('id', 'DESC');
		return $this->db->get('agenda')->result();
		
	}
	
	function cek_data($id) {
		
		$this->db->where('id', $id);
		return $this->db->get('agenda')->row();
		
	}

	function get_agenda($id) {
		
		$this->db->where('id <>', $id);
		$this->db->order_by('tanggal', 'DESC');
		return $this->db->get('agenda', 7, 0)->result();
		
	}
	
	function cek_data2($id) {
		
		$query = "SELECT * FROM `berita` 
				  ORDER BY hits DESC
				  LIMIT 0, 6";
				  
		return $this->db->query($query)->result();
			
	}
		
}