        <?php
        $title = 'Buat Surat Pribadi';
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
                        <form action="" method="post" id="uwu" enctype="multipart/form-data">
                            <div class="row">
                                <!-- biodata -->
                                <div class="col-xl-12 d-flex align-items-stretch grid-margin">
                                    <div class="row flex-grow">
                                        <div class="col-12">
                                            <div class="card">
                                                <div class="card-body">

                                                    <div class="col-md-12">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="" class="control-label">Tempat</label>
                                                                    <div>

                                                                        <input type="hidden" name="id_detail" class="form-control" value="<?= $surat->id_detail ?>" placeholder="contoh: PT. Induk Jaya">
                                                                        <input type="text" name="tempat" class="form-control" value="<?= $surat->tempat ?>" placeholder="contoh: Malang" required>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <!-- wajib  -->
                                                                    <label for="" class="control-label">Tanggal</label>
                                                                    <div class="input-group date">
                                                                        <input type="text" id="basicDate" name="tanggal" value="<?= $surat->tgl ?>" class="form-control"
                                                                        placeholder="Tanggal" style="height: 34.5px" required>
                                                                        <div class="input-group-append" style="height: 34.5px">
                                                                            <span class="input-group-text">
                                                                                <span class="glyphicon glyphicon-calendar"><i class="fa fa-calendar" aria-hidden="true"></i>
                                                                                </span>
                                                                            </span>
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
                                                                    <label for="" class="control-label">Nama Tujuan</label>
                                                                    <div class="">
                                                                        <input type="text" name="nama_tujuan" class="form-control" value="<?= $surat->nama_tujuan ?>" placeholder="contoh: Kakak Desi">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="" class="control-label">Kota Tujuan</label>
                                                                    <div class="">
                                                                        <input type="text" name="kota_tujuan" class="form-control" value="<?= $surat->kota_tujuan ?>" placeholder="contoh: Malang">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-12">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="" class="control-label">Salam Pembuka</label>
                                                                    <div class="">
                                                                        <input type="text" name="salam_pembuka" class="form-control" value="<?= $surat->salam_pembuka ?>" placeholder="contoh: Salam kangen">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-12">
                                                        <div class="row">
                                                            <div class="col-md-9">
                                                                <div class="form-group">
                                                                    <label for="" class="control-label">Isi Surat</label><br>
                                                                    <div class="col-md-12">
                                                                        <div class="row">
                                                                            <div class="col-md-9">
                                                                                <button type="button" class="btn btn-warning" id="tambaha"><i class="fa fa-plus"></i>Paragraf</button>
                                                                                <button type="button" class="btn btn-warning" id="tambahlist"><i class="fa fa-plus"></i>List</button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                        <?php  
                                                                    $no = 0;
                                                                    $par = 0;
                                                                    $li = 0;
                                                                    foreach ($isi as $key) { 
                                                                        if ($key->jenis == "par") { 
                                                                            $no = $no + 1;
                                                                            $li = 0;
                                                                            $par = $par + 1;
                                                                            ?>
                                                                            <div id="lala<?=$no?>">
                                                                                <label for="" class="control-label" style="color: gray; font-size: 12px; margin-top: 20px;">Paragraf <?=$par?></label>
                                                                                <div class="row">
                                                                                    <div class="col-md-9">
                                                                                        <textarea type="text" name="isi<?=$no?>" id="isi<?=$no?>" onblur="lololo('isi<?=$no?>');" class="form-control" value=""><?=$key->isi?></textarea>
                                                                                    </div>

                                                                                    <input type="hidden" id="pantau<?=$no?>" class="form-control" value="<?=$key->jenis?>">
                                                                                    <div class="col-md-3" id="place<?=$no?>">

                                                                                    </div>
                                                                                </div>
                                                                            </div>

                                                                        <?php }else { 
                                                                            $no = $no + 1;
                                                                            $li = $li + 1;
                                                                            ?>
                                                                            <div id="lala<?=$no?>">
                                                                                <label for="" class="control-label" style="color: gray; font-size: 12px; margin-top: 20px;">List <?= $li ?></label>
                                                                                <div class="row">
                                                                                    <div class="col-md-1">
                                                                                        <label for="" class="control-label" style="color: gray; font-size: 15px; padding:22px 10px 10px 20px;"><?=$li ?>.</label>
                                                                                    </div>
                                                                                    <div class="col-md-8">
                                                                                        <textarea type="text" name="isi<?=$no?>" id="isi<?=$no?>" onblur="lololo('isi<?=$no?>');" class="form-control" value=""><?=$key->isi?></textarea>
                                                                                    </div>

                                                                                    <input type="hidden" id="pantau<?=$no?>" class="form-control" value="<?=$key->jenis?>">
                                                                                    <div class="col-md-3" id="place<?=$no?>">

                                                                                    </div>
                                                                                </div>
                                                                            </div>

                                                                        <?php } if (count($isi) == $no) { ?>
                                                                            <div style="margin-top: 20px;" id="lp">
                                                                                <button type="button" class="btn btn-danger" id="hapusa<?= $no ?>" onclick="pus('hapusa<?= $no ?>');"><i class="fa fa-trash"></i></button>
                                                                            </div>

                                                                        <?php }}?>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <br>            

                                                       
                                                        <div id="baris">

                                                        </div>

                                                    <div class="col-md-12">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="" class="control-label">Salam Penutup</label>
                                                                    <div>
                                                                        <input type="text" name="salam_penutup" class="form-control" value="<?= $surat->salam_penutup ?>" placeholder="contoh: Adik tercintamu">
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

                                                        <input type="hidden" id="ln" value="<?= count($isi) ?>">
                                                                    <div>
                                                                        <input type="text" name="nama" placeholder="contoh: Lala" value="<?= $surat->nama ?>" class="form-control">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-12 mt-5">

                                                           <input type="hidden" name="cek" id="cek">
                                                            <button type="button" class="btn btn-round" onclick="window.location.href='<?= site_url('Home'); ?>'"><i class="fa fa-angle-left"></i>Kembali</i></button>
                                                            <button type="submit" name="save" onclick="p('simpan')" id="save" value="simpan" class="btn btn-primary pull-right">Update</button>
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
            <script>
                $(document).ready(function () {
                    $("#basicDate").flatpickr({
                        enableTime: false,
                        dateFormat: "Y-m-d",
                    });
                });
            </script>
           <script type="text/javascript">
                var line = $('#ln').val();
                line = parseInt(line);
                var par = 1;
                var isi = [];
                var jenis_isi = [];
                for (var i = 1; i <= line; i++) {
                    isi.push($('#isi'+i).val())
                }
                for (var i = 1; i <= line; i++) {
                    jenis_isi.push($('#isi'+i).val())
                }
                var list = 0;
                var sav = "";
                $('#tambaha').click(function(){

                        $("#lp").remove();
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

                        $("#lp").remove();
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
                    Baris += '<label for="" class="control-label" style="color: gray; font-size: 15px; padding:22px 10px 10px 20px;">'+list+'.</label>';
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
                        $("#lp").remove();
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
                          url:'<?= site_url('Create/edit_surat') ?>',
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
                          url:'<?= site_url('Create/edit_surat_dinas') ?>',
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