 <div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
             <h3 class="page-title">
                 <span class="page-title-icon bg-gradient-simoneva text-white mr-2">
                     <i class="mdi mdi-pencil"></i>
                 </span> Penilaian
             </h3>
             <nav aria-label="breadcrumb">
                 <ul class="breadcrumb">
                     <li class="breadcrumb-item active" aria-current="page">
                         <!-- <span></span>Overview <i class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle"></i> -->
                     </li>
                 </ul>
             </nav>
         </div>
        <!-- CONTENT -->
        <div class="wrapper" style="background-color: ;">
        <div class="main-panel mx-7" style="background-color:white">
            <form name="aa" method="post" enctype="multipart/form-data" action="<?= base_url('admin/penilaian/crud_penilaian/nilai') ?>">
                
                <?php $z=1;
                    foreach($join_3 as $eva): 
                        $iz=count($join_3);
                        
                        ?>
                <div class="card mb-5 ml-2 mr-auto mt-0">
                    <hr class="col-10">
                    
                    <input type="hidden" name="kdx[]" value="<?= $eva->id_periksa ?>">
                    <input type="hidden" name="kdy[]" value="<?= $arr ?>">
                    <input type="hidden" name="id[]" value="<?= $sesiid ?>">
                    <input type="hidden" name="tgl[]" value="<?= date('Y-m-d'); ?>">
                        <?php echo $z.$eva->deskripsi_eva  ?>

                    <div class="mb-2">
                        <input type="text" class="form-control col-5 ml-3 mt-2" name="nilai[]" value="" placeholder="Input Nilai" required="">
                    </div>
                    <div>
                        <input type="text" name="saran[]" class="form-control col-11 mb-3 ml-auto mr-auto " placeholder="Saran / Masukan" required="">

                    </div>
                            
                    <div class="ml-2">
                        EVIDEN : <br>
                        <input type="file" name="berkas[]" id="upload_Files" class="form-control col-7 ml-3 mt-2" required="">
                        <input type="file" name="berkass[]" id="upload_Files" class="form-control col-7 ml-3 mt-2" required="">
                        <input type="file" name="berkasss[]" id="upload_Files" class="form-control col-7 ml-3 mt-2" required="">
                        
                    </div>
                
                </div>
                  <?php $z++; endforeach;// } ?>
                
            <input type="submit" class="btn btn-primary mt-5 mb-3 col-10 ml-auto mr-auto" value="Nilai"><br><br>
            </form>

        </div>
    </div>
        <!-- END OF CONTENT -->

    </div>
</div></div></div>