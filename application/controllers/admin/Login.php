<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('m_login');
		$this->load->library('form_validation');
	}

	public function index()
	{
		$this->load->view('admin/login');
	}

	public function masuk()
	{
		$this->form_validation->set_rules('username', 'Username', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');


		if ($this->form_validation->run() == false) {
			$this->load->view('admin/login');
		} else {
			{
				$this->_login();
			}
		}
	}

	private function _login()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$user = $this->db->get_where('petugas', ['username' => $username])->row_array();
		//user ada
		if ($user) {
			//jika user active
			if ($user['is_active'] == 1) {

				//cek password
				if (password_verify($password, $user['password'])) {
					$data = [
						'nama_petugas' => $user['nama_petugas'],
						'username' => $user['username']

					];
					$this->session->set_userdata($data);
					if ($user['role_id'] == 1) {
						redirect('admin/login');
					} else {
						redirect('admin/dashboard');
					}

				} else {
					$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
				Password yang Anda masukan salah!</div>');
					redirect('admin/login');
				}
			} else
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
				Username belum terverifikasi. Silahkan menunggu verifikasi dari sistem.</div>');
			redirect('admin/login');
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
				Username tidak terdaftar</div>');
			redirect('admin/login');
		}
	}

	public function doLogin()
	{
		$dataPost = $this->input->post();
		$username = $this->input->post('username');

		$user = $this->db->get_where('petugas', ['username' => $username])->row_array();
		/* debugCode($dataPost); */
		if ($this->m_login->checkLogin($dataPost['username'], $dataPost['password']) && $user['is_active'] == 1) {
			//echo "success";
			redirect('admin/dashboard');
		} else {
			$this->session->set_flashdata('message', '<div style="font-size:15px" class="alert alert-danger" role="alert">
			Username atau password yang Anda masukan salah!</div>');
			redirect('admin/login');
		}
	}

	function logout()
	{
		$this->session->unset_userdata('loginData');
		redirect('');
	}

	function register_admin()
	{
		$post = $this->input->post();
		$insertData = array(
			"nama_petugas" => $post['nama'],
			"username" => $post['username'],
			"password" => md5($post['password']),
			"date_created" => date("Y-m-d H:i:s")
		);
		$check1 = $this->m_login->check_username($post['username']);
		if ($check1 < 1) {
			if ($this->db->insert("petugas", $insertData)) {
				$this->session->set_flashdata('registrasiSukses', 'Ya');
				redirect('admin/login');
			} else {
				$this->session->set_flashdata('registrasiGagal', 'Ya');
				redirect('admin/login');
			}
		} else {

			$this->session->set_flashdata('registrasiGagal', 'Ya');
			redirect('admin/login');
		}

	}

	public function aktivasi()
	{
		$data = array(
			"is_active" => 1
		);
		$update = $this->db->update("dosen", $data, array("id" => $this->uri->segment(4)));
		if ($update) {
			echo "<script>alert('Aktivasi berhasil, silahkan login untuk melanjutkan aktivitas')</script>";
			echo "<script>window.location = '" . base_url() . "login';</script>";
		}
	}

	function email($par1, $par2)
	{
		$data = array('subject' => 'Aktivasi Akun Anda',
			'receiver' => $par1,
			'msg' => 'Klik link dibawah ini untuk aktivasi akun Anda : <br>http://operation.kpptechnology.co.id/fathi/aci/admin/login/aktivasi/' . $par2);
		$mail = $this->htmlmail($data);
	}

	function email2()
	{
		$data = array('subject' => 'Aktivasi Akun Anda',
			'receiver' => 'fitrianiyulia1@gmail.com',
			'msg' => 'Klik link dibawah ini untuk aktivasi akun Anda : <br>http://operation.kpptechnology.co.id/fathi/aci/admin/login/aktivasi/');
		$mail = $this->htmlmail($data);
	}

	public function htmlmail($data)
	{
		$config = array(
			'protocol' => 'smtp',
			'smtp_host' => 'ssl://smtp.googlemail.com',
			'smtp_port' => 465,
			'smtp_user' => 'mail.blast0@gmail.com',
			'smtp_pass' => 'mail098*()',
			'smtp_timeout' => '10',
			'mailtype' => 'html',
			'charset' => 'iso-8859-1'
		);


		$this->load->library('email', $config);
		$this->email->set_newline("\r\n");

		$this->email->from('admin-spk-mutasi@gmail.com', 'Sistem Pendukung Keputusan Mutasi Dosen');
		$this->email->to($data['receiver']);  // replace it with receiver mail id
		$this->email->subject($data['subject']); // replace it with relevant subject

		//$body = $this->load->view($data['html'],$data,TRUE);
		$this->email->message($data['msg']);
		if ($this->email->send()) {
			echo "Berhasil";
			die;
			$this->email->clear(TRUE);
			return true;
		} else {
			echo $this->email->print_debugger();
			return false;
		}
	}


	public function register_user()
	{
		$post = $this->input->post();
		$dataArray = array(
			"nama_user" => $post['nama'],
			"email" => $post['email'],
			"username" => $post['username'],
			"password" => md5($post['pass']),
		);
		$insert = $this->db->insert("user", $dataArray);
		if ($insert) {
			$this->session->set_flashdata('registerOK', 'Ya');
			redirect('login');

		} else {
			$this->session->set_flashdata('registerNOT_OK', 'Ya');
			redirect('login');
		}
	}

	public function blocked()
	{
		$this->load->view('admin/blocked');
	}

	public function registration()
	{

		if ($this->session->userdata('username')) {
			redirect('admin/dashboard');
		}

		$this->form_validation->set_rules('nama_petugas', 'Name', 'required|trim');
		$this->form_validation->set_rules('username', 'Username', 'required|trim|is_unique[petugas.username]',
			[
				'is_unique' => 'Username sudah terdaftar.'
			]);


		$this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[3]|matches[password2]', [
			'matches' => 'Pasword tidak sesuai',
			'min_length' => 'Password terlalu pendek'
		]);
		$this->form_validation->set_rules('password2', 'Password', 'required|trim|min_length[3]|matches[password1]');

		if ($this->form_validation->run() == false) {
			$this->load->view('admin/registrasi_admin');
		} else {
			$data = [
				'nama_petugas' => htmlspecialchars($this->input->post('nama_petugas', true)),
				'username' => htmlspecialchars($this->input->post('username', true)),
				'password' => md5($this->input->post('password1')),
			];

			$this->db->insert('petugas', $data);
			$this->session->set_flashdata('message', '<div style="font-size:14px" class="alert alert-success" role="alert">
			Registrasi admin berhasil. Silahkan melakukan login.</div>');
			redirect('admin/login');
		}
	}

}
