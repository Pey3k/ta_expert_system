<div class="app-content content">
	<div class="content-overlay"></div>
	<div class="content-wrapper">
		<div class="content-header row">
			<div class="content-header-left col-12 mb-2 mt-1">
				<div class="row breadcrumbs-top">
					<div class="col-12">
						<h5 class="content-header-title float-left pr-1 mb-0">Gejala</h5>
						<div class="breadcrumb-wrapper col-12">
							<ol class="breadcrumb p-0 mb-0">
								<li class="breadcrumb-item"><a href="index.html"><i class="bx bx-home-alt"></i></a>
								</li>
								<li class="breadcrumb-item active">Gejala
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
							<h4 class="m-0 font-weight-bold text-primary">Form Tambah Data Gejala</h4>
						</div>
						<div class="card-body">

							<form method="post" action="<?php echo base_url().'admin/gejala/doAdd/'?>" role="form">

								<?php 
               $dataOld = $this->session->flashdata('oldPost'); 
               echo $this->session->flashdata('msgbox');?>


								<h6 class="m-0 font-weight-bold text-danger mb-2">Harap mengisi data dibawah ini :</h6>
								<div class="form-row">

									<div class="form-group col-md-6">
										<label for="id_gejala">ID Gejala</label>
										<input type="text" class="form-control" style="width:400px" name="id_gejala" id="id_gejala"
											placeholder="" value="<?php echo $id; ?>" readonly>
									</div>
									<div class="form-group col-md-6">
										<label for="bobot">Bobot Gejala</label>
										<input type="text" class="form-control" style="width:200px" name="bobot" id="bobot" placeholder="">
									</div>
								</div>
								<div class="form-group">
									<label for="gejala">Nama Gejala</label>
									<input type="text" class="form-control" style="height:50px;width:730px " name="gejala" id="gejala"
										placeholder="">
								</div>

								<button type="submit" class="btn btn-primary mt-3" style="width:100px">Simpan</button>
								<a href="<?php echo base_url('admin/gejala') ?>" class="btn btn-danger ml-4 mt-3"
									style="width:100px">Batal</a>
							</form>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>
</div>
