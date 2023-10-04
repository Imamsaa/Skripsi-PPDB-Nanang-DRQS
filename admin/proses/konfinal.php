<?php
session_start();
require_once __DIR__."/../../config/config.php";
require_once __DIR__."/../../config/curd.php";
require_once __DIR__."/../../config/validation.php";
require_once __DIR__."/../config/wa.php";
echo "halo";

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
  $nomor = $_GET['nomor'];
     if ($_GET['hal'] == 'diterima') {
        //ambil data siswa
        $edit = edit('data_pendaftaran',['pembayaran' => 'SUDAH'],['nomor_pendaftaran',"'".$nomor."'"]);
        if ($edit) {
            $datasiswa = selectSimple("SELECT * FROM data_siswa WHERE nomor_pendaftaran='$nomor'");
            $resultsiswa = $datasiswa->fetch();
            $penerima = $resultsiswa['nomor_wa'];
            $datanomor = $resultsiswa['nomor_pendaftaran'];

            // ambil data pesan
            $datapesan = selectSimple("SELECT * FROM pesan WHERE kode_pesan = 'bayar'");
            $resultpesan = $datapesan->fetch();
            $datapesan = $resultpesan['isi_pesan'];

            $pesan = urlencode(parseVariable($datanomor,$datapesan));
            $result = "https://wa.srv9.wapanels.com/send-message?api_key=".$apiKey."&sender=".$pengirim."&number=".$penerima."&message=".$pesan;
            $data = file_get_contents($result);
            $hasil = json_decode($data,true);
        }
     }elseif ($_GET['hal'] == 'ditolak') {
      $edit = edit('data_pendaftaran',['pembayaran' => 'BELUM'],['nomor_pendaftaran',"'".$nomor."'"]);
     }
          if ($edit == true) {
              $_SESSION['notice'] = 'success';
              header('Location: ../?hal=konpembayaran');
          }else{
              $_SESSION['notice'] = 'error';
              header('Location: ../?hal=konpembayaran');
          }
}
?>