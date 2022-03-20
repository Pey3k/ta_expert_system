<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_solusi extends CI_Model {
	
	public function __construct(){
        parent::__construct();
        $this->load->database();
    }
	
	public function getPenyakit(){
		$this->db->select("*");
		$this->db->from("penyakit");
		$query 	= $this->db->get();
		$result = $query->result();
		return $result;
	}
	
	public function getListsolusi(){
		$this->db->select("*");
		$this->db->from("solusi AS sl");
		$this->db->join("penyakit AS jk","jk.id_penyakit = sl.id_penyakit");
		$query 	= $this->db->get();
		$result = $query->result();
		return $result;
	}
	
	public function getListByID($id){
		$this->db->select("*");
		$this->db->from("solusi");
		$this->db->where("id_solusi",$id);
		$query 	= $this->db->get();
		$result = $query->row();
		return $result;
	}
	
	public function getListByPenyakit($id){
		$this->db->select("*");
		$this->db->from("solusi");
		$this->db->where("id_penyakit in ($id)");
		$query 	= $this->db->get();
		$result = $query->result();
		return $result;
	}
}