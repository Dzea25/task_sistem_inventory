<?php 
include '../db_connect.php';
session_start();
$id = $_SESSION['id'];
$password = md5($_POST['password']);

$qUpdatePass = ("UPDATE user SET user_password='$password' WHERE user_id='$id'")or die(mysqli_errno());
$myConn->query($qUpdatePass);

header("location:gantipassword.php?alert=sukses");
 
?>