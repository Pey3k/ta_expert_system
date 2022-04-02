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
		// Autentifikasi login userName
		$data['userLogin'] = $this->session->userdata('loginUser');
		// Mengambil data user
		$dataUserLogin = $this->session->userdata('loginUser');
		// Mengambil data gejala dari modal gejala mengambil semua data gejala
		$query = $this->m_gejala->getlistGejala();

		// Mengambil data jawaban dari post pada view di radio box
		$jawaban = $this->input->post();

		if (count($jawaban) <= 1) {
			$this->session->set_flashdata('message', '<div style="font-size:14px" class="alert alert-danger" role="alert">
			Harap memasukan data gejala sebanyak minimal 2 gejala yang Anda rasakan.   Terdapat sebanyak 30 pertanyaan untuk melakukan diagnosa gejala penyakit.</div>');
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

		if (count($jawaban) <= 1) {
			$this->session->set_flashdata('message', '<div style="font-size:14px" class="alert alert-danger" role="alert">
			Harap memasukan data gejala sebanyak minimal 2 gejala yang Anda rasakan.   Terdapat sebanyak 30 pertanyaan untuk melakukan diagnosa gejala penyakit.</div>');
			redirect('diagnosa');

		} else {

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
		}

		$dataqu['data'] = array(
			'title' => 'Sistem Pakar',
			'hasil' => $minning
		);

		// Mendapatkan data array yaitu
		$dataqu['userLogin'] = $this->session->userdata('loginUser');


		$this->load->view('client/hasil_diagnosa', $dataqu);
	}

	public function tampil_hitung()
	{
		$dataPost = $this->input->post();
		$datar = ['hasil' => json_decode($dataPost['data'], true)];
		$data['userLogin'] = $this->session->userdata('loginUser');
		$data['data'] = $datar;
		// $data['msg'] = $this->session->flashdata('msg');
		$this->load->view('client/tampil_hitung', $data);
	}

	public function solusi($id)
	{
		$data['dataPenyakit'] = $this->db->query('select * from solusi inner join penyakit on penyakit.id_penyakit = solusi.id_penyakit where penyakit.id_penyakit = "' . $id . '"')->row();

		$this->load->view('client/solusipenyakit/' . $id, $data);
	}


	public function hitungPasti()
	{
		$data['userLogin'] = $this->session->userdata('loginUser');
		$dataUserLogin = $this->session->userdata('loginUser');
		$query = $this->m_gejala->getlistGejala();

		$jawaban = $this->input->post();
		$showing = false;

		if (!empty($jawaban['showing'])) {
			$showing = true;
			unset($jawaban['showing']);
		}

		foreach ($jawaban as $key => $value) {
			if (empty($value)) {
				unset($jawaban[$key]);
			}
		}
		if (count($jawaban) <= 1) {
			$this->session->set_flashdata('message', '<div style="font-size:14px" class="alert alert-danger" role="alert">
					Harap memasukan data gejala sebanyak minimal 2 gejala yang Anda rasakan.   Terdapat sebanyak 30 pertanyaan untuk melakukan diagnosa gejala penyakit.</div>');
			redirect('diagnosa');
		}

		$minning['terpilih'] = $jawaban;

		$minning['pilih'] = [];
		foreach ($jawaban as $data) {
			$role_penyakit = $this->db->query('select id_penyakit from rule_analisa where id_gejala = "' . $data . '"')->result_array();
			$nilai_gejala = $this->db->query('select gejala_bobot from gejala where id_gejala = "' . $data . '"')->row_array();

			$list_penyakit = [];
			foreach ($role_penyakit as $key => $value) {
				$list_penyakit[] = $value['id_penyakit'];
			}
			$minning['pilih'][] = array('id_penyakit' => $list_penyakit, 'nilai' => floatval($nilai_gejala['gejala_bobot']));
		}
		$minning['table'] = [];
		$minning['tableCombine'] = [];
		for ($i = 1; $i <= count($minning['pilih']) - 1; $i++) {
			$minning['table'][$i][] = [[],
				['id_penyakit' => $minning['pilih'][$i]['id_penyakit'], 'nilai' => $minning['pilih'][$i]['nilai']],
				['id_penyakit' => [], 'nilai' => 1 - $minning['pilih'][$i]['nilai']]
			];
			if ($i == 1) {
				$minning['table'][$i][] = [['id_penyakit' => $minning['pilih'][$i - 1]['id_penyakit'], 'nilai' => $minning['pilih'][$i - 1]['nilai']],
					[],
					[]];
				$minning['table'][$i][] = [['id_penyakit' => [], 'nilai' => 1 - $minning['pilih'][$i - 1]['nilai']],
					[],
					[]];
			} else {
				foreach ($minning['tableCombine'][$i - 1] as $key => $value) {
					$minning['table'][$i][] = [['id_penyakit' => $value, 'nilai' => $minning['nilaiCombine'][$i - 1][$key]],
						[],
						[]];
				}
			}

			foreach ($minning['table'][$i] as $key => $value) {
				foreach ($value as $keys => $values) {
					if ($key != 0) {
						if ($keys != 0) {
							$combine = array_intersect($minning['table'][$i][0][$keys]['id_penyakit'], $minning['table'][$i][$key][0]['id_penyakit']);
							// PERHITUNGAN
							// ================ disini =========== //
							$com = [];
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
							$minning['table'][$i][$key][$keys] = ['id_penyakit' => $combine, 'nilai' => $minning['table'][$i][0][$keys]['nilai'] * $minning['table'][$i][$key][0]['nilai']];

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
					$minning['nilaiCombine'][$i][$keyt] = round($kiri / (1 - $kanan), 5);
					$minning['berapaCombine'][$i][$keyt] = $kiri . "/(1-" . $kanan . ")";
				}
			}
		}

		if (count($jawaban) == 1) {
			$minning['table']['pilih'] = [];
			$minning['nilaiCombine'] = [];
			$minning['max'] = 0;
			$minning['tableCombine'] = [];
			$minning['tableCombine']['1'] = ['0' => $minning['pilih'][0]['id_penyakit']];
		} else {
			$b_max = array_keys($minning['nilaiCombine'][count($minning['nilaiCombine'])], max($minning['nilaiCombine'][count($minning['nilaiCombine'])]));
			$minning['max'] = $b_max[0];

			$nilaiKombinasi = $minning['nilaiCombine'][count($minning['nilaiCombine'])][$minning['max']];

			if (!empty($minning['tableCombine'][count($minning['tableCombine'])][$b_max[0]])) {
				$dataSimpan = array(
					'idPengguna' => $dataUserLogin['UserID'],
					'tglAnalisa' => date('Y-m-d'),
				);
				$this->db->insert("hasilanalisa", $dataSimpan);
				$idhasil = $this->db->insert_id();
				foreach ($minning['tableCombine'][count($minning['tableCombine'])][$b_max[0]] as $key => $value) {

					$data_gangguan = $this->m_penyakit->getListPenyakitById($value);
					$dataDetail = array(
						'idHasilAnalisa' => $idhasil,
						'penyakit' => $data_gangguan->penyakit,
						'keterangan_penyakit' => $data_gangguan->keterangan,
						'persentase' => floatval($nilaiKombinasi * 100),
						'idPengguna' => $dataUserLogin['UserID'],
					);

					$this->db->insert("detailhasilanalisa", $dataDetail);
				}
			}
		}

		$dataqu['data'] = array(
			'title' => 'Sistem Pakar',
			'hasil' => $minning,
		);
		$dataqu['showing'] = $showing;
		$dataqu['userLogin'] = $this->session->userdata('loginUser');

		$this->load->view('client/hasil_diagnosa', $dataqu);
	}


	public function menghitung()
	{
		$data['userLogin'] = $this->session->userdata('loginUser');
		// Mengambil data user
		$dataUserLogin = $this->session->userdata('loginUser');
		// Mengambil data gejala dari modal gejala mengambil semua data gejala
		$query = $this->m_gejala->getlistGejala();

		// Mengambil data jawaban dari post pada view di radio box
		$jawaban = $this->input->post();

		if (count($jawaban) <= 1) {
			// Kondisi jika jawaban bernilai null yaitu tidak dipilih satu pun
			$this->session->set_flashdata('message', '<div style="font-size:14px" class="alert alert-danger" role="alert">
			Harap memasukan data gejala sebanyak minimal 2 gejala yang Anda rasakan.   Terdapat sebanyak 30 pertanyaan untuk melakukan diagnosa gejala penyakit.</div>');
			redirect('diagnosa');
		}

		// Membuat variabel mining sebagai penampung dengan array bernama terpilih yaitu jawaban dari gejala yang dipilih
		$minning['terpilih'] = $jawaban;
		// var_dump($minning);
		// die;


		// Deklarasi variable minning dengan aaray bernama pilih dengan data kosong dulu
		$minning['pilih'] = [];
		foreach ($jawaban as $data) {

			// Deklarasi panggil data dari rule dan gejala
			$role_penyakit = $this->db->query('select id_penyakit from rule_analisa where id_gejala = "' . $data . '"')->result_array();

			$nilai_gejala = $this->db->query('select gejala_bobot from gejala where id_gejala = "' . $data . '"')->row_array();


			// membuat deklarasi data list penyakit dengan array bernama list penyakit
			$list_penyakit = [];


			foreach ($role_penyakit as $key => $value) {

				$list_penyakit[] = $value['id_penyakit'];


			}
			// Ambil semua data pilihan gejala, namun menampilkan 1 data penyakit sampai ke nilainya
			$minning['pilih'][] = array('id_penyakit' => $list_penyakit, 'nilai' => number_format($nilai_gejala['gejala_bobot'], 2, '.', '') * 1);


		}

		// Membuat deklarasi pembuatan tabel semua gejala dan penyakit di gejala pertama
		$minning['table'] = [];


		// Membuat deklarasi pembuatan tabel gabungan matriks
		$minning['tableCombine'] = [];

		// PERHITUNGAN STUCK
		for ($i = 1; $i <= count($minning['pilih']) - 1; $i++) {

			$minning['table'][$i][] = [[],
				['id_penyakit' => $minning['pilih'][$i]['id_penyakit'],
					'nilai' => $minning['pilih'][$i]['nilai']],
				['id_penyakit' => [], 'nilai' => 1 - $minning['pilih'][$i]['nilai']]
			];

			if ($i == 1) {
				$minning['table'][$i][] = [['id_penyakit' => $minning['pilih'][$i - 1]['id_penyakit'], 'nilai' => $minning['pilih'][$i - 1]['nilai']],
					[],
					[]];

				$minning['table'][$i][] = [['id_penyakit' => [], 'nilai' => 1 - $minning['pilih'][$i - 1]['nilai']],
					[],
					[]];
			} else {
				foreach ($minning['tableCombine'][$i - 1] as $key => $value) {

					$minning['table'][$i][] = [['id_penyakit' => $value, 'nilai' => $minning['nilaiCombine'][$i - 1][$key]],
						[],
						[]];

				}

			}

			foreach ($minning['table'][$i] as $key => $value) {

				foreach ($value as $keys => $values) {
					if ($key != 0) {
						if ($keys != 0) {
							$combine = array_intersect($minning['table'][$i][0][$keys]['id_penyakit'], $minning['table'][$i][$key][0]['id_penyakit']);

							// INTERSECT HIMPUNAN
							if (count($minning['table'][$i][0][$keys]['id_penyakit']) == 0) {
								$combine = $minning['table'][$i][$key][0]['id_penyakit'];
							}
							if (count($minning['table'][$i][$key][0]['id_penyakit']) == 0) {
								$combine = $minning['table'][$i][0][$keys]['id_penyakit'];
							}
							if (count($minning['table'][$i][0][$keys]['id_penyakit']) == 0 && count($minning['table'][$i][$key][0]['id_penyakit']) == 0) {
								$combine = [];
								// Kosong teta
							}
							// Perkalian matriks baris dan kolom
							$minning['table'][$i][$key][$keys] = ['id_penyakit' => $combine, 'nilai' => $minning['table'][$i][0][$keys]['nilai'] * $minning['table'][$i][$key][0]['nilai']];

							// Cek kombinasi hasil iterasi sebelumnya
							// Kalau tidak ada
							if (empty($minning['tableCombine'][$i])) {
								$minning['tableCombine'][$i][] = $combine;
								$minning['nilaiCombine'][$i][] = 0;
							} else {
								if (!in_array($combine, $minning['tableCombine'][$i])) {
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
					$minning['nilaiCombine'][$i][$keyt] = round($kiri / (1 - $kanan), 5);
					$minning['berapaCombine'][$i][$keyt] = $kiri . "/(1-" . $kanan . ")";

				}
			}

		}

		if (count($jawaban) == 1) {
			redirect('diagnosa');
		} else {
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
					$dataDetail = array(
						'idhasilanalisa' => $idhasil,
						'penyakit' => $data_gangguan->penyakit,
						'idPengguna' => $dataUserLogin['UserID'],
					);

					$this->db->insert("detailhasilanalisa", $dataDetail);
				}
			}
		}

		$dataqu['data'] = array(
			'title' => 'Sistem Pakar',
			'hasil' => $minning
		);

		// Mendapatkan data array yaitu
		$dataqu['userLogin'] = $this->session->userdata('loginUser');


		$this->load->view('client/hasil_diagnosa', $dataqu);
	}


	public function hitung()
	{
		// Autentifikasi login userName
		$data['userLogin'] = $this->session->userdata('loginUser');
		// Mengambil data user
		$dataUserLogin = $this->session->userdata('loginUser');
		// Mengambil data gejala dari modal gejala mengambil semua data gejala
		$query = $this->m_gejala->getlistGejala();

		// Mengambil data jawaban dari post pada view di radio box
		$jawaban = $this->input->post();


		if (count($jawaban) <= 1) {
			$this->session->set_flashdata('message', '<div style="font-size:14px" class="alert alert-danger" role="alert">
			Harap memasukan data gejala sebanyak minimal 2 gejala yang Anda rasakan.   Terdapat sebanyak 30 pertanyaan untuk melakukan diagnosa gejala penyakit.</div>');
			redirect('diagnosa');
		}

		// Membuat variabel mining sebagai penampung dengan array bernama terpilih yaitu jawaban dari gejala yang dipilih
		$minning['terpilih'] = $jawaban;

		// Deklarasi variable minning dengan aaray bernama pilih dengan data kosong dulu
		$minning['pilih'] = [];


		foreach ($jawaban as $data) {

			// Deklarasi panggil data dari rule dan gejala
			$role_penyakit = $this->db->query('select id_penyakit from rule_analisa where id_gejala = "' . $data . '"')->result_array();

			$nilai_gejala = $this->db->query('select gejala_bobot from gejala where id_gejala = "' . $data . '"')->row_array();


			// membuat deklarasi data list penyakit dengan array bernama list penyakit
			$list_penyakit = [];


			foreach ($role_penyakit as $key => $value) {


				$list_penyakit[] = $value['id_penyakit'];


			}
			// Ambil semua data pilihan gejala, namun menampilkan 1 data penyakit sampai ke nilainya
			$minning['pilih'][] = array('id_penyakit' => $list_penyakit, 'nilai' => number_format($nilai_gejala['gejala_bobot'], 2, '.', '') * 1);


		}

		// Membuat deklarasi pembuatan tabel semua gejala dan penyakit di gejala pertama
		$minning['table'] = [];


		// Membuat deklarasi pembuatan tabel gabungan matriks
		$minning['tableCombine'] = [];


		// PERHITUNGAN STUCK
		for ($i = 1; $i <= count($minning['pilih']) - 1; $i++) {


			$minning['table'][$i][] = [[],
				['id_penyakit' => $minning['pilih'][$i]['id_penyakit'],
					'nilai' => $minning['pilih'][$i]['nilai']],
				['id_penyakit' => [], 'nilai' => 1 - $minning['pilih'][$i]['nilai']]
			];


			if ($i == 1) {
				$minning['table'][$i][] = [['id_penyakit' => $minning['pilih'][$i - 1]['id_penyakit'], 'nilai' => $minning['pilih'][$i - 1]['nilai']],
					[],
					[]];


				$minning['table'][$i][] = [['id_penyakit' => [], 'nilai' => 1 - $minning['pilih'][$i - 1]['nilai']],
					[],
					[]];

			} else {
				foreach ($minning['tableCombine'][$i - 1] as $key => $value) {
					// var_dump($minning['tableCombine'][$i-1]);
					// die;

					$minning['table'][$i][] = [['id_penyakit' => $value, 'nilai' => $minning['nilaiCombine'][$i - 1][$key]],
						[],
						[]];

				}

			}

			foreach ($minning['table'][$i] as $key => $value) {
				foreach ($value as $keys => $values) {
					if ($key != 0) {
						if ($keys != 0) {
							$combine = array_intersect($minning['table'][$i][0][$keys]['id_penyakit'], $minning['table'][$i][$key][0]['id_penyakit']);
							// PERHITUNGAN
							// ================ disini =========== //
							$com = [];
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
							$minning['table'][$i][$key][$keys] = ['id_penyakit' => $combine, 'nilai' => $minning['table'][$i][0][$keys]['nilai'] * $minning['table'][$i][$key][0]['nilai']];

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
					$minning['nilaiCombine'][$i][$keyt] = round($kiri / (1 - $kanan), 5);
					$minning['berapaCombine'][$i][$keyt] = $kiri . "/(1-" . $kanan . ")";

				}
			}

		}

		if (count($jawaban) == 1) {
			redirect('diagnosa');

		} else {

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
					$dataDetail = array(
						'idHasilAnalisa' => $idhasil,
						'penyakit' => $data_gangguan->penyakit,
						'idPengguna' => $dataUserLogin['UserID'],
					);

					$this->db->insert("detailhasilanalisa", $dataDetail);
				}
			}
		}

		$dataqu['data'] = array(
			'title' => 'Sistem Pakar',
			'hasil' => $minning
		);

		// Mendapatkan data array yaitu
		$dataqu['userLogin'] = $this->session->userdata('loginUser');


		$this->load->view('client/hasil_diagnosa', $dataqu);
	}

}
