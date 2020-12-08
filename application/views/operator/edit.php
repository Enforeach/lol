        <?php
        if ($edit) {
            if($operatoy != null){
                $title = 'Edit Operator';
                $ftitle = 'Form Edit';
                $readonly = 'readonly';
                $required = '';
                $submit = 'Edit';
            }else{
                redirect('operator');
            }
        }else{
            $title = 'Tambah Operator';
            $ftitle = 'Form Add';
            $readonly = '';
            $required = 'required';
            $NAMA_SINGKAT = '';
            $NAMA_LENGKAP = '';
            $POSISI = '';
            $PASSWORD = '';
            $ALAMAT = '';
            $KOTA = '';
            $EMAIL = '';
            $NOMOR_TELEPHON = '';
            $FOTO = '';
            $PERIODE_AKTIF = '';
            $COUNTER = '';
            $KODE_TRANS = '';
            $JAM_KERJA = '';
            $WEWENANG = '';
            $EDIT = '';
            $INDIKATOR = '';
            $submit = 'Add';
        }
        ?>
        <div class="main-panel">
            <div class="content-wrapper" style="background-color: #e8f4f7;">
                <!-- content -->
                <h3 class="text-center"><?= $title ?></h3>
                <br>
                <div class="tab-content">
                    <div id="profile">
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
                                                                        <input type="text" class="form-control" name="NAMA_LENGKAP" value="">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="" class="control-label">Nama Singkat</label>
                                                                    <div>
                                                                        <input type="text" name="NAMA_SINGKAT" class="form-control" value="">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="email" class="col-md-12 control-label">E-Mail Address</label>
                                                        <div class="col-md-12">
                                                            <input id="email" type="email" class="form-control" name="EMAIL" value="">
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="" class="col-md-12 control-label">No Telephone</label>
                                                        <div class="col-md-12">
                                                            <input type="number" name="NOMOR_TELEPHON" class="form-control" value="">
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="" class="col-md-12 control-label">Kota</label>
                                                        <div class="col-md-12">
                                                            <input type="text" name="KOTA" class="form-control" value="">
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="" class="col-md-12 control-label">alamat</label>
                                                        <div class="col-md-12">
                                                            <textarea type="text" name="ALAMAT" class="form-control" rows="5"></textarea>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-12">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="" class="control-label">Posisi</label>
                                                                    <div>
                                                                        <input type="text" name="POSISI" class="form-control" value="">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="" class="control-label">Wewenang</label>
                                                                    <div>
                                                                        <input type="text" name="WEWENANG" class="form-control" value="">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="" class="control-label">Counter</label>
                                                                    <div>
                                                                        <input type="text" name="COUNTER" class="form-control" value="">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="" class="control-label">Kode Trans</label>
                                                                    <div>
                                                                        <input type="text" name="KODE_TRANS" class="form-control" value="">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="" class="control-label">Jam Kerja</label>
                                                                    <div>
                                                                        <input type="number" name="JAM_KERJA" class="form-control" value="">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="" class="control-label">Indikator</label>
                                                                    <div>
                                                                        <input type="text" name="INDIKATOR" class="form-control" value="">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="" class="col-md-12 control-label">Password</label>
                                                        <div class="col-md-12 ">
                                                            <input type="password" name="PASSWORD" class="form-control" value="">
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="" class="col-md-12 control-label">Konfirmasi Password</label>
                                                        <div class="col-md-12 ">
                                                            <input type="password" class="form-control" value="">
                                                        </div>
                                                    </div>


                                                    <br>
                                                    <div class="col-md-12">
                                                        <button type="submit" class="btn btn-primary" name="save">
                                                            <?= $submit ?>
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
                                                        <label for="foto" class=" control-label">Foto Profile</label>
                                                        <div>
                                                            <img class="product" width="210" height="210" src="" alt=""
                                                            style="display: block;
                                                            margin-left: auto;
                                                            margin-right: auto;"/>
                                                            <input type="file" accept="image/*" class="uploads form-control" style="margin-top: 20px;" name="FOTO">
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
