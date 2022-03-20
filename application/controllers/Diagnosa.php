<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Diagnosa extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('m_diagnosa');
		$this->load->model('m_gejala');
		$this->load->model('m_penyakit');
		$this->load->model('m_pengguna');
        $this->load->model('m_rule');

	}


	public function index(){
		$data = $this->session->userdata('loginUser');
		// var_dump($data);
		// die;
		$data['id_pengguna'] = $data['UserID'];
		$data['list_gejala']	= $this->m_gejala->getlistGejala();
		$this->load->view('client/diagnosa', $data);
	}

		public function kalkulasi()
	{
		// Autentifikasi login userName
		$data['userLogin'] = $this->session->userdata('loginUser');
		// Mengambil data user
		$dataUserLogin = $this->session->userdata('loginUser');
		// Mengambil data gejala dari modal gejala mengambil semua data gejala
		$query	=	$this->m_gejala->getlistGejala();

		// Mengambil data jawaban dari post pada view di radio box
		$jawaban = $this->input->post();


		if (count($jawaban) == 0) {
			// Kondisi jika jawaban bernilai null yaitu tidak dipilih satu pun
			redirect('diagnosa');
		}

		// Membuat variabel mining sebagai penampung dengan array bernama terpilih yaitu jawaban dari gejala yang dipilih
		$minning['terpilih'] = $jawaban;
		// Deklarasi variable minning dengan aaray bernama pilih dengan data kosong dulu
		$minning['pilih'] = [];

		foreach ($jawaban as $data){

				// Deklarasi panggil data dari rule dan gejala
				$role_penyakit = $this->db->query('select id_penyakit from rule_analisa where id_gejala = "'.$data.'"')->result_array();

				$nilai_gejala = $this->db->query('select gejala_bobot from gejala where id_gejala = "'.$data.'"')->row_array();

				// membuat deklarasi data list penyakit dengan array bernama list penyakit
				$list_penyakit = [];
				foreach ($role_penyakit as $key => $value) {


					$list_penyakit[] = $value['id_penyakit'];
				}
				// Ambil semua data pilihan gejala, namun menampilkan 1 data penyakit sampai ke nilainya
				$minning['pilih'][] = array('id_penyakit'=>$list_penyakit,'nilai'=>number_format($nilai_gejala['gejala_bobot'],2,'.','')*1);
		}

		// Membuat deklarasi pembuatan tabel semua gejala dan penyakit di gejala pertama
		$minning['table'] = [];
		// Membuat deklarasi pembuatan tabel gabungan matriks
		$minning['tableCombine'] = [];


// PERHITUNGAN STUCK
		for ($i=1; $i <= count($minning['pilih'])-1; $i++) {


			$minning['table'][$i][] = [ [],
								['id_penyakit'=>$minning['pilih'][$i]['id_penyakit'],
								'nilai'=>$minning['pilih'][$i]['nilai']],
								['id_penyakit'=>[],'nilai'=>1-$minning['pilih'][$i]['nilai'] ]
							];


			if ($i == 1) {
				$minning['table'][$i][] = [['id_penyakit'=>$minning['pilih'][$i-1]['id_penyakit'],'nilai'=>$minning['pilih'][$i-1]['nilai']],
								[],
								[]];


				$minning['table'][$i][] = [['id_penyakit'=>[],'nilai'=>1-$minning['pilih'][$i-1]['nilai']],
								[],
								[]];

			}else{
				foreach ($minning['tableCombine'][$i-1] as $key => $value) {
					// var_dump($minning['tableCombine'][$i-1]);
					// die;

					$minning['table'][$i][] = [['id_penyakit'=>$value,'nilai'=>$minning['nilaiCombine'][$i-1][$key]],
												[],
												[]];

				}

			}

			foreach ($minning['table'][$i] as $key => $value) {
					foreach ($value as $keys => $values) {
						if ($key != 0) {
							if ($keys != 0) {
								$combine = array_intersect($minning['table'][$i][0][$keys]['id_penyakit'],$minning['table'][$i][$key][0]['id_penyakit']);
	// PERHITUNGAN
								// ================ disini =========== //
								$com = [];
								foreach ($combine as $keyz => $valuez) {
									$com[] = $valuez;
								}
								$combine = $com;
								// ============== sampai sini ========= //


								if (count($minning['table'][$i][0][$keys]['id_penyakit']) == 0){
									$combine = $minning['table'][$i][$key][0]['id_penyakit'];
								}
								if (count($minning['table'][$i][$key][0]['id_penyakit']) == 0){
									$combine = $minning['table'][$i][0][$keys]['id_penyakit'];
								}
								if (count($minning['table'][$i][0][$keys]['id_penyakit']) == 0 && count($minning['table'][$i][$key][0]['id_penyakit']) == 0) {
									$combine = [];
								}
								$minning['table'][$i][$key][$keys] = ['id_penyakit'=>$combine,'nilai'=>$minning['table'][$i][0][$keys]['nilai']*$minning['table'][$i][$key][0]['nilai']];

								if (empty($minning['tableCombine'][$i])) {
									// ================ disini =========== //
									$combine = (array)$combine;
									// ============= sampai sini ========= //

									$minning['tableCombine'][$i][] = $combine;
									$minning['nilaiCombine'][$i][] = 0;
								}else{
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
									}else{
										if ($keys == 1 && empty($values['id_penyakit'])) {
											$kanan += $values['nilai'];
										}
									}
								}else{
									if ($values['id_penyakit'] == $valuet) {
										if ($keys == 2) {
											$kiri += $values['nilai'];
										}else{
											$kanan += $values['nilai'];
										}
									}
								}
							}
						}
					}
				}
				if ($i == 1) {
					$minning['nilaiCombine'][$i][$keyt] = $kiri/1;
					$minning['berapaCombine'][$i][$keyt] = $kiri."/1";
				}else{
				    $minning['nilaiCombine'][$i][$keyt] = $kiri/1;
					$minning['berapaCombine'][$i][$keyt] = $kiri."/1";
				// 	$minning['nilaiCombine'][$i][$keyt] = $kiri/(1-$kanan);
				// 	$minning['berapaCombine'][$i][$keyt] = $kiri."/(1-".$kanan.")";

				}
			}

		}

		if(count($jawaban)==1 || count($jawaban)==0){
			$this->session->set_flashdata('message', '<div style="font-size:14px" class="alert alert-danger" role="alert">
			Harap memasukan data gejala sebanyak minimal 2 gejala yang anda rasakan.   Terdapat sebanyak 30 pertanyaan untuk melakukan diagnosa gejala penyakit.</div>');
			redirect('diagnosa');

		}else{

			$b_max = array_keys($minning['nilaiCombine'][count($minning['nilaiCombine'])],max($minning['nilaiCombine'][count($minning['nilaiCombine'])]));
			$minning['max'] = $b_max[0];

			if (!empty($minning['tableCombine'][count($minning['tableCombine'])][$b_max[0]])) {
				$dataSimpan =  array(
					'idPengguna' 	=> $dataUserLogin['UserID'],
					'tglAnalisa'  	=> date('Y-m-d'),
					 );
				$this->db->insert("hasilanalisa", $dataSimpan);
				$idhasil = $this->db->insert_id();
				foreach ($minning['tableCombine'][count($minning['tableCombine'])][$b_max[0]] as $key => $value) {

					$data_gangguan=$this->m_penyakit->getListPenyakitById($value);
					$dataDetail = array(
						'idHasilAnalisa' => $idhasil,
						'penyakit'		 => $data_gangguan->penyakit,
						'idPengguna'	 => $dataUserLogin['UserID'],
					);

					$this->db->insert("detailhasilanalisa" , $dataDetail);
				}
			}
		}

		$dataqu['data']= array(
			'title'=>'Sistem Pakar',
			'hasil'=>$minning
		);

		// Mendapatkan data array yaitu
		$dataqu['userLogin'] = $this->session->userdata('loginUser');


		$this->load->view('client/hasil_diagnosa', $dataqu);
	}

