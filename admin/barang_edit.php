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
                                        <h1 class="h4 text-gray-900 mb-4">Edit Data Barang</h1>
                                    </div>
                                    <?php 
                                        $id = $_GET['id']; 
                                        $qEditBarang = "select * from barang where id='$id'";
                                        $data = $myConn->query($qEditBarang);             
                                        while($d = $data->fetch_array()){
                                    ?>
                                    <form action="barang_update.php" method="post">
                                        <div class="form-group">
                                            <label><b>Spesifikasi Barang</b></label>
                                            <input type="hidden" name="id" value="<?php echo $d['id'] ?>">
                                            <input type="text" class="form-control form-control-user"
                                                id="Spesifikasi" name="spesifikasi" placeholder="Silahkan masukkan spesifikasi..." 
                                                required="required" autocomplete="off" value="<?php echo $d['spesifikasi'] ?>">
                                        </div>
                                        <div class="form-group">
                                            <label><b>Stok Barang</b></label>
                                            <input type="number" class="form-control form-control-user"
                                                id="Stok" name="stok" placeholder="Silahkan masukkan stok..." 
                                                required="required" autocomplete="off" value="<?php echo $d['stok'] ?>">
                                        </div>
                                        <div class="form-group">
                                            <label><b>Lokasi Barang</b></label>
                                            <input type="text" class="form-control form-control-user"
                                                id="Lokasi" name="lokasi" placeholder="Silahkan masukkan lokasi..."
                                                required="required" autocomplete="off" value="<?php echo $d['lokasi'] ?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Kategori Barang</label>
                                            <select class="form-control" name="kategori_id" required="required">
                                                <option value=""> - Pilih Barang - </option>
                                            <?php 
                                                $kategori = $myConn->query("SELECT * from kategori");
                                                while($k=$kategori->fetch_array()){
                                            ?>
                                                <option <?php if ($d['kategori_id'] == $k['id']){echo "selected='selected'";}?> value="<?php echo $k['id']; ?>"><?php echo $k['kategori']; ?></option>
                                            <?php 
                                                }
                                            ?>
                                            </select>
                                        </div>
                                        <input type="submit" value="Simpan" class="btn btn-primary btn-user btn-block"> 
                                        <hr>
                                        <a href="barang.php" class="btn btn-info btn-sm pull-right"><i class="fa fa-reply"></i> &nbsp Kembali</a>
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