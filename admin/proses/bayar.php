<?php
session_start();
require_once __DIR__ . "/../config/config.php";
require_once __DIR__ . "/../config/curd.php";
require_once __DIR__ . "/../config/validation.php";
$conn = getConn();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $nomor = $_POST['nomor'];
  if (isset($_POST['editjalur'])) {
    $jalur = $_POST['jalur'];
    $edit = edit('data_jalur', ['jalur' => $jalur], ['nomor_pendaftaran', "'" . $nomor . "'"]);
    if ($edit == true) {
      $_SESSION['notice'] = 'success';
      header('Location: ../?hal=pembayaran');
    } else {
      $_SESSION['notice'] = 'error';
      header('Location: ../?hal=pembayaran');
    }
  } elseif (isset($_POST['editdata'])) {
    $query = "SELECT max(nomor_pendaftaran) as maxKode FROM data_siswa";
    $steatment = $conn->query($query);
    $result = $steatment->fetch();
    $kodedaftar = $result['maxKode'];
    $nourut = (int) substr($kodedaftar, 8, 3);
    $nourut++;
    $char = 'PPDB' . date('Y');
    $no = $char . sprintf("%03s", $nourut);
    $file = $_FILES;
    $namefile = "bukti" . $no;
    // $upload = uploadCustom('bukti', $file, 5000000, ['jpg', 'jpeg', 'png', 'pdf'], 'bukti_pembayaran', $namefile);
    $fotosiswa = uploadCustom('fotosiswa', $file, 5000000, ['jpg', 'jpeg', 'png'], 'img', $namefile);
    $siswa = edit('data_siswa', [
      'nama_lengkap' => validationText(strtoupper($_POST['nama_lengkap'])),
      'asal_sekolah' => validationText(strtoupper($_POST['asal_sekolah'])),
      'jenis_kelamin' => $_POST['jenis_kelamin'],
      'nisn' => validationText($_POST['nisn']),
      'tempat_lahir' => validationText(strtoupper($_POST['tempat_lahir'])),
      'tanggal_lahir' => $_POST['tanggal_lahir'],
      'alamat' => validationText($_POST['alamat']),
      'rt' => validationText($_POST['rt']),
      'rw' => validationText($_POST['rw']),
      'dusun' => validationText(strtoupper($_POST['dusun'])),
      'desa' => validationText(strtoupper($_POST['desa'])),
      'kecamatan' => validationText(strtoupper($_POST['kecamatan'])),
      'kabupaten' => validationText(strtoupper($_POST['kabupaten'])),
      'provinsi' => validationText(strtoupper($_POST['provinsi'])),
      'warga_negara' => $_POST['warga_negara'],
      'nomor_wa' => validationText($_POST['nomor_wa']),
      'email' => $_POST['email'],
      'agama' => 'ISLAM',
      'riwayat_penyakit' => validationText($_POST['riwayat_penyakit']),
      'difabel' => validationText($_POST['difabel']),
      'domisili' => validationText(strtoupper($_POST['domisili'])),
      'anak_ke' => validationText($_POST['anak_ke']),
      'hobi' => validationText($_POST['hobi']),
      'fotosiswa' => $fotosiswa
    ], ['nomor_pendaftaran', "'" . $nomor . "'"]);

    $prestasi = edit('data_prestasi', [
      'prestasi_1' => validationText($_POST['prestasi_1']),
      'prestasi_2' => validationText($_POST['prestasi_2']),
      'prestasi_3' => validationText($_POST['prestasi_3'])
    ], ['nomor_pendaftaran', "'" . $nomor . "'"]);

    $ayah = edit(
      'data_ayah',
      [
        'nik' => validationText($_POST['data_ayah_nik']),
        'nama_lengkap' => validationText(strtoupper($_POST['data_ayah_nama_lengkap'])),
        'alamat' => validationText($_POST['data_ayah_alamat']),
        'pendidikan' => $_POST['data_ayah_pendidikan'],
        'tempat_lahir' => validationText(strtoupper($_POST['data_ayah_tempat_lahir'])),
        'tanggal_lahir' => $_POST['data_ayah_tanggal_lahir'],
        'status' => $_POST['data_ayah_status'],
        'pekerjaan' => validationText(strtoupper($_POST['data_ayah_pekerjaan'])),
        'penghasilan' => $_POST['data_ayah_penghasilan'],
        'nomor_wa' => validationText($_POST['data_ayah_nomor_wa']),
        'hubungan_pendaftar' => $_POST['data_ayah_hubungan_pendaftar']
      ],
      ['nomor_pendaftaran', "'" . $nomor . "'"]
    );

    $ibu = edit(
      'data_ibu',
      [
        'nik' => validationText($_POST['data_ibu_nik']),
        'nama_lengkap' => strtoupper($_POST['data_ibu_nama_lengkap']),
        'alamat' => validationText($_POST['data_ibu_alamat']),
        'pendidikan' => $_POST['data_ibu_pendidikan'],
        'tempat_lahir' => validationText(strtoupper($_POST['data_ibu_tempat_lahir'])),
        'tanggal_lahir' => $_POST['data_ibu_tanggal_lahir'],
        'status' => $_POST['data_ibu_status'],
        'pekerjaan' => validationText(strtoupper($_POST['data_ibu_pekerjaan'])),
        'penghasilan' => $_POST['data_ibu_penghasilan'],
        'nomor_wa' => validationText($_POST['data_ibu_nomor_wa']),
        'hubungan_pendaftar' => $_POST['data_ibu_hubungan_pendaftar']
      ],
      ['nomor_pendaftaran', "'" . $nomor . "'"]
    );

    if ($_POST['data_wali_tanggal_lahir'] == "") {
      $tanggalwali = "0000-00-00";
    } else {
      $tanggalwali = $_POST['data_wali_tanggal_lahir'];
    }

    $wali = edit(
      'data_wali',
      [
        'nik' => validationText($_POST['data_wali_nik']),
        'nama_lengkap' => validationText(strtoupper($_POST['data_wali_nama_lengkap'])),
        'alamat' => validationText($_POST['data_wali_alamat']),
        'pendidikan' => $_POST['data_wali_pendidikan'],
        'tempat_lahir' => validationText(strtoupper($_POST['data_wali_tempat_lahir'])),
        'tanggal_lahir' => $tanggalwali,
        'pekerjaan' => validationText(strtoupper($_POST['data_wali_pekerjaan'])),
        'penghasilan' => $_POST['data_wali_penghasilan'],
        'nomor_wa' => validationText($_POST['data_wali_nomor_wa']),
        'hubungan_pendaftar' => $_POST['data_wali_hubungan_pendaftar']
      ],
      ['nomor_pendaftaran', "'" . $nomor . "'"]
    );

    if ($siswa && $prestasi && $ayah && $ibu && $wali) {
      $_SESSION['log'] = 'success';
      header('Location: ../?hal=pembayaran');
    } else {
      $_SESSION['notice'] = 'error';
      echo "<script>history.back();</script>";
    }
  }
}
