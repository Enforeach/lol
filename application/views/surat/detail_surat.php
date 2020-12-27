        <?php
        $title = $title;
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
                                                                        <input type="text" disabled="" name="kop_surat" class="form-control" value="<?= $surat->nama_instansi ?>" placeholder="contoh: PT. Induk Jaya">
                                                                        <input type="hidden" name="id_detail" class="form-control" value="<?= $surat->id_detail ?>" placeholder="contoh: PT. Induk Jaya">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="" class="control-label">Jenis Instansi</label>
                                                                    <div>
                                                                        <input type="text" disabled="" name="jenis_instansi" class="form-control" value="<?= $surat->jenis_instansi ?>" placeholder="contoh: Manufaktur">
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
                                                                        <textarea type="text" disabled="" name="alamat" class="form-control"> <?= $surat->alamat ?> </textarea>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="" class="control-label">Kota</label>
                                                                    <div>
                                                                        <input type="text" disabled="" name="kota" class="form-control" value="<?= $surat->kota ?>" placeholder="contoh: Malang">
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
                                                                        <input type="text" disabled="" name="telp" class="form-control" value="<?= $surat->telp ?>" placeholder="contoh: 08xxxxxx">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="" class="control-label">Website</label>
                                                                    <div>
                                                                        <input type="text" disabled="" name="website" class="form-control" value="<?= $surat->website ?>" placeholder="contoh: www/https://indonesiamerkeda.com">
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
                                                                        <input type="text" disabled="" id="basicDate" name="tanggal" value="<?= $surat->tgl ?>" class="form-control"
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
                                                                        <input type="text" disabled="" name="nomor" class="form-control" value="<?= $surat->nomor ?>" placeholder="contoh: 187/AM/IX/2015">
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
                                                                        <input type="text" disabled="" name="perihal" class="form-control" value="<?= $surat->perihal ?>" placeholder="contoh: PEMBERITAHUAN">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="" class="control-label">Lampiran</label>
                                                                    <div>
                                                                        <input type="text" disabled="" name="lampiran" class="form-control" value="<?= $surat->lampiran ?>" placeholder="">
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
                                                                        <input type="text" disabled="" name="nama_tujuan" class="form-control" value="<?= $surat->nama_tujuan ?>" placeholder="contoh: PT. KARYA JAYA">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="" class="control-label">Alamat</label>
                                                                    <div>
                                                                        <div class="">
                                                                            <textarea type="text" disabled="" name="alamat_tujuan" class="form-control" value="<?= $surat->alamat_tujuan ?>"> </textarea>
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
                                                                        <input type="text" disabled="" name="kota_tujuan" class="form-control" value="<?= $surat->kota_tujuan ?>" placeholder="contoh: Kebumen">
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
                                                                        <input type="text" disabled="" name="salam_pembuka" class="form-control" value="<?= $surat->salam_pembuka ?>" placeholder="contoh: Hormat Kami">
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
                                                                                <!-- <button type="button" class="btn btn-warning" id="tambaha"><i class="fa fa-plus"></i>Paragraf</button>
                                                                                    <button type="button" class="btn btn-warning" id="tambahlist"><i class="fa fa-plus"></i>List</button> -->
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
                                                                                            <textarea type="text" disabled="" name="isi<?=$no?>" id="isi<?=$no?>" onblur="lololo('isi<?=$no?>');" class="form-control" value=""><?=$key->isi?></textarea>
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
                                                                                            <textarea type="text" disabled="" name="isi<?=$no?>" id="isi<?=$no?>" onblur="lololo('isi<?=$no?>');" class="form-control" value=""><?=$key->isi?></textarea>
                                                                                        </div>

                                                                                        <input type="hidden" id="pantau<?=$no?>" class="form-control" value="<?=$key->jenis?>">
                                                                                        <div class="col-md-3" id="place<?=$no?>">

                                                                                        </div>
                                                                                    </div>
                                                                                </div>

                                                                            <?php } if (count($isi) == $no) { ?>


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
                                                                                <input type="text" disabled="" name="salam_penutup" class="form-control" value="<?= $surat->salam_penutup ?>" placeholder="contoh: Hormat Kami">
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
                                                                                <input type="text" disabled="" name="nama" value="<?= $surat->nama ?>" placeholder="contoh: Indah Setyorini" class="form-control">
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
                                                                                <input type="text" disabled="" name="jabatan" value="<?= $surat->jabatan ?>" placeholder="contoh: Direktur" class="form-control">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-md-12 mt-5">
                                                                <input type="hidden" name="cek" id="cek">
                                                                <button type="button" class="btn btn-round" onclick="window.location.href='<?= site_url('Home'); ?>'"><i class="fa fa-angle-left"></i>Kembali</i></button>
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
                                                            <input type="hidden" id="ln" value="<?= count($isi) ?>">
                                                            <div class="form-group">
                                                                <center><label for="foto" class=" control-label">Logo</label></center>
                                                                <div>
                                                                  <img id="profileImage" width="210" height="210" src="<?= site_url('images/logo_surat/') ?><?=$surat->logo?>" alt=""
                                                                  style="display: block;
                                                                  border: 1px solid gray;
                                                                  margin-left: auto;
                                                                  margin-right: auto; 
                                                                  object-fit: cover; 
                                                                  border-radius: 50%;
                                                                  cursor: pointer;"/>
                                                              </div>
                                                          </div>
                                                      </div>
                                                  </div>
                                                  <footer style="margin-top:10px; margin-bottom: 10px;">
                                                    <img id="profileImage2" src="" alt="" style="width: 100%;"/>
                                                </footer>
                                                <center><b><div id="haha"></div></b></center>
                                                
                                                <center><b><div id="haha1"></div></b></center>
                                                
                                                <br>
                                                <div class="card">
                                                    <div class="card-body">
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <button id="btn-Indented" style="width: 100%" onclick="pop('Indented')" class="btn btn-primary">Indented</button>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <button id="btn-Hanging" style="width: 100%" onclick="pop('Hanging')" class="btn btn-primary">Hanging</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div style="margin-top: 10px;"></div>

                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <button id="btn-Block" style="width: 100%" onclick="pop('Block')" class="btn btn-primary">Block</button>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <button id="btn-Semi_Block" style="width: 100%" onclick="pop('Semi_Block')" class="btn btn-primary">Semi Block</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div style="margin-top: 10px;"></div>
                                                        <button id="btn-Full_Block" style="width: 100%" onclick="pop('Full_Block')" class="btn btn-primary">Full Block</button>
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
                <script type="text/javascript">
                  function pop(x) {
                    event.preventDefault()
                    if (x == 'Indented') {

                      document.getElementById("profileImage2").src = "<?= site_url('images/Style/Indented.jpg'); ?>";
                      document.getElementById("haha").innerHTML = x+" Style";
                      var cet = '<center><a href="<?= site_url('Create/cetak_Indented/'.$surat->id_detail) ?>" id="lolo" class="btn btn-warning">Cetak</a></center>';
                      
                      document.getElementById("haha1").innerHTML = cet;
                  }
                  if (x == 'Block') {
                      document.getElementById("profileImage2").src = "<?= site_url('images/Style/Block.jpg'); ?>";
                      document.getElementById("haha").innerHTML = x+" Style";
                      var cet = '<center><a href="<?= site_url('Create/cetak_Block/'.$surat->id_detail) ?>" id="lolo" class="btn btn-warning">Cetak</a></center>';
                      
                      document.getElementById("haha1").innerHTML = cet;
                  }
                  if (x == 'Semi_Block') {
                      document.getElementById("profileImage2").src = "<?= site_url('images/Style/Semi_Block.jpg'); ?>";
                      document.getElementById("haha").innerHTML = x+" Style";
                      var cet = '<center><a href="<?= site_url('Create/cetak_Semi/'.$surat->id_detail) ?>" id="lolo" class="btn btn-warning">Cetak</a></center>';
                      
                      document.getElementById("haha1").innerHTML = cet;
                  }
                  if (x == 'Full_Block') {
                      document.getElementById("profileImage2").src = "<?= site_url('images/Style/Full_Block.jpg'); ?>";
                      document.getElementById("haha").innerHTML = x+" Style";
                      var cet = '<center><a href="<?= site_url('Create/cetak_Full/'.$surat->id_detail) ?>" id="lolo" class="btn btn-warning">Cetak</a></center>';
                      
                      document.getElementById("haha1").innerHTML = cet;
                  }

                  if (x == 'Hanging') {
                      document.getElementById("profileImage2").src = "<?= site_url('images/Style/Hanging.jpg'); ?>";
                      document.getElementById("haha").innerHTML = x+" Style";
                      var cet = '<center><a href="<?= site_url('Create/cetak_Hanging/'.$surat->id_detail) ?>" id="lolo" class="btn btn-warning">Cetak</a></center>';
                      
                      document.getElementById("haha1").innerHTML = cet;
                  }
              }
          </script>