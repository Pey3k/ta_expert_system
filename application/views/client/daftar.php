<!DOCTYPE html>
<html lang="en">
<head>
	<title>WAOS - Daftar</title>
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
				<li class="nav-item"><a href="<?= base_url('login') ?>" class="nav-link">Masuk</a></li>
				<li class="nav-item active"><a href="<?= base_url('daftar') ?>" class="nav-link">Daftar</a>
				</li>
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
				<h1 class="mb-2 bread">Registrasi Pasien</h1>
			</div>
		</div>
	</div>
</section>

<section class="ftco-section ftco-services">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<form action="<?= base_url('daftar/register'); ?>" method="post" class="p-5 bg-white">
					<?= $this->session->flashdata('message'); ?>

					<div class="row form-group">
						<div class="col-md-12">
							<label class="text-black" for="nama_lengkap">Nama Lengkap</label>
							<input type="text" id="nama" name="nama" class="form-control rounded-0"
								   value="<?= set_value('nama'); ?>" required>
						</div>
					</div>

					<div class="row form-group">
						<div class="col-md-6">
							<label class="text-black" for="tempat_lahir">Tempat Lahir </label>
							<input type="text" id="tempat_lahir" name="tempat_lahir" min="1" max="100"
								   value="<?= set_value('tempat_lahir'); ?>" class="form-control rounded-0" required>
						</div>

						<div class="col-md-6">
							<label class="text-black" for="tgl_lahir">Tanggal Lahir</label>
							<input type="date" id="tgl_lahir" name="tgl_lahir"
								   value="<?= set_value('tgl_lahir'); ?>" class="form-control rounded-0" required>
						</div>

					</div>

					<div class="row form-group">
						<div class="col-md-6">
							<label class="text-black" for="umur">Umur </label>

							<input type="number" id="umur" name="umur" min="1" max="100"
								   value="<?= set_value('umur'); ?>" class="form-control rounded-0">
						</div>

						<div class="col-md-6">
							<label class="text-black" for="jk">Jenis Kelamin</label>
							<select name="jk" id="jk" class="form-control rounded-0" required autofocus
									value="<?= set_value('jk'); ?>">
								<option value="Laki-Laki" selected>Laki-Laki</option>
								<option value="Perempuan">Perempuan</option>
							</select>
						</div>

					</div>

					<div class="row form-group">
						<div class="col-md-12">
							<label class="text-black" for="email">Email</label>
							<input type="email" id="email" name="email" class="form-control rounded-0"
								   value="<?= set_value('email'); ?>">
							<?= form_error('email', '<small class="text-danger pl-1">', '</small>'); ?>
						</div>
					</div>

					<div class="row form-group">
						<div class="col-md-12">

							<label class="text-black" for="username">Username</label>
							<input type="text" id="username" name="username" class="form-control rounded-0"
								   value="<?= set_value('username'); ?>" required>
							<?= form_error('username', '<small class="text-danger pl-1">', '</small>'); ?>
						</div>
					</div>

					<div class="row form-group">
						<div class="col-md-6">
							<label class="text-black" for="password1">Password</label>
							<input type="password" id="password1" name="password1" class="form-control rounded-0"
								   required>
							<?= form_error('password1', '<small class="text-danger pl-1">', '</small>'); ?>
							<div class="row form-group">
								<div class="col-md-12">
									<input type="checkbox" onclick="showHidePassword()"> Tampil Password
								</div>
							</div>
						</div>

						<div class="col-md-6">
							<label class="text-black" for="password2">Konfirmasi Password</label>
							<input type="password" id="password2" name="password2" class="form-control rounded-0">
							<?= form_error('password2', '<small class="text-danger pl-1">', '</small>'); ?>
							<div class="row form-group">
								<div class="col-md-12">
									<input type="checkbox" onclick="showHideConfirmationPassword()"> Tampil Konfirmasi
									Password
								</div>
							</div>
						</div>

						<div class="row form-group">
							<div class="col-md-12 mt-4 ml-3 text-center">
								<input type="submit" value="Register Sekarang!"
									   class="btn btn-info rounded-0 py-3 px-4 text-center">
							</div>
						</div>
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
						<li><a href="<?= base_url('profile') ?>">
								<?php if (empty($this->session->userdata('loginUser'))) { ?>
									<span class="ion-ios-arrow-round-forward mr-2"></span>Login
								<?php } else { ?>
									<span class="ion-ios-arrow-round-forward mr-2"></span>Profil
								<?php } ?>
							</a>
						</li>
						<?php if (empty($this->session->userdata('loginData'))) { ?>
							<li><a href="<?= base_url('admin/login') ?>" target="_blank"><span
											class="ion-ios-arrow-round-forward mr-2"></span>Admin Login</a></li>
						<?php } else { ?>
							<li><a href="<?= base_url('admin/dashboard') ?>" target="_blank"><span
											class="ion-ios-arrow-round-forward mr-2"></span>Dashboard Admin</a></li>
						<?php } ?>
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
<script>
	function showHidePassword() {
		var x = document.getElementById("password1");
		if (x.type === "password") {
			x.type = "text";
		} else {
			x.type = "password";
		}
	}

	function showHideConfirmationPassword() {
		var x = document.getElementById("password2");
		if (x.type === "password") {
			x.type = "text";
		} else {
			x.type = "password";
		}
	}
</script>

</body>
</html>
