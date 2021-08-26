  
  <script type="text/javascript">
  $ $(document).ready(function () {
    $( "#datepicker" ).datepicker();
  } );
  </script>
  <div class="main-panel">
      <div class="content-wrapper">

          <div class="page-header">
              <h3 class="page-title">
                  <span class="page-title-icon bg-gradient-simoneva text-white mr-2">
                      <i class="mdi mdi-home"></i>
                  </span> Audit External
              </h3>
              <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                      <li class="breadcrumb-item"><a href="#">Check List</a></li>
                      <li class="breadcrumb-item active" aria-current="page">Buat List</li>
                  </ol>
              </nav>
          </div>
          <div class="row">
              <div class="col-md-12 grid-margin stretch-card">
                  <div class="card">
                      <div class="card-body">

                    <form class="forms-sample" method="post" action="<?= base_url('admin/audit/crud_auditE/v_auditE') ?>">
                       <div class="form-group">
                        <label for="exampleInputPassword4">Area</label>
                        <input type="hidden" name="kode" value="<?= $kd_bidang ?>">
                        <input type="hidden" name="kode2" value="<?= $kd_kategori ?>">
                        <select class="form-control" name="kode3">
                        <?php
                        foreach ($ar as $key) {
                          $p=$key->nama_area;
                        ?>
                        
                        <option value="<?= $key->id_area ?>"><?= $p ?></option>
                        
                      <?php } ?>
                      
                      </select>
                      </div>
                      
                    
                      <button type="submit" class="btn btn-gradient-simoneva mr-2">Lanjut</button>
                     </form>
                  
                      </div>
                  </div>
              </div>
          </div>
        </div>
      </div>
    </div>