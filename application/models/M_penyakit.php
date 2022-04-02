<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_penyakit extends CI_Model
{

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function listPenyakit()
	{
		$this->db->select("*");
		$this->db->from("penyakit");
		$this->db->order_by("id_penyakit");
		$query = $this->db->get();
		$result = $query->result();
		return $result;
	}

	public function getListPenyakitById($id)
	{
		$this->db->select("*");
		$this->db->from("penyakit");
		$this->db->where("id_penyakit", $id);
		$query = $this->db->get();
		$result = $query->row();
		return $result;
	}

	public function getIDPenyakit()
	{
		$this->db->select("max(round(right(id_penyakit,2),0)) id_penyakit", false);
		$this->db->from("penyakit");
		$query = $this->db->get();
		$result = $query->row();
		return $result;
	}

	public function getListRuleByPenyakit($id)
	{
		$this->db->select("ra.*,g.gejala");
		$this->db->from("rule_analisa ra");
		$this->db->join("gejala g", "ra.id_gejala = g.id_gejala");
		$this->db->where("id_penyakit", $id);
		$this->db->order_by("ra.id_gejala");
		$query = $this->db->get();
		$result = $query->result();
		return $result;
	}

	public function getListRule($id, $id2)
	{
		$this->db->select("ra.*,g.gejala");
		$this->db->from("rule_analisa ra");
		$this->db->join("gejala g", "ra.id_gejala = g.id_gejala");
		$this->db->where("id_penyakit", $id);
		$this->db->where("ra.id_gejala", $id2);
		$this->db->order_by("ra.id_gejala");
		$query = $this->db->get();
		$result = $query->result();
		return $result;
	}

	public function getListRuleByGejala($id)
	{
		$sql = "select * from (
				SELECT ra.id_penyakit, penyakit, solusi,x.jumlah_gejala
				FROM rule_analisa ra INNER JOIN gejala g ON ra.id_gejala = g.id_gejala
									 INNER JOIN penyakit p on ra.id_penyakit = p.id_penyakit
									 INNER JOIN solusi s on ra.id_penyakit = s.id_penyakit
									 INNER JOIN (SELECT id_penyakit,count(ra.id_gejala) jumlah_gejala
				FROM rule_analisa ra JOIN gejala g ON ra.id_gejala = g.id_gejala
				group BY id_penyakit) x on x.id_penyakit = ra.id_penyakit
				WHERE ra.id_gejala in ($id)) A
				order by A.jumlah_gejala desc";
		$query = $this->db->query($sql);
		$result = $query->result();
		return $result;
	}

	function detail_penyakit($id)
	{
		$qgangguan = $this->db->get_where('penyakit', array('id_penyakit' => $id));
		foreach ($qgangguan->result() as $dgangguan) {
			$data['id_penyakit'] = $dgangguan->id_penyakit;
			$data['penyakit'] = $dgangguan->penyakit;
			$data['keterangan'] = $dgangguan->keterangan;
		}
		return $data;
	}

	public function countPenyakitWithoutSolusi()
	{
		$sql = "SELECT
					count(id_penyakit) AS jumlah
				FROM
					penyakit
				WHERE
					solusi IS NULL
					OR solusi = ''";

		$query = $this->db->query($sql);
		$result = $query->result();
		return $result;
	}


}
