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
                                                                        <input type="text" name="tempat" class="form-control" value="" placeholder="contoh: Malang">
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
                                                                        <div class="input-group-append"  style="height: 34.5px">
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
                                                                                <button type="button" class="btn btn-warning" id="tambaha"><i class="fa fa-plus"></i>List</button>
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
                                                        <button type="submit" name="save" id="save" class="btn btn-primary pull-right"><?= $submit ?></button>
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

                $('#save').click(function(event){
                    event.preventDefault();
                    var tempat = $("input[name='tempat']").val()
                    var tanggal = $("input[name='tanggal']").val()
                    var salam_pembuka = $("input[name='salam_pembuka']").val()
                    var salam_penutup = $("input[name='salam_penutup']").val()
                    var nama = $("input[name='nama']").val()

                    $.ajax({
                      type:'POST',
                      data:'tempat='+tempat+'&tanggal='+tanggal+'&salam_pembuka='+salam_pembuka+'&salam_penutup='+salam_penutup+'&nama='+nama+'&isi='+JSON.stringify(isi),
                      url:'<?= site_url('Create/add_surat_pribadi') ?>',
                      dataType:'JSON',
                      success: function(hasil){
                        if (hasil == '') {

                          success_sweet('Data berhasil ditambahkan.','Create/pribadi');
                          
                      }else{
                          swal("Tidak Bisa", "Wilayah sudah digunakan !", "warning");
                      }
                  }
              });
                });
            </script>