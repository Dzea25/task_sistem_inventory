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
                                        <div class="box-header">
                                            <h3 class="h4 text-gray-900 mb-4">Yakin Ingin Menghapus Data Ini ?</h3>
                                        </div>
                                        <div class="box-body">
                                            <p>Dengan menghapus data pada tabel ini, data yang terhubung akan dihapus.</p>
                                            <br/>
                                            <a href="kategori.php" class="btn btn-danger btn-sm"><i class="fa fa-reply"></i> &nbsp Kembali</a> 
                                            <?php 
                                                $idd = $_GET['id'];
                                            ?>
                                            <a href="kategori_hapus.php?id=<?php echo $idd; ?>" class="btn btn-success btn-sm pull-right"><i class="fa fa-check"></i> &nbsp Hapus</a> 
                                        </div>
                                    </div>
                                </div>
                            </div> 
                    </div>
                </div>

            </div>

        </div>
    </div>

<?php include 'footer.php'; ?>