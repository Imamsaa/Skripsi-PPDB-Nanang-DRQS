<?php
session_start();
require_once __DIR__."/../admin/config/wa.php";
require_once __DIR__."/../config/config.php";
require_once __DIR__."/../config/validation.php";
require_once __DIR__."/../config/curd.php";
require_once __DIR__."/../config/upload.php";


$conn = getConn();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  //Mendapatkan Nomor Pendaftaran
  $query = "SELECT max(nomor_pendaftaran) as maxKode FROM data_siswa";
  $steatment = $conn -> query($query);
  $result = $steatment->fetch();
  $kodedaftar = $result['maxKode'];
  $nourut = (int) substr($kodedaftar, 8, 3);
  $nourut++;
  $char = 'PPDB'.date('Y');
  $no = $char . sprintf("%03s", $nourut);
  $file = $_FILES;
  $namefile = "bukti".$no;
  $upload = uploadCustom('bukti',$file,5000000,['jpg','jpeg','png','pdf'],'bukti_pembayaran',$namefile);
  
  if (isset($_POST['daftar'])) {
    if ($upload == 1) {
      $_SESSION['log'] = 'error';
      $_SESSION['message'] = 'Jenis File Tidak Diijinkan';
      echo "<script>history.back();</script>";
    }elseif ($upload == 2) {
      $_SESSION['log'] = 'error';
      $_SESSION['message'] = 'Ukuran File Terlalu Besar';
      echo "<script>history.back();</script>";
    }else{  
      $siswa = insert('data_siswa',[
        'nomor_pendaftaran' => $no,
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
        'hobi' => validationText($_POST['hobi'])
      ]);

      $pembayaran = insert('bukti_pembayaran',[
        'nomor_pendaftaran' => $no,
        'nomor_referensi' => validationText($_POST['nomor_referensi']),
        'bukti' => $upload
      ]);
    }
  }
  if ($siswa == true) {
    $prestasi = insert('data_prestasi',[
      'nomor_pendaftaran' => $no,
      'prestasi_1' => validationText($_POST['prestasi_1']),
      'prestasi_2' => validationText($_POST['prestasi_2']),
      'prestasi_3' => validationText($_POST['prestasi_3'])
    ]);

    $ayah = insert('data_ayah',[
      'nomor_pendaftaran' => $no,
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
    ]);

    $ibu = insert('data_ibu',[
      'nomor_pendaftaran' => $no,
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
    ]);

    if ($_POST['data_wali_tanggal_lahir'] == "") {
      $tanggalwali = "0000-00-00";
    }else {
      $tanggalwali = $_POST['data_wali_tanggal_lahir'];
    }

    $wali = insert('data_wali',[
      'nomor_pendaftaran' => $no,
      'nik' => validationText($_POST['data_wali_nik']),
      'nama_lengkap' => strtoupper($_POST['data_wali_nama_lengkap']),
      'alamat' => validationText($_POST['data_wali_alamat']),
      'pendidikan' => $_POST['data_wali_pendidikan'],
      'tempat_lahir' => validationText(strtoupper($_POST['data_wali_tempat_lahir'])),
      'tanggal_lahir' => $tanggalwali,
      'pekerjaan' => validationText(strtoupper($_POST['data_wali_pekerjaan'])),
      'penghasilan' => $_POST['data_wali_penghasilan'],
      'nomor_wa' => validationText($_POST['data_wali_nomor_wa']),
      'hubungan_pendaftar' => $_POST['data_wali_hubungan_pendaftar']
    ]);

    $bayar = insert('data_pendaftaran',[
      'nomor_pendaftaran' => $no,
      'pembayaran' => 'BELUM',
      'pengumpulan_berkas' => 'BELUM',
      'wawancara' => 'BELUM',
      'diterima' => 'PENDING',
      'daftar_ulang' => 'BELUM'
    ]);

    if (idate('Y') <= 2022) {
      if (idate('m') <= 11) {
        $jalur = 'PRESTASI';
      }elseif( idate('m') == 12){
        if (idate('d') <= 7) {
          $jalur = 'PRESTASI';
        }elseif (idate('d') >= 8) {
          $jalur = 'REGULER';
        }
      }
    }elseif (idate('Y') >= 2023) {
      $jalur = 'REGULER';
    }
    $hasiljalur = insert('data_jalur',[
      'nomor_pendaftaran' => $no,
      'jalur' => $jalur
    ]);

    if (true) {
      $datasiswa = selectSimple("SELECT * FROM data_siswa WHERE nomor_pendaftaran='$no'");
      $resultsiswa = $datasiswa->fetch();
      $penerima = $resultsiswa['nomor_wa'];
      $datanomor = $resultsiswa['nomor_pendaftaran'];

      // ambil data pesan
      $datapesan = selectSimple("SELECT * FROM pesan WHERE kode_pesan = 'daftar'");
      $resultpesan = $datapesan->fetch();
      $datapesan = $resultpesan['isi_pesan'];

      $pesan = urlencode(parseVariable($datanomor,$datapesan));
      $result = "https://wa.srv9.wapanels.com/send-message?api_key=".$apiKey."&sender=".$pengirim."&number=".$penerima."&message=".$pesan;
      $data = file_get_contents($result);
      $hasil = json_decode($data,true);
    }

    $_SESSION['log'] = 'success';
    $_SESSION['message'] = 'BERHASIL';
    header("Location: ../?hal=success&nomor=$no");
  }
}
?>