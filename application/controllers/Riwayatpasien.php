<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require_once FCPATH . '/vendor/autoload.php';
class Riwayatpasien extends CI_Controller {
    function __construct() {
        parent::__construct();
        // $this->load->model('m_umum');
        $this->load->model('M_pengguna');
        $this->load->model('m_diagnosa');
    }


	public function index(){
    $data['userLogin']  = $this->session->userdata('loginUser');
    $data['hasil_analisa'] = $this->m_diagnosa->getListHasilUser($data['userLogin']['UserID']);
    $data['listProfile']	= $this->M_pengguna->getListPenggunaId($data['userLogin']['UserID']);
		//	$data['v_content']  = 'profile';
		$this->load->view('client/riwayat', $data);
	}

  public function print_pasien(){
	  $data['userLogin'] = $this->session->userdata('loginUser');
		$data['hasil_analisa'] = $this->m_diagnosa->getListHasilUser($data['userLogin']['UserID']);
		$mpdf = new \Mpdf\Mpdf();
		$htmlnya = $this->load->view('client/print_diagnosa_user', $data,true);
		$mpdf->WriteHTML($htmlnya);
		$mpdf->Output();
}

}
