  <!-- partial -->
  <div class="main-panel">
      <div class="content-wrapper">

          <div class="page-header">
              <h3 class="page-title">
                  <span class="page-title-icon bg-gradient-simoneva text-white mr-2">
                      <i class="mdi mdi-home"></i>
                  </span>Edit Data Tabel S5
              </h3>
              <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                      <li class="breadcrumb-item"><a href="#">Manage Area & 5s</a></li>
                      <li class="breadcrumb-item active" aria-current="page">Edit S5</li>
                  </ol>
              </nav>
          </div>
          <div class="row">
              <div class="col-md-12 grid-margin stretch-card">
                  <div class="card">
                      <div class="card-body">
                          <?php $a = $this->uri->segment(5); ?>
                          <form method="post" class="forms-sample" action="<?= base_url('index.php/admin/s5/crud_s5/u_s5/') . $a ?>">
                              <div class="form-group">
                                  <label for="exampleInputEmail3">Kode Kategori</label>
                                  <input type="text" class="form-control" id="exampleInputEmail3" placeholder="" readonly="readonly" value="<?php echo $s5[0]->id_s5; ?>0930483857JKITFGF9">
                              </div>
                              <div class="form-group">
                                  <label for="exampleInputName1">Nama Kategori</label>
                                  <input type="text" class="form-control" name="deskripsi" id="exampleInputName1" placeholder="Name" value="<?php echo $s5[0]->deskripsi_s5;  ?>" required="">
                              </div>

                              <button type="submit" class="btn btn-gradient-simoneva"><i class="mdi mdi mdi-pencil-box-outline"></i> EDIT</button>
                              <a href="<?= base_url('index.php/admin/s5/crud_s5/v_s5'); ?>" class="btn btn-secondary" data-dismiss="modal">BATAL</a>
                      </div>
                  </div>
              </div>
              <div class="modal-footer">

                  </form>
              </div>
          </div>
      </div>