<?php include 'header.php'?>
<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
</div>

<!-- Content Row -->
<div class="row">

    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                    <a href="kategori.php">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Data Kategori</div>
                    </a>
                        <?php 
                            $dKategori = $myConn->query("SELECT * FROM kategori");
                        ?>
                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $dKategori->num_rows; ?></div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-table fa-2x text-gray-500"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-success shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                    <a href="barang.php">
                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Data Barang</div>
                    </a>
                        <?php 
                            $dBarang = $myConn->query("SELECT * FROM barang");
                        ?>
                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $dBarang->num_rows; ?></div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-tablet fa-2x text-gray-500"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-info shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                    <a href="barang_masuk.php">
                        <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Data Barang Masuk</div>
                    </a>
                        <?php 
                            $dBarangMasuk = $myConn->query("SELECT * FROM barangmasuk");
                        ?>
                        <div class="row no-gutters align-items-center">
                            <div class="col-auto">
                                <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?php echo $dBarangMasuk->num_rows; ?></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-clipboard-list fa-2x text-gray-500"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-warning shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                    <a href="barang_keluar.php">
                        <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Data Barang Keluar</div>
                    <a>
                        <?php 
                            $dBarangKeluar = $myConn->query("SELECT * FROM barangkeluar");
                        ?>
                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $dBarangKeluar->num_rows; ?></div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-receipt fa-2x text-gray-500"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-secondary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                    <a href="user.php">
                        <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Data User</div>
                    <a>
                        <?php 
                            $dUser = $myConn->query("SELECT * FROM user");
                        ?>
                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $dUser->num_rows; ?></div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-user fa-2x text-gray-500"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="card shadow mb-4">
    <div class="row">    
      <section class="col-lg-12">

        <div class="box box-info">
        <div class="card-header py-3">
            <h3 class="m-0 font-weight-bold text-primary">Detail Login</h3>
        </div>
          <div class="form-group">
            <?php
                $id = $_SESSION['id']; 
                $qSelectUser = "SELECT * FROM user WHERE user_id='$id'";
                $profil = $myConn->query($qSelectUser);             
                while($p = $profil->fetch_array()){
            ?>
            <table class="table table-bordered">
              <tr>
                <th width="30%">Nama</th>
                <td><?php echo $p['user_nama']; ?></td>
              </tr>
              <tr>
                <th>Username</th>
                <td><?php echo $p['user_username']; ?></td>
              </tr>
            </table>
            <?php
                }
            ?>
          </div>
        </div>
      </section>
    </div>
</div>
<!-- Content Row -->
<?php include 'footer.php'?>