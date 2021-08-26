
  <div class="main-panel">
      <div class="content-wrapper">

          <div class="page-header">
              <h3 class="page-title">
                  <span class="page-title-icon bg-gradient-simoneva text-white mr-2">
                      <i class="mdi mdi-file-table"></i>
                  </span> Buat Rencana Kerja 
              </h3>
              <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                      <li class="breadcrumb-item"><a href="#">Plan & Real</a></li>
                      <li class="breadcrumb-item active" aria-current="page">Buat Rencana Kerja</li>
                  </ol>
              </nav>
          </div>
          <div class="row">
              <div class="col-md-12 grid-margin stretch-card">
                  <div class="card">
                      <div class="card-body">
                    <form  method="post" enctype="multipart/form-data" action="<?= base_url('admin/rencana/crud_rencana/tmbah_rencana'); ?>">
                       <div class="form-group">
                        <label for="exampleInputPassword4">PIC BIDANG</label>
                        <select class="form-control" name="pic">
                        <?php
                        foreach ($pic as $key) {
                          $p=$key->nama_area;
                        ?>
                        
                        <option value="<?= $key->id_bidang ?>"><?= $key->nama_bidang ?></option>
                        
                      <?php } ?>
                      
                      </select>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputName1">Nama Program</label>
                        <input type="text" name="program" class="form-control" id="exampleInputName1" placeholder="Nama Program">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail3">Rencana Pengerjaan</label>
                        <select class="form-control col-5" name="minggu">
                          <option>==== Januari ====</option>
                          <option value="1">Minggu ke 1</option>
                          <option value="2">Minggu ke 2</option>
                          <option value="3">Minggu ke 3</option>
                          <option value="4">Minggu ke 4</option>
                          
                           <option>==== Februari ====</option>
                          <option value="5">Minggu ke 1</option>
                          <option value="6">Minggu ke 2</option>
                          <option value="7">Minggu ke 3</option>
                          <option value="8">Minggu ke 4</option>
                           <option>==== Maret ====</option>
                          <option value="9">Minggu ke 1</option>
                          <option value="10">Minggu ke 2</option>
                          <option value="11">Minggu ke 3</option>
                          <option value="12">Minggu ke 4</option>
                           <option>==== April ====</option>
                          <option value="13">Minggu ke 1</option>
                          <option value="14">Minggu ke 2</option>
                          <option value="15">Minggu ke 3</option>
                          <option value="16">Minggu ke 4</option>
                           <option>==== Mei ====</option>
                          <option value="17">Minggu ke 1</option>
                          <option value="18">Minggu ke 2</option>
                          <option value="19">Minggu ke 3</option>
                          <option value="20">Minggu ke 4</option>
                           <option>==== Juni ====</option>
                          <option value="21">Minggu ke 1</option>
                          <option value="22">Minggu ke 2</option>
                          <option value="23">Minggu ke 3</option>
                          <option value="24">Minggu ke 4</option>
                           <option>==== Juli ====</option>
                          <option value="25">Minggu ke 1</option>
                          <option value="26">Minggu ke 2</option>
                          <option value="27">Minggu ke 3</option>
                          <option value="28">Minggu ke 4</option>
                           <option>==== Agustus ====</option>
                          <option value="29">Minggu ke 1</option>
                          <option value="30">Minggu ke 2</option>
                          <option value="31">Minggu ke 3</option>
                          <option value="32">Minggu ke 4</option>
                           <option>==== September ====</option>
                          <option value="33">Minggu ke 1</option>
                          <option value="34">Minggu ke 2</option>
                          <option value="35">Minggu ke 3</option>
                          <option value="36">Minggu ke 4</option>
                           <option>==== Oktober ====</option>
                          <option value="37">Minggu ke 1</option>
                          <option value="38">Minggu ke 2</option>
                          <option value="39">Minggu ke 3</option>
                          <option value="40">Minggu ke 4</option>
                           <option>==== November ====</option>
                          <option value="41">Minggu ke 1</option>
                          <option value="42">Minggu ke 2</option>
                          <option value="43">Minggu ke 3</option>
                          <option value="44">Minggu ke 4</option>
                           <option>==== Desember ====</option>
                          <option value="45">Minggu ke 1</option>
                          <option value="46">Minggu ke 2</option>
                          <option value="47">Minggu ke 3</option>
                          <option value="48">Minggu ke 4</option>

                        </select>
                        <select class="form-control col-5" name="bulan">
                  <option value="1">Januari</option>
                  <option value="2">Februari</option>
                  <option value="3">Maret</option>
                  <option value="4">April</option>
                  <option value="5">Mei</option>
                  <option value="6">Juni</option>
                  <option value="7">Juli</option>
                  <option value="8">Agustus</option>
                  <option value="9">September</option>
                  <option value="10">Oktober</option>
                  <option value="11">November</option>
                  <option value="12">Desember</option>
                </select>
                       <select class="form-control col-5" name="th">
                          <option value="2021">2021</option>
                          <option value="2022">2022</option>
                          <option value="2023">2023</option>
                          <option value="2024">2024</option>
                          <option value="2025">2025</option>
                          <option value="2026">2026</option>
                          <option value="2027">2027</option>
                          <option value="2028">2028</option>
                          <option value="2029">2029</option>
                          <option value="2030">2030</option>
                        </select>
                      </div>
                     
                      <div class="form-group">
                        <label>Foto Before</label>
                        
                        <div class="input-group col-xs-12">
                          <input type="file" class="form-control file-upload-info" name="berkas" placeholder="Upload Foto">
                        </div>
                      </div>
                      <button type="submit" class="btn btn-gradient-simoneva mr-2">Buat Rencana Kerja</button>
                     </form>
                  
                      </div>
                  </div>
              </div>
          </div>
        </div>
  

      

   