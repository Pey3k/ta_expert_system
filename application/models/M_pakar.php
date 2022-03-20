<?php

class M_pakar extends CI_Model {

    public function __construct(){
        parent::__construct();
        $this->load->database();
    }

	public function get_level(){
		$this->db->select("*");
		$this->db->from("level");
		$query  = $this->db->get();
		$result = $query->result();
		return $result;
	}

	public function getListPakar(){
		$this->db->select("*");
		$this->db->from("petugas");
		$query  = $this->db->get();
		$result = $query->result();
		return $result;
	}

	public function getListPakarId($id){
    $this->db->select("*");
		$this->db->from("petugas");
		$this->db->where("id_petugas",$id);
		$query  = $this->db->get();
		$result = $query->row();
		return $result;

	}


}
