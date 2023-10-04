<?php
session_start();
require_once __DIR__."/../config/config.php";
require_once __DIR__."/../config/curd.php";

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    if (isset($_GET['hal'])) {
        if ($_GET['hal'] == 'daftarulang') {
            $nomor = $_GET['nomor'];
            $edit = edit('data_pendaftaran',['daftar_ulang' => 'SUDAH'],['nomor_pendaftaran',"'".$nomor."'"]);
            if ($edit) {
                $_SESSION['notice'] = 'success';
                header('Location: ../?hal=daftarulang');
            }else{
                $_SESSION['notice'] = 'error';
                echo "<script>history.back();</script>";
            }
        }elseif ($_GET['hal'] == 'bataldaftarulang') {
            $nomor = $_GET['nomor'];
            $edit = edit('data_pendaftaran',['daftar_ulang' => 'BELUM'],['nomor_pendaftaran',"'".$nomor."'"]);
            if ($edit) {
                $_SESSION['notice'] = 'success';
                header('Location: ../?hal=daftarulang');
            }else{
                $_SESSION['notice'] = 'error';
                echo "<script>history.back();</script>";
            }
        }
    }
}
?>