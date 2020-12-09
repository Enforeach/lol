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
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label for="" class="control-label">Isi Kalimat</label>
                                                                    <div class="">
                                                                        <div id="editor">
                                                                            <p name="isi"></p>
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
                                                        <button type="submit" name="save" class="btn btn-primary pull-right"><?= $submit ?></button>
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
            <script>
                ClassicEditor
                .create( document.querySelector( '#editor' ) )
                .then( editor => {
                    console.log( editor );
                } )
                .catch( error => {
                    console.error( error );
                } );
            </script>