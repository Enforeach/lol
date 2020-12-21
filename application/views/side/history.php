<div class="main-panel">
  <div class="content-wrapper" style="background-color: #e8f4f7;">
    <!-- table -->

    <!-- alert -->
    <div class="row">

      <!-- <a href="#" onclick="haha()" class="btn btn-danger btn-rounded btn-fw"  style="width: 200px; margin-left: 13px; margin-bottom: 10px">
        <span><i class="fa fa-trash"></i></span> Hapus Data Terpilih</a> -->

      </div>
      <div class="row" >
        <div class="col-lg-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <h3 class="text-center">Surat Yang Pernah Dibuat</h3>
              <br>
              <div id="table-responsive">
                <table class="table table-striped datatable-ku" data-func="side" data-meth="history_datatable<?=$tipe?>">
                  <thead>
                    <tr>
                      <th data-orderable="false">Aksi</th>
                      <th>Jenis Surat</th>
                      <th>Tanggal Pembuatan</th>
                      <th>Nama Instansi</th>
                      <th data-orderable="false">Nomor</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>

    <!-- Modal Tambah -->
    <div class="modal fade" id="cetak" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content" style="background-color: white; border-radius: 0px">
          <div class="modal-header">
           <!-- id="exampleModalLongTitle -->
           <h5 class="modal-title">Pilih Layout Cetak Dinas</h5>
           <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form>
            <div class="col-12 row">
              <div class="col-md-12">
                <div class="form-group">
                  <div>
                    <img id="profileImage" alt="" style="width: 100%;"/>
                    <center><b><u><p id="haha"> </p></u></b></center>
                    <center><a href="#" id="lolo" class="btn btn-warning">Cetak</a></center>
                    <input type="text" id="idi" placeholder="">
                  </div>
                </div>
              </div>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <center style="margin-right: 19px;">
            <button id="btn-Indented" onclick="pop('Indented')" class="btn btn-primary">Indented</button>
            <button id="btn-Hanging" onclick="pop('Hanging')" class="btn btn-primary">Hanging</button>
            <button id="btn-Block" onclick="pop('Block')" class="btn btn-primary">Block</button>
            <button id="btn-Semi_Block" onclick="pop('Semi_Block')" class="btn btn-primary">Semi Block</button>
            <div style="margin-top: 10px;"></div>
            <button id="btn-Full_Block" onclick="pop('Full_Block')" class="btn btn-primary">Full Block</button>
          </center>
        </div>
      </div>
    </div>
  </div>
  <!-- end modal tambah  -->

  <script>delete_sweet_dtt(".btn-delete", window.location.href);</script>
  