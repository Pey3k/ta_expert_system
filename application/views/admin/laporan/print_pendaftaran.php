<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no"/>
	<link rel="stylesheet" href="<?php echo base_url('assets') ?>/surat/style1.css"/>
	<title>Laporan Pendaftaran Pasien</title>
</head>
<body>

<div class="book">
	<div class="page">
		<div class="subpage">
			<div class="content">
				<div style="width:128mm;float:left;">
					<h1>WAOS</h1>
				</div>
				<div style="width:128mm;float:right;">
					<p style="text-align:right;">Laporan per tanggal: <?php echo date('d F Y'); ?> </p>
				</div>

				<div style="clear:both;"></div>

				<hr/>
				<div style="text-align: center;">
					<h1 style="font-weight:none;">Laporan Jumlah Pasien</title>
					</h1>
				</div>
				<hr/>

				<div style="clear:both;"></div>


			</div>
			<table class="tb1" style="width: 100%;height:70px;" border="1">
				<tr>
					<th>No</th>
					<th style="text-align:center;">Nama Pasien</th>
					<th style="text-align:center;">Jenis Kelamin</th>
					<th style="text-align:center;">Umur</th>
					<th style="text-align:center;">Username</th>
					<th style="text-align:center;">Email</th>
					<th style="text-align:center;">Tanggal Konsultasi</th>

				</tr>

				<?php
				$no = 0;

				foreach ($listData as $value) {

					$no++;

					?>
					<tr class="isi-colom">
						<td style="font-size:14pt; text-align:center;"><?php echo $no; ?></td>
						<td style="font-size:14pt; text-align:center;"><?php echo $value->nama_pengguna; ?></td>
						<td style="font-size:14pt; text-align:center;"><?php echo $value->jk; ?></td>
						<td style="font-size:14pt; text-align:center;"><?php echo $value->umur; ?></td>
						<td style="font-size:14pt; text-align:center;"><?php echo $value->username; ?></td>
						<td style="font-size:14pt; text-align:center;"><?php echo $value->email; ?></td>
						<td style="font-size:14pt; text-align:center;"><?php echo $value->tanggal_pendaftaran; ?></td>

					</tr>
					<?php
				} ?>

			</table>


		</div>
	</div>
</div>
</div>

</body>
</html>
</html>
