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
                                        <h1 class="h4 text-gray-900 mb-4">Tambah Data Barang</h1>
                                    </div>
                                    <form action="barang_act.php" method="post">
                                        <div class="form-group">
                                            <label><b>Spesifikasi Barang</b></label>
                                            <input type="text" class="form-control form-control-user"
                                                id="Spesifikasi" name="spesifikasi" placeholder="Silahkan masukkan spesifikasi..." 
                                                required="required" autocomplete="off">
                                        </div>
                                        <div class="form-group">
                                            <label><b>Stok Barang</b></label>
                                            <input type="number" class="form-control form-control-user"
                                                id="Stok" name="stok" placeholder="Silahkan masukkan stok..." 
                                                required="required" autocomplete="off">
                                        </div>
                                        <div class="form-group">
                                            <label><b>Lokasi Barang</b></label>
                                            <input type="text" class="form-control form-control-user"
                                                id="Lokasi" name="lokasi" placeholder="Silahkan masukkan lokasi..."
                                                required="required" autocomplete="off">
                                        </div>
                                        <div class="form-group">
                                            <label>Kategori Barang</label>
                                            <select class="form-control" name="kategori_id" required="required">
                                                <option value=""> - Pilih Barang - </option>
                                            <?php 
                                                $kategori = $myConn->query("SELECT * from kategori");
                                                while($k=$kategori->fetch_array()){
                                            ?>
                                                <option value="<?php echo $k['id']; ?>"><?php echo $k['kategori']; ?></option>
                                            <?php 
                                                }
                                            ?>
                    </select>
                  </div>
                                        <input type="submit" value="Simpan" class="btn btn-primary btn-user btn-block"> 
                                        <hr>
                                        <a href="barang.php" class="btn btn-info btn-sm pull-right"><i class="fa fa-reply"></i> &nbsp Kembali</a>
                                    </form>
                                </div>
                            </div> 
                    </div>
                </div>

            </div>

        </div>
    </div>

<?php include 'footer.php'; ?>