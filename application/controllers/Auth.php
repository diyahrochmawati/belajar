<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
	}

	public function index()
	{
		$this->form_validation->set_rules('inputemail', 'Email', 'trim|required|valid_email');
		$this->form_validation->set_rules('inputpassword', 'Password', 'required');
		if($this ->form_validation->run() == false){
		$data['judul']='Login';
		$this->load->view('template/headlogin', $data);
		$this->load->view('auth/login');
		}else {
			$this->_login();
		}
		
	}

	private function _login() {
		$email = $this->input->post('inputemail');
		$password = $this->input->post('inputpassword');

		$user = $this->db->get_where('user', ['email' => $email])->row_array();

		if ($user){
			if(password_verify($password,$user['password'])){
				$data=[
				'id_user' => $user['id_user'],
				'name'=> $user['name'],
				'kelas'=> $user['kelas'],
				'nis'=> $user['nis'],
				'motto'=> $user['motto'],
				'email' => $user['email'],
				'image' => $user['image'],
				'date_created' => $user['date_created']
				];
				
				$this->session->set_userdata($data);
				redirect('home');

			}else{
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Wrong Password!</div>');
				redirect('auth');
			}
		}else{

			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Email is not registered!</div>');
			redirect('auth');

		}
	}

	public function register()
	{
		$this->form_validation->set_rules('name', 'Name', 'required|trim');
		$this->form_validation->set_rules('kelas', 'Kelas', 'required|trim');
		$this->form_validation->set_rules('nis', 'Nis', 'required|trim');
		$this->form_validation->set_rules('motto', 'Motto', 'required|trim');
		$this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', ['is_unique' => 'This email already registered!']);
		$this->form_validation->set_rules('password1', 'Password', 'required|min_length[6]', ['min_length' => 'Password too short!']);
		$this->form_validation->set_rules('password2', 'Password', 'required|matches[password1]',[ 'matches' => 'Password not match!']);
		if($this ->form_validation->run() == false){
		$data['judul']='Register';
		$this->load->view('template/headlogin', $data);
		$this->load->view('auth/register');
		} else {
			$data=[
				'name'=> $this->input->post('name'),
				'kelas'=> $this->input->post('kelas'),
				'nis'=> $this->input->post('nis'),
				'email'=> $this->input->post('email'),
				'image'=> 'default.jpg',
				'password'=> password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
				'motto'=> $this->input->post('motto'),
				'date_created' => time()
			];

			$this->db->insert('user',$data);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Congratulation! your account has been created. Please Login!</div>');
			redirect('auth');
		}
		
	}

	public function logout(){
		$this->session->unset_userdata('email');
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">You have been logged out!</div>');
			redirect('auth');

	}
}