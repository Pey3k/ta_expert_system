<!DOCTYPE html>
<html lang="en">
<?php $assets_image = base_url('assets_front/'); ?>
<head>
	<title>Expert System Website</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


	<link href="https://fonts.googleapis.com/css?family=Muli:300,400,700,900" rel="stylesheet">
	<link rel="stylesheet" href="<?= base_url('assets/frontend/'); ?>fonts/icomoon/style.css">
	<link rel="stylesheet" href="<?= base_url('assets/frontend/'); ?>css/bootstrap.min.css">
	<link rel="stylesheet" href="<?= base_url('assets/frontend/'); ?>css/jquery-ui.css">
	<link rel="stylesheet" href="<?= base_url('assets/frontend/'); ?>css/owl.carousel.min.css">
	<link rel="stylesheet" href="<?= base_url('assets/frontend/'); ?>css/owl.theme.default.min.css">
	<link rel="stylesheet" href="<?= base_url('assets/frontend/'); ?>css/owl.theme.default.min.css">
	<link rel="stylesheet" href="<?= base_url('assets/frontend/'); ?>css/jquery.fancybox.min.css">
	<link rel="stylesheet" href="<?= base_url('assets/frontend/'); ?>css/bootstrap-datepicker.css">
	<link rel="stylesheet" href="<?= base_url('assets/frontend/'); ?>fonts/flaticon/font/flaticon.css">
	<link rel="stylesheet" href="<?= base_url('assets/frontend/'); ?>css/aos.css">
	<link rel="stylesheet" href="<?= base_url('assets/frontend/'); ?>css/style.css">

</head>
<body>

