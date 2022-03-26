<div class="content-wrapper">
	<div class="content-header">

		<!-- Begin Page Content -->
		<div class="container-fluid">

			<!-- Page Heading -->
			<h1 class="h3 mb-4 text-gray-800">Profile</h1>

			<div class="row">
				<div class="col-lg-6">
					<?= $this->session->flashdata('message'); ?>
				</div>
			</div>

			<div class="card mb-3" style="max-width: 540px;">
				<div class="row no-gutters">
					<div class="col-md-4 ">
						<!-- <img src="<?= base_url('assets/backend-assets/login/images/images.png'); ?>"
							class="img-thumbnail"> -->
						<!-- <img src="<?= base_url('assets/backend-assets/login/images/images.png'); ?>"
							class="img-thumbnail"> -->
					</div>
					<div class="col-md-8">
						<div class="card-body">
							<h5 class="card-title ml-2"> <?= strtoupper($_SESSION['loginData']['userName']) ?></h5>
							<p class="card-text ml-2">as Admin Sistem Pakar WAOS</p>
							<p class="card-text ml-2"><small class="text-muted">Member since 2019</small></p>
						</div>
					</div>
				</div>
			</div>

		</div>
		<!-- /.container-fluid -->

	</div>
	<!-- End of Main Content -->


</div>
</div>
