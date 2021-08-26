<div class="main-panel">
      <div class="content-wrapper">

          <div class="page-header">
              <h3 class="page-title">
                  <span class="page-title-icon bg-gradient-simoneva text-white mr-2">
                      <i class="mdi mdi-home"></i>
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
                        <?php $statz = $this->uri->segment(5); ?>
                        <?php $statt = $this->uri->segment(6); ?>
                        <form method="post" action="<?= base_url('admin/permintaan/crud_permintaan/up_permintaan/').$statt; ?>">
                              <div class="form-group">
                                  <label for="exampleInputEmail3">Jumlah ACC</label>
                                  <input type="hidden" name="status" value="<?= $statz ?>">
                                  <input type="text" name="jum" class="form-control" id="exampleInputEmail3" placeholder="Jumlah Yang di ACC" value="">
                              </div>
                              <div class="form-group">
                                  <label for="exampleInputEmail3">Alasan</label>
                                  <input type="text" name="ala" class="form-control" id="exampleInputEmail3" placeholder="Alasan" value="">
                              </div>
                              <button type="submit" class="btn btn-gradient-simoneva"><i class="mdi mdi mdi-pencil-box-outline"></i> ACC/Reject</button>
                              </form>
                      </div>
                    </div>
                  </div>
                </div>
</div>