//TAMPIL PENGGUNA
public function tampil_hitung()
{
	$dataPost = $this->input->post();
	$datar = ['hasil'=>json_decode($dataPost['data'],true)];
	$data['userLogin']  = $this->session->userdata('loginUser');
	$data['data']	= $datar;
	// $data['msg'] = $this->session->flashdata('msg');
	$this->load->view('client/tampil_hitung', $data);
}

	public function solusi($id){
		$data['dataPenyakit']	= $this->db->query('select * from solusi inner join penyakit on penyakit.id_penyakit = solusi.id_penyakit where penyakit.id_penyakit = "'.$id.'"')->row();


		$this->load->view('client/solusipenyakit/'.$id, $data);
	}





		public function hitungPasti()
			{
				$data['userLogin'] = $this->session->userdata('loginUser');
				$dataUserLogin = $this->session->userdata('loginUser');
				$query	=	$this->m_gejala->getlistGejala();

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
				if (count($jawaban) == 0 || count($jawaban) == 1 ) {
					$this->session->set_flashdata('message', '<div style="font-size:14px" class="alert alert-danger" role="alert">
					Harap memasukan data gejala sebanyak minimal 2 gejala yang anda rasakan.   Terdapat sebanyak 30 pertanyaan untuk melakukan diagnosa gejala penyakit.</div>');
					redirect('diagnosa');
				}

				$minning['terpilih'] = $jawaban;

				$minning['pilih'] = [];
				foreach ($jawaban as $data){
						$role_penyakit = $this->db->query('select id_penyakit from rule_analisa where id_gejala = "'.$data.'"')->result_array();
						$nilai_gejala = $this->db->query('select gejala_bobot from gejala where id_gejala = "'.$data.'"')->row_array();

						$list_penyakit = [];
						foreach ($role_penyakit as $key => $value) {
							$list_penyakit[] = $value['id_penyakit'];
						}
						$minning['pilih'][] = array('id_penyakit'=>$list_penyakit,'nilai'=>floatval($nilai_gejala['gejala_bobot']));
				}
				$minning['table'] = [];
				$minning['tableCombine'] = [];
				for ($i=1; $i <= count($minning['pilih'])-1; $i++) {
					$minning['table'][$i][] = [[],
										['id_penyakit'=>$minning['pilih'][$i]['id_penyakit'],'nilai'=>$minning['pilih'][$i]['nilai']],
										['id_penyakit'=>[],'nilai'=>1-$minning['pilih'][$i]['nilai']]
									];
					if ($i == 1) {
						$minning['table'][$i][] = [['id_penyakit'=>$minning['pilih'][$i-1]['id_penyakit'],'nilai'=>$minning['pilih'][$i-1]['nilai']],
										[],
										[]];
						$minning['table'][$i][] = [['id_penyakit'=>[],'nilai'=>1-$minning['pilih'][$i-1]['nilai']],
										[],
										[]];
					}else{
						foreach ($minning['tableCombine'][$i-1] as $key => $value) {
							$minning['table'][$i][] = [['id_penyakit'=>$value,'nilai'=>$minning['nilaiCombine'][$i-1][$key]],
														[],
														[]];
						}
					}

					foreach ($minning['table'][$i] as $key => $value) {
						foreach ($value as $keys => $values) {
							if ($key != 0) {
								if ($keys != 0) {
									$combine = array_intersect($minning['table'][$i][0][$keys]['id_penyakit'],$minning['table'][$i][$key][0]['id_penyakit']);
		// PERHITUNGAN
									// ================ disini =========== //
									$com = [];
									foreach ($combine as $keyz => $valuez) {
										$com[] = $valuez;
									}
									$combine = $com;
									// ============== sampai sini ========= //


									if (count($minning['table'][$i][0][$keys]['id_penyakit']) == 0){
										$combine = $minning['table'][$i][$key][0]['id_penyakit'];
									}
									if (count($minning['table'][$i][$key][0]['id_penyakit']) == 0){
										$combine = $minning['table'][$i][0][$keys]['id_penyakit'];
									}
									if (count($minning['table'][$i][0][$keys]['id_penyakit']) == 0 && count($minning['table'][$i][$key][0]['id_penyakit']) == 0) {
										$combine = [];
									}
									$minning['table'][$i][$key][$keys] = ['id_penyakit'=>$combine,'nilai'=>$minning['table'][$i][0][$keys]['nilai']*$minning['table'][$i][$key][0]['nilai']];

									if (empty($minning['tableCombine'][$i])) {
										// ================ disini =========== //
										$combine = (array)$combine;
										// ============= sampai sini ========= //

										$minning['tableCombine'][$i][] = $combine;
										$minning['nilaiCombine'][$i][] = 0;
									}else{
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
											}else{
												if ($keys == 1 && empty($values['id_penyakit'])) {
													$kanan += $values['nilai'];
												}
											}
										}else{
											if ($values['id_penyakit'] == $valuet) {
												if ($keys == 2) {
													$kiri += $values['nilai'];
												}else{
													$kanan += $values['nilai'];
												}
											}
										}
									}
								}
							}
						}
						if ($i == 1) {
							$minning['nilaiCombine'][$i][$keyt] = $kiri/1;
							$minning['berapaCombine'][$i][$keyt] = $kiri."/1";
						}else{
							$minning['nilaiCombine'][$i][$keyt] = round($kiri/(1-$kanan),5);
							$minning['berapaCombine'][$i][$keyt] = $kiri."/(1-".$kanan.")";
						}
					}
				}

				if (count($jawaban)==1) {
					$minning['table']['pilih'] = [];
					$minning['nilaiCombine'] = [];
					$minning['max'] = 0;
					$minning['tableCombine'] = [];
					$minning['tableCombine']['1'] = ['0'=>$minning['pilih'][0]['id_penyakit']];
				}else{
					$b_max = array_keys($minning['nilaiCombine'][count($minning['nilaiCombine'])],max($minning['nilaiCombine'][count($minning['nilaiCombine'])]));
					$minning['max'] = $b_max[0];

		            $nilaiKombinasi = $minning['nilaiCombine'][count($minning['nilaiCombine'])][$minning['max']];

					if (!empty($minning['tableCombine'][count($minning['tableCombine'])][$b_max[0]])) {
						$dataSimpan =  array(
							'idPengguna' 	=> $dataUserLogin['UserID'],
							'tglAnalisa'  	=> date('Y-m-d'),
							 );
						$this->db->insert("hasilanalisa", $dataSimpan);
						$idhasil = $this->db->insert_id();
						foreach ($minning['tableCombine'][count($minning['tableCombine'])][$b_max[0]] as $key => $value) {

							$data_gangguan=$this->m_penyakit->getListPenyakitById($value);
							$dataDetail = array(
								'idHasilAnalisa' => $idhasil,
								'penyakit'		 => $data_gangguan->penyakit,
								'keterangan_penyakit'		 => $data_gangguan->keterangan,
								'persentase'	 => floatval($nilaiKombinasi*100),
								'idPengguna'	 => $dataUserLogin['UserID'],
							);

							$this->db->insert("detailhasilanalisa" , $dataDetail);
						}
					}
				}

				$dataqu['data']= array(
					'title'=>'Sistem Pakar',
					'hasil'=>$minning,
				);
				$dataqu['showing']= $showing;
				$dataqu['userLogin'] = $this->session->userdata('loginUser');

				$this->load->view('client/hasil_diagnosa', $dataqu);
			}


		public function menghitung()
		{
			$data['userLogin'] = $this->session->userdata('loginUser');
		// Mengambil data user
		$dataUserLogin = $this->session->userdata('loginUser');
		// Mengambil data gejala dari modal gejala mengambil semua data gejala
		$query	=	$this->m_gejala->getlistGejala();

		// Mengambil data jawaban dari post pada view di radio box
		$jawaban = $this->input->post();

		if (count($jawaban) == 0 || count($jawaban) == 1 ) {
			// Kondisi jika jawaban bernilai null yaitu tidak dipilih satu pun
			$this->session->set_flashdata('message', '<div style="font-size:14px" class="alert alert-danger" role="alert">
			Harap memasukan data gejala sebanyak minimal 2 gejala yang anda rasakan.   Terdapat sebanyak 30 pertanyaan untuk melakukan diagnosa gejala penyakit.</div>');
			redirect('diagnosa');
		}

		// Membuat variabel mining sebagai penampung dengan array bernama terpilih yaitu jawaban dari gejala yang dipilih
		$minning['terpilih'] = $jawaban;
		// var_dump($minning);
		// die;



		// Deklarasi variable minning dengan aaray bernama pilih dengan data kosong dulu
		$minning['pilih'] = [];
		foreach ($jawaban as $data){

				// Deklarasi panggil data dari rule dan gejala
				$role_penyakit = $this->db->query('select id_penyakit from rule_analisa where id_gejala = "'.$data.'"')->result_array();

				$nilai_gejala = $this->db->query('select gejala_bobot from gejala where id_gejala = "'.$data.'"')->row_array();




				// membuat deklarasi data list penyakit dengan array bernama list penyakit
				$list_penyakit = [];


				foreach ($role_penyakit as $key => $value) {

					$list_penyakit[] = $value['id_penyakit'];


				}
				// Ambil semua data pilihan gejala, namun menampilkan 1 data penyakit sampai ke nilainya
				$minning['pilih'][] = array('id_penyakit'=>$list_penyakit,'nilai'=>number_format($nilai_gejala['gejala_bobot'],2,'.','')*1);



		}

		// Membuat deklarasi pembuatan tabel semua gejala dan penyakit di gejala pertama
		$minning['table'] = [];



		// Membuat deklarasi pembuatan tabel gabungan matriks
		$minning['tableCombine'] = [];

	// PERHITUNGAN STUCK
		for ($i=1; $i <= count($minning['pilih'])-1; $i++) {

			$minning['table'][$i][] = [ [],
								['id_penyakit'=>$minning['pilih'][$i]['id_penyakit'],
								'nilai'=>$minning['pilih'][$i]['nilai']],
								['id_penyakit'=>[],'nilai'=>1-$minning['pilih'][$i]['nilai'] ]
							];

			if ($i == 1) {
				$minning['table'][$i][] = [['id_penyakit'=>$minning['pilih'][$i-1]['id_penyakit'],'nilai'=>$minning['pilih'][$i-1]['nilai']],
								[],
								[]];

				$minning['table'][$i][] = [['id_penyakit'=>[],'nilai'=>1-$minning['pilih'][$i-1]['nilai']],
								[],
								[]];
			}else{
				foreach ($minning['tableCombine'][$i-1] as $key => $value) {

					$minning['table'][$i][] = [['id_penyakit'=>$value,'nilai'=>$minning['nilaiCombine'][$i-1][$key]],
												[],
												[]];

				}

			}

			foreach ($minning['table'][$i] as $key => $value) {

				foreach ($value as $keys => $values) {
					if ($key != 0) {
						if ($keys != 0) {
							$combine = array_intersect($minning['table'][$i][0][$keys]['id_penyakit'],$minning['table'][$i][$key][0]['id_penyakit']);

							// INTERSECT HIMPUNAN
							if (count($minning['table'][$i][0][$keys]['id_penyakit']) == 0){
								$combine = $minning['table'][$i][$key][0]['id_penyakit'];
							}
							if (count($minning['table'][$i][$key][0]['id_penyakit']) == 0){
								$combine = $minning['table'][$i][0][$keys]['id_penyakit'];
							}
							if (count($minning['table'][$i][0][$keys]['id_penyakit']) == 0 && count($minning['table'][$i][$key][0]['id_penyakit']) == 0) {
								$combine = [];
								// Kosong teta
							}
							// Perkalian matriks baris dan kolom
							$minning['table'][$i][$key][$keys] = ['id_penyakit'=>$combine,'nilai'=>$minning['table'][$i][0][$keys]['nilai']*$minning['table'][$i][$key][0]['nilai']];

							// Cek kombinasi hasil iterasi sebelumnya
							// Kalau tidak ada
							if (empty($minning['tableCombine'][$i])) {
								$minning['tableCombine'][$i][] = $combine;
								$minning['nilaiCombine'][$i][] = 0;
							}else{
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
									}else{
										if ($keys == 1 && empty($values['id_penyakit'])) {
											$kanan += $values['nilai'];
										}
									}
								}else{
									if ($values['id_penyakit'] == $valuet) {
										if ($keys == 2) {
											$kiri += $values['nilai'];
										}else{
											$kanan += $values['nilai'];
										}
									}
								}
							}
						}
					}
				}
				if ($i == 1) {
					$minning['nilaiCombine'][$i][$keyt] = $kiri/1;
					$minning['berapaCombine'][$i][$keyt] = $kiri."/1";
				}else{
					$minning['nilaiCombine'][$i][$keyt] = round($kiri/(1-$kanan),5);
					$minning['berapaCombine'][$i][$keyt] = $kiri."/(1-".$kanan.")";

				}
			}

		}

		if(count($jawaban)==1){
			redirect('diagnosa');
		}else{
			$b_max = array_keys($minning['nilaiCombine'][count($minning['nilaiCombine'])],max($minning['nilaiCombine'][count($minning['nilaiCombine'])]));
			$minning['max'] = $b_max[0];

			if (!empty($minning['tableCombine'][count($minning['tableCombine'])][$b_max[0]])) {
				$dataSimpan =  array(
					'idPengguna' 	=> $dataUserLogin['UserID'],
					'tglAnalisa'  	=> date('Y-m-d'),
					 );
				$this->db->insert("hasilanalisa", $dataSimpan);
				$idhasil = $this->db->insert_id();
				foreach ($minning['tableCombine'][count($minning['tableCombine'])][$b_max[0]] as $key => $value) {

					$data_gangguan=$this->m_penyakit->getListPenyakitById($value);
					$dataDetail = array(
						'idhasilanalisa' => $idhasil,
						'penyakit'		 => $data_gangguan->penyakit,
						'idPengguna'	 => $dataUserLogin['UserID'],
					);

					$this->db->insert("detailhasilanalisa" , $dataDetail);
				}
			}
		}

		$dataqu['data']= array(
			'title'=>'Sistem Pakar',
			'hasil'=>$minning
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
				$query	=	$this->m_gejala->getlistGejala();

				// Mengambil data jawaban dari post pada view di radio box
				$jawaban = $this->input->post();


				if (count($jawaban) == 0) {
					// Kondisi jika jawaban bernilai null yaitu tidak dipilih satu pun
					redirect('diagnosa');
				}

				// Membuat variabel mining sebagai penampung dengan array bernama terpilih yaitu jawaban dari gejala yang dipilih
				$minning['terpilih'] = $jawaban;

				// Deklarasi variable minning dengan aaray bernama pilih dengan data kosong dulu
				$minning['pilih'] = [];




				foreach ($jawaban as $data){

						// Deklarasi panggil data dari rule dan gejala
						$role_penyakit = $this->db->query('select id_penyakit from rule_analisa where id_gejala = "'.$data.'"')->result_array();

						$nilai_gejala = $this->db->query('select gejala_bobot from gejala where id_gejala = "'.$data.'"')->row_array();


						// membuat deklarasi data list penyakit dengan array bernama list penyakit
						$list_penyakit = [];



						foreach ($role_penyakit as $key => $value) {


							$list_penyakit[] = $value['id_penyakit'];



						}
						// Ambil semua data pilihan gejala, namun menampilkan 1 data penyakit sampai ke nilainya
						$minning['pilih'][] = array('id_penyakit'=>$list_penyakit,'nilai'=>number_format($nilai_gejala['gejala_bobot'],2,'.','')*1);



				}

				// Membuat deklarasi pembuatan tabel semua gejala dan penyakit di gejala pertama
				$minning['table'] = [];




				// Membuat deklarasi pembuatan tabel gabungan matriks
				$minning['tableCombine'] = [];




		// PERHITUNGAN STUCK
				for ($i=1; $i <= count($minning['pilih'])-1; $i++) {


					$minning['table'][$i][] = [ [],
										['id_penyakit'=>$minning['pilih'][$i]['id_penyakit'],
										'nilai'=>$minning['pilih'][$i]['nilai']],
										['id_penyakit'=>[],'nilai'=>1-$minning['pilih'][$i]['nilai'] ]
									];







					if ($i == 1) {
						$minning['table'][$i][] = [['id_penyakit'=>$minning['pilih'][$i-1]['id_penyakit'],'nilai'=>$minning['pilih'][$i-1]['nilai']],
										[],
										[]];


						$minning['table'][$i][] = [['id_penyakit'=>[],'nilai'=>1-$minning['pilih'][$i-1]['nilai']],
										[],
										[]];

					}else{
						foreach ($minning['tableCombine'][$i-1] as $key => $value) {
							// var_dump($minning['tableCombine'][$i-1]);
							// die;

							$minning['table'][$i][] = [['id_penyakit'=>$value,'nilai'=>$minning['nilaiCombine'][$i-1][$key]],
														[],
														[]];

						}

					}

					foreach ($minning['table'][$i] as $key => $value) {
						foreach ($value as $keys => $values) {
							if ($key != 0) {
								if ($keys != 0) {
									$combine = array_intersect($minning['table'][$i][0][$keys]['id_penyakit'],$minning['table'][$i][$key][0]['id_penyakit']);
		// PERHITUNGAN
									// ================ disini =========== //
									$com = [];
									foreach ($combine as $keyz => $valuez) {
										$com[] = $valuez;
									}
									$combine = $com;
									// ============== sampai sini ========= //


									if (count($minning['table'][$i][0][$keys]['id_penyakit']) == 0){
										$combine = $minning['table'][$i][$key][0]['id_penyakit'];
									}
									if (count($minning['table'][$i][$key][0]['id_penyakit']) == 0){
										$combine = $minning['table'][$i][0][$keys]['id_penyakit'];
									}
									if (count($minning['table'][$i][0][$keys]['id_penyakit']) == 0 && count($minning['table'][$i][$key][0]['id_penyakit']) == 0) {
										$combine = [];
									}
									$minning['table'][$i][$key][$keys] = ['id_penyakit'=>$combine,'nilai'=>$minning['table'][$i][0][$keys]['nilai']*$minning['table'][$i][$key][0]['nilai']];

									if (empty($minning['tableCombine'][$i])) {
										// ================ disini =========== //
										$combine = (array)$combine;
										// ============= sampai sini ========= //

										$minning['tableCombine'][$i][] = $combine;
										$minning['nilaiCombine'][$i][] = 0;
									}else{
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
											}else{
												if ($keys == 1 && empty($values['id_penyakit'])) {
													$kanan += $values['nilai'];
												}
											}
										}else{
											if ($values['id_penyakit'] == $valuet) {
												if ($keys == 2) {
													$kiri += $values['nilai'];
												}else{
													$kanan += $values['nilai'];
												}
											}
										}
									}
								}
							}
						}
						if ($i == 1) {
							$minning['nilaiCombine'][$i][$keyt] = $kiri/1;
							$minning['berapaCombine'][$i][$keyt] = $kiri."/1";
						}else{
							$minning['nilaiCombine'][$i][$keyt] = round($kiri/(1-$kanan),5);
							$minning['berapaCombine'][$i][$keyt] = $kiri."/(1-".$kanan.")";

						}
					}

				}

				if(count($jawaban)==1){
					redirect('diagnosa');

				}else{

					$b_max = array_keys($minning['nilaiCombine'][count($minning['nilaiCombine'])],max($minning['nilaiCombine'][count($minning['nilaiCombine'])]));
					$minning['max'] = $b_max[0];

					if (!empty($minning['tableCombine'][count($minning['tableCombine'])][$b_max[0]])) {
						$dataSimpan =  array(
							'idPengguna' 	=> $dataUserLogin['UserID'],
							'tglAnalisa'  	=> date('Y-m-d'),
							 );
						$this->db->insert("hasilanalisa", $dataSimpan);
						$idhasil = $this->db->insert_id();
						foreach ($minning['tableCombine'][count($minning['tableCombine'])][$b_max[0]] as $key => $value) {

							$data_gangguan=$this->m_penyakit->getListPenyakitById($value);
							$dataDetail = array(
								'idHasilAnalisa' => $idhasil,
								'penyakit'		 => $data_gangguan->penyakit,
								'idPengguna'	 => $dataUserLogin['UserID'],
							);

							$this->db->insert("detailhasilanalisa" , $dataDetail);
						}
					}
				}

				$dataqu['data']= array(
					'title'=>'Sistem Pakar',
					'hasil'=>$minning
				);

				// Mendapatkan data array yaitu
				$dataqu['userLogin'] = $this->session->userdata('loginUser');


				$this->load->view('client/hasil_diagnosa', $dataqu);
			}

}






	// public function hitung($id_pengguna,$m1=null,$m2=null){
	// 	$data['userLogin']  = $this->session->userdata('loginUser');
	//
	// 	$data_gejala['id_pengguna']	= $id_pengguna;
	// 	// menghapus data analisa
	// 	$this->db->delete('analisa',array('id_pengguna' => $id_pengguna));
	// 	$i=0;
	//
	// 	// mengambil semua data gejala
	// 	$query	=	$this->m_gejala->getlistGejala();
	//
	// 	// jawaban dengan method post dalam bentuk radio box
	// 	$jawaban = $this->input->post();
	//
	//
	// 	if (count($jawaban) == 0) {
	// 		// jika tidak ada jawaban yang diinput
	// 		$this->session->set_flashdata('message', '<div style="font-size:15px" class="alert alert-danger" role="alert">
	// 		Harap memasukan data gejala yang anda rasakan.   Terdapat sebanyak 30 pertanyaan untuk melakukan diagnosa gejala penyakit.   Terimakasih.</div>');
	// 		redirect('diagnosa');
	// 	}
	// 	foreach ($query as $data){
	//
	//
	// 		// menjadi data gejala sebagai list query dengan mengambil post dari id gejala di view
	// 		if($this->input->post($data->id_gejala)== $data->id_gejala){
	// 			// membuat list jawaban dalam array berisi data gejala
	// 			// Data gejala selanjutnya yang diinput tidak masuk
	// 			$listJawaban[] = $data->id_gejala;
	// 			$i++;
	// 			$himpunan=null;
	// 			// mengambil data dalam bentuk query penyakit (bisa himpunan) dari rule sesuai dengan id gejala
	// 			$qgangguan=$this->m_rule->getGejalaById($data->id_gejala);
	//
	//
	// 			unset($daftar_gangguan);
	//
	//
	// 			//cari data dari gejala
	// 			//himpunan data gejala saat ini
	// 			//$daftar_gangguan = array();
	// 			foreach($qgangguan as $dgangguan){
	// 				$daftar_gangguan[]= $dgangguan->id_penyakit;
	//
	//
	// 			// ??
	//
	// 			}
	// 			// menjadi himpunan 1, 2, 3, 4 , dst
	// 			$himpunan=json_encode($daftar_gangguan);
	//
	//
	//
	//
	//
	// 			//jika gejala pertama , i++ sudah di increment menjadi nilainya 1
	// 			if($i==1){
	// 				// menyimpan data nilai bobot terlebih dahulu
	// 				$bobot=$data->gejala_bobot;
	//
	//
	// 				$data=array(
	// 					'M'=>$i,
	// 					'kode'=>$himpunan,
	// 					'nilai'=>$bobot,
	// 					'id_pengguna' => $id_pengguna,
	// 					'tanggal_diagnosa' => date("Y-m-d H:i:s")
	// 				);
	//
	//
	//
	// 				$this->db->insert('analisa',$data);
	//
	// 				$data2=array(
	// 					'M'=>$i,
	// 					'kode'=>'teta',
	// 					'nilai'=>(1-$bobot),
	// 					'id_pengguna' => $id_pengguna,
	// 					'tanggal_diagnosa' => date("Y-m-d H:i:s")
	// 				);
	// 				$this->db->insert('analisa',$data2);
	//
	//
	// 			}else{
	// 				$m=$i-1;
	//
	// 				$qdensitas=$this->m_diagnosa->all_densitas($m,$id_pengguna);
	// 					foreach ($qdensitas->result() as $ddensitas){
	// 						//lakukan hitungan dengan himpunan normal(no teta)
	// 						//penghitungan m(Z) asli
	// 						//jika himpunan saat ini = teta, maka kombinasi berupa himpunan baru,
	//
	//
	//
	//
	// 						if($ddensitas->kode=='teta'){
	// 							// Mendapat penyakit iterasi ke 2
	//
	// 							$kombinasi=$himpunan;
	//
	//
	//
	//
	//
	// 						}else{
	// 							//ambil himpunan lama dan jadikan array
	// 							$himpunan_lama= json_decode($ddensitas->kode,true);
	//
	//
	// 							//echo "lama/dens=".json_encode($himpunan_lama)."<br>";
	// 							//ambil himpunan baru
	// 							$himpunan_ini= $daftar_gangguan;
	//
	//
	// 							//echo "saat ini=".json_encode($himpunan_ini)."<br>";
	// 							//potongan
	// 							$komb= array_intersect($himpunan_lama,$himpunan_ini);
	//
	//
	//
	// 							// SALAH
	// 							//echo "kombinasi=".json_encode($komb)."<br><hr>";
	// 							if(empty($komb)){
	// 								$kombinasi= "null";
	//
	//
	// 								// Kalau ada penyakit yang sama semua
	// 							}else{
	// 								$kombinasi=json_encode($komb);
	//
	//
	//
	//
	// 								// Kalau tidak ada penyakit yang sama semua
	// 							}
	// 						}	//end of else (non teta)
	// 						// $nilai=$data->gejala_bobot*$ddensitas->nilai;
	//
	// 						//himpunan sekarang*densitas
	// 						$nilai=$data->gejala_bobot*$ddensitas->nilai;
	// 						// var_dump($nilai2);
	// 						// die;
	//
	//
	//
	//
	//
	//
	//
	//
	//
	// 						$cek1=$this->m_diagnosa->cek_himpunan($i,$kombinasi,$id_pengguna);
	//
	//
	//
	// 						if($cek1){
	// 							$this->db->set('nilai','nilai+'.$nilai,FALSE);
	// 							$this->db->where(array('M'=>$i,'kode' => $kombinasi,'id_pengguna'=> $id_pengguna));
	// 							$this->db->update('analisa');
	// 							// Kalau  ada kombinasi himpunan
	// 						}else{
	// 							$this->db->insert('analisa',array('M'=>$i,'kode' => $kombinasi,'nilai' =>$nilai,'id_pengguna'=> $id_pengguna,'tanggal_diagnosa' => date("Y-m-d H:i:s")));
	// 							// kalau  tidak ada  kombinasi himpunan lakukan insert
	// 						}
	//
	// 						//teta sekarang*densitas
	// 						$nilai2=(1-($data->gejala_bobot))*$ddensitas->nilai;
	//
	//
	//
	//
	//
	// 						$cek2=$this->m_diagnosa->cek_himpunan($i,$ddensitas->kode,$id_pengguna);
	//
	//
	// 						if($cek2){
	// 							$this->db->set('nilai','nilai+'.$nilai2,FALSE);
	// 							$this->db->where(array('M'=>$i,'kode' => $ddensitas->kode,'id_pengguna'=> $id_pengguna));
	// 							$this->db->update('analisa');
	// 							// Kalau  ada kombinasi himpunan
	// 						}else{
	// 							$this->db->insert('analisa',array('M'=>$i,'kode' => $ddensitas->kode,'nilai' =>$nilai2,'id_pengguna'=> $id_pengguna,'tanggal_diagnosa' => date("Y-m-d H:i:s")));
	// 							// kalau  tidak ada  kombinasi himpunan lakukan insert
	// 						}
	//
	// 					//foreach densitas
	// 					}
	//
	// 					// SALAH
	// 					// MASIH SALAH BAGIAN HIMPUNAN NULL
	// 				$cek_null=$this->m_diagnosa->cek_himpunan_null($i,$id_pengguna);
	//
	// 				if($cek_null){
	// 					$n_null=$this->m_diagnosa->himpunan_null($i,$id_pengguna);
	// 					$this->db->set('nilai','nilai/(1-'.$n_null.')',FALSE);
	// 					$this->db->where(array('M'=>$i,'id_pengguna'=> $id_pengguna, 'nilai !='=>'null'));
	// 					$this->db->update('analisa');
	// 				}
	//
	// 			//end of else m>1
	// 			}
	// 		//end of if ya
	// 		}
	// 	//end of foreach
	// 	}
	// 	$data_gejala['jawaban'] = $listJawaban;
	//
	//
	//
	//
	//
	// 	if($i==0){
	// 		$hasil_diagnosa='Tidak ada gejala dipilih, anda baik baik saja';
	// 		$hasil['densitas']=0;
	// 	}else{
	// 		$hasil= $this->m_diagnosa->m_max($id_pengguna);
	//
	//
	// 		$list_gangguan= json_decode($hasil['kode']);
	// 		$hasil_diagnosa = '<ul>';
	//
	// 		foreach ($list_gangguan as $hasil_gangguan){
	// 			$data_gangguan=$this->m_penyakit->getListPenyakitById($hasil_gangguan);
	// 			$hasil_diagnosa .= '<li>'.$data_gangguan->penyakit.'<br>
	// 								<a href="'.base_url('diagnosa/solusi/'.$hasil_gangguan).'">lihat Solusi disini</a><br></li>';
	// 		}
	// 		$hasil_diagnosa .= '</ul>';
	// 	}
	//
	// 		// BELUM SELESAI
	// 	$data_gejala['datahasil']= array(
	// 		'title'=>'Sistem Pakar',
	// 		'hasil'=>$hasil_diagnosa,
	// 		'hasil_ke'=>$list_gangguan,
	// 		'densitas'=>number_format($hasil['densitas'],2,'.','') * 100
	// 	);
	//
	// 	$this->load->view('client/hasil_diagnosa', $data_gejala);
	// }


