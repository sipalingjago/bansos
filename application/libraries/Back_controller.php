<?php

class Back_Controller extends CI_Controller {

	var $content = array();

	function __construct() {

		parent::__construct();
		date_default_timezone_set('Asia/Makassar');

	}

	function load_content($title, $subtitle, $content) {

		$data = array(
				'title' 	=> $title,
				'subtitle'	=> $subtitle,
				'content'	=> $content
			);

		$this->load->view('admin/admin_themes.php', $data);

	}

	function alert_info_asslamualaikum($text) {

		$notif = "<script>
					var notification = alertify.notify(
						'".$text."',
						'success', 5,
						function(){
						console.log('dismissed'); }
					);
				  </script>";

		$pesan = array(
			'notif' => $notif,
			'audio' => '<audio controls autoplay hidden>
						    <source src="'.base_url('assets/audio/assalamualaikum.mp3').'" type="audio/mpeg">
						</audio>'
		);

		$this->session->set_flashdata($pesan);

	}

	function alert_info($text) {

		$notif = "<script>
					var notification = alertify.notify(
						'".$text."',
						'success', 5,
						function(){
						console.log('dismissed'); }
					);
				  </script>";

		$pesan = array(
			'notif' => $notif,
			'audio' => '<audio controls autoplay hidden>
						    <source src="'.base_url('assets/audio/quite-impressed.mp3').'" type="audio/mpeg">
						</audio>'
		);

		$this->session->set_flashdata($pesan);

	}

	function alert_error($text) {

		$notif = "<script>
					var notification = alertify.notify(
						'".$text."',
						'warning', 5,
						function(){
						console.log('dismissed'); }
					);
				  </script>";

		$pesan = array(
			'notif' => $notif,
			'audio'   => '<audio controls autoplay hidden>
						     <source src="'.base_url('assets/audio/error.mp3').'" type="audio/mpeg">
						  </audio>'
		);

		$this->session->set_flashdata($pesan);

	}

	function alert_error_upload($text) {

		$notif = "<script>
					var notification = alertify.notify(
						'".$text."',
						'warning', 5,
						function(){
						console.log('dismissed'); }
					);
				  </script>";

		$pesan = array(
			'notif' => $notif,
			'audio' => '<audio controls autoplay hidden>
						    <source src="'.base_url('assets/audio/error.mp3').'" type="audio/mpeg">
						</audio>'
		);

		$this->session->set_flashdata($pesan);

	}

	function tanggal_indonesia($data) {

		$day = date('D', strtotime($data));
		$dayList = array(
			'Sun' => 'Minggu',
			'Mon' => 'Senin',
			'Tue' => 'Selasa',
			'Wed' => 'Rabu',
			'Thu' => 'Kamis',
			'Fri' => 'Jumat',
			'Sat' => 'Sabtu'
		);

		$bulan = array(
			'01' => 'Januari',
			'02' => 'Februari',
			'03' => 'Maret',
			'04' => 'April',
			'05' => 'Mei',
			'06' => 'Juni',
			'07' => 'Juli',
			'08' => 'Agustus',
			'09' => 'September',
			'10' => 'Oktober',
			'11' => 'November',
			'12' => 'Desember'
		);

		$tgl = explode("-", $data);
		$bln = $tgl[1];

		$tanggal = array(
			'hari' => $dayList[$day],
			'tanggal' => $tgl[2],
			'bulan' => $bulan[$bln],
			'tahun' => $tgl[0]
		);

		return $tanggal;

	}

}
