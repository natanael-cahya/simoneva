  <!-- partial -->
  <div class="main-panel">
      <div class="content-wrapper">

          <div class="page-header">
              <h3 class="page-title">
                  <span class="page-title-icon bg-gradient-simoneva text-white mr-2">
                      <i class="mdi mdi-home"></i>
                  </span>Realisasi
              </h3>
              <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                      <li class="breadcrumb-item"><a href="#">Real</a></li>
                      <li class="breadcrumb-item active" aria-current="page">Realisasi Rencana Kerja</li>
                  </ol>
              </nav>
          </div>
          <div class="row">
              <div class="col-md-12 grid-margin stretch-card">
                  <div class="card">
                      <div class="card-body">
                          <?php $a = $this->uri->segment(5); ?>
                          <form method="post" class="forms-sample" action="<?= base_url('admin/rencana/crud_rencana/up_rencana/') . $a ?>">
                            <?php
                          foreach ($renc as $key) {
                            
                            ?>
                              <div class="form-group">
                                  <label for="exampleInputEmail3">Program</label>
                                  <input type="text" class="form-control" name="program" id="exampleInputEmail3" placeholder="" value="<?= $key->program; ?>">
                              </div>
                              <div class="form-group">
                                  <label for="exampleInputName1">Rencana Minggu</label>
                                  <select class="form-control col-5" name="minggu">
                                    <option selected="<?= $key->plan_minggu ?>" value="<?= $key->plan_minggu ?>">=JANGAN DIUBAH BILA TAK INGIN DIGANTI=</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                  </select>
                                  <br>
                                  <label for="exampleInputName1">Rencana Bulan</label>
                                  <select class="form-control col-5" name="bln">
                                    <option selected="<?= $key->bln ?>" value="<?= $key->bln ?>">=JANGAN DIUBAH BILA TAK INGIN DIGANTI=</option>
                                    <option value="1">Januari</option>
                                    <option value="2">Februari</option>
                                    <option value="3">Maret</option>
                                    <option value="4">April</option>
                                    <option value="5">Mei</option>
                                    <option value="6">Juni</option>
                                    <option value="7">Juli</option>
                                    <option value="8">Agustus</option>
                                    <option value="9">September</option>
                                    <option value="10">Oktober</option>
                                    <option value="11">November</option>
                                    <option value="12">Desember</option>
                                 </select>
                                 <br>
                                 <label for="exampleInputName1">Rencana Tahun</label>
                                 <select class="form-control col-5" name="th">
                                  <option value="<?= $key->tahun ?>">=JANGAN DIUBAH BILA TAK INGIN DIGANTI=</option>
                                    <option value="2021">2021</option>
                                    <option value="2022">2022</option>
                                    <option value="2023">2023</option>
                                    <option value="2024">2024</option>
                                    <option value="2025">2025</option>
                                    <option value="2026">2026</option>
                                    <option value="2027">2027</option>
                                    <option value="2028">2028</option>
                                    <option value="2029">2029</option>
                                    <option value="2030">2030</option>
                                  </select>
                              </div>
                           
                              <div class="form-group">
                                  <label for="exampleInputName1">Area</label>
                                 <select class="form-control select2" name="area">
                                    <option value="<?= $key->id_bidang ?>" selected="<?= $key->id_bidang ?>">Jangan Diubah bila tak ingin ubah AREA</option>
                                    <?php foreach($a_area as $y){?>
                                      
                                    <option value="<?= $y->id_bidang ?>"><?= $y->nama_bidang; ?></option>
                                  <?php } ?>
                                  </select>
                              </div>

                              <button type="submit" class="btn btn-gradient-simoneva"><i class="mdi mdi mdi-pencil-box-outline"></i> Edit Data</button>
                              <a href="<?= base_url('admin/rencana/crud_rencana/v_rencana'); ?>" class="btn btn-secondary" data-dismiss="modal">BATAL</a>
                      </div>
                    <?php } ?>
                  
                  </div>
              </div>
          
      </div>