<?php

class Materi extends CI_Controller {
	public function index()
	{
		$data['judul']='Materi';
		$this->load->view('template/header', $data);
		$this->load->view('materi/materi');
		$this->load->view('template/footer');
	}

}

