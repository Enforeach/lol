<div class="main-panel">
  <div class="content-wrapper" style="background-color: #e8f4f7;">
    <!-- table -->

    <!-- alert -->
    <div class="row">

      <a href="<?= site_url('Anggota/create') ?>" class="btn btn-primary btn-rounded btn-fw" style="width: 200px; margin-left: 13px; margin-bottom: 10px">
        <span><i class="fa fa-plus"></i></span> Tambah Anggota</a>

        <a href="" class="btn btn-danger btn-rounded btn-fw"  style="width: 200px; margin-left: 13px; margin-bottom: 10px">
          <span><i class="fa fa-trash"></i></span> Hapus Data Terpilih</a>

          <div class="dropdown" style=" margin-left: 13px; margin-bottom: 10px;">
            <button class="btn btn-info btn-rounded btn-fw dropdown-toggle" style="width: 200px;" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Pilih Aksi Lainya
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="width: 200px; background-color: #d4e4ff; margin-top: 5px">
              <a class="dropdown-item" href=""><i class="mdi mdi-printer" style="margin-right: 10px"></i> cetak</a>
              <a class="dropdown-item" href=""><i class="mdi mdi-briefcase-download" style="margin-right: 10px"></i> unduh</a>
            </div>
          </div>
        </div>
        <div class="row" >
          <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h3 class="text-center">Data Anggota</h3>
                <br>
                <div id="table-responsive">
                  <table class="table table-striped datatable-ku" data-func="anggota" data-meth="anggota_datatable">
                    <thead>
                      <tr>
                        <th data-orderable="false">
                          <input type="checkbox" id="checkall">
                        </th>
                        <th>REG COM</th>
                        <th>Nama Anggota</th>
                        <th>Alamat</th>
                        <th>Wilayah</th>
                        <th>Aktif</th>
                        <th>Tanggal Masuk</th>
                        <th>Action</th>
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
        <!-- content -->

      </div>