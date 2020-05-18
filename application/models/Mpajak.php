<?php  

class Mpajak extends CI_Model {
		
	function get_pajak($bulan, $tahun) {
		$sql = "SELECT n.id_pajak, p.nama, t.target, k.kategori, n.nilai
				FROM nilai n
				JOIN pajak p ON p.id = n.id_pajak
				JOIN kategori k ON k.id = p.id_kategori
				JOIN target t ON t.id_pajak = p.id
				WHERE n.bulan = ".$bulan." AND n.tahun = ".$tahun." AND t.tahun = ".$tahun."
				ORDER BY n.id_pajak ASC";
		
		return $this->db->query($sql)->result();
	}
		
	function get_pajak_lalu($bulan, $tahun) {
		$sql = "SELECT n.id_pajak, p.nama, k.kategori, SUM(n.nilai) nilai
				FROM nilai n
				JOIN pajak p ON p.id = n.id_pajak
				JOIN kategori k ON k.id = p.id_kategori
				JOIN target t ON t.id_pajak = p.id
				WHERE n.bulan >= 1 AND n.bulan < ".$bulan." AND n.tahun = ".$tahun." AND t.tahun = ".$tahun."
				GROUP BY n.id_pajak
				ORDER BY n.id_pajak ASC";
		
		return $this->db->query($sql)->result();
	}
	
	function get_total_per_kategori($bulan, $tahun) {
		
		$sql = "SELECT n.id_pajak, k.kategori, SUM(n.nilai) nilai
				FROM nilai n
				JOIN pajak p ON p.id = n.id_pajak
				JOIN kategori k ON k.id = p.id_kategori
				WHERE n.bulan = ".$bulan." AND n.tahun = ".$tahun."
				GROUP BY k.id
				ORDER BY n.id_pajak ASC";
		
		return $this->db->query($sql)->result();
		
	}
		
}