<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_diagnosa extends CI_Model
{

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	function all_densitas($densitas, $id_pengguna)
	{
		$this->db->where(array('M' => $densitas, 'id_pengguna' => $id_pengguna, 'kode !=' => 'null'));
		$query = $this->db->get('analisa');
		return $query;
	}

	public function getListHasilUser($id)
	{
		$this->db->select("*");
		$this->db->from("hasil_analisa");
		$this->db->join("detail_hasil_analisa", "detail_hasil_analisa.id_hasil_analisa = hasil_analisa.id_hasil_analisa", "left");
		$this->db->join("pengguna", "pengguna.id_pengguna = hasil_analisa.id_pengguna", "left");
		$this->db->where("hasil_analisa.id_pengguna", $id);
		$query = $this->db->get();
		$result = $query->result();
		return $result;
	}


}
