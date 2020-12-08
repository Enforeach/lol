<div class="main-panel">
    <div class="content-wrapper" style="background-color: #e8f4f7;">
        <!-- konten -->
        <div class="main">
            <div class="emp-profile">
                <form method="post">
                    <div class="row">
                        <div class="col-md-12 mt-3">
                            <a data-toggle="modal" data-target="#exampleModalCenter">
                                <div class="profile-img" data-placement="top">
                                    <img id="profileImage" class="no-photo" src="<?= site_url('images/anggota/'.$Anggota->FOTO) ?>" alt=""/>
                                </div>
                            </a>
                        </div>
                        <br>
                    </div>
                    <!-- modal gambar -->
                    <div class="modal fade " id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content" style="background-color: transparent; border-color: transparent">
                                <div class="modal-header" style="background-color: transparent; border-color: transparent">
                                    <button type="button" class="close" style="color: white !important" data-dismiss="modal" aria-label="Close">
                                    <div class="row">
                                        <span aria-hidden="true" color="white">&times;</span>&nbsp;<h6 style="margin-top: 5%">tutup</h6>
                                    </div>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <img id="profileImage" src="<?= site_url('images/anggota/'.$Anggota->FOTO) ?>" alt="" style="width: 100%"/>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- akhir modal gambar -->
                    <div class="col-md-12" style="margin-top: 3%">
                        <div class="profile-head">
                            <div class="text-center">
                                <h3>
                                    <b><?= $Anggota->REG_COM ?></b>
                                </h3>
                                <h3 style="color: #308ee0">
                                    <?= $Anggota->NAMA_LENGKAP ?>
                                </h3>
                                <h6 style="color: green !important">
                                    RFID : <?= $Anggota->RFID ?>
                                </h6>
                                <div class="mt-3 mb-3">
                                    <a href="" class="btn btn-info mt-1" style="width: 150px"><i class="mdi mdi-printer"></i> Cetak Data</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="col-md-12 profile-head">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="biodata-tab" data-toggle="tab" href="#biodata" role="tab" aria-controls="biodata" aria-selected="true">Biodata</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="alamat-tab" data-toggle="tab" href="#alamat" role="tab" aria-controls="alamat" aria-selected="true">Alamat</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="akun-tab" data-toggle="tab" href="#akun" role="tab" aria-controls="akun" aria-selected="false">Info Akun</a>
                            </li>        
                        </ul>
                    </div>

                    <div class="row" style="margin-top: -1.5%; padding-left: 3%; padding-right: 3%">
                        <div class="col-md-12">
                            <div class="tab-content profile-tab" id="myTabContent">
                                <!-- Biodata -->
                                <div class="tab-pane fade show active" id="biodata" role="tabpanel" aria-labelledby="biodata-tab">
                                <h6 style="background-color: #cce6ff; padding: 8px; border-radius: 5px; margin-bottom: 10px">Data Umum Anggota</h6>
                                    <div class="row" style=" padding-top: 1%">
                                        <div class="col-md-5">
                                            <label>NIK</label>
                                        </div>
                                        <div class="col-md-7">
                                            <label style="color: #3c638c"><?= $Anggota->NIK ?></label>
                                        </div>
                                    </div>
                                    <div class="row" style="padding-top: 1%">
                                        <div class="col-md-5">
                                            <label>Nama Lengkap</label>
                                        </div>
                                        <div class="col-md-7">
                                            <label style="color: #3c638c"><?= $Anggota->NAMA_LENGKAP ?></label>
                                        </div>
                                    </div>
                                    <div class="row" style=" padding-top: 1%">
                                        <div class="col-md-5">
                                            <label>Tempat/Tanggal Lahir</label>
                                        </div>
                                        <div class="col-md-7">
                                            <label style="color: #3c638c"><?= $Anggota->TMP_LHR ?>, <?= $newDate = date("d F Y", strtotime($Anggota->TGL_LHR)); ?> </label>
                                        </div>
                                    </div>
                                    <div class="row" style=" padding-top: 1%">
                                        <div class="col-md-5">
                                            <label>Jenis Kelamin</label>
                                        </div>
                                        <div class="col-md-7">
                                            <?php if ($Anggota->ID_SEX == "1") {
                                            $kel = 'Laki-Laki';
                                        }else{
                                            $kel = 'Perempuan';
                                        } ?>
                                        <label style="color: #3c638c"><?= $kel ?></label>
                                    </div>
                                </div>
                                <div class="row" style="padding-top: 1%">
                                    <div class="col-md-5">
                                        <label>Golongan Darah</label>
                                    </div>
                                    <div class="col-md-7">
                                        <label style="color: #3c638c"><?= $Njupuk->goldar ?></label>
                                    </div>
                                </div>
                                <div class="row" style="padding-top: 1%">
                                    <div class="col-md-5">
                                        <label>Status Kawin</label>
                                    </div>
                                    <div class="col-md-7">
                                        <label style="color: #3c638c; text-transform: lowercase;"><?= $Njupuk->kawin ?></label>
                                    </div>
                                </div>
                                <div class="row" style="padding-top: 1%">
                                    <div class="col-md-5">
                                        <label>Agama</label>
                                    </div>
                                    <div class="col-md-7">
                                        <label style="color: #3c638c; text-transform: lowercase;"><?= $Njupuk->agama ?></label>
                                    </div>
                                </div>
                                <div class="row" style="padding-top: 1%">
                                    <div class="col-md-5">
                                        <label>Kewarganegaraan</label>
                                    </div>
                                    <div class="col-md-7">
                                        <label style="color: #3c638c"><?= $Njupuk->kewarganegaraan ?></label>
                                    </div>
                                </div>
                                <div class="row" style="padding-top: 1%">
                                    <div class="col-md-5">
                                        <label>Status Anggota</label>
                                    </div>
                                    <div class="col-md-7">
                                        <label style="color: #3c638c"><?= $Njupuk->status_anggota ?></label>
                                    </div>
                                </div>
                                <br>
                                <h6 style="background-color: #cce6ff; padding: 8px; border-radius: 5px; margin-bottom: 10px">Data Keluarga</h6>
                                <div class="row" style="padding-top: 1%">
                                    <div class="col-md-5">
                                        <label>NIK Ayah</label>
                                    </div>
                                    <div class="col-md-7">
                                        <label style="color: #3c638c"><?= $Danggota->NIK_AYAH ?></label>
                                    </div>
                                </div>
                                <div class="row" style="padding-top: 1%">
                                    <div class="col-md-5">
                                        <label>Nama Ayah</label>
                                    </div>
                                    <div class="col-md-7">
                                        <label style="color: #3c638c"><?= $Danggota->NAMA_AYAH ?></label>
                                    </div>
                                </div>
                                <div class="row" style="padding-top: 1%">
                                    <div class="col-md-5">
                                        <label>NIK Ibu</label>
                                    </div>
                                    <div class="col-md-7">
                                        <label style="color: #3c638c"><?= $Danggota->NIK_IBU ?></label>
                                    </div>
                                </div>
                                <div class="row" style="padding-top: 1%">
                                    <div class="col-md-5">
                                        <label>Nama Ibu</label>
                                    </div>
                                    <div class="col-md-7">
                                        <label style="color: #3c638c"><?= $Danggota->NAMA_IBU ?></label>
                                    </div>
                                </div>
                                <div class="row" style="padding-top: 1%">
                                    <div class="col-md-5">
                                        <label>Nama Suami/Istri</label>
                                    </div>
                                    <div class="col-md-7">
                                        <label style="color: #3c638c"><?= $Danggota->NAMA_SI ?></label>
                                    </div>
                                </div>
                                <div class="row" style="padding-top: 1%">
                                    <div class="col-md-5">
                                        <label>Penghasilan Suami/Istri</label>
                                    </div>
                                    <div class="col-md-7">
                                        <label style="color: #3c638c"><?= $Danggota->PHASIL_SI ?></label>
                                    </div>
                                </div>
                                <br>
                                <h6 style="background-color: #cce6ff; padding: 8px; border-radius: 5px; margin-bottom: 10px">Riwayat Karir</h6>
                                <div class="row" style=" padding-top: 1%">
                                    <div class="col-md-5">
                                        <label>Pendidikan Saat Ini</label>
                                    </div>
                                    <div class="col-md-7">
                                        <label style="color: #3c638c; text-transform: lowercase;"><?= $Njupuk->pendidikan ?></label>
                                    </div>
                                </div>
                                <div class="row" style=" padding-top: 1%">
                                    <div class="col-md-5">
                                        <label>Pendidikan Di KK</label>
                                    </div>
                                    <div class="col-md-7">
                                        <label style="color: #3c638c; text-transform: lowercase;"><?= $Njupuk->pendidikan_kk ?></label>
                                    </div>
                                </div>
                                <div class="row" style=" padding-top: 1%">
                                    <div class="col-md-5">
                                        <label>Pekerjaan</label>
                                    </div>
                                    <div class="col-md-7">
                                        <label style="color: #3c638c; text-transform: lowercase;"><?= $Njupuk->pekerjaan ?></label>
                                    </div>
                                </div>
                                <div class="row" style=" padding-top: 1%">
                                    <div class="col-md-5">
                                        <label>Keahlian</label>
                                    </div>
                                    <div class="col-md-7">
                                        <label style="color: #3c638c"><?= $Danggota->KEAHLIAN ?></label>
                                    </div>
                                </div>
                            </div>

                            <!-- alamat -->
                            <div class="tab-pane fade" id="alamat" role="tabpanel" aria-labelledby="alamat-tab">
                            <h6 style="background-color: #cce6ff; padding: 8px; border-radius: 5px; margin-bottom: 10px">Alamat Rumah</h6>
                                <div class="row" style=" padding-top: 1%">
                                    <div class="col-md-5">
                                        <label>Alamat Jalan</label>
                                    </div>
                                    <div class="col-md-7">
                                        <label style="color: #3c638c"><?= $Anggota->ALMT_JALAN ?>, RT <?= $Anggota->RT ?>, RW <?= $Anggota->RW ?></label>
                                    </div>
                                </div>
                                <div class="row" style=" padding-top: 1%">
                                    <div class="col-md-5">
                                        <label>Dusun</label>
                                    </div>
                                    <div class="col-md-7">
                                        <label style="color: #3c638c"><?= $Anggota->DUSUN ?></label>
                                    </div>
                                </div>
                                <div class="row" style=" padding-top: 1%">
                                    <div class="col-md-5">
                                        <label>Kelurahan/Desa</label>
                                    </div>
                                    <div class="col-md-7">
                                        <label style="color: #3c638c"><?= $Anggota->DESANKELURAHAN ?></label>
                                    </div>
                                </div>
                                <div class="row" style=" padding-top: 1%">
                                    <div class="col-md-5">
                                        <label>Kecamatan</label>
                                    </div>
                                    <div class="col-md-7">
                                        <label style="color: #3c638c"><?= $Anggota->KECAMATAN ?></label>
                                    </div>
                                </div>
                                <div class="row" style=" padding-top: 1%">
                                    <div class="col-md-5">
                                        <label>Kota/Kabupaten</label>
                                    </div>
                                    <div class="col-md-7">
                                        <label style="color: #3c638c"><?= $Njupuk->kota ?></label>
                                    </div>
                                </div>
                                <div class="row" style=" padding-top: 1%">
                                    <div class="col-md-5">
                                        <label>Provinsi</label>
                                    </div>
                                    <div class="col-md-7">
                                        <label style="color: #3c638c"><?= $Njupuk->prov ?></label>
                                    </div>
                                </div>
                                <div class="row" style=" padding-top: 1%">
                                    <div class="col-md-5">
                                        <label>Kodepos</label>
                                    </div>
                                    <div class="col-md-7">
                                        <label style="color: #3c638c"><?= $Anggota->KODE_POS ?></label>
                                    </div>
                                </div>
                                <div class="row" style=" padding-top: 1%">
                                    <div class="col-md-5">
                                        <label>Wilayah</label>
                                    </div>
                                    <div class="col-md-7">
                                        <label style="color: #3c638c"><?= $Anggota->WIL ?></label>
                                    </div>
                                </div>
                                <br>
                                <h6 style="background-color: #cce6ff; padding: 8px; border-radius: 5px; margin-bottom: 10px">Alamat Tempat Kerja</h6>
                                <div class="row" style=" padding-top: 1%">
                                    <div class="col-md-5">
                                        <label>Alamat Kantor</label>
                                    </div>
                                    <div class="col-md-7">
                                        <label style="color: #3c638c"><?= $Danggota->ALAMAT_KRJ ?></label>
                                    </div>
                                </div>
                                <div class="row" style=" padding-top: 1%">
                                    <div class="col-md-5">
                                        <label>Kota Kerja</label>
                                    </div>
                                    <div class="col-md-7">
                                        <label style="color: #3c638c"><?= $Danggota->KOTA_KRJ ?></label>
                                    </div>
                                </div>
                                <div class="row" style=" padding-top: 1%">
                                    <div class="col-md-5">
                                        <label>Telepon Kantor</label>
                                    </div>
                                    <div class="col-md-7">
                                        <label style="color: #3c638c"><?= $Danggota->TLP_KTR ?></label>
                                    </div>
                                </div>
                                <div class="row" style=" padding-top: 1%">
                                    <div class="col-md-5">
                                        <label>Kode Usaha</label>
                                    </div>
                                    <div class="col-md-7">
                                        <label style="color: #3c638c"><?= $Danggota->KODE_USAHA ?></label>
                                    </div>
                                </div>
                                <div class="row" style=" padding-top: 1%">
                                    <div class="col-md-5">
                                        <label>Keterangan Usaha</label>
                                    </div>
                                    <div class="col-md-7">
                                        <label style="color: #3c638c"><?= $Danggota->KET_USAHA ?></label>
                                    </div>
                                </div>
                            </div>

                            <!-- informasi akun-->
                            <div class="tab-pane fade" id="akun" role="tabpanel" aria-labelledby="akun-tab">
                            <h6 style="background-color: #cce6ff; padding: 8px; border-radius: 5px; margin-bottom: 10px">Informasi Umum Akun</h6>
                                <div class="row" style=" padding-top: 1%">
                                    <div class="col-md-5">
                                        <label>Email</label>
                                    </div>
                                    <div class="col-md-7">
                                        <label style="color: #3c638c"><?= $Danggota->EMAIL ?></label>
                                    </div>
                                </div>
                                <div class="row" style=" padding-top: 1%">
                                    <div class="col-md-5">
                                        <label>Nomor Telepon</label>
                                    </div>
                                    <div class="col-md-7">
                                        <label style="color: #3c638c"><?= $Anggota->TELEPON ?></label>
                                    </div>
                                </div>
                                <div class="row" style=" padding-top: 1%">
                                    <div class="col-md-5">
                                        <label>Referensi</label>
                                    </div>
                                    <div class="col-md-7">
                                        <label style="color: #3c638c"><?= $Danggota->REFERENSI ?></label>
                                    </div>
                                </div>
                                <div class="row" style=" padding-top: 1%">
                                    <div class="col-md-5">
                                        <label>Eksistensi</label>
                                    </div>
                                    <div class="col-md-7">
                                        <label style="color: #3c638c"><?= $Danggota->EKSTENSI ?></label>
                                    </div>
                                </div>
                                <div class="row" style=" padding-top: 1%">
                                    <div class="col-md-5">
                                        <label>Level</label>
                                    </div>
                                    <div class="col-md-7">
                                        <label style="color: #3c638c"><?= $Danggota->LEVEL ?></label>
                                    </div>
                                </div>
                                <br>
                                <h6 style="background-color: #cce6ff; padding: 8px; border-radius: 5px; margin-bottom: 10px">Informasi Kepala Organisasi & anggota</h6>
                                <div class="row" style=" padding-top: 1%">
                                    <div class="col-md-5">
                                        <label>Kepala Organisasi</label>
                                    </div>
                                    <div class="col-md-7">
                                        <label style="color: #3c638c"><?= $Njupuk->kplorganisasi ?></label>
                                    </div>
                                </div>
                                <div class="row" style=" padding-top: 1%">
                                    <div class="col-md-5">
                                        <label>Kepala Anggota</label>
                                    </div>
                                    <div class="col-md-7">
                                        <label style="color: #3c638c"><?= $Njupuk->kplanggota ?></label>
                                    </div>
                                </div>
                                <br>
                                <h6 style="background-color: #cce6ff; padding: 8px; border-radius: 5px; margin-bottom: 10px">Detail Rekening & NPWP</h6>
                                <div class="row" style=" padding-top: 1%">
                                    <div class="col-md-5">
                                        <label>Rekening Bank</label>
                                    </div>
                                    <div class="col-md-7">
                                        <label style="color: #3c638c"><?= $Danggota->REK_BANK ?></label>
                                    </div>
                                </div>
                                <div class="row" style=" padding-top: 1%">
                                    <div class="col-md-5">
                                        <label>Kode Bank</label>
                                    </div>
                                    <div class="col-md-7">
                                        <label style="color: #3c638c"><?= $Danggota->REK_BANK ?></label>
                                    </div>
                                </div>
                                <div class="row" style=" padding-top: 1%">
                                    <div class="col-md-5">
                                        <label>NPWP</label>
                                    </div>
                                    <div class="col-md-7">
                                        <label style="color: #3c638c"><?= $Danggota->NPWP ?></label>
                                    </div>
                                </div>
                                <div class="row" style=" padding-top: 1%">
                                    <div class="col-md-5">
                                        <label>Keterangan</label>
                                    </div>
                                    <div class="col-md-7">
                                        <label style="color: #3c638c"><?= $Danggota->KETERANGAN ?></label>
                                    </div>
                                </div>
                                <div class="row" style=" padding-top: 1%">
                                    <div class="col-md-5">
                                        <label>Catatan</label>
                                    </div>
                                    <div class="col-md-7">
                                        <label style="color: #3c638c"><?= $Danggota->CATATAN ?></label>
                                    </div>
                                </div>
                                <br>
                                <h6 style="background-color: #cce6ff; padding: 8px; border-radius: 5px; margin-bottom: 10px">Dokumen</h6>
                                <div class="row" style=" padding-top: 1%">
                                    <div class="col-md-5">
                                        <label>Foto KTP</label>
                                    </div>
                                    <div class="col-md-7">
                                        <label style="color: #3c638c"><a class="btn btn-success" style="color: white" data-toggle="modal" data-target="#fotoktp">lihat</a>&nbsp;&nbsp;<?= $Anggota->FOTO_KTP ?></label>
                                    </div>
                                    <!-- modal gambar -->
                                    <div class="modal fade " id="fotoktp" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content" style="background-color: transparent; border-color: transparent">
                                                <div class="modal-header" style="background-color: transparent; border-color: transparent">
                                                    <button type="button" class="close" style="color: white !important" data-dismiss="modal" aria-label="Close">
                                                        <div class="row">
                                                        <div class="row">
                                                        <span aria-hidden="true" color="white">&times;</span>&nbsp;<h6 style="margin-top: 5%">tutup</h6>
                                                        </div>
                                                        </div>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <img id="profileImage" src="<?= site_url('images/anggota/ktp/'.$Anggota->FOTO_KTP); ?>" alt="" style="width: 100%"/>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- akhir modal gambar -->
                                </div>
                                <br>
                                <h6 style="background-color: #cce6ff; padding: 8px; border-radius: 5px; margin-bottom: 10px">Informasi Lainya</h6>
                                <div class="row" style=" padding-top: 1%">
                                    <div class="col-md-5">
                                        <label>Tanggal Masuk Anggota</label>
                                    </div>
                                    <div class="col-md-7">
                                        <label style="color: #3c638c"><?= $newDate = date("d F Y", strtotime($Anggota->TGL_MSK)); ?></label>
                                    </div>
                                </div>
                                <div class="row" style=" padding-top: 1%">
                                    <div class="col-md-5">
                                        <label>Tanggal Keluar Anggota</label>
                                    </div>
                                    <div class="col-md-7">
                                        <label style="color: #3c638c"><?= $newDate = date("d F Y", strtotime($Anggota->TGL_KLR)); ?></label>
                                    </div>
                                </div>
                                <div class="row" style=" padding-top: 1%">
                                    <div class="col-md-5">
                                        <label>Kel/Org</label>
                                    </div>
                                    <div class="col-md-7">
                                        <label style="color: #3c638c"><?= $Danggota->KELORG ?></label>
                                    </div>
                                </div>
                                <div class="row" style=" padding-top: 1%">
                                    <div class="col-md-5">
                                        <label>Indikator</label>
                                    </div>
                                    <div class="col-md-7">
                                        <label style="color: #3c638c"><?= $Danggota->INDIKATOR ?></label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12 mt-5">
                        <a href="javascript:window.history.go(-1);" class="btn btn-light mt-1 pull-right">Back</a>
                    </div>
                </div>
            </form>         
        </div>
    </div>
    <!-- akhir konten -->
</div>
