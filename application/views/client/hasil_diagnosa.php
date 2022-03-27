<!DOCTYPE html>
<html lang="en">
<head>
	<title>WAOS - Hasil Diagnosa Penyakit</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

	<link rel="stylesheet" href="<?= base_url('assets/frontend/'); ?>css/open-iconic-bootstrap.min.css">
	<link rel="stylesheet" href="<?= base_url('assets/frontend/'); ?>css/animate.css">
	<link rel="stylesheet" href="<?= base_url('assets/frontend/'); ?>css/owl.carousel.min.css">
	<link rel="stylesheet" href="<?= base_url('assets/frontend/'); ?>css/owl.theme.default.min.css">
	<link rel="stylesheet" href="<?= base_url('assets/frontend/'); ?>css/magnific-popup.css">
	<link rel="stylesheet" href="<?= base_url('assets/frontend/'); ?>css/aos.css">
	<link rel="stylesheet" href="<?= base_url('assets/frontend/'); ?>css/ionicons.min.css">
	<link rel="stylesheet" href="<?= base_url('assets/frontend/'); ?>css/bootstrap-datepicker.css">
	<link rel="stylesheet" href="<?= base_url('assets/frontend/'); ?>css/jquery.timepicker.css">
	<link rel="stylesheet" href="<?= base_url('assets/frontend/'); ?>css/flaticon.css">
	<link rel="stylesheet" href="<?= base_url('assets/frontend/'); ?>css/icomoon.css">
	<link rel="stylesheet" href="<?= base_url('assets/frontend/'); ?>css/style.css">
</head>
<body>
<div class="py-md-5 py-4 border-bottom">
	<div class="container">
		<div class="row no-gutters d-flex align-items-start align-items-center px-3 px-md-0">
			<div class="col-md-4 order-md-2 mb-2 mb-md-0 align-items-center text-center">
				<a class="navbar-brand" href="<?= base_url('') ?>">WAOS</span></a>
			</div>
			<div class="col-md-4 order-md-1 d-flex topper mb-md-0 mb-2 align-items-center text-md-right">
			</div>
			<div class="col-md-4 order-md-3 d-flex topper mb-md-0 align-items-center">
			</div>
		</div>
	</div>
</div>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark ftco-navbar-light" id="ftco-navbar">
	<div class="container d-flex align-items-center">
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
				aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="oi oi-menu"></span> Menu
		</button>
		<div class="collapse navbar-collapse" id="ftco-nav">
			<ul class="navbar-nav m-auto">
				<li class="nav-item"><a href="<?= base_url('') ?>" class="nav-link">Beranda</a></li>
				<li class="nav-item active"><a href="<?= base_url('diagnosa') ?>" class="nav-link">Konsultasi</a>
				</li>
				<li class="nav-item"><a href="<?= base_url('riwayatpasien') ?>" class="nav-link">Riwayat
						Konsultasi</a>
				</li>
				<li class="nav-item"><a href="<?= base_url('profile') ?>" class="nav-link">Profil</a>
				</li>
				<li class="nav-item"><a href="<?= base_url('login/logout') ?>" class="nav-link">Logout</a></li>
			</ul>
		</div>
	</div>
</nav>
<!-- END nav -->

<section class="hero-wrap hero-wrap-2" style="background-image: url('assets/frontend/images/bg_1.jpg');"
		 data-stellar-background-ratio="0.5">
	<div class="overlay"></div>
	<div class="container">
		<div class="row no-gutters slider-text align-items-center justify-content-center">
			<div class="col-md-9 ftco-animate text-center">
				<h1 class="mb-2 bread">Diagnosa Penyakit</h1>
			</div>
		</div>
	</div>
</section>

