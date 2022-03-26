<div class="app-content content">
	<div class="content-overlay"></div>
	<div class="content-wrapper">
		<div class="content-header row">
			<div class="content-header-left col-12 mb-2 mt-1">
				<div class="row breadcrumbs-top">
					<div class="col-12">
						<h5 class="content-header-title float-left pr-1 mb-0">Informasi</h5>
						<div class="breadcrumb-wrapper col-12">
							<ol class="breadcrumb p-0 mb-0">
								<li class="breadcrumb-item"><a href="index.html"><i class="bx bx-home-alt"></i></a>
								</li>
								<li class="breadcrumb-item active">Informasi
								</li>
							</ol>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="content-body">
			<div class="row">
				<div class="col-10">
					<div class="card shadow">

						<div class="card-header">
							<h4 class="m-0 font-weight-bold text-primary">Form Ubah Data Informasi</h4>
						</div>
						<div class="card-body">
							<form method="post"
								  action="<?php echo base_url() . 'admin/pasien/doUpdate/' . $this->uri->segment(4) ?>"
								  role="form">

								<?php
								$dataOld = $this->session->flashdata('oldPost');
								echo $this->session->flashdata('msgbox'); ?>


								<h6 class="m-0 font-weight-bold text-danger mb-3">Harap mengisi data dibawah ini :</h6>
								<div class="form-row">

									<div class="form-group col-md-6">
										<label for="id_gejala">ID Pasien</label>
										<input type="text" class="form-control" style="width:400px" name="id_gejala"
											   id="id_gejala"
											   placeholder="" value="<?php echo $detailData->id_pengguna ?>" readonly>
									</div>
									<div class="form-group col-md-6">
										<label for="bobot">Usia</label>
										<input type="text" class="form-control" style="width:200px" name="bobot"
											   value="<?php echo $detailData->umur ?>" id="bobot" placeholder="">
									</div>
								</div>

								<div class="form-row">

									<div class="form-group col-md-6">
										<label for="bobot">Nama Pasien</label>
										<input type="text" class="form-control" name="bobot" id="bobot"
											   value="<?php echo $detailData->nama_pengguna ?>" placeholder="">
									</div>
									<div class="form-group col-md-6">
										<label for="bobot">Jenis Kelamin</label>
										<input type="text" class="form-control" style="width:300px" name="bobot"
											   value="<?php echo $detailData->jk ?>" id="bobot" placeholder="" readonly>
									</div>
								</div>

								<div class="form-row">

									<div class="form-group col-md-6">
										<label for="bobot">Email</label>
										<input type="text" class="form-control" name="bobot"
											   value="<?php echo $detailData->email ?>"
											   id="bobot" placeholder="">
									</div>
									<div class="form-group col-md-6">
										<label for="bobot">Username</label>
										<input type="text" class="form-control" name="bobot" id="bobot"
											   value="<?php echo $detailData->username ?>" placeholder="">
									</div>
								</div>

								<button type="submit" class="btn btn-primary mt-3" style="width:100px">Ubah</button>
								<a href="<?php echo base_url('admin/pasien') ?>" class="btn btn-danger ml-4 mt-3"
								   style="width:100px">Batal</a>
							</form>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>
</div>

