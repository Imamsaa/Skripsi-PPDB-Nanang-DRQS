<?php
session_start();
require_once __DIR__."/../../config/config.php";
require_once __DIR__."/../../config/curd.php";
require_once __DIR__."/../../config/validation.php";
require_once __DIR__."/../config/wa.php";

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    if (isset($_GET['kirim'])) {
        
        //data pesan
        $kode = $_GET['kode'];
        $datapesan = selectSimple("SELECT * FROM pesan WHERE kode_pesan = '$kode'");
        $resultpesan = $datapesan->fetch();
        $datapesan = $resultpesan['isi_pesan'];
        


        if ($_GET['kirim'] == 'auto') {

            $result = selectSimple("SELECT * FROM data_siswa");
            while ($data = $result->fetch()) {
                $penerimaauto = $data['nomor_wa'];
                $datanomor = $data['nomor_pendaftaran'];
                $pesan = urlencode(parseVariable($datanomor,$datapesan));
                $url = "https://wa.srv9.wapanels.com/send-message?api_key=".$apiKey."&sender=".$pengirim."&number=".$penerimaauto."&message=".$pesan;
                $cek = file_get_contents($url);
                $hasil = json_decode($cek,true);
            }
            if ($hasil) {
                $_SESSION['notice'] = 'success';
                echo "<script>history.back();</script>";
            }else{
                $_SESSION['notice'] = 'error';
                echo "<script>history.back();</script>";
            }

        } elseif($_GET['kirim'] == 'manual') {
            //data Siswa
            $nomor = $_GET['nomor'];
            $datasiswa = selectSimple("SELECT * FROM data_siswa WHERE nomor_pendaftaran='$nomor'");
            $resultsiswa = $datasiswa->fetch();
            $penerima = $resultsiswa['nomor_wa'];
            $datanomor = $resultsiswa['nomor_pendaftaran'];
            $pesan = urlencode(parseVariable($datanomor,$datapesan));
            $result = "https://wa.srv9.wapanels.com/send-message?api_key=".$apiKey."&sender=".$pengirim."&number=".$penerima."&message=".$pesan;
            $data = file_get_contents($result);
            $hasil = json_decode($data,true);
            if ($hasil['status'] == true) {
                $_SESSION['notice'] = 'success';
                echo "<script>history.back();</script>";
            }else{
                $_SESSION['notice'] = 'error';
                echo "<script>history.back();</script>";
            }
        }    
    }
}
?>