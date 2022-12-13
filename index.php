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
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">
        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <?php 
                    if(isset($_GET['alert'])){
                        if($_GET['alert'] == "gagal"){
                            echo "<div class='alert bg-gradient-danger text-gray-900'>Login gagal! username dan password salah!</div>";
                        }else if($_GET['alert'] == "logout"){
                            echo "<div class='alert bg-gradient-success text-gray-900'>Anda telah berhasil logout</div>";
                        }else if($_GET['alert'] == "berhasil_dibuat"){
                            echo "<div class='alert bg-gradient-success text-gray-900'>User berhasil dibuat</div>";
                        }else if($_GET['alert'] == "gagal_dibuat"){
                            echo "<div class='alert bg-gradient-danger text-gray-900'>User berhasil dibuat</div>";
                        }else if($_GET['alert'] == "belum_login"){
                            echo "<div class='alert bg-gradient-warning text-gray-900'>Anda harus login untuk mengakses halaman admin</div>";
                        }else if($_GET['alert'] == "session"){
                            echo "<div class='alert bg-gradient-warning text-gray-900'>Sesi anda telah habis</div>";
                        }
                    }
                ?>

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-password-image"></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Login Page</h1>
                                    </div>
                                    <form class="user" action="cek_login.php" method="POST">
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user"
                                                id="Username" name="username" placeholder="Username" 
                                                required="required" autocomplete="off">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user"
                                                id="Password" name="password" placeholder="Password"
                                                required="required" autocomplete="off">
                                        </div>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox small">
                                                <input type="checkbox" class="custom-control-input" id="customCheck">
                                                <label class="custom-control-label" for="customCheck">Remember
                                                    Me</label>
                                            </div>
                                        </div>
                                        <input type="submit" value="Login" class="btn btn-primary btn-user btn-block"> 
                                        <hr>
                                    </form>
                                    <div class="text-center">
                                        <a class="small" href="user_tambah.php">Create New User!</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>