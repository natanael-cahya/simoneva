
  <div class="main-panel">
      <div class="content-wrapper">

          <div class="page-header">
              <h3 class="page-title">
                  <span class="page-title-icon bg-gradient-simoneva text-white mr-2">
                      <i class="mdi mdi-home"></i>
                  </span> Penilaian
              </h3>
              <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                      <li class="breadcrumb-item"><a href="#">List Audit</a></li>
                      <li class="breadcrumb-item active" aria-current="page">Penilaian</li>
                  </ol>
              </nav>
          </div>
    	<!-- CONTENT -->
 <div class="row">
              <div class="col-md-12 grid-margin stretch-card">
    		<form name="aa" method="post" enctype="multipart/form-data" action="<?= base_url('admin/penilaian/crud_penilaian/nilai') ?>">
    			  <div class="card">
            
    			<?php $z=1;
    				foreach($join_3 as $eva): 
    					$iz=count($join_3);
    					
    					?>

                       
 
  <div class="card-body">
    <hr style="background-color: #f78d1d; height: 2px">
                    
                    <input type="hidden" name="kdx[]" value="<?= $eva->id_periksa ?>">
                    <input type="hidden" name="kdy[]" value="<?= $arr ?>">
                    <input type="hidden" name="id[]" value="<?= $sesiid ?>">
                    <input type="hidden" name="tgl[]" value="<?= date('Y-m-d'); ?>">
                     <div class="form-group">
                        <div class="alert alert-secondary"><?php echo $z.$eva->deskripsi_eva  ?></div>
</div>
                    <div class="form-group ">
                <div class="form-inline">
                 <select name="nilai[]" required class="form-control col-11">
                            <option>-Pilih Nilai-</option>
                            <option value="0">0</option>
                            <option value="10">10</option>
                            <option value="20">20</option>
                            <option value="30">30</option>
                            <option value="40">40</option>
                        </select> 
<div class="ml-2"><i class="mdi mdi-pencil"></i></div>
</div>
                        
                    </div>
                    <div>
                         <div class="form-inline">
                        <input type="text" name="saran[]" class="form-control col-11 mb-3 " placeholder="Saran / Masukan" required="">
<div class="ml-2 mb-3"><i class="mdi mdi-pencil"></i></div>
</div>
                    </div>
                            
                    <div class="form-group">
                        <label class="badge badge-primary"><i class="mdi mdi-image"></i> EVIDEN : </label>
                         <div class="form-inline">
                        <input type="file" name="berkas[]" id="upload_Files" class="form-control col-7 mt-2">
                        <div class="ml-2"><i class="mdi mdi-image"></i></div>
</div>
 <div class="form-inline">
                        <input type="file" name="berkass[]" id="upload_Files" class="form-control col-7  mt-2" >
                                    <div class="ml-2"><i class="mdi mdi-image"></i></div>
</div>
                         <div class="form-inline">
                        <input type="file" name="berkasss[]" id="upload_Files" class="form-control col-7  mt-2">
                                    <div class="ml-2"><i class="mdi mdi-image"></i></div>
</div>
                    </div>
                
                </div>
                  <?php $z++; endforeach;// } ?>
             <div class="col">   
            <input type="submit" class="btn btn-primary btn-block" value="Nilai"><br><br>
</div>
            </form>

    	<!-- END OF CONTENT -->
       </div>
                  </div>
              </div>
          </div>