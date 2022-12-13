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
                                        <h1 class="h4 text-gray-900 mb-4">Edit Data Kategori</h1>
                                    </div>
                                    <?php 
                                        $id = $_GET['id']; 
                                        $qEditUser = "SELECT * FROM user WHERE user_id='$id'";
                                        $data = $myConn->query($qEditUser);             
                                        while($d = $data->fetch_array()){
                                    ?>
                                    <form action="user_update.php" method="post">
                                        <div class="form-group">
                                            <label><b>Nama</b></label>
                                            <input type="text" class="form-control" name="nama" value="<?php echo $d['user_nama'] ?>" required="required">
                                            <input type="hidden" class="form-control" name="id" value="<?php echo $d['user_id'] ?>" required="required">
                                        </div>
                                        <div class="form-group">
                                            <label><b>Username</b></label>
                                            <input type="text" class="form-control" name="username" value="<?php echo $d['user_username'] ?>" required="required">
                                        </div>
                                        <div class="form-group">
                                            <label><b>Password</b></label>
                                            <input type="password" class="form-control" name="password" min="5" placeholder="Kosong Jika tidak ingin di ganti">
                                        </div>
                                        <input type="submit" value="Simpan" class="btn btn-primary btn-user btn-block"> 
                                        <hr>
                                        <a href="user.php" class="btn btn-info btn-sm pull-right"><i class="fa fa-reply"></i> &nbsp Kembali</a>
                                    <?php 
                                        }
                                    ?>
                                    </form>
                                </div>
                            </div> 
                    </div>
                </div>

            </div>

        </div>
    </div>

<?php include 'footer.php'; ?>