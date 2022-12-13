<?php 
include '../db_connect.php';
$kategori = $_POST['kategori'];
$keterangan = $_POST['keterangan'];

$qInsertKategori = "insert into kategori values (NULL, '$kategori','$keterangan')";
$myConn->query($qInsertKategori);

header("location:kategori.php");