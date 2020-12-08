<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="shortcut icon" href="<?= site_url('assets/images/logo.jpeg'); ?>" />
  <link rel="icon" type="image/png" href="">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Datasoft - landing page
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no'
  name='viewport' />
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
  <link rel="stylesheet" href="<?= site_url('assets/lpage/css/bootstrap.min.css'); ?>">
  <link rel="stylesheet" href="<?= site_url('assets/lpage/css/paper-kit.css'); ?>">
  <link rel="stylesheet" href="<?= site_url('assets/sweetalert/sweetalert.css'); ?>">
  <link href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">

  <script src="<?= site_url('assets/sweetalert/sweetalert.min.js'); ?>"></script>

  <script src="<?= site_url('assets/cus.js'); ?>"></script>
  <style>
    .select2-selection__rendered {
      line-height: 33px !important;
      font-size: 15px !important;
      border-color: transparent !important;
    }
    .select2-container .select2-selection--single {
      height: 37px !important;
    }
    .select2-selection__arrow {
      height: 40px !important;
    }
    .select2-results__option { 
      font-size: 14px !important;
    }
    #regis{
      background-image: url('assets/lpage/img/botro2.png'); 
      background-size: 100%; background-repeat: no-repeat;
    }
    .msf-form form fieldset { display: none; overflow: hidden; }
    @media (max-width: 575.98px) {
      #bgne{
        background-repeat: no-repeat;
        background-position: 70%;
      }
      #imgne{
        display: none;
      }
      #regis{
        background-size: 1500px;
      }
    }
    @media (max-width: 767.98px) {
      #dsosia{
        display: none;
      }
      #imgne{
        width: 100% !important;
      }
    }
    @media (max-width: 991.98px) {
      #imgne{
        width: 100% !important;
      }
    }
  </style>
</head>

