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

		$data['id_pengguna'] = $data['UserID'];
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

		// Membuat variabel mining sebagai penampung dengan array bernama terpilih yaitu jawaban dari gejala yang dipilih
		$minning['terpilih'] = $jawaban;

		// Deklarasi variable minning dengan aaray bernama pilih dengan data kosong dulu
		$minning['pilih'] = array();

		foreach ($jawaban as $data) {

			if ($data == "") {
				continue;
			}

			// Deklarasi panggil data dari rule dan gejala
			$role_penyakit = $this->db->query('select id_penyakit from rule_analisa where id_gejala = "' . $data . '"')->result_array();

			$nilai_gejala = $this->db->query('select gejala_bobot from gejala where id_gejala = "' . $data . '"')->row_array();

			// membuat deklarasi data list penyakit dengan array bernama list penyakit
			$list_penyakit = array();

			foreach ($role_penyakit as $key => $value) {
				$list_penyakit[] = $value['id_penyakit'];
			}
			// Ambil semua data pilihan gejala, namun menampilkan 1 data penyakit sampai ke nilainya
			$minning['pilih'][] = array('id_penyakit' => $list_penyakit, 'nilai' => number_format($nilai_gejala['gejala_bobot'], 2, '.', '') * 1);
		}

		if (count($minning['pilih']) == 0) {
			$this->session->set_flashdata('message', '<div style="font-size:14px" class="alert alert-danger" role="alert">
			Harap memasukan data gejala sebanyak minimal 2 gejala yang Anda rasakan.</div>');
			redirect('diagnosa');
		}

		// Membuat deklarasi pembuatan tabel semua gejala dan penyakit di gejala pertama
		$minning['table'] = array();

		// Membuat deklarasi pembuatan tabel gabungan matriks
		$minning['tableCombine'] = array();


		for ($i = 1; $i <= count($minning['pilih']) - 1; $i++) {

			$minning['table'][$i][] = [
				array(),
				[
					'id_penyakit' => $minning['pilih'][$i]['id_penyakit'],
					'nilai' => $minning['pilih'][$i]['nilai']
				],
				[
					'id_penyakit' => array(),
					'nilai' => 1 - $minning['pilih'][$i]['nilai']
				]
			];


			if ($i == 1) {
				$minning['table'][$i][] = [
					[
						'id_penyakit' => $minning['pilih'][$i - 1]['id_penyakit'],
						'nilai' => $minning['pilih'][$i - 1]['nilai']
					],
					array(),
					array()
				];


				$minning['table'][$i][] = [
					[
						'id_penyakit' => array(),
						'nilai' => 1 - $minning['pilih'][$i - 1]['nilai']
					],
					array(),
					array()
				];

			} else {
				foreach ($minning['tableCombine'][$i - 1] as $key => $value) {
					$minning['table'][$i][] = [
						[
							'id_penyakit' => $value,
							'nilai' => $minning['nilaiCombine'][$i - 1][$key]
						],
						array(),
						array()
					];

				}

			}

			foreach ($minning['table'][$i] as $key => $value) {
				foreach ($value as $keys => $values) {
					if ($key != 0) {
						if ($keys != 0) {
							$combine = array_intersect($minning['table'][$i][0][$keys]['id_penyakit'], $minning['table'][$i][$key][0]['id_penyakit']);
							// PERHITUNGAN
							// ================ disini =========== //
							$com = array();
							foreach ($combine as $keyz => $valuez) {
								$com[] = $valuez;
							}
							$combine = $com;
							// ============== sampai sini ========= //


							if (count($minning['table'][$i][0][$keys]['id_penyakit']) == 0) {
								$combine = $minning['table'][$i][$key][0]['id_penyakit'];
							}
							if (count($minning['table'][$i][$key][0]['id_penyakit']) == 0) {
								$combine = $minning['table'][$i][0][$keys]['id_penyakit'];
							}
							if (count($minning['table'][$i][0][$keys]['id_penyakit']) == 0 && count($minning['table'][$i][$key][0]['id_penyakit']) == 0) {
								$combine = [];
							}
							$minning['table'][$i][$key][$keys] = [
								'id_penyakit' => $combine,
								'nilai' => $minning['table'][$i][0][$keys]['nilai'] * $minning['table'][$i][$key][0]['nilai']
							];

							if (empty($minning['tableCombine'][$i])) {
								// ================ disini =========== //
								$combine = (array)$combine;
								// ============= sampai sini ========= //

								$minning['tableCombine'][$i][] = $combine;
								$minning['nilaiCombine'][$i][] = 0;
							} else {
								if (!in_array($combine, $minning['tableCombine'][$i])) {
									// ================ disini ============ //
									$combine = (array)$combine;
									// ============== sampai sini ========= //

									$minning['tableCombine'][$i][] = $combine;
									$minning['nilaiCombine'][$i][] = 0;
								}
							}
						}
					}
				}
			}

			foreach ($minning['tableCombine'][$i] as $keyt => $valuet) {
				$kiri = 0;
				$kanan = 0;
				foreach ($minning['table'][$i] as $key => $value) {
					foreach ($value as $keys => $values) {
						if ($key != 0) {
							if ($keys != 0) {
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
				}
				if ($i == 1) {
					$minning['nilaiCombine'][$i][$keyt] = $kiri / 1;
					$minning['berapaCombine'][$i][$keyt] = $kiri . "/1";
				} else {
					$minning['nilaiCombine'][$i][$keyt] = $kiri / 1;
					$minning['berapaCombine'][$i][$keyt] = $kiri . "/1";
				}
			}
		}

		$b_max = array_keys($minning['nilaiCombine'][count($minning['nilaiCombine'])], max($minning['nilaiCombine'][count($minning['nilaiCombine'])]));
		$minning['max'] = $b_max[0];

		if (!empty($minning['tableCombine'][count($minning['tableCombine'])][$b_max[0]])) {

			$dataSimpan = array(
				'idPengguna' => $dataUserLogin['UserID'],
				'tglAnalisa' => date('Y-m-d'),
			);
			$this->db->insert("hasilanalisa", $dataSimpan);
			$idhasil = $this->db->insert_id();
			foreach ($minning['tableCombine'][count($minning['tableCombine'])][$b_max[0]] as $key => $value) {
				$data_gangguan = $this->m_penyakit->getListPenyakitById($value);
				if (empty($data_gangguan)) {
					continue;
				}

				$dataDetail = array(
					'idHasilAnalisa' => $idhasil,
					'penyakit' => $data_gangguan->penyakit,
					'idPengguna' => $dataUserLogin['UserID'],
					'persentase' => ($minning['nilaiCombine'][count($minning['tableCombine'])][$b_max[0]] * 100),
				);

				$this->db->insert("detailhasilanalisa", $dataDetail);
			}
		}

		$dataqu['data'] = array(
			'title' => 'Sistem Petugas',
			'hasil' => $minning
		);

		// Mendapatkan data array yaitu
		$dataqu['userLogin'] = $this->session->userdata('loginUser');


		$this->load->view('client/hasil_diagnosa', $dataqu);
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
