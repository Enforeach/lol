      <div class="main-panel">
        <div class="content-wrapper" style="background-color: #e8f4f7;">
          <!-- table -->

          <!-- alert -->
          <div class="row">

            <a href="<?= site_url('Operator/addOperator') ?>" class="btn btn-primary btn-rounded btn-fw" style="width: 200px; margin-left: 13px; margin-bottom: 10px">
              <span><i class="fa fa-plus"></i></span> Tambah Operator</a>

            <a href="#" id="hapus" class="btn btn-danger btn-rounded btn-fw"  onclick="haha()"style="width: 200px; margin-left: 13px; margin-bottom: 10px">
              <span><i class="fa fa-trash"></i></span> Hapus Data Terpilih</a>

              </div>
              <div class="row" >
                <div class="col-lg-12 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <h3 class="text-center">Operator</h3>
                      <br>
                      <div id="table-responsive">
                        <table class="table table-striped datatable-ku" data-func="operator" data-meth="operator_datatable">
                          <thead>
                            <tr>
                              <th data-orderable="false">
                                <input type="checkbox" id="checkall" onclick="lala();">
                              </th>
                              <th data-orderable="false">Username</th>
                              <th data-orderable="false">Nama</th>
                              <th data-orderable="false">Posisi</th>
                              <th data-orderable="false">Email</th>
                              <th data-orderable="false">Action</th>
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
              var myarray = [];
              var foto = [];
              var lola = 0;
              function lala() {
                if (lola == 0) {
                myarray = [];
                
                foto = [];
              $.ajax({
                type  : 'GET',
                url   : '<?= site_url('Operator/getAll') ?>',
                async : true,
                dataType : 'json',
                success : function(data){

                  for(i=0; i<data.length; i++){
                    myarray.push(data[i].NAMA_SINGKAT)
                    foto.push(data[i].FOTO)
                  }
                  console.log(myarray)
                  console.log(foto)
                }
              });
              lola = 1;
            }else {
              myarray = [];
              foto = [];
              lola = 0;
            }
              }
              function haha(){
                var checked = false;
                var elements = document.getElementsByName("cek[]");
                for(var i=0; i < elements.length; i++){
                  if(elements[i].checked) {
                    checked = true;
                  }
                }
                if (!checked) {
                  swal("Tidak Bisa", "Pilih File Yang Akan Dihapus !", "warning");
                  return false;
                }
                swal({
                  title: "Yakin Data Dihapus ?",
                  text: "File Yang Sudah Dihapus Tidak Dapat Dikembalikan!",
                  type: "warning",
                  showCancelButton: true,
                  confirmButtonColor: "#DD6B55",
                  confirmButtonText: "Yes, Hapus !",
                  closeOnConfirm: false
                },
                function(){
                  $.ajax({
                  type    : 'POST',
                  url     : '<?= site_url('Operator/del_bulk') ?>',
                  data    : {result:JSON.stringify(myarray), hasil:JSON.stringify(foto)},
                  }).done(function(data){
                    if(data === "0"){
                      swal("Failed", "Please delete files associated first!", "error");
                    }else{
                      swal({
                        title: 'Terhapus !',
                        text: 'File Berhasil Dihapus !',
                        type: 'success',
                        showCancelButton: false,
                        closeOnConfirm: false,
                        showLoaderOnConfirm: false
                      },
                      function(){
                        location.href= '<?= site_url('Operator') ?>';
                      });
                    }
                  }).error(function(data){
                    swal("Oops", "We couldn't connect to the server!", "error");
                  });
                });
              }
              
              function la(a, b) {
                if (document.getElementById(a).checked == true)
                {
                  myarray.push(a);
                  foto.push(b);
                }
                else
                {
                  for (var x = 0; x < myarray.length; x++) {
                    if (myarray[x] == a) {
                      myarray.splice(x, 1);
                    }
                    if (foto[x] == b) {

                      foto.splice(x,1);
                    }
                  }
                }
                console.log(myarray)
                console.log(foto)
              }


            </script>

            <script>delete_sweet_dtt(".btn-delete", window.location.href);</script>
            <script>reset_sweet_dtt(".btn-reset", window.location.href);</script>

