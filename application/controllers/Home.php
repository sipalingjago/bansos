<?php

class Home extends Front_controller {

	function __construct() {

		parent::__construct();
		$this->load->model('Mhome', 'mdl');

	}

	function index() {

		$data_array = array();
		$data_array['slider'] = $this->mdl->get_slider();

		$title = "Beranda";
		$deskripsi = "";
		$image = "";
		$subtitle = "home";
		$content = $this->load->view('user/home.php', $data_array, true);

		$this->load_content($title, $deskripsi, $image, $subtitle, $content);

	}

}
