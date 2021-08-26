  <!-- partial -->
  <div class="main-panel">
      <div class="content-wrapper">

          <div class="page-header">
              <h3 class="page-title">
                  <span class="page-title-icon bg-gradient-simoneva text-white mr-2">
                      <i class="mdi mdi-home"></i>
                  </span> Choose area
              </h3>
              <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                      <li class="breadcrumb-item"><a href="#">Audit</a></li>
                      <li class="breadcrumb-item active" aria-current="page">Start Audit</li>
                  </ol>
              </nav>
          </div>
          <div class="row">
              <div class="col-md-12 grid-margin stretch-card">
                  <div class="card">
                      <div class="card-body">
                          
                              <form method="post" action="<?= base_url('admin/report/crud_report/laporan'); ?>">
                              <div class="form-group">
                                
                              <label for="exampleInputEmail3">Pilih Area </label><br>

                              <select class="form-control" name="are">
                                
                                <?php foreach($ar as $key){ ?>

                                <option value="<?= $key->id_area ?>"><?= $key->nama_area ?></option>
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

      