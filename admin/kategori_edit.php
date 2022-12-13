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
                                        $qEditKategori = "select * from kategori where id='$id'";
                                        $data = $myConn->query($qEditKategori);             
                                        while($d = $data->fetch_array()){
                                    ?>
                                    <form action="kategori_update.php" method="post">
                                        <div class="form-group">
                                            <label><b>Kategori</b></label>
                                            <input type="hidden" name="id" value="<?php echo $d['id'] ?>">
                                            <input type="text" class="form-control form-control-user"
                                                id="Kategori" name="kategori" placeholder="Silahkan masukkan kategori..." 
                                                required="required" autocomplete="off" value="<?php echo $d['kategori'] ?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Keterangan</label>
                                            <select class="form-control" name="keterangan" required="required">
                                                <option value=""> - Pilih Keterangan - </option>
                                                <option <?php if($d['keterangan'] == 'M'){echo "selected='selected'";} ?>value="M"><?php echo "Modal"; ?></option>
                                                <option <?php if($d['keterangan'] == 'A'){echo "selected='selected'";} ?>value="A"><?php echo "Alat"; ?></option>
                                                <option <?php if($d['keterangan'] == 'BHP'){echo "selected='selected'";} ?>value="BHP"><?php echo "Barang Habis Pakai" ?></option>
                                                <option <?php if($d['keterangan'] == 'BTHP'){echo "selected='selected'";} ?>value="BTHP"><?php echo "Barang Tidak Habis Pakai"; ?></option>
                                            </select>
                                        </div>
                                        <input type="submit" value="Simpan" class="btn btn-primary btn-user btn-block"> 
                                        <hr>
                                        <a href="kategori.php" class="btn btn-info btn-sm pull-right"><i class="fa fa-reply"></i> &nbsp Kembali</a>
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