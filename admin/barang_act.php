<?php 
include '../db_connect.php';
$barang_id = $_POST['barang_id'];
$spesifikasi = $_POST['spesifikasi'];
$stok = $_POST['stok'];
$lokasi = $_POST['lokasi'];
$kategori_id = $_POST['kategori_id'];

$qSelectKategori = "select * from kategori where id='$kategori_id'";
$cek = $myConn->query($qSelectKategori);

$qInsertBarang = "insert into barang values (NULL, '$spesifikasi','$stok','$lokasi','$kategori_id')";
$myConn->query($qInsertBarang);

header("location:barang.php");