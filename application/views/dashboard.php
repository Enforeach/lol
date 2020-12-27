<?php
if ($this->m_surat->getCountSuratUs() != 0) {

  $countall = $this->m_surat->getCountSuratUs();
}else {
  $countall = 0;
}

if ($this->m_surat->getCountSuratPrib() != 0) {

  $countprib = $this->m_surat->getCountSuratPrib();
}else {
  $countprib = 0;
}
if ($this->m_surat->getCountSuratDin() != 0) {

  $countdin = $this->m_surat->getCountSuratDin();
}else {
  $countdin = 0;
}
if ($this->m_surat->getCountSuratNia() != 0) {

  $countnia = $this->m_surat->getCountSuratNia();
}else {
  $countnia = 0;
}
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
              <i class="mdi mdi-account-convert text-info icon-lg"></i>
            </div>
            <div class="float-right">
              <p class="mb-0 text-right" style="color: black">History</p>
              <div class="fluid-container">
                <h3 class="font-weight-medium text-right mb-0" style="color: black">
                  <?= $countall ?> Data
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
                <a href="<?= site_url('Side/History/All') ?>" class="hilih" style="text-decoration:none; color: black">
                  <div class="card-body" style="background-color: #f2f2f2; color: grey !important">
                    <div class="clearfix">
                      <div class="float-left">
                        <i class="mdi mdi-library-books icon-md"></i>
                      </div>
                      <div class="float-right">
                        <p class="mb-0 text-right">Semua Surat</p>
                        <div class="fluid-container">
                          <p class="font-weight-medium text-right mb-0">
                            <?= $countall ?> Data
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
                <a href="<?= site_url('Side/History/Pribadi') ?>" class="hilih" style="text-decoration:none; color: black">
                  <div class="card-body" style="background-color: #f2f2f2; color: grey !important">
                    <div class="clearfix">
                      <div class="float-left">
                        <i class="mdi mdi-account-circle icon-md"></i>
                      </div>
                      <div class="float-right">
                        <p class="mb-0 text-right">Surat Pribadi</p>
                        <div class="fluid-container">
                          <p class="font-weight-medium text-right mb-0">
                            <?= $countprib ?> Data
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
                <a href="<?= site_url('Side/History/Dinas') ?>" class="hilih" style="text-decoration:none; color: black">
                  <div class="card-body" style="background-color: #f2f2f2; color: grey !important">
                    <div class="clearfix">
                      <div class="float-left">
                        <i class="mdi mdi-account-multiple-outline icon-md"></i>
                      </div>
                      <div class="float-right">
                        <p class="mb-0 text-right">Surat Dinas</p>
                        <div class="fluid-container">
                          <p class="font-weight-medium text-right mb-0">
                            <?= $countdin ?> Data
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
                <a href="<?= site_url('Side/History/Niaga') ?>" class="hilih" style="text-decoration:none; color: black">
                  <div class="card-body" style="background-color: #f2f2f2; color: grey !important">
                    <div class="clearfix">
                      <div class="float-left">
                        <i class="mdi mdi-chart-pie icon-md"></i>
                      </div>
                      <div class="float-right">
                        <p class="mb-0 text-right">Surat Niaga</p>
                        <div class="fluid-container">
                          <p class="font-weight-medium text-right mb-0">
                            <?= $countnia ?> Data
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
      <a href="<?= site_url('Home/Materi') ?>" class="hilih" style="text-decoration:none; color: black">
        <div class="card-body">
          <div class="clearfix">
            <div class="float-left">
              <i class="mdi mdi-clipboard-text text-warning icon-lg"></i>
            </div>
            <div class="float-right">
              <p class="mb-0 text-right">Materi</p>
              <div class="fluid-container">
                <h3 class="font-weight-medium text-right mb-0">
                </h3>
              </div>
            </div>
          </div>
          <p class="text-muted mt-3 mb-0">
            <i class="mdi mdi-account mr-1" aria-hidden="true"></i> Materi
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
            <p class="mb-0 text-right" style="color: black; font-size: 25px;"><b>Buat Surat</b></p>
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
              <a data-toggle="modal" data-target="#tambah-niaga" href="#" class="hilih" style="text-decoration:none; color: black">
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
              <a data-toggle="modal" data-target="#tambah-wil" href="#" class="hilih" style="text-decoration:none; color: black">
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

<!-- Modal Tambah -->
<div class="modal fade" id="tambah-wil" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content" style="background-color: white; border-radius: 0px">
      <div class="modal-header">
       <!-- id="exampleModalLongTitle -->
       <h5 class="modal-title">Pilih Layout Dinas</h5>
       <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <div class="modal-body">
      <form>
        <div class="col-12 row">
          <div class="col-md-12">
            <div class="form-group">
              <div>
                <img id="profileImage" src="" alt="" style="width: 100%;"/>
                <center><b><u><p id="haha"> </p></u></b></center>
                <center><a href="#" id="lolo" class="btn btn-warning">Buat</a></center>
              </div>
            </div>
          </div>
        </div>
      </form>
    </div>
    <div class="modal-footer">
      <center style="margin-right: 19px;">
        <button id="btn-Indented" onclick="pop('Indented')" class="btn btn-primary">Indented</button>
        <button id="btn-Hanging" onclick="pop('Hanging')" class="btn btn-primary">Hanging</button>
        <button id="btn-Block" onclick="pop('Block')" class="btn btn-primary">Block</button>
        <button id="btn-Semi_Block" onclick="pop('Semi_Block')" class="btn btn-primary">Semi Block</button>
        <div style="margin-top: 10px;"></div>
        <button id="btn-Full_Block" onclick="pop('Full_Block')" class="btn btn-primary">Full Block</button>
      </center>
    </div>
  </div>
