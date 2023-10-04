<?php
require_once __DIR__ . '/../vendors/vendor/autoload.php';
include 'conn/config.php';
$mpdf = new \Mpdf\Mpdf();

$html = '
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
      <td style="border:0;"><img width="80" src="asset/img/logo.png"></td>
      <td style="border:0; vertical-align:center;"><h1 style="line-height: 10px;">SMPIT AL FIRDAUS PURWODADI</h1><p style="line-height: 10px;">Jalan Taman Makam Pahlawan No.19 Purwodadi</p></td>
    </tr>';
$id = $_GET["id"];
$datas = tampildata($conn, "SELECT * FROM data WHERE id=$id");
foreach ($datas as $data) {
  $agama = strtoupper($data["agama"]);
  $alamat = strtoupper($data["alamat"]);
  $tinggal = strtoupper($data["tinggal"]);
  $pekerjaanayah = strtoupper($data['pekerjaan_ayah']);
  $pekerjaanibu = strtoupper($data['pekerjaan_ibu']);
  $pekerjaanwali = strtoupper($data['pekerjaan_wali']);
  $html .= '</table>
  <hr>
  <h2 style="text-align:center;margin:0;"><u>Formulir Pendaftaran</u></h2>
  <h3 style="text-align:center;margin:0; ">No. Pendaftaran : '.$data["no_pendaftaran"].'</h3>
  <table>
  <thead>
    <tr>
      <th colspan="3">Data Diri Pendaftar</th>
    </tr>
    <tr>
      <td rowspan="4" width="100" height="150"><img width="100" src="asset/img/avatar.png"></td>
        <td>NISN</td>
        <td>'.$data["nisn"].'</td>
      </tr>
      <tr>
        <td>Nama Lengkap</td>
        <td>'.$data["nama_lengkap"].'</td>
      </tr>
      <tr>
        <td>Tempat, Tanggal lahir</td>
        <td>'.$data["tempat_lahir"].' '.$data["tanggal_lahir"].'</td>
      </tr>
      <tr>
        <td>Jenis Kelamin</td>
        <td>'.$data["jenis_kelamin"].'</td>
      </tr>
    </thead>
    </table>
    <br>
    <table>
    <thead>
      <tr>
        <td>Asal Sekolah</td>
        <td>'.$data["asal_sekolah"].'</td>
        <td>Agama</td>
        <td>'.$agama.'</td>
      </tr>
      <tr>
        <td>Alamat Siswa</td>
        <td>'.$alamat.'</td>
        <td>No Handphone</td>
        <td>'.$data["nowa"].'</td>
      </tr>
      <tr>
        <td>RT / RW</td>
        <td>'.$data["rt"].' ,'. $data["rw"].'</td>
        <td>E-mail</td>
        <td>'.$data["email"].'</td>
      </tr>
      <tr>
        <td>Kecamatan</td>
        <td>'.$data["Kecamatan"].'</td>
        <td>Anak Ke</td>
        <td>'.$data["anak_ke"].'</td>
      </tr>
      <tr>
        <td>Kabupaten</td>
        <td>'.$data["kabupaten"].'</td>
        <td>Domisili</td>
        <td>'.$tinggal.'</td>
      </tr>
      <tr>
        <td>Provinsi</td>
        <td>'.$data["provinsi"].'</td>
        <td>Hobi</td>
        <td>'.$data["hobi"].'</td>
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
        <th>Data Wali</th>
      </tr>
      <tr>
        <td>Nama Lengkap</td>
        <td>'.$data["nama_ayah"].'</td>
        <td>'.$data["nama_ibu"].'</td>
        <td>'.$data["nama_wali"].'</td>
      </tr>
      <tr>
        <td>Tempat, Tgl lahir</td>
        <td>'.$data["tempat_lahir_ayah"].', '.$data["tanggal_lahir_ayah"].'</td>
        <td>'.$data["tempat_lahir_ibu"].', '.$data["tanggal_lahir_ibu"].'</td>
        <td>'.$data["tempat_lahir_wali"].', '.$data["tanggal_lahir_wali"].'</td>
      </tr>
      <tr>
        <td>Pendidikan</td>
        <td>'.$data["pendidikan_ayah"].'</td>
        <td>'.$data["pendidikan_ibu"].'</td>
        <td>'.$data["pendidikan_wali"].'</td>
      </tr>
      <tr>
        <td>Pekerjaan</td>
        <td>'.$pekerjaanayah.'</td>
        <td>'.$pekerjaanibu.'</td>
        <td>'.$pekerjaanwali.'</td>
      </tr>
      <tr>
        <td>Penghasilan</td>
        <td>'.$data["penghasilan_ayah"].'</td>
        <td>'.$data["penghasilan_ibu"].'</td>
        <td>'.$data["penghasilan_wali"].'</td>
      </tr>
      <tr>
        <td>No Hp</td>
        <td>'.$data["nowa_ayah"].'</td>
        <td>'.$data["nowa_ibu"].'</td>
        <td>'.$data["nowa_wali"].'</td>
      </tr>
    </thead>
    </table>';
}
$mpdf->WriteHTML($html);
$mpdf->Output('dokumen-mahasiswa.pdf', \Mpdf\Output\Destination::INLINE);
?>
</body>
</html>

