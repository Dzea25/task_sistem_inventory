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
                                    <form action="kategori_act.php" method="post">
                                        <div class="form-group">
                                            <label><b>Kategori</b></label>
                                            <input type="text" class="form-control form-control-user"
                                                id="Kategori" name="kategori" placeholder="Silahkan masukkan kategori..." 
                                                required="required" autocomplete="off">
                                        </div>
                                        <div class="form-group">
                                            <label>Keterangan</label>
                                            <select class="form-control" name="keterangan" required="required">
                                                <option value=""> - Pilih Keterangan - </option>
                                                <option value="M"><?php echo "Modal"; ?></option>
                                                <option value="A"><?php echo "Alat"; ?></option>
                                                <option value="BHP"><?php echo "Barang Habis Pakai"; ?></option>
                                                <option value="BTHP"><?php echo "Barang Tidak Habis Pakai"; ?></option>
                                            </select>
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