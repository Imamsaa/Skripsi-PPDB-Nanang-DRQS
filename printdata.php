<?php
session_start();
require_once __DIR__. '/config/config.php';
require_once __DIR__. '/config/curd.php';

?>
<html>
  <body>
<style>
th, td {
  border-bottom: 1px solid #ddd;
  padding : 10;
}
tr:nth-child(even) {background-color: #f2f2f2;} 
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
<!-- Theme style -->
  <table class="hilang" style="border:0;">
    <tr class="hilang" style="border:0;">
      <td style="border:0; vertical-align:center; text-align:center;"><h1 style="line-height: 10px;">SDIT AL FIRDAUS PURWODADI</h1><p style="line-height: 10px;">Jalan Taman Makam Pahlawan No.19 Purwodadi</p></td>
    </tr>
    <?php
    $nomordaftar = $_GET['nomor'];
    $sql = "SELECT data_siswa.nomor_pendaftaran AS nomor_pendaftaran_siswa, data_siswa.nama_lengkap AS nama_siswa, asal_sekolah,jenis_kelamin,nisn,data_siswa.tempat_lahir AS tempat_lahir_siswa, data_siswa.tanggal_lahir AS tanggal_lahir_siswa, data_siswa.alamat AS alamat_siswa, rt, rw, dusun, desa, kecamatan, kabupaten, provinsi, warga_negara, data_siswa.nomor_wa AS nomor_wa_siswa, email, agama, riwayat_penyakit, difabel, domisili, anak_ke, hobi, data_prestasi.prestasi_1 AS prestasi1, data_prestasi.prestasi_2 AS prestasi2, data_prestasi.prestasi_3 AS prestasi3, data_ayah.nik AS nik_ayah, data_ayah.nama_lengkap AS nama_ayah, data_ayah.alamat AS alamat_ayah, data_ayah.pendidikan AS pendidikan_ayah, data_ayah.tempat_lahir AS tempat_lahir_ayah, data_ayah.tanggal_lahir AS tanggal_lahir_ayah, data_ayah.status AS status_ayah, data_ayah.pekerjaan AS pekerjaan_ayah, data_ayah.penghasilan AS penghasilan_ayah, data_ayah.nomor_wa AS nomor_wa_ayah, data_ayah.hubungan_pendaftar AS hubungan_ayah, data_ibu.nik AS nik_ibu, data_ibu.nama_lengkap AS nama_ibu, data_ibu.alamat AS alamat_ibu, data_ibu.pendidikan AS pendidikan_ibu, data_ibu.tempat_lahir AS tempat_lahir_ibu, data_ibu.tanggal_lahir AS tanggal_lahir_ibu, data_ibu.status AS status_ibu, data_ibu.pekerjaan AS pekerjaan_ibu, data_ibu.penghasilan AS penghasilan_ibu, data_ibu.nomor_wa AS nomor_wa_ibu, data_ibu.hubungan_pendaftar AS hubungan_ibu, data_jalur.jalur AS jalur, bukti_pembayaran.nomor_referensi AS nomor_referensi FROM `data_siswa` INNER JOIN data_prestasi ON data_siswa.nomor_pendaftaran = data_prestasi.nomor_pendaftaran INNER JOIN data_ayah ON data_siswa.nomor_pendaftaran = data_ayah.nomor_pendaftaran INNER JOIN data_ibu ON data_siswa.nomor_pendaftaran = data_ibu.nomor_pendaftaran INNER JOIN  data_jalur ON data_siswa.nomor_pendaftaran = data_jalur.nomor_pendaftaran INNER JOIN bukti_pembayaran ON data_siswa.nomor_pendaftaran = bukti_pembayaran.nomor_pendaftaran";
    $result = selectCustom($sql, 'data_siswa.nomor_pendaftaran', $nomordaftar);
    $data = $result->fetch();?>
</table>
  <hr>
  <h2 style="text-align:center;margin:0;"><u>Formulir Pendaftaran</u></h2>
  <h3 style="text-align:center;margin:0; ">No. Pendaftaran : <?= $data["nomor_pendaftaran_siswa"] ?></h3>
  <table>
  <thead>
    <tr>
      <th colspan="3">Data Diri Pendaftar</th>
    </tr>
    <tr>
        <td>NISN</td>
        <td><?= $data["nisn"] ?></td>
      </tr>
      <tr>
        <td>Nama Lengkap</td>
        <td><?= $data["nama_siswa"] ?></td>
      </tr>
      <tr>
        <td>Tempat, Tanggal lahir</td>
        <td><?= $data["tempat_lahir_siswa"] ?>,<?= $data["tanggal_lahir_siswa"]?></td>
      </tr>
      <tr>
        <td>Jenis Kelamin</td>
        <td><?= $data["jenis_kelamin"] ?></td>
      </tr>
    </thead>
    </table>
    <br>
    <table>
    <thead>
      <tr>
        <td>Asal Sekolah</td>
        <td><?= $data["asal_sekolah"] ?></td>
        <td>Agama</td>
        <td><?= $data["agama"] ?></td>
      </tr>
      <tr>
        <td>Alamat Siswa</td>
        <td><?= $data["alamat_siswa"] ?></td>
        <td>No Handphone</td>
        <td><?= $data["nomor_wa_siswa"] ?></td>
      </tr>
      <tr>
        <td>RT / RW</td>
        <td><?= $data["rt"] ?> ,<?= $data["rw"] ?></td>
        <td>E-mail</td>
        <td><?= $data["email"] ?></td>
      </tr>
      <tr>
        <td>Kecamatan</td>
        <td><?= $data["kecamatan"] ?></td>
        <td>Anak Ke</td>
        <td><?= $data["anak_ke"] ?></td>
      </tr>
      <tr>
        <td>Kabupaten</td>
        <td><?= $data["kabupaten"] ?></td>
        <td>Domisili</td>
        <td><?= $data["domisili"] ?></td>
      </tr>
      <tr>
        <td>Provinsi</td>
        <td><?= $data["provinsi"] ?></td>
        <td>Hobi</td>
        <td><?= $data["hobi"] ?></td>
      </tr>
    </thead>
    </table>
    <br>
    <table>
    <thead>
      <tr>
        <th>Data Orang Tua</th>
        <th>Data Ayah</th>
        <th>Data Ibu</th>

      </tr>
      <tr>
        <td>Nama Lengkap</td>
        <td><?= $data["nama_ayah"] ?></td>
        <td><?= $data["nama_ibu"] ?></td>

      </tr>
      <tr>
        <td>Tempat, Tgl lahir</td>
        <td><?= $data["tempat_lahir_ayah"] ?>,<?= $data["tanggal_lahir_ayah"] ?></td>
        <td><?= $data["tempat_lahir_ibu"] ?>,<?= $data["tanggal_lahir_ibu"] ?></td>

      </tr>
      <tr>
        <td>Pendidikan</td>
        <td><?= $data["pendidikan_ayah"] ?></td>
        <td><?= $data["pendidikan_ibu"] ?></td>

      </tr>
      <tr>
        <td>Pekerjaan</td>
        <td><?= $data["pekerjaan_ayah"] ?></td>
        <td><?= $data["pekerjaan_ibu"] ?></td>

      </tr>
      <tr>
        <td>No Hp</td>
        <td><?= $data["nomor_wa_ayah"] ?></td>
        <td><?= $data["nomor_wa_ibu"] ?></td>

      </tr>
    </thead>
    </table>
    
</body>
</html>
<script type="text/javascript">
setTimeout(function () { window.print(); }, 500);
window.onfocus = function () { setTimeout(function () { window.close(); }, 500); }
</script>

