<!-- START FOOTER -->
<footer class="page-footer cyan accent-1">

    <div class="footer-copyright">
        <div class="container red-text">
            Copyright © 2017 <a class="grey-text" href="http://msi.unikama.ac.id/">Manajemen Sistem Informasi</a> All rights reserved.
            Developed by <a href="http://oimtrust.com" target="_blank">Oim Trust</a>
        </div>
    </div>
</footer>
<!-- END FOOTER -->
    <script type="text/javascript">

          

           $(document).ready(function () {
           $(".open_modal").click(function(e) {
              var m = $(this).attr("id_category");
                   $.ajax({
                           url: "edit-category.php",
                           type: "GET",
                           data : {id: m,},
                           success: function (ajaxData){
                           $("#ModalEdit").html(ajaxData);
                           $("#ModalEdit").modal('show',{backdrop: 'true'});
                       }
                       });
                });
              });
    </script>
</body>
</html>
</script><script type="text/javascript">
    $('.alert_close').click(function(){
        $( ".alert_box" ).fadeOut( "slow", function() {
        });
    });
     $('.btn-delete').on('click',function(){
                var getLink = $(this).attr('href');
                
                swal({
                    title: 'KELUAR',
                    text: 'Yakin ingin keluar? Data masih tersimpan.',
                    html: true,
                    confirmButtonColor: '#d9534f',
                    showCancelButton: true,
                    },function(){
                        window.location.href = getLink
                });
                
                return false;
            });
</script>