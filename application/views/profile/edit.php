<div class="main-panel">
    <div class="content-wrapper" style="background-color: #e8f4f7;">
        <!-- content -->
        <ul class="nav nav-tabs">
            <li class="nav-item">
              <a class="nav-link active" data-toggle="tab" href="#profile">Profile Saya</a>
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
                    <div class="col-md-12 d-flex align-items-stretch grid-margin">
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
                                                            <input type="text" class="form-control" name="nama_lengkap" value="<?= $user->nama_lengkap ?>">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="" class="control-label">Username</label>
                                                        <div>
                                                            <input type="text" class="form-control" name="username" value="<?= $user->username ?>">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                        <br>
                                        <div class="col-md-12">
                                            <button type="submit" class="btn btn-primary" name="save">
                                                Update
                                            </button>
                                            <a href="<?= site_url('Profile') ?>" class="btn btn-light pull-right">Back</a>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end biodata -->
                </div>
            </div>

            <!-- Pengaturan -->
            <div id="menu1" class="tab-pane fade">
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
                                                <input id="password" type="password" class="form-control" onkeyup='check();' name="PASSWORD">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="password-confirm" class="col-md-4 control-label">Konfirmasi Password</label>
                                            <div class="col-md-6">
                                                <input id="confirm_password" type="password" class="form-control mb-2" name="password_confirmation">
                                            </div>
                                        </div>
                                        <br>
                                        <div class="col-md-12">
                                            <button type="submit" class="btn btn-primary" id="submit">
                                                Update
                                            </button>
                                            <a href="<?= site_url('Profile') ?>" class="btn btn-light pull-right">Back</a>
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
