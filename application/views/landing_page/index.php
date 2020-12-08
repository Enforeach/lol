<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="shortcut icon" href="<?= site_url('assets/images/logo.jpeg'); ?>" />
  <link rel="icon" type="image/png" href="">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Datasoft - Pendaftaran Online
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no'
  name='viewport' />
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
  <link rel="stylesheet" href="<?= site_url('assets/lpage/css/bootstrap.min.css'); ?>">
  <link rel="stylesheet" href="<?= site_url('assets/lpage/css/paper-kit.css'); ?>">
  <link rel="stylesheet" href="<?= site_url('assets/sweetalert/sweetalert.css'); ?>">

  <script src="<?= site_url('assets/sweetalert/sweetalert.min.js'); ?>"></script>

  <script src="<?= site_url('assets/cus.js'); ?>"></script>
  <style>
    /* Input field */
    .select2-selection__rendered {
      color: #4d4d4d !important;
      font-weight: 400 !important;
    }
    /* Around the search field */
    .select2-search {
      color: #4d4d4d !important;
      font-weight: 400 !important;
    }
    /* Search field */
    .select2-search input {
      color: #4d4d4d !important;
      font-weight: 400 !important;
    }
    /* Each result */
    .select2-results {
      color: #4d4d4d !important;
      font-weight: 400 !important;
    }
    /* Higlighted (hover) result */
    .select2-results__option--highlighted {
      color: #4d4d4d !important;
      font-weight: 400 !important;
    }
    /* Selected option */
    .select2-results__option[aria-selected=true] {
      color: #4d4d4d !important;
      font-weight: 400 !important;
    }
    #s2, #s3, #s4, #s5, #s6{
      display: none;
    }
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
      background-image: url('assets/lpage/img/bgpenline.png'); 
      background-size: 69%; background-repeat: no-repeat; background-position: center; background-position-y: 50%;
    }
    @media (max-width: 575.98px) {
      #bgne{
        background-repeat: no-repeat;
        background-position: 76%;
      }
      #imgne{
        width: 90% !important;
        margin-top: 110px !important;
        margin-left: auto;
        margin-right: auto;
        display: block;
      }
      #dsosia{
        display: none;
      }
      #text1{
        font-size: 30px;
        text-align: center !important;
      }
      #text2{
        text-align: center !important;
        display: none;
      }
      #text3{
        display: none;
        text-align: center !important;
      }
      #btn-daftar{
        margin: 0 auto;
        display: block;
        margin-top: 10px;
      }
      #alr1{
        font-size:
          25px;
      }
      #alur{
        margin-top: -10px;
      }
      #alur2{
        margin-top: -20px;
      }
      #alur-txt1{
        margin-top: 25px;
      }
      #alur-txt2{
        margin-top: 25px;
      }
      #deskripsi{
        margin-top: -30px;
      }
      #deskripsi2{
        text-align: justify !important;
      }
      #regis{
        background-size: 0px;
        background-position-x: 70% !important;
        background-position-y: 20% !important;
      }
    }
    
    @media (min-width: 576px) and (max-width: 767.98px) { 
      #bgne{
        background-repeat: no-repeat;
        background-position-x: 84% !important;
        background-position-y: 45% !important;
        background-size: 1000px;
      }
      #imgne{
        width: 80% !important;
        margin-top: 100px !important;
        margin-left: auto;
        margin-right: auto;
        display: block;
      }
      #dsosia{
        display: none;
      }
      #text1{
        font-size: 30px;
        margin-top: 50px;
        text-align: right !important;
      }
      #text2{
        text-align: right !important;
      }
      #text3{
        display: none;
      }
      #btn-daftar{
        margin-left: auto;
        display: block;
      }
      #alur{
        margin-top: -10px;
      }
      #alur2{
        margin-top: -50px;
      }
      #alur-txt1{
        margin-top: 25px;
      }
      #alur-txt2{
        margin-top: 25px;
      }
      #deskripsi{
        margin-top: -30px;
      }
      #regis{
        background-size: 100% !important;
        background-position-x: 50% !important;
        background-position-y: 80% !important;
      }
    }
    @media (min-width: 768px) and (max-width: 991.98px) { 
      #bgne{
        background-repeat: no-repeat;
        background-position-x: 84% !important;
        background-position-y: 45% !important;
        background-size: 2000px;
      }
      #imgne{
        width: 90% !important;
        margin-top: 100px !important;
        margin-left: auto;
        margin-right: auto;
        display: block;
        margin-top: -10px !important;
      }
      #regis{
        background-size: 100% !important;
        background-position-x: 50% !important;
        background-position-y: 90% !important;
      }
    }
    @media (min-width: 992px) and (max-width: 1199.98px) {
      #bgne{
        background-repeat: no-repeat;
        background-position-x: 84% !important;
        background-position-y: 45% !important;
        background-size: 2500px;
      }
      #imgne{
        width: 100% !important;
        margin-top: 130px !important;
        margin-left: auto;
        margin-right: auto;
        display: block;
      }
      #dsosia{
        display: none;
      }
      #regis{
        background-size: 90% !important;
        background-position-x: 50% !important;
        background-position-y: 60% !important;
      }
    }
    @media (min-width: 1200px) { 
      #bgne{
        background-repeat: no-repeat;
        background-position-x: 84% !important;
        background-position-y: 45% !important;
        background-size: 170%;
      }
    }
    @media (min-width: 1469px) {
      #regis{
        background-size: 65% !important;
        background-position-x: 50% !important;
        background-position-y: 50% !important;
      }
    }
  </style>
