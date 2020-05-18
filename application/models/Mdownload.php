<?php  

class Mdownload extends CI_Model {
	
	function get_data() {
		
		$this->db->order_by('id', 'DESC');
		return $this->db->get('download')->result();
		
	}
	
	function cek_data($id) {
		
		$this->db->where('id', $id);
		return $this->db->get('download')->row();
		
	}
	
	function cek_data2() {
		
		$query = "SELECT * FROM `berita` 
				  ORDER BY hits DESC
				  LIMIT 0, 6";
				  
		return $this->db->query($query)->result();
			
	}
		
}