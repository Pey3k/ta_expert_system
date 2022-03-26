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
							<h4 class="m-0 font-weight-bold text-primary">Form Tambah Data Gejala Penyakit</h4>
						</div>
						<div class="card-body">

							<form method="post"
								  action="<?= base_url() . 'admin/penyakit/doAddGejala/' . $this->uri->segment(4); ?>"
								  role="form">

								<style>
									.form-group label {
										font-size: 14px !important;
									}
								</style>

								<?php
								$dataOld = $this->session->flashdata('oldPost');
								echo $this->session->flashdata('msgbox'); ?>


								<h6 class="m-0 font-weight-bold text-danger mb-1">Harap mengisi data gejala untuk
									penyakit : </h6>
								<h5 class="m-0 font-weight-bold text-primary mb-1"> <?= $detailData->penyakit ?> </h5>

								<!-- RADIO BOX GEJALA -->

								<?php
								foreach ($list_gejala as $value) {
									$check = "";
									$data = $this->m_penyakit->getListRule($this->uri->segment(4), $value->id_gejala);

									if (count($data) > 0) {
										$check = "checked";
									}
									?>
									<div class="form-group ml-2">

										<input class="form-check-input position-static" type="checkbox"
											   name="id_gejala[]" id="blankRadio1"
											   value="<?= $value->id_gejala; ?>" <?= $check; ?>>

										<label class="form-check-label ml-2" for="gridCheck">
											<?= $value->id_gejala . " - " . $value->gejala; ?>
										</label>

										<div class="form-group row">

											<label for="staticEmail" class="col-sm-2 col-form-label ml-2">Bobot Gejala
												:</label>
											<label class="col-form-label"
												   name="bobot_gejala[]"><?= $value->gejala_bobot; ?>
											</label>

										</div>
									</div>
								<?php } ?>
								<button type="submit" class="btn btn-primary mt-3" style="width:100px">Simpan</button>
								<a href="<?= base_url('admin/penyakit') ?>" class="btn btn-danger ml-2 mt-3"
								   style="width:100px">Batal</a>
							</form>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>
</div>
