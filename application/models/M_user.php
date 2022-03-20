<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_user extends CI_Model {

    public function __construct(){
        parent::__construct();
        $this->load->database();
    }


	public function getListPengguna(){
		$this->db->select("*");
		$this->db->from("pengguna");
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

	public function getListPenggunaId($id){
		$this->db->select("*");
		$this->db->from("pengguna");
		$this->db->where("id_pengguna",$id);
		$query  = $this->db->get();
		$result = $query->row();
		return $result;
	}

  public function getListPendaftaran(){
		$this->db->select("*");
		$this->db->from("pengguna");
		$query = $this->db->get();
		$result = $query->result();
		return $result;
	}


}
