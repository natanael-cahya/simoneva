  <!-- partial -->
  <div class="main-panel">
      <div class="content-wrapper">

          <div class="page-header">
              <h3 class="page-title">
                  <span class="page-title-icon bg-gradient-simoneva text-white mr-2">
                      <i class="mdi mdi-cogs"></i>
                  </span> Account Management
              </h3>
              <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                      <li class="breadcrumb-item"><a href="#">Akun</a></li>
                      <li class="breadcrumb-item active" aria-current="page">Info Akun</li>
                  </ol>
              </nav>
          </div>
          <div class="row">
              <div class="col-md-12 grid-margin stretch-card">
                  <div class="card">
                      <div class="card-body">
                          
                              <div class="table-responsive">
                                <?php foreach($akunx as $p){?>
                                <form method="post" action="<?= base_url('user/Dashboard/up_akun/').$p->id_auth; ?>">
                              <table class="table  table-bordered text-center table-hover">
                                  <thead>
                                      <tr class="bg-gradient-simoneva text-white">
                                          <th colspan="2">INFORMASI AKUN</th>
                                          
                                  </thead>
                                  <tbody>
                                        
                                          <tr>
                                              <td>Username</td><td><input type="text" class="form-control" value="<?= $p->username ?>"" name="user" readonly=""></td>
                                          </tr>
                                          <tr>
                                              <td>Password</td><td><input type="Password" class="form-control" name="pass" placeholder="Jika tak ingin ganti password , Jangan isi apapun"></td>
                                          </tr>
                                          <tr>
                                              <td>Nama</td><td><input type="text" class="form-control" value="<?= $p->nama ?>" name="nama"></td>
                                          </tr>
                                          <tr>
                                              <td></td><td><button class="btn btn-outline-primary">Ubah Info Akun</button></td>
                                          </tr>
                                      <?php  } ?>
                                      </form>
                                  </tbody>
                              </table>
                          </div>
                      
                      </div>
                  </div>
              </div>
          </div>
      </div>

      