 <!-- partial -->
 <div class="main-panel">
     <div class="content-wrapper">

         <div class="page-header">
             <h3 class="page-title">
                 <span class="page-title-icon bg-gradient-simoneva text-white mr-2">
                     <i class="mdi mdi-home"></i>
                 </span> Dashboard
             </h3>
             <nav aria-label="breadcrumb">
                 <ul class="breadcrumb">
                     <li class="breadcrumb-item active" aria-current="page">
                         <!-- <span></span>Overview <i class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle"></i> -->
                     </li>
                 </ul>
             </nav>
         </div>
         <div class="row">

             <div class="col-md-3 stretch-card grid-margin" ">
                <div class=" card bg-gradient-danger card-img-holder text-white" style="-webkit-box-shadow: 0px 2px 24px -1px rgba(254,157,150,1);
-moz-box-shadow: 0px 2px 24px -1px rgba(254,157,150,1);
box-shadow: 0px 2px 24px -1px rgba(254,157,150,1);">
                 <div class="card-body">
                     <img src="<?= base_url('assets/template/back/assets') ?>/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
                     <h4 class="font-weight-normal mb-3">Plan & Real <i class="mdi mdi-chart-line mdi-24px float-right"></i>
                     </h4>

                     <?php 
                     $oo=count($pr); 
                     foreach($pr as $keyy);
                        ?>
                     <h2 class="mb-5"><?= $oo; ?></h2>
                 
                 </div>
             </div>
         </div>
         <div class="col-md-3 stretch-card grid-margin">
             <div class="card bg-gradient-info card-img-holder text-white" style="-webkit-box-shadow: 0px 2px 24px -1px rgba(72,163,235,1);
-moz-box-shadow: 0px 2px 24px -1px rgba(72,163,235,1);
box-shadow: 0px 2px 24px -1px rgba(72,163,235,1);">
                 <div class="card-body">
                     <img src="<?= base_url('assets/template/back/assets') ?>/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
                     <h4 class="font-weight-normal mb-3">Manage Auditor <i class="mdi mdi-bookmark-outline mdi-24px float-right"></i>
                     </h4>
                     <h2 class="mb-5">4</h2>

                 </div>
             </div>
         </div>
         <div class="col-md-3 stretch-card grid-margin">
             <div class="card bg-gradient-success card-img-holder text-white" style="-webkit-box-shadow: 0px 2px 24px -1px rgba(73,211,193,1);
-moz-box-shadow: 0px 2px 24px -1px rgba(73,211,193,1);
box-shadow: 0px 2px 24px -1px rgba(73,211,193,1);">
                 <div class="card-body">
                     <img src="<?= base_url('assets/template/back/assets') ?>/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
                     <h4 class="font-weight-normal mb-3">Permintaan Material <i class="mdi mdi-diamond mdi-24px float-right"></i>
                     </h4>
                     <h2 class="mb-5">1</h2>

                 </div>
             </div>
         </div>
         <div class="col-md-3 stretch-card grid-margin">
             <div class="card bg-gradient-warning card-img-holder text-white" style="-webkit-box-shadow: 0px 2px 24px -1px rgba(251,220,68,1);
-moz-box-shadow: 0px 2px 24px -1px rgba(251,220,68,1);
box-shadow: 0px 2px 24px -1px rgba(251,220,68,1);">
                 <div class="card-body">
                     <img src="<?= base_url('assets/template/back/assets') ?>/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
                     <h4 class="font-weight-normal mb-3">laporan <i class="mdi mdi-diamond mdi-24px float-right"></i>
                     </h4>
                     <h2 class="mb-5">1</h2>

                 </div>
             </div>
         </div>
         <div class="col-md-12 stretch-card grid-margin">
             <div class="card">
                 <h5 class="card-header bg-gradient-simoneva text-white"><i class="mdi mdi-account"></i> Informasi Akun <div class="float-right"><i class="mdi mdi-calendar"></i>: <?= date('d-m-Y'); ?></div>
                 </h5>

                 <div class="card-body">
                     <h5 class="card-title">Anda login sebagai:</h5>
                     <h2 class="card-text">

                         <h2>
                             <a href="#" class="btn btn-primary"> <?php if($admin['role'] == 1){echo"Admin Simoneva";} ?></a>
                 </div>
             </div>
         </div>
         <div class="col-lg-6 grid-margin stretch-card">
             <div class="card">
                 <div class="card-header bg-gradient-simoneva text-white"><B>Top 5 PIC</B>
                 </div>
                 <div class="card-body">
                     <!-- <h4 class="card-title ">Bar chart</h4> -->
                     <canvas id="barChart" style="height:230px"></canvas>
                 </div>
             </div>
         </div>
         <div class="col-lg-6 grid-margin stretch-card">
             <div class="card">
                 <div class="card-header bg-gradient-simoneva text-white"><B>Top 1 PIC</B>
                 </div>
                 <div class="card-body">
                     <!-- <h4 class="card-title ">Bar chart</h4> -->
                     <canvas id="barChart2" style="height:230px"></canvas>
                 </div>
             </div>
         </div>
     </div>



 </div>