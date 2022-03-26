<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('m_login');
	}

	public function index()
	{
		$data['msg'] = $this->session->flashdata('msg');
		$this->load->view('client/login', $data);
	}

	public function doLogin()
	{
		$dataPost = $this->input->post();

		// Menggunakan modal pada m_login fungsi check_login_user
		if ($this->m_login->check_login_user($dataPost['username'], $dataPost['password'])) {
			redirect('auth');
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
				Username atau password yang anda masukan salah!</div>');
			redirect('login');
		}
	}

	function logout()
	{
		$this->session->unset_userdata('loginUser');
		redirect('');
	}

}
