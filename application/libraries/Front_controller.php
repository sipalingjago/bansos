<?php

class Front_Controller extends CI_Controller {

	var $content = array();

	function __construct() {

		parent::__construct();
		date_default_timezone_set('Asia/Makassar');

	}

	function load_content($title, $deskripsi, $image, $subtitle, $content) {

		$data = array(
				'title' 	=> $title,
				'deskripsi'	=> $deskripsi,
				'image'	=> $image,
				'subtitle'	=> $subtitle,
				'content'	=> $content
			);

		$this->load->view('user/user_themes.php', $data);

	}

	function alert_info($text) {

		$notif = "<script>
					swal(
						'".$text."',
						'',
						'success'
					)
				  </script>";

		$pesan = array(
			'notif' => $notif
			// 'audio' => '<audio controls autoplay hidden>
			// 			    <source src="'.base_url('assets/audio/quite-impressed.mp3').'" type="audio/mpeg">
			// 			</audio>'
		);

		$this->session->set_flashdata($pesan);

	}

	function alert_error($text) {

		$notif = "<script>
						swal(
							'".$text."',
							'',
							'error'
						)
				  </script>";

		$pesan = array(
			'notif' => $notif
			// 'audio'   => '<audio controls autoplay hidden>
			// 			     <source src="'.base_url('assets/audio/error.mp3').'" type="audio/mpeg">
			// 			  </audio>'
		);

		$this->session->set_flashdata($pesan);

	}

}
