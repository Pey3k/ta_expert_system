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
		$this->form_validation->set_rules('username', 'Username', 'required|trim|is_unique[pengguna.username]',
			[
				'is_unique' => 'Username sudah terdaftar.'
			]);

		$this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[3]|matches[password2]', [
			'matches' => 'Konfirmasi password tidak sesuai',
			'min_length' => 'Password minimal mengandung 3 karakter'
		]);
		$this->form_validation->set_rules('password2', 'Password', 'required|trim|min_length[3]|matches[password1]');


		if ($this->form_validation->run() == false) {
			$this->load->view('client/daftar');
		} else {
			$dataArray = array(
				"nama_pengguna" => $post['nama'],
				"jk" => $post['jk'],
				"umur" => $post['umur'],
				"email" => $post['email'],
				"username" => $post['username'],
				"password" => md5($post['password1']),
				'tanggal_pendaftaran' => date("Y-m-d H:i:s")
			);
			$insert = $this->db->insert("pengguna", $dataArray);
			redirect('login');
		}


	}


	// }

}
