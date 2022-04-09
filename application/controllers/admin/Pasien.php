<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Pasien extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('M_user');
		$this->load->model('m_umum');
		$this->load->model('m_pengguna');
	}


	public function Index()
	{
		$data['userLogin'] = $this->session->userdata('loginData');
		if (empty($data['userLogin'])) {
			redirect('admin/login');
		}

		$data['listData'] = $this->M_user->getListPengguna();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('admin/pasien/index', $data);
		$this->load->view('templates/footer');
	}

	public function edit($id)
	{
		$data['userLogin'] = $this->session->userdata('loginData');
		if (empty($data['userLogin'])) {
			redirect('admin/login');
		}

		$data['detailData'] = $this->m_pengguna->getListPenggunaId($id);
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('admin/pasien/edit', $data);
		$this->load->view('templates/footer');
	}

	public function doUpdate($id)
	{
		$post = $this->input->post();
		$dataArray = array(
			"id_pengguna" => $post['id_pengguna'],
			"nama_pengguna" => $post['nama_pengguna'],
			"username" => $post['username'],
			"umur" => $post['umur'],
			"email" => $post['email'],
			"jenis_kelamin" => $post['jenis_kelamin'],
			"tgl_lahir" => $post['tgl_lahir'],
			"tempat_lahir" => $post['tempat_lahir'],
			"updated_at" => date('Y-m-d H:i:s')
		);
		$update = $this->db->update("pengguna", $dataArray, array("id_pengguna" => $id));
		if ($update) {
			$this->m_umum->generatePesan("Berhasil Mengupdate Data", "berhasil");
			redirect("admin/pasien/index");
		} else {
			$this->m_umum->generatePesan("Gagal Mengupdate Data", "gagal");
			redirect("admin/pasien/edit");
		}
	}

	public function doDelete($id)
	{
		$delete = $this->db->delete("pengguna", array("id_pengguna" => $id));
		if ($delete) {
			$this->m_umum->generatePesan("Berhasil delete Data", "berhasil");
			redirect("admin/pasien");
		} else {
			$this->m_umum->generatePesan("Gagal delete Data", "gagal");
			redirect("admin/pasien");
		}
	}


}
