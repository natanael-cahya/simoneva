
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
					<hr style="height: 3px;background-color: black;width:45%;float: left;">
					<tr>
						<td>Nama Barang</td><td><input type="text" name="material[]" class="form-control" placeholder="Nama barang"></td>
					</tr>
					<tr>
						<td>banyaknya</td><td><input type="text" name="jumlah[]" class="form-control" placeholder="Angka Saja!"></td>
					</tr>
					<tr>
						<td>Tanggal Pengajuan</td><td><input type="text" name="tanggal[]" class="form-control" readonly="" value="<?= date('Y-m-d'); ?>"></td>
					</tr>
					<tr>
						<td>Perkiraan harga</td><td><input type="text" name="harga[]" class="form-control" placeholder="Input nominal tanpa Rp"></td>
					</tr>
					
					<tr>
						<td></td><td><button type="submit" value="" class="btn btn-primary">Ajukan</button></td>
					</tr>

				</table>
				
				</form>

                </div>
            </div>
        </div></div>
          
                    <!-- /. ROW  -->


<script>
var countBox =1;
var boxName = 0;
function addInput()
{
     var boxName="textBox"+countBox; 
document.getElementById('responce').innerHTML+='<br/><hr style="height: 3px;background-color: black;width:45%;float: left;"><table class="table table-responsive"><tr><td>Nama Barang</td><td><input type="text" class="form-control" name="material[]" id="'+boxName+'" value="" "  /></td></tr><tr><td>Jumlah</td><td><input type="text" class="form-control" name="jumlah[]" id="'+boxName+'" value="" "  /></td></tr><tr><td>Tanggal Pengajuan</td><td><input type="text" class="form-control" name="tanggal[]" id="'+boxName+'" readonly value="<?= date('Y-m-d');?>" "  /></td></tr><tr><td>Perkiraan harga</td><td><input type="text" class="form-control" name="harga[]" id="'+boxName+'"  value="" "  /></td></tr></table>';
}
function minInput()
{
     var boxName="textBox"-countBox; 
document.getElementById('responce').innerHTML-='<br/><input type="text" class="form-control" id="'-boxName-'" value="'-boxName-'" "  />';
     countBox -= 1;
}
</script>