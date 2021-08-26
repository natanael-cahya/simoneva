  <!-- partial -->
  <div class="main-panel">
      <div class="content-wrapper">

          <div class="page-header">
              <h3 class="page-title">
                  <span class="page-title-icon bg-gradient-simoneva text-white mr-2">
                      <i class="mdi mdi-home"></i>
                  </span> Data Tabel S5
              </h3>
              <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                      <li class="breadcrumb-item"><a href="#">Manage Area & 5s</a></li>
                      <li class="breadcrumb-item active" aria-current="page">S5</li>
                  </ol>
              </nav>
          </div>
          <div class="row">
              <div class="col-md-12 grid-margin stretch-card">
                  <div class="card">
                      <div class="card-body">
                          <!-- <h4 class="card-title">Tabel S5</h4> -->
                          <!-- <p class="card-description">ASDHAHSGDJH </p> -->
                          <button type="button" class="btn btn-gradient-simoneva" data-toggle="modal" data-target="#exampleModal">
                              Tambah Data <i class="mdi mdi-file-upload menu-icon"></i>
                          </button>
                          <br><br><br><br>

                          <div class="table-responsive">
                              <table id="tabel5s" class="table  table-bordered text-center table-hover">
                                  <thead>
                                      <tr class="bg-gradient-simoneva text-white">
                                          <th>No</th>
                                          <th>Nama Kategori</th>
                                          <th>Aksi</th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                      <?php
                                        $i = 1;
                                        foreach ($s5 as $ka) :
                                        ?>
                                          <tr>
                                              <td><?= $i; ?></td>
                                              <td><?= $ka['deskripsi_s5']; ?></td>
                                              <td>
                                                  <div class="row">
                                                      <div class="col text-center">
                                                          <a class="btn btn-outline-primary" href="<?= base_url('admin/s5/crud_s5/e_s5/') . $ka['id_s5']; ?>"><i class="mdi mdi mdi-pencil-box-outline"></i> Edit</a>
                                                          <a class="btn btn-outline-danger" href=" <?= base_url('admin/s5/crud_s5/h_s5/') . $ka['id_s5']; ?>"><i class="mdi mdi mdi-delete"></i> Delete</a>
                                                      </div>
                                                  </div>
                                              </td>

                                          </tr>
                                      <?php $i++;
                                        endforeach;  ?>
                                  </tbody>
                              </table>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>

      <!-- Modal -->
      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
              <div class="modal-content">
                  <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">FORM TAMBAH DATA S5</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                      </button>
                  </div>
                  <div class="modal-body">
                      <div class="card">
                          <div class="card-body">

                              <form method="post" action="<?= base_url('index.php/admin/s5/crud_s5/t_s5'); ?>">
                                  <div class="form-group">
                                      <label for="exampleInputName1">Deskripsi S5</label>
                                      <input type="text" name="des_s5" class="form-control" id="exampleInputName1" placeholder="Nama kategori" required="">
                                  </div>
                          </div>
                      </div>
                  </div>
                  <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">TUTUP</button>
                      <button type="submit" class="btn btn-gradient-simoneva">Tambah</button>
                      </form>
                  </div>
              </div>
          </div>
      </div>