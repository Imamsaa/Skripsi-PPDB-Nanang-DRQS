<?php
session_start();
require_once __DIR__."/../config/config.php";
require_once __DIR__."/../config/curd.php";
require_once __DIR__."/../config/wa.php";

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    if (isset($_GET['hal'])) {
        if ($_GET['hal'] == 'diterima') {
            $nomor = $_GET['nomor'];
            $edit = edit('data_pendaftaran',['diterima' => 'DITERIMA'],['nomor_pendaftaran',"'".$nomor."'"]);
            if ($edit) {
                $datasiswa = selectSimple("SELECT * FROM data_siswa WHERE nomor_pendaftaran='$nomor'");
                $resultsiswa = $datasiswa->fetch();
                $penerima = $resultsiswa['nomor_wa'];
                $datanomor = $resultsiswa['nomor_pendaftaran'];

                // ambil data pesan
                $datapesan = selectSimple("SELECT * FROM pesan WHERE kode_pesan = 'terima'");
                $resultpesan = $datapesan->fetch();
                $datapesan = $resultpesan['isi_pesan'];

                $pesan = urlencode(parseVariable($datanomor,$datapesan));
                $result = "https://wa.srv9.wapanels.com/send-message?api_key=".$apiKey."&sender=".$pengirim."&number=".$penerima."&message=".$pesan;
                $data = file_get_contents($result);
                $hasil = json_decode($data,true);
                $_SESSION['notice'] = 'success';
                header('Location: ../?hal=keputusan');
            }else{
                $_SESSION['notice'] = 'error';
                echo "<script>history.back();</script>";
            }
        }elseif ($_GET['hal'] == 'ditolak') {
            $nomor = $_GET['nomor'];
            $edit = edit('data_pendaftaran',['diterima' => 'TIDAK DITERIMA'],['nomor_pendaftaran',"'".$nomor."'"]);
            if ($edit) {
                $datasiswa = selectSimple("SELECT * FROM data_siswa WHERE nomor_pendaftaran='$nomor'");
                $resultsiswa = $datasiswa->fetch();
                $penerima = $resultsiswa['nomor_wa'];
                $datanomor = $resultsiswa['nomor_pendaftaran'];

                // ambil data pesan
                $datapesan = selectSimple("SELECT * FROM pesan WHERE kode_pesan = 'tolak'");
                $resultpesan = $datapesan->fetch();
                $datapesan = $resultpesan['isi_pesan'];

                $pesan = urlencode(parseVariable($datanomor,$datapesan));
                $result = "https://wa.srv9.wapanels.com/send-message?api_key=".$apiKey."&sender=".$pengirim."&number=".$penerima."&message=".$pesan;
                $data = file_get_contents($result);
                $hasil = json_decode($data,true);
                $_SESSION['notice'] = 'success';
                header('Location: ../?hal=keputusan');
                $_SESSION['notice'] = 'success';
                header('Location: ../?hal=keputusan');
            }else{
                $_SESSION['notice'] = 'error';
                echo "<script>history.back();</script>";
            }
        }elseif ($_GET['hal'] == 'dipending') {
            $nomor = $_GET['nomor'];
            $edit = edit('data_pendaftaran',['diterima' => 'PENDING'],['nomor_pendaftaran',"'".$nomor."'"]);
            if ($edit) {
                $_SESSION['notice'] = 'success';
                header('Location: ../?hal=keputusan');
            }else{
                $_SESSION['notice'] = 'error';
                echo "<script>history.back();</script>";
            }
        }
    }
}
?>