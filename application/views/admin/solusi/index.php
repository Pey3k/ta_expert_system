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
				<div class="col-12">
					<div class="card">
						<div class="card-header d-flex justify-content-between">
							<h4 class="card-title">List Data Master Solusi</h4>
							<?php if ($countSolusi[0]->jumlah > 0) { ?>
								<a href="<?php echo base_url('admin/solusi/add/') ?>" class="btn btn-primary mr-1"><i
											class="bx bx-plus-circle"></i> Tambah Solusi</a>
							<?php } ?>
						</div>
						<div class="card-content">
							<div class="card-body card-dashboard">
								<div class="table-responsive" id="show-data-disease">
									<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
										<thead>
										<tr>
											<th>No</th>
											<th>Penyakit</th>
											<th>Solusi Penyakit</th>
											<th style="width:75px">Aksi</th>
										</tr>
										</thead>
										<tbody>
										<?php
										$no = 0;
										foreach ($listData as $value) {
											$no++;
											?>
											<tr>
												<td><?php echo $no; ?></td>
												<td><?php echo $value->penyakit; ?></td>
												<td><?php echo $value->solusi; ?></td>
												<td>
													<a href="<?php echo base_url('admin/solusi/edit/' . $value->id_penyakit) ?>"
													   class="badge badge-success badge-custom">Edit</a>
													<a href="<?php echo base_url('admin/solusi/doDelete/' . $value->id_penyakit) ?>"
													   class="badge badge-danger"
													   onclick="return confirm('Anda yakin ingin menghapus data ini ? ')">Delete</a>
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
