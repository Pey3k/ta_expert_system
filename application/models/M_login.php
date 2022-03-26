<?php

class M_login extends CI_Model
{

	function checkLogin($username, $password)
	{
		$this->db->select('*');
		$this->db->from('petugas');
		$this->db->where('username', $username);
		$this->db->where('password', md5($password));
		$query = $this->db->get();
		//debugCode($query->num_rows());
		if ($query->num_rows() > 0) {
			$querycheck = $query->result();

			$dataArr = array(
				'UserID' => $querycheck[0]->id_petugas,
				'userName' => $querycheck[0]->nama_petugas,
				"level" => 1
			);
			$this->session->set_userdata('loginData', $dataArr);
			return true;
		} else {
			$this->session->set_flashdata('GagalLogin', 'Ya');
			return false;
		}
	}

	public function check_login_user($username, $password)
	{
		$this->db->select("*");
		$this->db->from("pengguna");
		$this->db->where('username', $username);
		$this->db->where("password", md5($password));
		// Ambil data
		$query = $this->db->get();
		if ($query->num_rows() > 0) {
			$querycheck = $query->result();
			$dataArr = array(
				'UserID' => $querycheck[0]->id_pengguna,
				'userName' => $querycheck[0]->nama_pengguna,
				"level" => 99
			);
			$this->session->set_userdata('loginUser', $dataArr);
			return true;
		} else {
			$this->session->set_flashdata('GagalLogin', 'Ya');
			return false;
		}
	}


	public function checkusername($username)
	{
		$this->db->select('*');
		$this->db->from('pengguna');
		$this->db->where('username', $username);
		$query = $this->db->get();
		$result = $query->num_rows();
		return $result;
	}

	public function check_username($username)
	{
		$this->db->select('*');
		$this->db->from('petugas');
		$this->db->where('username', $username);
		$query = $this->db->get();
		$result = $query->num_rows();
		return $result;
	}

	public function checkemail($email)
	{
		$this->db->select('*');
		$this->db->from('pengguna');
		$this->db->where('email', $email);
		$query = $this->db->get();
		$result = $query->num_rows();
		return $result;
	}

}
