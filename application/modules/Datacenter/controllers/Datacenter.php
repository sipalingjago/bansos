<?php

class Datacenter extends Back_controller {

	function __construct() {

		parent::__construct();

	}

	function index() {

		$this->cek_session();

		if(!$this->input->post('submit')) {

			$data['title'] = '';
			$this->load->view('form', $data);

		} else {

			$hasil = $this->input->post('hasil');
			$bil1 = $this->input->post('bil1');
			$bil2 = $this->input->post('bil2');
			$bil3 = $bil1 + $bil2;

			if(empty($hasil) || $hasil != $bil3) {
				$this->alert_error('Hasil Penjumlahan salah');
				redirect('Datacenter');
			} else {

				$user = $this->input->post('email');
				$pass = md5($this->input->post('password'));

				$cek = $this->db->where('email', $user)
								->where('password', $pass)
								->get('admin')
								->row();

				if(count($cek) > 0) {

					$data = array(
						'logged_in' => 'yes',
						'id' 		=> $cek->id,
						'email'	=> $cek->email,
						'hak_akses' => $cek->hak_akses
					);

					$this->session->set_userdata($data);

					$this->alert_info_asslamualaikum('Selamat Datang. Anda Masuk sebagai User');

					redirect('Dashboard');

				} else {

					$this->alert_error('Email atau Password Salah');

					redirect('Datacenter');

				}
			}

		}


	}

	function logout() {

		$data = array(

			'logged_in' => '',
			'id' 		=> '',
			'email' 	=> '',
			'hak_akses' => ''

		);

		$this->session->set_userdata($data);
		// $this->session->sess_destroy();
		redirect('Datacenter');

	}

	function cek_session() {

		if($this->session->userdata('logged_in')) {
			switch($this->session->userdata('hak_akses')) {
				case '1' : $redirect = "Dashboard";
				break;
			}
			redirect($redirect);
			// redirect('Dashboard');
		}

	}



}
