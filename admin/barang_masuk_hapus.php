<?php 
include '../db_connect.php';
$id = $_GET['id'];



$bm = $myConn->query("select * from barangmasuk where id='$id'");
$barang_masuk = $bm->fetch_assoc();
$id_barang_masuk = $barang_masuk['barang_id'];
$jumlah_barang_masuk = $barang_masuk['jumlah'];


$b = $myConn->query("select * from barang where id='$id_barang_masuk'");
$barang = $b->fetch_assoc();
$jumlah_barang = $barang['stok'];

// ubah jumlah stok data barang
$ubah_jumlah = $jumlah_barang-$jumlah_barang_masuk;

$myConn->query("update barang set stok='$ubah_jumlah' where id='$id_barang_masuk'");

$myConn->query("delete from barangmasuk where id='$id'");
header("location:barang_masuk.php");
?>