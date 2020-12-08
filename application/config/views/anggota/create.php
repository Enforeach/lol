        <?php
        if ($edit) {
            if($Anggota != null){
                $title = 'Edit Anggota';
                $ftitle = 'Form Edit';
                $readonly = 'readonly';
                $required = '';
                $submit = 'Edit';
                $REG_COM = $Anggota->REG_COM;
                $RFID = $Anggota->RFID;
                $NO_AGT = $Anggota->NO_AGT;
                $NIK = $Anggota->NIK;
                $TGL_MSK = $Anggota->TGL_MSK;
                $TGL_KLR = $Anggota->TGL_KLR;
                $TGL_SKAP = $Anggota->TGL_SKAP;
                $NAMA_LENGKAP = $Anggota->NAMA_LENGKAP;
                $TMP_LHR = $Anggota->TMP_LHR;
                $TGL_LHR = $Anggota->TGL_LHR;
                $ID_SEX = $Anggota->ID_SEX;
                $ALMT_JALAN = $Anggota->ALMT_JALAN;
                $KODE_POS = $Anggota->KODE_POS;
                $RT = $Anggota->RT;
                $RW = $Anggota->RW;
                $DUSUN = $Anggota->DUSUN;
                $DESANKELURAHAN = $Anggota->DESANKELURAHAN;
                $KECAMATAN = $Anggota->KECAMATAN;
                $ID_KABNKOTA = $Anggota->ID_KABNKOTA;
                $ID_PROVINSI = $Anggota->ID_PROVINSI;
                $ID_KEWARGANEGARAAN = $Anggota->ID_KEWARGANEGARAAN;
                $TELEPON = $Anggota->TELEPON;
                $ID_AGAMA = $Anggota->ID_AGAMA;
                $ID_PENDIDIKAN_KK = $Anggota->ID_PENDIDIKAN_KK;
                $ID_PENDIDIKAN_SEDANG = $Anggota->ID_PENDIDIKAN_SEDANG;
                $ID_PEKERJAAN = $Anggota->ID_PEKERJAAN;
                $ID_STATUS_KAWIN = $Anggota->ID_STATUS_KAWIN;
                $ID_GOL_DRH = $Anggota->ID_GOL_DRH;
                $ID_STATUS_AGT = $Anggota->ID_STATUS_AGT;
                $FOTO = $Anggota->FOTO;
                $FOTO_KTP = $Anggota->FOTO_KTP;
                $BLOKIR = $Anggota->BLOKIR;
                $WIL = $Anggota->WIL;
                $TGL_UPDATE = $Anggota->TGL_UPDATE;
                $AKTIF = $Anggota->AKTIF;
                $KET_BLOKIR = $Anggota->KET_BLOKIR;

            //Step 2
                $ID_KO = $Danggota->ID_KO;
                $ID_KA = $Danggota->ID_KA;
                $REFERENSI = $Danggota->REFERENSI;
                $EKSTENSI = $Danggota->EKSTENSI;
                $LEVEL = $Danggota->LEVEL;
                $EMAIL = $Danggota->EMAIL;
                $NIK_AYAH = $Danggota->NIK_AYAH;
                $NAMA_AYAH = $Danggota->NAMA_AYAH;
                $NIK_IBU = $Danggota->NIK_IBU;
                $NAMA_IBU = $Danggota->NAMA_IBU;
                $NAMA_SI = $Danggota->NAMA_SI;
                $PHASIL_SI = $Danggota->PHASIL_SI;
                $REK_BANK = $Danggota->REK_BANK;
                $KODE_BANK = $Danggota->KODE_BANK;

            //Detail Pekerjaan
                $KEAHLIAN = $Danggota->KEAHLIAN;
                $KODE_USAHA = $Danggota->KODE_USAHA;
                $KET_USAHA = $Danggota->KET_USAHA;
                $ALAMAT_KRJ = $Danggota->ALAMAT_KRJ;
                $KOTA_KRJ = $Danggota->KOTA_KRJ;
                $TLP_KTR = $Danggota->TLP_KTR;
                $NPWP = $Danggota->NPWP;
                $KETERANGAN = $Danggota->KETERANGAN;
                $CATATAN = $Danggota->CATATAN;
                $KELORG = $Danggota->KELORG;
                $INDIKATOR = $Danggota->INDIKATOR;

            $submit = 'Edit Data';
            }else{
                redirect('Anggota');
            }
        }else{
            $title = 'Tambah Anggota';
            $ftitle = 'Form Add';
            $readonly = '';
            $required = 'required';
            $REG_COM = $reg;
            $RFID = '';
            $NO_AGT = '';
            $NIK = '';
            $TGL_MSK = '';
            $TGL_KLR = '';
            $TGL_SKAP = '';
            $NAMA_LENGKAP = '';
            $TMP_LHR = '';
            $TGL_LHR = '';
            $ID_SEX = '';
            $ALMT_JALAN = '';
            $KODE_POS = '';
            $RT = '';
            $RW = '';
            $DUSUN = '';
            $DESANKELURAHAN = '';
            $KECAMATAN = '';
            $ID_KABNKOTA = '';
            $ID_PROVINSI = '';
            $ID_KEWARGANEGARAAN = '';
            $TELEPON = '';
            $ID_AGAMA = '';
            $ID_PENDIDIKAN_KK = '';
            $ID_PENDIDIKAN_SEDANG = '';
            $ID_PEKERJAAN = '';
            $ID_STATUS_KAWIN = '';
            $ID_GOL_DRH = '';
            $ID_STATUS_AGT = '';
            $FOTO = '';
            $FOTO_KTP = '';
            $BLOKIR = '';
            $WIL = '';
            $TGL_UPDATE = '';
            $AKTIF = '';
            $KET_BLOKIR = '';

            //Step 2
            $ID_KO = '';
            $ID_KA = '';
            $REFERENSI = '';
            $EKSTENSI = '';
            $LEVEL = '';
            $EMAIL = '';
            $NIK_AYAH = '';
            $NAMA_AYAH = '';
            $NIK_IBU = '';
            $NAMA_IBU = '';
            $NAMA_SI = '';
            $PHASIL_SI = '';
            $REK_BANK = '';
            $KODE_BANK = '';

            //Detail Pekerjaan
            $KEAHLIAN = '';
            $KODE_USAHA = '';
            $KET_USAHA = '';
            $ALAMAT_KRJ = '';
            $KOTA_KRJ = '';
            $TLP_KTR = '';
            $NPWP = '';
            $KETERANGAN = '';
            $CATATAN = '';
            $KELORG = '';
            $INDIKATOR = '';

            $submit = 'Tambah Data';
        }
        ?>
        <div class="main-panel">
            <!-- content -->
            <div class="content-wrapper" style="background-color: #e8f4f7;">
                <h3 class="text-center"><?= $title ?></h3>
                <br>
                <!-- rownya -->
                <div class="row">
                    <div class="msf-form">
                       <form role="form" action="" method="post" enctype="multipart/form-data">
                        <!-- field account  -->
                        <fieldset>
                            <!-- biodata -->
                            <div class="col-xl-12 d-flex align-items-stretch grid-margin main1">
                                <div class="row flex-grow">
                                    <div class="col-12">
                                        <div class="card" style="border-radius: 10px; ">
                                            <div class="card-body">
                                                <!-- card  -->
                                                <div class="card-body">
                                                    <button class="btn btn-primary" disabled>Informasi Anggota</button>
                                                    <button class="btn btn-success" disabled>Step 1 / 2</button>
                                                    <!-- form poto  -->
                                                    <div class="form-group mt-4">
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
                                                            background-image: url(<?= site_url("images/anggota/".$FOTO) ?>);
                                                            background-size: 210px 210px;
                                                            "/>
                                                        <?php } ?>
                                                        <div class="file" style="display: none">
                                                            <input type="file" name="FOTO" id="imageUpload" accept=" accept="image/png,image/jpeg" class="uploads form-control" style="margin-top: 20px;" placeholder="Photo" capture="filesystem">
                                                        </div>
                                                        <p style="text-align: center; color: blue; font-size:11px; margin-top: 10px">klik gambar untuk ganti foto</p>
                                                    </div>
                                                </div>
                                                <!-- akhir poto form  -->
                                                <br>

                                                <!-- form regcom  -->
                                                <div class="col-md-12">
                                                    <h6 style="background-color: #cce6ff; padding: 8px; border-radius: 3px; margin-bottom: 20px">Nomer Identitas :</h6>
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label for="" class="control-label">Registrasi Computer</label>
                                                                <div>
                                                                    <input type="number" name="REG_COM" value="<?= $REG_COM ?>" class="form-control" placeholder="0001" min="0" readonly>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label for="" class="control-label">Nomor ID</label>
                                                                <div>
                                                                    <input type="number" name="RFID" class="form-control" value="<?= $RFID ?>" placeholder="ex. 080xxx7878" min="0" required>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label for="" class="control-label">NIK</label>
                                                                <div>
                                                                    <input type="number" class="form-control" name="NIK" value="<?= $NIK ?>" placeholder="sesuai KTP" min="0">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- akhir regcom  -->

                                                <!-- data diri  -->
                                                <div class="col-md-12">
                                                    <h6 style="background-color: #cce6ff; padding: 8px; border-radius: 3px; margin-bottom: 20px">Biodata Diri :</h6>
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label for="" class="control-label">Nama Lengkap</label>
                                                                <div>
                                                                    <input type="text" class="form-control" name="NAMA_LENGKAP" value="<?= $NAMA_LENGKAP ?>" placeholder="ex. agus suprapto">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label for="" class="control-label">Tempat Lahir</label>
                                                                <div>
                                                                    <input type="text" name="TMP_LHR" value="<?= $TMP_LHR ?>" class="form-control" placeholder="ex. malang">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label for="" class="control-label">Tanggal Lahir</label>
                                                                <div>
                                                                    <input type="date" id="dateInput" class="form-control" name="TGL_LHR" value="<?= $TGL_LHR ?>" style="height: 33.5px">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- akhir data diri  -->

                                                <!-- data status diri  -->
                                                <div class="col-md-12">
                                                    <h6 style="background-color: #cce6ff; padding: 8px; border-radius: 3px; margin-bottom: 20px">Data Status Diri :</h6>
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label for="" class="control-label">Gender</label>
                                                                <div>
                                                                    <select name="ID_SEX" class="form-control" style="height: 33.6px" required>
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
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label for="" class="control-label">Gol. Darah</label>
                                                                <div>
                                                                    <select class="form-control" name="ID_GOL_DRH" style="height: 33.6px" required>
                                                                        
                                                                        <?php
                                                                        if(!$edit){ 
                                                                        echo '<option value="">- PILIH -</option>';
                                                                        }
                                                                        foreach ($goldar as $key) {         
                                                                            if($ID_GOL_DRH == $key->ID){
                                                                                echo "<option value=".$key->ID."selected>".$key->NAMA."</option>";
                                                                            }else{
                                                                                echo "<option value=".$key->ID.">".$key->NAMA."</option>";
                                                                            }
                                                                            $key->ID++;
                                                                        }
                                                                        ?>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label for="" class="control-label">Status Kawin</label>
                                                                <div>
                                                                    <select name="ID_STATUS_KAWIN" class="form-control" style="height: 33.6px" required>
                                                                        
                                                                        <?php
                                                                        if(!$edit){ 
                                                                        echo '<option value="">- PILIH -</option>';
                                                                        }    
                                                                        foreach ($status_kawin as $key) {         
                                                                            if($ID_STATUS_KAWIN == $key->ID){
                                                                                echo "<option value=".$key->ID." selected>".$key->NAMA."</option>";
                                                                            }else{
                                                                                echo "<option value=".$key->ID.">".$key->NAMA."</option>";
                                                                            }
                                                                            $key->ID++;
                                                                        }
                                                                        ?>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label for="" class="control-label">Agama</label>
                                                                <select name="ID_AGAMA" id="" class="form-control" style="height: 33.6px" required>
                                                                    
                                                                    <?php
                                                                    if(!$edit){ 
                                                                        echo '<option value="">- PILIH -</option>';
                                                                        }               
                                                                    foreach ($agama as $key) {         
                                                                        if($ID_AGAMA == $key->ID){
                                                                            echo "<option value=".$key->ID." selected>".$key->NAMA."</option>";
                                                                        }else{
                                                                            echo "<option value=".$key->ID.">".$key->NAMA."</option>";
                                                                        }
                                                                        $key->ID++;
                                                                    }
                                                                    ?>
                                                                </select>
                                                            </div>
                                                        </div>        
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label for="" class="control-label">Kewarganegaraan</label>
                                                                <select name="ID_KEWARGANEGARAAN" id="" class="form-control" style="height: 33.6px" required>
                                                                    
                                                                    <?php
                                                                    if(!$edit){ 
                                                                        echo '<option value="">- PILIH -</option>';
                                                                        }
                                                                    foreach ($kewarganegaraan as $key) {         
                                                                        if($ID_KEWARGANEGARAAN == $key->ID){
                                                                            echo "<option value=".$key->ID." selected>".$key->NAMA."</option>";
                                                                        }else{
                                                                            echo "<option value=".$key->ID.">".$key->NAMA."</option>";
                                                                        }
                                                                        $key->ID++;
                                                                    } 
                                                                    ?>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label for="" class="control-label">Status Anggota</label>
                                                                <select name="ID_STATUS_AGT" id="" class="form-control" style="height: 33.6px" required>
                                                                                                                                    
                                                                    <?php
                                                                    if(!$edit){ 
                                                                        echo '<option value="">- PILIH -</option>';
                                                                        }
                                                                    foreach ($status_anggota as $key) {         
                                                                        if($ID_STATUS_AGT == $key->ID){
                                                                            echo "<option value=".$key->ID." selected>".$key->NAMA."</option>";
                                                                        }else{
                                                                            echo "<option value=".$key->ID.">".$key->NAMA."</option>";
                                                                        }
                                                                        $key->ID++;
                                                                    }     
                                                                    ?> 
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- akhir form status diri  -->

                                                <!-- alamat form  -->
                                                <div class="col-md-12">
                                                    <h6 style="background-color: #cce6ff; padding: 8px; border-radius: 3px; margin-bottom: 20px">Alamat :</h6>
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label for="" class="control-label">Provinsi</label>
                                                                <div class="">
                                                                    <select name="ID_PROVINSI" id="provinsi" class="form-control" style="height: 33.6px" required>
                                                                        
                                                                        <?php 
                                                                        if(!$edit){ 
                                                                        echo '<option value="">- PILIH -</option>';
                                                                        }
                                                                        foreach ($provinsi as $key) {         
                                                                            if($ID_PROVINSI == $key->ID){
                                                                                echo "<option value=".$key->ID." selected>".$key->NAMA."</option>";
                                                                            }else{
                                                                                echo "<option value=".$key->ID.">".$key->NAMA."</option>";
                                                                            }
                                                                        }    
                                                                        ?> 
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label for="" class="control-label">Kabupaten/Kota</label>
                                                                <div class="">
                                                                    <select name="ID_KABNKOTA" id="kota" class="form-control" style="height: 33.6px" required>
                                                                    <option value="">- PILIH -</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label for="" class="control-label">Kecamatan</label>
                                                                <div class="">
                                                                    <input type="text" class="form-control" name="KECAMATAN" value="<?= $KECAMATAN; ?>" placeholder="ex. dinoyo">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="form-group">
                                                                <label for="" class="control-label">Kelurahan/Desa</label>
                                                                <div class="">
                                                                    <input type="text" class="form-control" value="<?= $DESANKELURAHAN ?>" name="DESANKELURAHAN" placeholder="ex. lowokwaru">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="form-group">
                                                                <label for="" class="control-label">Dusun</label>
                                                                <div class="">
                                                                    <input type="text" name="DUSUN" value="<?= $DUSUN ?>" class="form-control" placeholder="ex. dusun">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="form-group">
                                                                <label for="" class="control-label">RT</label>
                                                                <div class="">
                                                                    <input type="number" name="RT" value="<?= $RT ?>" class="form-control" placeholder="ex. 05" min="0">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="form-group">
                                                                <label for="" class="control-label">RW</label>
                                                                <div class="">
                                                                    <input type="number" name="RW" value="<?= $RW ?>" class="form-control" placeholder="ex. 03" min="0">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="" class="control-label">Jalan</label>
                                                                <div class="">
                                                                    <textarea type="text" class="form-control" rows="3" name="ALMT_JALAN" placeholder="ex. Jalan Pegangsaan Timur Nomor 4 RT.3 RW.5"><?= $ALMT_JALAN ?></textarea>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="form-group">
                                                                <label for="" class="control-label">Kode Pos</label>
                                                                <div class="">
                                                                    <input type="text" class="form-control" name="KODE_POS" value="<?= $KODE_POS ?>" placeholder="ex. 662XX">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="form-group">
                                                                <label for="" class="control-label">Wilayah</label>
                                                                <div class="">
                                                                    <input type="text" class="form-control" name="WIL" value="<?= $WIL ?>" placeholder="A/B/C/D">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- akhir form alamat  -->

                                                <!-- form pendidikan dan pekerjaan  -->
                                                <div class="col-md-12">
                                                    <h6 style="background-color: #cce6ff; padding: 8px; border-radius: 3px; margin-bottom: 20px">Riwayat Pendidikan & Pekerjaan :</h6>
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label for="" class="control-label">Pendidikan Saat ini</label>
                                                                <div>
                                                                    <select name="ID_PENDIDIKAN_SEDANG" id="pend" class="form-control" style="height: 33.6px" required>
                                                                        
                                                                        <?php
                                                                        if(!$edit){ 
                                                                        echo '<option value="">- PILIH -</option>';
                                                                        }
                                                                        foreach ($pendidikan as $key) {         
                                                                            if($ID_PENDIDIKAN_SEDANG == $key->ID){
                                                                                echo "<option value=".$key->ID." selected>".$key->NAMA."</option>";
                                                                            }else{
                                                                                echo "<option value=".$key->ID.">".$key->NAMA."</option>";
                                                                            }
                                                                            $key->ID++;
                                                                        }       
                                                                        ?> 
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label for="" class="control-label">Pendidikan KK</label>
                                                                <div>
                                                                    <select name="ID_PENDIDIKAN_KK" id="pkk" class="form-control" style="height: 33.6px" required>
                                                                        
                                                                        <?php
                                                                        if(!$edit){ 
                                                                        echo '<option value="">- PILIH -</option>';
                                                                        }
                                                                        foreach ($pendidikan_kk as $key) {         
                                                                            if($ID_PENDIDIKAN_KK == $key->ID){
                                                                                echo "<option value=".$key->ID."selected>".$key->NAMA."</option>";
                                                                            }else{
                                                                                echo "<option value=".$key->ID.">".$key->NAMA."</option>";
                                                                            }
                                                                            $key->ID++;
                                                                        }
                                                                        ?> 
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label for="" class="control-label">Pekerjaan</label>
                                                                <div>
                                                                    <select name="ID_PEKERJAAN" id="pekerjaan" class="form-control" style="height: 33.6px" required>
                                                                        
                                                                        <?php
                                                                        if(!$edit){ 
                                                                        echo '<option value="">- PILIH -</option>';
                                                                        }
                                                                        foreach ($pekerjaan as $key) {         
                                                                            if($ID_PEKERJAAN == $key->ID){
                                                                                echo "<option value=".$key->ID." selected>".$key->NAMA."</option>";
                                                                            }else{
                                                                                echo "<option value=".$key->ID.">".$key->NAMA."</option>";
                                                                            }
                                                                            $key->ID++;
                                                                        }                       
                                                                        ?> 
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- akhir form pekerjaan  -->

                                                <!-- form data akun  -->
                                                <div class="col-md-12">
                                                    <h6 style="background-color: #cce6ff; padding: 8px; border-radius: 3px; margin-bottom: 20px">Data Akun :</h6>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="" class="control-label">No. Telepon (WA/Telp)</label>
                                                                <div>
                                                                    <input type="number" class="form-control" name="TELEPON" value="<?= $TELEPON ?>" placeholder="ex. 089xxxxxxxxx" min="0">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="" class="control-label">Foto KTP ( scan bagian depan )</label>
                                                                <div>
                                                                    <input type="file" class="form-control" name="FOTO_KTP" style="height: 34.5px">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- akhir form data akun  -->
                                                <br>

                                                <!-- button  -->
                                                <div class="col-md-12 mt-5">
                                                        <!-- <button type="submit" class="btn btn-primary">
                                                        </button> -->
                                                        <a href="<?= site_url('Anggota') ?>" class="btn btn-light">Back</a>
                                                        <button type="button" class="btn btn-primary pull-right" id="next">Lanjutkan &nbsp;&nbsp;<i class="fa fa-angle-right"></i></button>
                                                    </div>
                                                    <!-- button  -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end biodata -->    
                            </fieldset>
                            <!-- field account -->

                            <!-- field detail  -->
                            <fieldset>
                                <!-- content -->
                                <!-- biodata -->
                                <div class="col-xl-12 d-flex align-items-stretch grid-margin main1">
                                    <div class="row flex-grow">
                                        <div class="col-12">
                                            <div class="card" style="border-radius: 10px">
                                                <!-- card  -->
                                                <div class="card-body">
                                                    <button class="btn btn-primary" disabled>Detail Informasi</button>
                                                    <button class="btn btn-success" disabled>Step 2 / 2</button>

                                                    <!-- nomor komputer -->
                                                    <div class="col-md-12 mt-5">
                                                        <!-- <h6 style="background-color: #cce6ff; padding: 8px; border-radius: 3px; margin-bottom: 20px">Nomer Identitas :</h6> -->
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <label for="" class="control-label">Registrasi Computer</label>
                                                                    <div>
                                                                        <input type="number" name="REG_COM" value="<?= $REG_COM ?>" class="form-control" placeholder="0001" min="0" readonly>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <label for="" class="control-label">Kepala Organisasi</label>
                                                                    <div>
                                                                        <select id="kor" value="<?= $ID_KO ?>" name="ID_KO" class="form-control" required>
                                                                            
                                                                            <?php
                                                                            if(!$edit){ 
                                                                        echo '<option value="">- PILIH -</option>';
                                                                        }
                                                                            foreach ($kplor as $key) {         
                                                                                if($ID_KO == $key->ID){
                                                                                    echo "<option value=".$key->ID." selected>".$key->NAMA."</option>";
                                                                                }else{
                                                                                    echo "<option value=".$key->ID.">".$key->NAMA."</option>";
                                                                                }
                                                                                $key->ID++;
                                                                            }                       
                                                                            ?> 
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <label for="" class="control-label">Kepala Anggota</label>
                                                                    <div>
                                                                        <select id="ka" value="ID_KA" name="ID_KA" class="form-control" style="height: 33.6px" required>
                                                                            
                                                                            <?php
                                                                            if(!$edit){ 
                                                                        echo '<option value="">- PILIH -</option>';
                                                                        }
                                                                            foreach ($kplang as $key) {         
                                                                                if($ID_KA == $key->ID){
                                                                                    echo "<option value=".$key->ID." selected>".$key->NAMA."</option>";
                                                                                }else{
                                                                                    echo "<option value=".$key->ID.">".$key->NAMA."</option>";
                                                                                }
                                                                                $key->ID++;
                                                                            }                       
                                                                            ?> 
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="form-group">
                                                                    <label for="" class="control-label">Referensi</label>
                                                                    <div>
                                                                        <input type="text" value="<?= $REFERENSI ?>" name="REFERENSI" class="form-control" placeholder="isikan">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="form-group">
                                                                    <label for="" class="control-label">Ekstensi</label>
                                                                    <div>
                                                                        <input type="text" value="<?= $EKSTENSI ?>" name="EKSTENSI" class="form-control" placeholder="isikan">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="form-group">
                                                                    <label for="" class="control-label">Level</label>
                                                                    <div>
                                                                        <input type="text" value="<?= $LEVEL ?>" name="LEVEL" class="form-control" placeholder="isikan">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="form-group">
                                                                    <label for="" class="control-label">Email</label>
                                                                    <div>
                                                                        <input type="text" value="<?= $EMAIL ?>" name="EMAIL" class="form-control" placeholder="isikan">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- akhir nomor komputer -->

                                                    <!-- data keluarga -->
                                                    <div class="col-md-12">
                                                        <h6 style="background-color: #cce6ff; padding: 8px; border-radius: 3px; margin-bottom: 20px">Detail Keluarga :</h6>
                                                        <div class="row">
                                                            <div class="col-md-3">
                                                                <div class="form-group">
                                                                    <label for="" class="control-label">NIK Ayah (KTP)</label>
                                                                    <div>
                                                                        <input type="text" value="<?= $NIK_AYAH ?>" name="NIK_AYAH" class="form-control"  placeholder="isikan">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="form-group">
                                                                    <label for="" class="control-label">Nama Lengkap Ayah</label>
                                                                    <div>
                                                                        <input type="text" value="<?= $NAMA_AYAH ?>" name="NAMA_AYAH" class="form-control" placeholder="ex. isikan">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="form-group">
                                                                    <label for="" class="control-label">NIK Ibu (KTP)</label>
                                                                    <div>
                                                                        <input type="text" value="<?= $NIK_IBU ?>" name="NIK_IBU" class="form-control"  placeholder="isikan">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="form-group">
                                                                    <label for="" class="control-label">Nama Lengkap Ibu</label>
                                                                    <div>
                                                                        <input type="text" value="<?= $NAMA_IBU ?>" name="NAMA_IBU" class="form-control" placeholder="ex. isikan">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="" class="control-label">Nama Suami/Istri</label>
                                                                    <div>
                                                                        <input type="text" value="<?= $NAMA_SI ?>" name="NAMA_SI" class="form-control" placeholder="ex. isikan">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="" class="control-label">Penghasilan Suami/Istri</label>
                                                                    <div>
                                                                        <input type="text" value="<?= $PHASIL_SI ?>" name="PHASIL_SI" class="form-control"  placeholder="isikan">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- end data diri -->

                                                    <!-- data kerja -->
                                                    <div class="col-md-12">
                                                        <h6 style="background-color: #cce6ff; padding: 8px; border-radius: 3px; margin-bottom: 20px">Detail Pekerjaan :</h6>
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <label for="" class="control-label">Keahlian</label>
                                                                    <div>
                                                                        <input type="text" value="<?= $KEAHLIAN ?>" name="KEAHLIAN" class="form-control"  placeholder="isikan">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <label for="" class="control-label">Kode Usaha</label>
                                                                    <div>
                                                                        <input type="text" value="<?= $KODE_USAHA ?>" name="KODE_USAHA" class="form-control" placeholder="ex. isikan">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <label for="" class="control-label">Keterangan Usaha</label>
                                                                    <div>
                                                                        <input type="text" value="<?= $KET_USAHA ?>" name="KET_USAHA" class="form-control"  placeholder="isikan">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="" class="control-label">Alamat Kerja</label>
                                                                    <div>
                                                                        <textarea type="text" value="<?= $ALAMAT_KRJ ?>" class="form-control" rows="3" name="ALAMAT_KRJ" placeholder="ex. Jalan Pegangsaan Timur Nomor 4 RT.3 RW.5"></textarea>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="form-group">
                                                                    <label for="" class="control-label">Kota Kerja</label>
                                                                    <div>
                                                                        <input type="text" value="<?= $KOTA_KRJ ?>" name="KOTA_KRJ" class="form-control" placeholder="ex. isikan">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="form-group">
                                                                    <label for="" class="control-label">Telepon Kantor</label>
                                                                    <div>
                                                                        <input type="text" value="<?= $TLP_KTR ?>" name="TLP_KTR" class="form-control"  placeholder="isikan">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <label for="" class="control-label">NPWP ( Pajak )</label>
                                                                    <div>
                                                                        <input type="text" value="<?= $NPWP ?>" name="NPWP" class="form-control"  placeholder="isikan">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <label for="" class="control-label">Keterangan</label>
                                                                    <div>
                                                                        <input type="text" value="<?= $KETERANGAN ?>" name="KETERANGAN" class="form-control"  placeholder="isikan">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <label for="" class="control-label">Catatan</label>
                                                                    <div>
                                                                        <input type="text" value="<?= $CATATAN ?>" name="CATATAN" class="form-control"  placeholder="isikan">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- end data kerja -->

                                                    <!-- data rekening -->
                                                    <div class="col-md-12">
                                                        <h6 style="background-color: #cce6ff; padding: 8px; border-radius: 3px; margin-bottom: 20px">Detail Rekening :</h6>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="" class="control-label">Rekening Bank</label>
                                                                    <div>
                                                                        <input type="text" value="<?= $REK_BANK ?>"  name="REK_BANK" class="form-control"  placeholder="isikan">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="" class="control-label">Kode Bank</label>
                                                                    <div>
                                                                        <input type="text" value="<?= $KODE_BANK ?>"  name="KODE_BANK" class="form-control" placeholder="ex. isikan">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- end data rekening -->

                                                    <!-- data lainya -->
                                                    <div class="col-md-12">
                                                        <h6 style="background-color: #cce6ff; padding: 8px; border-radius: 3px; margin-bottom: 20px">Detail Lainya :</h6>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="" class="control-label">Kel/Org</label>
                                                                    <div>
                                                                        <input type="text" value="<?= $KELORG ?>"  name="KELORG" class="form-control"  placeholder="isikan">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="" class="control-label">Indikator</label>
                                                                    <div>
                                                                        <input type="text" value="<?= $INDIKATOR ?>"  name="INDIKATOR" class="form-control" placeholder="ex. isikan">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- end data lainya -->

                                                    <!-- button  -->
                                                    <div class="col-md-12 mt-5">
                                                        <button type="button" class="btn btn-light" id="previous"><i class="fa fa-angle-left"></i> Kembali</button>
                                                        <button type="submit" name="save" class="btn btn-primary pull-right"><?= $submit ?></button>
                                                    </div>
                                                    <!-- end button  -->

                                                </div>
                                                <!-- end card body  -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end biodata -->
                            </fieldset>
                            <!-- akhir field detail  -->

                        </form>
                        <!-- akhir form  -->
                    </div>
                    <!-- rownya  -->
                </div>
                <!-- akhir formmsf  -->

                <script type="text/javascript">
                    $("#provinsi").change(function(){
                        var id_provinces = $(this).val(); 
                        $.ajax({
                            type: "POST",
                            dataType: "html",
                            url: '<?= site_url('Anggota/getKota') ?>',
                            data: "id_provinces="+id_provinces,
                            success: function(msg){
                                $("select#kota").html(msg);                                                    
                            }
                        });                    
                    });  
                </script>

                <?php
                if($alert == "success"){
                    echo "<script>success_sweet('Data is saved.','create');</script>";
                }
                if($alert == "exist"){
                    echo "<script>failed_sweet('The file is already exist.');</script>";
                }
                if($alert == "success_edit"){
                    echo "<script>success_sweet('Data is updated.','Anggota');</script>";
                }
                if($alert == "too large"){
                    echo "<script>failed_sweet('The file you are trying to upload is too large.');</script>";
                }
                ?>

            </div>
            <!-- akhir content -->
