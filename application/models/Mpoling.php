<?php  

class Mpoling extends CI_Model {
			
	function cek_data2() {
		
		$query = "SELECT * FROM `berita` 
				  ORDER BY hits DESC
				  LIMIT 0, 6";
				  
		return $this->db->query($query)->result();
			
	}
		
}