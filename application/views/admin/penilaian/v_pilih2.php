  <!-- partial -->
  <div class="main-panel">
      <div class="content-wrapper">

          <div class="page-header">
              <h3 class="page-title">
                  <span class="page-title-icon bg-gradient-simoneva text-white mr-2">
                      <i class="mdi mdi-home"></i>
                  </span> Choose Audit Area
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
                          
                              <form method="post" action="<?= base_url('admin/penilaian/crud_penilaian/pilih'); ?>">
                              <div class="form-group">
                                
                              <label for="exampleInputEmail3">Pilih Area yang akan di AUDIT</label>
                              
                              <select class="form-control" name="katt">
                                
                                <?php foreach($kate as $key){ ?>
                                  

                                <option value="<?= $key['id_kategori_area'] ?>">
                                  <?= $key['nama_kategori']; ?>
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

      