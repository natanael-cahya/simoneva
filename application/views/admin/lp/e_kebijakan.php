  <!-- partial -->
  <div class="main-panel">
      <div class="content-wrapper">

          <div class="page-header">
              <h3 class="page-title">
                  <span class="page-title-icon bg-gradient-simoneva text-white mr-2">
                      <i class="mdi mdi-home"></i>
                  </span> Edit Kebijakan 5s
              </h3>
              <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                      <li class="breadcrumb-item"><a href="#">Pengaturan LP</a></li>
                      <li class="breadcrumb-item active" aria-current="page">Edit Kebijakan 5S </li>
                  </ol>
              </nav>
          </div>
          <div class="row">
              <div class="col-md-12 grid-margin stretch-card">
                  <div class="card">
                      <div class="card-body">
                          <?php $a = $this->uri->segment(5); ?>
                          <form method="post" class="forms-sample" action="<?= base_url('admin/lp/kebijakan/up_kebijakan/') . $a ?>">

                              <div class="form-group">
                                  <label for="exampleInputName1">Isi Kebijakan 5s</label>
                                  <input type="text" required="" class="form-control" name="isi_kebijakan_5s" placeholder="Name" value="<?= $edit_kebijakan[0]->isi_kebijakan_5s;  ?>">
                              </div>
                              <div class="form-group" style="display: none;">
                                  <label for="exampleInputName1">Isi Kebijakan 5s</label>
                                  <input type="text" required="" class="form-control" name="tgl_update" placeholder="Name" value="<?= date('d-m-Y') ?>">
                              </div>
                              <div class="form-group">
                                  <label for="status">Status</label>
                                  <select class="form-control" name="status">
                                      <?php
                                        if ($edit_kebijakan[0]->status == "1") {


                                        ?>
                                          <option value="1">Aktif</option>
                                      <?php } else   if ($edit_kebijakan[0]->status == "0") { ?>
                                          <option value="0">Tidak Aktif</option>
                                      <?php } ?>
                                      <option value="1">Aktif</option>
                                      <option value="0">Tidak Aktif</option>

                                  </select>
                              </div>
                              <button type="submit" class="btn btn-gradient-simoneva"><i class="mdi mdi mdi-pencil-box-outline"></i> EDIT</button>
                              <a href="<?= base_url('admin/lp/tentang'); ?>" class="btn btn-secondary" data-dismiss="modal">BATAL</a>
                      </div>
                  </div>
              </div>
              <div class="modal-footer">

                  </form>

              </div>
          </div>
      </div>