<div class="site-wrap">

	<div class="site-mobile-menu site-navbar-target">
		<div class="site-mobile-menu-header">
			<div class="site-mobile-menu-close mt-3">
				<span class="icon-close2 js-menu-toggle"></span>
			</div>
		</div>
		<div class="site-mobile-menu-body"></div>
	</div>
	<header class="site-navbar py-4 bg-white js-sticky-header site-navbar-target" role="banner">

		<div class="container">
			<div class="row align-items-center">

				<div class="col-6 col-xl-2">
					<h1 class="mb-0 site-logo"><a href="<?= base_url('auth'); ?>" class="text-black mb-0">HealthMe<span
									class="text-primary">.</span> </a></h1>
				</div>
				<div class="col-12 col-md-10 d-none d-xl-block">
					<nav class="site-navigation position-relative text-right" role="navigation">

						<ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
							<li><a href="<?= base_url('auth') ?>" class="nav-link">Beranda</a></li>
							<li><a href="<?= base_url('auth/#tentang-kami-section') ?>" class="nav-link">Tentang
									Kami</a></li>
							<li><a href="<?= base_url('auth/#pola-hidup-section') ?>" class="nav-link">Pola Hidup
									Sehat</a></li>
							<li><a href="<?= base_url('auth/#penyakit-section') ?>" class="nav-link">Penyakit</a></li>
							<li><a href="<?= base_url('diagnosa') ?>" class="nav-link active">Konsultasi</a></li>
							<li><a href="<?= base_url('profile') ?>" class="nav-link">Profile</a></li>
						</ul>
					</nav>
				</div>


				<div class="col-6 d-inline-block d-xl-none ml-md-0 py-3" style="position: relative; top: 3px;"><a
							href="#" class="site-menu-toggle js-menu-toggle text-black float-right"><span
								class="icon-menu h3"></span></a></div>

			</div>
		</div>

	</header>
	<div class="site-section bg-light" id="pola-hidup-section">
		<div class="container">
			<div class="row align-items-center justify-content-center">
				<div class="col-md-7 text-center mt-5">
					<h3 class="section-sub-title">Result</h3>
					<h3 class="section-title text-black mt-4 mb-4">Hasil Konsultasi Diagnosa </h3>
				</div>
			</div>
			<div class="bg-white py-4 mb-2">
				<div class="row mx-4 my-4 product-item-2 align-items-start">
					<div class="col-md-12 mb-2 mb-md-0">
						<?php
						$dataOld = $this->session->flashdata('oldPost');
						echo $this->session->flashdata('msgbox'); ?>
						<!-- #section:elements.form -->
						<div class="form-group">
							<div class="col-sm-3 pl-0 mt-0" style="border-bottom: 2px solid #6EBACC;">
								Data Gejala Pasien:
							</div>
						</div>
						<div class="table-header" style="width: 80%; ">
							Gejala Ter-Identifikasi (Dijawab Ya)
						</div>
						<table class="table table-striped table-bordered" style="width: 80%; height: 50px; ">
							<tr>
								<th align="center">No</th>
								<th align="center">Terpilih</th>
								<th align="center">Pertanyaan</th>
							</tr>
							<?php
							$no = 1;
							foreach ($data['hasil']['terpilih'] as $key => $value) { ?>
								<tr>
									<th align="center"><?= $no++ ?></th>
									<th align="center"><?= $value ?></th>
									<th align="center"><?php
										$dataGejala = $this->m_gejala->getlistGejalaById($value);
										echo $dataGejala->gejala;
										?></th>
								</tr>
							<?php } ?>
						</table>
						<!--
              <div class="table-header" style="width: 80%; ">
                                Hasil Diagnosa Terdeteksi
                            </div>


              <table class="table table-striped table-bordered" style="width: 80%; height: 50px; ">
                <tr>
                  <?php if (count($diagnosa) > 0) { ?>
                  <th  align="center">No</th>
                  <th  align="center">ID Penyakit</th>
                  <th  align="center">Penyakit</th>
                  <th  align="center">Solusi</th>
                  <th  align="center">Gejala Terdeteksi</th>
                  <?php } else { ?>
                  <th  align="center">Hasil</th>
                  <?php } ?>
                </tr>


                <?php if (count($diagnosa) > 0) {
							$no = 0;
							foreach ($diagnosa as $row) {
								$no++;
								?>
                <tr>
                  <td style="padding:10px;"> <?php echo $no; ?> </td>
                  <td style="padding:10px;"> <?php echo $row->id_penyakit; ?> </td>
                  <td style="padding:10px;"> <?php echo $row->penyakit; ?> </td>
                  <td style="padding:10px;"> <?php echo $row->solusi; ?></td>
                  <td style="padding:10px;"> <?php echo $row->jumlah_gejala; ?> Gejala</td>
                </tr>
                <?php
							}
						} else { ?>
                <tr>
                  <td style="padding:10px;">Anda dinyatakan dalam keadaan <strong>SEHAT</strong>. Hasil diagnosa tidak terdeteksi. Silahkan ulangi diagnosa kembali..</td>
                </tr>
                <?php } ?>

              </table>
              -->
						<br/>
						<div>
							<div>
								<h3>Hasil Diagnosa : </h3>
								<p>Hasil setelah dilakukan penghitungan matematis menggunakan metode <i>Dempster
										Shafer</i>, pasien terdiagnosa terkena gangguan: </p>
								<ul>
								</ul>
								<?php
								if (count($data['hasil']['tableCombine'][count($data['hasil']['tableCombine'])][$data['hasil']['max']]) == 0) { ?>
									<li>Tidak Ada</li>
								<?php } else {
									$nilaiKombinasi = $data['hasil']['nilaiCombine'][count($data['hasil']['nilaiCombine'])][$data['hasil']['max']];

									foreach ($data['hasil']['tableCombine'][count($data['hasil']['tableCombine'])][$data['hasil']['max']] as $key => $value) {
										$data_gangguan = $this->m_penyakit->getListPenyakitById($value); ?>
										<li><?= $data_gangguan->penyakit ?>
											<?php
											echo floatval($nilaiKombinasi * 100) . ' %';
											?> <br>
											<a href="<?= base_url() ?>/diagnosa/solusi/<?= $value ?>">lihat Solusi
												disini</a><br></li>
									<?php }
								}
								?>
							</div>
							<h3 class="mt-2" style="text-align:center;">Seluruh hasil dari diagnosa bersifat
								<b>PREDIKSI</b> menggunakan perhitungan metode <b><i>Dempster Shafer</b></i> berdasarkan
								pengelolaan data dari pakar!</h3>

							<!-- <p>
                  <h3>Hasil Diagnosa : </h3>
                  Hasil setelah dilakukan penghitungan matematis menggunakan metode <i>Dempster Shafer</i>, pasien terdiagnosa terkena gangguan: <br>
                  <?php
							echo "<strong>" . $datahasil['hasil'] . "</strong>";
							echo "<p>dengan persentasi nilai densitas sebesar " . $datahasil['densitas'] . "%. </p>";

							?>


                </p> -->
						</div>
						<!-- <div class="col-sm-3 pl-0 mt-0" style="border-bottom: 2px solid #6EBACC;">
                            Hasil perhitungan
                          </div>
              <table class="table table-striped table-bordered mt-1" style="width: 80%; height: 50px; ">
                <tr>
                  <th>No</th>
                  <th>M</th>
                  <th>Kode</th>
                  <th>Nilai</th>
                </tr>


                <?php
						$no = 0;
						$hitungan = $this->db->query("select * from analisa where id_pengguna = '" . $id_pengguna . "'")->result();
						foreach ($hitungan as $row) {

							$no++;
							?>
                <tr>
                  <td style="padding:10px;"> <?php echo $no; ?> </td>
                  <td style="padding:10px;"> <?php echo $row->M; ?> </td>
                  <td style="padding:10px;"> <?php if ($row->kode == "teta") {
								echo "&theta;";
							} else {
								echo $row->kode;
							} ?> </td>
                  <td style="padding:10px;"> <?php echo number_format($row->nilai, 2, '.', ''); ?> </td>
                </tr>


                <?php } ?>

              </table> -->

						<div class="hr hr-24"></div>
						<div class="row">

							<div class="col-md-6 ">
								<a href="<?php echo base_url('diagnosa'); ?>" class="btn btn-xl btn-primary mt-2"><i
											class="ace-icon fa fa-angle-double-left "></i> Kembali Diagnosa</a>
							</div>
							<div class="col-md-6">
								<form method="post" action="<?php echo base_url('diagnosa/tampil_hitung'); ?>">
									<input type="hidden" name="data" value='<?= json_encode($data["hasil"]) ?>'>
									<button class="btn btn-xl btn-warning mt-2" style="margin-left:300px;"><i
												class="ace-icon fa fa-angle-double-left "></i> Tampil Perhitungan !
									</button>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>

	<footer class="site-footer bg-white">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="row">
						<div class="col-md-3 ">
							<h2 class="footer-heading mb-4">Tautan</h2>
							<ul class="list-unstyled">
								<li><a href="<?= base_url('') ?>">Beranda</a></li>
								<li><a href="<?= base_url('') ?>">Pola Hidup Sehat</a></li>
								<li><a href="<?= base_url('') ?>">Penyakit</a></li>
								<li><a href="<?= base_url('diagnosa') ?>">Konsultasi</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<!--<div class="row pt-5 mt-5 text-center">
			  <div class="col-md-12">
				<div class="border-top pt-5">
				<p>
			<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
			<!--Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank" >Colorlib</a>
			<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0.
		  </p>
				</div>
			  </div>

			</div>-->
		</div>
	</footer>

