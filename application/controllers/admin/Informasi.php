<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Informasi extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_umum');
		$this->load->model('m_informasi');
		$this->load->library("ckeditor");
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
        $data['listData']	= $this->m_informasi->getListInformasi();

        $this->load->view('templates/header',$data);
        $this->load->view('templates/sidebar',$data);
        $this->load->view('templates/topbar',$data);
        $this->load->view('admin/informasi/index',$data);
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

    public function hapus($ig)
    {
        $this->Gejala_model->hapus($ig);
        $this->session->set_flashdata('flash','Dihapus');
        redirect('gejala');
    }


    public function add(){
		$data['userLogin'] = $this->session->userdata('loginData');
		$this->ckeditor->basePath = base_url() . 'assets/ckeditor/';
		$this->ckeditor->config['toolbar'] = array(
            array('Source', '-', 'Bold', 'Italic', 'Underline', '-', 'Cut', 'Copy', 'Paste', 'PasteText', 'PasteFromWord', '-', 'Undo', 'Redo', '-', 'NumberedList', 'BulletedList')
        );
		$this->ckeditor->config['width'] = '560px';
        $this->ckeditor->config['height'] = '280px';
        $this->load->view('templates/header',$data);
        $this->load->view('templates/sidebar',$data);
        $this->load->view('templates/topbar',$data);
        $this->load->view('admin/informasi/add',$data);
        $this->load->view('templates/footer');
	}


  public function doAdd(){
  $post = $this->input->post();
  $dataArray = array(
    "namaPenyakit"	=> $post['namaPenyakit'],
    "content"		=> $post['content']
  );
  $insert = $this->db->insert("informasi",$dataArray);
  if($insert){
    $this->m_umum->generatePesan("Berhasil Menambahkan Data","berhasil");
    redirect("admin/informasi/index");
  }else{
    $this->m_umum->generatePesan("Gagal Menambahkan Data","gagal");
    redirect("admin/informasi/add");
  }
  }

  public function edit($id){
  $data['userLogin'] 		= $this->session->userdata('loginData');
  $data['detailData'] = $this->m_informasi->getListInformasiById($id);
      $this->load->view('templates/header',$data);
      $this->load->view('templates/sidebar',$data);
      $this->load->view('templates/topbar',$data);
      $this->load->view('admin/informasi/edit',$data);
      $this->load->view('templates/footer');
  }


  public function doUpdate($id){
		$post = $this->input->post();
		$dataArray = array(
			"namaPenyakit"	=> $post['namaPenyakit'],
			"content"		=> $post['content']
		);
		$update = $this->db->update("informasi",$dataArray,array( "idInformasi" => $id ));
		if($update){
			$this->m_umum->generatePesan("Berhasil mengupdate Data","berhasil");
			redirect("admin/informasi/index");
		}else{
			$this->m_umum->generatePesan("Gagal mengupdate Data","gagal");
			redirect("admin/informasi/edit");
		}
    }

  public function doDelete($id){
  $delete = $this->db->delete("informasi",array( "idInformasi"	=> $id ));
  if($delete){
    $this->m_umum->generatePesan("Berhasil delete Data","berhasil");
    redirect("admin/informasi/index");
  }else{
    $this->m_umum->generatePesan("Gagal delete Data","gagal");
    redirect("admin/informasi/index");
  }
}

}
