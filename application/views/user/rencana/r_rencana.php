  <!-- partial -->
  <div class="main-panel">
      <div class="content-wrapper">

          <div class="page-header">
              <h3 class="page-title">
                  <span class="page-title-icon bg-gradient-simoneva text-white mr-2">
                      <i class="mdi mdi-file-table"></i>
                  </span> Data Rencana Kerja
              </h3>
              <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                      <li class="breadcrumb-item"><a href="#">Plan & Real</a></li>
                      <li class="breadcrumb-item active" aria-current="page">Rencana Bidang</li>
                  </ol>
              </nav>
          </div>
          <div class="row">
              <div class="col-md-12 grid-margin stretch-card">
                  <div class="card">
                      <div class="card-body">
                          <!-- <h4 class="card-title">Tabel S5</h4> -->
                          <!-- <p class="card-description">ASDHAHSGDJH </p> -->
                         

                          <div class="table-responsive">
                              <table id="tabel5s" class="table  table-bordered text-center table-hover">
                                  <thead>
                                      <tr class="bg-gradient-simoneva text-white">
                                          <th>No</th>
                                          <th>Rencana Program</th>
                                          <th>Tgl buat Rencana</th>
                                          <th>Rencana </th>
                                          <th>Realisasi</th>
                                          <th>Foto Before</th>
                                          <th>Foto After</th>
                                          <th>Area Pembuat</th>
                                          <th>Aksi</th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                      <?php
                                       $it=1;
                                       foreach($datay as $d):
                                        $o=$d->real_minggu;
                                        $kdd=$d->id_rencana;
                                        $a1=$d->plan_minggu;
                                        $a2=$d->bln;
                                        $a3=$d->tahun;
                                        $b1=$d->real_minggu;
                                        $b2=$d->real_bln;
                                        $b3=$d->real_thn;
                                        
                                        ?>
                                          <tr>

                                              <td><?= $it ?></td>
                                              <td><?= $d->program ?></td>
                                              <td><?= $d->tgl_pembuatan ?></td>
                                              <td>Minggu ke <?php echo $a1." - Bulan ".$a2." - Tahun ".$a3 ?></td>
                                              <td> Minggu ke <?php echo $b1." - Bulan ".$b2." - Tahun ".$b3 ?></td>
                                              <td><img class="img-fluid" src="<?= base_url('upload_img/plannreal/'.$d->before_img); ?>"></td>
                                              <td><img class="img-fluid" src="<?= base_url('upload_img/plannreal/'.$d->after_img); ?>"></td>
                                              <td><?= $d->nama_bidang ?></td>
                                              
                                              <td>
                                                  <div class="row">
                                                      <div class="col text-center">
                                                          <a class="btn btn-outline-primary" href="<?= base_url('admin/rencana/crud_rencana/e_rencana/').$d->id_rencana; ?>"><i class="mdi mdi mdi-pencil-box-outline"></i> Edit</a>
                                                          <a class="btn btn-outline-danger" href=""><i class="mdi mdi mdi-delete"></i> Delete</a>
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
                      <h5 class="modal-title" id="exampleModalLabel">Buat Rencana Kerja</h5>
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