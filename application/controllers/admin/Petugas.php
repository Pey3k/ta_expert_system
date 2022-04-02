<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Petugas extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('M_user');
		$this->load->model('m_umum');
		$this->load->model('M_petugas');
	}

	public function Index()
	{
		$data['userLogin'] = $this->session->userdata('loginData');
		if (empty($data['userLogin'])) {
			redirect('admin/login');
		}

		$data['listData'] = $this->M_user->getListPakar();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('admin/petugas/index', $data);
		$this->load->view('templates/footer');
	}


}
