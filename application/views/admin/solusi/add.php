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
								<li class="breadcrumb-item active">Solusi
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
							<h4 class="m-0 font-weight-bold text-primary">Form Tambah Data Solusi</h4>
						</div>
						<div class="card-body">
							<form method="post" action="<?php echo base_url() . 'admin/solusi/doAdd/' ?>" role="form">

								<?php
								$dataOld = $this->session->flashdata('oldPost');
								echo $this->session->flashdata('msgbox'); ?>


								<h6 class="m-0 font-weight-bold text-danger mb-3">Harap mengisi data dibawah ini :</h6>


								<div class="form-group">
									<label for="id_gejala">Nama Penyakit</label>
									<select class="form-control" id="" name="jenis">
										<?php foreach ($jenisPenyakit as $value) { ?>
											<option style="width:200px" value="<?php echo $value->id_penyakit; ?>">
												<?php echo $value->penyakit; ?></option>
										<?php } ?>
									</select>

								</div>


								<div class="form-group">
									<label for="gejala">Solusi Penyakit</label>
									<textarea class="form-control" id="" name="solusi" rows="5"></textarea>
								</div>

								<button type="submit" class="btn btn-primary mt-3" style="width:100px">Simpan</button>
								<a href="<?php echo base_url('admin/solusi') ?>" class="btn btn-danger ml-4 mt-3"
								   style="width:100px">Batal</a>
							</form>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>
</div>
