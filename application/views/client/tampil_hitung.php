<!DOCTYPE html>
<html lang="en">
<?php $assets_image = base_url('assets_front/'); ?>
<head>
	<title>Expert System Website</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


	<link href="https://fonts.googleapis.com/css?family=Muli:300,400,700,900" rel="stylesheet">
	<link rel="stylesheet" href="<?= base_url('assets/client/'); ?>fonts/icomoon/style.css">
	<link rel="stylesheet" href="<?= base_url('assets/client/'); ?>css/bootstrap.min.css">
	<link rel="stylesheet" href="<?= base_url('assets/client/'); ?>css/jquery-ui.css">
	<link rel="stylesheet" href="<?= base_url('assets/client/'); ?>css/owl.carousel.min.css">
	<link rel="stylesheet" href="<?= base_url('assets/client/'); ?>css/owl.theme.default.min.css">
	<link rel="stylesheet" href="<?= base_url('assets/client/'); ?>css/owl.theme.default.min.css">
	<link rel="stylesheet" href="<?= base_url('assets/client/'); ?>css/jquery.fancybox.min.css">
	<link rel="stylesheet" href="<?= base_url('assets/client/'); ?>css/bootstrap-datepicker.css">
	<link rel="stylesheet" href="<?= base_url('assets/client/'); ?>fonts/flaticon/font/flaticon.css">
	<link rel="stylesheet" href="<?= base_url('assets/client/'); ?>css/aos.css">
	<link rel="stylesheet" href="<?= base_url('assets/client/'); ?>css/style.css">

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
					<h1 class="mb-0 site-logo"><a href="<?= base_url('auth'); ?>" class="text-black mb-0">WAOS</a></h1>
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
					<h3 class="section-sub-title">Calculate</h3>
					<h3 class="section-title text-black mt-4 mb-4">Hasil Hitungan Diagnosa </h3>
				</div>
			</div>
			<div class="bg-white py-4 mb-2">
				<div class="row mx-4 my-4 product-item-2 align-items-start">
					<div class="col-md-12 mb-2 mb-md-0">
						<form class="form-horizontal" method="post" action="" role="form">
							<?php
							$dataOld = $this->session->flashdata('oldPost');
							echo $this->session->flashdata('msgbox'); ?>
							<!-- #section:elements.form -->


							<div class="table-header" style="width: 80%; ">
								Pilihan Gejala Terpilih :
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


							<div class="table-header" style="width: 80%; ">
								Data Penyakit sesuai Gejala :
							</div>
							<table class="table table-striped table-bordered" style="width: 80%; height: 50px; ">
								<tr>
									<th align="center">No</th>
									<th align="center">Terpilih</th>
									<th align="center">Nilai</th>
								</tr>
								<?php
								$no = 1;
								foreach ($data['hasil']['pilih'] as $key => $value) { ?>
									<tr>
										<th align="center"><?= $no++ ?></th>
										<th align="center"><?= implode(',', $value['id_penyakit']) ?></th>
										<th align="center"><?= $value['nilai'] ?></th>
									</tr>
								<?php } ?>
							</table>

							<br>

							<div class="table-header" style="width: 80%; ">
								<h2> Perhitungan Metode <i>Dempster Shafer</i></h2>
							</div>
							<?php foreach ($data['hasil']['table'] as $key => $value) { ?>
								<div class="table-header" style="width: 80%; ">
									Perhitungan ke <?= $key ?> menentukan nilai densitas dari m<?= $key ?>
								</div>
								<table class="table table-striped table-bordered" style="width: 80%; height: 50px; ">
									<?php foreach ($value as $keys => $values) { ?>
										<tr>
											<?php foreach ($values as $keyss => $valuess) { ?>
												<?php if (count($valuess) == 0) { ?>
													<td></td>
													<td></td>
												<?php } else { ?>
													<?php if (count($valuess['id_penyakit']) == 0) { ?>
														<td>ø</td>
													<?php } else { ?>
														<td><?= implode(',', $valuess['id_penyakit']) ?></td>
													<?php } ?>

													<td><?= $valuess['nilai'] ?></td>
												<?php } ?>
											<?php } ?>
										</tr>
									<?php } ?>
								</table>
							<?php } ?>
							<table class="table table-striped table-bordered" style="width: 80%; height: 50px; ">
								<tr>
									<th align="center">Penyakit</th>
									<th align="center">Nilai</th>
								</tr>
								<?php
								$no = 1;
								foreach ($data['hasil']['nilaiCombine'][count($data['hasil']['nilaiCombine'])] as $key => $value) { ?>
									<tr>
										<?php if (count($data['hasil']['tableCombine'][count($data['hasil']['tableCombine'])][$key]) == 0) { ?>
											<td>ø</td>
										<?php } else { ?>
											<th align="center"><?= implode(',', $data['hasil']['tableCombine'][count($data['hasil']['tableCombine'])][$key]) ?></th>
										<?php } ?>
										<th align="center"><?= $value ?></th>
									</tr>
								<?php } ?>
							</table>
							<div class="hr hr-24"></div>
							<div> Penyakit terindenfitikasi berdasarkan hitungan Metode Dempster Shafer:
								<ul>
								</ul>
								<?php
								if (count($data['hasil']['tableCombine'][count($data['hasil']['tableCombine'])][$data['hasil']['max']]) == 0) { ?>
									<li>Tidak Ada</li>
								<?php } else {
									$nilaiKombinasi = $data['hasil']['nilaiCombine'][count($data['hasil']['nilaiCombine'])][$data['hasil']['max']];

									foreach ($data['hasil']['tableCombine'][count($data['hasil']['tableCombine'])][$data['hasil']['max']] as $key => $value) {
										$data_gangguan = $this->m_penyakit->getListPenyakitById($value); ?>
										<li><?= $data_gangguan->penyakit ?> dengan persentase sebesar
											<?php
											echo floatval($nilaiKombinasi * 100) . ' % , diperoleh dari nilai himpunan penyakit yang paling tinggi.';
											?> <br>
											<a href="<?= base_url('riwayatpasien'); ?>">Lihat riwayat konsultasi</a><br>
										</li>
									<?php }
								}
								?>
							</div>

							<br>
							<a href="<?php echo base_url('diagnosa'); ?>" class="btn btn-xl btn-primary"><i
										class="ace-icon fa fa-angle-double-left"></i> Kembali Diagnosa</a>
						</form>
					</div>
				</div>
			</div>

		</div>
	</div>


