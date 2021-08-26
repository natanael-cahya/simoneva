  <!-- partial -->
  <div class="main-panel">
      <div class="content-wrapper">

          <div class="page-header">
              <h3 class="page-title">
                  <span class="page-title-icon bg-gradient-simoneva text-white mr-2">
                      <i class="mdi mdi-home"></i>
                  </span>Reset AKUN
              </h3>
              <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                      <li class="breadcrumb-item"><a href="#">AKUN</a></li>
                      <li class="breadcrumb-item active" aria-current="page">Lupa AKUN</li>
                  </ol>
              </nav>
          </div>
          <div class="row">
              <div class="col-md-12 grid-margin stretch-card">
                  <div class="card">
                      <div class="card-body">
                          <?php $a = $this->uri->segment(4); ?>
                          <form method="post" class="forms-sample" action="<?= base_url('admin/register/reset_akun/') . $a ?>">
                            <?php
                            foreach ($akun as $keyz) {
                              $e=$keyz->id_bidang;
                            
                            ?>
                              <div class="form-group">
                                  <label for="exampleInputEmail3">Kode Akun</label>
                                  <input type="text" class="form-control" id="exampleInputEmail3" placeholder="" readonly="readonly" value="JHO5D<?php echo $keyz->id_auth; ?>IKHFIDF84573JJD">
                              </div>
                              <div class="form-group">
                                  <label for="exampleInputName1">Username</label>
                                  <input type="text" class="form-control" name="username" id="exampleInputName1" placeholder="Name" value="<?php echo $keyz->username;  ?>" required="">
                              </div>
                              <div class="form-group">
                                  <label for="exampleInputName1">New password</label>
                                  <input type="password" class="form-control" name="password" id="exampleInputName1" placeholder="Jangan diisi bila tak ingin mengganti password" value="">
                              </div>
                              <div class="form-group">
                                  <label for="exampleInputName1">Area</label>
                                  <select class="form-control select2" name="area">
                                    <option selected="<?= $e ?> value="<?= $e ?>">Jangan Diubah bila tak ingin ubah AREA</option>
                                    <?php foreach($a_area as $y){?>
                                      
                                    <option value="<?= $y->id_bidang ?>"><?= $y->nama_bidang; ?></option>
                                  <?php } ?>
                                  </select>
                              </div>

                              <button type="submit" class="btn btn-gradient-simoneva"><i class="mdi mdi mdi-pencil-box-outline"></i> Reset/Edit Akun</button>
                              <a href="<?= base_url('index.php/admin/register'); ?>" class="btn btn-secondary" data-dismiss="modal">BATAL</a>
                      </div>
                    <?php } ?>
                  </div>
              </div>
              <div class="modal-footer">

                  </form>
              </div>
          </div>
      </div>