<?php
    include 'db_connect.php';
    $username = $_POST["username"];
    $password = md5($_POST["password"]);

    $login = $myConn->query("SELECT * FROM user WHERE user_username = '$username' AND user_password = '$password'");
    $cek = $login->num_rows;

    if($cek > 0){
        session_start();
        $data = $login->fetch_assoc();
        $_SESSION['id'] = $data['user_id'];
        $_SESSION['nama'] = $data['user_nama'];
        $_SESSION['username'] = $data['user_username'];
        
        if($_SESSION['username'] = $data['user_username']){
            header("location:admin/");
        }
    }
    else{
        header("location:index.php?alert=gagal");
    }
?>