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
				<div class="col-12">
					<div class="card">
						<div class="card-header d-flex justify-content-between">
							<h4 class="card-title">List Data Master Pasien</h4>
						</div>
						<div class="card-content">
							<div class="card-body card-dashboard">
								<div class="table-responsive" id="show-data-disease">
									<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
										<thead>
										<tr>
											<th>No</th>
											<th>Nama Pasien</th>
											<th>Jenis Kelamin</th>
											<th>Umur</th>
											<th>Username</th>
											<th>Email</th>
											<th>Aksi</th>
										</tr>
										</thead>
										<tbody>
										<?php
										foreach ($listData as $key => $value) {
											?>
											<tr>
												<td><?= $key + 1; ?></td>
												<td><?= $value->nama_pengguna; ?></td>
												<td><?= $value->jk; ?></td>
												<td><?= $value->umur; ?></td>
												<td><?= $value->username; ?></td>
												<td><?= $value->email; ?></td>
												<td>
													<a href="<?= base_url('admin/pasien/edit/' . $value->id_pengguna) ?>"
													   class="badge badge-success badge-custom">Edit</a>
													<a href="<?= base_url('admin/pasien/doDelete/' . $value->id_pengguna) ?>"
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
