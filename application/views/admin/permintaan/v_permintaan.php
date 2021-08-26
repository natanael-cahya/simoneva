<div class="main-panel">
      <div class="content-wrapper">

          <div class="page-header">
              <h3 class="page-title">
                  <span class="page-title-icon bg-gradient-simoneva text-white mr-2">
                      <i class="mdi mdi-archive"></i>
                  </span> Request Material
              </h3>
              <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                      <li class="breadcrumb-item"><a href="#">Material</a></li>
                      <li class="breadcrumb-item active" aria-current="page">ACC Permintaan</li>
                  </ol>
              </nav>
          </div>
          <div class="row">
              <div class="col-md-12 grid-margin stretch-card">
                  <div class="card">
                      <div class="card-body">
                          <!-- <h4 class="card-title">Tabel S5</h4> -->
                          <!-- <p class="card-description">ASDHAHSGDJH </p> -->
                        <a href="<?= base_url('admin/permintaan/crud_permintaan/vtb_permintaan'); ?>" class="btn btn-primary"><i class="mdi mdi-archive"></i> Tambah Data</a>
                            <br><br><br><br>
                          <div class="table-responsive">
                              <table id="tabel5s" class="table  table-bordered text-center table-hover">
                                  <thead>
                                      <tr class="bg-gradient-simoneva text-white">
                                          <th>No</th>
                                          <th>Bidang</th>
                                          <th>Nama Barang</th>
                                          <th>Jumlah</th>
                                          <th>Perkiraan Harga</th>
                                          <th>Tanggal Req</th>
                                          <th>Status Req</th>
                                          <th>Aksi</th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                      <?php
                                        $i = 1;
                                        foreach ($dataa as $val) {
                                          $a=$val->stat;
                                          $kd=$val->id_permintaan;
                                        ?>
                                          <tr>
                                              <td><?= $i; ?></td>
                                              <td><?= $val->nama_bidang ?></td>
                                               <td><?= $val->nama_barang ?></td>
                                              <td><?= $val->jumlah ?></td>
                                              <td>Rp.<?= $val->harga ?></td>
                                              <td><?= $val->tgl ?></td>
                                              <td><?php
                                                 if($a == 1){
                                                     echo"Disetujui";
                                                   }else{
                                                     echo"Menunggu Persetujuan";
                                                   }
                                                   ?>
                                               </td>
                                              
                                              <td>
                                                  <div class="row">
                                                      <div class="col text-center">
                                                          <a class="btn btn-outline-primary" href="<?= base_url('admin/permintaan/crud_permintaan/e_permintaan/1/').$kd; ?>"><i class="mdi mdi mdi-pencil-box-outline"></i> Acc Uang</a>

                                                          <a class="btn btn-outline-primary" href="<?= base_url('admin/permintaan/crud_permintaan/e_permintaan/2/').$kd; ?>"><i class="mdi mdi mdi-pencil-box-outline"></i>Acc Material</a>

                                                          <a class="btn btn-outline-danger" href="<?= base_url('admin/permintaan/crud_permintaan/reject/3/').$kd; ?>"><i class="mdi mdi mdi-close"></i>Reject Req</a>

                                                      </div>
                                                  </div>
                                              </td>

                                          </tr>
                                      <?php $i++;
                                       }  ?>
                                  </tbody>
                              </table>
                          </div>
                      </div>
                  </div>
              </div>
         </div>
       </div>

 