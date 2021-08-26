<div class="main-panel">
    <div class="content-wrapper">

        <div class="page-header">
            <h3 class="page-title">
                <span class="page-title-icon bg-gradient-simoneva text-white mr-2">
                    <i class="mdi mdi-home"></i>
                </span> Data Riwayat Penilaian
            </h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Manage Area & 5s</a></li>
                    <li class="breadcrumb-item active" aria-current="page">S5</li>
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
                                        <th>Check List</th>
                                        <th>Saran</th>
                                        <th>Tanggal Audit</th>
                                        <th>Area audit</th>
                                        <th>EVIDEN</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $i = 1;
                                    foreach ($joinn as $ka) {
                                    ?>
                                        <tr>
                                            <td><?= $i; ?></td>
                                            <td><?= $ka->kat_deskripsi ?></td>
                                            <td><?= $ka->deskripsi ?></td>
                                            <td><?= $ka->tanggal_nilai ?></td>
                                            <td><?= $ka->nama_area ?></td>
                                            <td>
                                                <a class="image-popup-vertical-fit" href=" <?= base_url('upload_img/penilaian/') . $ka->image ?>  ">
                                                    <img data-toggle="tooltip" data-placement="top" title="Klik untuk memperbesar Gambar" style="border-radius: 0% !important;" src=" <?= base_url('upload_img/penilaian/') . $ka->image ?>  ">
                                                </a>
                                                <a class="image-popup-vertical-fit" href=" <?= base_url('upload_img/penilaian/') . $ka->image2 ?>  ">
                                                    <img data-toggle="tooltip" data-placement="top" title="Klik untuk memperbesar Gambar" style="border-radius: 0% !important;" src=" <?= base_url('upload_img/penilaian/') . $ka->image2 ?>  ">
                                                </a>
                                                <a class="image-popup-vertical-fit" href=" <?= base_url('upload_img/penilaian/') . $ka->image3 ?>  ">
                                                    <img data-toggle="tooltip" data-placement="top" title="Klik untuk memperbesar Gambar" style="border-radius: 0% !important;" src=" <?= base_url('upload_img/penilaian/') . $ka->image3 ?>  ">
                                                </a>
                                            </td>

                                            <td>
                                                <div class="row">
                                                    <div class="col text-center">
                                                        <a class="btn btn-outline-primary" href=""><i class="mdi mdi mdi-pencil-box-outline"></i> Edit</a>
                                                        <a class="btn btn-outline-danger" href=""><i class="mdi mdi mdi-delete"></i> Delete</a>
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