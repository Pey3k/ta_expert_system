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
				<li class="nav-item active"><a href="<?= base_url('') ?>" class="nav-link pl-0">Home</a></li>
				<li class="nav-item"><a href="<?= base_url('diagnosa') ?>" class="nav-link">Penyakit Gigi</a></li>
				<li class="nav-item"><a href="<?= base_url('diagnosa') ?>" class="nav-link">Konsultasi</a></li>
				<li class="nav-item"><a href="<?= base_url('profile') ?>" class="nav-link">Petunjuk</a></li>
				<li class="nav-item"><a href="<?= base_url('profile') ?>" class="nav-link">Tentang Kami</a></li>
				<?php if(empty($this->session->userdata('loginUser'))) { ?>
					<li class="nav-item"><a href="<?= base_url('login') ?>" class="nav-link">Login</a></li>
				<?php } else { ?>
					<li class="nav-item"><a href="<?= base_url('login/logout') ?>" class="nav-link">Logout</a></li>
				<?php } ?>
			</ul>
		</div>
	</div>
</nav>
<!-- END nav -->

<section class="home-slider owl-carousel">
	<div class="slider-item" style="background-image:url(assets/frontend/images/bg_1.jpg);"
		 data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row no-gutters slider-text align-items-center justify-content-end" data-scrollax-parent="true">
				<div class="col-md-6 text ftco-animate">
					<h1 class="mb-4">Selamat Datang di <span>WAOS</span></h1>
					<h3 class="subheading">Konsultasi terbaik atas permasalahan gigi Anda!</h3>
					<p><a href="<?= base_url('diagnosa') ?>" class="btn btn-secondary px-4 py-3 mt-3">Konsultasi</a></p>
				</div>
			</div>
		</div>
	</div>

	<div class="slider-item" style="background-image:url(assets/frontend/images/bg_2.jpg);">
		<div class="overlay"></div>
		<div class="container">
			<div class="row no-gutters slider-text align-items-center justify-content-end" data-scrollax-parent="true">
				<div class="col-md-6 text ftco-animate">
					<h1 class="mb-4">Senyum Membuat Kesan <br>Yang Abadi</h1>
					<h3 class="subheading">Kesehatan gigi Anda menjadi yang utama dengan pertolongan medis yang komprehensif dan terjangkau!.</h3>
					<p><a href="<?= base_url('daftar') ?>" class="btn btn-secondary px-4 py-3 mt-3">Registrasi</a></p>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="ftco-section ftco-no-pt ftco-no-pb">
	<div class="container">
		<div class="row no-gutters">
			<div class="col-md-5 p-md-5 img img-2 mt-5 mt-md-0"
				 style="background-image: url(assets/frontend/images/about.jpg);">
			</div>
			<div class="col-md-7 wrap-about py-4 py-md-5 ftco-animate">
				<div class="heading-section mb-5">
					<div class="pl-md-5 ml-md-5 pt-md-5">
						<span class="subheading mb-2">Welcome to WAOS</span>
						<h2 class="mb-2" style="font-size: 32px;">Medical specialty concerned with the care of acutely
							ill hospitalized patients</h2>
					</div>
				</div>
				<div class="pl-md-5 ml-md-5 mb-5">
					<p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It
						is a paradisematic country, in which roasted parts of sentences fly into your mouth. Even the
						all-powerful Pointing has no control about the blind texts it is an almost unorthographic life
						One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the
						far World of Grammar.</p>
					<p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It
						is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
					<div class="founder d-flex align-items-center mt-5">
						<div class="img" style="background-image: url(assets/frontend/images/doc-1.jpg);"></div>
						<div class="text pl-3">
							<h3 class="mb-0">Dr. Paul Foster</h3>
							<span class="position">CEO, Founder</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="ftco-intro" style="background-image: url(assets/frontend/images/bg_3.jpg);"
		 data-stellar-background-ratio="0.5">
	<div class="overlay"></div>
	<div class="container">
		<div class="row">
			<div class="col-md-9">
				<h2>Konsultasi Gratis bersama WAOS</h2>
				<p class="mb-0">Kesehatan Anda Prioritas Utama Kami dengan Layanan Medis Terlengkap dan Terjangkau</p>
				<p></p>
			</div>
			<div class="col-md-3 d-flex align-items-center">
				<p class="mb-0"><a href="<?= base_url('diagnosa') ?>" class="btn btn-secondary px-4 py-3">Konsultasi Gratis</a></p>
			</div>
		</div>
	</div>
