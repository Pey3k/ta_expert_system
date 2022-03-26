<!DOCTYPE html>
<html lang="en">
<head>
	<title>Registrasi Petugas</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">


<!--===============================================================================================-->
	<!-- <link rel="icon" type="image/png" href="<?= base_url('assets/backend-assets/login/'); ?>images/icons/favicon.ico"/> -->
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/backend-assets/login/'); ?>vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/backend-assets/login/'); ?>fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/backend-assets/login/'); ?>vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/backend-assets/login/'); ?>vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/backend-assets/login/'); ?>vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/backend-assets/login/'); ?>css/util.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/backend-assets/login/'); ?>css/main.css">
<!--===============================================================================================-->
</head>
<body>

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
					<span class="login100-form-title">
							Registrasi Petugas WAOS.
						</span>

				<div class="login100-pic js-tilt" data-tilt>
					<img src="<?= base_url('assets/backend-assets/login/images/images.png');?>" alt="Image" class="img-fluid">

				</div>



				<form method="post" action="<?php echo base_url('admin/login/registration') ?>"  class="login100-form validate-form">
				<?= $this->session->flashdata('message');?>

        <div class="wrap-input100 validate-input" data-validate = "Username harus terisi">
						<input class="input100" type="text" name="nama_petugas" placeholder="Nama Petugas" value="<?= set_value('nama_petugas'); ?>">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user-circle-o" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Username harus terisi">
						<input class="input100" type="text"id="username" name="username" placeholder="Username" value="<?= set_value('username'); ?>">
						<?= form_error('username', '<small class="text-danger pl-3">' , '</small>');?>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user-secret" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password harus terisi">
						<input class="input100" type="password" id="password1" name="password1" placeholder="Password">
						<?= form_error('password1', '<small class="text-danger pl-3">' , '</small>');?>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Konfirmasi Password harus terisi">
						<input class="input100" type="password" id="password2" name="password2" placeholder="Konfirmasi Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>

					<div class="container-login100-form-btn">
						<button type="submit" class="login100-form-btn">
							Registrasi Sekarang
						</button>
					</div>
<!--
					<div class="text-center p-t-12">
						<span class="txt1">
							Lupa
						</span>
						<a class="txt2" href="#">
							Username / Password?
						</a>
					</div> -->

					<div class="text-center p-t-30 mb-3">
						<a class="txt3" href="<?= base_url('admin/login');?>">
            <i class="fa fa-long-arrow-left m-l-5" aria-hidden="true"></i>
              Sudah memiliki akun? Login!
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>




<!--===============================================================================================-->
	<script src="<?= base_url('assets/backend-assets/login/'); ?>vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="<?= base_url('assets/backend-assets/login/'); ?>vendor/bootstrap/js/popper.js"></script>
	<script src="<?= base_url('assets/backend-assets/login/'); ?>vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="<?= base_url('assets/backend-assets/login/'); ?>vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="<?= base_url('assets/backend-assets/login/'); ?>vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="<?= base_url('assets/backend-assets/login/'); ?>js/main.js"></script>

</body>
</html>
