  <!-- partial -->
  <div class="main-panel">
      <div class="content-wrapper">

          <div class="page-header">
              <h3 class="page-title">
                  <span class="page-title-icon bg-gradient-simoneva text-white mr-2">
                      <i class="mdi mdi-home"></i>
                  </span> Edit Tabel Kategori Area
              </h3>
              <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                      <li class="breadcrumb-item"><a href="#">Manage Area & 5s</a></li>
                      <li class="breadcrumb-item active" aria-current="page">Edit Kategori Area</li>
                  </ol>
              </nav>
          </div>
          <div class="row">
              <div class="col-md-12 grid-margin stretch-card">
                  <div class="card">
                      <div class="card-body">
                          <?php $a = $this->uri->segment(5); ?>
                          <form method="post" class="forms-sample" action="<?= base_url('index.php/admin/kategori/crud_kategori/u_kategori/') . $a ?>">
                              <div class="form-group">
                                  <label for="exampleInputEmail3">Kode Kategori</label>
                                  <input type="text" class="form-control" id="exampleInputEmail3" placeholder="" readonly="readonly" value="<?php echo $kategori_area[0]->id_kategori_area; ?>0930483857JKITFGF9">
                              </div>
                              <div class="form-group">
                                  <label for="exampleInputName1">Nama Kategori</label>
                                  <input type="text" required="" class="form-control" name="nama_kat" id="exampleInputName1" placeholder="Name" value="<?php echo $kategori_area[0]->nama_kategori;  ?>">
                              </div>

                              <button type="submit" class="btn btn-gradient-simoneva"><i class="mdi mdi mdi-pencil-box-outline"></i> EDIT</button>
                              <a href="<?= base_url('index.php/admin/kategori/crud_kategori/v_kategori'); ?>" class="btn btn-secondary" data-dismiss="modal">BATAL</a>
                      </div>
                  </div>
              </div>
              <div class="modal-footer">

                  </form>

              </div>
          </div>
      </div>