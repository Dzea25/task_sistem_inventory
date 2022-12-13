<?php 
include '../db_connect.php';
$id = $_POST['id'];
$tanggal  = $_POST['tanggal'];
$jumlah = $_POST['jumlah'];
$barang_id = $_POST['barang_id'];

$myConn->query("select * from barang where id='$barang_id'");
$myConn->query("update barangkeluar set tgl_keluar='$tanggal', jumlah='$jumlah',barang_id='$barang_id' where id='$id'");