<?php  

class Minformasi extends CI_Model {
	
	function cek_data($id) {
		
		$this->db->select('i.*, ki.kategori')
				 ->from('info i')
				 ->join('kategori_info ki', 'ki.id=i.id_kategori')
				 ->where('i.id', $id);
		return $this->db->get()->row();
		
	}
		
	function cek_data2() {
		
		$query = "SELECT * FROM `berita` 
				  ORDER BY hits DESC
				  LIMIT 0, 6";
				  
		return $this->db->query($query)->result();
			
	}
		
}