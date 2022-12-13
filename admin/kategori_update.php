<?php
include '../db_connect.php';
$id  = $_POST['id'];
$kategori  = $_POST['kategori'];
$keterangan = $_POST['keterangan'];

$myConn->query("update kategori set kategori='$kategori', keterangan='$keterangan' where id='$id'");
header("location:kategori.php");