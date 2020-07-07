<?php

class Tugas extends CI_Controller {
	public function index()
	{
		$data['judul']='Tugas';
		$this->load->view('template/header', $data);
		$this->load->view('tugas/tugas');
		$this->load->view('template/footer');
	}

}
