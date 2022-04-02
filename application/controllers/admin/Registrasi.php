<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Registrasi extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
	}

	public function index()
	{
		$isLogged = $this->session->userdata('loginData');
		if (!empty($isLogged)) {
			redirect('admin/dashboard');
		}

		$this->load->view('admin/registrasi');
	}

	public function doRegister()
	{
		if ($this->session->userdata('username')) {
			redirect('admin/dashboard');
		}

		$this->form_validation->set_rules('nama_petugas', 'Name', 'required|trim');

		$this->form_validation->set_rules('username', 'Username', 'required|trim|is_unique[petugas.username]', [
			'is_unique' => 'Username sudah terdaftar.'
		]);


		$this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[6]|max_length[15]|matches[password2]', [
			'matches' => 'Pasword tidak sesuai',
			'min_length' => 'Password minimal mengandung 6 karakter',
			'max_length' => 'Password maximal mengandung 15 karakter',
		]);

		$this->form_validation->set_rules('password2', 'Password', 'required|trim|min_length[3]|max_length[15]|matches[password1]', [
			'matches' => 'Pasword tidak sesuai',
			'min_length' => 'Password minimal mengandung 6 karakter',
			'max_length' => 'Password maximal mengandung 15 karakter',
		]);

		if ($this->form_validation->run() == false) {
			$this->load->view('admin/registrasi');
		} else {
			$data = [
				'nama_petugas' => htmlspecialchars($this->input->post('nama_petugas', true)),
				'username' => htmlspecialchars($this->input->post('username', true)),
				'password' => md5($this->input->post('password1')),
			];

			$this->db->insert('petugas', $data);
			$this->session->set_flashdata('message', '<div style="font-size:14px" class="alert alert-success" role="alert">
			Registrasi admin berhasil. Silahkan melakukan login.</div>');
			redirect('admin/login');
		}
	}
}