</section>

<section class="ftco-section">
	<div class="container">
		<div class="row justify-content-center mb-5 pb-2">
			<div class="col-md-8 text-center heading-section ftco-animate">
				<span class="subheading">Pricing</span>
				<h2 class="mb-4">Our Pricing</h2>
				<p>Separated they live in. A small river named Duden flows by their place and supplies it with the
					necessary regelialia. It is a paradisematic country</p>
			</div>
		</div>
		<div class="row">
			<div class="col-md-3 ftco-animate">
				<div class="pricing-entry pb-5 text-center">
					<div>
						<h3 class="mb-4">Basic</h3>
						<p><span class="price">$24.50</span> <span class="per">/ session</span></p>
					</div>
					<ul>
						<li>Diagnostic Services</li>
						<li>Professional Consultation</li>
						<li>Tooth Implants</li>
						<li>Surgical Extractions</li>
						<li>Teeth Whitening</li>
					</ul>
					<p class="button text-center"><a href="#" class="btn btn-primary px-4 py-3">Get Offer</a></p>
				</div>
			</div>
			<div class="col-md-3 ftco-animate">
				<div class="pricing-entry pb-5 text-center">
					<div>
						<h3 class="mb-4">Standard</h3>
						<p><span class="price">$34.50</span> <span class="per">/ session</span></p>
					</div>
					<ul>
						<li>Diagnostic Services</li>
						<li>Professional Consultation</li>
						<li>Tooth Implants</li>
						<li>Surgical Extractions</li>
						<li>Teeth Whitening</li>
					</ul>
					<p class="button text-center"><a href="#" class="btn btn-primary px-4 py-3">Get Offer</a></p>
				</div>
			</div>
			<div class="col-md-3 ftco-animate">
				<div class="pricing-entry active pb-5 text-center">
					<div>
						<h3 class="mb-4">Premium</h3>
						<p><span class="price">$54.50</span> <span class="per">/ session</span></p>
					</div>
					<ul>
						<li>Diagnostic Services</li>
						<li>Professional Consultation</li>
						<li>Tooth Implants</li>
						<li>Surgical Extractions</li>
						<li>Teeth Whitening</li>
					</ul>
					<p class="button text-center"><a href="#" class="btn btn-primary px-4 py-3">Get Offer</a></p>
				</div>
			</div>
			<div class="col-md-3 ftco-animate">
				<div class="pricing-entry pb-5 text-center">
					<div>
						<h3 class="mb-4">Platinum</h3>
						<p><span class="price">$89.50</span> <span class="per">/ session</span></p>
					</div>
					<ul>
						<li>Diagnostic Services</li>
						<li>Professional Consultation</li>
						<li>Tooth Implants</li>
						<li>Surgical Extractions</li>
						<li>Teeth Whitening</li>
					</ul>
					<p class="button text-center"><a href="#" class="btn btn-primary px-4 py-3">Get Offer</a></p>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="ftco-section bg-light">
	<div class="container">
		<div class="row justify-content-center mb-5 pb-2">
			<div class="col-md-8 text-center heading-section ftco-animate">
				<span class="subheading">Blog</span>
				<h2 class="mb-4">Recent Blog</h2>
				<p>Separated they live in. A small river named Duden flows by their place and supplies it with the
					necessary regelialia. It is a paradisematic country</p>
			</div>
		</div>
		<div class="row">
			<div class="col-md-4 ftco-animate">
				<div class="blog-entry">
					<a href="blog-single.html" class="block-20 d-flex align-items-end justify-content-end"
					   style="background-image: url('images/image_1.jpg');">
						<div class="meta-date text-center p-2">
							<span class="day">18</span>
							<span class="mos">September</span>
							<span class="yr">2019</span>
						</div>
					</a>
					<div class="text bg-white p-4">
						<h3 class="heading"><a href="#">Scary Thing That You Don’t Get Enough Sleep</a></h3>
						<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
							there live the blind texts.</p>
						<div class="d-flex align-items-center mt-4">
							<p class="mb-0"><a href="#" class="btn btn-primary">Read More <span
											class="ion-ios-arrow-round-forward"></span></a></p>
							<p class="ml-auto mb-0">
								<a href="#" class="mr-2">Admin</a>
								<a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a>
							</p>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4 ftco-animate">
				<div class="blog-entry">
					<a href="blog-single.html" class="block-20 d-flex align-items-end justify-content-end"
					   style="background-image: url('images/image_2.jpg');">
						<div class="meta-date text-center p-2">
							<span class="day">18</span>
							<span class="mos">September</span>
							<span class="yr">2019</span>
						</div>
					</a>
					<div class="text bg-white p-4">
						<h3 class="heading"><a href="#">Scary Thing That You Don’t Get Enough Sleep</a></h3>
						<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
							there live the blind texts.</p>
						<div class="d-flex align-items-center mt-4">
							<p class="mb-0"><a href="#" class="btn btn-primary">Read More <span
											class="ion-ios-arrow-round-forward"></span></a></p>
							<p class="ml-auto mb-0">
								<a href="#" class="mr-2">Admin</a>
								<a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a>
							</p>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4 ftco-animate">
				<div class="blog-entry">
					<a href="blog-single.html" class="block-20 d-flex align-items-end justify-content-end"
					   style="background-image: url('images/image_3.jpg');">
						<div class="meta-date text-center p-2">
							<span class="day">18</span>
							<span class="mos">September</span>
							<span class="yr">2019</span>
						</div>
					</a>
					<div class="text bg-white p-4">
						<h3 class="heading"><a href="#">Scary Thing That You Don’t Get Enough Sleep</a></h3>
						<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
							there live the blind texts.</p>
						<div class="d-flex align-items-center mt-4">
							<p class="mb-0"><a href="#" class="btn btn-primary">Read More <span
											class="ion-ios-arrow-round-forward"></span></a></p>
							<p class="ml-auto mb-0">
								<a href="#" class="mr-2">Admin</a>
								<a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a>
							</p>
						</div>
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
						<li><a href="<?= base_url('') ?>#"><span class="ion-ios-arrow-round-forward mr-2"></span>Home</a></li>
						<li><a href="<?= base_url('diagnosa') ?>"><span class="ion-ios-arrow-round-forward mr-2"></span>Penyakit Gigi</a></li>
						<li><a href="<?= base_url('diagnosa') ?>"><span class="ion-ios-arrow-round-forward mr-2"></span>Konsultasi</a></li>
						<li><a href="<?= base_url('profile') ?>"><span class="ion-ios-arrow-round-forward mr-2"></span>Petunjuk</a></li>
						<li><a href="<?= base_url('profile') ?>"><span class="ion-ios-arrow-round-forward mr-2"></span>Tentang Kami</a></li>
						<li><a href="<?= base_url('profile') ?>"><span class="ion-ios-arrow-round-forward mr-2"></span>Login</a></li>
						<li><a href="<?= base_url('admin/login') ?>"><span class="ion-ios-arrow-round-forward mr-2"></span>Admin Login</a></li>
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
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
<script src="<?= base_url('assets/frontend/'); ?>js/google-map.js"></script>
<script src="<?= base_url('assets/frontend/'); ?>js/main.js"></script>

</body>
</html>
