        <?php
        if ($edit) {
           if($operatoy != null){
            $title = 'Edit Operator';
            $ftitle = 'Form Edit';
            $readonly = 'readonly';
            $required = '';
            $submit = 'Edit';
            $NAMA_SINGKAT = $operatoy->NAMA_SINGKAT;
            $NAMA_LENGKAP = $operatoy->NAMA_LENGKAP;
            $POSISI = $operatoy->POSISI;
            $PASSWORD = $operatoy->PASSWORD;
            $ALAMAT = $operatoy->ALAMAT;
            $KOTA = $operatoy->KOTA;
            $EMAIL = $operatoy->EMAIL;
            $NOMOR_TELEPHON = $operatoy->NOMOR_TELEPHON;
            $FOTO = $operatoy->FOTO;
            $PERIODE_AKTIF = $operatoy->PERIODE_AKTIF;
            $COUNTER = $operatoy->COUNTER;
            $KODE_TRANS = $operatoy->KODE_TRANS;
            $JAM_KERJA = $operatoy->JAM_KERJA;
            $WEWENANG = $operatoy->WEWENANG;
            $EDIT = $operatoy->EDIT;
            $INDIKATOR = $operatoy->INDIKATOR;
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
        $submit = 'Tambah Data';
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
                            <div class="col-xl-8 d-flex align-items-stretch grid-margin">
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
                                                                    <input type="text" class="form-control" name="NAMA_LENGKAP" value="<?= $NAMA_LENGKAP; ?>" placeholder="contoh: Agus Suprapto">
                                                                    <input type="hidden" class="form-control" name="OldF" value="<?= $FOTO; ?>" placeholder="contoh: Agus Suprapto">
                                                                    <input type="hidden" class="form-control" name="OldN" value="<?= $NAMA_SINGKAT; ?>" placeholder="contoh: Agus Suprapto">

                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="" class="control-label">Username</label>
                                                                <div>
                                                                    <input type="text" name="NAMA_SINGKAT" class="form-control" value="<?= $NAMA_SINGKAT; ?>" placeholder="contoh: agus.suprapto">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label for="email" class="col-md-12 control-label">E-Mail Address</label>
                                                    <div class="col-md-12">
                                                        <input id="email" type="email" class="form-control" name="EMAIL" value="<?= $EMAIL; ?>" placeholder="contoh: agussuprapto@mail.com">
                                                    </div>
                                                </div>

                                                <div class="col-md-12">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="" class="control-label">No Telephone</label>
                                                                <div class="">
                                                                    <input type="number" name="NOMOR_TELEPHON" class="form-control" value="<?= $NOMOR_TELEPHON; ?>" 
                                                                    placeholder="contoh: 08974680xxx" min="0">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="" class="control-label">Kota</label>
                                                                <div class="">
                                                                    <input type="text" name="KOTA" class="form-control" value="<?= $KOTA; ?>" placeholder="contoh: Malang/Batu/Surabaya">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label for="" class="col-md-12 control-label">alamat</label>
                                                    <div class="col-md-12">
                                                        <textarea type="text" name="ALAMAT" class="form-control"  rows="5" placeholder="contoh: Jalan/RT/RW/Desa/Kecamatan" ><?= $ALAMAT ;?></textarea>
                                                    </div>
                                                </div>

                                                <div class="col-md-12">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="" class="control-label">Posisi</label>
                                                                <div>
                                                                    <input type="text" name="POSISI" class="form-control" value="<?= $POSISI; ?>" placeholder="contoh: Karyawan">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="" class="control-label">Wewenang</label>
                                                                <div>
                                                                    <input type="text" name="WEWENANG" class="form-control" value="<?= $WEWENANG; ?>">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="" class="control-label">Counter</label>
                                                                <div>
                                                                    <input type="text" name="COUNTER" class="form-control" value="<?= $COUNTER; ?>">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="" class="control-label">Kode Trans</label>
                                                                <div>
                                                                    <input type="text" name="KODE_TRANS" class="form-control" value="<?= $KODE_TRANS; ?>">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="" class="control-label">Jam Kerja</label>
                                                                <div>
                                                                    <input type="number" name="JAM_KERJA" class="form-control" value="<?= $JAM_KERJA; ?>" placeholder="contoh: 8" min="0">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="" class="control-label">Indikator</label>
                                                                <div>
                                                                    <input type="text" name="INDIKATOR" class="form-control" value="<?= $INDIKATOR; ?>">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end biodata -->

                            <!-- foto profil -->
                            <div class="col-xl-4 d-flex align-items-stretch grid-margin">
                                <div class="row flex-grow">
                                    <div class="col-12">
                                        <div class="card">
                                            <div class="card-body">

                                                <div class="form-group">
                                                    <label for="foto" class=" control-label">Foto Profile</label>
                                                    <div>
                                                        <?php if (!$edit) { ?>
                                                          <img id="profileImage" width="210" height="210" src="https://scontent-sin6-2.xx.fbcdn.net/v/t1.0-9/88071639_1418006338377986_4975427743618433024_n.jpg?_nc_cat=109&_nc_sid=8024bb&_nc_ohc=6dDxjcNhEIwAX-8VrfX&_nc_ht=scontent-sin6-2.xx&oh=a27ce54cf064e60401fd2f7712cdd5b6&oe=5EA50479" alt=""
                                                          style="display: block;
                                                          border: 1px solid gray;
                                                          margin-left: auto;
                                                          margin-right: auto; 
                                                          object-fit: cover; 
                                                          border-radius: 50%;
                                                          cursor: pointer;"/>
                                                      <?php }else { ?>
                                                        <img id="profileImage" width="210" height="210" src="" alt=""
                                                        style="display: block;
                                                        border: 1px solid gray;
                                                        margin-left: auto;
                                                        margin-right: auto; 
                                                        object-fit: cover; 
                                                        border-radius: 50%;
                                                        cursor: pointer;
                                                        background-image: url(<?= site_url("images/operator/".$FOTO) ?>);
                                                        background-size: 210px 210px;
                                                        "/>
                                                    <?php } ?>
                                                    <div class="file" style="display: none">
                                                        <input type="file" id="imageUpload" accept=" accept="image/png,image/jpeg" class="uploads form-control" style="margin-top: 20px;" name="FOTO" placeholder="Photo" capture="filesystem">
                                                    </div>
                                                    <p style="text-align: center; color: blue; font-size:11px; margin-top: 10px">klik gambar untuk ganti foto</p>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="form-group">
                                                <label for="" class="control-label">Password</label>
                                                <div class="">
                                                    <input type="password" name="PASSWORD" class="form-control" id="password" value="123456" readonly="" placeholder="minimal 8 karakter">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="" class="control-label">Konfirmasi Password</label>
                                                <div class="">
                                                    <input type="password" class="form-control" id="confirm_password" value="123456" placeholder="ketik ulang password" readonly="">
                                                </div>
                                            </div>
                                            <p>Default Password = 123456</p>

                                            <div class="form-group">
                                                <p id='message'></p>
                                            </div>
                                            <br>
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
                </form>
            </div>
            <?php
            if($alert == "success"){
                echo "<script>success_sweet('Data is saved.','addOperator');</script>";
            }
            if($alert == "exist"){
                echo "<script>failed_sweet('The file is already exist.');</script>";
            }
            if($alert == "success_edit"){
                echo "<script>success_sweet('Data is updated.','Operator');</script>";
            }
            if($alert == "too large"){
                echo "<script>failed_sweet('The file you are trying to upload is too large.');</script>";
            }
            ?>

        </div>
        <!-- akhir content -->
    </div>
