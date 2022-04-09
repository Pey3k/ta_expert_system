<div class="app-content content">
	<div class="content-overlay"></div>
	<div class="content-wrapper">
		<div class="content-header row">
			<div class="content-header-left col-12 mb-2 mt-1">
				<div class="row breadcrumbs-top">
					<div class="col-12">
						<h5 class="content-header-title float-left pr-1 mb-0">Pasien</h5>
						<div class="breadcrumb-wrapper col-12">
							<ol class="breadcrumb p-0 mb-0">
								<li class="breadcrumb-item"><a href="index.html"><i class="bx bx-home-alt"></i></a>
								</li>
								<li class="breadcrumb-item active">Pasien
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
							<h4 class="m-0 font-weight-bold text-primary">Form Ubah Data Pasien</h4>
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
										<label for="id_pengguna">ID Pasien</label>
										<input type="text" class="form-control" style="width:400px" name="id_pengguna"
											   id="id_pengguna"
											   placeholder="" value="<?php echo $detailData->id_pengguna ?>" readonly>
									</div>
									<div class="form-group col-md-6">
										<label for="umur">Usia</label>
										<input type="text" class="form-control" style="width:200px" name="umur"
											   value="<?php echo $detailData->umur ?>" id="umur" placeholder="">
									</div>
								</div>

								<div class="form-row">
									<div class="form-group col-md-6">
										<label for="nama_pengguna">Nama Pasien</label>
										<input type="text" class="form-control" name="nama_pengguna" id="nama_pengguna"
											   value="<?php echo $detailData->nama_pengguna ?>" placeholder="">
									</div>
									<div class="form-group col-md-6">
										<label for="jenis_kelamin">Jenis Kelamin</label>
										<select name="jenis_kelamin" id="jenis_kelamin" class="form-control" required autofocus
												value="<?= $detailData->jenis_kelamin ?>">
											<option value="Laki-Laki" <?php if($detailData->jenis_kelamin=="Laki-Laki") echo 'selected="selected"'; ?> >Laki-Laki</option>
											<option value="Perempuan" <?php if($detailData->jenis_kelamin=="Perempuan") echo 'selected="selected"'; ?> >Perempuan</option>
										</select>
									</div>
								</div>

								<div class="form-row">
									<div class="form-group col-md-6">
										<label for="tempat_lahir">Tempat Lahir</label>
										<input type="text" class="form-control" name="tempat_lahir" id="tempat_lahir"
											   value="<?php echo $detailData->tempat_lahir ?>" placeholder="">
									</div>
									<div class="form-group col-md-6">
										<label for="tgl_lahir">Tanggal Lahir</label>
										<input type="date" class="form-control" style="width:300px" name="tgl_lahir"
											   value="<?php echo $detailData->tgl_lahir ?>" id="tgl_lahir" placeholder="">
									</div>
								</div>

								<div class="form-row">

									<div class="form-group col-md-6">
										<label for="email">Email</label>
										<input type="text" class="form-control" name="email"
											   value="<?php echo $detailData->email ?>"
											   id="email" placeholder="">
									</div>
									<div class="form-group col-md-6">
										<label for="username">Username</label>
										<input type="text" class="form-control" name="username" id="username"
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

