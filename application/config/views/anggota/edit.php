<div class="main-panel">
            <div class="content-wrapper" style="background-color: #e8f4f7;">
                <!-- content -->
                <h3 class="text-center">Edit Data Anggota</h3>
                <br>
                <div class="tab-content">
                    <div id="profile">
                        <form action="" method="post" enctype="multipart/form-data">
                            <div class="row">
                                <!-- biodata -->
                                <div class="col-xl-12 d-flex align-items-stretch grid-margin main1">
                                    <div class="row flex-grow">
                                        <div class="col-12">
                                            <div class="card" style="border-radius: 10px">
                                                <div class="card-body">

                                                    <div class="form-group">
                                                        <div>
                                                            <img id="profileImage" width="210" height="210" src="" alt=""
                                                            style="display: block;
                                                            margin-left: auto;
                                                            margin-right: auto; 
                                                            object-fit: cover; 
                                                            border-radius: 50%;
                                                            cursor: pointer;"/>
                                                            <div class="file" style="display: none">
                                                                <input type="file" id="imageUpload" accept=" accept="image/png,image/jpeg" class="uploads form-control" style="margin-top: 20px;" placeholder="Photo" capture="filesystem">
                                                            </div>
                                                            <p style="text-align: center; color: blue; font-size:11px; margin-top: 10px">klik gambar untuk ganti foto</p>
                                                        </div>
                                                    </div>

                                                    <br>
                                                    <div class="col-md-12">
                                                        <h6 style="background-color: #cce6ff; padding: 8px; border-radius: 3px; margin-bottom: 20px">Biodata Diri :</h6>
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <label for="" class="control-label">Registrasi Computer</label>
                                                                    <div>
                                                                        <input type="number" class="form-control" placeholder="001" min="0" readonly>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <label for="" class="control-label">NIK</label>
                                                                    <div>
                                                                        <input type="number" class="form-control" placeholder="sesuai KTP" min="0" readonly>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <label for="" class="control-label">Nama Lengkap</label>
                                                                    <div>
                                                                        <input type="text" class="form-control" value="" placeholder="ex. agus suprapto">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-12">
                                                    <h6 style="background-color: #cce6ff; padding: 8px; border-radius: 3px; margin-bottom: 20px">Data Kelahiran :</h6>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="" class="control-label">Tempat Lahir</label>
                                                                    <div>
                                                                        <input type="text" class="form-control" placeholder="ex. malang">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="" class="control-label">Tanggal Lahir</label>
                                                                    <div>
                                                                        <input type="date" class="form-control" style="height: 33.5px" value="">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-12">
                                                        <h6 style="background-color: #cce6ff; padding: 8px; border-radius: 3px; margin-bottom: 20px">Data Status Diri :</h6>
                                                        <div class="row">
                                                            <div class="col-md-3">
                                                                <div class="form-group">
                                                                    <label for="" class="control-label">Gender</label>
                                                                    <div>
                                                                    <select name="gender" class="form-control" style="height: 33.6px">
                                                                        <option value="Laki-Laki">Laki-Laki</option>
                                                                        <option value="Perempuan">Perempuan</option>
                                                                    </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="form-group">
                                                                    <label for="" class="control-label">Gol. Darah</label>
                                                                    <div>
                                                                    <select class="form-control" style="height: 33.6px">
                                                                        <option value="A">A</option>
                                                                        <option value="B">B</option>
                                                                        <option value="O">O</option>
                                                                        <option value="AB">AB</option>
                                                                    </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="form-group">
                                                                    <label for="" class="control-label">Status Ikatan</label>
                                                                    <div>
                                                                    <select class="form-control" style="height: 33.6px">
                                                                        <option value="Single">Single</option>
                                                                        <option value="Menikah">Menikah</option>
                                                                        <option value="Cerai">Cerai</option>
                                                                    </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="form-group">
                                                                    <label for="" class="control-label">Agama</label>
                                                                    <div>
                                                                    <input type="text" class="form-control" value="" placeholder="isikan">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-12">
                                                    <h6 style="background-color: #cce6ff; padding: 8px; border-radius: 3px; margin-bottom: 20px">Alamat :</h6>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="" class="control-label">Jalan</label>
                                                                    <div class="">
                                                                    <textarea type="text" class="form-control" rows="3" placeholder="ex. Jalan Pegangsaan Timur Nomor 4 RT.3 RW.5"></textarea>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="form-group">
                                                                    <label for="" class="control-label">Kode Pos</label>
                                                                    <div class="">
                                                                        <input type="text" class="form-control" value="" placeholder="ex. 662XX">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="form-group">
                                                                    <label for="" class="control-label">Wilayah</label>
                                                                    <div class="">
                                                                        <input type="text" class="form-control" value="" placeholder="A/B/C/D">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="" class="control-label">Kelurahan</label>
                                                            <div class="">
                                                                <input type="text" class="form-control" name="KELURAHAN" value="" placeholder="ex. lowokwaru">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="" class="control-label">Desa</label>
                                                            <div class="">
                                                                <input type="text" class="form-control" name="KELURAHAN" value="" placeholder="ex. pendem">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="" class="control-label">Kecamatan</label>
                                                            <div class="">
                                                                <input type="text" class="form-control" name="KECAMATAN" value="" placeholder="ex. dinoyo">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="" class="control-label">Kabupaten</label>
                                                            <div class="">
                                                                <input type="text" class="form-control" name="KABUPATEN" value="" placeholder="ex. Malang Kabupaten">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="" class="control-label">Kota</label>
                                                            <div class="">
                                                                <input type="text" class="form-control" name="KABUPATEN" value="" placeholder="ex. Malang Kota">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="" class="control-label">Provinsi</label>
                                                            <div class="">
                                                                <input type="text" class="form-control" name="PROPINSI" value="" placeholder="ex. Jawa Timur">
                                                            </div>
                                                        </div>
                                                    </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-12">
                                                    <h6 style="background-color: #cce6ff; padding: 8px; border-radius: 3px; margin-bottom: 20px">Riwayat Pendidikan & Pekerjaan :</h6>
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <label for="" class="control-label">Pendidikan Terakhir</label>
                                                                    <div>
                                                                        <input type="text" class="form-control" value="" placeholder="ex. SMP/SMA/S1/S2/S3">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <label for="" class="control-label">Pekerjaan</label>
                                                                    <div>
                                                                        <input type="text" class="form-control" value="" placeholder="isikan">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <label for="" class="control-label">Keahlian</label>
                                                                    <div>
                                                                        <input type="text" class="form-control" value="" placeholder="isikan">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="" class="control-label">Alamat Kerja</label>
                                                                    <div class="">
                                                                    <textarea type="text" class="form-control" rows="3" placeholder="ex. Jalan Pegangsaan Timur Nomor 4 RT.3 RW.5"></textarea>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="form-group">
                                                                    <label for="" class="control-label">Kota Kerja</label>
                                                                    <div class="">
                                                                        <input type="text" class="form-control" value="" placeholder="ex. sby/malang">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="form-group">
                                                                    <label for="" class="control-label">Telp. Kantor</label>
                                                                    <div>
                                                                        <input type="number" class="form-control" min="0" placeholder="isikan">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <h6 style="background-color: #cce6ff; padding: 8px; border-radius: 3px; margin-bottom: 20px">Data Akun :</h6>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="" class="control-label">Email</label>
                                                                    <div>
                                                                        <input type="email" class="form-control" placeholder="ex. westlakewetland@gmal.com" readonly>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="" class="control-label">No. Telepon </label>
                                                                    <div>
                                                                        <input type="number" class="form-control" value="" placeholder="ex. 089xxxxxxxxx" min="0">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="" class="control-label">Rekening Bank</label>
                                                                    <div>
                                                                        <input type="number" class="form-control" placeholder="isikan" min="0">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="" class="control-label">Kode Bank</label>
                                                                    <div>
                                                                        <input type="number" class="form-control" value="" placeholder="kode bank BRI/Mandiri/Dll" min="0">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <h6 style="background-color: #cce6ff; padding: 8px; border-radius: 3px; margin-bottom: 20px">Data Riwayat Keanggotaan :</h6>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="" class="control-label">Tanggal Masuk</label>
                                                                    <div>
                                                                        <input type="date" class="form-control" readonly>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="" class="control-label">Tanggal Keluar</label>
                                                                    <div>
                                                                        <input type="date" class="form-control" >
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <br>
                                                    <div class="col-md-12">
                                                        <button type="submit" class="btn btn-primary">
                                                        Update Data
                                                        </button>
                                                        <a href="<?= site_url('Anggota') ?>" class="btn btn-light pull-right">Back</a>
                                                        </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end biodata -->
                            </div>
                        </form>
                    </div>
                    
                </div>
                <!-- akhir content -->
            </div>
