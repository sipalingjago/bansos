<?php

class Dashboard extends Back_controller {

	function __construct() {

		parent::__construct();

		$cek = $this->session->userdata('hak_akses');
		if(!($cek)) {
			redirect('Datacenter');
		}

	}

	function index() {

		$data_array = array();

		$title = "Dashboard";
		$subtitle = "dashboard";
		$content = $this->load->view('dashboard.php', $data_array, true);

		$this->load_content($title, $subtitle, $content);

	}

}
