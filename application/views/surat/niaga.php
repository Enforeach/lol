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
                        <form action="" id="uwu" method="post" enctype="multipart/form-data">
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
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="" class="control-label">Alamat</label>
                                                                    <div class="">
                                                                        <textarea type="text" name="alamat" class="form-control" value=""> </textarea>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="" class="control-label">Kota</label>
                                                                    <div>
                                                                        <input type="text" name="kota" class="form-control" value="" placeholder="contoh: Malang">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-12">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="" class="control-label">Telp / HP</label>
                                                                    <div>
                                                                        <input type="text" name="telp" class="form-control" value="" placeholder="contoh: 08xxxxxx">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
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
                                                                        <input type="text" name="kota_tujuan" class="form-control" value="" placeholder="contoh: Kebumen">
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
                                                                        <input type="hidden" name="tipe" value="<?= $tipe ?>" class="form-control">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-12 mt-5">
                                                        <input type="hidden" name="cek" id="cek">
                                                        <button type="button" class="btn btn-round" onclick="window.location.href='<?= site_url('Home'); ?>'"><i class="fa fa-angle-left"></i>Kembali</i></button>
                                                        <button type="submit" name="save" onclick="p('simpan')" id="save" value="simpan" class="btn btn-primary pull-right">simpan</button>
                                                        <button type="submit" name="save" onclick="p('cet')" id="save" value="cetak" class="btn btn-primary pull-right">simpan & cetak</button>
                                                        
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
                                                            <input type="file" id="imageUpload" accept="image/*" class="uploads form-control" style="margin-top: 20px;" name="imageUpload" placeholder="Photo" capture="filesystem">
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
            var par = 1;
            var isi = [];
            var jenis_isi = ['par'];
            var list = 0;
            var sav = "";
            $('#tambaha').click(function(){

                jenis_isi.push('par');
                $("#trash"+line).remove();
                list = 0;
                line = line + 1;
                par = par + 1;
                var Baris = '<div class="col-md-12" id="lala'+line+'">';
                Baris += '<div class="row">';
                Baris += '<div class="col-md-9">';
                Baris += '<div class="form-group">';
                Baris += '<label for="" class="control-label" style="color: gray; font-size: 12px;">Paragraf '+par+'</label>';
                Baris += '<div class="row">';
                Baris += '<div class="col-md-9">';
                Baris += '<textarea type="text" name="isi'+line+'" id="isi'+line+'" onblur="lololo(\'isi\'+line);" class="form-control" value=""> </textarea>';
                Baris += '</div>';

                Baris += '<input type="hidden" id="pantau'+line+'" class="form-control" value="para">';
                Baris += '<div class="col-md-3" id="place'+line+'">';
                Baris += '<div id="trash'+line+'">';
                Baris += '<button type="button" class="btn btn-danger" id="hapusa'+line+'" onclick="pus(\'hapusa\'+line);"><i class="fa fa-trash"></i></button>';
                Baris += '</div>';
                Baris += '</div>';
                Baris += '</div>';
                $('#baris').append(Baris);
                console.log(jenis_isi)
            });


            $('#tambahlist').click(function(){

                jenis_isi.push('li');
                $("#trash"+line).remove();
                list = list + 1;
                line = line + 1;
                var Baris = '<div class="col-md-12" id="lala'+line+'">';
                Baris += '<div class="row">';
                Baris += '<div class="col-md-9">';
                Baris += '<div class="form-group">';
                Baris += '<label for="" class="control-label" style="color: gray; font-size: 12px;">List '+list+'</label>';
                Baris += '<div class="row">';
                Baris += '<div class="col-md-1">';
                Baris += '<label for="" class="control-label" style="color: gray; font-size: 15px; padding:22px 10px 10px 35px;">'+list+'.</label>';
                Baris += '</div>';
                Baris += '<div class="col-md-8">';
                Baris += '<textarea type="text" name="isi'+line+'" id="isi'+line+'" onblur="lololo(\'isi\'+line);" class="form-control" value=""> </textarea>';
                Baris += '</div>';

                Baris += '<input type="hidden" id="pantau'+line+'" class="form-control" value="li">';
                Baris += '<div class="col-md-3" id="place'+line+'">';
                Baris += '<div id="trash'+line+'">';
                Baris += '<button type="button" class="btn btn-danger" id="hapusa'+line+'" onclick="pus(\'hapusa\'+line);"><i class="fa fa-trash"></i></button>';
                Baris += '</div>';
                Baris += '</div>';
                Baris += '</div>';
                $('#baris').append(Baris);
                console.log(jenis_isi)
            });

            function pus(haha) {
                var uwu = $('#'+haha).val();
                var haha = haha.substr(6,haha.length);
                if (haha == 1 || haha <= 1) {
                    alert("Can't remove all row!");
                }else{
                    if ($("#pantau"+line).val() == "para") {
                        par = par-1;
                    }                       
                    $("#lala"+line).remove();
                    line = line-1;
                    var aku = '<div id="trash'+line+'">';
                    aku += '<button type="button" class="btn btn-danger" id="hapusa'+line+'" onclick="pus(\'hapusa\'+line);"><i class="fa fa-trash"></i></button>';
                    aku += '</div>';

                    $('#place'+line).append(aku);
                    $('#isi'+haha).val("");
                    isi.splice(line,1);
                    jenis_isi.splice(line,1);
                    console.log(isi)
                    console.log(jenis_isi)
                }
            };

            function lololo(haha) {
                var uwu = $('#'+haha).val();
                var haha = haha.substr(3,haha.length);
                var haha = haha-1;
                isi[haha] = uwu;
                console.log(isi)
            };
            function p(lol) {
                $('#cek').val(lol);
                
            };
            $('#uwu').submit(function(e){

                e.preventDefault()
                var data = new FormData(this);

                console.log()
                if (data.get("cek") == "simpan") {
                    $.ajax({
                      type:'POST',
                      data:new FormData(this),
                      url:'<?= site_url('Create/add_surat_dinas') ?>',
                      processData: false,
                      contentType: false,  
                      cache:false,
                      async:false,
                      success: function(hasil){
                        $.ajax({
                          type:'POST',
                          data:'isi='+JSON.stringify(isi)+'&jenis_isi='+JSON.stringify(jenis_isi),
                          url:'<?= site_url('Create/isi/') ?>'+hasil,
                          dataType:'JSON',
                          success: function(hasil){

                            success_sweet('Surat berhasil disimpan.','<?= site_url("Home") ?>');

                        }
                    });
                    }
                });
                }else {
                    $.ajax({
                      type:'POST',
                      data:new FormData(this),
                      url:'<?= site_url('Create/add_surat_dinas') ?>',
                      processData: false,
                      contentType: false,  
                      cache:false,
                      async:false,
                      success: function(hasil){
                        $.ajax({
                          type:'POST',
                          data:'isi='+JSON.stringify(isi)+'&jenis_isi='+JSON.stringify(jenis_isi),
                          url:'<?= site_url('Create/isi/') ?>'+hasil,
                          dataType:'JSON',
                          success: function(hasil){
                            if (data.get("tipe") == "Indented") {

                                success_sweet('Surat berhasil disimpan.','cetak_Indented/'+hasil);
                            }if (data.get("tipe") == "Hanging") {
                                success_sweet('Surat berhasil disimpan.','cetak_Hanging/'+hasil);
                            }if (data.get("tipe") == "Block") {
                                success_sweet('Surat berhasil disimpan.','cetak_Block/'+hasil);
                            }if (data.get("tipe") == "Semi") {
                                success_sweet('Surat berhasil disimpan.','cetak_Semi/'+hasil);
                            }if (data.get("tipe") == "Full") {
                                success_sweet('Surat berhasil disimpan.','cetak_Full/'+hasil);
                            }


                        }
                    });
                    }
                });
                }

            });

        </script>