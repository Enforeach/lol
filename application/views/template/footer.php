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

      <!-- datatable panjang -->
      <script type="text/javascript">
        $(document).ready(function() {
          $('#table').DataTable({
            "iDisplayLength": 10
          });
      } );
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
        $(document).ready(function() { 
            $(".kplagt").select2({ width: '100%', 
            placeholder: "-- Silahkan cari REG_COM / Nama Anggota --"});           
        });
        $(document).ready(function() { 
            $(".kplogr").select2({ width: '100%', 
            placeholder: "-- Silahkan cari REG_COM / Nama Kepala Organisasi --"});           
        });
      </script>

</body>