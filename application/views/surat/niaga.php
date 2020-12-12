        <?php
        $title = 'Buat Surat Niaga';
        $ftitle = 'Form Create';
        $readonly = '';
        $required = 'required';
        $submit = 'Buat Surat';

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
                                                    <label for="" class="control-label"><b><u>KOP - Surat</u></b></label>
                                                    <div class="col-md-12">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="" class="control-label">Nama Instansi</label>
                                                                    <div>
                                                                        <input type="text" name="kop_surat" class="form-control" value="" placeholder="contoh: PT. Induk Jaya">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="" class="control-label">Jenis Instansi</label>
                                                                    <div>
                                                                        <input type="text" name="jenis_instansi" class="form-control" value="" placeholder="contoh: Manufaktur">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-12">
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <label for="" class="control-label">Alamat</label>
                                                                    <div class="">
                                                                        <textarea type="text" name="alamat" class="form-control" value=""> </textarea>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <label for="" class="control-label">Telp / HP</label>
                                                                    <div>
                                                                        <input type="text" name="telp" class="form-control" value="" placeholder="contoh: 08xxxxxx">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <label for="" class="control-label">Website</label>
                                                                    <div>
                                                                        <input type="text" name="website" class="form-control" value="" placeholder="contoh: www/https://indonesiamerkeda.com">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <br>

                                                    <div class="col-md-12">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <!-- wajib  -->
                                                                    <label for="" class="control-label">Tanggal</label>
                                                                    <div class="input-group date">
                                                                        <input type="text" id="basicDate" name="tanggal" value="" class="form-control"
                                                                        placeholder="Tanggal" style="height: 34.5px" required>
                                                                        <div class="input-group-append"  style="height: 34.5px">
                                                                            <span class="input-group-text">
                                                                                <span class="glyphicon glyphicon-calendar"><i class="fa fa-calendar" aria-hidden="true"></i>
                                                                                </span>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="" class="control-label">Nomor Surat</label>
                                                                    <div>
                                                                        <input type="text" name="nomor" class="form-control" value="" placeholder="contoh: 187/AM/IX/2015">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-12">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="" class="control-label">Perihal</label>
                                                                    <div>
                                                                        <input type="text" name="perihal" class="form-control" value="" placeholder="contoh: PEMBERITAHUAN">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="" class="control-label">Lampiran</label>
                                                                    <div>
                                                                        <input type="text" name="lampiran" class="form-control" value="" placeholder="">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <br>

                                                    <label for="" class="control-label"><b><u>Alamat Yang Dituju</u></b></label>
                                                    <div class="col-md-12">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="" class="control-label">Nama Instansi</label>
                                                                    <div>
                                                                        <input type="text" name="nama_tujuan" class="form-control" value="" placeholder="contoh: PT. KARYA JAYA">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="" class="control-label">Alamat</label>
                                                                    <div>
                                                                        <div class="">
                                                                            <textarea type="text" name="alamat_tujuan" class="form-control" value=""> </textarea>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-12">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="" class="control-label">Kota</label>
                                                                    <div>
                                                                        <input type="text" name="nama_tujuan" class="form-control" value="" placeholder="contoh: Kebumen">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <br>

                                                    <label for="" class="control-label"><b><u>Isi Surat</u></b></label>
                                                    <div class="col-md-12">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="" class="control-label">Salam Pembuka</label>
                                                                    <div>
                                                                        <input type="text" name="salam_pembuka" class="form-control" value="" placeholder="contoh: Hormat Kami">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="row">
                                                            <div class="col-md-9">
                                                                <div class="form-group">
                                                                    <div class="col-md-12">
                                                                        <div class="row">
                                                                            <div class="col-md-9">
                                                                                <button type="button" class="btn btn-warning" id="tambaha"><i class="fa fa-plus"></i>Paragraf</button>
                                                                                <button type="button" class="btn btn-warning" id="tambahlist"><i class="fa fa-plus"></i>List</button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <label for="" class="control-label mt-3" style="color: gray; font-size: 12px;">Paragraf 1</label>
                                                                    <div class="row">
                                                                        <div class="col-md-9">
                                                                            <textarea type="text" name="isi" id="isi1" class="form-control" onblur="lololo('isi1');" value=""> </textarea>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <!-- <div class="col-md-3">
                                                                <div class="form-group">
                                                                    <button type="button" class="btn btn-danger" id="hapusa"><i class="fa fa-trash"></i></button>
                                                                </div>
                                                            </div> -->
                                                        </div>
                                                    </div>

                                                    <div id="baris">

                                                    </div>

                                                    <div class="col-md-12">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="" class="control-label">Salam Penutup</label>
                                                                    <div>
                                                                        <input type="text" name="salam_penutup" class="form-control" value="" placeholder="contoh: Hormat Kami">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-12">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="" class="control-label">Nama</label>
                                                                    <div>
                                                                        <input type="text" name="nama" placeholder="contoh: Indah Setyorini" class="form-control">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-12">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="" class="control-label">Jabatan</label>
                                                                    <div>
                                                                        <input type="text" name="jabatan" placeholder="contoh: Direktur" class="form-control">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-12 mt-5">
                                                        <button type="button" class="btn btn-round" onclick="window.location.href='<?= site_url('Home'); ?>'"><i class="fa fa-angle-left"></i>Kembali</i></button>
                                                        <button type="submit" name="save" class="btn btn-primary pull-right"><?= $submit ?></button>
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
                                                        <center><label for="foto" class=" control-label">Logo</label></center>
                                                        <div>
                                                          <img id="profileImage" width="210" height="210" src="https://i.ibb.co/qxHR5SM/tidakadaphoto.jpg" alt=""
                                                          style="display: block;
                                                          border: 1px solid gray;
                                                          margin-left: auto;
                                                          margin-right: auto; 
                                                          object-fit: cover; 
                                                          border-radius: 50%;
                                                          cursor: pointer;"/>
                                                          <div class="file" style="display: none">
                                                            <input type="file" id="imageUpload" accept="image/*" class="uploads form-control" style="margin-top: 20px;" name="logo" placeholder="Photo" capture="filesystem">
                                                        </div>
                                                        <p style="text-align: center; color: blue; font-size:11px; margin-top: 10px">klik gambar untuk ganti logo</p>
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
                <?php
                if($alert == "success"){
                    echo "<script>success_sweet('Data is saved.','addSuratPribadi');</script>";
                }
                if($alert == "exist"){
                    echo "<script>failed_sweet('The file is already exist.');</script>";
                }
                if($alert == "success_edit"){
                    echo "<script>success_sweet('Data is updated.','Dashboard');</script>";
                }
                if($alert == "too large"){
                    echo "<script>failed_sweet('The file you are trying to upload is too large.');</script>";
                }
                ?>

            </div>
            <!-- akhir content -->
        </div>
        <script>
            $(document).ready(function () {
                $("#basicDate").flatpickr({
                    enableTime: false,
                    dateFormat: "Y-m-d",
                });
            });
        </script>
        <script type="text/javascript">
            var line = 1;
                var isi = [];

                $('#tambaha').click(function(){

                    $("#trash"+line).remove();
                    line = line + 1;
                    var Baris = '<div class="col-md-12" id="lala'+line+'">';
                    Baris += '<div class="row">';
                    Baris += '<div class="col-md-9">';
                    Baris += '<div class="form-group">';
                    Baris += '<label for="" class="control-label" style="color: gray; font-size: 12px;">Paragraf '+line+'</label>';
                    Baris += '<div class="row">';
                    Baris += '<div class="col-md-9">';
                    Baris += '<textarea type="text" name="isi'+line+'" id="isi'+line+'" onblur="lololo(\'isi\'+line);" class="form-control" value=""> </textarea>';
                    Baris += '</div>';
                    Baris += '<div class="col-md-3" id="place'+line+'">';
                    Baris += '<div id="trash'+line+'">';
                    Baris += '<button type="button" class="btn btn-danger" id="hapusa'+line+'" onclick="pus(\'hapusa\'+line);"><i class="fa fa-trash"></i></button>';
                    Baris += '</div>';
                    Baris += '</div>';
                    Baris += '</div>';
                    $('#baris').append(Baris);
                });

                var list = 0;
                $('#tambahlist').click(function(){
                    $("#trash"+line).remove();
                    list = list + 1;
                    var Baris = '<div class="col-md-12" id="lala'+line+'">';
                    Baris += '<div class="row">';
                    Baris += '<div class="col-md-9">';
                    Baris += '<div class="form-group">';
                    Baris += '<label for="" class="control-label" style="color: gray; font-size: 12px;">List '+list+'</label>';
                    Baris += '<div class="row">';
                    Baris += '<div class="col-md-1">';
                    Baris += '<label for="" class="control-label" style="color: gray; font-size: 15px; padding:22px 10px 10px 15px;">'+list+'.</label>';
                    Baris += '</div>';
                    Baris += '<div class="col-md-8">';
                    Baris += '<textarea type="text" name="isi'+line+'" id="isi'+line+'" onblur="lololo(\'isi\'+line);" class="form-control" value=""> </textarea>';
                    Baris += '</div>';
                    Baris += '<div class="col-md-3" id="place'+line+'">';
                    Baris += '<div id="trash'+line+'">';
                    Baris += '<button type="button" class="btn btn-danger" id="hapusa'+line+'" onclick="pus(\'hapusa\'+line);"><i class="fa fa-trash"></i></button>';
                    Baris += '</div>';
                    Baris += '</div>';
                    Baris += '</div>';
                    $('#baris').append(Baris);
                });

                function pus(haha) {
                    var uwu = $('#'+haha).val();
                    var haha = haha.substr(6,haha.length);
                    if (haha == 1 || haha <= 1) {
                        alert("Can't remove all row!");
                    }else{
                        // alert(haha)
                        $("#lala"+line).remove();
                        line = line-1;
                        var aku = '<div id="trash'+line+'">';
                        aku += '<button type="button" class="btn btn-danger" id="hapusa'+line+'" onclick="pus(\'hapusa\'+line);"><i class="fa fa-trash"></i></button>';
                        aku += '</div>';

                        $('#place'+line).append(aku);
                        $('#isi'+haha).val("");
                        isi.splice(line,1);
                        console.log(isi)
                    }
                };

                function lololo(haha) {
                    var uwu = $('#'+haha).val();
                    var haha = haha.substr(3,haha.length);
                    var haha = haha-1;
                    isi[haha] = uwu;
                    console.log(isi)
                };
                
            </script>