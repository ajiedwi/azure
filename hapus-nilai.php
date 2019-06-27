<?php

include 'connection.php';

$id = $_GET['id'];

$conn = $conn->query("DELETE FROM nilai WHERE id = '$id'");

header('location: daftar-nilai.php');


?>