// public function calculate(){
// 	$data['userLogin'] = $this->session->userdata('loginUser');
// 	$dataUserLogin = $this->session->userdata('loginUser');
// 	$query	=	$this->m_gejala->getlistGejala();
//
// 	$jawaban = $this->input->post();
// 	$showing = false;
//
// 	if (!empty($jawaban['showing'])) {
// 		$showing = true;
// 		unset($jawaban['showing']);
// 	}
//
// 	foreach ($jawaban as $key => $value) {
// 		if (empty($value)) {
// 			unset($jawaban[$key]);
// 		}
// 	}
// 	if (count($jawaban) == 0 || count($jawaban) == 1) {
// 		$this->session->set_flashdata('message', '<div style="font-size:14px" class="alert alert-danger" role="alert">
// 		Harap memasukan data gejala sebanyak minimal 2 gejala yang anda rasakan.   Terdapat sebanyak 30 pertanyaan untuk melakukan diagnosa gejala penyakit.</div>');
// 		redirect('diagnosa');
// 	}
//
//
//
// 	$minning['terpilih'] = $jawaban;
//
// 	$minning['pilih'] = [];
// 	foreach ($jawaban as $data){
// 			$role_penyakit = $this->db->query('select id_penyakit from rule_analisa where id_gejala = "'.$data.'"')->result_array();
// 			$nilai_gejala = $this->db->query('select gejala_bobot from gejala where id_gejala = "'.$data.'"')->row_array();
//
// 			$list_penyakit = [];
// 			foreach ($role_penyakit as $key => $value) {
// 				$list_penyakit[] = $value['id_penyakit'];
// 			}
// 			$minning['pilih'][] = array('id_penyakit'=>$list_penyakit,'nilai'=>floatval($nilai_gejala['gejala_bobot']));
// 	}
// 	$minning['table'] = [];
// 	$minning['tableCombine'] = [];
// 	for ($i=1; $i <= count($minning['pilih'])-1; $i++) {
// 		$minning['table'][$i][] = [[],
// 							['id_penyakit'=>$minning['pilih'][$i]['id_penyakit'],'nilai'=>$minning['pilih'][$i]['nilai']],
// 							['id_penyakit'=>[],'nilai'=>1-$minning['pilih'][$i]['nilai']]
// 						];
// 		if ($i == 1) {
// 			$minning['table'][$i][] = [['id_penyakit'=>$minning['pilih'][$i-1]['id_penyakit'],'nilai'=>$minning['pilih'][$i-1]['nilai']],
// 							[],
// 							[]];
// 			$minning['table'][$i][] = [['id_penyakit'=>[],'nilai'=>1-$minning['pilih'][$i-1]['nilai']],
// 							[],
// 							[]];
// 		}else{
// 			foreach ($minning['tableCombine'][$i-1] as $key => $value) {
// 				$minning['table'][$i][] = [['id_penyakit'=>$value,'nilai'=>$minning['nilaiCombine'][$i-1][$key]],
// 											[],
// 											[]];
// 			}
// 		}
//
// 		foreach ($minning['table'][$i] as $key => $value) {
// 			foreach ($value as $keys => $values) {
// 				if ($key != 0) {
// 					if ($keys != 0) {
// 						$combine = array_intersect($minning['table'][$i][0][$keys]['id_penyakit'],$minning['table'][$i][$key][0]['id_penyakit']);
// 						if (count($minning['table'][$i][0][$keys]['id_penyakit']) == 0){
// 							$combine = $minning['table'][$i][$key][0]['id_penyakit'];
// 						}
// 						if (count($minning['table'][$i][$key][0]['id_penyakit']) == 0){
// 							$combine = $minning['table'][$i][0][$keys]['id_penyakit'];
// 						}
// 						if (count($minning['table'][$i][0][$keys]['id_penyakit']) == 0 && count($minning['table'][$i][$key][0]['id_penyakit']) == 0) {
// 							$combine = [];
// 						}
// 						$minning['table'][$i][$key][$keys] = ['id_penyakit'=>$combine,'nilai'=>$minning['table'][$i][0][$keys]['nilai']*$minning['table'][$i][$key][0]['nilai']];
//
// 						if (empty($minning['tableCombine'][$i])) {
// 							$minning['tableCombine'][$i][] = $combine;
// 							$minning['nilaiCombine'][$i][] = 0;
// 						}else{
// 							if (!in_array($combine, $minning['tableCombine'][$i])) {
// 								$minning['tableCombine'][$i][] = $combine;
// 								$minning['nilaiCombine'][$i][] = 0;
// 							}
// 						}
// 					}
// 				}
// 			}
// 		}
//
// 		foreach ($minning['tableCombine'][$i] as $keyt => $valuet) {
// 			$kiri = 0;
// 			$kanan = 0;
// 			foreach ($minning['table'][$i] as $key => $value) {
// 				foreach ($value as $keys => $values) {
// 					if ($key != 0) {
// 						if ($keys != 0) {
// 							if (!empty($valuet)) {
// 								if ($values['id_penyakit'] == $valuet) {
// 									$kiri += $values['nilai'];
// 								}else{
// 									if ($keys == 1 && empty($values['id_penyakit'])) {
// 										$kanan += $values['nilai'];
// 									}
// 								}
// 							}else{
// 								if ($values['id_penyakit'] == $valuet) {
// 									if ($keys == 2) {
// 										$kiri += $values['nilai'];
// 									}else{
// 										$kanan += $values['nilai'];
// 									}
// 								}
// 							}
// 						}
// 					}
// 				}
// 			}
// 			if ($i == 1) {
// 				$minning['nilaiCombine'][$i][$keyt] = $kiri/1;
// 				$minning['berapaCombine'][$i][$keyt] = $kiri."/1";
// 			}else{
// 				$minning['nilaiCombine'][$i][$keyt] = round($kiri/(1-$kanan),5);
// 				$minning['berapaCombine'][$i][$keyt] = $kiri."/(1-".$kanan.")";
// 			}
// 		}
// 	}
//
// 	if (count($jawaban)==1) {
// 		$minning['table']['pilih'] = [];
// 		$minning['nilaiCombine'] = [];
// 		$minning['max'] = 0;
// 		$minning['tableCombine'] = [];
// 		$minning['tableCombine']['1'] = ['0'=>$minning['pilih'][0]['id_penyakit']];
// 	}else{
// 		$b_max = array_keys($minning['nilaiCombine'][count($minning['nilaiCombine'])],max($minning['nilaiCombine'][count($minning['nilaiCombine'])]));
// 		$minning['max'] = $b_max[0];
//
// 		if (!empty($minning['tableCombine'][count($minning['tableCombine'])][$b_max[0]])) {
// 			$dataSimpan =  array(
// 				'idPengguna' 	=> $dataUserLogin['UserID'],
// 				'tglAnalisa'  	=> date('Y-m-d'),
// 				 );
// 			$this->db->insert("hasilanalisa", $dataSimpan);
// 			$idhasil = $this->db->insert_id();
// 			foreach ($minning['tableCombine'][count($minning['tableCombine'])][$b_max[0]] as $key => $value) {
//
// 				$data_gangguan=$this->m_penyakit->getListPenyakitById($value);
// 				$dataDetail = array(
// 					'idHasilAnalisa' => $idhasil,
// 					'penyakit'		 => $data_gangguan->penyakit,
// 					'idPengguna'	 => $dataUserLogin['UserID'],
// 				);
//
// 				$this->db->insert("detailhasilanalisa" , $dataDetail);
// 			}
// 		}
// 	}
//
// 	$dataqu['data']= array(
// 		'title'=>'Sistem Pakar',
// 		'hasil'=>$minning,
// 	);
// 	$dataqu['showing']= $showing;
// 	$dataqu['userLogin'] = $this->session->userdata('loginUser');
//
// 	$this->load->view('client/hasil_diagnosa', $dataqu);
//
// }
