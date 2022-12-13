<?php
    include '../db_connect.php';

    $nama = $_POST['nama'];
    $username = $_POST['username'];
    $password = md5($_POST['password']);

    $qInsertUser = "INSERT INTO user VALUES(NULL, '$nama', '$username', '$password')";
    $myConn->query($qInsertUser);

    header("location:user.php");

?>