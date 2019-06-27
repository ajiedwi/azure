<?php

include 'connection.php'

$sql = "select * from [dbo].[user]";
$result = $conn->query($sql); 
var_dump($result) 

?>
<!DOCTYPE html>
<html>
    <head>
    <!-- Bootstrap core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="css/jquery.dataTables.min.css" rel="stylesheet">

        <script type="text/javascript" charset="utf8" src="js/jquery.dataTables.min.js"></script>
    </head>
    <body>
        <div class="col-md-2"></div>
        <div class="col-md-8">
        <a href="index.php"><button type="button" class="btn btn-primary">Tambah Nilai</button></a>
        <br/>
        <h1>Tabel Nilai</h1>
        <table class="table">
            <thead>
                <tr>
                    <td>NIM</td>
                    <td>Nama</td>
                    <td>Tugas</td>
                    <td>UTS</td>
                    <td>UAS</td>
                    <td>Absensi</td>
                    <td>Total</td>
                    <td>Keterangan</td>
                    <td>Aksi</td>
                </tr>
            </thead>
            <tbody>
            <?php
            $sql = "SELECT * FROM nilai";
            $result = $conn->query($sql);
            while($nilai = $result->fetch_assoc()){
            ?>
            <tr>
                <td><?= $nilai['nim'] ?></td>
                <td><?= $nilai['nama'] ?></td>
                <td><?= number_format($nilai['tugas'],2) ?></td>
                <td><?= number_format($nilai['uts'],2) ?></td>
                <td><?= number_format($nilai['uas'],2) ?></td>
                <td><?= number_format($nilai['absensi'],2) ?></td>
                <td><?= number_format($nilai['total'],2) ?></td>
                <td>
                    <?php
                        if($nilai['total']>85){
                            echo "Sangat Memuaskan";
                        } else if($nilai['total']>65){
                            echo "Memuaskan";
                        } else if($nilai['total']>55){
                            echo "Cukup";
                        } else if($nilai['total']>40){
                            echo "Kurang Cukup";
                        } else {
                            echo "Tidak Lulus";
                        }
                    ?>
                </td>
                <td>
                    <a href="hapus-nilai.php?id=<?= $nilai['id'] ?>"><button type="button" class="btn btn-danger">Hapus</button></a>
                </td>
            </tr>
            <?php } ?>
            </tbody>
        </table>
        </div>
        <div class="col-md-2"></div>
    </body>
</html>