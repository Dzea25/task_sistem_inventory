<?php
include '../db_connect.php';
$id  = $_POST['id'];
$spesifikasi  = $_POST['spesifikasi'];
$stok = $_POST['stok'];
$lokasi = $_POST['lokasi'];
$kategori_id = $_POST['kategori_id'];

$qSelectKategori = "select * from kategori where id='$kategori_id'";
$myConn->query($qSelectKategori);

$myConn->query("update barang set spesifikasi='$spesifikasi', stok='$stok', lokasi='$lokasi', kategori_id='$kategori_id' where id='$id'");
header("location:barang.php");