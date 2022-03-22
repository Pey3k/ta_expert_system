<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Polahidup extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
	}

	public function index()
	{
		$data['msg'] = $this->session->flashdata('msg');
		$this->load->view('client/polahidupsehat/makan', $data);
	}

	public function gizi()
	{
		$data['msg'] = $this->session->flashdata('msg');
		$this->load->view('client/polahidupsehat/info01gizi', $data);
	}

	public function tidur()
	{
		$data['msg'] = $this->session->flashdata('msg');
		$this->load->view('client/polahidupsehat/info02tidur', $data);
	}

	public function olahraga()
	{
		$data['msg'] = $this->session->flashdata('msg');
		$this->load->view('client/polahidupsehat/info03olahraga', $data);
	}

	public function menjaga()
	{
		$data['msg'] = $this->session->flashdata('msg');
		$this->load->view('client/polahidupsehat/info04menjaga', $data);
	}

	public function buruk()
	{
		$data['msg'] = $this->session->flashdata('msg');
		$this->load->view('client/polahidupsehat/info05buruk', $data);
	}

}
