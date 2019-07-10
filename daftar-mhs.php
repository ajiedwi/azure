<?php

include 'connection.php';

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
        <a href="index.php"><button type="button" class="btn btn-primary">Tambah Mahasiswa</button></a>
        <br/>
        <h1>Tabel Nilai</h1>
        <table class="table">
            <thead>
                <tr>
                    <td>NIM</td>
                    <td>Nama</td>
                    <td>Aksi</td>
                </tr>
            </thead>
            <tbody>
            <?php
            $sql = "SELECT * FROM mhs";
            $result = $conn->query($sql);
            foreach($result as $mhs){
            ?>
            <tr>
                <td><?= $mhs['nim'] ?></td>
                <td><?= $mhs['nama'] ?></td>
                <td>
                    <a href="hapus-mhs.php?nim=<?= $mhs['nim'] ?>"><button type="button" class="btn btn-danger">Hapus</button></a>
                </td>
            </tr>
            <?php } ?>
            </tbody>
        </table>
        </div>
        <div class="col-md-2"></div>
    </body>
</html>