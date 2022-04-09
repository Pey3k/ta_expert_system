<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Daftar extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
	}

	public function index()
	{
		$data['msg'] = $this->session->flashdata('msg');
		$this->load->view('client/daftar', $data);
	}

	public function register()
	{

		$post = $this->input->post();

		$this->form_validation->set_rules('email', 'Email', 'required|trim|min_length[4]|max_length[30]|is_unique[pengguna.email]', array(
			'is_unique' => 'Email sudah terdaftar.',
			'min_length' => 'Password minimal mengandung 4 karakter',
			'max_length' => 'Password maximal mengandung 30 karakter',
		));

		$this->form_validation->set_rules('username', 'Username', 'required|trim|min_length[4]|max_length[30]|is_unique[pengguna.username]', array(
			'is_unique' => 'Username sudah terdaftar.',
			'min_length' => 'Password minimal mengandung 4 karakter',
			'max_length' => 'Password maximal mengandung 30 karakter',
		));

		$this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[6]|max_length[15]|matches[password2]', array(
			'matches' => 'Konfirmasi password tidak sesuai',
			'min_length' => 'Password minimal mengandung 6 karakter',
			'max_length' => 'Password maximal mengandung 15 karakter',
		));

		$this->form_validation->set_rules('password2', 'Password', 'required|trim|min_length[6]|max_length[15]|matches[password1]', array(
			'matches' => 'Konfirmasi password tidak sesuai',
			'min_length' => 'Password minimal mengandung 6 karakter',
			'max_length' => 'Password maximal mengandung 15 karakter',
		));


		if ($this->form_validation->run() == false) {
			$this->load->view('client/daftar');
		} else {
			$dataArray = array(
				"nama_pengguna" => $post['nama'],
				"jenis_kelamin" => $post['jenis_kelamin'],
				"tempat_lahir" => $post['tempat_lahir'],
				"tgl_lahir" => $post['tgl_lahir'],
				"umur" => $post['umur'],
				"email" => $post['email'],
				"username" => $post['username'],
				"password" => md5($post['password1']),
				'tanggal_pendaftaran' => date("Y-m-d H:i:s")
			);
			$insert = $this->db->insert("pengguna", $dataArray);
			$this->session->set_flashdata('message', '<div class="alert alert-info" role="alert">
				Berhasil registrasi pengguna!</div>');
			redirect('login');
		}
	}
}
