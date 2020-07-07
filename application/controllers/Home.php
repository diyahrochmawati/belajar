<?php

class Home extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Siswa_model');
	}
	public function index()
	{
		$data['user'] = $this->db->get_where('user',['email' => $this->session->userdata('email')])->row_array();

		$data['judul']='Home';
		$this->load->view('template/header', $data);
		$this->load->view('home/home', $data);
		$this->load->view('template/footer');

	}

}
