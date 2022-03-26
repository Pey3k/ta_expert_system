<div class="app-content content">
	<div class="content-overlay"></div>
	<div class="content-wrapper">
		<div class="content-header row">
			<div class="content-header-left col-12 mb-2 mt-1">
				<div class="row breadcrumbs-top">
					<div class="col-12">
						<h5 class="content-header-title float-left pr-1 mb-0">Penyakit</h5>
						<div class="breadcrumb-wrapper col-12">
							<ol class="breadcrumb p-0 mb-0">
								<li class="breadcrumb-item"><a href="index.html"><i class="bx bx-home-alt"></i></a>
								</li>
								<li class="breadcrumb-item active">Penyakit
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
							<h4 class="m-0 font-weight-bold text-primary">Form Tambah Data Penyakit</h4>
						</div>
						<div class="card-body">

							<form method="post" action="<?php echo base_url() . 'admin/penyakit/doAdd/' ?>" role="form">

								<?php
								$dataOld = $this->session->flashdata('oldPost');
								echo $this->session->flashdata('msgbox'); ?>


								<h6 class="m-0 font-weight-bold text-danger mb-3">Harap mengisi data dibawah ini :</h6>


								<div class="form-group">
									<label for="id_penyakit">ID Penyakit</label>
									<input type="text" class="form-control" style="width:330px " name="id_penyakit"
										   id="id_penyakit"
										   value="<?php echo $id_penyakit ?>" readonly placeholder="">
								</div>


								<div class="form-group">
									<label for="penyakit">Nama Penyakit</label>
									<input type="text" class="form-control" style="width:530px" name="penyakit"
										   id="penyakit"
										   placeholder="">
								</div>

								<div class="form-group">
									<label for="keterangan">Keterangan Penyakit</label>
									<textarea style="width:730px" class="form-control" id="" name="keterangan"
											  rows="3"></textarea>

									<button type="submit" class="btn btn-primary mt-3" style="width:100px">Simpan
									</button>
									<a href="<?php echo base_url('admin/penyakit') ?>" class="btn btn-danger ml-4 mt-3"
									   style="width:100px">Batal</a>
							</form>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>
</div>
