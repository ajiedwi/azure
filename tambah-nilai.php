<?php

include 'connection.php';

$nim = $_POST['nim'];
$nama = $_POST['nama'];
$absen = $_POST['absen'];
$tugas = $_POST['tugas'];
$uts = $_POST['uts'];
$uas = $_POST['uas'];
$total = $tugas*0.2 + $absen*0.15 + $uts*0.3 + $uas*0.35;

echo $total;

$conn = $conn->query("INSERT INTO nilai VALUES('','$nim','$nama','$tugas','$uts','$uas','$absen','$total')");

header('location: index.php');


?>