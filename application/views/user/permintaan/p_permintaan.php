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

 