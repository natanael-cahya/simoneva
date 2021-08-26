<title>Laporan Rencana & Realisasi</title>
<?php foreach($plan as $op){$bd=$op->nama_bidang;} ?>
<body>
	<table border="1" width="103%" style="margin-left: -27px;margin-top: -25px;">
		<tr style="height: 100px;">
			<td style="height: 80px;width: 230px;"><img src="<?= base_url('img');?>/PJB_LOGO.jpg" width="80px" style="text-align: center;margin-left: 20px;margin-top: -6px;"><img src="<?= base_url('img');?>/logokop.jpg" width="60px" style="text-align: center;margin-left: 50px;margin-top: 10px;"></td><td style="text-align: center;font-size: 25pt;">PROGRAM KERJA <?= $bd ?></td><td style="text-align: center;font-size: 25pt;width: 230px;"><?= date('Y') ?></td>
		</tr>
	</table><br/>
	<table border="1" width="103%" style="margin-left: -27px;">
		<tr style="text-align: center;">
			<td rowspan="3" style="width: 50px;background-color: 92d050;">No</td><td rowspan="3" style="width: 200px;background-color: 92d050;">Program</td><td colspan="48" style="font-weight: bolder;background-color: 18c6d8;">Bulan</td>
		</tr>
		<tr style="text-align: center;background-color: FFFF00;">
			<td colspan="4">Jan</td>
			<td colspan="4">Feb</td>
			<td colspan="4">Mar</td>
			<td colspan="4">Apr</td>
			<td colspan="4">Mei</td>
			<td colspan="4">Jun</td>
			<td colspan="4">Jul</td>
			<td colspan="4">Ags</td>
			<td colspan="4">Sept</td>
			<td colspan="4">Okt</td>
			<td colspan="4">Nov</td>
			<td colspan="4">Des</td>
		</tr>
		<tr style="text-align: center;font-size: 13px;">
			
		<?php for($l=1;$l<=12;$l++){ ?>
			<td>1</td>
			<td>2</td>
			<td>3</td>
			<td>4</td>
		<?php  } ?>
			
		</tr>
		
<?php 
$pp=1; 

foreach($plan as $key){
		$prog=$key->program;
		$pm=$key->plan_minggu;
		$en=$key->end_plan_minggu;
		$rm=$key->real_minggu;
		$em=$key->end_real_minggu;
?>
<tr style="text-align: center;">
	<td><?= $pp ?></td>
	<td><?= $prog ?></td>
	<?php for($o=1;$o<=12*4;$o++){ ?>
	<td><?= $o >= $pm && $o <= $en ? "<div style='background-color:green;width:100%;height:18px;'></div>" : " "?></td>
	<?php } ?>
</tr>
<tr style="background-color: cyan;text-align: center;">
	<td></td>
	<td>Realisasi <?= $prog ?></td>
	<?php for($oz=1;$oz<=12*4;$oz++){ ?>
	<td><?= $oz >= $rm && $oz <= $em ? "<div style='background-color:525659;width:100%;height:18px;'></div>" : " "?></td>
	<?php } ?>
</tr>	
				
<?php
$pp++; }
?>
		
		
		

	<table style="margin-top: 70px;float: right;text-align: center;margin-right: 70px;width: 300px;" border="0">
		<tr>
		<td colspan="3">Paiton , <?= date('d-m-Y') ?></td>
		</tr>
		<tr>
			<td colspan="3">Ketua</td>
		</tr>
		<tr>
			<td colspan="3" style="height: 100px;"></td>
		</tr>
		<tr>
			<td colspan="3"></td>
		</tr>
		
	</table>
</body>