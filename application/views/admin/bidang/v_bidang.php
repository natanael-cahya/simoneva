  <!-- partial -->
  <div class="main-panel">
      <div class="content-wrapper">

          <div class="page-header">
              <h3 class="page-title">
                  <span class="page-title-icon bg-gradient-simoneva text-white mr-2">
                      <i class="mdi mdi-account-plus"></i>
                  </span> Data Bidang
              </h3>
              <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                      <li class="breadcrumb-item"><a href="#">Plan & Real</a></li>
                      <li class="breadcrumb-item active" aria-current="page">List Bidang</li>
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
                              Tambah Data <i class="mdi mdi-account-plus menu-icon"></i>
                          </button>
                          <br><br><br><br>

                          <div class="table-responsive">
                              <table id="tabel5s" class="table  table-bordered text-center table-hover">
                                  <thead>
                                      <tr class="bg-gradient-simoneva text-white">
                                          <th>No</th>
                                          <th>Nama Bidang</th>
                                          
                                          <th>Aksi</th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                      <?php
                                       $it=1;
                                       foreach($datay as $d):
                                      
                                        ?>
                                          <tr>
                                              <td><?= $it ?></td>
                                              <td><?= $d->nama_bidang ?></td>
                                              
                                             
                                              <td>
                                                  <div class="row">
                                                      <div class="col text-center">
                                                          <a class="btn btn-outline-primary" href="<?= base_url('admin/bidang/crud_bidang/e_bidang/').$d->id_bidang; ?>"><i class="mdi mdi mdi-pencil-box-outline"></i> Edit</a>
                                                          <a class="btn btn-outline-danger" href="<?= base_url('admin/bidang/crud_bidang/h_bidang/').$d->id_bidang; ?>"><i class="mdi mdi mdi-delete"></i> Delete</a>
                                                      </div>
                                                  </div>
                                              </td>

                                          </tr>
                                      <?php $it++; endforeach; ?>
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
                      <h5 class="modal-title" id="exampleModalLabel">Tambah Bidang</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                      </button>
                  </div>
                  <div class="modal-body">
                      <div class="card">
                          <div class="card-body">

                              <form method="post" action="<?= base_url('admin/bidang/crud_bidang/tb_bidang'); ?>">
                                  <div class="form-group">
                                      <label for="exampleInputName1">Nama bidang</label>
                                      <input type="text" name="bdg" class="form-control" id="exampleInputName1" placeholder="Nama kategori" required="">
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