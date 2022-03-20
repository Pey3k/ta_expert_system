<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Profile extends CI_Controller {
    function __construct() {
        parent::__construct();

		    $this->load->model('M_pengguna');
    }

	public function index(){
		$data['userLogin']  = $this->session->userdata('loginUser');
		$data['listProfile']	= $this->M_pengguna->getListPenggunaId($data['userLogin']['UserID']);
		$this->load->view('client/profile', $data);
	}

	public function editProfile($id){
		$data['userLogin']  = $this->session->userdata('loginUser');
		$data['detailData']	= $this->M_pengguna->getListPenggunaId($id);
		$this->load->view('client/editProfile', $data);
	}



	public function doUpdate($id){
		$post = $this->input->post();

		if($post['password'] != ""){
			$dataArray = array(
				"nama_pengguna"		=> $post['nama'],
				"jk"		=> $post['jk'],
				"email"		=> $post['email'],
				"umur"		=> $post['umur'],
				"username"	=> $post['username'],
				"password"	=> md5($post['password'])
			);
		}else{
			$dataArray = array(
				"nama_pengguna"		=> $post['nama'],
				"jk"		=> $post['jk'],
				"email"		=> $post['email'],
				"umur"		=> $post['umur'],
				"username"	=> $post['username'],
			);
		}
		$update = $this->db->update("pengguna",$dataArray,array("id_pengguna" => $id));
		if($update){
      $this->db->select("*");
    $this->db->from("pengguna");
    $this->db->where('id_pengguna', $id);
    $query 	= $this->db->get();
    $querycheck = $query->result();
    $dataArr = array(
      'UserID'	=> $querycheck[0]->id_pengguna,
      'userName'	=> $querycheck[0]->nama_pengguna,
      "level"		=> 99
    );
        $this->session->set_userdata('loginUser',$dataArr);

    // $this->m_umum->generatePesan("Berhasil update data","berhasil");
    redirect('profile');
  }else{
    // $this->m_umum->generatePesan("Gagal update data","gagal");
    redirect('profile/editProfile/'.$id);
		}
	}


}