<section class="ftco-section ftco-services">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<?php
				$dataOld = $this->session->flashdata('oldPost');
				echo $this->session->flashdata('msgbox'); ?>
				<!-- #section:elements.form -->
				<div class="table-header" style="width: 80%; ">
					Gejala yang dirasakan oleh pasien:
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
						<?php if ($value != "") { ?>
							<tr>
								<th align="center"><?= $no++ ?></th>
								<th align="center"><?= $value ?></th>
								<th align="center">
									<?php
									$dataGejala = $this->m_gejala->getlistGejalaById($value);
									echo $dataGejala->gejala;
									?>
								</th>
							</tr>
						<?php } ?>
					<?php } ?>
				</table>

				<br/>
				<div>
					<h3>Diagnosa Penyakit Pasien </h3>
					<p>Berdasarkan data gejala yang Anda rasakan pada gigi Anda, kemungkinan Anda mengalami
						beberapa penyakit gigi yaitu: </p>
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
								?> |
								<a href="<?= base_url() ?>/diagnosa/solusi/<?= $value ?>" target="_blank">Baca
									Solusi
									Tindakan</a><br></li>
						<?php }
					}
					?>
				</div>

				<br/>
				<form method="post" action="<?php echo base_url('diagnosa/tampil_hitung'); ?>">
					<input type="hidden" name="data" value='<?= json_encode($data["hasil"]) ?>'>
					<button class="btn btn-xl btn-info mt-2"> Detail Perhitungan
					</button>
				</form>
			</div>

		</div>
	</div>
</section>

<footer class="ftco-footer ftco-bg-dark ftco-section">
	<div class="container">
		<div class="row mb-5">
			<div class="col-md">
				<div class="ftco-footer-widget mb-5">
					<h2 class="ftco-heading-2 logo">WAOS</h2>
					<p>Konsultasi atas permasalahan gigi Anda.</p>
				</div>
			</div>
			<div class="col-md">
				<div class="ftco-footer-widget mb-5 ml-md-4">
					<h2 class="ftco-heading-2">Links</h2>
					<ul class="list-unstyled">
						<li><a href="<?= base_url('') ?>"><span class="ion-ios-arrow-round-forward mr-2"></span>Beranda</a>
						</li>
						<li><a href="<?= base_url('/#penyakit-gigi') ?>"><span
										class="ion-ios-arrow-round-forward mr-2"></span>Penyakit Gigi</a></li>
						<li><a href="<?= base_url('diagnosa') ?>"><span class="ion-ios-arrow-round-forward mr-2"></span>Konsultasi</a>
						</li>
						<li><a href="<?= base_url('petunjuk') ?>"><span class="ion-ios-arrow-round-forward mr-2"></span>Petunjuk</a>
						</li>
						<li><a href="<?= base_url('tentang') ?>"><span class="ion-ios-arrow-round-forward mr-2"></span>Tentang
								Kami</a></li>
						<li><a href="<?= base_url('profile') ?>"><span class="ion-ios-arrow-round-forward mr-2"></span>Login</a>
						</li>
						<li><a href="<?= base_url('admin/login') ?>"><span
										class="ion-ios-arrow-round-forward mr-2"></span>Admin Login</a></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12 text-center">

				<p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
					Copyright &copy;<script>document.write(new Date().getFullYear());</script>
					All rights reserved | WAOS
					<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
			</div>
		</div>
	</div>
</footer>


<!-- loader -->
<div id="ftco-loader" class="show fullscreen">
	<svg class="circular" width="48px" height="48px">
		<circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/>
		<circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
				stroke="#F96D00"/>
	</svg>
</div>


<script src="<?= base_url('assets/frontend/'); ?>js/jquery.min.js"></script>
<script src="<?= base_url('assets/frontend/'); ?>js/jquery-migrate-3.0.1.min.js"></script>
<script src="<?= base_url('assets/frontend/'); ?>js/popper.min.js"></script>
<script src="<?= base_url('assets/frontend/'); ?>js/bootstrap.min.js"></script>
<script src="<?= base_url('assets/frontend/'); ?>js/jquery.easing.1.3.js"></script>
<script src="<?= base_url('assets/frontend/'); ?>js/jquery.waypoints.min.js"></script>
<script src="<?= base_url('assets/frontend/'); ?>js/jquery.stellar.min.js"></script>
<script src="<?= base_url('assets/frontend/'); ?>js/owl.carousel.min.js"></script>
<script src="<?= base_url('assets/frontend/'); ?>js/jquery.magnific-popup.min.js"></script>
<script src="<?= base_url('assets/frontend/'); ?>js/aos.js"></script>
<script src="<?= base_url('assets/frontend/'); ?>js/jquery.animateNumber.min.js"></script>
<script src="<?= base_url('assets/frontend/'); ?>js/bootstrap-datepicker.js"></script>
<script src="<?= base_url('assets/frontend/'); ?>js/jquery.timepicker.min.js"></script>
<script src="<?= base_url('assets/frontend/'); ?>js/scrollax.min.js"></script>


<script src="<?= base_url('assets/frontend/'); ?>js/main.js"></script>

</body>
</html>
