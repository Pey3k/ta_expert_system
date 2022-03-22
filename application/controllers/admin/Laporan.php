<?php
defined('BASEPATH') or exit('No direct script access allowed');
require_once FCPATH . '/vendor/autoload.php';

class Laporan extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('M_user');
		$this->load->model('m_umum');
	}

	public function laporan_pendaftaran()
	{
		$data['userLogin'] = $this->session->userdata('loginData');
		$data['listData'] = $this->M_user->getListPendaftaran();
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('admin/laporan/pendaftaran', $data);
		$this->load->view('templates/footer');
	}

	public function downloadPendaftaran()
	{
		$data['userLogin'] = $this->session->userdata('loginData');
		$data['listData'] = $this->M_user->getListPendaftaran();
		$mpdf = new \Mpdf\Mpdf();
		$htmlnya = $this->load->view('admin/laporan/print_pendaftaran', $data, true);
		$mpdf->WriteHTML($htmlnya);
		$mpdf->Output();
		// $this->load->library('fpdf_gen');
		// $this->load->view('admin/laporan/print_pendaftaran',$data);
	}

	public function laporan_diagnosa()
	{
		$data['userLogin'] = $this->session->userdata('loginData');
		$data['listData'] = $this->db->query("SELECT * FROM penyakit")->result();
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('admin/laporan/laporan_diagnosa', $data);
		$this->load->view('templates/footer');
	}

	public function downloadLaporanDiagnosa()
	{

		$data['userLogin'] = $this->session->userdata('loginData');
		$data['listData'] = $this->db->query("SELECT * FROM penyakit")->result();
		$this->load->library('fpdf_gen');
		$this->load->view('admin/laporan/print_hasil_diagnosa', $data);

	}

	public function laporan_pasien()
	{
		$data['userLogin'] = $this->session->userdata('loginData');
		$data['listData'] = $this->db->query("SELECT * FROM pengguna")->result();
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('admin/laporan/laporan_pasien', $data);
		$this->load->view('templates/footer');
	}

// $data['userLogin'] = $this->session->userdata('loginUser');
// $data['hasil_analisa'] = $this->m_diagnosa->getListHasilUser($data['userLogin']['UserID']);
// $mpdf = new \Mpdf\Mpdf();
//
// $htmlnya = $this->load->view('client/print_diagnosa_user', $data,true);
//
// $mpdf->WriteHTML($htmlnya);
// $mpdf->Output();


}
