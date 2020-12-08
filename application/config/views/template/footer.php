        <footer class="footer">
          <div class="container-fluid clearfix">
            <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © 2020
           All rights reserved.</span>
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>

  <!-- sweetalert -->

  <!-- datatable panjang -->
  <script type="text/javascript">
    $(document).ready(function() {
      $('#table').DataTable({
        "iDisplayLength": 10
      });
  } );
  </script>

      <!-- delete swal  -->
      <script>
      </script>

      <!-- cek box -->
      <script>
          $("#checkall").change(function(){
              $(".checkitem").prop("checked", $(this).prop("checked"))
          })
          $(".checkitem").change(function(){
            if($(this).prop("checked")==false){
                $("#checkall").prop("checked", false)
            }
            if($(".checkitem:checked").length == $(".checkitem").length){
                $("#checkall").prop("checked", true)
            }
          })
      </script>

      <!-- ajax poto profil -->
      <script>
        $("#profileImage").click(function(e) {
            $("#imageUpload").click();
        });

        function fasterPreview( uploader ) {
            if ( uploader.files && uploader.files[0] ){
                  $('#profileImage').attr('src', 
                    window.URL.createObjectURL(uploader.files[0]) );
            }
        }

        $("#imageUpload").change(function(){
            fasterPreview( this );
        });
      </script>

      <!-- match password  -->
      <script>
          $('#password, #confirm_password').on('keyup', function () {
            if ($('#password').val() == $('#confirm_password').val()) {
              $('#message').html('Password Cocok').css('color', 'green');
            } else 
              $('#message').html('Password Tidak Cocok').css('color', 'red');
          });
      </script>

      <!-- tabel bahasa -->
      <script>
          $(function () {
            $("#example").DataTable({        
              "language": {
                "sEmptyTable":	 "Tidak Ada Data",
                "sProcessing":   "Sedang memproses...",
                "sLengthMenu":   "Lihat  _MENU_  data",
                "sZeroRecords":  "Tidak ditemukan data yang sesuai",
                "sInfo":         "Menampilkan _START_ data dari _TOTAL_ data",
                "sInfoEmpty":    "Menampilkan 0 data",
                "sInfoFiltered": "(disaring dari _MAX_ data)",
                "sInfoPostFix":  "",
                "sSearch":       "Cari:",
                "sUrl":          "",
                "oPaginate": {
                  "sFirst":    "Pertama",
                  "sPrevious": "Sebelum",
                  "sNext":     "Selanjutnya",
                  "sLast":     "Terakhir"
                }
            }
            });  
          });
      </script>

      <!-- tanggal -->
      <script type="text/javascript"> 
        $(document).ready(function() { 
            $("#provinsi").select2({ width: '100%' });           
        });
        $(document).ready(function() { 
            $("#kota").select2({ width: '100%' });           
        });
        $(document).ready(function() { 
            $("#pend").select2({ width: '100%' });           
        });
        $(document).ready(function() { 
            $("#pkk").select2({ width: '100%' });           
        });
        $(document).ready(function() { 
            $("#pekerjaan").select2({ width: '100%' });           
        });
        $(document).ready(function() { 
            $("#kor").select2({ width: '100%' });           
        });
        $(document).ready(function() { 
            $("#ka").select2({ width: '100%' });           
        });
      </script>



</body>