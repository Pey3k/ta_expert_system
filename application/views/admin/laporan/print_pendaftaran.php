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
				<div style="width:128mm;float:right;">
					<!-- <p style="text-align:right;"></button>&nbsp;&nbsp;&nbsp;<button style="text-align:right;" onclick="window.print()">Print</button></p> -->
					<p style="text-align:right;">Tanggal Laporan: <?php echo date('Y-m-d'); ?> </p>
				</div>
				<div style="clear:both;"></div>
				<hr/>
				<center>
					<h1 style="font-weight:none;font-size:28pt">WAOS.</h1>
					<h2>Pengelolaan Pola Hidup Sehat Pada Remaja</h2>
				</center>
				<hr/>

				<div style="clear:both;"></div>

				<center>
					&nbsp;&nbsp;
					<p style="font-weight:none;font-size:16pt">LAPORAN DATA PENDAFTARAN </p>
				</center>

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
