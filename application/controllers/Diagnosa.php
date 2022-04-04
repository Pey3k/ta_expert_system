<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Diagnosa extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('m_diagnosa');
		$this->load->model('m_gejala');
		$this->load->model('m_penyakit');
		$this->load->model('m_pengguna');
		$this->load->model('m_rule');
	}

	public function index()
	{
		$data = $this->session->userdata('loginUser');
		if (empty($data)) {
			redirect('login');
		}

		$data['id_pengguna'] = $data['user_id'];
		$data['list_gejala'] = $this->m_gejala->getlistGejala();
		$this->load->view('client/diagnosa', $data);
	}

	public function kalkulasi()
	{
		$data['userLogin'] = $this->session->userdata('loginUser');
		$dataUserLogin = $this->session->userdata('loginUser');

		$jawaban = $this->input->post();
		if (count($jawaban) <= 1) {
			$this->session->set_flashdata('message', '<div style="font-size:14px" class="alert alert-danger" role="alert">
			Harap memasukan data gejala sebanyak minimal 2 gejala yang Anda rasakan.</div>');
			redirect('diagnosa');
		}

		foreach ($jawaban as $k => $v) {
			if ($v == "" || empty($v)) {
				unset($jawaban[$k]);
			}
		}

		if (count($jawaban) <= 1) {
			$this->session->set_flashdata('message', '<div style="font-size:14px" class="alert alert-danger" role="alert">
			Harap memasukan data gejala sebanyak minimal 2 gejala yang Anda rasakan.</div>');
			redirect('diagnosa');
		}

		$result['terpilih'] = $jawaban;
		$result['pilih'] = array();

		foreach ($jawaban as $data) {
			$role_penyakit = $this->db->query('select id_penyakit, id_gejala from rule_analisa where id_gejala = "' . $data . '"')->result_array();
			$nilai_gejala = $this->db->query('select gejala_bobot from gejala where id_gejala = "' . $data . '"')->row_array();

			$list_penyakit = array();
			$list_gejala = array();
			foreach ($role_penyakit as $key => $value) {
				$list_penyakit[] = $value['id_penyakit'];
				$list_gejala[] = $value['id_gejala'];
			}

			$result['pilih'][] = array(
				'id_penyakit' => $list_penyakit,
				'id_gejala' => $list_gejala,
				'matriks' => sprintf("m{%s(%s)}", $list_gejala[0], implode(',', $list_penyakit)),
				'nilai' => number_format($nilai_gejala['gejala_bobot'], 2, '.', '') * 1
			);
		}

		$result['table'] = array();
		$result['tableCombine'] = array();

		for ($i = 1; $i <= count($result['pilih']) - 1; $i++) {
			$result['table'][$i][] = array(
				array(),
				array(
					'id_penyakit' => $result['pilih'][$i]['id_penyakit'],
					'id_gejala' => $result['pilih'][$i]['id_gejala'],
					'matriks' => $result['pilih'][$i]['matriks'],
					'nilai' => number_format($result['pilih'][$i]['nilai'], 2, '.', '')
				),
				array(
					'id_penyakit' => array(),
					'id_gejala' => array(),
					'matriks' => array(),
					'nilai' => number_format((1 - $result['pilih'][$i]['nilai']), 2, '.', '')
				)
			);

			if ($i == 1) {
				$result['table'][$i][] = array(
					array(
						'id_penyakit' => $result['pilih'][$i - 1]['id_penyakit'],
						'id_gejala' => $result['pilih'][$i - 1]['id_gejala'],
						'matriks' => $result['pilih'][$i - 1]['matriks'],
						'nilai' => number_format($result['pilih'][$i - 1]['nilai'], 2, '.', '')
					),
					array(),
					array(),
				);


				$result['table'][$i][] = array(
					array(
						'id_penyakit' => array(),
						'id_gejala' => array(),
						'matriks' => array(),
						'nilai' => number_format((1 - $result['pilih'][$i - 1]['nilai']), 2, '.', '')
					),
					array(),
					array(),
				);

			} else {
				foreach ($result['tableCombine'][$i - 1] as $key => $value) {
					$result['table'][$i][] = array(
						array(
							'id_penyakit' => $value,
							'id_gejala' => array(),
							'matriks' => array(),
							'nilai' => number_format($result['nilaiCombine'][$i - 1][$key], 2, '.', '')
						),
						array(),
						array()
					);
				}
			}


			foreach ($result['table'][$i] as $key => $value) {
				foreach ($value as $keys => $values) {
					if ($key != 0 && $keys != 0) {
						$combine = array_intersect($result['table'][$i][0][$keys]['id_penyakit'], $result['table'][$i][$key][0]['id_penyakit']);
						$com = array();
						foreach ($combine as $keyz => $valuez) {
							$com[] = $valuez;
						}
						$combine = $com;

						if (count($result['table'][$i][0][$keys]['id_penyakit']) == 0) {
							$combine = $result['table'][$i][$key][0]['id_penyakit'];
						}

						if (count($result['table'][$i][$key][0]['id_penyakit']) == 0) {
							$combine = $result['table'][$i][0][$keys]['id_penyakit'];
						}

						if (count($result['table'][$i][0][$keys]['id_penyakit']) == 0 && count($result['table'][$i][$key][0]['id_penyakit']) == 0) {
							$combine = array();
						}

						$combineGejala = array_intersect($result['table'][$i][0][$keys]['id_gejala'], $result['table'][$i][$key][0]['id_gejala']);
						$cGejala = array();
						foreach ($combineGejala as $kG => $vG) {
							$cGejala[] = $vG;
						}
						$combineGejala = $cGejala;

						if (count($result['table'][$i][0][$keys]['id_gejala']) == 0) {
							$combineGejala = $result['table'][$i][$key][0]['id_gejala'];
						}

						if (count($result['table'][$i][$key][0]['id_gejala']) == 0) {
							$combineGejala = $result['table'][$i][0][$keys]['id_gejala'];
						}

						if (count($result['table'][$i][0][$keys]['id_gejala']) == 0 && count($result['table'][$i][$key][0]['id_gejala']) == 0) {
							$combineGejala = array();
						}

						$matriks = "";
						if (count($combine) > 0 && count($combineGejala) > 0) {
							$matriks = sprintf("m{%s(%s)}", $combineGejala[0], implode(',', $combine));
						}

						$result['table'][$i][$key][$keys] = array(
							'id_penyakit' => $combine,
							'id_gejala' => $combineGejala,
							'matriks' => $matriks,
							'nilai' => $result['table'][$i][0][$keys]['nilai'] * $result['table'][$i][$key][0]['nilai']
						);

						if (empty($result['tableCombine'][$i])) {
							$result['tableCombine'][$i][] = (array)$combine;
							$result['nilaiCombine'][$i][] = 0;
						}

						if (!in_array($combine, $result['tableCombine'][$i])) {
							$result['tableCombine'][$i][] = (array)$combine;
							$result['nilaiCombine'][$i][] = 0;
						}
					}
				}
			}

			foreach ($result['tableCombine'][$i] as $keyt => $valuet) {
				$kiri = 0;
				$kanan = 0;
				foreach ($result['table'][$i] as $key => $value) {
					foreach ($value as $keys => $values) {
						if ($key != 0 && $keys != 0) {
							if (!empty($valuet)) {
								if ($values['id_penyakit'] == $valuet) {
									$kiri += $values['nilai'];
								} else {
									if ($keys == 1 && empty($values['id_penyakit'])) {
										$kanan += $values['nilai'];
									}
								}
							} else {
								if ($values['id_penyakit'] == $valuet) {
									if ($keys == 2) {
										$kiri += $values['nilai'];
									} else {
										$kanan += $values['nilai'];
									}
								}
							}
						}
					}
				}

				$result['nilaiCombine'][$i][$keyt] = $kiri / 1;
				$result['berapaCombine'][$i][$keyt] = $kiri . "/1";
			}
		}

		$b_max = array_keys($result['nilaiCombine'][count($result['nilaiCombine'])], max($result['nilaiCombine'][count($result['nilaiCombine'])]));
		$result['max'] = $b_max[0];

		$dataSimpan = array(
			'id_pengguna' => $dataUserLogin['user_id'],
			'payload' => json_encode($result),
			'tgl_analisa' => date('Y-m-d'),
		);

		$this->db->insert("hasil_analisa", $dataSimpan);
		$idhasil = $this->db->insert_id();

		$no = 1;
		foreach ($result['nilaiCombine'][count($result['nilaiCombine'])] as $key => $value) {
			$valID = implode(',', $result['tableCombine'][count($result['tableCombine'])][$key]);

			$code = $valID;
			if (empty($valID)) {
				$code = sprintf("%s", 'Ø');
			}

			$dataAnalisa = array(
				'densitas' => sprintf("m%d", $no++),
				'kode_densitas' => $code,
				'nilai_densitas' => $value,
				'tgl_diagnosa' => date('Y-m-d'),
				'id_hasil_analisa' => $idhasil,
			);

			$this->db->insert("analisa", $dataAnalisa);

			if (!empty($value)) {
				$namePenyakit = $this->m_penyakit->getNamePenyakitByIds($valID);
				if (empty($namePenyakit)) {
					continue;
				}

				$dataDetail = array(
					'id_hasil_analisa' => $idhasil,
					'id_penyakit' => $valID,
					'nama_penyakit' => $namePenyakit,
					'persentase' => ($value * 100),
				);

				$this->db->insert("detail_hasil_analisa", $dataDetail);
			}
		}

		$newResult['data'] = array(
			'hasil' => $result
		);

		$newResult['userLogin'] = $this->session->userdata('loginUser');
		$this->load->view('client/hasil_diagnosa', $newResult);
	}

	public function tampil_hitung()
	{
		$postData = $this->input->post();

		$data['userLogin'] = $this->session->userdata('loginUser');
		$data['data'] = array(
			'hasil' => json_decode($postData['data'], true)
		);

		$this->load->view('client/tampil_hitung', $data);
	}
}
