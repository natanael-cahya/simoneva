  <!-- partial -->
  <div class="main-panel">
      <div class="content-wrapper">

          <div class="page-header">
              <h3 class="page-title">
                  <span class="page-title-icon bg-gradient-simoneva text-white mr-2">
                      <i class="mdi mdi-home"></i>
                  </span> Struktur Area 5S (Landing Page)
              </h3>
              <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                      <li class="breadcrumb-item"><a href="#">Pengaturan LP</a></li>
                      <li class="breadcrumb-item active" aria-current="page">Struktur Area 5S </li>
                  </ol>     
              </nav>
          </div>

          <div class="row">
              <div class="col-md-12 grid-margin stretch-card">
                  <div class="card">
                      <div class="card-body">

                          <div class="card-body">
                              <button type="button" class="btn btn-gradient-simoneva" data-toggle="modal" data-target="#exampleModal">
                                  Tambah Data <i class="mdi mdi-file-upload menu-icon"></i>
                              </button>
                              <br><br><br><br>

                              <div class="panel-body">
                                  <div class="table-responsive mb-6 mt-3">
                                      <table class="table table-hover table-bordered" id="tablekaarea">
                                          <thead>
                                              <tr class="text-white bg-gradient-simoneva">
                                                  <th>No</th>
                                                  <th> Struktur Area 5S</th>


                                                  <th>Aksi</th>
                                              </tr>
                                          </thead>

                                          <tbody> <?php
                                                    $i = 1;
                                                    foreach ($struktur as $s) :
                                                    ?>
                                                  <tr>
                                                      <td><?= $i; ?></td>
                                                      <td>
                                                          <a href="<?= base_url('upload_file/struktur_area/' . $s->berkas); ?>">
                                                              <span class="btn btn-primary"><?= $s->berkas ?> </span>
                                                          </a>
                                                      </td>


                                                      <td>
                                                          <div class="row">
                                                              <div class="col text-center">
                                                                  <a class="btn btn-outline-danger" href="<?= base_url('admin/lp/struktur/h_struktur/') . $s->id_struktur ?>"><i class="mdi mdi mdi-delete"></i> Delete</a>
                                                              </div>
                                                          </div>
                                                      </td>

                                                  </tr> <?php $i++;
                                                    endforeach;  ?>
                                          </tbody>

                                      </table>
                                  </div>
                              </div><br><br><br>

                              </body>

                              </html>
                              <!-- Modal -->
                              <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                  <div class="modal-dialog">
                                      <div class="modal-content">
                                          <div class="modal-header">
                                              <h5 class="modal-title" id="exampleModalLabel">FORM DOKUMENTASI S5</h5>
                                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                  <span aria-hidden="true">&times;</span>
                                              </button>
                                          </div>
                                          <div class="modal-body">
                                              <div class="card">
                                                  <div class="card-body">

                                                      <form method="post" enctype="multipart/form-data" action="<?= base_url('index.php/admin/lp/struktur/tmbah_struktur'); ?>">
                                                          <div class="form-group">
                                                              <label>Berkas</label>

                                                              <div class="input-group ">
                                                                  <input type="file" class="form-control file-upload-info" name="berkas" placeholder="Upload Foto">
                                                              </div>
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
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>