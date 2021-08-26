<div class="container-scroller">
  <!-- partial:partials/_navbar.html -->
  <nav class="navbar  bg-gradient-simoneva default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
    <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
      <a class="navbar-brand brand-logo" href="<?= base_url('auditor/Dashboard'); ?>"><strong>SIMONEVA 5S</strong> <small>v.1.0</small></a>
      <a class="navbar-brand brand-logo-mini" href="<?= base_url('auditor/Dashboard'); ?>"><img src="<?= base_url('assets/template/back/img  ') ?>/logo.png" alt="logo" /></a>
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
              <p class="mb-1 text-white"><?= $auditor['nama']; ?></p>
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

         
      </nav>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
            <li class="nav-item nav-profile">
              <a href="#" class="nav-link">
                <div class="nav-profile-image">
                  <img src="<?=  base_url('assets/template/back')?>/img/logo.png" alt="profile">
                  <span class="login-status online"></span>
                  <!--change to offline or busy as needed-->
                </div>
                 <div class="nav-profile-text d-flex flex-column">
              <span class="font-weight-bold mb-2"><?= $auditor['nama']; ?></span>
              <span class="text-secondary text-small">
                <?php
                if ($auditor['role'] == 1) {
                  echo "Admin";
                } else
                if ($auditor['role'] == 2) {
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
              <a class="nav-link" href="<?= base_url('auditor/Dashboard'); ?>">
                <span class="menu-title">Dashboard</span>
                <i class="mdi mdi-home menu-icon"></i>
              </a>
            </li>
           
        <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#bb" aria-expanded="false" aria-controls="bb">
                  <span class="menu-title">Audit Internal</span>
                  <i class="menu-arrow"></i>
                  <i class="mdi mdi-clipboard-plus menu-icon"></i>
                </a>
                <div class="collapse" id="bb">
                  <div class=" dropdown dropup">
                    <div class="nav-link dropdown-toggle nav-link" type="button" id="dropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      List Audit
                    </div>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                      <a class="dropdown-item" href="<?= base_url('auditor/audit/crud_list_audit/v_list_audit'); ?>">Gudang</a>
                      <a class="dropdown-item" href="<?= base_url('auditor/audit/crud_list_audit/v_auditW'); ?>">Workshop</a>
                      <a class="dropdown-item" href="<?= base_url('auditor/audit/crud_list_audit/v_auditp'); ?>">Produksi</a>
                      <a class="dropdown-item" href="<?= base_url('auditor/audit/crud_list_audit/v_auditl'); ?>">Lingkungan</a>
                      <a class="dropdown-item" href="<?= base_url('auditor/audit/crud_list_audit/v_audito'); ?>">Office</a>
                    </div>
                  <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="<?= base_url('auditor/penilaian/crud_penilaian/pilihh'); ?>">Mulai Audit
                      </a></li>
                    <li class="nav-item"> <a class="nav-link" href="<?= base_url('auditor/penilaian/crud_penilaian/r_penilaian'); ?>">Riwayat Audit</a></li>
                  </ul>
                  
                  </div>
              </li>
            <li class="nav-item">
              <a class="nav-link" href="<?= base_url('auditor/Dashboard/akun'); ?>">
                <span class="menu-title">Akun</span>
                <i class="mdi mdi-cogs menu-icon"></i>
              </a>
            </li>
          </ul>
        </nav>
       