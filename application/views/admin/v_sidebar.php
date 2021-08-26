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
              <p class="mb-1 text-white"><?= $admin['nama']; ?></p>
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
            $jum = count($dataa);
            foreach ($dataax as $key) {
            }
            if ($jum > 0) {
              echo "<span class='count-symbol bg-warning'></span>";
            } else {
              echo "";
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
              <a class="dropdown-item preview-item" href="<?= base_url('admin/permintaan/crud_permintaan/v_permintaan'); ?>">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-success">
                    <i class="mdi mdi-archive"></i>
                  </div>
                </div>

                <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                  <h6 class="preview-subject font-weight-normal mb-1">Permintaan <?= $keyz->nama_bidang ?></h6>
                  <p class="text-gray ellipsis mb-0"> <?= $keyz->nama_barang ?> , Menunggu Persetujuan</p>
                  <p> <?= $keyz->tgl ?></p>
                </div>
              </a>
              <!--END NOTIF-->
              <div class="dropdown-divider"></div>
            <?php } ?>
            <h6 class="p-3 mb-0 text-center"><a href="<?= base_url('admin/permintaan/crud_permintaan/v_permintaan'); ?>">Lihat semua Notifikasi</a></h6>
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
              <span class="font-weight-bold mb-2"><?= $admin['nama']; ?></span>
              <span class="text-secondary text-small">
                <?php
                if ($admin['role'] == 1) {
                  echo "Admin";
                } else
                if ($admin['role'] == 2) {
                  echo "Auditor";
                } else {
                  echo "user";
                }
                ?>


              </span>
            </div>
            <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= base_url('dashboard'); ?> ">
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
              <li class="nav-item"> <a class="nav-link" href="<?= base_url('buat-rencana'); ?>">Buat Rencana Kerja</a></li>
              <li class="nav-item">
                <a class="nav-link" href="<?= base_url('data-rencana'); ?>">Belum Ter-Realisasi</a>
              </li>
              <li class="nav-item"> <a class="nav-link" href="<?= base_url('riwayat-rencana'); ?>">Ter-Realisasi</a></li>
            </ul>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= base_url('request-material'); ?>">
            <span class="menu-title">Material</span>
            <i class="mdi mdi-archive menu-icon"></i>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= base_url('data-bidang'); ?>">
            <span class="menu-title">Bidang</span>
            <i class="mdi mdi-account-box-outline menu-icon"></i>
          </a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link" data-toggle="collapse" href="#az" aria-expanded="false" aria-controls="az">
            <span class="menu-title">Manage Area & S5</span>
            <i class="menu-arrow"></i>
            <i class="mdi mdi-apps menu-icon"></i>
          </a>
          <div class="collapse" id="az">
            <ul class="nav flex-column sub-menu">
              <li class="nav-item"> <a class="nav-link" href="<?= base_url('s5'); ?>">S5</a></li>
              <li class="nav-item"> <a class="nav-link" href="<?= base_url('kategori'); ?>">Kategori area</a></li>
              <li class="nav-item"> <a class="nav-link" href="<?= base_url('area'); ?>">Area</a></li>

            </ul>

          </div>
        </li>
        <li class=" nav-item">
          <a class="nav-link" data-toggle="collapse" href="#atz" aria-expanded="false" aria-controls="at">
            <span class="menu-title">Audit External</span>
            <i class="menu-arrow"></i>
            <i class="mdi mdi-clipboard menu-icon"></i>
          </a>
          <div class="collapse" id="atz">
            <ul class="nav flex-column sub-menu">
              <li class="nav-item"> <a class="nav-link" href="<?= base_url('input-audit-ex'); ?>">input Audit</a></li>

              <li class="nav-item"> <a class="nav-link" href="<?= base_url('riwayat-audit-ex'); ?>">Riwayat Audit</a></li>
            </ul>
          </div>
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
                <a class="dropdown-item" href="<?= base_url('list-gudang'); ?>">Gudang</a>
                <a class="dropdown-item" href="<?= base_url('list-workshop'); ?>">Workshop</a>
                <a class="dropdown-item" href="<?= base_url('list-produksi'); ?>">Produksi</a>
                <a class="dropdown-item" href="<?= base_url('list-lingkungan'); ?>">Lingkungan</a>
                <a class="dropdown-item" href="<?= base_url('list-office'); ?>">Office</a>
              </div>
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="<?= base_url('input-audit-in'); ?>">Mulai Audit
                  </a></li>
                <li class="nav-item"> <a class="nav-link" href="<?= base_url('riwayat-audit-in'); ?>">Riwayat Audit</a></li>
              </ul>

            </div>
        </li>


        <li class="nav-item">
          <a class="nav-link" href="<?= base_url('register'); ?> ">
            <span class="menu-title">Akun</span>
            <i class="mdi mdi-account menu-icon"></i>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= base_url('admin/report/crud_report/report_ext'); ?>" target="_blank">
            <span class="menu-title">Report Audit External</span>
            <i class="mdi mdi-archive menu-icon"></i>
          </a>
        </li>
        <li class=" nav-item">
          <a class="nav-link" target="_blank" href="<?= base_url('admin/report/crud_report/pilihh'); ?>">
            <span class="menu-title">Laporan Rencana Kerja</span>
            <i class="menu-arrow"></i>
            <i class="mdi mdi-file-download menu-icon"></i>
          </a>
          <div class="collapse" id="atgh">
            <ul class="nav flex-column sub-menu">
              <li class="nav-item"> <a class="nav-link" href="<?= base_url('laporan-gudang'); ?>" target="_blank">Gudang</a></li>
              <li class="nav-item"> <a class="nav-link" href="<?= base_url('laporan-workshop'); ?>" target="_blank">Workshop</a></li>
              <li class="nav-item"> <a class="nav-link" href="<?= base_url('laporan-lingkungan'); ?>" target="_blank">Lingkungan</a></li>
              <li class="nav-item"> <a class="nav-link" href="<?= base_url('laporan-produksi'); ?>" target="_blank">Produksi</a></li>
              <li class="nav-item"> <a class="nav-link" href="<?= base_url('laporan-office'); ?>" target="_blank">Office</a></li>
            </ul>
          </div>
        </li>
        <li class=" nav-item">
          <a class="nav-link" data-toggle="collapse" href="#atg" aria-expanded="false" aria-controls="atg">
            <span class="menu-title">Laporan Audit</span>
            <i class="menu-arrow"></i>
            <i class="mdi mdi-file-chart menu-icon"></i>
          </a>
          <div class="collapse" id="atg">
            <ul class="nav flex-column sub-menu">
              <li class="nav-item"> <a class="nav-link" href="<?= base_url('laporan-gudang'); ?>" target="_blank">Gudang</a></li>
              <li class="nav-item"> <a class="nav-link" href="<?= base_url('laporan-workshop'); ?>" target="_blank">Workshop</a></li>
              <li class="nav-item"> <a class="nav-link" href="<?= base_url('laporan-lingkungan'); ?>" target="_blank">Lingkungan</a></li>
              <li class="nav-item"> <a class="nav-link" href="<?= base_url('laporan-produksi'); ?>" target="_blank">Produksi</a></li>
              <li class="nav-item"> <a class="nav-link" href="<?= base_url('laporan-office'); ?>" target="_blank">Office</a></li>
            </ul>
          </div>
        </li>
        <li class=" nav-item">
          <a class="nav-link" data-toggle="collapse" href="#lp" aria-expanded="false" aria-controls="lp">
            <span class="menu-title">Pengaturan Homepage</span>
            <i class="menu-arrow"></i>
            <i class="mdi mdi-cogs menu-icon"></i>
          </a>
          <div class="collapse" id="lp">
            <ul class="nav flex-column sub-menu">
              <li class="nav-item"> <a class="nav-link" href="<?= base_url('tentang_5s'); ?>">Tentang 5S</a></li>
              <li class="nav-item">
                <a class="nav-link" href="<?= base_url('kebijakan_5s'); ?>">Kebijakan 5S </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?= base_url('komitmen_5s'); ?>">Komitmen 5S </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?= base_url('dokumentasi'); ?>">Dokumentasi 5S </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?= base_url('struktur'); ?>">Struktur Area 5S </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?= base_url('pob'); ?>">POB 5S </a>
              </li>
            </ul>
          </div>
        </li>
      </ul>
    </nav>