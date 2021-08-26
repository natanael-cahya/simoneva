  <!-- partial -->
  <div class="main-panel">
    <div class="content-wrapper">

      <div class="page-header">
        <h3 class="page-title">
          <span class="page-title-icon bg-gradient-simoneva text-white mr-2">
            <i class="mdi mdi-home"></i>
          </span> Check List Audit Area Workshop
        </h3>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Penilaian Auditor</a></li>
            <li class="breadcrumb-item active" aria-current="page">Management Audit</li>
          </ol>
        </nav>
      </div>
      <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <button type="button" class="btn  btn-gradient-simoneva " data-toggle="modal" data-target="#exampleModalz">
                Tambah Audit <i class="mdi mdi-file-plus menu-icon"></i>
              </button>

              <br><br>
              <!-- S1 -->
              <div class="table-responsive mb-6 mt-3">
                <table class="table table-bordered " id="tableaudit1">
                  <thead class="text-white" style="background-color: #82b3e2; ">
                    <tr style="background-color: #448dd4;">
                      <th colspan="6" class="text-center"><b>LIST AUDIT SEIRI</b></th>

                    </tr>
                    <tr>
                      <th>No</th>
                      <th>Status Cek List</th>
                      <th>Kategori S5</th>
                      <th>Audit List</th>
                      <th>Deskripsi Audit | <button onclick="myFunction1()" class="btn btn-sm btn-success text-white myBtn" id=""><i class="mdi mdi-eye"></i> Lihat Deskripsi</button></th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <?php
                  $i = 1;
                  foreach ($join1 as $pr) :
                    $stat = $pr->status;

                  ?>
                    <tbody>

                      <tr>

                        <td><?= $i; ?></td>
                        <td><?php if ($stat == '1') {
                              echo "<i class='alert alert-primary'>USE</i>";
                            } else {
                              echo "<i class='alert alert-primary'>NOT-USE</i>";
                            } ?></td>
                        <td><?= $pr->deskripsi_s5 ?></td>
                        <td><?= $pr->kat_deskripsi ?></td>
                        <td>
                          <div class="alert alert-primary" style="word-wrap:break-word;"><span class="dots1">...</span><span class="more"><?= $pr->deskripsi_eva ?></span></div>

                        </td>

                        <td>
                          <a class="btn btn-outline-primary" data-target="#exampleModalz" data-toggle="modalz" href="<?= base_url('admin/audit/crud_list_audit/e_auditW/') . $pr->id_periksa ?>">Edit</a>
                          <a class="btn btn-outline-danger" href="<?= base_url('admin/audit/crud_list_audit/h_auditW/') . $pr->id_periksa ?>">Delete</a>
                        </td>

                      </tr>

                    </tbody>
                  <?php $i++;
                  endforeach;  ?>
                </table>
              </div>

              </ <!-- END OF S1 -->
              <br>
              <hr>
              <br>
              <!-- S2 -->
              <div class="table-responsive mb-6 mt-3">
                <table class="table table-bordered " id="tableaudit2">
                  <thead class="text-white" style="background-color: #e5b8b7;">
                    <tr style="background-color: #d1817f;">
                      <th colspan="6" class="text-center"><b>LIST AUDIT SEITON</b></th>
                    </tr>
                    <tr>
                      <th>No</th>
                      <th>Status Cek List</th>
                      <th>Kategori S5</th>
                      <th>Audit List</th>
                      <th>Deskripsi Audit | <button onclick="myFunction2()" class="btn btn-sm btn-success text-white" id="myBtn2"><i class="mdi mdi-eye"></i> Lihat Deskripsi</button></th>

                      <th class="text-center">Aksi</th>
                    </tr>
                  </thead>

                  <tbody>
                    <tr>
                      <?php
                      $i = 1;
                      foreach ($join2 as $pr) :
                        $stat = $pr->status;

                      ?>
                        <td><?= $i; ?></td>
                        <td><?php if ($stat == '1') {
                              echo "<i class='alert alert-primary'>USE</i>";
                            } else {
                              echo "<i class='alert alert-primary'>NOT-USE</i>";
                            } ?></td>
                        <td><?= $pr->deskripsi_s5 ?></td>
                        <td><?= $pr->kat_deskripsi ?></td>
                        <td class="">
                          <div class="alert alert-primary" style="word-wrap:break-word;"><span id="dots2">...</span><span id="more2" style="display: none;"><?= $pr->deskripsi_eva ?></span></div>

                        </td>

                        <td class="text-center">
                          <a class="btn btn-outline-primary" data-target="#exampleModalz" data-toggle="modalz" href="<?= base_url('index.php/admin/area/crud_area/e_area/') . $pr->id_periksa ?>">Edit</a>
                          <a class="btn btn-outline-danger" href="<?= base_url('index.php/admin/area/crud_area/h_area/') . $pr->id_periksa ?>">Delete</a>
                        </td>

                      <?php $i++;
                      endforeach;  ?>
                    </tr>
                  </tbody>

                </table>
              </div>

              <!-- END OF S2 -->
              <br>
              <hr>
              <br>
              <!-- S3 -->
              <div class="table-responsive mb-6">
                <table class="table table-bordered" id="tableaudit3">
                  <thead class="text-white" style="background-color: #c2d69b;">
                    <tr style="background-color: #a1c065;">
                      <th colspan="7" class="text-center"><b>LIST AUDIT SEISO</b></th>
                    </tr>
                    <tr>
                      <th>No</th>
                      <th>Status Cek List</th>
                      <th>Kategori S5</th>
                      <th>Audit List</th>
                      <th>Deskripsi Audit | <button onclick="myFunction3()" class="btn btn-sm btn-success text-white" id="myBtn3"><i class="mdi mdi-eye"></i> Lihat Deskripsi</button></th>

                      <th class="text-center">Aksi</th>
                    </tr>
                  </thead>
                  <?php
                  $i = 1;
                  foreach ($join3 as $pr) :
                    $stat = $pr->status;

                  ?>
                    <tbody>
                      <tr class="odd gradeX">
                        <td><?= $i; ?></td>
                        <td><?php if ($stat == '1') {
                              echo "<i class='alert alert-primary'>USE</i>";
                            } else {
                              echo "<i class='alert alert-primary'>NOT-USE</i>";
                            } ?></td>
                        <td><?= $pr->deskripsi_s5 ?></td>
                        <td><?= $pr->kat_deskripsi ?></td>
                        <td class="">
                          <div class="alert alert-primary" style="word-wrap:break-word;"><span id="dots3">...</span><span id="more3" style="display: none;"><?= $pr->deskripsi_eva ?></span></div>

                        </td>

                        <td class="text-center">
                          <a class="btn btn-outline-primary" data-target="#exampleModalz" data-toggle="modalz" href="<?= base_url('index.php/admin/area/crud_area/e_area/') . $pr->id_periksa ?>">Edit</a>
                          <a class="btn btn-outline-danger" href="<?= base_url('index.php/admin/area/crud_area/h_area/') . $pr->id_periksa ?>">Delete</a>
                        </td>

                      </tr>
                    </tbody>
                  <?php $i++;
                  endforeach;  ?>
                </table>
              </div>

              <!-- END OF S3 -->
              <br>
              <hr>
              <br>
              <!-- S4 -->
              <div class="table-responsive mb-6">
                <table class="table table-bordered" id="tableaudit4">
                  <thead class="text-white" style="background-color: #92cddc;">
                    <tr style="background-color: #58b2c9;">
                      <th colspan="7" class="text-center"><b>LIST AUDIT SEIKETSU</b></th>
                    </tr>
                    <tr>
                      <th>No</th>
                      <th>Status Cek List</th>
                      <th>Kategori S5</th>
                      <th>Audit List</th>
                      <th>Deskripsi Audit | <button onclick="myFunction4()" class="btn btn-sm btn-success text-white" id="myBtn4"><i class="mdi mdi-eye"></i> Lihat Deskripsi</button></th>

                      <th class="text-center">Aksi</th>
                    </tr>
                  </thead>
                  <?php
                  $i = 1;
                  foreach ($join4 as $pr) :
                    $stat = $pr->status;

                  ?>
                    <tbody>
                      <tr>
                        <td><?= $i; ?></td>
                        <td><?php if ($stat == '1') {
                              echo "<i class='alert alert-primary'>USE</i>";
                            } else {
                              echo "<i class='alert alert-primary'>NOT-USE</i>";
                            } ?></td>
                        <td><?= $pr->deskripsi_s5 ?></td>
                        <td><?= $pr->kat_deskripsi ?></td>
                        <td class="">
                          <div class="alert alert-primary" style="word-wrap:break-word;"><span id="dots4">...</span><span id="more4" style="display: none;"><?= $pr->deskripsi_eva ?></span></div>

                        </td>

                        <td class="text-center">
                          <a class="btn btn-outline-primary" data-target="#exampleModalz" data-toggle="modalz" href="<?= base_url('index.php/admin/area/crud_area/e_area/') . $pr->id_periksa ?>">Edit</a>
                          <a class="btn btn-outline-danger" href="<?= base_url('index.php/admin/area/crud_area/h_area/') . $pr->id_periksa ?>">Delete</a>
                        </td>

                      </tr>
                    </tbody>
                  <?php $i++;
                  endforeach;  ?>
                </table>
              </div>

              <!-- END OF S4 -->
              <br>
              <hr>
              <br>
              <!-- S5 -->
              <div class="table-responsive mb-6">
                <table class="table table-bordered " id="tableaudit5">
                  <thead class="text-white" style="background-color: #fabf8f;">
                    <tr style="background-color: #f79546;">
                      <th colspan="7" class="text-center"><b>LIST AUDIT SHITSUKE</b></th>
                    </tr>
                    <tr>
                      <th>No</th>
                      <th>Status Cek List</th>
                      <th>Kategori S5</th>
                      <th>Audit List</th>
                      <th>Deskripsi Audit | <button onclick="myFunction5()" class="btn btn-sm btn-success text-white" id="myBtn5"><i class="mdi mdi-eye"></i> Lihat Deskripsi</button></th>

                      <th class="text-center">Aksi</th>
                    </tr>
                  </thead>

                  <tbody>
                    <?php
                    $i = 1;
                    foreach ($join5 as $pr) :
                      $stat = $pr->status;

                    ?>
                      <tr>
                        <td><?= $i; ?></td>
                        <td><?php if ($stat == '1') {
                              echo "<i class='alert alert-primary'>USE</i>";
                            } else {
                              echo "<i class='alert alert-primary'>NOT-USE</i>";
                            } ?></td>
                        <td><?= $pr->deskripsi_s5 ?></td>
                        <td><?= $pr->kat_deskripsi ?></td>
                        <td class="">
                          <div class="alert alert-primary" style="word-wrap:break-word;"><span id="dots5">...</span><span id="more5" style="display: none;"><?= $pr->deskripsi_eva ?></span></div>

                        </td>

                        <td class="text-center">
                          <a class="btn btn-outline-primary" data-target="#exampleModalz" data-toggle="modalz" href="<?= base_url('index.php/admin/area/crud_area/e_area/') . $pr->id_periksa ?>">Edit</a>
                          <a class="btn btn-outline-danger" href="<?= base_url('index.php/admin/area/crud_area/h_area/') . $pr->id_periksa ?>">Delete</a>
                        </td>
                      </tr>
                    <?php $i++;
                    endforeach;  ?>
                  </tbody>

                </table>
              </div>

              <!-- END OF S5 -->


              <!-- Button edit modal -->

              <!-- Modal -->
              <div class="modal fade" id="exampleModalz" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header bg-gradient-simoneva text-white">
                      <h5 class="modal-title" id="exampleModalLabel">FORM TAMBAH Check List(Pemeriksaan)</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <div class="card">
                        <div class="card-body">

                          <form method="post" action="<?= base_url('admin/audit/crud_list_audit/t_auditW'); ?>">
                            <div class="form-group">
                              <label for="exampleInputName1">Kategori S5</label>
                              <select class="form-control" name="kat_s5">
                                <?php
                                foreach ($s5 as $kat_id) :

                                ?>
                                  <option value="<?= $kat_id['id_s5']; ?>"><?= $kat_id['deskripsi_s5']; ?></option>
                                <?php endforeach; ?>
                              </select>
                            </div>
                            <div class="form-group">
                              <label for="exampleInputName1">Check Audit</label>
                              <input type="text" name="kat_deskripsi" class="form-control">
                            </div>
                            <div class="form-group">
                              <label for="exampleInputName1">Deskripsi Audit</label>
                              <textarea name="deskripsi" style="height: 200px;width: 300px;white-space: pre-wrap;word-break: keep-all;" class="form-control"></textarea>
                            </div>
                            <div class="form-group">

                              <input type="hidden" value="<?= date('Y-m-d'); ?>" name="time" class="form-control">
                            </div>
                            <div class="form-group">
                              <label for="exampleInputName1">Status</label>
                              <select name="status" class="form-control">
                                <option value="1">ON</option>
                                <option value="2">OFF</option>
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
              <!-- END MODAL -->
            </div>
          </div>
        </div>
      </div>
    </div>