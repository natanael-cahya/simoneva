<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>SIMONEVA | Login</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="<?= base_url('assets/template/back/assets') ?>/vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="<?= base_url('assets/template/back/assets') ?>/vendors/css/vendor.bundle.base.css">
  <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="<?= base_url('assets/template/back/assets') ?>/css/style.css">
  <link rel="stylesheet" href="<?= base_url('assets/template/back/assets') ?>/css/style_login5s.css">
  <!-- End layout styles -->
  <link rel="shortcut icon" href="<?= base_url('assets/template/back/img') ?>/logo.png" />
  <style>
    .btn-5s {
      background-color: #F78D1D !important;

      color: white;
    }
  </style>
</head>

<body>

  <div class="container-fluid bg-login">
    <div class="container">
      <div class="row">
        <div class="col-lg-9 col-md-12 login-card animate__animated  animate__fadeIn">
          <div class="row">
            <div class="col-md-5 detail-part animate__animated  animate__fadeIn">
              <h1 class="animate__animated  animate__fadeInLeft">Aplikasi SIMONEVA <b>5S</b></h1>
              <p class="animate__animated  animate__fadeInDown"> Sosialisasi, Monitoring, dan Evaluasi 5S </p>
            </div>
            <div class="col-md-7 logn-part">
              <div class="row">
                <div class="col-lg-10 col-md-12 mx-auto">
                  <center>
                    <div class="logo-cover">
                      <img src="<?= base_url('assets/template/back/img') ?>/logo.png" alt="" height="130px" style="margin-left: auto; margin-right: auto;" class="animate__animated  animate__fadeIn animate__delay-1s">
                    </div>
                  </center>
                  <br>
                  <div class="form-cover">
                    <center>
                      <h6>Login untuk mengakses Aplikasi ini</h6>
                    </center>

                    <form method="POST" action="<?= base_url('login'); ?>">
                      <div class="form-group has-feedback">
                        <input type="text" class="form-control" placeholder="Username" name="user" id="username">
                        <span class="glyphicon glyphicon-user form-control-feedback"></span>
                      </div>
                      <div class="form-group has-feedback">
                        <input type="password" class="form-control" placeholder="Password" name="pass" id="password">
                        <span class="form-control-feedback "></span>
                      </div>

                      <div class="row form-footer">
                        <div class="col-md-6 forget-paswd">
                          <a href=""></a>
                        </div>
                        <div class="col-md-6 button-div">
                          <button href="<?= base_url('assets/template/back/assets') ?>html" class="btn btn-5s btn-block auth-form-btn" name="ok"> <i class="fas fa-sign-in-alt" aria-hidden="true"></i> Masuk</button>
                        </div>
                      </div>
                  </div>
                </div>
              </div>

              </form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="<?= base_url('assets/template/back/assets') ?>/vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="<?= base_url('assets/template/back/assets') ?>/js/off-canvas.js"></script>
  <script src="<?= base_url('assets/template/back/assets') ?>/js/hoverable-collapse.js"></script>
  <script src="<?= base_url('assets/template/back/assets') ?>/js/misc.js"></script>
  <!-- endinject -->
</body>

</html>