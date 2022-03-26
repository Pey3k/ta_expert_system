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
							<li><a href="<?= base_url('diagnosa') ?>" class="nav-link">Penyakit Gigi</a></li>
							<li><a href="<?= base_url('diagnosa') ?>" class="nav-link">Konsultasi</a></li>
							<li><a href="<?= base_url('profile') ?>" class="nav-link">Petunjuk</a></li>
							<li><a href="<?= base_url('profile') ?>" class="nav-link">Profile</a></li>
							<li><a href="<?= base_url('login/logout') ?>" class="nav-link">Logout</a></li>
						</ul>
					</nav>
				</div>

				<div class="col-6 d-inline-block d-xl-none ml-md-0 py-3" style="position: relative; top: 3px;"><a
							href="#" class="site-menu-toggle js-menu-toggle text-black float-right"><span
								class="icon-menu h3"></span></a></div>

			</div>
		</div>

	</header>
	<div class="site-wrap">
		<div class="site-section bg-light" id="contact-section">

			<div class="container">

				<div class="row align-items-center justify-content-center">
					<div class="col-md-7 text-center">
						<h3 class="section-title text-black mt-4 mb-4">Konsultasi Pola Hidup</h3>
					</div>

				</div>
				<form action="<?php echo base_url() . 'diagnosa/kalkulasi/' . $id_pengguna; ?>" method="post">
					<?= $this->session->flashdata('message'); ?>
					<div class="card shadow mb-4">
						<div class="card-header py-3">
							<h6 class="m-0 font-weight-bold text-primary">Silahkan melakukan mengisi jawaban
								dibawah: </h6>
						</div>
						<div class="card-body">
							<div class="table-responsive">
								<table class="table table-bordered table-striped" id="dataTable" width="100%"
									   cellspacing="0">
									<col width="20">
									<thead>
									<tr>
										<th>No.</th>
										<th style="height:10px">Pertanyaan</th>
										<th colspan=2 style="width:200px">Jawaban</th>
									</tr>
									</thead>
									<tbody>
									<?php
									$no = 0;
									foreach ($list_gejala as $value) {
										$no++;
										?>
										<tr>
											<td><?php echo $no; ?></td>
											<td><?php echo "[" . $value->id_gejala . "] " . $value->gejala . "</b>"; ?></td>
											<td><input type="radio" id="form-field-1"
													   name="<?php echo $value->id_gejala; ?>"
													   value="<?php echo $value->id_gejala; ?>"
													   class="col-xs-10 col-sm-5">Ya
											</td>
											<td><input type="radio" id="form-field-1"
													   name="<?php echo $value->id_gejala; ?>"
													   value=""
													   class="col-xs-10 col-sm-5">Tidak
											</td>
										</tr>
									<?php } ?>
									</tbody>

								</table>
							</div>

							<div class="clearfix form-actions">

								<div class="col-md-offset-3 col-ml-0 pl-0">
									<button class="btn btn-primary" type="submit">
										<i class="fa fa-home"></i>
										Diagnosa Sekarang
									</button>

									&nbsp; &nbsp; &nbsp;
									<button class="btn btn-secondary" type="reset">
										<i class="fa fa-home"></i>
										Reset
									</button>
								</div>
							</div>

				</form>

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
