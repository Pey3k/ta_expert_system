<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Solusi extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_umum');
		$this->load->model('m_penyakit');
	}

	public function index()
	{
		$data['userLogin'] = $this->session->userdata('loginData');
		$data['listData'] = $this->m_penyakit->listPenyakit();
		$data['countSolusi'] = $this->m_penyakit->countPenyakitWithoutSolusi();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('admin/solusi/index', $data);
		$this->load->view('templates/footer');
	}

	public function add()
	{
		$data['userLogin'] = $this->session->userdata('loginData');
		$data['jenisPenyakit'] = $this->m_penyakit->listPenyakit();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('admin/solusi/add', $data);
		$this->load->view('templates/footer');
	}

	public function doAdd()
	{
		$post = $this->input->post();
		$dataArray = array(
			"id_penyakit" => $post['jenis'],
			"solusi" => $post['solusi']
		);
		$insert = $this->db->update("penyakit", $dataArray, array("id_penyakit" => $post['jenis']));
		if ($insert) {
			$this->m_umum->generatePesan("Berhasil Menambahkan Data", "berhasil");
			redirect("admin/solusi/index");
		} else {
			$this->m_umum->generatePesan("Gagal Menambahkan Data", "gagal");
			redirect("admin/solusi/add");
		}
	}


	public function edit($id)
	{
		$data['userLogin'] = $this->session->userdata('loginData');
		$data['jenisPenyakit'] = $this->m_penyakit->listPenyakit();
		$data['dataDetail'] = $this->m_penyakit->getListPenyakitById($id);

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('admin/solusi/edit', $data);
		$this->load->view('templates/footer');
	}


	public function doUpdate($id)
	{
		$post = $this->input->post();
		$dataArray = array(
			"id_penyakit" => $post['jenis'],
			"solusi" => $post['solusi'],
			"updated_at" => date('Y-m-d H:i:s')
		);
		$update = $this->db->update("penyakit", $dataArray, array("id_penyakit" => $id));
		if ($update) {
			$this->m_umum->generatePesan("Berhasil mengupdate Data", "berhasil");
			redirect("admin/solusi/index");
		} else {
			$this->m_umum->generatePesan("Gagal mengupdate Data", "gagal");
			redirect("admin/solusi/edit");
		}
	}


	public function doDelete($id)
	{
		$dataArray = array(
			"solusi" => NULL,
			"updated_at" => date('Y-m-d H:i:s'),
		);
		$delete = $this->db->update("penyakit", $dataArray, array("id_penyakit" => $id));
		if ($delete) {
			$this->m_umum->generatePesan("Berhasil delete Data", "berhasil");
			redirect("admin/solusi/index");
		} else {
			$this->m_umum->generatePesan("Gagal delete Data", "gagal");
			redirect("admin/solusi/index");
		}
	}


}
