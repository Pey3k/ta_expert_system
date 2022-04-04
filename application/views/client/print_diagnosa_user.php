<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no"/>
	<title>Laporan Riwayat Konsultasi Pasien </title>
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
					<h1 style="font-weight:none;font-size:15pt">Laporan Riwayat Konsultasi Pasien</title>
					</h1>
				</div>
				<hr/>

				<div style="clear:both;"></div>


			</div>
			<table class="tb1" style="width: 100%;height:70px;" border="1">
				<tr>
					<th>No</th>
					<th style="text-align:center;">Nama Pasien</th>
					<th style="text-align:center;">Penyakit</th>
					<th style="text-align:center;">Persentase</th>
					<th style="text-align:center;">Tanggal Konsultasi</th>

				</tr>

				<?php
				$no = 0;

				foreach ($hasil_analisa as $value) {

					$no++;
					?>
					<tr class="isi-colom">
						<td style="font-size:10pt;text-align:center;"><?php echo $no; ?></td>

						<td style="font-size:10pt;text-align:center;"><?php echo $value->nama_pengguna ?></td>
						<td style="font-size:10pt;text-align:center;"><?php echo $value->penyakit ?></td>
						<td style="font-size:10pt;text-align:center;"><?php echo $value->persentase ?> %</td>
						<td style="font-size:10pt;text-align:center;"><?php echo $value->tgl_analisa ?></td>

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
