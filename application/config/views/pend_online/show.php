<div class="main-panel">
  <div class="content-wrapper" style="background-color: #e8f4f7;">
    <!-- table -->

    <!-- alert -->
    <div class="row">

      <a href="" class="btn btn-danger btn-rounded btn-fw"  style="width: 200px; margin-left: 13px; margin-bottom: 10px">
        <span><i class="fa fa-trash"></i></span> Hapus Data Terpilih</a>

      </div>
      <div class="row" >
        <div class="col-lg-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <h3 class="text-center">Data Pendaftaran Online</h3>
              <br>
              <div id="table-responsive">
                <table class="table table-striped datatable-ku" data-func="p_online" data-meth="penline_datatable">
                  <thead>
                    <tr>
                      <th data-orderable="false">
                        <input type="checkbox" id="checkall">
                      </th>
                      <th>ID</th>
                      <th>Nama Lengkap</th>
                      <th>Gender</th>
                      <th>Tanggal Daftar</th>
                      <th>Status Acc</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- content -->

    </div>
    <script type="text/javascript">
      function acc(id, nama){
        swal({
          title: "Apakah anda yakin?",
          text: "Anda akan menambahkan '"+nama+"' sebagai Calon Anggota",
          type: "info",
          showCancelButton: true,
          confirmButtonColor: "#00ce68",
          confirmButtonText: "Ya, Tambahkan!",
          closeOnConfirm: false
        },
        function(){
          $.ajax({
            type    : 'POST',
            url     : '<?= site_url('P_Online/acc') ?>',
            data    : 'id='+id+'',
          }).done(function(data){
            if(data == "0"){
              swal("Failed", "Please delete files associated first!", "error");
            }else{
              swal({
                title: 'Ditambahkan!',
                text: 'Data akun telah disetujui!',
                type: 'success',
                showCancelButton: false,
                closeOnConfirm: false,
                showLoaderOnConfirm: false
              },
              function(){
                location.href= '<?= site_url('P_Online') ?>';
              });
            }
          }).error(function(data){
            swal("Oops", "We couldn't connect to the server!", "error");
          });
        });
      }
    </script>