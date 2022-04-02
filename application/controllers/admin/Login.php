<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('m_login');
		$this->load->library('form_validation');
	}

	public function index()
	{
		$isLogged = $this->session->userdata('loginData');
		if (!empty($isLogged)) {
			redirect('admin/dashboard');
		}

		$this->load->view('admin/login');
	}

	public function doLogin()
	{
		$dataPost = $this->input->post();
		$username = $this->input->post('username');

		$user = $this->db->get_where('petugas', ['username' => $username])->row_array();
		/* debugCode($dataPost); */
		if ($this->m_login->checkLogin($dataPost['username'], $dataPost['password'])) {
			//echo "success";
			$this->session->set_flashdata('message', '<div style="font-size:15px" class="alert alert-info" role="alert">
			Berhasil melakukan login</div>');
			redirect('admin/dashboard');
		} else {
			$this->session->set_flashdata('message', '<div style="font-size:15px" class="alert alert-danger" role="alert">
			Username atau password yang Anda masukan salah!</div>');
			redirect('admin/login');
		}
	}

	function logout()
	{
		$this->session->unset_userdata('loginData');
		redirect('admin/login');
	}

}
