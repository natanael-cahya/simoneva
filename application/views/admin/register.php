  <div class="main-panel">
      <div class="content-wrapper">

          <div class="page-header">
              <h3 class="page-title">
                  <span class="page-title-icon bg-gradient-simoneva text-white mr-2">
                      <i class="mdi mdi-account"></i>
                  </span> Manage Akun
              </h3>
              <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                      <li class="breadcrumb-item"><a href="#">Akun</a></li>
                      <li class="breadcrumb-item active" aria-current="page">List Akun</li>
                  </ol>
              </nav>
          </div>
          <div class="row">
              <div class="col-md-12 grid-margin stretch-card">
                  <div class="card">
                      <div class="card-body">
                          <button type="button" class="btn btn-gradient-simoneva" data-toggle="modal" data-target="#exampleModal">
                              + Admin <i class="mdi mdi-account-plus menu-icon"></i>
                          </button>
                          <button type="button" class="btn btn-gradient-simoneva" data-toggle="modal" data-target="#exampleModal1">
                              + Auditor/PIC <i class="mdi mdi-account-plus menu-icon"></i>
                          </button>
                          <br><br><br><br>
                          <div class="table-responsive">
                              <table id="tabel5s" class="table  table-bordered text-center table-hover">
                                  <thead>
                                      <tr class="bg-gradient-simoneva text-white">
                                          <th>No</th>
                                          <th>Username</th>
                                          <th>Nama</th>
                                          <th>Level Akun</th>
                                          <th>Bidang</th>
                                          <th>Aksi</th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                      <?php
                                        $uru = 1;
                                        foreach ($authh as $key) {
                                            $lv = $key->role;
                                            //$ar=$key->id_area;
                                        ?>
                                          <tr>
                                              <td><?= $uru ?></td>
                                              <td><?= $key->username ?></td>
                                              <td><?= $key->nama ?></td>
                                              <td><?php if ($lv == 1) {
                                                        echo "Admin";
                                                    } else if ($lv == 2) {
                                                        echo "Auditor";
                                                    } else {
                                                        echo "PIC";
                                                    }  ?></td>
                                              <td><?php echo $key->nama_bidang ?></td>
                                              <td>
                                                  <div class="row">
                                                      <div class="col text-center">
                                                          <a class="btn btn-outline-primary" href="<?= base_url('admin/register/e_akun/') . $key->id_auth; ?>"><i class="mdi mdi mdi-pencil-box-outline"></i> Reset/Edit</a>
                                                          <a class="btn btn-outline-danger" href=" <?= base_url('admin/register/h_akun/') . $key->id_auth; ?>"><i class="mdi mdi mdi-delete"></i> Delete</a>
                                                      </div>
                                                  </div>
                                              </td>

                                          </tr>
                                      <?php $uru++;
                                        } ?>
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
                      <h5 class="modal-title" id="exampleModalLabel">Registrasi Akun</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                      </button>
                  </div>
                  <div class="modal-body">
                      <div class="card">
                          <div class="card-body">

                              <form method="post" action="<?= base_url('admin/register/tb_register'); ?>">
                                  <div class="form-group">
                                      <label for="exampleInputName1">Username</label>
                                      <input type="text" name="user" class="form-control" placeholder="Username" required="">
                                  </div>
                                  <div class="form-group">
                                      <label for="exampleInputName1">Password</label>
                                      <input type="password" name="pass" class="form-control" placeholder="Password" required="">
                                      <div class="form-group">
                                          <label for="exampleInputName1">Nama</label>
                                          <input type="text" name="nama" class="form-control" placeholder="Nama" required="">
                                      </div>
                                      <div class="form-group">
                                          <label for="">Level Akun</label>
                                          <select class="form-control" name="level">
                                              <option value="1">Admin</option>

                                          </select>
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

      <!-- Modal -->
      <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel1" aria-hidden="true">
          <div class="modal-dialog">
              <div class="modal-content">
                  <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Register Account</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                      </button>
                  </div>
                  <div class="modal-body">
                      <div class="card">
                          <div class="card-body">

                              <form method="post" action="<?= base_url('admin/register/tb_register'); ?>">
                                  <div class="form-group">
                                      <label for="exampleInputName1">Username</label>
                                      <input type="text" name="user" class="form-control" id="exampleInputName1" placeholder="Username" required="">
                                  </div>
                                  <div class="form-group">
                                      <label for="exampleInputName1">Password</label>
                                      <input type="password" name="pass" class="form-control" id="exampleInputName2" placeholder="Password" required="">
                                      <div class="form-group">
                                          <label for="exampleInputName1">Nama</label>
                                          <input type="text" name="nama" class="form-control" id="exampleInputName3" placeholder="Nama" required="">
                                      </div>
                                      <div class="form-group">
                                          <label for="exampleInputName4">Level Akun</label>
                                          <select class="form-control" name="level">
                                              <option value="2">Auditor</option>
                                              <option value="3">PIC</option>
                                          </select>
                                      </div>
                                      <div class="form-group">
                                          <label for="exampleInputName5">Bidang</label>
                                          <select class="form-control" name="area">
                                              <?php
                                                foreach ($a_area as $keyz) {

                                                ?>
                                                  <option value="<?= $keyz->id_bidang ?>"><?= $keyz->nama_bidang ?></option>
                                              <?php } ?>
                                          </select>
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