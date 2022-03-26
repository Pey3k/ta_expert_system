<html lang="en">
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


	<header class="site-navbar py-2 bg-white js-sticky-header site-navbar-target" role="banner">

		<div class="container">
			<div class="row align-items-center">

				<div class="col-6 col-xl-2">
					<h1 class="mb-0 site-logo"><a href="<?= base_url('auth') ?>" class="text-black mb-0">WAOS</a></h1>
				</div>
				<div class="col-12 col-md-10 d-none d-xl-block">
					<nav class="site-navigation position-relative text-right" role="navigation">

						<ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
							<li><a href="<?= base_url('') ?>" class="nav-link">Beranda</a></li>
							<li><a href="<?= base_url('/#penyakit-gigi') ?>" class="nav-link">Penyakit Gigi</a></li>
							<li><a href="<?= base_url('diagnosa') ?>" class="nav-link">Konsultasi</a></li>
							<li><a href="<?= base_url('riwayatpasien') ?>" class="nav-link">Riwayat Konsultasi</a></li>
							<?php if(empty($this->session->userdata('loginUser'))) { ?>
								<li><a href="<?= base_url('login') ?>" class="nav-link">Login</a></li>
								<li class="nav-item"><a href="<?= base_url('login') ?>" class="nav-link">Login</a></li>
							<?php } else { ?>
								<li><a href="<?= base_url('profile') ?>" class="nav-link">Profile</a></li>
								<li><a href="<?= base_url('login/logout') ?>" class="nav-link">Logout</a></li>
							<?php } ?>
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
			<div class="row mb-1 justify-content-center" data-aos="fade" data-aos-delay="150">
				<div class="col-md-12 text-center">
					<h3 class="section-sub-title mt-4">Pulpitis</h3>
					<h2 class="section-title mt-1">Penyakit Pulpitis</h2>
					<p>Infeksi Saluran Pernapasan Akut merupakan penyakit yang dialami oleh banyak orang. Infeksi ini
						merupakan
						jenis penyakit yang menyebabkan gangguan pada pernapasan seseorang. ISPA dapat terjadi kapan
						saja terutama padat musim hujan.
						Penyakit ISPA dapat menjadi parah jika tidak segera diperiksa dan diobati.</p>
				</div>
			</div>

			<div class="bg-white py-4 mb-4">
				<div class="row mx-4 my-4 product-item-2 align-items-start">
					<div class="col-md-6 mb-5 mb-md-0 order-1 order-md-2">
						<div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
							<div class="carousel-inner" data-aos="fade">
								<div class="carousel-item active">
									<img class="img-fluid img-thumbnail"
										 src="<?= base_url('assets/images/penyakit/ispa/gambar4.jpg'); ?>"
										 alt="First slide">
								</div>
								<div class="carousel-item">
									<img class="img-fluid img-thumbnail"
										 src="<?= base_url('assets/images/penyakit/ispa/gambar1.jpg'); ?>"
										 alt="Second slide">
								</div>
								<div class="carousel-item">
									<img class="img-fluid img-thumbnail"
										 src="<?= base_url('assets/images/penyakit/ispa/gambar2.jpg'); ?>"
										 alt="Third slide">
								</div>
								<div class="carousel-item">
									<img class="img-fluid img-thumbnail"
										 src="<?= base_url('assets/images/penyakit/ispa/gambar3.jpg'); ?>"
										 alt="Fourth slide">
								</div>
							</div>
							<a class="carousel-control-prev" href="#carouselExampleFade" role="button"
							   data-slide="prev">
								<span class="carousel-control-prev-icon mr-5" aria-hidden="true"></span>
								<span class="sr-only">Previous</span>
							</a>
							<a class="carousel-control-next" href="#carouselExampleFade" role="button"
							   data-slide="next">
								<span class="carousel-control-next-icon ml-5" aria-hidden="true"></span>
								<span class="sr-only">Next</span>
							</a>
						</div>
					</div>

					<div class="col-md-5 mr-auto product-title-wrap order-2 order-md-1" data-aos="fade">
						<h3 class="text-black mb-2 font-weight-bold">Bahaya Infeksi Saluran Pernapasan Akut</h3>
						<p class="mb-4" style="text-align:justify; font-size:16px;">
							Infeksi Saluran Pernapasan Akut (ISPA) disebabkan oleh serangan langsung terhadap penapasan
							seseorang terutama melalui mulu dan hidung. Penyebab utama dari ISPA adalah virus atau
							bakteri.
							Virus dan bakteri yang sering menyerang penderita antara lain virus influenza, adenovirus
							dan antivirals. ISPA yang tidak segera ditangani akan menyebabkan penyakit berbahaya.
						<p class="mb-4" style="text-align:justify; font-size:16px;">
							Infeksi tersebut dapat menyebabkan bronkitis hingga akut. Bronkitis merupakan infeksi pada
							saluran pernapasan akut yang menyebabkan iritasi pada saluran udara yang menuju paru - paru.
							Bronkitis awalnya
							seperti penyakit ISPA biasanya di awali dengan gejala - gejala seperti batuk, sesak napas
							hingga menyebabkan daya tahan hubung yang melemah.</p>
						<hr>
						<p>
							<a href="#faktor-ispa-section"
							   class="btn btn-black btn-outline-black rounded-0 d-block mb-2 mb-lg-0 d-lg-inline-block main-menu js-clone-nav ">Baca
								Faktor Infeksi Saluran Pernapasan Akut !</a>
						</p>
					</div>
				</div>
			</div>

			<!-- 3 -->

			<div class="bg-white py-4 mb-4" id="faktor-ispa-section">
				<div class="col-12 text-center" data-aos="fade" data-aos-delay="100">
					<h2 class="section-title mb-5">Faktor Infeksi Saluran Pernapasan </h2>
				</div>

				<div class="row">
					<div class="col-md-6 col-lg-4 mb-5 mb-lg-0 " data-aos="fade" data-aos-delay="100">
						<div class="person text-center">
							<img src="<?= base_url('assets/images/penyakit/ispa/faktor1.jpg'); ?>" alt="Image"
								 class="img-fluid img-thumbnail rounded w-75 mb-3">
							<h2 class="text-black font-weight-bold">Virus dan Bakteri</h2>
							<p class="mb-4 pl-2 pr-2" align="justify" style="font-size:14px">
								Virus dan bakteri merupakan faktor utama dari Infeksi Saluran Pernapasa Akut (ISPA).
								Penyebaran virus dan bakteri tersebut di sebarkan oleh penderita
								melalui udara. Terdapat berbagai virus dan bakteri yang berbahaya
								seperti influenza. Selain melalui udara, virus dan bakter tersebut dapat disebarkan
								melalui
								cairan seperti air liur, maka sangat perlu untuk menjaga kebersihan lingkungan dan
								tubuh. </p>
							<hr>
						</div>
					</div>

					<div class="col-md-6 col-lg-4 mb-5 mb-lg-0" data-aos="fade" data-aos-delay="200">
						<div class="person text-center">
							<img src="<?= base_url('assets/images/penyakit/ispa/faktor2.jpg'); ?>" alt="Image"
								 class="img-fluid img-thumbnail rounded w-75 mb-3">
							<h2 class="text-black font-weight-bold">Bersin</h2>
							<p class="mb-4 pl-2 pr-2" align="justify" style="font-size:14px">
								Bersin menjadi faktor penyabab tersebarnya virus pembawa Infeksi Saluran Pernapasan Akut
								(ISPA). Virus dan bakteri yang tersebar melalui bersin dapat mudah menyebar karena udara
								disekitar, apalagi udara yang lembab memudahkan masuk ke tubuh. Penyebaran virus dan
								bakteri tersebut dari orang ke orang dan dapat menyebar lebih dari satu orang, sehingga
								penyebaran relatif cepat dan bahaya.</p>
							<hr>
						</div>
					</div>

					<div class="col-md-6 col-lg-4 mb-5 mb-lg-0" data-aos="fade" data-aos-delay="300">
						<div class="person text-center">
							<img class="img-fluid img-thumbnail rounded w-75 mb-3"
								 src="<?= base_url('assets/images/penyakit/ispa/faktor3.jpg'); ?>" alt="Image">
							<h2 class="text-black font-weight-bold">Batuk</h2>
							<p class="mb-4 pl-2 pr-2" align="justify" style="font-size:14px">
								Penyebaran Infeksi Saluran Pernapasan Akut (ISPA) juga dapat melalui batuk dari
								penderita yang menular ke individu lainnya. Sama halnya dengan bersin batuk menyebabkan
								virus dan bakteri infeksi tersebut tersebar melalui udara disekitar. Batuk dari
								penderita lebih bahaya dibandingkan bersin, karena batuk tersebut bersifat keras dan
								penyebaran dapat disebarkan kepada orang disekitar penderita.</p>
							<hr>

						</div>
					</div>
				</div>


			</div>


		</div>
	</div>


	<!-- .site-wrap -->

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


<!-- Modal -->
<div class="modal fade" id="info_obesitas" tabindex="-1" role="dialog" aria-labelledby="info_obesitas"
	 aria-hidden="true">
	<div class="modal-dialog" role="document">

		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLongTitle">Obesitas</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body" style="width:500px">
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Keluar</button>
				<button type="button" class="btn btn-primary">Download</button>
			</div>
		</div>
	</div>
</div>
