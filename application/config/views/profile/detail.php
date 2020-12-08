<div class="main-panel">
    <div class="content-wrapper" style="background-color: #e8f4f7;">
        <!-- content -->
        <ul class="nav nav-tabs">
            <li class="nav-item">
              <a class="nav-link active" data-toggle="tab" href="#profile">Detail Operator</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="tab"  href="#menu1">Pengaturan Akun</a>
            </li>
        </ul>

        <div class="tab-content">
            <div id="profile" class="tab-pane fade show active">
            <form action="" method="post" enctype="multipart/form-data">
                    <div class="row">
                                <!-- biodata -->
                                <div class="col-md-8 d-flex align-items-stretch grid-margin">
                                <div class="row flex-grow">
                                    <div class="col-12">
                                    <div class="card">
                                        <div class="card-body">

                                            <div class="col-md-12">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="" class="control-label">Nama Lengkap</label>
                                                            <div>
                                                                <input type="text" class="form-control" value="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="" class="control-label">Nama Singkat</label>
                                                            <div>
                                                                <input type="text" class="form-control" value="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="email" class="col-md-12 control-label">E-Mail Address</label>
                                                <div class="col-md-12">
                                                    <input id="email" type="email" class="form-control" name="email" value="westlakewetland@gmail.com" required readonly="">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="" class="col-md-12 control-label">No Telephone</label>
                                                <div class="col-md-12">
                                                    <input type="number" class="form-control" value="08974680033">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="" class="col-md-12 control-label">Kota</label>
                                                <div class="col-md-12">
                                                    <input type="text" class="form-control" value="Malang/Batu">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="" class="col-md-12 control-label">alamat</label>
                                                <div class="col-md-12">
                                                    <textarea type="text" class="form-control" rows="5"></textarea>
                                                </div>
                                            </div>
                                            
                                            <div class="col-md-12">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="" class="control-label">Posisi</label>
                                                            <div>
                                                                <input type="text" class="form-control" value="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="" class="control-label">Wewenang</label>
                                                            <div>
                                                                <input type="text" class="form-control" value="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="" class="control-label">Counter</label>
                                                            <div>
                                                                <input type="text" class="form-control" value="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="" class="control-label">Kode Trans</label>
                                                            <div>
                                                                <input type="text" class="form-control" value="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="" class="control-label">Jam Kerja</label>
                                                            <div>
                                                                <input type="number" class="form-control" value="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="" class="control-label">Indikator</label>
                                                            <div>
                                                                <input type="text" class="form-control" value="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                            <br>
                                            <div class="col-md-12">
                                                <button type="submit" class="btn btn-primary" id="submit">
                                                    Update
                                                </button>
                                                <a href="<?= site_url('Operator') ?>" class="btn btn-light pull-right">Back</a>
                                            </div>
                                        
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                </div>
                                <!-- end biodata -->

                                <!-- foto profil -->
                                <div class="col-md-4 d-flex align-items-stretch grid-margin">
                                    <div class="row flex-grow">
                                        <div class="col-12">
                                        <div class="card">
                                            <div class="card-body">
                                            <div class="form-group">
                                                <label for="email" class=" control-label">Foto Profile</label>
                                                <div>
                                                    <img class="product" width="200" height="200" src="<?= site_url('assets/images/logo.jpeg'); ?>"
                                                    style="display: block;
                                                    margin-left: auto;
                                                    margin-right: auto;"/>
                                                    <input type="file" class="uploads form-control" style="margin-top: 20px;" name="gambar">
                                                </div>
                                            </div>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                    </div>
            </form>
            </div>

            <!-- Pengaturan -->
            <div id="menu1" class="tab-pane fade">
            <form action="" method="post" enctype="multipart/form-data">
            <div class="row">
                        <div class="col-md-12 d-flex align-items-stretch grid-margin">
                        <div class="row flex-grow">
                            <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                <!-- <h4 class="card-title">Pengaturan Akun</h4> -->
                                    <div class="form-group">
                                        <label for="password" class="col-md-4 control-label">Password Baru</label>
                                        <div class="col-md-6">
                                            <input id="password" type="password" class="form-control" onkeyup='check();' name="password">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="password-confirm" class="col-md-4 control-label">Konfirmasi Password</label>
                                        <div class="col-md-6">
                                            <input id="confirm_password" type="password" onkeyup="check()" class="form-control" name="password_confirmation">
                                            <span id='message'></span>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="col-md-12">
                                        <button type="submit" class="btn btn-primary" id="submit">
                                            Update
                                        </button>
                                        <a href="home.html" class="btn btn-light pull-right">Back</a>
                                    </div>
                                   
                                </div>
                            </div>
                            </div>
                        </div>
                        </div>
            </div>
            </form>
            </div>
        </div>
        <!-- akhir content -->
    </div>
