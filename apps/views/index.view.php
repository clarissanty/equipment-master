<div class="container">
    <div class="row">
        <div class="col s12 m5 card z-depth-3">
            <!-- Start Alert box -->
            <?php
            if (isset($error)) {
                foreach ($error as $error) {
                    ?>
                    <div class="row alert_box">
                        <div class="col s12 m12">
                            <div class="card red darken-2">
                                <div class="row">
                                    <div class="col s9">
                                        <div class="card-content white-text">
                                            <p><?php echo $error; ?></p>
                                        </div>
                                    </div>
                                    <div class="col s3 white-text">
                                        <i class="mdi mdi-close close right alert_close" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                }
            }
            elseif (isset($_GET['saved'])) {
                ?>
                <div class="row alert_box">
                    <div class="col s12">
                        <div class="card green darken-2">
                            <div class="row">
                                <div class="col s9">
                                    <div class="card-content white-text">
                                        Selamat! Penyimpanan data berhasil.
                                    </div>
                                </div>
                                <div class="col s3 white-text">
                                    <i class="mdi mdi-close close right alert_close" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
            }
            ?>
            <!-- End Alert box -->
            <form class="col s12" action="" method="post">
                <div class="row">
                    <div class="input-field col s12">
                        <input type="text" name="no_register" id="no_register">
                        <label for="no_register">No. Register</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input type="text" name="waktu_pengadaan" id="waktu_pengadaan" class="datepicker">
                        <label for="waktu_pengadaan">Waktu Pengadaan</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input type="text" name="penempatan_alat" id="penempatan_alat" class="validate">
                        <label for="last_name">Penempatan Alat</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <textarea id="keterangan" name="keterangan" class="materialize-textarea"></textarea>
                        <label for="keterangan">Keterangan</label>
                    </div>
                </div>
                <div class="row">
                    <div class="col s12">
                        <button  type="submit" name="btn_save" class="waves-effect waves-light btn col s12">Simpan</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

</div>

<script type="text/javascript">
    (function($){
        $(function(){

            //For dialog box
            $('.alert_close').click(function(){
                $( ".alert_box" ).fadeOut( "slow", function() {
                });
            });

            //Datepicker for waktu_pengadaan
            $('.datepicker').pickadate({
              selectMonths: true, // Creates a dropdown to control month
              selectYears: 20, // Creates a dropdown of 15 years to control year,
              today: 'Today',
              clear: 'Clear',
              close: 'Ok',
              closeOnSelect: false // Close upon selecting a date,
            });

            //Textarea for keterangan
            $('#keterangan').trigger('autoresize');

        }); // end of document ready
    })(jQuery); // end of jQuery name space
</script>
