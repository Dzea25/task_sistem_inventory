<?php 
include '../db_connect.php';
$id = $_GET['id'];



$bm = $myConn->query("select * from barangkeluar where id='$id'");
$barang_keluar = $bm->fetch_assoc();
$id_barang_keluar = $barang_keluar['barang_id'];
$jumlah_barang_keluar = $barang_keluar['jumlah'];


$b = $myConn->query("select * from barang where id='$id_barang_keluar'");
$barang = $b->fetch_assoc();
$jumlah_barang = $barang['stok'];

// ubah jumlah stok data barang
$ubah_jumlah = $jumlah_barang+$jumlah_barang_keluar;

$myConn->query("update barang set stok='$ubah_jumlah' where id='$id_barang_keluar'");

$myConn->query("delete from barangkeluar where id='$id'");
header("location:barang_keluar.php");
?>