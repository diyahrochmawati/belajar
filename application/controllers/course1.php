<?php

class Course1 extends CI_Controller {
	public function index()
	{
		$data['judul']='Course 1';
		$this->load->view('template/header', $data);
		$this->load->view('materi/course1');
		$this->load->view('template/footer');
	}
}

