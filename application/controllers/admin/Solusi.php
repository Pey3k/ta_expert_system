<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Solusi extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_umum');
		$this->load->model('m_solusi');

		//    is_logged_in();

	}

	public function index()
	{
		// $data['title'] = 'Gejala Management';
		// $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();

		// $data['id_gejala'] = $this->db->get('gejala')->result_array();

		// $this->form_validation->set_rules('nama_gejala','Nama Gejala','required');
		// $this->form_validation->set_rules('bobot_gejala','Bobot Gejala','required');

		// if($this->form_validation->run() == false ){
		$data['userLogin'] = $this->session->userdata('loginData');
		$data['listData'] = $this->m_solusi->getListsolusi();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('admin/solusi/index', $data);
		$this->load->view('templates/footer');
		// }
		// else{
		//     $data =[
		//         'id_gejala' => $this->input->post('id_gejala'),
		//         'nama_gejala'=> $this->input->post('nama_gejala'),
		//         'bobot_gejala'=> $this->input->post('bobot_gejala')
		//    ];
		//      $this->db->insert('gejala',$data);
		//     $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
		// 	Gejala baru berhasil ditambahkan</div>');
		// 	redirect('gejala');
		// }
	}

	public function add()
	{
		$data['userLogin'] = $this->session->userdata('loginData');
		$data['jenisPenyakit'] = $this->m_solusi->getPenyakit();
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
		$insert = $this->db->insert("solusi", $dataArray);
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
		$data['jenisPenyakit'] = $this->m_solusi->getPenyakit();
		$data['dataDetail'] = $this->m_solusi->getListByID($id);
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
			"solusi" => $post['solusi']
		);
		$update = $this->db->update("solusi", $dataArray, array("id_solusi" => $id));
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
		$delete = $this->db->delete("solusi", array("id_solusi" => $id));
		if ($delete) {
			$this->m_umum->generatePesan("Berhasil delete Data", "berhasil");
			redirect("admin/solusi/index");
		} else {
			$this->m_umum->generatePesan("Gagal delete Data", "gagal");
			redirect("admin/solusi/index");
		}
	}


}
