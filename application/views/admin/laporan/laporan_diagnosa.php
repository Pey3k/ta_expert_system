<div class="app-content content">
	<div class="content-overlay"></div>
	<div class="content-wrapper">
		<div class="content-header row">
			<div class="content-header-left col-12 mb-2 mt-1">
				<div class="row breadcrumbs-top">
					<div class="col-12">
						<h5 class="content-header-title float-left pr-1 mb-0">Laporan Diagnosa Penyakit Sistem WAOS</h5>
						<div class="breadcrumb-wrapper col-12">
							<ol class="breadcrumb p-0 mb-0">
								<li class="breadcrumb-item"><a href="index.html"><i class="bx bx-home-alt"></i></a>
								</li>
								<li class="breadcrumb-item active">Rekapitulasi Data Diagnosa Penyakit pada Sistem Pakar
									WAOS
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
							<h6 class="m-0 font-weight-bold text-primary pb-2">Data Penyakit Pasien</h6>

							<a href="<?php echo base_url('admin/laporan/downloadLaporanDiagnosa') ?>">
								<button type="button" class="btn btn-sm btn-primary pull-left" data-dismiss="modal"
										style="font-size:14px">
									<i class="ace-icon fa fa-print"></i>
									Cetak Laporan
								</button>
							</a>
						</div>
						<div class="card-body">
							<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
								<thead>
								<tr>
									<th>No</th>
									<th>Nama Penyakit</th>
									<th>Jumlah Pasien Terdiagnosa</th>
								</tr>
								</thead>
								<tbody>
								<?php
								$no = 0;
								foreach ($listData as $value) {
									$no++;
									$get = $this->db->query("SELECT COUNT(*) as total FROM detailhasilanalisa WHERE penyakit LIKE '%" . $value->penyakit . "%'")->row()->total;

									// echo $this->db->last_query();die();
									?>
									<tr>
										<td><?php echo $no; ?></td>
										<td><?php echo $value->penyakit; ?></td>
										<td><?php echo $get; ?> Pasien</td>

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

