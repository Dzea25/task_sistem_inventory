<?php 
include '../db_connect.php';
$id = $_GET['id'];

$myConn->query("delete from barang where id='$id'");

$myConn->query("delete from barangmasuk where id='$id'");
$myConn->query("delete from barangkeluar where id='$id'");

header("location:barang.php");
