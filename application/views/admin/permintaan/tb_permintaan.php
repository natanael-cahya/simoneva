<!-- /. ROW  -->
<div class="main-panel">
	<div class="content-wrapper">

		<div class="col-md-12" style="background-color: white;">


			<br>
			<input type="button" onclick="addInput()" value="+ Barang" class="btn btn-primary" />
			<input type="button" onclick="minInput()" value="- Barang" class="btn btn-danger" />
			<br><br>
			<div class="card col-md-5" style="text-align: center;">Pengajuan Permintaan</div>
			<form method="post" name="karepmu" action="<?= base_url('admin/permintaan/crud_permintaan/tb_permintaan'); ?>">
				<table class="table table-responsive">
					<div id="responce"></div>
					<hr>
					<tr>
						<td>Nama Barang</td>
						<td><input type="text" name="material[]" class="form-control" placeholder="Nama barang"></td>
					</tr>
					<tr>
						<td>banyaknya</td>
						<td><input type="text" name="jumlah[]" class="form-control" placeholder="Angka Saja!"></td>
					</tr>
					<tr>
						<td>Tanggal Pengajuan</td>
						<td><input type="text" name="tanggal[]" class="form-control" readonly="" value="<?= date('Y-m-d'); ?>"></td>
					</tr>
					<tr>
						<td>Perkiraan harga</td>
						<td><input type="text" name="harga[]" class="form-control" placeholder="Input nominal tanpa Rp"></td>
					</tr>
					<tr>
						<td>Pilih bidang</td>
						<td>
							<select class="form-control" name="bdg[]">
								<?php foreach ($bdg as $key) { ?>
									<option value="<?= $key->id_bidang ?>"><?= $key->nama_bidang ?></option>
								<?php } ?>
							</select>
						</td>
					</tr>

					<tr>
						<td></td>
						<td><button type="submit" value="" class="btn btn-primary">Ajukan</button></td>
					</tr>

				</table>

			</form>

		</div>
	</div>


	<!-- /. ROW  -->


	<script>
		var countBox = 1;
		var boxName = 0;

		function addInput() {
			var boxName = "textBox" + countBox;

			// var newContent = document.createElement('div');
			// var newContent2 = document.createElement("" +
			// 	"<tr>" +
			// 	"	<td>Pilih bidang</td>" +
			// 	"<td>" +
			// 	"	<select class='form - control ' name='	bdg '>" +
			// 	"	<?php foreach ($bdg as $keyz) { ?>" +
			// 	"		<option value='<?= $keyz->id_bidang ?>'><?= $keyz->nama_bidang ?></option>" +
			// 	"		<?php } ?>" +
			// 	"	</select>" +
			// 	"	</td>" +
			// 	"	</tr>");

			// newContent.innerHTML = '<br/><hr style="height: 3px;background-color: black;width:45%;float: left;"><table class="table table-responsive"><tr><td>Nama Barang</td><td><input type="text" class="form-control" name="material[]" id="' + boxName + '" value="" "  /></td></tr><tr><td>Jumlah</td><td><input type="text" class="form-control" name="jumlah[]" id="' + boxName + '" value="" "  /></td></tr><tr><td>Tanggal Pengajuan</td><td><input type="text" class="form-control" name="tanggal[]" id="' + boxName + '" readonly value="<?= date('Y-m-d'); ?>" "  /></td></tr><tr><td>Perkiraan harga</td><td><input type="text" class="form-control" name="harga[]" id="' + boxName + '"  value="" "  /></td></tr></table>';


			// document.getElementById('responce').appendChild(newContent);
			$("#responce").append("" +


				"<hr style='height:3px;'><table class='table table-responsive'><tr><td>Nama Barang</td>" +
				"<td><input type='text' class='form-control' name='material[]' id='  boxName  ' value=' '  /></td></tr>" +
				"<tr><td>Jumlah</td><td><input type='text' class='form-control' name='jumlah[]' id='' + boxName + '' value=''   /></td></tr>" +
				"<tr><td>Tanggal Pengajuan</td><td><input type='text' class='form-control' name='tanggal[]' id='' + boxName + '' readonly value='<?= date('Y-m-d'); ?>'   /></td></tr>" +
				"<tr><td>Perkiraan harga</td><td><input type='text' class='form-control' name='harga[]' id='' + boxName + ''  value=''  /></td></tr>" +
				"<tr>" +
				"	<td>Pilih bidang</td>" +
				"<td>" +
				"	<select class='form-control ' name='bdg[]'>" +
				"	<?php foreach ($bdg as $keyz) { ?>" +
				"		<option value='<?= $keyz->id_bidang ?>'><?= $keyz->nama_bidang ?></option>" +
				"		<?php } ?>" +
				"	</select>" +
				"	</td>" +
				"	</tr></table>"
			);
			// document.getElementById('responce').appendChild(newContent2);

			// document.getElementById('responce').innerHTML += '';
		}

		function minInput() {
			// var boxName = "textBox" + countBox;
			document.getElementById('responce').lastChild.remove();
			// countBox += 1;
		}
	</script>