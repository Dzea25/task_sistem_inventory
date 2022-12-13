<?php
include '../db_connect.php';
$id  = $_POST['id'];
$nama  = $_POST['nama'];
$username = $_POST['username'];
$pwd = $_POST['password'];
$password = md5($_POST['password']);

if($pwd==""){
    $qEditUserNP = ("UPDATE user SET user_nama='$nama', user_username='$username' WHERE user_id='$id'") or die(mysqli_errno());
    $myConn->query($qEditUserNP);
    header("location:user.php");
}else{
    $qEditUser = ("UPDATE user SET user_nama='$nama', user_username='$username', user_password='$password' WHERE user_id='$id'") or die(mysqli_errno());
    $myConn->query($qEditUser);
    header("location:user.php");
}
?>