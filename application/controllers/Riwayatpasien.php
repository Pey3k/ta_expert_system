<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

require_once FCPATH . '/vendor/autoload.php';

class Riwayatpasien extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('M_pengguna');
		$this->load->model('m_diagnosa');
	}


	public function index()
	{
		$data['userLogin'] = $this->session->userdata('loginUser');
		$data['hasil_analisa'] = $this->m_diagnosa->getListHasilUser($data['userLogin']['user_id']);
		$data['listProfile'] = $this->M_pengguna->getListPenggunaId($data['userLogin']['user_id']);
		$this->load->view('client/riwayat', $data);
	}

	public function print_pasien()
	{
		$data['userLogin'] = $this->session->userdata('loginUser');
		$data['hasil_analisa'] = $this->m_diagnosa->getListHasilUser($data['userLogin']['user_id']);
		$mpdf = new \Mpdf\Mpdf();
		$htmlnya = $this->load->view('client/print_diagnosa_user', $data, true);
		$mpdf->WriteHTML($htmlnya);
		$mpdf->Output();
	}

}
