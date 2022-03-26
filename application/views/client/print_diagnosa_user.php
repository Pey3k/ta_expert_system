<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no"/>
	<link rel="stylesheet" href="<?php echo base_url('assets') ?>/surat/style1.css"/>
	<title>Laporan Riwayat Konsultasi Pasien </title>
</head>
<body>

<div class="book">
	<div class="page">
		<div class="subpage">
			<div class="content">
				<div style="width:128mm;float:left;">
					WAOS.
				</div>
				<div style="width:128mm;float:right;">
					<!-- <p style="text-align:right;"></button>&nbsp;&nbsp;&nbsp;<button style="text-align:right;" onclick="window.print()">Print</button></p> -->
					<p style="text-align:right;">Laporan pada tanggal : <?php echo date('Y-m-d'); ?> </p>
				</div>
				<div style="clear:both;"></div>
				<hr/>
				<center>
					<h1 style="font-weight:none;font-size:15pt">WAOS.  </title>
						</head> </h1>

				</center>
				<hr/>

				<div style="clear:both;"></div>

				<center>
					&nbsp;&nbsp;
					<p style="font-weight:none;font-size:16pt">Laporan Riwayat Konsultasi Pasien</p>
				</center>

				</p>

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
						<td style="font-size:10pt;text-align:center;"><?php echo $value->persentase ?> % </td>
						<td style="font-size:10pt;text-align:center;"><?php echo $value->tglAnalisa ?></td>

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
