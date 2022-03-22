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
					<h1 class="mb-0 site-logo"><a href="<?= base_url('auth') ?>" class="text-black mb-0">HealthMe<span
									class="text-primary">.</span> </a></h1>
				</div>
				<div class="col-12 col-md-10 d-none d-xl-block">
					<?php
					$cur1 = $this->uri->segment(2);
					?>

					<nav class="site-navigation position-relative text-right" role="navigation">

						<ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
							<li><a href="<?= base_url('auth') ?>" class="nav-link">Beranda</a></li>
							<li><a href="<?= base_url('auth/#tentang-kami-section') ?>" class="nav-link">Tentang
									Kami</a></li>
							<li><a href="<?= base_url('auth/#pola-hidup-section') ?>" class="nav-link">Pola Hidup
									Sehat</a></li>
							<li><a href="<?= base_url('auth/#penyakit-section') ?>" class="nav-link ">Penyakit</a></li>
							<li><a href="<?= base_url('diagnosa') ?>" class="nav-link ">Konsultasi</a></li>
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
					<h3 class="section-sub-title mt-4">Heart Disorder</h3>
					<h2 class="section-title mt-1">Penyakit Jantung</h2>
					<p>Penyakit jantung merupakan kondisi dimana organ jantung mengalami gangguan hingga menyebabkan
						berbagai komplikasi. Berbagai macam gangguan penyakit jantung beragam seperti gangguan pembuluh
						darah, irama jantung, katup jantung hingga kanker jantung. Penyakit jantung menjadi penyakit
						yang berbahaya karena dapat mengakibatkan kematian mendadak.</p>
				</div>
			</div>

			<div class="bg-white py-4 mb-4">
				<div class="row mx-4 my-4 product-item-2 align-items-start">
					<div class="col-md-6 mb-5 mb-md-0 order-1 order-md-2">
						<div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
							<div class="carousel-inner" data-aos="fade">
								<div class="carousel-item active">
									<img class="img-fluid img-thumbnail"
										 src="<?= base_url('assets/images/penyakit/jantung/gambar3.jpg'); ?>"
										 alt="First slide">
								</div>
								<div class="carousel-item">
									<img class="img-fluid img-thumbnail"
										 src="<?= base_url('assets/images/penyakit/jantung/gambar1.jpg'); ?>"
										 alt="Second slide">
								</div>
								<div class="carousel-item">
									<img class="img-fluid img-thumbnail"
										 src="<?= base_url('assets/images/penyakit/jantung/gambar2.jpg'); ?>"
										 alt="Third slide">
								</div>
								<div class="carousel-item">
									<img class="img-fluid img-thumbnail"
										 src="<?= base_url('assets/images/penyakit/jantung/gambar4.jpg'); ?>"
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
						<h3 class="text-black mb-2 font-weight-bold">Bahaya Penyakit Jantung</h3>
						<p class="mb-4" style="text-align:justify; font-size:16px;"> Penyakit jantung diakibatkan adanya
							gangguan fungsi jantung yang menyebabkan kematian terbanyak di dunia. Kondisi jantung yang
							tidak
							dapat melakukan fungsinya dengan semesti menyebabkan penderita mengalami gangguan yang
							serius. Penyakit jantung sering juga disebut dengan istilah "<i>silent killer</i>" karena
							banyak kasus penderita tidak menyadari akan penyakit ini hingga serangan jantung.</p>
						<p class="mb-4" style="text-align:justify; font-size:16px;">
							Terdapat berbagai macam jenis penyakit jantung seperti jantung koroner yaitu penyempitan
							pembuluh darah pada jantung. Aritmia gangguan pada irama jantung. Kardiomiopati gangguan
							terhadap oto jantung. Infeksi jantung yaitu infeksi yang terjadi pada akibat virus dan
							bakteri.</p>
						<hr>
						<p>
							<a href="#faktor-jantung-section"
							   class="btn btn-black btn-outline-black rounded-0 d-block mb-2 mb-lg-0 d-lg-inline-block main-menu js-clone-nav ">Baca
								Faktor Penyakit Jantung !</a>
						</p>
					</div>
				</div>
			</div>

			<!-- 3 -->
			<div class="bg-white py-4 mb-4" id="faktor-jantung-section">
				<div class="bg-white py-4 mb-4">
					<div class="col-12 text-center" data-aos="fade" data-aos-delay="100">
						<h2 class="section-title mb-5">Faktor Penyakit Jantung</h2>
					</div>

					<div class="row">
						<div class="col-md-6 col-lg-4 mb-5 mb-lg-0 " data-aos="fade" data-aos-delay="100">
							<div class="person text-center">
								<img src="<?= base_url('assets/images/penyakit/jantung/faktor1.jpg'); ?>" alt="Image"
									 class="img-fluid img-thumbnail rounded w-75 mb-3">
								<h2 class="text-black font-weight-bold">Usia</h2>
								<p class="mb-4 pl-2 pr-2" align="justify" style="font-size:14px">
									Usia memang tidak dapat dihindari pada manusia yang akan selalu bertambah usia.
									Penuaan meningkatan risiko perusakan pada arteri hingga penyempitan arteri. Selain
									penyempitan arteri dapat menyebabkan otot jantung melemah hingga sindrom
									koroner.</p>
								<hr>
							</div>
						</div>

						<div class="col-md-6 col-lg-4 mb-5 mb-lg-0" data-aos="fade" data-aos-delay="200">
							<div class="person text-center">
								<img src="<?= base_url('assets/images/penyakit/jantung/faktor2.jpg'); ?>" alt="Image"
									 class="img-fluid img-thumbnail rounded w-75 mb-3">
								<h2 class="text-black font-weight-bold">Pola Diet Salah</h2>
								<p class="mb-4 pl-2 pr-2" align="justify" style="font-size:14px">
									Diet merupakan salah satu upaya untuk mengurangi kelebihan berat badan, namun pola
									diet yang salah justru malah menyebabkan kelainan pada organ jantung. Diet tinggi
									lemak, gula dan garam justru akan meningkatkan penyakit jantung.</p>
								<hr>
							</div>
						</div>

						<div class="col-md-6 col-lg-4 mb-5 mb-lg-0" data-aos="fade" data-aos-delay="300">
							<div class="person text-center">
								<img class="img-fluid img-thumbnail rounded w-75 mb-3"
									 src="<?= base_url('assets/images/penyakit/jantung/faktor3.jpg'); ?>" alt="Image">
								<h2 class="text-black font-weight-bold">Riwayat Keluarga</h2>
								<p class="mb-4 pl-2 pr-2" align="justify" style="font-size:14px">
									Riwayat keluarga yang memiliki riwayat penyakit jantung juga memberikan risiko
									penyakit ini terkena pada anda. Risiko ini akan meningkat keturuan penyakit jantung
									terutama jika keluarga anda mengalami penyakit jantung pada usia dini yaitu sebelum
									50 tahun.</p>
								<hr>

							</div>
						</div>
					</div>
					<br>

					<div class="row">
						<div class="col-md-6 col-lg-4 mb-5 mb-lg-0 " data-aos="fade" data-aos-delay="100">
							<div class="person text-center">
								<img class="img-fluid img-thumbnail rounded w-75 mb-3"
									 src="<?= base_url('assets/images/penyakit/jantung/faktor4.jpg'); ?>" alt="Image">
								<h2 class="text-black font-weight-bold">Kolestrol Tinggi</h2>
								<p class="mb-4 pl-2 pr-2" align="justify" style="font-size:14px">
									Konsumsi kolerstrol yang tinggi justru menyebabkan penyumbatan terhadap organ
									jantung. Penyempitan organ jantung terjadi ketika terdapat penyempitan pada otot
									jantung sehingga jantung tidak dapat memompa darah secara teratur.</p>
								<hr>
							</div>
						</div>

						<div class="col-md-6 col-lg-4 mb-5 mb-lg-0" data-aos="fade" data-aos-delay="200">
							<div class="person text-center">
								<img class="img-fluid img-thumbnail rounded w-75 mb-3"
									 src="<?= base_url('assets/images/penyakit/jantung/faktor5.jpg'); ?>" alt="Image">
								<h2 class="text-black font-weight-bold">Malas Olahraga</h2>
								<p class="mb-4 pl-2 pr-2" align="justify" style="font-size:14px">
									Kebiasaan malas menjadi hal yang biasa pada kalangan remaja sehingga untuk
									beraktivitas saja sudah malas. Malas berolahraga menyebabkan penyakit kardiovaskular
									yang menyerang organ jantung. Kesehatan perlu dijaga melalui olahraga yang
									teratur.</p>
								<hr>
							</div>
						</div>

						<div class="col-md-6 col-lg-4 mb-5 mb-lg-0" data-aos="fade" data-aos-delay="300">
							<div class="person text-center">
								<img class="img-fluid img-thumbnail rounded w-75 mb-3"
									 src="<?= base_url('assets/images/penyakit/jantung/faktor6.jpg'); ?>" alt="Image">
								<h2 class="text-black font-weight-bold">Rokok</h2>
								<p class="mb-4 pl-2 pr-2" align="justify" style="font-size:14px">
									Merokok menyebabkan berbagai penyakit berbahaya salah satunya adalah penyakit
									jantung. Kandungan zat dalam rokok yang bersifat merusak menyebabkan komplikasi pada
									tubuh hingga jantung. Zat seperti tar, nikotin, karbon dioksida menyebabkan
									kerusakan pada organ jantung.</p>
								<hr>

							</div>
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


