<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_diagnosa extends CI_Model {

	public function __construct(){
        parent::__construct();
        $this->load->database();
    }


	public function getFirstQuestion($id){
		$this->db->select("pertanyaan_id");
		$this->db->from("pertanyaan");
		$this->db->where("id_gejala",$id);
		$this->db->order_by("pertanyaan_id","ASC");
		/* $this->db->group_by("id_gejala"); */
		$query 	= $this->db->get();
		$result = $query->result();
		return $result[0]->pertanyaan_id;
	}

	public function getPertanyaan($id1,$id2){
		$this->db->select("p.id_gejala,p.is_ya,p.is_tidak,p.pertanyaan");
		$this->db->from("pertanyaan p");
		$this->db->join("master_pertanyaan kp", "p.pertanyaan_id = kp.master_pertanyaan_id","left");
		$this->db->join("master_pertanyaan mp", "p.is_tidak = mp.master_pertanyaan_id","left");
		$this->db->join("master_pertanyaan ap", "p.is_ya = ap.master_pertanyaan_id","left");
		$this->db->where("id_gejala",$id1);
		$this->db->where("p.pertanyaan_id",$id2);
		$this->db->group_by("pertanyaan_id");
		$query 	= $this->db->get();
		$result = $query->row();
		return $result;
	}

	public function getSolusi($id){
		$this->db->select("*");
		$this->db->from("solusi AS sl");
		$this->db->join("penyakit AS jk","jk.id_penyakit = sl.id_penyakit");
		$this->db->where("jk.id_penyakit",$id);
		$query  = $this->db->get();
		$result = $query->row();
		return $result;
	}

	public function getUsertanya($id){
		$this->db->select("pu.*,nama_user");
		$this->db->from("pertanyaan_user pu");
		$this->db->join("user","pu.id_user = user.id_user");
		$this->db->where("pu.id_user like",$id);
		$query 	= $this->db->get();
		$result = $query->result();
		return $result;
	}

	public function getUsertanyaById($id){
		$this->db->select("*");
		$this->db->from("pertanyaan_user");
		$this->db->where("id_pertanyaan_user",$id);
		$query 	= $this->db->get();
		$result = $query->row();
		return $result;
	}

	public function daftarticket($id){
		$this->db->select("t.*,jk.jenis_kerusakan,ts.nama nama_teknisi,ts.no_hp nohp_teknisi");
		$this->db->from("ticket AS t");
		$this->db->join("solusi AS s","t.id_solusi = s.id_solusi");
		$this->db->join("teknisi AS ts","t.nik = ts.nik","left");
		$this->db->join("jenis_kerusakan AS jk","jk.id_jenis_kerusakan = s.id_jenis_kerusakan");
		$this->db->where("t.id_user like '".$id."'");
		$query 	= $this->db->get();
		$result = $query->result();
		return $result;
	}

	public function daftarticketbyno($id){
		$this->db->select("t.*,jk.jenis_kerusakan");
		$this->db->from("ticket AS t");
		$this->db->join("solusi AS s","t.id_solusi = s.id_solusi");
		$this->db->join("jenis_kerusakan AS jk","jk.id_jenis_kerusakan = s.id_jenis_kerusakan");
		$this->db->where("t.no_ticket like",$id);
		$query 	= $this->db->get();
		$result = $query->result_array();
		return $result[0];
	}

	public function getDiagnosaUser(){
		$this->db->select("*");
		$this->db->from("hasil_diagnosa_user");
		$this->db->join("pengguna","pengguna.id_pengguna = hasil_diagnosa_user.id_user");
		$query  = $this->db->get();
		$result = $query->result();
		return $result;
	}

	///
	function all_densitas($densitas, $id_pengguna){
		$this->db->where(array('M'=> $densitas,'id_pengguna'=>$id_pengguna,'kode !='=> 'null'));
		$query=$this->db->get('analisa');
		return $query;
	}

	function cek_himpunan($densitas,$himpunan,$id_pengguna){
		$query=$this->db->get_where('analisa',array('M'=>$densitas,'kode'=>$himpunan,'id_pengguna'=> $id_pengguna));

		return ($query->num_rows() > 0 ) ? $query->row() : FALSE;
	}

	function cek_himpunan_null($M,$id_pengguna){
		$query=$this->db->get_where('analisa',array('M'=>$M,'kode'=>'null','id_pengguna' => $id_pengguna));
		return ($query->num_rows() > 0 ) ? $query->row() : FALSE;
	}

	function himpunan_null($M,$id_pengguna){
		$query=$this->db->get_where('analisa',array('M'=>$M,'kode'=>'null','id_pengguna' => $id_pengguna));
		$n_null=0;
		foreach($query->result() as $data){
			$n_null=$n_null+$data->nilai;

		}
		return $n_null;
	}

	function m_max($id_pengguna){
		$this->db->select_max('m');
		$query = $this->db->get_where('analisa',array('id_pengguna' => $id_pengguna));
		foreach($query->result() as $data){
			$max=$data->m;
		}
		$n_max= $this->nilai_max($max,$id_pengguna);
		$him_max= $this-> himpunan_max($n_max,$id_pengguna);
		return array('kode' => $him_max,'densitas' => $n_max);
	}

	function nilai_max($m,$id_pengguna){
		$this->db->select_max('nilai');
		$query = $this->db->get_where('analisa',array('m'=>$m,'id_pengguna' => $id_pengguna, 'kode !='=> 'null'));
		foreach($query->result() as $data){
			$max=$data->nilai;
		}
		return $max;
	}
	function himpunan_max($nilai,$id_pengguna){
		$query = $this->db->get_where('analisa',array('nilai'=>$nilai,'id_pengguna' => $id_pengguna, 'kode !='=> 'null'));
		foreach($query->result() as $data){
			$him=$data->kode;
		}
		return $him;

	}

	public function getListHasilUser($id){
		$this->db->select("*");
		$this->db->from("hasilanalisa");
		$this->db->join("detailhasilanalisa" , "detailhasilanalisa.idHasilAnalisa = hasilanalisa.idHasilAnalisa","left");
		$this->db->join("pengguna" , "pengguna.id_pengguna = hasilanalisa.idPengguna","left");
		// $this->db->join("analisa" , "pengguna.id_pengguna = hasilAnalisa.idPengguna","left");
		$this->db->where("hasilanalisa.idPengguna", $id);
		$query  = $this->db->get();
		$result = $query->result();
		return $result;
	}


}
