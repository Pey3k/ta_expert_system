<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Pakar extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('M_user');
		$this->load->model('m_umum');
    $this->load->model('m_pakar');

	}



	public function Index(){
		$data['userLogin'] 	= $this->session->userdata('loginData');
		$data['listData']	= $this->M_user->getListPakar();

        $this->load->view('templates/header',$data);
      $this->load->view('templates/sidebar',$data);
      $this->load->view('templates/topbar',$data);
      $this->load->view('admin/pakar/index',$data);
      $this->load->view('templates/footer');
    }


}
