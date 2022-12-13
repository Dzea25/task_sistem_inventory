<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Sistem Inventory </title>

    <!-- Custom fonts for this template-->
    <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../css/sb-admin-2.min.css" rel="stylesheet">

    <?php 
        include '../db_connect.php';
        session_start();
        if (!isset($_SESSION['username'])) {
            header("Location: ../index.php");
        }
    ?>

</head>
<body class="bg-gradient-primary">
<div class="container">
        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-4 col-lg-10 col-md-10">

                <div class="card o-hidden border-0 shadow-lg my-5">
                <?php
                    if(isset($_GET['alert'])){
                        if($_GET['alert'] == "sukses"){
                            echo "<div class='alert alert-success'>Profile User anda berhasil diganti!</div>";
                        }
                    }
                ?>
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">User Profile</h1>
                                        <div class="text-left">
                                            <a class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm mb-4" href="profile_edit.php?id=<?php echo $_SESSION['id']; ?>"><i class="fa fa-cog"></i> Edit User</a>
                                            <br />
                                        </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <?php
                                            $id = $_SESSION['id']; 
                                            $qSelectUser = "SELECT * FROM user WHERE user_id='$id'";
                                            $data = $myConn->query($qSelectUser);             
                                            while($d = $data->fetch_array()){
                                        ?>
                                        <table class="table table-bordered">
                                            <tr>
                                                <th width="30%">Nama</th>
                                                <td><?php echo $d['user_nama']; ?></td>
                                            </tr>
                                            <tr>
                                                <th>Username</th>
                                                <td><?php echo $d['user_username']; ?></td>
                                            </tr>
                                        </table>
                                        <?php
                                            }
                                        ?>
                                    </div>
                                    <a href="index.php" class="btn btn-info btn-sm pull-right mb-4"><i class="fa fa-reply"></i> &nbsp Kembali</a>
                                </div>
                            </div> 
                    </div>
                </div>

            </div>

        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../js/sb-admin-2.min.js"></script>

</body>

</html>