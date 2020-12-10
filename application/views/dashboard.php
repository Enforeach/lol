<?php
function tgl_indonesia($tanggal){
	$bulan = array (
		1 =>   'Januari',
		'Februari',
		'Maret',
		'April',
		'Mei',
		'Juni',
		'Juli',
		'Agustus',
		'September',
		'Oktober',
		'November',
		'Desember'
	);
	$pecahkan = explode('-', $tanggal);

	return $pecahkan[2] . ' ' . $bulan[ (int)$pecahkan[1] ] . ' ' . $pecahkan[0];
}
?>
<div class="main-panel">
  <div class="content-wrapper" style="background-color: #e8f4f7;">
    <div class="row">
      <style>
        .cardku:hover{
          transform: scale(1.05);
        }
      </style>
      <style>
        .ahref:hover{
          transform: scale(1.05);
        }
      </style>
      <!-- awal  -->
      <div class="col-sm-6 grid-margin stretch-card">
        <div class="card"
        style="
        background-image: url('https://media.istockphoto.com/vectors/star-universe-background-illustration-flat-design-for-kid-vector-id941365072?k=6&m=941365072&s=170667a&w=0&h=9tB7wDjEUbEkUvYbL061LDqVsyAm56pX34fOCa6wo9Q=')
        ; background-size: 100%">
        <div class="card-body">
          <div class="clearfix">
            <div class="float-left">
              <img id="gambarku"
              style="   width: 70px;
              height: 70px;
              border-radius: 50%;
              object-fit: cover;    "
              src="<?= site_url('images/icon_user2.png'); ?>" alt="">
            </div>
            <div class="float-right">
              <p class="mb-0 text-right text-light">Selamat Datang Kembali !</p>
              <div class="fluid-container">
                <h3 class="font-weight-medium text-right mt-2 mb-0" style="color: #7bff61">
                  <?= $nama_lengkap ?>
                </h3>
                <p class="mt-3 text-right mb-0 ahref"><a href="<?= site_url('Profile') ?>" style="text-decoration:none; color: #c7fffd">lihat profil
                  &nbsp;<i><span class="mdi mdi-arrow-right-drop-circle-outline"></span></i></a></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- akhir  -->

      <!-- awal  -->
      <div class="col-sm-6 grid-margin stretch-card">
        <div class="card" 
        style="
        background-image: url('https://image.shutterstock.com/image-photo/calendar-planner-on-yellow-background-260nw-1449652403.jpg')
        ; background-size: 100%">
        <div class="card-body">
          <div class="clearfix">
            <div class="float-left">
              <p class="mb-0 text-left text-light">
                <?php
                date_default_timezone_set("Asia/Jakarta");
                echo "Pukul : " . date("H:i");
                ?>
              </p>
              <div class="fluid-container">
                <h3 class="font-weight-medium text-left mt-2 mb-0 text-light">
                  <?php
                  echo tgl_indonesia(date("Y-m-d"))."<br>";
                  ?>
                </h3>
                <p class="mt-3 text-left text-light mb-0">
                  <?php
                  $hari = array ( 1 =>    
                    'Senin - Monday',
                    'Selasa - Tuesday',
                    'Rabu - Wednesday',
                    'Kamis - Thursday',
                    'Jumat - Friday',
                    'Sabtu - Saturday',
                    'Minggu - Sunday'
                  );
                  echo $hari[ date('N') ]; 
                  ?>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- akhir  -->

    <!-- awal  -->
    <div class="col-sm-6 grid-margin stretch-card">
      <div class="card card-statistics">
        <a style="text-decoration:none; color: grey"
        data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
        <div class="card-body">
          <div class="clearfix">
            <div class="float-left">
              <i class="mdi mdi-account-location text-info icon-lg"></i>
            </div>
            <div class="float-right">
              <p class="mb-0 text-right" style="color: black">History</p>
              <div class="fluid-container">
                <h3 class="font-weight-medium text-right mb-0" style="color: black">
                  1 Data
                </h3>
              </div>
            </div>
          </div>
          <p class="mt-3 mb-0">
            <i class="mdi mdi-account mr-1" aria-hidden="true"></i>
            lihat rincian dari data history surat
            &nbsp;<i><span class="mdi mdi-arrow-down-drop-circle-outline"></span></i>
          </p>
          <div class="collapse row" id="collapseExample">

            <!-- awal  -->
            <div class="col-md-6 grid-margin stretch-card mt-2">
              <div class="card card-statistics cardku">
                <a href="#" class="hilih" style="text-decoration:none; color: black">
                  <div class="card-body" style="background-color: #f2f2f2; color: grey !important">
                    <div class="clearfix">
                      <div class="float-left">
                        <i class="mdi mdi-account-convert icon-md"></i>
                      </div>
                      <div class="float-right">
                        <p class="mb-0 text-right">Semua Surat</p>
                        <div class="fluid-container">
                          <p class="font-weight-medium text-right mb-0">
                            1 Data
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
            </div>
            <!-- akhir  -->

            <!-- awal  -->
            <div class="col-md-6 grid-margin stretch-card mt-2">
              <div class="card card-statistics cardku">
                <a href="#" class="hilih" style="text-decoration:none; color: black">
                  <div class="card-body" style="background-color: #f2f2f2; color: grey !important">
                    <div class="clearfix">
                      <div class="float-left">
                        <i class="mdi mdi-account-circle icon-md"></i>
                      </div>
                      <div class="float-right">
                        <p class="mb-0 text-right">Surat Pribadi</p>
                        <div class="fluid-container">
                          <p class="font-weight-medium text-right mb-0">
                            1 Data
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
            </div>
            <!-- akhir  -->

            <!-- awal  -->
            <div class="col-md-6 grid-margin stretch-card mt-2">
              <div class="card card-statistics cardku">
                <a href="#" class="hilih" style="text-decoration:none; color: black">
                  <div class="card-body" style="background-color: #f2f2f2; color: grey !important">
                    <div class="clearfix">
                      <div class="float-left">
                        <i class="mdi mdi-account-multiple-outline icon-md"></i>
                      </div>
                      <div class="float-right">
                        <p class="mb-0 text-right">Surat Dinas</p>
                        <div class="fluid-container">
                          <p class="font-weight-medium text-right mb-0">
                            1 Data
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
            </div>
            <!-- akhir  -->

            <!-- awal  -->
            <div class="col-md-6 grid-margin stretch-card mt-2">
              <div class="card card-statistics cardku">
                <a href="#" class="hilih" style="text-decoration:none; color: black">
                  <div class="card-body" style="background-color: #f2f2f2; color: grey !important">
                    <div class="clearfix">
                      <div class="float-left">
                        <i class="mdi mdi-chart-pie icon-md"></i>
                      </div>
                      <div class="float-right">
                        <p class="mb-0 text-right">Surat Niaga</p>
                        <div class="fluid-container">
                          <p class="font-weight-medium text-right mb-0">
                            1 Data
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
            </div>
            <!-- akhir  -->
          </div>
        </div>
      </a>
    </div>
  </div>
  <!-- akhir  -->

  <!-- awal  -->
  <div class="col-md-6 grid-margin">
    <div class="card card-statistics cardku">
      <a href="<?= site_url('Korka') ?>" class="hilih" style="text-decoration:none; color: black">
        <div class="card-body">
          <div class="clearfix">
            <div class="float-left">
              <i class="mdi mdi-clipboard-text text-warning icon-lg"></i>
            </div>
            <div class="float-right">
              <p class="mb-0 text-right">Materi</p>
              <div class="fluid-container">
                <h3 class="font-weight-medium text-right mb-0">
                  0
                </h3>
              </div>
            </div>
          </div>
          <p class="text-muted mt-3 mb-0">
            <i class="mdi mdi-account mr-1" aria-hidden="true"></i> Total materi
          </p>
        </div>
      </a>
    </div>
  </div>
  <!-- akhir  -->

  <div class="col-sm-12 grid-margin stretch-card">
    <div class="card card-statistics">
      <a style="text-decoration:none; color: grey"
      data-toggle="collapse" href="#collapseExample2" role="button" aria-expanded="false" aria-controls="collapseExample2">
      <div class="card-body">
        <div class="clearfix">
          <div class="float-left">
            <i class="mdi mdi-email text-danger icon-lg"></i>
          </div>
          <div class="float-right">
            <p class="mb-0 text-right" style="color: black">Buat Surat</p>
            <div class="fluid-container">
              <h3 class="font-weight-medium text-right mb-0" style="color: black">

              </h3>
            </div>
          </div>
        </div>
        <p class="mt-3 mb-0">
          <i class="mdi mdi-account mr-1" aria-hidden="true"></i>
          Pilihan Surat
          &nbsp;<i><span class="mdi mdi-arrow-down-drop-circle-outline"></span></i>
        </p>
        <div class="collapse row" id="collapseExample2">

          <!-- awal  -->
          <div class="col-md-12 grid-margin stretch-card mt-2">
            <div class="card card-statistics cardku">
              <a href="<?= site_url('Create/Pribadi') ?>" class="hilih" style="text-decoration:none; color: black">
                <div class="card-body" style="background-color: #f2f2f2; color: grey !important">
                  <div class="clearfix">
                    <div class="float-left">
                      <i class="mdi mdi-account-convert icon-md"></i>
                    </div>
                    <div class="float-right">
                      <p class="mb-0 text-right" style="font-size: 15px;">Pribadi</p>
                      <div class="fluid-container">
                        <p class="font-weight-medium text-right mb-0">
                          
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
              </a>
            </div>
          </div>
          <!-- akhir  -->

          <!-- awal  -->
          
          <!-- akhir  -->

          <!-- awal  -->
          <div class="col-md-6 grid-margin stretch-card mt-2">
            <div class="card card-statistics cardku">
              <a href="<?= site_url('Create/Niaga') ?>" class="hilih" style="text-decoration:none; color: black">
                <div class="card-body" style="background-color: #f2f2f2; color: grey !important">
                  <div class="clearfix">
                    <div class="float-left">
                      <i class="mdi mdi-chart-pie icon-md"></i>
                    </div>
                    <div class="float-right">
                      <p class="mb-0 text-right" style="font-size: 15px;">Niaga</p>
                      <div class="fluid-container">
                        <p class="font-weight-medium text-right mb-0">
                          
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
              </a>
            </div>
          </div>

          <div class="col-md-6 grid-margin stretch-card mt-2">
            <div class="card card-statistics cardku">
              <a href="<?= site_url('Create/Dinas') ?>" class="hilih" style="text-decoration:none; color: black">
                <div class="card-body" style="background-color: #f2f2f2; color: grey !important">
                  <div class="clearfix">
                    <div class="float-left">
                      <i class="mdi mdi-account-circle icon-md"></i>
                    </div>
                    <div class="float-right">
                      <p class="mb-0 text-right" style="font-size: 15px;">Dinas</p>
                      <div class="fluid-container">
                        <p class="font-weight-medium text-right mb-0">
                          
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
              </a>
            </div>
          </div>
          <!-- akhir  -->
        </div>
      </div>
    </a>
  </div>
</div>

</div>

</div>
