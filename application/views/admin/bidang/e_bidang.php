  <!-- partial -->
  <div class="main-panel">
      <div class="content-wrapper">

          <div class="page-header">
              <h3 class="page-title">
                  <span class="page-title-icon bg-gradient-simoneva text-white mr-2">
                      <i class="mdi mdi-home"></i>
                  </span>Edit Data Bidang
              </h3>
              <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                      <li class="breadcrumb-item"><a href="#">Bidang</a></li>
                      <li class="breadcrumb-item active" aria-current="page">Edit Bidang</li>
                  </ol>
              </nav>
          </div>
          <div class="row">
              <div class="col-md-12 grid-margin stretch-card">
                  <div class="card">
                      <div class="card-body">
                          <?php $a = $this->uri->segment(5); ?>
                          <?php
                          foreach($dat as $k){
                          ?>
                          <form method="post" class="forms-sample" action="<?= base_url('admin/bidang/crud_bidang/up_bidang/') . $a ?>">
                              <div class="form-group">
                                  <label for="exampleInputEmail3">Kode Kategori</label>
                                  <input type="text" class="form-control" id="exampleInputEmail3" placeholder="" readonly="readonly" value="<?php echo $k->id_bidang; ?>0930483857JKITFGF9">
                              </div>
                              <div class="form-group">
                                  <label for="exampleInputName1">Nama Kategori</label>
                                  <input type="text" class="form-control" name="bdg" id="exampleInputName1" placeholder="Name" value="<?php echo $k->nama_bidang;  ?>" required="">
                              </div>

                              <button type="submit" class="btn btn-gradient-simoneva"><i class="mdi mdi mdi-pencil-box-outline"></i> EDIT</button>
                              <a href="<?= base_url('admin/bidang/crud_bidang'); ?>" class="btn btn-secondary" data-dismiss="modal">BATAL</a>
                      </div>
                  </div>
              </div>
             

                  </form>
                  <?php } ?>
              </div>
          </div>
 