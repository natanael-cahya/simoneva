  <!-- partial -->
  <div class="main-panel">
      <div class="content-wrapper">

          <div class="page-header">
              <h3 class="page-title">
                  <span class="page-title-icon bg-gradient-simoneva text-white mr-2">
                      <i class="mdi mdi-home"></i>
                  </span> Data Area
              </h3>
              <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                      <li class="breadcrumb-item"><a href="#">Area</a></li>
                      <li class="breadcrumb-item active" aria-current="page">List Area</li>
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
                                          <th scope="col">No</th>

                                          <th scope="col">Nama Area</th>
                                          <th scope="col">Auditee</th>
                                          <th scope="col">Kategori Area</th>
                                          <th>Aksi</th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                      <?php
                                        $i = 1;
                                        foreach ($join as $ka) :
                                        ?>
                                          <tr>
                                              <td><?= $i; ?></td>

                                              <td><?= $ka->nama_area ?></td>
                                              <td><?= $ka->auditee ?></td>
                                              <td><?= $ka->nama_kategori ?></td>
                                              <td class="text-center">
                                                  <div class="row">
                                                      <div class="col text-center">
                                                          <a class="btn btn-outline-primary" data-target="#exampleModalz" data-toggle="modalz" href="<?= base_url('admin/area/crud_area/e_area/') . $ka->id_area ?>"><i class="mdi mdi mdi-pencil-box-outline"></i> Edit</a>
                                                          <a class="btn btn-outline-danger" href="<?= base_url('admin/area/crud_area/h_area/') . $ka->id_area ?>"><i class="mdi mdi mdi-delete"></i> Delete</a>
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
                      <h5 class="modal-title" id="exampleModalLabel">FORM TAMBAH DATA AREA</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                      </button>
                  </div>
                  <div class="modal-body">
                      <div class="card">
                          <div class="card-body">

                              <form method="post" action="<?= base_url('index.php/admin/area/crud_area/t_area'); ?>">
                                  <div class="form-group">
                                      <label for="exampleInputName1">Nama Area</label>
                                      <input type="text" name="nama_area" class="form-control" id="exampleInputName1" placeholder="Nama Area" required="">
                                  </div>
                                  <div class="form-group">
                                      <label for="exampleInputName1">Auditee</label>
                                      <input type="text" name="auditee" class="form-control" id="exampleInputName1" placeholder="Nama Auditee" required="">
                                  </div>
                                  <div class="form-group">
                                      <label for="exampleInputName1">Kategori Area</label>
                                      <select class="form-control" name="kat_area">
                                          <?php
                                            foreach ($kategori_area as $kat_id) :

                                            ?>
                                              <option value="<?= $kat_id['id_kategori_area']; ?>"><?= $kat_id['nama_kategori']; ?></option>
                                          <?php endforeach; ?>
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