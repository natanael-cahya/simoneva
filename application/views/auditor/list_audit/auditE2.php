
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

                    <form class="forms-sample" method="post" action="<?= base_url('admin/audit/crud_auditE/pilih2') ?>">
                       <div class="form-group">
                        <label for="exampleInputPassword4">Kategori Area</label>
                        <input type="text" name="kode1" value="<?= $kd_bidang ?>">

                        <select class="form-control" name="kode2">
                        <?php
                        foreach ($kat as $key) {
                          $p=$key['nama_kategori'];
                        ?>
                        
                        <option value="<?= $key['id_kategori_area'] ?>"><?= $p ?></option>
                        
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