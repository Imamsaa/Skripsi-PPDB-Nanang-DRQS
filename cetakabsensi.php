<?php
session_start();
require_once __DIR__ .'/vendors/vendor/autoload.php';
require_once __DIR__. '/config/config.php';
require_once __DIR__. '/config/curd.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style>
    th, td {
      border-bottom: 1px solid #ddd;
      padding : 10;
    }
    table{
      border-collapse: collapse;
      vertical-align: center;
      border: 1px solid #f2f2f2;
      width:100%;
    }
    table .hilang{
      border-collapse: collapse;
      vertical-align: center;
      border: 0px solid white;
      width:100%;
    }
    tr .hilang{
      border-collapse: collapse;
      vertical-align: center;
      border: 0px solid white;
      width:100%;
    }
</style>
</head>
<body>
    <?php

    $status = $_SESSION['status'];
    $sql = "SELECT data_siswa.nama_lengkap AS nama_siswa, data_siswa.nomor_pendaftaran AS nomor_daftar,data_pendaftaran.wawancara AS wawancara, data_ayah.nama_lengkap AS nama_ayah, data_ibu.nama_lengkap AS nama_ibu FROM data_siswa INNER JOIN data_ayah ON data_siswa.nomor_pendaftaran = data_ayah.nomor_pendaftaran INNER JOIN data_ibu ON data_siswa.nomor_pendaftaran = data_ibu.nomor_pendaftaran INNER JOIN data_pendaftaran ON data_siswa.nomor_pendaftaran = data_pendaftaran.nomor_pendaftaran WHERE data_pendaftaran.wawancara="."'".$status."'";
    $result = selectSimple($sql);
    ?>
    
  <h3 style="text-align:center;margin:0; ">Absensi Wawancara<br>SDIT Al Firdaus Purwodadi</h3>
  <table class="table table-bordered">
  <thead>
    <tr>
      <th>NO</th>
      <th>NAMA</th>
      <th>NOMOR PENDAFTARAN</th>
      <th>NAMA ORANG TUA</th>
      <th>TANGGAL</th>
      <th>TANDA TANGAN</th>
    </tr>
    </thead>
    <tbody>
    <?php
    $no = 1;
    while ($data = $result->fetch()) {
    ?>
    <tr>
        <td><?= $no ?></td>
        <td><?= $data["nama_siswa"] ?></td>
        <td><?= $data["nomor_daftar"] ?></td>
        <td><?= $data["nama_ayah"]?> </td>
        <td>                     </td>
        <td>                     </td>
      </tr>
      <?php
      $no++;
      }?>
  </tbody>
  </table>
</body>
</html>
<script type="text/javascript">
setTimeout(function () { window.print(); }, 500);
window.onfocus = function () { setTimeout(function () { window.close(); }, 500); }
</script>

