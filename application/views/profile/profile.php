<div class="main-panel">
    <div class="content-wrapper" style="background-color: #e8f4f7;">
        <!-- konten -->
        <div class="container emp-profil">
            <form method="post" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-md-4 mt-3">
                        <div class="profile-img" data-toggle="tooltip" data-placement="top" title="Klik Ganti Poto">
                            <img id="profileImage" src="<?= site_url('images/icon_user.png'); ?>" alt="" style="border: 3px solid #308ee0"/>
                            <div class="file">
                                <!-- <input id="imageUpload" type="file" name="foto" placeholder="Photo" capture="filesystem" accept="image/png,image/jpeg"> -->
                            </div>
                        </div>
                        <div id="pcc-btn">
                            <label type="text" class="btn btn-primary btn-rounded"><?= $username ?></label>
                            <p style="font-size: 10px" class="mt-4"> </p>
                            <a data-toggle="modal" data-target="#exampleModalCenter" style="color: #308ee0; cursor: pointer;"><h6>lihat foto</h6></a>
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
                                    <div class="modal-body" style="margin-top: -6%">
                                        <img id="profileImage" src="<?= site_url('images/icon_user.png'); ?>" alt="" style="width: 100%"/>
                                        <style>
                                        .btn-muku{
                                            background-color: transparent !important; 
                                            color: #d6d6d6;
                                        }
                                        .btn-muku:hover{
                                            color: white;
                                        }
                                        </style>
                                        <a class="btn btn-muku mt-1" href="<?= site_url('images/icon_user.png'); ?>">
                                        <i><span class="fa fa-photo"></span></i>&nbsp;tampilkan ukuran penuh</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- akhir modal gambar -->
                    </div>
                    <br>
                    <div class="col-md-6" style="margin-top: 10px">
                        <div class="profile-head" id="atas">
                                <h3>
                                <b><?= $nama_lengkap ?></b>
                                </h3>
                                <h6>
                                <?= $username ?>
                                </h6>
                                <br>
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Biodata</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Informasi Akun</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4"></div>

                    <div class="col-md-8 l-2" id="cewek">

                        <style>
                            #cewek{
                                margin-top: -15%;
                            }
                            @media (max-width: 576px){
                                    #cewek{
                                    margin-top: -3%;
                                    margin-left: 3%;
                                }
                            }
                            @media (min-width: 576px) and (max-width: 766px){
                                    #cewek{
                                    margin-top: -3%;
                                    margin-left: 3%;
                                }
                            }
                            @media (min-width: 767px) and (max-width: 1048px){
                                    #cewek{
                                    margin-top: -23%;
                                    margin-left: 35%;
                                }
                                #atas{
                                    margin-left: 3%;
                                }
                            }
                            @media (min-width: 1049px) and (max-width: 1269px){
                                    #cewek{
                                    margin-top: -16%;
                                    margin-left: 35%;
                                }
                                #atas{
                                    margin-left: 3%;
                                }
                            }
                        </style>

                        <div class="tab-content profile-tab" id="myTabContent">
                            <!-- Biodata -->
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Nama Lengkap</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p><?= $nama_lengkap; ?></p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Username</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p><?= $username; ?></p>
                                    </div>
                                </div>
                            </div>

                            <!-- informasi akun -->
                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Email</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p>lala@gmail.com</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>No. Telepon</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p>08517261827</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                        <br>
                        <a href="<?= site_url('Profile/edit/'.$username) ?>" class="btn btn-success pull-right" id="btn-edit1">Edit Profil</a>
                        <a href="<?= site_url('Home') ?>" class="btn btn-light pull-right mr-4" id="btn-edit1">Back</a>
                    </div>
                </div>   
            </form>
        </div>
        <?php 
            if($alert == "success"){
                echo "<script>success_sweet('Data is saved.','profile');</script>";
            }
        ?>
        <!-- akhir konten -->
    </div>
