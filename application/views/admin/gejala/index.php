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
				<div class="col-12">
					<div class="card">
						<div class="card-header d-flex justify-content-between">
							<h4 class="card-title">List Data Master Gejala</h4>
              
              <!-- <button type="button" class="btn btn-primary mr-1" onclick="openModal('disease','add')"><i
                        class="bx bx-plus-circle"></i> Tambah Data</button> -->
						<a href="<?php echo base_url('admin/gejala/add/') ?>" class="btn btn-primary mr-1" ><i
                        class="bx bx-plus-circle"></i>Tambah Gejala</a>
						</div>
						<div class="card-content">
							<div class="card-body card-dashboard">
								<div class="table-responsive" id="show-data-disease">
									<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
										<thead>
											<tr>
												<th>No</th>
												<th>ID Gejala</th>
												<th>Nama Gejala</th>
												<th>Bobot Gejala</th>
												<th style="width:75px">Aksi</th>
											</tr>
										</thead>
										<tbody>
											<?php
                                foreach($listData as $key => $value){
                                 ?>
											<tr>
												<td><?= $key + 1; ?></td>
												<td><?= $value->id_gejala; ?></td>
												<td><?= $value->gejala; ?></td>
												<td><?= $value->gejala_bobot; ?></td>
												<td>
													<a href="<?= base_url('admin/gejala/edit/'.$value->id_gejala) ?>"
														class="badge badge-success badge-custom">Edit</a>
													<a href="<?= base_url('admin/gejala/doDelete/'.$value->id_gejala) ?>"
														class="badge badge-danger"
														onclick="return confirm('Anda yakin ingin menghapus data ini ? ')">Delete</a>
												</td>
											</tr>
											<?php
                    }
                    ?>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>
</div>
