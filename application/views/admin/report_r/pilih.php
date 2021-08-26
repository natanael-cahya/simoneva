  <!-- partial -->
  <div class="main-panel">
      <div class="content-wrapper">

          <div class="page-header">
              <h3 class="page-title">
                  <span class="page-title-icon bg-gradient-simoneva text-white mr-2">
                      <i class="mdi mdi-home"></i>
                  </span> Choose Geeks
              </h3>
              <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                      <li class="breadcrumb-item"><a href="#">Laporan</a></li>
                      <li class="breadcrumb-item active" aria-current="page">Laporan Plan & Real</li>
                  </ol>
              </nav>
          </div>
          <div class="row">
              <div class="col-md-12 grid-margin stretch-card">
                  <div class="card">
                      <div class="card-body">
                          
                              <form method="post" action="<?= base_url('admin/report/crud_report/laporan_plan'); ?>">
                              <div class="form-group">
                                
                              <label for="exampleInputEmail3">Pilih Bidang yang akan dprint</label>
                              <select class="form-control" name="bdg">
                                
                                <?php foreach($allw as $key){ ?>
                                  

                                <option value="<?= $key->id_bidang ?>">
                                  <?= $key->nama_bidang ?>
                                </option>
                              <?php } ?>
                              </select>
                              </div>
                              
                              <button type="submit" class="btn btn-primary">Lanjut</button>
                            </form>
                          
                      </div>
                  </div>
              </div>
          </div>
      </div>

      