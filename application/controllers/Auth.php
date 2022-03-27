<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{


	function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('m_informasi');
		$this->load->model('m_penyakit');
	}


	public function index()
	{
		// Melakukan cek pada aksi login pasien
		$data['userLogin'] = $this->session->userdata('loginUser');
		$data['list_informasi'] = $this->m_informasi->getListInformasi();
		$data['data_penyakit'] = $this->m_penyakit->listPenyakit();

		$post = $this->input->post();

		$this->load->view('client/homepage', $data);
	}

	public function refrensi()
	{
		$data['userLogin'] = $this->session->userdata('loginUser');
		$post = $this->input->post();
		$this->load->view('client/refrensi', $data);
	}


}
