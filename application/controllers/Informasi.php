<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Informasi extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
	}

	public function index($url)
	{
		$data['userLogin'] = $this->session->userdata('loginUser');
		$data['data_informasi'] = $this->db->query('select * from informasi where url = "' . $url . '"')->row();

		$this->load->view('client/informasi', $data);
	}

	public function solusi($url)
	{
		$data['userLogin'] = $this->session->userdata('loginUser');
		$data['dataPenyakit'] = $this->db->query('select * from penyakit p join solusi s on s.id_penyakit = p.id_penyakit where p.url = "' . $url . '"')->row();

		$this->load->view('client/solusi', $data);
	}
}
