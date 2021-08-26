<div class="main-panel">
      <div class="content-wrapper">

          <div class="page-header">
              <h3 class="page-title">
                  <span class="page-title-icon bg-gradient-simoneva text-white mr-2">
                      <i class="mdi mdi-home"></i>
                  </span> Data List Audit External
              </h3>
              <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                      <li class="breadcrumb-item"><a href="#">Audit External</a></li>
                      <li class="breadcrumb-item active" aria-current="page">Audit</li>
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
                                          <th>Kategori</th>
                                          <th>Area</th>
                                          <th>Evaluasi</th>
                                          <th>Rekomendasi</th>
                                          <th>Bidang PIC</th>
                                          <th>Aksi</th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                      <?php
                                        $i = 1;
                                        foreach ($ext as $ka) {
                                        ?>
                                          <tr>
                                              <td><?= $i; ?></td>
                                              <td><?= $ka->nama_kategori ?></td>
                                              <td><?= $ka->nama_area ?></td>
                                              <td><?= $ka->evaluasi_ext ?></td>
                                              <td><?= $ka->rekomendasi ?></td>
                                              <td><?= $ka->nama_bidang ?></td>
                                              <td>
                                                  <div class="row">
                                                      <div class="col text-center">
                                                          <a class="btn btn-outline-primary" href="<?= base_url('admin/audit/crud_auditE/e_auditE/').$ka->id_audit_ext ?>"><i class="mdi mdi mdi-pencil-box-outline"></i> Edit</a>
                                                          <a class="btn btn-outline-danger" href="<?= base_url('admin/audit/crud_auditE/hps_auditE/').$ka->id_audit_ext ?>"><i class="mdi mdi mdi-delete"></i> Delete</a>
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
