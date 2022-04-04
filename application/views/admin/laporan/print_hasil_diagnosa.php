<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no"/>
	<title>Laporan Hasil Laporan Diagnosa </title>
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
					<h1 style="font-weight:none;font-size:15pt">Laporan Hasil Diagnosa Penyakit Pasien</title>
					</h1>
				</div>
				<hr/>

				<div style="clear:both;"></div>


			</div>
			<table class="tb1" style="width: 100%;height:70px;" border="1">
				<thead>
				<th>No</th>

				<th style="text-align:center;">Nama Penyakit</th>
				<th style="text-align:center;">Jumlah Penderita</th>

				</thead>

				<?php
				$no = 0;

				foreach ($listData as $value) {

					$no++;
					$get = $this->db->query("SELECT COUNT(*) as total FROM detail_hasil_analisa WHERE penyakit LIKE '%" . $value->penyakit . "%'")->row()->total;

					?>
					<tr class="isi-colom">
						<td style="font-size:10pt;"><?php echo $no; ?></td>
						<td style="font-size:10pt;">&nbsp;<?php echo $value->penyakit ?></td>
						<td style="font-size:10pt;">&nbsp;<?php echo $get ?></td>


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
