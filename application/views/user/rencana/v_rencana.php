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
                      <li class="breadcrumb-item active" aria-current="page">Rencana Kerja Bidang</li>
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
                                          <th>Tgl pembuatan</th>
                                          <th>Rencana </th>
                                          <th>Foto Before</th>
                                          <th>Bidang</th>
                                          <th>Status Realisasi</th>
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
                                        
                                        ?>
                                          <tr>
                                              <td><?= $it ?></td>
                                              <td><?= $d->program ?></td>
                                              <td><?= $d->tgl_pembuatan ?></td>
                                              <td>Minggu ke <?php echo $a1." - Bulan ".$a2." - Tahun ".$a3 ?></td>
                                              <td><img src="<?= base_url('upload_img/plannreal/'.$d->before_img); ?>"></td>
                                              <td><?= $d->nama_bidang ?></td>
                                              <td><?php if($o==NULL){echo"Sedang Dalam Proses";}else{echo"$o";}  ?></td>
                                              <td>
                                                  <div class="row">
                                                      <div class="col text-center">
                                                          <a class="btn btn-outline-primary" href="<?= base_url('user/rencana/crud_rencana/e_rencana/').$d->id_rencana; ?>"><i class="mdi mdi mdi-pencil-box-outline"></i> Realisasi</a>
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
           
            
