<!DOCTYPE html>
<html lang="en">
<head>
	<title>Expert System</title>
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
				<li class="nav-item"><a href="<?= base_url('/#penyakit-gigi') ?>" class="nav-link">Penyakit Gigi</a></li>
				<li class="nav-item"><a href="<?= base_url('diagnosa') ?>" class="nav-link">Konsultasi</a></li>
				<li class="nav-item active"><a href="<?= base_url('petunjuk') ?>" class="nav-link">Petunjuk</a></li>
				<li class="nav-item"><a href="<?= base_url('tentang') ?>" class="nav-link">Tentang Kami</a></li>
				<?php if (empty($this->session->userdata('loginUser'))) { ?>
					<li class="nav-item"><a href="<?= base_url('login') ?>" class="nav-link">Login</a></li>
				<?php } else { ?>
					<li class="nav-item"><a href="<?= base_url('login/logout') ?>" class="nav-link">Logout</a></li>
				<?php } ?>
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
				<h1 class="mb-2 bread">Petunjuk</h1>
			</div>
		</div>
	</div>
</section>

<section class="ftco-section ftco-services">
	<div class="container">
		<div class="row">
			<div class="col-md-4 d-flex services align-self-stretch p-4 ftco-animate">
				<div class="media block-6 d-block">
					<div class="img w-100" style="background-image: url(assets/frontend/images/dept-1.jpg);"></div>
					<div class="media-body p-2 mt-3">
						<h3 class="heading">Informasi Seputar Gigi</h3>
						<p>WAOS merupakan aplikasi yang memberikan Anda informasi seputar gigi.
							Informasi seputar gigi dapat Anda lihat pada halaman gigi secara lengkap beserta
							dengan informasi tentang bagaimana merawat kesehatan gigi. </p>
					</div>
				</div>
			</div>
			<div class="col-md-4 d-flex services align-self-stretch p-4 ftco-animate">
				<div class="media block-6 d-block">
					<div class="img w-100" style="background-image: url(assets/frontend/images/dept-3.jpg);"></div>
					<div class="media-body p-2 mt-3">
						<h3 class="heading">Daftarkan Diri Anda</h3>
						<p>Untuk konsultasi dengan pakar Anda harus melakukan pendaftaran pada sistem pakar WAOS.
							Anda dapat mendaftar dengan cara membuat akun baru yang ada pada halaman login.</p>
					</div>
				</div>
			</div>

			<div class="col-md-4 d-flex services align-self-stretch p-4 ftco-animate">
				<div class="media block-6 d-block">
					<div class="img w-100" style="background-image: url(assets/frontend/images/dept-4.jpg);"></div>
					<div class="media-body p-2 mt-3">
						<h3 class="heading">Akses untuk Konsultasi</h3>
						<p>Apabila Anda sudah mendaftarkan diri Anda pada sistem pakar WAOS Anda dapat melakukan
							konsultasi terkait dengan penyakit gigi yang sedang Anda alami. </p>
					</div>
				</div>
			</div>
			<div class="col-md-4 d-flex services align-self-stretch p-4 ftco-animate">
				<div class="media block-6 d-block">
					<div class="img w-100" style="background-image: url(assets/frontend/images/dept-5.jpg);"></div>
					<div class="media-body p-2 mt-3">
						<h3 class="heading">Konsultasi dengan Pakar</h3>
						<p>Anda bisa melakukan konsultasi dengan pakar terkait gejala yang Anda rasakan pada gigi Anda.
							Setelah Anda melakukan login Anda dapat melakukan konsultasi dengan cara klik pada
							konsultasi.
							Anda akan diberi beberapa pertanyaan dari sistem yang bersumber dari pakar terkait gejala
							gigi yang Anda rasakan.</p>
					</div>
				</div>
			</div>
			<div class="col-md-4 d-flex services align-self-stretch p-4 ftco-animate">
				<div class="media block-6 d-block">
					<div class="img w-100" style="background-image: url(assets/frontend/images/dept-2.jpg);"></div>
					<div class="media-body p-2 mt-3">
						<h3 class="heading">Hasil Konsultasi Penyakit</h3>
						<p>Setelah Anda melakukan konsultasi Anda dapat melihat hasil konsultasi penyakit gigi yang Anda
							alami
							beserta dengan persentase penyakit gigi yang sedang Anda alami.
							Pada halaman konsultasi akan berisi informasi penyakit beserta dengan solusi tindakan.
							Data penyakit dan solusi merupakan data yang diperoleh dari pakar gigi.</p>
					</div>
				</div>
			</div>
			<div class="col-md-4 d-flex services align-self-stretch p-4 ftco-animate">
				<div class="media block-6 d-block">
					<div class="img w-100" style="background-image: url(assets/frontend/images/dept-6.jpg);"></div>
					<div class="media-body p-2 mt-3">
						<h3 class="heading">Riwayat Konsultasi</h3>
						<p>Anda dapat melihat riwaya konsultasi penyakit gigi melalui profil akun Anda dengan cara klik
							pada akun Anda, kemudian
							klik pada bagian Riwayat Konsultasi.</p>
					</div>
				</div>
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
						<li><a href="<?= base_url('') ?>"><span
										class="ion-ios-arrow-round-forward mr-2"></span>Beranda</a></li>
						<li><a href="<?= base_url('diagnosa') ?>"><span class="ion-ios-arrow-round-forward mr-2"></span>Penyakit
								Gigi</a></li>
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
