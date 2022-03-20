<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_informasi extends CI_Model {
	
	public function __construct(){
        parent::__construct();
        $this->load->database();
    }
	
	public function getlistInformasi(){
		$this->db->select("*");
		$this->db->from("informasi");
		$query 	= $this->db->get();
		$result = $query->result();
		return $result;
	}
	
	public function getlistInformasiById($id){
		$this->db->select("*");
		$this->db->from("informasi");
		$this->db->where("idInformasi",$id);
		$query 	= $this->db->get();
		$result = $query->row();
		return $result;
	}
	

}