</head>

<body class="index-page sidebar-collapse">

  <!-- navbar  -->
  <nav class="navbar navbar-expand-lg fixed-top navbar-transparent" color-on-scroll="5" id="navresponsive">
      <div class="container">
        <div class="navbar-translate">
          <a class="navbar-brand scroll" href="#bgne" rel="tooltip" style="color: rgb(77, 77, 77) !important" data-placement="bottom">
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
            <a href="#bgne" class="nav-link scroll">Beranda</a>
          </li>
          <li class="nav-item">
            <a href="#alur" class="nav-link scroll">Alur</a>
          </li>
          <li class="nav-item">
            <a href="#regis" class="nav-link scroll">Registrasi</a>
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
        <div class="col-xl-6 order-xl-last">
          <img src="assets/lpage/img/pro.png" id="imgne" style="width: 114%; margin-top: -4%">
        </div>
        <div class="col-xl-6 order-xl-first">
          <h1 id="text1">Hai, Kami dari Datasoft</h1>
          <br>
          <h5 id="text2">Daftarkan diri anda untuk menjadi bagian dari kami.</h5>
          <h5 id="text3">Silahkan lanjutkan dengan mengklik tombol ini.</h5>
          <br>
            <button type="button" id="btn-daftar" href="#regis" class="btn btn-primary scroll btn-round mb-5 textq">Pendaftaran Online</button>
        </div>
      </div>
    </div>
    <h6 class="category category-absolute" id="dsosia" style="color: gray;">PENDAFTARAN ANGGOTA ONLINE DATASOFT
    </h6>
  </div>
  <!-- end header  -->
  
  <!-- alur  -->
  <div class="container" id="alur">
    <div class="row">
      <div class="col-md-12 mt-5 text-center">
        <h2 class="title text-center" id="alr1">Alur Pendaftaran Online</h2>
      </div>
    </div>
    <div class="jumbotron" style="background-color: transparent !important; margin-top: -5%; background-position-x: 100px;">
      <div class="row" id="alur2">
        <div class="col-md-4">
          <div class="info">
            <div class="icon icon-danger text-center">
              <i class="nc-icon nc-single-copy-04" style="color: #53bedb;"></i>
            </div>
            <div class="description text-center" id="deskripsi">
              <h4 class="info-title" style="color: #53bedb; font-weight: bolder">Daftar Online</h4>
              <br>
              <p style="font-weight: bolder" id="deskripsi2">Daftar online melalui website ini dengan mengisi data yang diperlukan. <a href="#regis" class="scroll" style="color: #53bedb">form pendaftaran di bawah ini.</a>
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-4" id="alur-txt1">
          <div class="info">
            <div class="icon icon-danger text-center">
              <i class="nc-icon nc-watch-time" style="color: #e0d324;"></i>
            </div>
            <div class="description text-center" id="deskripsi">
              <h4 class="info-title" style="color: #e0d324; font-weight: bolder">Pemeriksaan Data</h4>
              <br>
              <p style="font-weight: bolder" id="deskripsi2">Data akan diperiksa oleh tim kami pastikan data yang diisi benar dan dapat dipertanggung jawabkan.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4" id="alur-txt2">
          <div class="info">
            <div class="icon icon-danger text-center">
              <i class="nc-icon nc-check-2" style="color: #3ab553;"></i>
            </div>
            <div class="description text-center" id="deskripsi">
              <h4 class="info-title" style="color: #3ab553; font-weight: bolder">Berkas Disetujui</h4>
              <br>
              <p style="font-weight: bolder" id="deskripsi2">Setelah data disetujui maka anda akan dihubungi oleh tim kami melalui email/telepon.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- end alur  -->

  <!-- register  -->
  <div class="registrut" id="regis">
    <div class="container">
      <div class="row">
        <div class="col-md-12 mx-auto">
          <div class="card card-register mx-auto" style="background: rgb(85,226,255);
            background: linear-gradient(315deg, rgba(85,226,255,1) 0%, rgba(212,164,255,1) 100%);">
            <h3 class="title text-center text-white"><b>Form Pendaftaran Online</b></h3>     
            <form form role="form" id="myform" action="" method="post" enctype="multipart/form-data" style="color: black">   
              <!-- step 1  -->
              <fieldset id="s1">
                <div class="row">
                  <div class="col-md-6">
                    <!-- nik  -->
                    <label style="color: white;">NIK</label>
                    <div class="form-group">
                      <input type="number" name="NIK"  class="form-control" placeholder="Nomor Induk Kependudukan" required>
                      <input type="hidden" name="ID" class="form-control">
                    </div>
                    <!-- nik  -->
                  </div>

                  <div class="col-md-6">
                    <!-- nama  -->
                    <label style="color: white;">Nama Lengkap</label>
                    <div class="form-group">
                      <input type="text" name="NAMA_LENGKAP" class="form-control" placeholder="Nama Lengkap" required>
                    </div>
                    <!-- end nama  -->
                  </div>
                </div>

                <!-- tempat lahir  -->
                <label style="color: white;">Tempat Lahir</label>
                <div class="form-group">
                  <input type="text" name="TEMPAT_LAHIR" class="form-control" placeholder="ex. Malang" required>
                </div>
                <!-- end -->

                <!-- tanggal lahir  -->
                <label style="color: white;">Tanggal Lahir</label>
                <div class="form-group">
                  <div class="input-group date">
                    <input type="text" name="TANGGAL_LAHIR" class="form-control basicDate" placeholder="Tanggal Lahir Anda" required>
                    <div class="input-group-append">
                      <span class="input-group-text">
                        <span class="glyphicon glyphicon-calendar"><i class="fa fa-calendar"
                            aria-hidden="true"></i></span>
                      </span>
                    </div>
                  </div>
                </div>
                <!-- end -->
                <div class="col">
                  <button type="button" class="btn btn-primary btn-round pull-right next" >Next<i class="fa fa-angle-right"></i></button>
                </div>
                <a class="btn btn-link" style="color: white;">Step 1 dari 6</a>
              </fieldset>
              <!-- end  -->

              <!-- step 2  -->
              <fieldset id="s2">
                <div class="row">
                  <div class="col-md-6">
                  <!-- jenis kl -->
                  <label style="color: white;">Jenis Kelamin</label>
                      <div class="form-group">
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
                    </div>
                    
                    <div class="col-md-6">
                    <!-- status kawin -->
                    <label style="color: white;">Status Kawin</label>
                      <div class="form-group">
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
                    </div>
                    
                    <div class="col-md-6">
                    <!-- Agama -->
                    <label style="color: white;">Agama</label>
                      <div class="form-group">
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
                    </div>

                    <div class="col-md-6">
                    <!-- warga -->
                    <label style="color: white;">Kewarganegaraan</label>
                    <div class="form-group">
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
                    </div>
                </div>

                <div class="col">
                  <button type="button" class="btn btn-primary btn-round pull-right next" >Next<i class="fa fa-angle-right"></i></button>
                  <button type="button" class="btn btn-warning btn-round previous" ><i class="fa fa-angle-left"></i>previous</i></button>
                  </div>
                  <a class="btn btn-link" style="color: white;">Step 2 dari 6</a>
              </fieldset>
              <!-- end  -->

              <!-- step 3 -->
              <fieldset id="s3">
                     <!-- pendidkan -->
                    <label style="color: white;">Pendidikan Saat Ini</label>
                    <div class="form-group">
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
                    <label style="color: white;">Pendidikan di KK</label>
                    <div class="form-group">
                      <select name="ID_PENDIDIKAN_KK" id="pkk" class="form-control" required>
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
                    <label style="color: white;">Pekerjaan</label>
                    <div class="form-group">
                      <select name="ID_PEKERJAAN" id="pekerjaan" class="form-control" required>
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
                      <button type="button" class="btn btn-primary btn-round pull-right next" >Next<i class="fa fa-angle-right"></i></button>
                      <button type="button" class="btn btn-warning btn-round previous" ><i class="fa fa-angle-left"></i>previous</i></button>
                    </div>
                    <a class="btn btn-link" style="color: white;">Step 3 dari 6</a>
              </fieldset>
              <!-- end  -->

              <!-- step 4 -->
              <fieldset id="s4">
                <div class="row">
                  <div class="col-md-6">
                  <!-- provinsi -->
                  <label style="color: white;">Provinsi</label>
                  <div class="form-group">
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
                  </div>

                  <div class="col-md-6">
                  <!-- kota -->
                  <label style="color: white;">Kota/Kabupaten</label>
                  <div class="form-group">
                    <select name="ID_KABNKOTA" id="city" class="form-control" required>
                      <option value="">- PILIH -</option>
                    </select>
                  </div>
                  <!-- end -->
                  </div>

                  <div class="col-md-6">
                  <!-- kecamatan -->
                  <label style="color: white;">Kecamatan</label>
                  <div class="form-group">
                    <input type="text" name="KECAMATAN" class="form-control" placeholder="kecamatan anda tinggal" required>
                  </div>
                  <!-- end nama  -->
                  </div>

                  <div class="col-md-6">
                  <!-- desa/keluarahn -->
                  <label style="color: white;">Desa/Kelurahan</label>
                  <div class="form-group">
                    <input type="text" name="DESANKELURAHAN" class="form-control" placeholder="desa/kel anda tinggal" required>
                  </div>
                  <!-- end nama  -->
                  </div>

                  <div class="col-md-6">
                  <!-- dusun -->
                  <label style="color: white;">Dusun</label>
                  <div class="form-group">
                    <input type="text" name="DUSUN" class="form-control" placeholder="kosongi jika tidak ada">
                  </div>
                  <!-- end nama  -->
                  </div>

                  <div class="col-md-6">
                  <!-- kodepos -->
                  <label style="color: white;">Kodepos</label>
                  <div class="form-group">
                    <input type="number" name="KODE_POS	" class="form-control" placeholder="kodepos daerah anda" required>
                  </div>
                  <!-- end nama  -->
                  </div>
    
                  <!-- rt rw -->
                  <div class="col-md-6">
                    <label style="color: white;">RT</label>
                    <div class="form-group">
                      <input type="number" name="RT" class="form-control" placeholder="ex. 03">
                    </div>
                  </div>
                  
                  <div class="col-md-6">
                    <label style="color: white;">RW</label>
                    <div class="form-group">
                      <input type="number" name="RW" class="form-control" placeholder="ex. 05">
                    </div>
                  </div>
                  <!-- end  -->
                </div>
                <!-- jalan rumah -->
                <label style="color: white;">Alamat Jalan</label>
                <div class="form-group">
                  <textarea type="text" name="ALMT_JALAN" class="form-control" placeholder="alamat rumah anda" height="400" required></textarea>
                </div>
                <!-- end nama  -->
                <div class="col">
                  <button type="button" class="btn btn-primary btn-round pull-right next" >Next<i class="fa fa-angle-right"></i></button>
                  <button type="button" class="btn btn-warning btn-round previous" ><i class="fa fa-angle-left"></i>previous</i></button>
                </div>
                <a class="btn btn-link" style="color: white;">Step 4 dari 6</a>
              </fieldset>
              <!-- end  -->

              <!-- step 5 -->
              <fieldset id="s5" >
                <div class="row">
                    <div class="col-md-6">
                      <!-- NIK AYAH -->
                      <label style="color: white;">NIK Ayah</label>
                      <div class="form-group">
                        <input type="number" name="NIK_AYAH" class="form-control" placeholder="kosongi jika tidak tahu">
                      </div>
                      <!-- end nama  -->
                    </div>

                    <div class="col-md-6">
                      <!-- Nama AYAH -->
                      <label style="color: white;">Nama Ayah</label>
                      <div class="form-group">
                        <input type="text" name="NAMA_AYAH" class="form-control" placeholder="kosongi jika tidak tahu">
                      </div>
                      <!-- end nama  -->
                    </div>

                    <div class="col-md-6">
                      <!-- NIK Ibu -->
                      <label style="color: white;">NIK Ibu</label>
                      <div class="form-group">
                        <input type="number" name="NIK_IBU" class="form-control" placeholder="kosongi jika tidak tahu">
                      </div>
                      <!-- end nama  -->
                    </div>

                    <div class="col-md-6">
                      <!-- nama ibu -->
                      <label style="color: white;">Nama Ibu</label>
                      <div class="form-group">
                        <input type="text" name="NAMA_IBU" class="form-control" placeholder="kosongi jika tidak tahu">
                      </div>
                      <!-- end nama  -->
                    </div>
                  </div>
                <div class="col">
                  <button type="button" class="btn btn-primary btn-round pull-right next" >Next<i class="fa fa-angle-right"></i></button>
                  <button type="button" class="btn btn-warning btn-round previous" ><i class="fa fa-angle-left"></i>previous</i></button>
                </div>
                <a class="btn btn-link" style="color: white;">Step 5 dari 6</a>
              </fieldset>
              <!-- end  -->

              <!-- step 6 -->
              <fieldset id="s6">
                <!-- No HP -->
                <label style="color: white;">Nomor Telepon</label>
                <div class="form-group">
                  <input type="number" name="TELEPON" class="form-control" placeholder="ex. 0897xxxxx" required="">
                </div>
                <!-- end -->

                <!-- foto diri -->
                <label style="color: white;">Foto Diri ( Rapi )</label>
                <div class="form-group">
                <input type="file" accept="image/*"
                class="form-control" name="FOTO"
                onchange="gantipoto(event)">
                <img id="outputfotodiri" class="mt-2" style="width: 30%; border-radius: 0% !important" />
                </div>
                <!-- end= -->

                <!-- Foto Ktp -->
                <label style="color: white;">Foto Ktp ( Bagian Depan )</label>
                <div class="form-group">
                <input type="file" accept="image/*"
                class="form-control" name="FOTO_KTP"
                onchange="potoganti(event)">
                <img id="outputfotoktp" class="mt-2" style="width: 30%; border-radius: 0% !important" />
                </div>
                <!-- end nama  -->

                <div class="col">
                  <button type="submit" class="btn btn-success btn-round pull-right" name="save">Daftar</button>
                  <button type="button" class="btn btn-warning btn-round previous" ><i class="fa fa-angle-left"></i>previous</i></button>
                </div>
                <a class="btn btn-link" style="color: white;">Step 6 dari 6</a>
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
          <div class="col-md-8 mx-auto">
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
                <div class="col-md-4 mx-auto">
                  <button class="btn btn-primary btn-md btn-fill">Kirim Pesan</button>
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
                <a href="#" target="_blank">DATASOFT-SIA</a>
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
  <script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.1/jquery.validate.js"></script>
	<script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.1/additional-methods.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js"></script>
  <script src="<?= site_url('assets/lpage/js/core/bootstrap.min.js'); ?>" type="text/javascript"></script>
  <script src="<?= site_url('assets/lpage/js/paper-kit.js'); ?>" type="text/javascript"></script>
  <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

      <?php
        if($alert == "success"){
        echo "<script>success_sweet('Pendaftaran Berhasil','l_page');</script>";
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
          $(".basicDate").flatpickr({
            enableTime: false,
            dateFormat: "Y-m-d",
          });
        });
      </script>

      <script>
          $('.scroll').on('click', function (e) {
            var tujuan = $(this).attr('href');
            var elemenTujuan = $(tujuan);
            $('html , body').animate({
              scrollTop: elemenTujuan.offset().top - 68
            });
            e.preventDefault();
          });
      </script>

      <script type="text/javascript">
            
        function scroll_to_class(chosen_class) {
          var nav_height = $('nav').outerHeight();
          var scroll_to = $(chosen_class).offset().top - nav_height;

          if($(window).scrollTop() != scroll_to) {
            $('html, body').stop().animate({scrollTop: scroll_to}, 1000);
          }
        }

        $(document).ready(function () {

          $(".next").click(function () {
            $(this).parents('fieldset').ready(function() {
              var form = $("#myform");
              form.validate({
                errorElement: 'span',
                errorClass: 'help-block',
                highlight: function (element, errorClass, validClass) {
                  $(element).closest('.form-group').addClass("has-danger");
                },
                unhighlight: function (element, errorClass, validClass) {
                  $(element).closest('.form-group').removeClass("has-danger");
                }
              });
            if (form.valid() === true) {
              if($('#s1').is(":visible")) {
                current_fs = $('#s1');
                next_fs = $('#s2');
              }else if($('#s2').is(":visible")) {
                current_fs = $('#s2');
                next_fs = $('#s3');
              }else if($('#s3').is(":visible")) {
                current_fs = $('#s3');
                next_fs = $('#s4');
              }else if($('#s4').is(":visible")) {
                current_fs = $('#s4');
                next_fs = $('#s5');
              }else if($('#s5').is(":visible")) {
                current_fs = $('#s5');
                next_fs = $('#s6');
              }
              next_fs.show();
              current_fs.hide();
            }
            scroll_to_class('.registrut');
            });
          });

          $('.previous').click(function () {
            $(this).parents('fieldset').ready(function() {
              if($('#s2').is(":visible")) {
                current_fs = $('#s2');
                next_fs = $('#s1');
              }else if($('#s3').is(":visible")) {
                current_fs = $('#s3');
                next_fs = $('#s2');
              }else if($('#s4').is(":visible")) {
                current_fs = $('#s4');
                next_fs = $('#s3');
              }else if($('#s5').is(":visible")) {
                current_fs = $('#s5');
                next_fs = $('#s4');
              }else if($('#s6').is(":visible")) {
                current_fs = $('#s6');
                next_fs = $('#s5');
              }
              
              next_fs.show();
              current_fs.hide();
              scroll_to_class('.registrut');
            });
          });

        });
      </script>

      <script>
          var gantipoto = function(event) {
          var output = document.getElementById('outputfotodiri');
          output.src = URL.createObjectURL(event.target.files[0]);
          output.onload = function() {
          URL.revokeObjectURL(output.src) // free memory
          }
          };
      </script>

      <script>
          var potoganti = function(event) {
          var output = document.getElementById('outputfotoktp');
          output.src = URL.createObjectURL(event.target.files[0]);
          output.onload = function() {
          URL.revokeObjectURL(output.src) // free memory
          }
          };
      </script>
  <!-- end js  -->

</body>

</html>