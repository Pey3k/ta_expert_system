<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Penyakit extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('m_penyakit');
	}

	public function index()
	{
		$data['msg'] = $this->session->flashdata('msg');
		$this->load->view('client/homepage/', $data);
	}

	public function penyakit($url)
	{
		$data['userLogin'] = $this->session->userdata('loginUser');
		$data['penyakit'] = $this->db->query('select * from penyakit where url = "' . $url . '"')->row();
		$data['data_penyakit'] = $this->m_penyakit->listPenyakit();

		$this->load->view('client/penyakit', $data);
	}

}
