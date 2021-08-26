  <!-- partial -->
  <div class="main-panel">
      <div class="content-wrapper">

          <div class="page-header">
              <h3 class="page-title">
                  <span class="page-title-icon bg-gradient-simoneva text-white mr-2">
                      <i class="mdi mdi-home"></i>
                  </span> Riwayat Req-Material
              </h3>
              <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                      <li class="breadcrumb-item"><a href="#">Material</a></li>
                      <li class="breadcrumb-item active" aria-current="page">Req-Material</li>
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
                                         <th>Nama Barang</th>
                                         <th>Jumlah</th>
                                         <th>Perkiraan harga</th>
                                         <th>Tanggal Request</th>
                                         <th>Status</th>
                                         <th>Aksi</th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                      <?php
                                       $urutan=1;
                                       foreach($dataa as $val){
                                       $a=$val->stat;
                                      ?>
                                       <tr style="text-align: center;">
                                          <td><?= $urutan++; ?></td>
                                          <td><?= $val->nama_barang ?></td>
                                          <td><?= $val->jumlah ?></td>
                                          <td>Rp.<?= $val->harga ?></td>
                                          <td><?= $val->tgl ?></td>
                                          <td><?php
                                                if($a == 1){
                                                   echo"Disetujui Uang";
                                                }else
                                                if($a == 2){
                                                   echo"Disetujui Barang";
                                                }else{
                                                   echo"Menunggu Persetujuan";
                                                }
                                             ?>
                                          </td>
                                          <td><button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal<?= $val->id_permintaan ?>">Kirim Nota</button> </td>
                                          
                                       </tr>
                                       <?php  } ?>
                                  </tbody>
                              </table>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>


<?php
                                 
                                       foreach($dataa as $val){
                                      
                                      ?>

            <!-- Modal -->
      <div class="modal fade" id="exampleModal<?= $val->id_permintaan ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
              <div class="modal-content">
                  <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">UPLOAD NOTA</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                      </button>
                  </div>
                  <div class="modal-body">
                      <div class="card">
                          <div class="card-body">

                              <form method="post" action="<?= base_url('user/permintaan/crud_permintaan/up_nota'); ?>">
                                  <div class="form-group">
                                      <label for="exampleInputName1">Upload Nota pembelian</label>
                                      <input type="text" value="<?= $val->id_permintaan ?>" name="kd">
                                      <input type="file" name="nota" class="form-control" id="exampleInputName1" required="">
                                  </div>
                          </div>
                      </div>
                  </div>
                  <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                      <button type="submit" class="btn btn-gradient-simoneva">Kirim</button>
                      </form>
                  </div>
              </div>
          </div>
      </div>
<?php } ?>