<?php

class Pengaduan extends Front_controller {

	function __construct() {

		parent::__construct();
		$this->load->model('Mpengaduan', 'mdl');

	}

	function index() {

		$data_array = array();

		// $data_array['agenda'] = $this->mdl->cek_data($id);
		$data_array['pengaduan'] = $this->mdl->get_data();
		$data_array['berita_lain'] = $this->mdl->cek_data2();

		$title = "Pengaduan";
		$deskripsi = "";
		$image = "";
		// $deskripsi = $data_array['agenda']->deskripsi;
		$subtitle = "pengaduan";
		$content = $this->load->view('user/pengaduan.php', $data_array, true);

		$this->load_content($title, $deskripsi, $image, $subtitle, $content);


	}

	function data() {
		$data_array = array();

		// $data_array['agenda'] = $this->mdl->cek_data($id);
		$data_array['pengaduan'] = $this->mdl->get_data_all();
		$data_array['berita_lain'] = $this->mdl->cek_data2();

		$title = "Pengaduan";
		$deskripsi = "";
		$image = "";
		// $deskripsi = $data_array['agenda']->deskripsi;
		$subtitle = "pengaduan";
		$content = $this->load->view('user/pengaduan_list.php', $data_array, true);

		$this->load_content($title, $deskripsi, $image, $subtitle, $content);

	}

	function id($id) {

		$data_array['data'] = $this->mdl->cek_data($id);
		$data_array['pengaduan'] = $this->mdl->get_pengaduan($id);
		$data_array['berita_lain'] = $this->mdl->cek_data2();

		$title = "Pengaduan";
		$deskripsi = "";
		$image = "";
		// $deskripsi = $data_array['agenda']->deskripsi;
		$subtitle = "pengaduan";
		$content = $this->load->view('user/pengaduan_detail.php', $data_array, true);

		$this->load_content($title, $deskripsi, $image, $subtitle, $content);

	}

	function kirim() {

		$post = $this->input->post();

		$query = $this->mdl->insert_data($post);

		$query == true ? $this->alert_info('Pengaduan anda berhasil terkirim') : $this->alert_error('Pengaduan anda berhasil terkirim');

		redirect('pengaduan');


	}

}
