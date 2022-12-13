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
                                        <h1 class="h4 text-gray-900 mb-4">Edit Data Barang Masuk</h1>
                                    </div>
                                    <?php 
                                        $id = $_GET['id']; 
                                        $qEditBarangMasuk = "select * from barangmasuk where id='$id'";
                                        $data = $myConn->query($qEditBarangMasuk);             
                                        while($d = $data->fetch_array()){
                                    ?>
                                    <form action="barang_masuk_update.php" method="post">
                                        <div class="form-group">
                                            <label><b>Tanggal Masuk Barang</b></label>
                                            <input type="hidden" name="id" value="<?php echo $d['id'] ?>">
                                            <input type="date" class="form-control form-control-user"
                                                id="Tanggal" name="tanggal" placeholder="Silahkan masukkan tanggal..." 
                                                required="required" autocomplete="off" value="<?php echo $d['tgl_masuk'] ?>>
                                        </div>
                                        <div class="form-group">
                                            <label><b>Jumlah Barang Masuk</b></label>
                                            <input type="number" class="form-control form-control-user"
                                                id="Jumlah" name="jumlah" placeholder="Silahkan masukkan jumlah..." 
                                                required="required" autocomplete="off" value="<?php echo $d['jumlah'] ?>>
                                        </div>
                                        <div class="form-group">
                                            <label>Barang</label>
                                            <select class="form-control" name="barang_id" required="required">
                                                <option value=""> - Pilih Barang - </option>
                                            <?php 
                                                $barang = $myConn->query("SELECT * from barang");
                                                while($b=$barang->fetch_array()){
                                            ?>
                                                <option <?php if ($d['barang_id'] == $b['id']){echo "selected='selected'";}?> value="<?php echo $b['id']; ?>"><?php echo $b['spesifikasi']; ?></option>
                                            <?php 
                                                }
                                            ?>
                                            </select>
                                        </div>
                                        <input type="submit" value="Simpan" class="btn btn-primary btn-user btn-block"> 
                                        <hr>
                                        <a href="barang_keluar.php" class="btn btn-info btn-sm pull-right"><i class="fa fa-reply"></i> &nbsp Kembali</a>
                                    </form>
                                    <?php 
                                        }
                                    ?>
                                </div>
                            </div> 
                    </div>
                </div>

            </div>

        </div>
    </div>

<?php include 'footer.php'; ?>