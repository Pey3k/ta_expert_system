<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_rule extends CI_Model {

	public function __construct(){
        parent::__construct();
        $this->load->database();
    }

	public function getDataById($id){
		$this->db->select("*");
		$this->db->from("rule_analisa");
		$this->db->where("id_rule_analisa",$id);
		$query = $this->db->get();
		$result = $query->row();
		return $result;
	}

	public function getGejalaById($id){
		$this->db->select("*");
		$this->db->from("rule_analisa");
		$this->db->where("id_gejala",$id);
		$query = $this->db->get();
		$result = $query->result();
		return $result;
	}
}
