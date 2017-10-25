<div class="container">
  <div class="row">
    <?php
        if (isset($error)) {
            foreach ($error as $error) {
                ?>
                <div class="row alert_box">
                    <div class="col s12">
                        <div class="card red darken-2">
                            <div class="row">
                                <div class="col s9">
                                    <div class="card-content white-text">
                                        <?php echo $error; ?>
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
        }?>

        <form method="post">
            <div class="row">
                <div class="right">
                    <div class="input-field inline">
                        <input id="search" type="text" name="search" class="validate">
                        <label for="search">Cari Data</label>

                    </div>
                    <button name="btn_search" type="submit" class="btn btn-floating purple accent-3 waves-light waves-effect tooltipped" data-position="bottom" data-delay="50" data-tooltip="Cari"><i class="mdi mdi-account-search"></i> </button>
                </div>
                <div>
                    <br></br>
                    <a href="<?php $baseUrl;?>index.php?page=home&action=excel" class="btn btn-primary ">Export to excel</a>         
                </div>
            </div>

            <div class="row">
                <table class="responsive-table highlight">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>No. Register</th>
                        <th>Waktu Pengadaan</th>
                        <th>Penempatan Alat</th>
                        <th>Keterangan</th>
                        <th>Proses</th>
                    </tr>
                    </thead>

                    <tbody>
                    <?php
                    $limit  = 20;
                    $pagination = isset($_GET['pagination']) ? $_GET['pagination'] : "";

                    if (empty($pagination)){
                        $position   = 0;
                        $pagination = 1;
                    }
                    else{
                        $position   = ($pagination - 1) * $limit;
                    }

                    $query = $connect->execute("SELECT * FROM tbl_data LIMIT $position, $limit");

                    $no = 1 + $position;

                    if (isset($_POST['btn_search'])){
                        $code_id    = $_POST['search'];

                        if ($code_id == ''){
                            $error[]    = "Tidak ada data yang anda cari";
                        }
                        else{
                            if ($code_id != ''){
                                $query = $connect->execute("SELECT * FROM tbl_data WHERE id_data LIKE '%$code_id%'");
                            }
                            else{
                                $query = $connect->execute("SELECT * FROM tbl_data LIMIT $position, $limit");
                            }
                        }
                    }
                    else{
                        $query = $connect->execute("SELECT * FROM tbl_data LIMIT $position, $limit");
                    }

                    $check_search = $query->num_rows;

                    if ($check_search < 1){
                        ?>
                        <tr>
                            <td colspan="8" class="center">Data Tidak Ditemukan</td>
                        </tr>
                        <?php
                    }
                    else {
                        while ($data = $query->fetch_object()){
                            ?>
                            <tr class="<?php if($no % 2 == 0) {echo "odd";} else {echo "even";} ?>">
                                <th scope="row"><?php echo $no;?></th>
                                <td><?php echo $data->no_register;?></td>
                                <td><?php echo $data->waktu_pengadaan;?></td>
                                <td><?php echo $data->penempatan_alat;?></td>
                                <td><?php echo $data->keterangan;?></td>
                                <td>
                                  <a href="<?php $baseUrl;?>index.php?page=home&action=edit&id_data=<?php echo $data->id_data;?>" class="btn btn-floating amber darken-3 waves-effect waves-light tippy" title="Ubah"><i class="mdi mdi-pen"></i> </a>
                                  <a href="<?php $baseUrl;?>index.php?page=home&action=delete&id_data=<?php echo $data->id_data;?>" class="btn btn-floating btn-delete-hapus red darken-3 waves-effect waves-light tippy" title="Hapus"><i class="mdi mdi-delete-empty"></i> </a>
                                  
                                </td>
                            </tr>
                            <?php
                            $no++;
                        }
                    }
                    ?>
                    </tbody>
                </table>
                <?php
                $amount_data = $connect->execute("SELECT * FROM tbl_data");
                $rows = $amount_data->num_rows;

                $amount_page = ceil($rows / $limit);

                if ($pagination > 1){
                    $link = $pagination -1;
                    //Edit this link with your routes
                    $prev = "<a href='".$baseUrl."index.php?page=home&action=queue&pagination=".$link."' class='btn purple'><i class='white-text material-icons'>chevron_left</i></a>";
                }
                else {
                    $prev = "<a href='#' class='btn purple'><i class='white-text mdi mdi-chevron-double-left'></i></a>";
                }

                if ($pagination < $amount_page) {
                    $link = $pagination + 1;
                    //Edit this link with your routes
                    $next = "<a href='".$baseUrl."index.php?page=home&action=queue&pagination=".$link."' class='btn purple'><i class='white-text material-icons'>chevron_right</i></a>";
                }
                else {
                    $next = "<a href='#' class='btn purple'><i class='white-text mdi mdi-chevron-double-right'></i></a>";
                }

                echo "<ul class='pagination'>
                    <li class='waves-effect left'>".$prev."</li>
                    <li class='waves-effect right'>".$next."</li>
                </ul>";
                ?>
            </div>
        </form>
    </div>
  </div>
</div>


<script type="text/javascript">
    tippy('.tippy', {
        position: 'bottom',
        theme: 'light',
        animation: 'scale',
        duration: 1000,
        arrow: true
    });

    $('.alert_close').click(function(){
        $( ".alert_box" ).fadeOut( "slow", function() {
        });
    });

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

      $('.btn-delete-hapus').on('click',function(){
                var getLink = $(this).attr('href');
                
                swal({
                    title: 'HAPUS',
                    text: 'Yakin ingin menghapus? Data masih tersimpan.',
                    html: true,
                    confirmButtonColor: '#d9534f',
                    showCancelButton: true,
                    },function(){
                        window.location.href = getLink
                });
                
                return false;
            });
</script>
