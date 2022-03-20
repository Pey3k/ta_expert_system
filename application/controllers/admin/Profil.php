<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profil extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_umum');

    }

    public function index()
    {

        $data['userLogin'] = $this->session->userdata('loginData');

      $this->load->view('templates/header',$data);
      $this->load->view('templates/sidebar',$data);
      $this->load->view('templates/topbar',$data);
      $this->load->view('admin/profile.php',$data);
      $this->load->view('templates/footer');
    }

    // public function edit()
    // {
    //     $data['title'] = 'Edit Profile';
    //     $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();

    //     $this->form_validation->set_rules('name','Full Name','required|trim');

    //     if($this->form_validation->run() == false)
    //     {
    //         $this->load->view('templates/header',$data);
    //     $this->load->view('templates/sidebar',$data);
    //     $this->load->view('templates/topbar',$data);
    //     $this->load->view('user/edit',$data);
    //     $this->load->view('templates/footer');

    //     }else{

    //         $name = $this->input->post('name');
    //         $username = $this->input->post('username');


    //       //cek gambar
    //       $upload_image = $_FILES['image']['name'];

    //         if($upload_image){

    //             $config['allowed_types'] = 'gif|jpg|png';
    //             $config['max_size']     = '2048';
    //             $config['upload_path'] = '.assets/backend-assets/img/profile/';

    //             $this->load->library('upload', $config);

    //             if($this->upload->do_upload('image'))
    //             {

    //                 $old_image = $data['user']['image'];

    //                 if($old_image != 'default.jpg')
    //                 {
    //                     unlink(FCPATH . 'assets/backend-assets/img/profile/' . $old_image);
    //                 }


    //                 $new_image = $this->upload->data('file_name');
    //                 $this->db->set('image',$new_image);
    //             }else{
    //                 echo $this->upload->display_errors();                }

    //         }

    //        //cek selesai

    //         $this->db->set('name',$name);
    //         $this->db->where('username',$username);
    //         $this->db->update('user');


    //         $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
	// 		Profile updated</div>');
	// 		redirect('user');
    //     }

    // }
}
