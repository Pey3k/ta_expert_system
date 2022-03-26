<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_gejala extends CI_Model
{

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function getlistGejala()
	{
		$this->db->select("*");
		$this->db->from("gejala");
		$this->db->order_by("id_gejala");
		$query = $this->db->get();
		$result = $query->result();
		return $result;
	}

	public function getlistGejalaById($id)
	{
		$this->db->select("*");
		$this->db->from("gejala gk");
		$this->db->where("id_gejala", $id);
		$query = $this->db->get();
		$result = $query->row();
		return $result;
	}

	public function getlistGejalaByIn($id)
	{
		$this->db->select("*");
		$this->db->from("gejala gk");
		$this->db->where("id_gejala in ($id)");
		$query = $this->db->get();
		$result = $query->result();
		return $result;
	}

	public function getlistPertanyaan($id)
	{
		$this->db->select("*");
		$this->db->from("pertanyaan");
		$this->db->where("id_gejala", $id);
		$this->db->order_by("pertanyaan_id", "asc");
		$query = $this->db->get();
		$result = $query->result();
		return $result;
	}

	public function getlistPertanyaanById($id1, $id2)
	{
		$this->db->select("*");
		$this->db->from("pertanyaan");
		$this->db->where("id_gejala", $id1);
		$this->db->where("id_pertanyaan", $id2);
		$query = $this->db->get();
		$result = $query->row();
		return $result;
	}

	public function checkPertanyaan($id1, $par)
	{
		$this->db->select("*");
		$this->db->from("pertanyaan");
		$this->db->where("id_gejala", $id1);
		$this->db->where("pertanyaan_id", $par);
		$this->db->order_by("pertanyaan_id", "asc");
		$query = $this->db->get();
		$result = $query->num_rows();
		return $result;
	}

	public function getID()
	{
		$this->db->select("max(round(right(id_gejala,2),0)) id", false);
		$this->db->from("gejala");
		$query = $this->db->get();
		$result = $query->row();
		return $result;
	}
}