<body class="index-page sidebar-collapse">

  <!-- navbar  -->
  <nav class="navbar navbar-expand-lg fixed-top navbar-transparent " color-on-scroll="300">
      <div class="container">
        <div class="navbar-translate">
          <a class="navbar-brand" href="" rel="tooltip" style="color: rgb(77, 77, 77) !important" data-placement="bottom">
            DATASOFT
          </a>
          <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation"
          aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation" style="color: black">
          <span class="navbar-toggler-bar bar1" style="color: black !important"></span>
          <span class="navbar-toggler-bar bar2" style="color: black !important"></span>
          <span class="navbar-toggler-bar bar3" style="color: black !important"></span>
        </button>
      </div>
      <div class="collapse navbar-collapse justify-content-end" id="navigation">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a href="#" class="nav-link" id="scroll">Beranda</a>
          </li>
          <li class="nav-item">
            <a href="#alur" class="nav-link" id="scroll1">Alur</a>
          </li>
          <li class="nav-item">
            <a href="#regis" class="nav-link" id="scroll2">Registrasi</a>
          </li>
          <li class="nav-item">
            <a href="<?= site_url('Auth') ?>" class="btn btn-primary btn-round">login</a>
          </li>
        </ul>
      </div>
  </nav>
  <!-- End Navbar -->

  <!-- header  -->
  <div class="page-header" id="bgne" style="background-image: url('assets/lpage/img/botro.png');">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <h1 class="w1">Hai, Kami dari Datasoft</h1>
          <br>
          <h5 class="w2">Daftarkan diri anda untuk menjadi bagian dari kami.</h5>
          <h5 class="w2">Silahkan lanjutkan dengan mengklik tombol ini.</h5>
          <br>
          <a type="button" id="scroll3" href="#regis" class="btn btn-primary btn-round mb-5 mr-4">Pendaftaran Online</a>
        </div>
        <div class="col-lg-6" >
          <img src="assets/lpage/img/pro.png" id="imgne" style="width: 110%; margin-top: -4%">
        </div>
      </div>
    </div>
    <h6 class="category category-absolute" id="dsosia" style="color: gray;">DATASOFT SISTEM INFORMASI ANGGOTA
    </h6>
  </div>
  <!-- end header  -->
  
  <!-- alur  -->
  <div class="container" id="alur">
    <div class="row">
      <div class="col-md-12 mt-5 text-center">
        <h2 class="title text-center">Alur Pendaftaran Online</h2>
      </div>
    </div>
    <div class="jumbotron" style="background-color: transparent !important; margin-top: -5%; background-position-x: 100px;">
      <div class="row">
        <div class="col-md-4">
          <div class="info">
            <div class="icon icon-danger text-center">
              <i class="nc-icon nc-single-copy-04"></i>
            </div>
            <div class="description text-center">
              <h4 class="info-title">Daftar Online</h4>
              <br>
              <p class="description">Daftar online melalui website ini dengan mengisi data yang diperlukan.
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="info">
            <div class="icon icon-danger text-center">
              <i class="nc-icon nc-watch-time"></i>
            </div>
            <div class="description text-center">
              <h4 class="info-title">Pemeriksaan Data</h4>
              <br>
              <p>Berkas anda akan diperiksa oleh tim kami setelah anda menyelesaikan pendaftaran online.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="info">
            <div class="icon icon-danger text-center">
              <i class="nc-icon nc-check-2"></i>
            </div>
            <div class="description text-center">
              <h4 class="info-title">Berkas Disetujui</h4>
              <br>
              <p>Setelah data disetujui, maka status ke anggota an anda berubah menjadi calon anggota.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- end alur  -->

  <!-- register  -->
  <div class="section registrut" id="regis">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 mx-auto msf-form">
          <div class="card card-register mx-auto" style="background-color: #d3e8e7;">
            <h3 class="title mx-auto"><b>Pendaftaran Online</b></h3>     
            <form class="register-form" form role="form" action="" method="post" enctype="multipart/form-data">
              
              <!-- step 1  -->
              <fieldset>
                <!-- nik  -->
                <label style="color: black;">NIK</label>
                <div class="input-group form-group">
                  <input type="text" name="NIK" class="form-control" placeholder="Nomor Induk Kependudukan">
                  <input type="hidden" name="ID" class="form-control">
                </div>
                <!-- nik  -->

                <!-- nama  -->
                <label style="color: black;">Nama Lengkap</label>
                <div class="input-group form-group">
                  <input type="text" name="NAMA_LENGKAP" class="form-control" placeholder="Nama Lengkap" required>
                </div>
                <!-- end nama  -->

                <div class="col">
                  <button type="button" class="btn btn-primary btn-round pull-right" id="next">Next<i class="fa fa-angle-right"></i></button>
                </div>
                <a class="btn btn-link" style="color: black;">Step 1 dari 9</a>
              </fieldset>
              <!-- end  -->

              <!-- step 2  -->
              <fieldset>
                <!-- tempat lahir  -->
                <label style="color: black;">Tempat Lahir</label>
                <div class="input-group form-group">
                  <input type="text" name="TEMPAT_LAHIR" class="form-control" placeholder="ex. Malang" required>
                </div>
                <!-- end -->

                <!-- tanggal lahir  -->
                <label style="color: black;">Tanggal Lahir</label>
                  <div class="form-group">
                    <div class="input-group date">
                      <input type="text" id="basicDate" name="TANGGAL_LAHIR" class="form-control" placeholder="Tanggal Lahir Anda" required>
                      <div class="input-group-append">
                        <span class="input-group-text">
                          <span class="glyphicon glyphicon-calendar"><i class="fa fa-calendar"
                              aria-hidden="true"></i></span>
                        </span>
                      </div>
                    </div>
                  </div>
                <!-- end -->

                <!-- jenis kl -->
                <label style="color: black;">Jenis Kelamin</label>
                  <div class="input-group form-group">
                    <select name="ID_SEX" id="jk" class="form-control" required>
                        <?php
                        if(!$edit){ 
                          echo '<option value="">- PILIH -</option>';
                        }
                        foreach ($jkel as $key) {         
                          if($ID_SEX == $key->ID){
                            echo "<option value=".$key->ID." selected>".$key->NAMA."</option>";
                          }else{
                            echo "<option value=".$key->ID.">".$key->NAMA."</option>";
                          }
                          $key->ID++;
                        }
                        ?>
                    </select>
                  </div>
                <!-- end -->

                <div class="col">
                  <button type="button" class="btn btn-primary btn-round pull-right" id="next">Next<i class="fa fa-angle-right"></i></button>
                  <button type="button" class="btn btn-warning btn-round" id="previous"><i class="fa fa-angle-left"></i>previous</i></button>
                  </div>
                  <a class="btn btn-link" style="color: black;">Step 2 dari 9</a>
              </fieldset>
              <!-- end  -->

              <!-- step 3 -->
              <fieldset>
                  <!-- status kawin -->
                  <label style="color: black;">Status Kawin</label>
                    <div class="input-group form-group">
                      <select name="ID_STATUS_KAWIN" id="kawin" class="form-control" required>
                        <?php
                        if(!$edit){ 
                          echo '<option value="">- PILIH -</option>';
                        }
                        foreach ($status_kawin as $key) {         
                          if($ID_SEX == $key->ID){
                            echo "<option value=".$key->ID." selected>".$key->NAMA."</option>";
                          }else{
                            echo "<option value=".$key->ID.">".$key->NAMA."</option>";
                          }
                          $key->ID++;
                        }
                        ?>
                      </select>
                    </div>
                  <!-- end -->

                  <!-- Agama -->
                  <label style="color: black;">Agama</label>
                    <div class="input-group form-group">
                      <select name="ID_AGAMA" id="agama" class="form-control" required>                        
                        <?php
                        if(!$edit){ 
                          echo '<option value="">- PILIH -</option>';
                        }
                        foreach ($agama as $key) {         
                          if($ID_SEX == $key->ID){
                            echo "<option value=".$key->ID." selected>".$key->NAMA."</option>";
                          }else{
                            echo "<option value=".$key->ID.">".$key->NAMA."</option>";
                          }
                          $key->ID++;
                        }
                        ?>
                      </select>
                    </div>
                    <!-- end -->

                    <!-- status kawin -->
                    <label style="color: black;">Kewarganegaraan</label>
                    <div class="input-group form-group">
                      <select name="ID_KEWARGANEGARAAN" id="" class="form-control" required>
                        <?php
                        if(!$edit){ 
                          echo '<option value="">- PILIH -</option>';
                        }
                        foreach ($kewarganegaraan as $key) {         
                          if($ID_SEX == $key->ID){
                            echo "<option value=".$key->ID." selected>".$key->NAMA."</option>";
                          }else{
                            echo "<option value=".$key->ID.">".$key->NAMA."</option>";
                          }
                          $key->ID++;
                        }
                        ?>
                      </select>
                    </div>
                    <!-- end -->

                    <div class="col">
                      <button type="button" class="btn btn-primary btn-round pull-right" id="next">Next<i class="fa fa-angle-right"></i></button>
                      <button type="button" class="btn btn-warning btn-round" id="previous"><i class="fa fa-angle-left"></i>previous</i></button>
                    </div>
                    <a class="btn btn-link" style="color: black;">Step 3 dari 9</a>
              </fieldset>
              <!-- end  -->

              <!-- step 4 -->
              <fieldset>
                <!-- pendidkan -->
                <label style="color: black;">Pendidikan Saat Ini</label>
                <div class="input-group form-group">
                  <select name="ID_PENDIDIKAN_SEDANG" id="pend" class="form-control" required>
                    <?php
                    if(!$edit){ 
                      echo '<option value="">- PILIH -</option>';
                    }
                    foreach ($pendidikan as $key) {         
                      if($ID_SEX == $key->ID){
                        echo "<option value=".$key->ID." selected>".$key->NAMA."</option>";
                      }else{
                        echo "<option value=".$key->ID.">".$key->NAMA."</option>";
                      }
                      $key->ID++;
                    }
                    ?>
                  </select>
                </div>
                <!-- end -->

                <!-- pend kk -->
                <label style="color: black;">Pendidikan di KK</label>
                <div class="input-group form-group">
                  <select name="ID_PENDIDIKAN_KK" id="pkk" class="form-control">
                    <?php
                    if(!$edit){ 
                      echo '<option value="">- PILIH -</option>';
                    }
                    foreach ($pendidikan_kk as $key) {         
                      if($ID_SEX == $key->ID){
                        echo "<option value=".$key->ID." selected>".$key->NAMA."</option>";
                      }else{
                        echo "<option value=".$key->ID.">".$key->NAMA."</option>";
                      }
                      $key->ID++;
                    }
                    ?>
                  </select>
                </div>
                <!-- end -->

                <!-- status kawin -->
                <label style="color: black;">Pekerjaan</label>
                <div class="input-group form-group">
                  <select name="ID_PEKERJAAN" id="pekerjaan" class="form-control">
                    <?php
                    if(!$edit){ 
                      echo '<option value="">- PILIH -</option>';
                    }
                    foreach ($pekerjaan as $key) {         
                      if($ID_SEX == $key->ID){
                        echo "<option value=".$key->ID." selected>".$key->NAMA."</option>";
                      }else{
                        echo "<option value=".$key->ID.">".$key->NAMA."</option>";
                      }
                      $key->ID++;
                    }
                    ?>
                  </select>
                </div>
                <!-- end -->

                <div class="col">
                  <button type="button" class="btn btn-primary btn-round pull-right" id="next">Next<i class="fa fa-angle-right"></i></button>
                  <button type="button" class="btn btn-warning btn-round" id="previous"><i class="fa fa-angle-left"></i>previous</i></button>
                </div>
                <a class="btn btn-link" style="color: black;">Step 4 dari 9</a>
              </fieldset>
              <!-- end  -->

              <!-- step 5 -->
              <fieldset>
                <!-- provinsi -->
                <label style="color: black;">Provinsi</label>
                <div class="input-group form-group">
                  <select name="ID_PROVINSI" id="prov" class="form-control" required>
                    <?php
                    if(!$edit){ 
                      echo '<option value="">- PILIH -</option>';
                    }
                    foreach ($provinsi as $key) {         
                      if($ID_SEX == $key->ID){
                        echo "<option value=".$key->ID." selected>".$key->NAMA."</option>";
                      }else{
                        echo "<option value=".$key->ID.">".$key->NAMA."</option>";
                      }
                      $key->ID++;
                    }
                    ?>
                  </select>
                </div>
                <!-- end -->

                <!-- kota -->
                <label style="color: black;">Kota/Kabupaten</label>
                <div class="input-group form-group">
                  <select name="ID_KABNKOTA" id="city" class="form-control" required>
                    <option value="">- PILIH -</option>
                  </select>
                </div>
                <!-- end -->

                <div class="col">
                  <button type="button" class="btn btn-primary btn-round pull-right" id="next">Next<i class="fa fa-angle-right"></i></button>
                  <button type="button" class="btn btn-warning btn-round" id="previous"><i class="fa fa-angle-left"></i>previous</i></button>
                </div>
                <a class="btn btn-link" style="color: black;">Step 5 dari 9</a>
              </fieldset>
              <!-- end  -->

              <!-- step 6 -->
              <fieldset>
                <!-- kecamatan -->
                <label style="color: black;">Kecamatan</label>
                <div class="input-group form-group">
                  <input type="text" name="KECAMATAN" class="form-control" placeholder="kecamatan anda tinggal" required>
                </div>
                <!-- end nama  -->

                <!-- desa/keluarahn -->
                <label style="color: black;">Desa/Kelurahan</label>
                <div class="input-group form-group">
                  <input type="text" name="DESANKELURAHAN" class="form-control" placeholder="desa/kel anda tinggal" required>
                </div>
                <!-- end nama  -->

                <!-- dusun -->
                <label style="color: black;">Dusun</label>
                <div class="input-group form-group">
                  <input type="text" name="DUSUN" class="form-control" placeholder="kosongi jika tidak ada">
                </div>
                <!-- end nama  -->

                <div class="col">
                  <button type="button" class="btn btn-primary btn-round pull-right" id="next">Next<i class="fa fa-angle-right"></i></button>
                  <button type="button" class="btn btn-warning btn-round" id="previous"><i class="fa fa-angle-left"></i>previous</i></button>
                </div>
                <a class="btn btn-link" style="color: black;">Step 6 dari 9</a>

              </fieldset>
              <!-- end  -->

              <!-- step 7 -->
              <fieldset>
                <!-- jalan rumah -->
                <label style="color: black;">Alamat Jalan</label>
                <div class="input-group form-group">
                  <textarea type="text" name="ALMT_JALAN" class="form-control" placeholder="alamat rumah anda" required></textarea>
                </div>
                <!-- end nama  -->

                <!-- rt rw -->
                <div class="row">
                  <div class="col-md-6">
                    <label style="color: black;">RT</label>
                    <div class="input-group form-group">
                      <input type="text" name="RT" class="form-control" placeholder="ex. 03">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <label style="color: black;">RW</label>
                    <div class="input-group form-group">
                      <input type="text" name="RW" class="form-control" placeholder="ex. 05">
                    </div>
                  </div>
                </div>
                <!-- end  -->

                <!-- kodepos -->
                <label style="color: black;">Kodepos</label>
                <div class="input-group form-group">
                  <input type="text" name="KODE_POS	" class="form-control" placeholder="kodepos daerah anda" required>
                </div>
                <!-- end nama  -->

                <div class="col">
                  <button type="button" class="btn btn-primary btn-round pull-right" id="next">Next<i class="fa fa-angle-right"></i></button>
                  <button type="button" class="btn btn-warning btn-round" id="previous"><i class="fa fa-angle-left"></i>previous</i></button>
                </div>
                <a class="btn btn-link" style="color: black;">Step 7 dari 9</a>
              </fieldset>
              <!-- end  -->

              <!-- step 8 -->
              <fieldset>
                <div class="row">
                  <div class="col-6">
                    <!-- NIK AYAH -->
                    <label style="color: black;">NIK Ayah</label>
                    <div class="input-group form-group">
                      <input type="text" name="NIK_AYAH" class="form-control" placeholder="Nik Ayah" required>
                    </div>
                    <!-- end nama  -->
                  </div>

                  <div class="col-6">
                    <!-- Nama AYAH -->
                    <label style="color: black;">Nama Ayah</label>
                    <div class="input-group form-group">
                      <input type="text" name="NAMA_AYAH" class="form-control" placeholder="Nama lengkap" required>
                    </div>
                    <!-- end nama  -->
                  </div>

                  <div class="col-6">
                    <!-- NIK Ibu -->
                    <label style="color: black;">NIK Ibu</label>
                    <div class="input-group form-group">
                      <input type="text" name="NIK_IBU" class="form-control" placeholder="Nik Ibu" required>
                    </div>
                    <!-- end nama  -->
                  </div>

                  <div class="col-6">
                    <!-- nama ibu -->
                    <label style="color: black;">Nama Ibu</label>
                    <div class="input-group form-group">
                      <input type="text" name="NAMA_IBU" class="form-control" placeholder="Nama Lengkap" required>
                    </div>
                    <!-- end nama  -->
                  </div>
                </div>

                <div class="col">
                  <button type="button" class="btn btn-primary btn-round pull-right" id="next">Next<i class="fa fa-angle-right"></i></button>
                  <button type="button" class="btn btn-warning btn-round" id="previous"><i class="fa fa-angle-left"></i>previous</i></button>
                </div>
                <a class="btn btn-link" style="color: black;">Step 8 dari 9</a>
              </fieldset>
              <!-- end  -->

              <!-- step 9 -->
              <fieldset>
                <!-- No HP -->
                <label style="color: black;">Nomor Telepon</label>
                <div class="input-group form-group">
                  <input type="number" name="TELEPON" class="form-control" placeholder="ex. 0897xxxxx" required="">
                </div>
                <!-- end -->

                <!-- foto diri -->
                <label style="color: black;">Foto Diri ( Rapi )</label>
                <div class="input-group form-group">
                  <input type="file" name="FOTO" class="form-control">
                </div>
                <!-- end= -->

                <!-- Foto Ktp -->
                <label style="color: black;">Foto Ktp ( Bagian Depan )</label>
                <div class="input-group form-group">
                  <input type="file" name="FOTO_KTP" class="form-control">
                </div>
                <!-- end nama  -->

                <div class="col">
                  <button type="submit" class="btn btn-success btn-round pull-right" name="save">Submit</button>
                  <button type="button" class="btn btn-warning btn-round" id="previous"><i class="fa fa-angle-left"></i>previous</i></button>
                </div>
                <a class="btn btn-link" style="color: black;">Step 9 dari 9</a>
              </fieldset>
              <!-- end  -->
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- end register  -->

  <!-- pertanyaan  -->
  <div class="section landing-section">
    <div class="container">
      <div class="row">
        <div class="col-md-8 ml-auto mr-auto">
          <h2 class="text-center">Jika Ada Pertanyaan</h2>
          <form class="contact-form">
            <div class="row">
              <div class="col-md-6">
                <label>Nama Lengkap</label>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="nc-icon nc-single-02"></i>
                    </span>
                  </div>
                  <input type="text" class="form-control" placeholder="Nama Lengkap">
                </div>
              </div>
              <div class="col-md-6">
                <label>Email</label>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="nc-icon nc-email-85"></i>
                    </span>
                  </div>
                  <input type="text" class="form-control" placeholder="Email">
                </div>
              </div>
            </div>
            <label>Pertanyaan Anda</label>
            <textarea class="form-control" rows="4" placeholder="Tuliskan Sesuatu..."></textarea>
            <div class="row">
              <div class="col-md-4 ml-auto mr-auto">
                <button class="btn btn-success btn-lg btn-fill">Kirim Pesan</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- pertanyaan  -->

  <footer class="footer footer-black  footer-white ">
    <div class="container">
      <div class="row">
        <nav class="footer-nav">
          <ul>
            <li>
              <a href="https://www.creative-tim.com" target="_blank">DSO SISTEM INFORMASI ANGGOTA</a>
            </li>
          </ul>
        </nav>
        <div class="credits ml-auto">
          <span class="copyright">
            © datasoft team ci
          </span>
        </div>
      </div>
    </div>
  </footer>

  <!-- js  -->
  <script src="<?= site_url('assets/lpage/js/core/jquery.min.js'); ?>"></script>
  <script src="<?= site_url('assets/lpage/js/core/popper.min.js'); ?>"></script>
  <script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js"></script>
  <script src="<?= site_url('assets/lpage/js/core/bootstrap.min.js'); ?>" type="text/javascript"></script>
  <script src="<?= site_url('assets/lpage/js/paper-kit.js'); ?>" type="text/javascript"></script>
  <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

        <?php
        if($alert == "success"){
        echo "<script>success_sweet('Data is saved.','l_page');</script>";
        }
        if($alert == "exist"){
          echo "<script>failed_sweet('The file is already exist.');</script>";
        }
        ?>

      <script type="text/javascript">
        $("#prov").change(function(){
          var id_provinces = $(this).val(); 
          $.ajax({
            type: "POST",
            dataType: "html",
            url: '<?= site_url('Anggota/getKota') ?>',
            data: "id_provinces="+id_provinces,
            success: function(msg){
              $("select#city").html(msg);                                                    
            }
          });                    
        });  
      </script>

      <script>
        $('#scroll').on('click', function(e) {
          var tujuan = $(this).attr('href');
          var elemenTujuan = $(tujuan);
          $('html , body').animate({
            scrollTop: elemenTujuan.offset().top - 80
          });
          e.preventDefault();
        });

        $('#scroll1').on('click', function(e) {
          var tujuan = $(this).attr('href');
          var elemenTujuan = $(tujuan);
          $('html , body').animate({
            scrollTop: elemenTujuan.offset().top - 80
          });
          e.preventDefault();
        });

        $('#scroll2').on('click', function(e) {
          var tujuan = $(this).attr('href');
          var elemenTujuan = $(tujuan);
          $('html , body').animate({
            scrollTop: elemenTujuan.offset().top - 50
          });
          e.preventDefault();
        });

        $('#scroll3').on('click', function(e) {
          var tujuan = $(this).attr('href');
          var elemenTujuan = $(tujuan);
          $('html , body').animate({
            scrollTop: elemenTujuan.offset().top - 50
          });
          e.preventDefault();
        });
      </script>

      <script>
        function scroll_to_class(chosen_class) {
          var nav_height = $('nav').outerHeight();
          var scroll_to = $(chosen_class).offset().top - nav_height - 50;

          if($(window).scrollTop() != scroll_to) {
            $('html, body').stop().animate({scrollTop: scroll_to}, 1000);
          }
        }

        jQuery(document).ready(function() {
  
        $('.msf-form form fieldset:first-child').fadeIn('slow');

        $('.msf-form form #next').on('click', function() {
          $(this).parents('fieldset').fadeOut(400, function() {
            $(this).next().fadeIn();
            scroll_to_class('.msf-form');
          });
        });
        
        $('.msf-form form #previous').on('click', function() {
          $(this).parents('fieldset').fadeOut(400, function() {
            $(this).prev().fadeIn();
            scroll_to_class('.msf-form');
          });
        });
      });
      </script>

      <script type="text/javascript"> 
        $(document).ready(function() { 
          $("#prov").select2({ width: '100%' });           
        });
        $(document).ready(function() { 
          $("#city").select2({ width: '100%' });           
        });
        $(document).ready(function() { 
          $("#pend").select2({ width: '100%' });           
        });
        $(document).ready(function() { 
          $("#pkk").select2({ width: '100%' });           
        });
        $(document).ready(function() { 
          $("#pekerjaan").select2({ width: '100%' });           
        });
      </script>

      <script>
        $(document).ready(function () {
          $("#basicDate").flatpickr({
            enableTime: false,
            dateFormat: "d-m-Y",
          });
        });
      </script>
  <!-- end js  -->

</body>

</html>