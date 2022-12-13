<!DOCTYPE html>
 <html>
 <head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Sistem Inventory</title>
  <style type="text/css">
    body{
      font-family: sans-serif;
    }

    .table{
      width: 100%;
    }

    th,td{
    }
    .table,
    .table th,
    .table td {
      padding: 5px;
      border: 1px solid black;
      border-collapse: collapse;
    }
  </style>
</head>
<body>
<center>
    <h4>LAPORAN DATA USER</h4>
    <h4>Sistem Inventory</h4>
</center>

  <?php include '../db_connect.php'; ?>
  
  <table class="table table-bordered table-striped" id="table-datatable">
    <thead>
        <tr>
            <td width="1%">No</td>
            <td>Nama</td>
            <td>Username</td>
        </tr>
    </thead>
    <tbody>
        <?php
            include '../db_connect.php';
            $no = 1;
            $qSelectUser = "SELECT * FROM user";
            $data = $myConn->query($qSelectUser);
            while($d = $data->fetch_array()){
        ?>

        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $d['user_nama']; ?></td>
            <td><?php echo $d['user_username']; ?></td>
        </tr>
                    
        <?php 
        }
        ?>
    </tbody>
</table>

<?php 
require_once("../library/dompdf/dompdf_config.inc.php");
$dompdf = new DOMPDF();
$dompdf->load_html(ob_get_clean());
$dompdf->render();
$dompdf->stream("Laporan Data User.pdf");    
?>
</body>
</html>