</div> <!-- .site-wrap -->


<script src="<?= base_url('assets/client/'); ?>js/jquery-3.3.1.min.js"></script>
<script src="<?= base_url('assets/client/'); ?>js/jquery-migrate-3.0.1.min.js"></script>
<script src="<?= base_url('assets/client/'); ?>js/jquery-ui.js"></script>
<script src="<?= base_url('assets/client/'); ?>js/popper.min.js"></script>
<script src="<?= base_url('assets/client/'); ?>js/bootstrap.min.js"></script>
<script src="<?= base_url('assets/client/'); ?>js/owl.carousel.min.js"></script>
<script src="<?= base_url('assets/client/'); ?>js/jquery.stellar.min.js"></script>
<script src="<?= base_url('assets/client/'); ?>js/jquery.countdown.min.js"></script>
<script src="<?= base_url('assets/client/'); ?>js/bootstrap-datepicker.min.js"></script>
<script src="<?= base_url('assets/client/'); ?>js/jquery.easing.1.3.js"></script>
<script src="<?= base_url('assets/client/'); ?>js/aos.js"></script>
<script src="<?= base_url('assets/client/'); ?>js/jquery.fancybox.min.js"></script>
<script src="<?= base_url('assets/client/'); ?>js/jquery.sticky.js"></script>


<script src="<?= base_url('assets/client/'); ?>js/main.js"></script>

</body>
</html>
