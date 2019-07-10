<?php

include 'connection.php';

$nim = $_GET['nim'];

$conn = $conn->query("DELETE FROM mhs WHERE nim = '$nim'");

header('location: daftar-mhs.php');


?>