<?php 
include '../db_connect.php';
session_start();
$id = $_SESSION['id'];
$nama = $_POST['nama'];
$username = $_POST['username'];

$qUpdateProfile = ("UPDATE user SET user_nama='$nama', user_username='$username' WHERE user_id='$id'")or die(mysqli_errno());
$myConn->query($qUpdateProfile);

header("location:profile.php?alert=sukses");
 
?>