</div>
</div>
<!-- end modal tambah  -->

<!-- Modal Tambah -->
<div class="modal fade" id="tambah-niaga" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content" style="background-color: white; border-radius: 0px">
      <div class="modal-header">
       <!-- id="exampleModalLongTitle -->
       <h5 class="modal-title">Pilih Layout Niaga</h5>
       <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <div class="modal-body">
      <form>
        <div class="col-12 row">
          <div class="col-md-12">
            <div class="form-group">
              <div>
                <img id="profileImage2" src="" alt="" style="width: 100%;"/>
                <center><b><u><p id="haha2"> </p></u></b></center>
                <center><a href="#" id="lala" class="btn btn-warning">Buat</a></center>
              </div>
            </div>
          </div>
        </div>
      </form>
    </div>
    <div class="modal-footer">
      <center style="margin-right: 19px;">
        <button id="btn-Indented" onclick="pop('Indented')" class="btn btn-primary">Indented</button>
        <button id="btn-Hanging" onclick="pop('Hanging')" class="btn btn-primary">Hanging</button>
        <button id="btn-Block" onclick="pop('Block')" class="btn btn-primary">Block</button>
        <button id="btn-Semi_Block" onclick="pop('Semi_Block')" class="btn btn-primary">Semi Block</button>
        <div style="margin-top: 10px;"></div>
        <button id="btn-Full_Block" onclick="pop('Full_Block')" class="btn btn-primary">Full Block</button>
      </center>
    </div>
  </div>
</div>
</div>
<!-- end modal tambah  -->

</div>

<script type="text/javascript">
  function pop(x) {
    if (x == 'Indented') {
      document.getElementById("profileImage").src = "<?= site_url('images/Style/Indented.jpg'); ?>";
      document.getElementById("profileImage2").src = "<?= site_url('images/Style/Indented.jpg'); ?>";
      document.getElementById("haha").innerHTML = x+" Style";
      document.getElementById("haha2").innerHTML = x+" Style";
      document.getElementById("lala").href = "<?= site_url('Create/Niaga/Indented') ?>" ;
      document.getElementById("lolo").href = "<?= site_url('Create/Dinas/Indented') ?>" ;
    }
    if (x == 'Hanging') {
      document.getElementById("profileImage").src = "<?= site_url('images/Style/Hanging.jpg'); ?>";
      document.getElementById("profileImage2").src = "<?= site_url('images/Style/Hanging.jpg'); ?>";
      document.getElementById("haha").innerHTML = x+" Style";
      document.getElementById("haha2").innerHTML = x+" Style";
      document.getElementById("lala").href = "<?= site_url('Create/Niaga/Hanging') ?>" ;
      document.getElementById("lolo").href = "<?= site_url('Create/Dinas/Hanging') ?>" ;
    }
    if (x == 'Block') {
      document.getElementById("profileImage").src = "<?= site_url('images/Style/Block.jpg'); ?>";
      document.getElementById("profileImage2").src = "<?= site_url('images/Style/Block.jpg'); ?>";
      document.getElementById("haha").innerHTML = x+" Style";
      document.getElementById("haha2").innerHTML = x+" Style";
      document.getElementById("lala").href = "<?= site_url('Create/Niaga/Block') ?>" ;
      document.getElementById("lolo").href = "<?= site_url('Create/Dinas/Block') ?>" ;
    }
    if (x == 'Semi_Block') {
      document.getElementById("profileImage").src = "<?= site_url('images/Style/Semi_Block.jpg'); ?>";
      document.getElementById("profileImage2").src = "<?= site_url('images/Style/Semi_Block.jpg'); ?>";
      document.getElementById("haha").innerHTML = "Semi Block Style";
      document.getElementById("haha2").innerHTML = x+" Style";
      document.getElementById("lala").href = "<?= site_url('Create/Niaga/Semi') ?>" ;
      document.getElementById("lolo").href = "<?= site_url('Create/Dinas/Semi') ?>" ;
    }
    if (x == 'Full_Block') {
      document.getElementById("profileImage").src = "<?= site_url('images/Style/Full_Block.jpg'); ?>";
      document.getElementById("profileImage").src = "<?= site_url('images/Style/Full_Block.jpg'); ?>";
      document.getElementById("haha").innerHTML = "Full Block Style";
      document.getElementById("haha2").innerHTML = x+" Style";
      document.getElementById("lala").href = "<?= site_url('Create/Niaga/Full') ?>" ;
      document.getElementById("lolo").href = "<?= site_url('Create/Dinas/Full') ?>" ;
    }
  }
</script>