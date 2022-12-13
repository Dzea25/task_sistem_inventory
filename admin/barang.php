<?php include 'header.php'?>
<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<div class="align-items-center mb-4">
    <h1 class="h3 mb-0 text-gray-800" style="text-align: left;">Tabel Barang</h1>
    <a href="barang_tambah.php" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
            class="fas fa-plus fa-sm text-white-50"></i> Tambah Data</a>
    <a href="barang_pdf.php" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
            class="fas fa-download fa-sm text-white-50"></i> Create PDF</a>
    <a href="barang_print.php" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
            class="fas fa-print fa-sm text-white-50"></i> Print</a>
</div>
<p class="mb-4">Pada halaman ini berisi data yang ada pada tabel Barang</p>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Tabel Barang</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <td width="1%">No</td>
                        <td>Spesifikasi</td>
                        <td>Stok</td>
                        <td>Lokasi</td>
                        <td>ID Kategori</td>
                        <td width="10%">Opsi</td>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        include '../db_connect.php';
                        $no = 1;
                        $qSelectBarang = "SELECT * FROM barang";
                        $data = $myConn->query($qSelectBarang);
                        while($d = $data->fetch_array()){
                    ?>

                    <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $d['spesifikasi']; ?></td>
                        <td><?php echo $d['stok']; ?></td>
                        <td><?php echo $d['lokasi']; ?></td>
                        <td><?php echo $d['kategori_id']; ?></td>
                        <td>                        
                            <a class="btn btn-warning btn-sm" href="barang_edit.php?id=<?php echo $d['id'] ?>"><i class="fa fa-cog"></i></a>
                            <a class="btn btn-danger btn-sm" href="barang_hapus_konfir.php?id=<?php echo $d['id'] ?>"><i class="fa fa-trash"></i></a>
                        </td>
                    </tr>
                    
                    <?php 
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<?php include 'footer.php'?>