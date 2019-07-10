<?php

include 'connection.php';

$nim = $_POST['nim'];
$nama = $_POST['nama'];

$conn = $conn->query("INSERT INTO mhs VALUES('$nim','$nama')");

header('location: index.php');


?>