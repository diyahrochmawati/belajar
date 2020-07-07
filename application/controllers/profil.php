<?php

class Profil extends CI_Controller {
	public function index()
	{
		$data['judul']='Profil';
		$this->load->view('template/header', $data);
		$this->load->view('profil/profil');
		$this->load->view('template/footer');
	}

}
