<title>Laporan Audit External</title>
<body>
	
	<table border="1" width="103%" style="margin-top: -28px;margin-left: -30px;">
		<tr>
			<td colspan="6" style="text-align: center;background-color:c1d3e6;font-size: 14pt;font-weight: bold;">Hasil Audit External</td>
		</tr>
		<tr style="font-weight: bolder;text-align: center;background-color: 92d050;">
			<td style="height: 50px;">No</td><td>Kategori</td><td>Area</td><td>Evaluasi</td><td>Rekomendasi</td><td>PIC bidang</td>
		</tr>
		<?php
		$u=1;
			foreach ($ext as $key) {
		?>
		<tr>
			<td><?= $u++; ?></td><td><?= $key->nama_kategori ?></td><td><?= $key->nama_area ?></td><td><?= $key->evaluasi_ext ?></td><td><?= $key->rekomendasi ?></td><td><?= $key->nama_bidang ?></td>
		</tr>
	<?php } ?>
	</table>
</body>