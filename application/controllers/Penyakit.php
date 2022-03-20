<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penyakit extends CI_Controller {

	function __construct() {
        parent::__construct();
				$this->load->library('form_validation');
    }

    public function index()
	{
		$data['msg'] = $this->session->flashdata('msg');
    	$this->load->view('client/homepage/', $data);
	}

	public function obesitas()
	{
		$data['msg'] = $this->session->flashdata('msg');
    	$this->load->view('client/penyakit/P01obesitas', $data);
	}

	public function ispa()
	{
		$data['msg'] = $this->session->flashdata('msg');
    	$this->load->view('client/penyakit/P02ispa', $data);
	}

	public function hepatitis()
	{
		$data['msg'] = $this->session->flashdata('msg');
    	$this->load->view('client/penyakit/P03hepatitis', $data);
	}

	public function dispepsia()
	{		
		$data['msg'] = $this->session->flashdata('msg');
    $this->load->view('client/penyakit/P04dispepsia', $data);
	}


	public function tipes()
	{
		$data['msg'] = $this->session->flashdata('msg');
    	$this->load->view('client/penyakit/P05tipes', $data);
	}

	public function asamurat()
	{
		$data['msg'] = $this->session->flashdata('msg');
    	$this->load->view('client/penyakit/P06asamurat', $data);
	}

	public function darahrendah()
	{
		$data['msg'] = $this->session->flashdata('msg');
			$this->load->view('client/penyakit/P07darahrendah', $data);
	}


	public function jantung()
	{
		$data['msg'] = $this->session->flashdata('msg');
			$this->load->view('client/penyakit/P08jantung', $data);
	}



}
