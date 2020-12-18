        <?php
        $title = 'Edit Surat Pribadi';
        $ftitle = 'Form Create';
        $readonly = '';
        $required = 'required';
        $submit = 'Edit Surat';

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
                                                                        <input type="text" name="tempat" class="form-control" value="" placeholder="contoh: Malang" required>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <!-- wajib  -->
                                                                    <label for="" class="control-label">Tanggal</label>
                                                                    <div class="input-group date">
                                                                        <input type="text" id="basicDate" name="tanggal" value="" class="form-control"
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
                                                                        <input type="text" name="nama_tujuan" class="form-control" value="" placeholder="contoh: Alisandi">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="" class="control-label">Kota Tujuan</label>
                                                                    <div class="">
                                                                        <input type="text" name="kota_tujuan" class="form-control" value="" placeholder="contoh: Alisandi">
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
                                                                        <input type="text" name="salam_pembuka" class="form-control" value="" placeholder="contoh: Dengan Hormat">
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
                                                                        <input type="text" name="nama" placeholder="contoh: Adinda" class="form-control">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-12 mt-5">
                                                        <button type="button" class="btn btn-round" onclick="window.location.href='<?= site_url('Home'); ?>'"><i class="fa fa-angle-left"></i>Kembali</i></button>
                                                        <button style="margin-left: 10px;" name="save" id="save" class="btn btn-primary pull-right">Update</button>
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

            </script>
            <script type="text/javascript">
                var line = 1;
                var par = 1;
                var isi = [];
                var jenis_isi = ['par'];
                var list = 0;
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

                $('#save').click(function(e){
                    e.preventDefault()
                    var tempat = $("input[name='tempat']").val()
                    var tanggal = $("input[name='tanggal']").val()
                    var salam_pembuka = $("input[name='salam_pembuka']").val()
                    var salam_penutup = $("input[name='salam_penutup']").val()
                    var nama = $("input[name='nama']").val()

                    $.ajax({
                      type:'POST',
                      data:'tempat='+tempat+'&tanggal='+tanggal+'&salam_pembuka='+salam_pembuka+'&salam_penutup='+salam_penutup+'&nama='+nama+'&isi='+JSON.stringify(isi)+'&jenis_isi='+JSON.stringify(jenis_isi),
                      url:'<?= site_url('Create/add_surat_pribadi') ?>',
                      dataType:'JSON',
                      success: function(hasil){

                        success_sweet('Surat berhasil disimpan.','<?= site_url("Home") ?>');

                    }
                });
                });
                $('#savec').click(function(e){
                    e.preventDefault()
                    var tempat = $("input[name='tempat']").val()
                    var tanggal = $("input[name='tanggal']").val()
                    var nama_tujuan = $("input[name='nama_tujuan']").val()
                    var kota_tujuan = $("input[name='kota_tujuan']").val()
                    var salam_pembuka = $("input[name='salam_pembuka']").val()
                    var salam_penutup = $("input[name='salam_penutup']").val()
                    var nama = $("input[name='nama']").val()

                    $.ajax({
                      type:'POST',
                      data:'tempat='+tempat+'&tanggal='+tanggal+'&nama_tujuan='+nama_tujuan+'&kota_tujuan='+kota_tujuan+'&salam_pembuka='+salam_pembuka+'&salam_penutup='+salam_penutup+'&nama='+nama+'&isi='+JSON.stringify(isi)+'&jenis_isi='+JSON.stringify(jenis_isi),
                      url:'<?= site_url('Create/add_surat_pribadi') ?>',
                      dataType:'JSON',
                      success: function(hasil){

                        success_sweet('Surat berhasil disimpan.','cetak_Pribadi/'+hasil);

                    }
                });
                });
            </script>