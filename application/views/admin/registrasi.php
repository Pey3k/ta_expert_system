<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
	<meta name="description" content="Expert System">
	<meta name="keywords" content="expert system">
	<meta name="author" content="PIXINVENT">
	<title>Registration Page - Expert System</title>
	<link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,600%7CIBM+Plex+Sans:300,400,500,600,700"
		  rel="stylesheet">
	<link rel="stylesheet" type="text/css"
		  href="<?= base_url('assets/admin/frest/app-assets/vendors/css/vendors.min.css') ?>">
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/admin/frest/app-assets/css/bootstrap.css') ?>">
	<link rel="stylesheet" type="text/css"
		  href="<?= base_url('assets/admin/frest/app-assets/css/bootstrap-extended.css') ?>">
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/admin/frest/app-assets/css/colors.css') ?>">
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/admin/frest/app-assets/css/components.css') ?>">
	<link rel="stylesheet" type="text/css"
		  href="<?= base_url('assets/admin/frest/app-assets/css/core/menu/menu-types/vertical-menu.css') ?>">
	<link rel="stylesheet" type="text/css" href="<?= base_url('admin/assets/css/style.css') ?>">

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body
		class="vertical-layout vertical-menu-modern boxicon-layout no-card-shadow 1-column  navbar-sticky footer-static bg-full-screen-image  blank-page blank-page"
		data-open="click" data-menu="vertical-menu-modern" data-col="1-column">
<!-- BEGIN: Content-->
<div class="app-content content">
	<div class="content-overlay"></div>
	<div class="content-wrapper">
		<div class="content-header row">
		</div>
		<div class="content-body">
			<section id="auth-login" class="row flexbox-container">
				<div class="col-xl-8 col-11">
					<div class="card bg-authentication mb-0">
						<div class="row m-0">
							<div class="col-md-6 col-12 px-0">
								<div
										class="card disable-rounded-right mb-0 p-2 h-100 d-flex justify-content-center">
									<div class="card-header pb-1">
										<div class="card-title">
											<h4 class="text-center mb-2">Registrasi Expert System</h4>
										</div>
									</div>
									<div class="card-content">
										<div class="card-body">
											<form method="post"
												  action="<?php echo base_url('admin/registrasi/doRegister') ?>">
												<?= $this->session->flashdata('berhasil'); ?>
												<?= $this->session->flashdata('message'); ?>
												<div class="form-group mb-50">
													<label class="text-bold-600"
														   for="nama_petugas">Nama Petugas</label>
													<input type="text" class="form-control" placeholder="Nama Petugas"
														   name="nama_petugas" id="nama_petugas" required>

												</div>

												<div class="form-group mb-50">
													<label class="text-bold-600"
														   for="username">Username</label>
													<input type="text" class="form-control" placeholder="Username"
														   name="username" id="username" required>
													<?= form_error('username', '<small class="text-danger pl-1">', '</small>'); ?>
												</div>


												<div class="form-group">
													<label class="text-bold-600"
														   for="password1">Password</label>
													<input type="password" class="form-control"
														   placeholder="Password" name="password1" id="password1" required>
													<?= form_error('password1', '<small class="text-danger pl-1">', '</small>'); ?>
												</div>

												<div class="form-group">
													<label class="text-bold-600"
														   for="password2">Konfirmasi Password</label>
													<input type="password" class="form-control"
														   placeholder="Password" name="password2" id="password2" required>
													<?= form_error('password2', '<small class="text-danger pl-1">', '</small>'); ?>
												</div>

												<div class="form-group d-flex flex-md-row flex-column justify-content-between align-items-center">
													<div class="text-left">

													</div>

													<div class="text-right"><a
																href="<?php echo base_url('admin/login') ?>"
																class="card-link"><small>Login Petugas</small></a>
													</div>
												</div>

												<button type="submit"
														class="btn btn-success glow w-100 position-relative">
													Registrasi<i
															id="icon-arrow" class="bx bx-right-arrow-alt"></i></button>
											</form>
											<hr>
										</div>
									</div>
								</div>
							</div>
							<!-- right section image -->
							<div class="col-md-6 d-md-block d-none text-center align-self-center p-3">
								<div class="card-content">
									<img class="img-fluid" src="<?= base_url('assets/images/tooth.png') ?>" alt="tooth">
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- login page ends -->

		</div>
	</div>
</div>
<!-- END: Content-->
<script src="<?= base_url('assets/admin/frest/app-assets/vendors/js/vendors.min.js') ?>"></script>
<script src="<?= base_url('assets/admin/frest/app-assets/js/core/app-menu.js') ?>"></script>
<script src="<?= base_url('assets/admin/frest/app-assets/js/core/app.js') ?>"></script>
<script src="<?= base_url('assets/admin/frest/app-assets/js/scripts/components.js') ?>"></script>
<script src="<?= base_url('assets/admin/frest/app-assets/js/scripts/footer.js') ?>"></script>


</body>
<!-- END: Body-->

</html>

