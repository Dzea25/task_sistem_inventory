<?php 
include '../db_connect.php';
$id = $_GET['id'];

$myConn->query("delete from user where user_id ='$id'");

header("location:user.php");