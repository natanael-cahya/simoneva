<div class="container-scroller">
  <!-- partial:partials/_navbar.html -->
  <nav class="navbar  bg-gradient-simoneva default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
    <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
      <a class="navbar-brand brand-logo" href="<?= base_url('admin/Dashboard'); ?>"><strong>SIMONEVA 5S</strong> <small>v.1.0</small></a>
      <a class="navbar-brand brand-logo-mini" href="<?= base_url('admin/Dashboard'); ?>"><img src="<?= base_url('assets/template/back/img  ') ?>/logo.png" alt="logo" /></a>
    </div>
    <div class="navbar-menu-wrapper d-flex align-items-stretch">
      <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
        <span class="mdi mdi-menu"></span>
      </button>

      <ul class="navbar-nav navbar-nav-right">
        <li class="nav-item nav-profile dropdown">
          <a class="nav-link dropdown-toggle" id="profileDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
            <div class="nav-profile-img">
              <img src="<?= base_url('assets/template/back/img') ?>/logo.png" alt="image">
              <span class="availability-status online"></span>
            </div>
            <div class="nav-profile-text">
              <p class="mb-1 text-white"><?= $user['nama']; ?></p>
            </div>
          </a>
          <div class="dropdown-menu navbar-dropdown" aria-labelledby="profileDropdown">
            <a class="dropdown-item" href="#">
              <i class="mdi mdi-cached mr-2 text-success"></i> Activity Log </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="<?= base_url('login/logout'); ?>">
              <i class="mdi mdi-logout mr-2 text-primary"></i> Signout </a>
          </div>
        </li>
        <li class="nav-item d-none d-lg-block full-screen-link">
          <a class="nav-link">
            <i class="mdi mdi-fullscreen" id="fullscreen-button"></i>
          </a>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-toggle="dropdown">
            <i class="mdi mdi-bell-outline"></i>
            <?php 
            $jum=count($dataa);
            foreach ($dataax as $key) {
            } 
            if($jum > 0){
                echo"<span class='count-symbol bg-warning'></span>";
              }else{
                echo" ";
              }
           // echo $jum;
            ?>
          </a>
          </a>
          
          <!--MULAI NOTIF-->
          <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
            <h6 class="p-3 mb-0">Notifikasi</h6>
             <?php 
            
            foreach ($dataa as $keyz) {
             ?>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item preview-item" href="<?= base_url('user/permintaan/crud_permintaan/un_permintaan');?>">
              <div class="preview-thumbnail">
                <div class="preview-icon bg-success">
                  <i class="mdi mdi-archive"></i>
                </div>
              </div>
             
              <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                <h6 class="preview-subject font-weight-normal mb-1">Permintaan <?= $keyz->nama_bidang ?></h6>
                <p class="text-gray ellipsis mb-0"> <?= $keyz->nama_barang ?> , Segera upload nota</p>
              </div>
            </a>
            <!--END NOTIF-->
            <div class="dropdown-divider"></div>
            <?php } ?>
            <h6 class="p-3 mb-0 text-center"><a href="<?= base_url('user/permintaan/crud_permintaan/un_permintaan');?>">Lihat Semua Notifikasi</a></h6>
          </div>
        </li>

      </ul>
      <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
        <span class="mdi mdi-menu"></span>
      </button>
    </div>
  </nav>
  <!-- partial -->
  <div class="container-fluid page-body-wrapper">
    <!-- partial:partials/_sidebar.html -->
    <nav class="sidebar sidebar-offcanvas" id="sidebar">
      <ul class="nav">
        <li class="nav-item nav-profile">
          <a href="#" class="nav-link">
            <div class="nav-profile-image">
              <img src="<?= base_url('assets/template/back') ?>/img/logo.png" alt="profile">
              <span class="login-status online"></span>
              <!--change to offline or busy as needed-->
            </div>
            <div class="nav-profile-text d-flex flex-column">
              <span class="font-weight-bold mb-2"><?= $user['nama']; ?></span>
              <span class="text-secondary text-small">
                <?php
                if ($user['role'] == 1) {
                  echo "Admin";
                } else
                if ($user['role'] == 2) {
                  echo "Auditor";
                } else {
                  echo "PIC";
                }
                ?>

              </span>
            </div>
            <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
          </a>
        </li>
            <li class="nav-item">
              <a class="nav-link" href="<?= base_url('user/Dashboard'); ?>">
                <span class="menu-title">Dashboard</span>
                <i class="mdi mdi-home menu-icon"></i>
              </a>
            </li>
             <li class=" nav-item">
                  <a class="nav-link" data-toggle="collapse" href="#a" aria-expanded="false" aria-controls="a">
                    <span class="menu-title">Plan & Real</span>
                    <i class="menu-arrow"></i>
                     <i class="mdi mdi-file-table menu-icon"></i>
                  </a>
                  <div class="collapse" id="a">
                    <ul class="nav flex-column sub-menu">
                      <li class="nav-item"> <a class="nav-link" href="<?= base_url('user/rencana/crud_rencana/'); ?>">Buat Rencana Kerja</a></li>
                      <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('user/rencana/crud_rencana/v_rencana'); ?>">Belum Ter-Realisasi</a>
                      </li>
                      <li class="nav-item"> <a class="nav-link" href="<?= base_url('user/rencana/crud_rencana/r_rencana'); ?>">Ter-Realisasi</a></li>
                    </ul>
                  </div>
              </li>
          <li class=" nav-item">
                  <a class="nav-link" data-toggle="collapse" href="#agg" aria-expanded="false" aria-controls="agg">
                    <span class="menu-title">Material</span>
                    <i class="menu-arrow"></i>
                     <i class="mdi mdi-archive menu-icon"></i>
                  </a>
                  <div class="collapse" id="agg">
                    <ul class="nav flex-column sub-menu">
                      <li class="nav-item"> <a class="nav-link" href="<?= base_url('user/permintaan/crud_permintaan/vtb_permintaan'); ?>">Request Material</a></li>
                      <li class="nav-item"> <a class="nav-link" href="<?= base_url('user/permintaan/crud_permintaan/v_permintaan'); ?>">Proses ACC Material</a></li>
                      <li class="nav-item"> <a class="nav-link" href="<?= base_url('user/permintaan/crud_permintaan/un_permintaan'); ?>">Upload Nota</a></li>
                      <li class="nav-item"> <a class="nav-link" href="<?= base_url('user/permintaan/crud_permintaan/r_permintaan'); ?>">Riwayat Req-Material</a></li>
                    </ul>
                  </div>
              </li>
         <li class="nav-item">
              <a class="nav-link" target="_blank" href="<?= base_url('user/laporan/claporan/piliha'); ?>">
                <span class="menu-title">Laporan Audit</span>
                <i class="mdi mdi-file-pdf menu-icon"></i>
              </a>
            </li>
             <li class="nav-item">
              <a class="nav-link" target="_blank" href="<?= base_url('user/laporan/claporan/laporan'); ?>">
                <span class="menu-title">Laporan Rencana & Real</span>
                <i class="mdi mdi-file-chart menu-icon"></i>
              </a>
            </li>
          <li class="nav-item">
              <a class="nav-link" href="<?= base_url('user/Dashboard/akun'); ?>">
                <span class="menu-title">Akun</span>
                <i class="mdi mdi-cogs menu-icon"></i>
              </a>
            </li>
              
              
         
           
           
          </ul>
        </nav>
    