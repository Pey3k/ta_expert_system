<div class="app-content content">
	<div class="content-overlay"></div>
	<div class="content-wrapper">
		<div class="content-header row">
			<div class="content-header-left col-12 mb-2 mt-1">
				<div class="row breadcrumbs-top">
					<div class="col-12">
						<h5 class="content-header-title float-left pr-1 mb-0">Petugas</h5>
						<div class="breadcrumb-wrapper col-12">
							<ol class="breadcrumb p-0 mb-0">
								<li class="breadcrumb-item"><a href="index.html"><i class="bx bx-home-alt"></i></a>
								</li>
								<li class="breadcrumb-item active">Petugas
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
							<h4 class="card-title">List Data Master Petugas</h4>
						</div>
						<div class="card-content">
							<div class="card-body card-dashboard">
								<div class="table-responsive" id="show-data-disease">
									<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
										<thead>
										<tr>
											<th>No</th>
											<th>Nama Pakar</th>
											<th>Username</th>
											<th>Tanggal Pendaftaran</th>
										</tr>
										</thead>
										<tbody>
										<?php
										foreach ($listData as $key => $value) {
											?>
											<tr>
												<td><?= $key + 1; ?></td>
												<td><?= $value->nama_petugas; ?></td>
												<td><?= $value->username; ?></td>
												<td><?= $value->date_created; ?></td>
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
