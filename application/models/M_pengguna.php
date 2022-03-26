<?php

class M_pengguna extends CI_Model
{

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function get_level()
	{
		$this->db->select("*");
		$this->db->from("level");
		$query = $this->db->get();
		$result = $query->result();
		return $result;
	}

	public function getListPengguna()
	{
		$this->db->select("*");
		$this->db->from("petugas");
		$query = $this->db->get();
		$result = $query->result();
		return $result;
	}

	public function getListPenggunaId($id)
	{
		$this->db->select("*");
		$this->db->from("pengguna");
		$this->db->where("id_pengguna", $id);
		$query = $this->db->get();
		$result = $query->row();
		return $result;

	}

	public function getListPetugasId($id)
	{
		$this->db->select("*");
		$this->db->from("petugas");
		$this->db->where("id_petugas", $id);
		$query = $this->db->get();
		$result = $query->row();
		return $result;
	}

}
