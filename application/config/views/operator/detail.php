<div class="main-panel">
    <div class="content-wrapper" style="background-color: #e8f4f7;">
        <!-- konten -->
        <div class="container emp-profil">
            <form method="post">
                <div class="row">
                    <div class="col-md-4 mt-3">
                        <a data-toggle="modal" data-target="#exampleModalCenter">
                            <div class="profile-img" data-placement="top">
                                <img id="profileImage" class="no-photo" src="<?= site_url('images/operator/'.$Operator->FOTO); ?>" alt=""/>
                            </div>
                        </a>
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
                                    <img id="profileImage" src="<?= site_url('images/operator/'.$Operator->FOTO); ?>" alt="" style="width: 100%"/>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- akhir modal gambar -->
                    <br>
                    <div class="col-md-6" style="margin-top: 10px">
                        <div class="profile-head" id="atas">
                                <h3>
                                <b><?= $Operator->NAMA_LENGKAP ?></b>
                                </h3>
                                <h6>
                                <?= $Operator->POSISI ?>
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
                                margin-top: -8%;
                            }
                            @media (max-width: 576px){
                                    #cewek{
                                    margin-top: -3%;
                                    margin-left: 3%;
                                }
                                #atas{
                                    margin-top: 5%;
                                }
                            }
                            @media (min-width: 576px) and (max-width: 767px){
                                    #cewek{
                                    margin-top: -3%;
                                    margin-left: 3%;
                                }
                                #atas{
                                    margin-top: 5%;
                                }
                            }
                            @media (min-width: 768px) and (max-width: 768px){
                                    #cewek{
                                    margin-top: -13%;
                                    margin-left: 35%;
                                }
                                #atas{
                                    margin-left: 3%;
                                }
                            }
                            @media (min-width: 1024px) and (max-width: 1024px){
                                    #cewek{
                                    margin-top: -10.5%;
                                    margin-left: 35%;
                                }
                                #atas{
                                    margin-left: 3%;
                                }
                            }
                            @media (min-width: 1025px) and (max-width: 1260px){
                                    #cewek{
                                    margin-top: -10%;
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
                                        <p><?= $Operator->NAMA_LENGKAP ?></p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Username</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p><?= $Operator->NAMA_SINGKAT ?></p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Kota</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p><?= $Operator->KOTA ?></p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Alamat</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p><?= $Operator->ALAMAT ?></p>
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
                                        <p><?= $Operator->EMAIL ?></p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>No. Telepon</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p><?= $Operator->NOMOR_TELEPHON ?></p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Posisi</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p><?= $Operator->POSISI ?></p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Jam Kerja</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p><?= $Operator->JAM_KERJA ?> &nbsp; Jam</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                        <a href="javascript:window.history.go(-1);" class="btn btn-light pull-right mr-4" id="btn-edit1">Back</a>
                    </div>
                </div>
            </form>         
        </div>
        <!-- akhir konten -->
    </div>

