<html lang="en">
<head>
	<title>Expert System Website</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Muli:300,400,700,900" rel="stylesheet">
	<link rel="stylesheet" href="<?= base_url('assets/admin/frontend/'); ?>fonts/icomoon/style.css">
	<link rel="stylesheet" href="<?= base_url('assets/admin/frontend/'); ?>css/bootstrap.min.css">
	<link rel="stylesheet" href="<?= base_url('assets/admin/frontend/'); ?>css/jquery-ui.css">
	<link rel="stylesheet" href="<?= base_url('assets/admin/frontend/'); ?>css/owl.carousel.min.css">
	<link rel="stylesheet" href="<?= base_url('assets/admin/frontend/'); ?>css/owl.theme.default.min.css">
	<link rel="stylesheet" href="<?= base_url('assets/admin/frontend/'); ?>css/owl.theme.default.min.css">
	<link rel="stylesheet" href="<?= base_url('assets/admin/frontend/'); ?>css/jquery.fancybox.min.css">
	<link rel="stylesheet" href="<?= base_url('assets/admin/frontend/'); ?>css/bootstrap-datepicker.css">
	<link rel="stylesheet" href="<?= base_url('assets/admin/frontend/'); ?>fonts/flaticon/font/flaticon.css">
	<link rel="stylesheet" href="<?= base_url('assets/admin/frontend/'); ?>css/aos.css">
	<link rel="stylesheet" href="<?= base_url('assets/admin/frontend/'); ?>css/style.css">


</head>
<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

<div class="site-wrap">

	<div class="site-mobile-menu site-navbar-target">
		<div class="site-mobile-menu-header">
			<div class="site-mobile-menu-close mt-3">
				<span class="icon-close2 js-menu-toggle"></span>
			</div>
		</div>
		<div class="site-mobile-menu-body"></div>
	</div>
</div>


<header class="site-navbar py-4 bg-white js-sticky-header site-navbar-target" role="banner">


	<div class="container">
		<div class="row align-items-center">

			<div class="col-6 col-xl-2">
				<h1 class="mb-0 site-logo"><a href="<?= base_url('auth/'); ?>" class="text-black mb-0">WAOS<span
								class="text-primary">.</span> </a></h1>
			</div>
			<div class="col-12 col-md-10 d-none d-xl-block">
				<nav class="site-navigation position-relative text-right" role="navigation">

					<ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
						<li><a href="<?= base_url('auth') ?>" class="nav-link">Beranda</a></li>
						<li><a href="<?= base_url('auth/#tentang-kami-section') ?>" class="nav-link">Tentang Kami</a>
						</li>
						<li><a href="<?= base_url('auth/#pola-hidup-section') ?>" class="nav-link">Pola Hidup Sehat</a>
						</li>
						<li><a href="<?= base_url('auth/#penyakit-section') ?>" class="nav-link active">Penyakit</a>
						</li>
					</ul>
				</nav>
			</div>


		</div>
	</div>

</header>
<div class="site-section bg-light" id="pola-hidup-section">
	<div class="container">
		<div class="row mb-5 justify-content-center">
			<div class="col-md-6 text-center">
				<h3 class="section-sub-title">Solusi</h3>
			</div>
		</div>
		<div class="bg-white py-4 mb-4">
			<div class="row mx-4 my-4 product-item-2 align-items-start">
				<div class="col-md-12 mb-5 mb-md-0">
					<?php
					$dataOld = $this->session->flashdata('oldPost');
					echo $this->session->flashdata('msgbox'); ?>
					<!-- #section:elements.form -->
					<div class="form-group">
						<div class="col-sm-12">
							<h3>Penyakit : <?= $dataPenyakit->penyakit ?></h3>
							<p>Solusinya : <?= $dataPenyakit->solusi ?></p>
						</div>
					</div>

					<div class="hr hr-24"></div>
					<div class="col-sm-12">


						<p>
							<a href="<?= base_url('polahidup/makan') ?>"
							   class="btn btn-black btn-outline-black rounded-0 d-block mb-2 mb-lg-0 d-lg-inline-block">Baca
								Selengkapnya !</a>
						</p>
						<p>Silahkan mengisi kuesioner berikut :<a
									href="https://docs.google.com/forms/d/e/1FAIpQLSfDtDY4Hys9VsPOiGmpP7NhwRLUMRHt68rjxkyyc3Zwi85W2g/viewform?usp=sf_link">
								<b>klik sebelah sini :) </a></p>

					</div>
				</div>
			</div>
		</div>

	</div>
</div>

<!-- .site-wrap -->

<script src=" <?= base_url('assets/admin/frontend/'); ?>js/jquery-3.3.1.min.js"></script>
<script src="<?= base_url('assets/admin/frontend/'); ?>js/jquery-migrate-3.0.1.min.js"></script>
<script src="<?= base_url('assets/admin/frontend/'); ?>js/jquery-ui.js"></script>
<script src="<?= base_url('assets/admin/frontend/'); ?>js/popper.min.js"></script>
<script src="<?= base_url('assets/admin/frontend/'); ?>js/bootstrap.min.js"></script>
<script src="<?= base_url('assets/admin/frontend/'); ?>js/owl.carousel.min.js"></script>
<script src="<?= base_url('assets/admin/frontend/'); ?>js/jquery.stellar.min.js"></script>
<script src="<?= base_url('assets/admin/frontend/'); ?>js/jquery.countdown.min.js"></script>
<script src="<?= base_url('assets/admin/frontend/'); ?>js/bootstrap-datepicker.min.js"></script>
<script src="<?= base_url('assets/admin/frontend/'); ?>js/jquery.easing.1.3.js"></script>
<script src="<?= base_url('assets/admin/frontend/'); ?>js/aos.js"></script>
<script src="<?= base_url('assets/admin/frontend/'); ?>js/jquery.fancybox.min.js"></script>
<script src="<?= base_url('assets/admin/frontend/'); ?>js/jquery.sticky.js"></script>


<script src="<?= base_url('assets/admin/frontend/'); ?>js/main.js"></script>

</body>
</html>
