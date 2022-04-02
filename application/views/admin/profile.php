<div class="app-content content">
	<div class="content-overlay"></div>
	<div class="content-wrapper">
		<div class="content-header row">
			<div class="content-header-left col-12 mb-2 mt-1">
				<div class="row breadcrumbs-top">
					<div class="col-12">
						<h5 class="content-header-title float-left pr-1 mb-0">Solusi</h5>
						<div class="breadcrumb-wrapper col-12">
							<ol class="breadcrumb p-0 mb-0">
								<li class="breadcrumb-item"><a href="index.html"><i class="bx bx-home-alt"></i></a>
								</li>
								<li class="breadcrumb-item active">Profile
								</li>
							</ol>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="content-body">
			<div class="row">
				<div class="col-12">
					<div class="card mb-3" style="max-width: 540px;">
						<div class="row no-gutters">
							<div class="col-md-8">
								<div class="card-body">
									<h5 class="card-title ml-2"> <?php echo strtoupper($dataPakar->nama_petugas) ?></h5>
									<p class="card-text ml-2">as Admin Sistem Pakar WAOS</p>
									<p class="card-text ml-2"><small class="text-muted">Member
											since <?= date_format(date_create($dataPakar->date_created), "d F Y") ?></small>
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-12">
					<div class="row">
						<div class="col-10">
							<div class="card shadow">

								<div class="card-header">
									<h4 class="m-0 font-weight-bold text-primary">Profil</h4>
								</div>
								<div class="card-body">
									<form method="post"
										  action="<?php echo base_url() . 'admin/profile/doUpdate/' . $dataPakar->id_petugas ?>"
										  role="form">

										<?php
										$dataOld = $this->session->flashdata('oldPost');
										echo $this->session->flashdata('msgbox'); ?>

										<div class="form-row">

											<div class="form-group col-md-6">
												<label for="id_petugas">ID</label>
												<input type="text" class="form-control" style="width:400px"
													   name="id_petugas"
													   id="id_petugas"
													   placeholder="" value="<?php echo $dataPakar->id_petugas ?>"
													   readonly>
											</div>
										</div>

										<div class="form-row">
											<div class="form-group col-md-6">
												<label for="nama_petugas">Nama Petugas</label>
												<input type="text" class="form-control" name="nama_petugas"
													   id="nama_petugas"
													   value="<?php echo $dataPakar->nama_petugas ?>">
											</div>

											<div class="form-group col-md-6">
												<label for="username">Username</label>
												<input type="text" class="form-control" name="username" id="username"
													   value="<?php echo $dataPakar->username ?>" placeholder="">
											</div>
										</div>

										<button type="submit" class="btn btn-primary mt-3" style="width:100px">Ubah
										</button>
										<a href="<?php echo base_url('admin/profile') ?>"
										   class="btn btn-danger ml-4 mt-3"
										   style="width:100px">Batal</a>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>
</div>
