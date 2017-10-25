<?php
//definition name of file
header("Content-type: application/vnd-ms-excel");
$now = date('Y-m-d');
header("Content-Disposition: attachment; filename=peralatanMSI-'{$now}'.xls");

?>

<table border="1">
    <tr>
        <th>No.</th>
        <th>No.Register</th>
        <th>Waktu Pengadaan</th>
        <th>Penempatan Alat</th>
        <th>Keterangan</th>
        
    </tr>
    <?php
    $query  = $connect->execute("SELECT * FROM tbl_data ORDER BY id_data ASC");
    $no     = 1;

    while ($data = $query->fetch_object()) {

        ?>
        <tr>
            <td><?php echo $no;?></td>
            <td><?php echo $data->no_register;?></td>
            <td><?php echo $data->waktu_pengadaan;?></td>
            <td><?php echo $data->penempatan_alat;?></td>
            <td><?php echo $data->keterangan;?></td>
            
        </tr>
        <?php
        $no++;
    }
    ?>
</table>