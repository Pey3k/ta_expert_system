<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Petunjuk extends CI_Controller
{
	public function index()
	{
		$data['msg'] = $this->session->flashdata('msg');
        $this->load->view('client/petunjuk', $data);
	}
}
