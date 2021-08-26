  <!-- partial -->
  <div class="main-panel">
      <div class="content-wrapper">

          <div class="page-header">
              <h3 class="page-title">
                  <span class="page-title-icon bg-gradient-simoneva text-white mr-2">
                      <i class="mdi mdi-home"></i>
                  </span> Kebijakan 5S (Landing Page)
              </h3>
              <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                      <li class="breadcrumb-item"><a href="#">Pengaturan LP</a></li>
                      <li class="breadcrumb-item active" aria-current="page">Kebijakan 5S </li>
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
                                                  <th>Isi Tentang 5S</th>
                                                  <th>Tanggal Update</th>
                                                  <th>Status</th>
                                                  <th>Aksi</th>
                                              </tr>
                                          </thead>

                                          <tbody> <?php
                                                    $i = 1;
                                                    foreach ($kebijakan as $k) :
                                                    ?>
                                                  <tr>
                                                      <td><?= $i; ?></td>
                                                      <td><?= $k->isi_kebijakan_5s; ?></td>
                                                      <td><?= $k->tgl_update; ?></td>
                                                      <td><?= $k->status; ?></td>

                                                      <td>
                                                          <div class="row">
                                                              <div class="col text-center">
                                                                  <a class="btn btn-outline-primary" data-target="#exampleModalz" data-toggle="modalz" href="<?= base_url('admin/lp/kebijakan/e_kebijakan/') . $k->id_kebijakan_5s ?>"><i class="mdi mdi mdi-pencil-box-outline"></i> Edit</a>
                                                                  <a class="btn btn-outline-danger" href="<?= base_url('admin/lp/kebijakan/h_kebijakan/') . $k->id_kebijakan_5s ?>"><i class="mdi mdi mdi-delete"></i> Delete</a>
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
                                              <h5 class="modal-title" id="exampleModalLabel">FORM KEBIJAKAN S5</h5>
                                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                  <span aria-hidden="true">&times;</span>
                                              </button>
                                          </div>
                                          <div class="modal-body">
                                              <div class="card">
                                                  <div class="card-body">

                                                      <form method="post" action="<?= base_url('index.php/admin/lp/kebijakan/t_kebijakan'); ?>">

                                                          <div class="form-group">
                                                              <label for="isi_kebijakan_5s">Isi Kebijakan 5s</label>
                                                              <textarea name="isi_kebijakan_5s" class="form-control" id="exampleInputName1" placeholder="Isi Tentang 5S" required=""></textarea>
                                                          </div>
                                                          <div class="form-group">
                                                              <label for="tgl_update">Tanggal Update</label>
                                                              <input type="text" name="tgl_update" class="form-control" value="<?= date('d-m-Y') ?>" id="exampleInputName1" placeholder="Nama kategori" required="">
                                                          </div>
                                                          <div class="form-group">
                                                              <label for="status">Status</label>
                                                              <select class="form-control" name="status">
                                                                  <option value="1">Aktif</option>
                                                                  <option value="0">Tidak Aktif</option>

                                                              </select>
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