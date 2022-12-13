<?php 
include '../db_connect.php';
$tanggal  = $_POST['tanggal'];
$jumlah = $_POST['jumlah'];
$barang_id = $_POST['barang_id'];

$myConn->query("insert into barangkeluar values (NULL,'$tanggal','$jumlah','$barang_id')");
$myConn->query("call after_barangkeluar_insert");
header("location:barang_keluar.php");