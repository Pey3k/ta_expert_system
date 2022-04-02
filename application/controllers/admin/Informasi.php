<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Informasi extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_umum');
		$this->load->model('m_informasi');
		$this->load->library("ckeditor");
	}

	public function index()
	{
		$data['userLogin'] = $this->session->userdata('loginData');
		if (empty($data['userLogin'])) {
			redirect('admin/login');
		}

		$data['listData'] = $this->m_informasi->getListInformasi();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('admin/informasi/index', $data);
		$this->load->view('templates/footer');
	}

	public function hapus($ig)
	{
		$this->Gejala_model->hapus($ig);
		$this->session->set_flashdata('flash', 'Dihapus');
		redirect('gejala');
	}


	public function add()
	{
		$data['userLogin'] = $this->session->userdata('loginData');
		if (empty($data['userLogin'])) {
			redirect('admin/login');
		}

		$this->ckeditor->basePath = base_url() . 'assets/ckeditor/';
		$this->ckeditor->config['toolbar'] = array(
			array('Source', '-', 'Bold', 'Italic', 'Underline', '-', 'Cut', 'Copy', 'Paste', 'PasteText', 'PasteFromWord', '-', 'Undo', 'Redo', '-', 'NumberedList', 'BulletedList')
		);
		$this->ckeditor->config['width'] = '560px';
		$this->ckeditor->config['height'] = '280px';
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('admin/informasi/add', $data);
		$this->load->view('templates/footer');
	}


	public function doAdd()
	{
		$post = $this->input->post();
		$dataArray = array(
			"judul" => $post['judul'],
			"content" => $post['content'],
			"created_at" => date('Y-m-d H:i:s'),
			"url" => strtolower(str_replace(' ', '-', $post['judul']))
		);
		$insert = $this->db->insert("informasi", $dataArray);
		if ($insert) {
			$this->m_umum->generatePesan("Berhasil Menambahkan Data", "berhasil");
			redirect("admin/informasi/index");
		} else {
			$this->m_umum->generatePesan("Gagal Menambahkan Data", "gagal");
			redirect("admin/informasi/add");
		}
	}

	public function edit($id)
	{
		$data['userLogin'] = $this->session->userdata('loginData');
		if (empty($data['userLogin'])) {
			redirect('admin/login');
		}

		$data['detailData'] = $this->m_informasi->getListInformasiById($id);
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('admin/informasi/edit', $data);
		$this->load->view('templates/footer');
	}


	public function doUpdate($id)
	{
		$post = $this->input->post();
		$dataArray = array(
			"judul" => $post['judul'],
			"content" => $post['content'],
			"updated_at" => date('Y-m-d H:i:s'),
			"url" => strtolower(str_replace(' ', '-', $post['judul']))
		);
		$update = $this->db->update("informasi", $dataArray, array("idInformasi" => $id));
		if ($update) {
			$this->m_umum->generatePesan("Berhasil mengupdate Data", "berhasil");
			redirect("admin/informasi/index");
		} else {
			$this->m_umum->generatePesan("Gagal mengupdate Data", "gagal");
			redirect("admin/informasi/edit");
		}
	}

	public function doDelete($id)
	{
		$delete = $this->db->delete("informasi", array("idInformasi" => $id));
		if ($delete) {
			$this->m_umum->generatePesan("Berhasil delete Data", "berhasil");
			redirect("admin/informasi/index");
		} else {
			$this->m_umum->generatePesan("Gagal delete Data", "gagal");
			redirect("admin/informasi/index");
		}
	}

}
