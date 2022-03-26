<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Penyakit extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
	}

	public function index()
	{
		$data['msg'] = $this->session->flashdata('msg');
		$this->load->view('client/homepage/', $data);
	}

	public function karies()
	{
		$data['msg'] = $this->session->flashdata('msg');
		$this->load->view('client/penyakit/karies', $data);
	}

	public function pulpitis()
	{
		$data['msg'] = $this->session->flashdata('msg');
		$this->load->view('client/penyakit/pulpitis', $data);
	}

	public function gingivitis()
	{
		$data['msg'] = $this->session->flashdata('msg');
		$this->load->view('client/penyakit/gingivitis', $data);
	}

	public function absesgusi()
	{
		$data['msg'] = $this->session->flashdata('msg');
		$this->load->view('client/penyakit/absesgusi', $data);
	}

	public function impaksi()
	{
		$data['msg'] = $this->session->flashdata('msg');
		$this->load->view('client/penyakit/impaksi', $data);
	}


	public function periodontitis()
	{
		$data['msg'] = $this->session->flashdata('msg');
		$this->load->view('client/penyakit/periodontitis', $data);
	}

}
