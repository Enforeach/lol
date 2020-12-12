<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="shortcut icon" href="<?= site_url('assets/images/'); ?>" />
  <link rel="icon" type="image/png" href="">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    SPSS - Pendaftaran Online
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
          SPSS
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
          <a href="#alur" class="nav-link scroll">Sistem</a>
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
          <!-- <img src="assets/lpage/img/pro.png" id="imgne" style="width: 114%; margin-top: -4%"> -->
        </div>
        <div class="col-xl-6 order-xl-first">
          <h1 id="text1">Hai, Kami dari SPSS</h1>
          <br>
          <h5 id="text2">Daftarkan diri anda untuk menjadi bagian dari kami.</h5>
          <h5 id="text3">Silahkan lanjutkan dengan mengklik tombol ini.</h5>
          <br>
          <button type="button" id="btn-daftar" href="#regis" class="btn btn-primary scroll btn-round mb-5 textq">Registrasi</button>
        </div>
      </div>
    </div>
    <h6 class="category category-absolute" id="dsosia" style="color: gray;">Registrasi SPSS
    </h6>
  </div>
  <!-- end header  -->
  
  <!-- alur  -->
  <div class="container" id="alur">
    <div class="row">
      <div class="col-md-12 mt-5 text-center">
        <h2 class="title text-center" id="alr1">SISTEM PENGELOLAAN SURAT</h2>
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
          <h3 class="title text-center text-white"><b>Form Register</b></h3>     
          <form form role="form" id="myform" action="" method="post" enctype="multipart/form-data" style="color: black">   
            <!-- step 1  -->
            <fieldset id="s1">
              <div class="row">
                <div class="col-md-6">
                  <!-- nik  -->
                  <label style="color: white;">Username</label>
                  <div class="form-group">
                    <input type="text" name="username" id="username" class="form-control" placeholder="Username" required>
                  </div>
                  <b><div id="huhu"></div></b>
                  <!-- nik  -->
                </div>

                <div class="col-md-6">
                  <!-- nama  -->
                  <label style="color: white;">Nama Lengkap</label>
                  <div class="form-group">
                    <input type="text" name="nama_lengkap" class="form-control" placeholder="Nama Lengkap" required>
                  </div>
                  <!-- end nama  -->
                </div>
              </div>

              <!-- tempat lahir  -->
              <label style="color: white;">Password</label>
              <div class="form-group">
                <input type="password" name="passwordlama" id="passwordlama" class="form-control" placeholder="Password" required>
              </div>
              <!-- end -->

              <!-- tanggal lahir  -->
              <label style="color: white;">Confirm Password</label>
              <div class="form-group">
                <input type="password" name="password" id="confirm" class="form-control" placeholder="Confirm Password" onkeyup="haha();" required>
              </div>

              <b><p id="haha"></p></b>

              <!-- end -->
              <div class="col">
                <button type="submit" id="lala" class="btn btn-success btn-round pull-right" name="save">Daftar</button>
              </div>
            </fieldset>
            <!-- end  -->
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- end register  -->

<footer class="footer footer-black  footer-white ">
  <div class="container">
    <div class="row">
      <nav class="footer-nav">
        <ul>
          <li>
            <a href="#" target="_blank">SPSS</a>
          </li>
        </ul>
      </nav>
      <div class="credits ml-auto">
        <span class="copyright">
          © SPSS team ci
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
  $(document).ready(function() {
    $('#username').keyup(function(){
      var username = $('#username').val();

      $.ajax({
        url: '<?= site_url('Auth/cek') ?>',
        type: 'post',
        data: {
          'username' : username,
        },
        success: function(response){
          $lala = response.substring(1,response.length - 1);
          $('#huhu').css("color", "yellow");
          $('#huhu').text($lala);
        }


      });

    });
  })
</script>
<script type="text/javascript">
  function haha() {
    var password = $("#passwordlama").val();
    var confirmPassword = $("#confirm").val();

    if (password != confirmPassword) {
      $('#haha').css("color", "yellow");
     document.getElementById("haha").innerHTML = "Password tidak cocok";

   }else {
     $('#haha').css("color", "#03e668");
     document.getElementById("haha").innerHTML = "Password cocok";
   }
 }



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
</script>
<!-- end js  -->

</body>

</html>