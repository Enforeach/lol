<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Datasoft</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="<?= site_url('assets/css/vendors/iconfonts/mdi/css/materialdesignicons.min.css'); ?>">
  <link rel="stylesheet" href="<?= site_url('assets/css/vendors/iconfonts/puse-icons-feather/feather.css'); ?>">
  <link rel="stylesheet" href="<?= site_url('assets/css/vendors/css/vendor.bundle.base.css'); ?>">
  <link rel="stylesheet" href="<?= site_url('assets/css/vendors/css/vendor.bundle.addons.css'); ?>">
  <link rel="stylesheet" href="<?= site_url('assets/css/style.css'); ?>">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?= site_url('assets/css/select2.css'); ?>">
  <link rel="stylesheet" href="<?= site_url('assets/css/dataTables.bootstrap4.min.css'); ?>">
  <link rel="stylesheet" href="<?= site_url('assets/sweetalert/sweetalert.css'); ?>">

  <link href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css" rel="stylesheet" />
  <script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
  

  <!-- JS -->
  <script type="text/javascript"> var BASE_URL = "<?php echo base_url();?>"; </script>

  <script src="<?= site_url('assets/css/vendors/js/vendor.bundle.addons.js'); ?>"></script>
  <script src="<?= site_url('assets/css/vendors/js/vendor.bundle.base.js'); ?>"></script>
  <script src="<?= site_url('assets/js/off-canvas.js'); ?>"></script>
  <script src="<?= site_url('assets/js/misc.js'); ?>"></script>
  <script src="<?= site_url('assets/js/template.js'); ?>"></script>
  <script src="<?= site_url('assets/js/jquery.dataTables.min.js'); ?>"></script>
  <script src="<?= site_url('assets/js/dataTables.bootstrap4.min.js'); ?>"></script>
  <script src="<?= site_url('assets/js/select2.min.js'); ?>"></script>
  <script src="<?= site_url('assets/sweetalert/sweetalert.min.js'); ?>"></script>
  <script src="<?= site_url('assets/js/scripts.js'); ?>"></script>

  <script src="<?= site_url('assets/custom1.js'); ?>"></script>
  <script src="<?= site_url('assets/cus.js'); ?>"></script>
  <script src="https://cdn.ckeditor.com/ckeditor5/23.1.0/classic/ckeditor.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

  <!-- endinject -->
  <link rel="shortcut icon" href="<?= site_url('assets/images/logo.jpeg'); ?>" />

  <!-- profil css  -->
  <style>

    .select2-selection__rendered {
        line-height: 30px !important;
        font-size: 12px !important;
        border-color: rgb(207, 207, 207) !important;
    }
    .select2-container .select2-selection--single {
        height: 34px !important;
    }
    .select2-selection__arrow {
        height: 33px !important;
    }
    .select2-results__option { 
    font-size: 12px !important;
    }

      .msf-form form fieldset { display: none; overflow: hidden; }

      body{
          background: -webkit-linear-gradient(left, #3931af, #00c6ff);
      }

      @media (min-width: 1200px){
          .main1{
            padding-left: 5%;
            padding-right: 5%;
          }
      }

      @media (max-width: 575.98px){
          .main1{
            padding-left: 0%;
            padding-right: 0%;
          }
      }

      @media (min-width: 1200px){
          .main{
            padding-left: 5%;
            padding-right: 5%;
          }
      }

        p:empty:before {
        content: '-';
        white-space: pre;
        }

        label:empty:before {
        content: '-';
        white-space: pre;
        }

        td:empty:before {
        content: '-';
        white-space: pre;
        }

        #profileImage:before {
        content: '';
        width: 210px;
        height: 210px;
        border-radius: 50%;
        object-fit: cover;
        display: block;
        }

        .no-photo{
            content: '';
            width: 210px;
            height: 210px;
            border-radius: 50%;
            object-fit: cover;
            display: block;
            background: url('https://i.ibb.co/qxHR5SM/tidakadaphoto.jpg');
        }

        #gambarku:before {
        content: '';
        width: 30px;
        height: 30px;
        border-radius: 50%;
        object-fit: cover;
        display: block;
        background: url('https://i.ibb.co/qxHR5SM/tidakadaphoto.jpg');
        background-repeat: no-repeat;
        background-size: 30px 30px;
        }

        #gambarmu:before {
        content: '';
        width: 40px;
        height: 40px;
        border-radius: 50%;
        object-fit: cover;
        display: block;
        background: url('https://i.ibb.co/qxHR5SM/tidakadaphoto.jpg');
        background-repeat: no-repeat;
        background-size: 40px 40px;
        }

      .emp-profil{
          padding: 4%;
          margin-top: 3%;
          margin-bottom: 3%;
          border-radius: 0.5rem;
          background: #fff;
      }

      .emp-profile{
          padding-top: 5%;
          padding-bottom: 8%;
          padding-left: 8%;
          padding-right: 8%;
          margin-top: 3%;
          margin-bottom: 3%;
          border-radius: 0.5rem;
          background: #fff;
      }
      .profile-img{
          text-align: center;
          display: block;
          margin-left: auto;
          margin-right: auto;
      }

      #pcc-btn{
        text-align:center;
        margin-top: 12%
      }

      @media (max-width: 575.98px) {
        #atas{
            text-align:center
        }
        #kaplet{
            margin-left: 3%;
        }
      }

      @media (min-width: 576px) and (max-width: 767.98px) {
        #pcc-btn{
            text-align:center;
            margin-top: 15%
        }
        #atas{
            text-align:center
        }
        #tablet{
          margin-top: 12.5%;
        }

        #kaplet{
            margin-top: -12.5%;
        }
      }
      
      @media (min-width: 1200px) {
            #tablet{
            margin-top: 12.5%;
        }

        #kaplet{
            margin-top: -12.5%
        } 
      }

       @media (min-width: 768px) and (max-width: 1024px) {
            #tablet{
            margin-top: 0%;
        }
            #kaplet{
            margin-top: -20%;
            padding-left: 3%;
        }
        #atas{
            text-align:left;
            padding-left: 3%;
        }
      }

      @media (min-width: 1023px) and (max-width: 1199px) {
            #tablet{
            margin-top: 0%;
        }
            #kaplet{
            margin-top: -20%
        }
        #atas{
            text-align:left
        }
      }

      .profile-img img{
          width: 210px;
          height: 210px;
          border-radius: 50%;
          cursor: pointer;
          object-fit: cover;
          display: block;
          margin-left: auto;
          margin-right: auto;
      }
      .profile-img .file {
          position: relative;
          overflow: hidden;
          margin-top: -20%;
          width: 70%;
          border: none;
          border-radius: 0;
          font-size: 15px;
          background: #212529b8;
      }
      .profile-img .file input {
          position: absolute;
          opacity: 0;
          right: 0;
          top: 0;
      }
      .profile-head h5{
          color: #333;
      }
      .profile-head h6{
          color: #0062cc;
      }
      .profile-edit-btn{
          border: none;
          border-radius: 1.5rem;
          width: 70%;
          padding: 2%;
          font-weight: 600;
          color: #6c757d;
          cursor: pointer;
      }
      .proile-rating{
          font-size: 12px;
          color: #818182;
          margin-top: 5%;
      }
      .proile-rating span{
          color: #495057;
          font-size: 15px;
          font-weight: 600;
      }
      .profile-head .nav-tabs{
          margin-bottom:5%;
      }
      .profile-head .nav-tabs .nav-link{
          font-weight:600;
          border: none;
      }

      @media (max-width: 575.98px){
        .profile-head .nav-tabs .nav-link{
          font-weight:600;
          font-size: 10.5px;
          border: none;
        }
        .profile-head .nav-tabs{
          margin-bottom: 8%;
          padding-left: 1%;
          padding-right: 1%;
        }
        .profile-tab label{
          font-weight: 600;
          font-size: 12px;
        }
        .profile-tab h6{
          font-weight: 600;
          font-size: 12px;
        }
      }

      .profile-head .nav-tabs .nav-link.active{
          border: none;
          border-bottom:2px solid #0062cc;
      }
      .profile-work{
          padding: 14%;
          margin-top: -15%;
      }
      .profile-work p{
          font-size: 12px;
          color: #818182;
          font-weight: 600;
          margin-top: 10%;
      }
      .profile-work a{
          text-decoration: none;
          color: #495057;
          font-weight: 600;
          font-size: 14px;
      }
      .profile-work ul{
          list-style: none;
      }
      .profile-tab label{
          font-weight: 600;
      }
      .profile-tab p{
          font-weight: 600;
          color: #0062cc;
          padding-top: 2%;
      }
  </style>

</head>

</html>