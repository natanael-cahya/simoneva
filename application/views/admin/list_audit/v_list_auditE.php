
  <div class="main-panel">
      <div class="content-wrapper">

          <div class="page-header">
              <h3 class="page-title">
                  <span class="page-title-icon bg-gradient-simoneva text-white mr-2">
                      <i class="mdi mdi-home"></i>
                  </span> Audit External
              </h3>
              <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                      <li class="breadcrumb-item"><a href="#">Check List</a></li>
                      <li class="breadcrumb-item active" aria-current="page">Buat List</li>
                  </ol>
              </nav>
          </div>
          <div class="row">
              <div class="col-md-12 grid-margin stretch-card">
                  <div class="card">
                      <div class="card-body">
                    <form class="forms-sample" method="post" action="<?= base_url('admin/audit/crud_auditE/tb_auditE'); ?>">
                       <div class="form-group" style="display: none;">
                        <input type="text" name="bdg" value="<?= $kd_bidang ?>">
                        <input type="text" name="kate" value="<?= $kd_kategori ?>">
                        <input type="text" value="<?= $kd_area ?>" name="are">
                      </div>
                       <div class="form-group">
                        <label for="exampleInputPassword4">PIC BIDANG</label>
                        <?php foreach($bid as $bidz){ ?>
                        <input type="text" value="<?= $bidz->nama_bidang ?>" class="form-control" readonly="" >
                      <?php } ?>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword4">Kategori Area</label>
                        <?php foreach($kate as $bidz){ ?>
                        <input type="text" value="<?= $bidz['nama_kategori'] ?>" class="form-control" readonly="" >
                      <?php } ?>
                      </div>
                       <div class="form-group">
                        <label for="exampleInputEmail3">Area Audit</label>
                        <?php foreach($kat as $katz){ ?>
                        <input type="text" value="<?= $katz->nama_area; ?>" class="form-control" id="exampleInputName1"  readonly="">
                      <?php } ?>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputName1">Evaluasi</label>
                        <input type="text" name="eva" class="form-control" id="exampleInputName1" placeholder="Evaluasi">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail3">Tindak Rekomendasi</label>
                        <input type="text" name="rekom" class="form-control" id="exampleInputName1" placeholder="Rekomendasi">
                      </div>
                     
                      <div class="form-group">
                        <label>Foto Before</label>
                        <input type="file" name="image" class="file-upload-default">
                        <div class="input-group col-xs-12">
                          <input type="file" class="form-control file-upload-info" name="bef" placeholder="Upload Foto">
                        </div>
                      </div>
                      <button type="submit" class="btn btn-gradient-simoneva mr-2">Simpan Audit</button>
                     </form>
                  
                      </div>
                  </div>
              </div>
          </div>
        </div>
      