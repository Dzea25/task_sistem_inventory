<?php 
include '../db_connect.php';
$id = $_GET['id'];

$myConn->query("delete from kategori where id ='$id'");

$myConn->query("delete from barang where kategori_id ='$id'");

header("location:kategori.php");