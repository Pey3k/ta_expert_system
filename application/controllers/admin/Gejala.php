<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gejala extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_umum');
		$this->load->model('m_gejala');

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
        $data['userLogin'] 	= $this->session->userdata('loginData');
        $data['listData']	= $this->m_gejala->getlistGejala();

        $this->load->view('templates/header',$data);
        $this->load->view('templates/sidebar',$data);
        $this->load->view('templates/topbar',$data);
        $this->load->view('admin/gejala/index',$data);
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
		$data['userLogin'] 	= $this->session->userdata('loginData');
		$id  = $this->m_gejala->getID();
        $data['id'] = "G".sprintf("%02s", $id->id+1);
        
        $this->load->view('templates/header',$data);
        $this->load->view('templates/sidebar',$data);
        $this->load->view('templates/topbar',$data);
        $this->load->view('admin/gejala/add',$data);
        $this->load->view('templates/footer');
    }
    

    
    public function doAdd(){
		$post = $this->input->post();
		$dataArray = array(
			"id_gejala"	=> $post['id_gejala'],
			"gejala"	=> $post['gejala'],
			"gejala_bobot"	=> $post['bobot']
		);
		$insert = $this->db->insert("gejala",$dataArray);
		if($insert){
			$this->m_umum->generatePesan("Berhasil Menambahkan Data","berhasil");
			redirect("admin/gejala/");
		}else{
			$this->m_umum->generatePesan("Gagal Menambahkan Data","gagal");
			redirect("admin/gejala/add");
		}
    }


	public function edit($id){
		$data['userLogin'] 	= $this->session->userdata('loginData');
		$data['detailData'] = $this->m_gejala->getlistGejalaById($id);
        $this->load->view('templates/header',$data);
        $this->load->view('templates/sidebar',$data);
        $this->load->view('templates/topbar',$data);
        $this->load->view('admin/gejala/edit',$data);
        $this->load->view('templates/footer');
    }
    

    public function doUpdate($id){
		$post = $this->input->post();
		$dataArray = array(
			"id_gejala"	=> $post['id_gejala'],
			"gejala"	=> $post['gejala'],
			"gejala_bobot"	=> $post['bobot']
		);
		$update = $this->db->update("gejala",$dataArray,array("id_gejala"=>$id));
		if($update){
			$this->m_umum->generatePesan("Berhasil Mengupdate Data","berhasil");
			redirect("admin/gejala/index");
		}else{
			$this->m_umum->generatePesan("Gagal Mengupdate Data","gagal");
			redirect("admin/gejala/edit");
		}
	}



    
    public function doDelete($id){
		$delete = $this->db->delete("gejala",array("id_gejala"=>$id));
		if($delete){
			$this->m_umum->generatePesan("Berhasil delete Data","berhasil");
			redirect("admin/gejala/index");
		}else{
			$this->m_umum->generatePesan("Gagal delete Data","gagal");
			redirect("admin/gejala/index");
		}
	}

}