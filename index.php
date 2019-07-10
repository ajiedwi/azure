<?php

include 'connection.php';

?>
<!DOCTYPE html>
<head>
 <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/jquery.dataTables.min.css" rel="stylesheet">

    <script type="text/javascript" charset="utf8" src="js/jquery.dataTables.min.js"></script>
</head>
<html>
    <body>
        
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <h1>Form penambahan mahasiswa</h1>
            <a href="daftar-mhs.php"><button type="button" class="btn btn-primary">Lihat Mahasiswa</button></a>
            <form class="form-horizontal" action="tambah-mhs.php" method="POST">
                <div class="form-group">
                    <label class="control-label col-sm-2">NIM :</label>
                    <div class="col-sm-10">
                        <input class="form-control"  type="text" name="nim" placeholder="Masukkan NIM">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2">Nama :</label>
                    <div class="col-sm-10">
                        <input class="form-control"  type="text" name="nama" placeholder="Masukkan Nama">
                    </div>
                </div>
                <button type="submit" class="btn btn-success">
                    Submit
                </button>
            </form>        
        </div>
        <div class="col-md-2"></div>

    </body>
</html>