</div> <!-- .site-wrap -->


<script src="<?= base_url('assets/frontend/'); ?>js/jquery-3.3.1.min.js"></script>
<script src="<?= base_url('assets/frontend/'); ?>js/jquery-migrate-3.0.1.min.js"></script>
<script src="<?= base_url('assets/frontend/'); ?>js/jquery-ui.js"></script>
<script src="<?= base_url('assets/frontend/'); ?>js/popper.min.js"></script>
<script src="<?= base_url('assets/frontend/'); ?>js/bootstrap.min.js"></script>
<script src="<?= base_url('assets/frontend/'); ?>js/owl.carousel.min.js"></script>
<script src="<?= base_url('assets/frontend/'); ?>js/jquery.stellar.min.js"></script>
<script src="<?= base_url('assets/frontend/'); ?>js/jquery.countdown.min.js"></script>
<script src="<?= base_url('assets/frontend/'); ?>js/bootstrap-datepicker.min.js"></script>
<script src="<?= base_url('assets/frontend/'); ?>js/jquery.easing.1.3.js"></script>
<script src="<?= base_url('assets/frontend/'); ?>js/aos.js"></script>
<script src="<?= base_url('assets/frontend/'); ?>js/jquery.fancybox.min.js"></script>
<script src="<?= base_url('assets/frontend/'); ?>js/jquery.sticky.js"></script>


<script src="<?= base_url('assets/frontend/'); ?>js/main.js"></script>

</body>
</html>
