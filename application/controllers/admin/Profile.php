<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profile extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_umum');
		$this->load->model('M_petugas');
	}

	public function index()
	{
		$data['userLogin'] = $this->session->userdata('loginData');
		$data['dataPakar'] = $this->m_pakar->getListPakarId($data['userLogin']['UserID']);
		if (empty($data['userLogin'])) {
			redirect('admin/login');
		}

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('admin/profile', $data);
		$this->load->view('templates/footer');
	}

	public function doUpdate($id)
	{
		$post = $this->input->post();

		$dataArray = array(
			"nama_petugas" => $post['nama_petugas'],
			"username" => $post['username'],
			"updated_at" => date('Y-m-d H:i:s')
		);

		$update = $this->db->update("petugas", $dataArray, array("id_petugas" => $id));
		if ($update) {
			$dataArr = array(
				'UserID' => $id,
				'userName' => $post['nama_petugas'],
				"level" => 1
			);
			$this->session->set_userdata('loginData', $dataArr);

			$this->m_umum->generatePesan("Berhasil Mengupdate Data", "berhasil");
			redirect("admin/profile");
		} else {
			$this->m_umum->generatePesan("Gagal Mengupdate Data", "gagal");
			redirect("admin/profile");
		}
	}
}
