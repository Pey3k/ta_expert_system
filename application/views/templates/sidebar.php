<div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
	<div class="navbar-header">
		<ul class="nav navbar-nav flex-row">
			<li class="nav-item mr-auto"><a class="navbar-brand" href="#">
					<h2 class="brand-text mb-0 ">WAOS</h2>
				</a></li>
			<li class="nav-item nav-toggle "><a class="nav-link modern-nav-toggle pr-0 " data-toggle="collapse"><i
							class="bx bx-x d-block d-xl-none font-medium-4 primary toggle-icon "></i><i
							class="toggle-icon bx bx-disc font-medium-4 d-none d-xl-block collapse-toggle-icon primary"
							data-ticon="bx-disc"></i></a></li>
		</ul>
	</div>

	<?php
	$cur1 = $this->uri->segment(2);
	$cur2 = $this->uri->segment(3);
	?>

	<div class="shadow-bottom"></div>
	<div class="main-menu-content">
		<ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation" data-icon-style="">


			<li class=" nav-item <?= ($cur1 == "dashboard") ? "active" : ""; ?>"><a
						href="<?= base_url('admin/dashboard'); ?>"><i
							class="bx bx-home-alt"></i><span class="menu-title">Dashboard</span></a>
			</li>
			<li class=" navigation-header"><span>Management Data Master</span>
			</li>
			<li class=" nav-item <?= ($cur1 == "pakar") ? "active" : ""; ?>"><a
						href="<?= base_url('admin/pakar'); ?>"><i
							class="bx bx-folder"></i><span class="menu-title">Data Pakar</span></a>
			</li>
			<li class=" nav-item <?= ($cur1 == "pasien") ? "active" : ""; ?>"><a
						href="<?= base_url('admin/pasien'); ?>"><i
							class="bx bx-folder"></i><span class="menu-title">Data Pasien</span></a>
			</li>
			<li class=" nav-item <?= ($cur1 == "gejala") ? "active" : ""; ?>"><a
						href="<?= base_url('admin/gejala'); ?>"><i
							class="bx bx-folder"></i><span class="menu-title">Data Gejala</span></a>
			</li>
			<li class=" nav-item <?= ($cur1 == "penyakit") ? "active" : ""; ?>"><a
						href="<?= base_url('admin/penyakit'); ?>"><i class="bx bx-folder"></i><span class="menu-title">Data
						Penyakit</span></a>
			</li>
			<li class=" nav-item <?= ($cur1 == "informasi") ? "active" : ""; ?>"><a
						href="<?= base_url('admin/informasi'); ?>"><i class="bx bx-folder"></i><span class="menu-title">Data
						Informasi</span></a>
			</li>
			<li class=" nav-item <?= ($cur1 == "solusi") ? "active" : ""; ?>"><a
						href="<?= base_url('admin/solusi'); ?>"><i
							class="bx bx-folder"></i><span class="menu-title">Data Solusi</span></a>
			</li>

			<li class=" navigation-header"><span>Management Report</span>
			</li>
			<li class=" nav-item <?= ($cur2 == "laporan_pendaftaran") ? "active" : ""; ?>"><a
						href="<?= base_url('admin/laporan/laporan_pendaftaran'); ?>"><i class="bx bx-file"></i><span
							class="menu-title">Laporan
						Pasien</span></a>
			</li>
			<li class=" nav-item <?= ($cur2 == "laporan_diagnosa") ? "active" : ""; ?>"><a
						href="<?= base_url('admin/laporan/laporan_diagnosa'); ?>"><i class="bx bx-file"></i><span
							class="menu-title">Laporan
						Diagnosa</span></a>
			</li>
		</ul>
	</div>
</div>
