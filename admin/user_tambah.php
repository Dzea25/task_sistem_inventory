<?php include 'header.php'; ?>
<div class="container">
        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-4 col-lg-10 col-md-10">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Tambah Data Kategori</h1>
                                    </div>
                                    <form action="user_act.php" method="post">
                                        <div class="form-group">
                                            <label><b>Nama</b></label>
                                            <input type="text" class="form-control form-control-user"
                                                id="Nama" name="nama" placeholder="Silahkan masukkan nama..." 
                                                required="required" autocomplete="off">
                                        </div>
                                        <div class="form-group">
                                            <label><b>Username</b></label>
                                            <input type="text" class="form-control form-control-user"
                                                id="Username" name="username" placeholder="Silahkan masukkan username..." 
                                                required="required" autocomplete="off">
                                        </div>
                                        <div class="form-group">
                                            <label><b>Password</b></label>
                                            <input type="password" class="form-control form-control-user"
                                                id="Password" name="password" placeholder="Silahkan masukkan password..."
                                                required="required" autocomplete="off">
                                        </div>
                                        <input type="submit" value="Simpan" class="btn btn-primary btn-user btn-block"> 
                                        <hr>
                                        <a href="kategori.php" class="btn btn-info btn-sm pull-right"><i class="fa fa-reply"></i> &nbsp Kembali</a>
                                    </form>
                                </div>
                            </div> 
                    </div>
                </div>

            </div>

        </div>
    </div>

<?php include 'footer.php'; ?>