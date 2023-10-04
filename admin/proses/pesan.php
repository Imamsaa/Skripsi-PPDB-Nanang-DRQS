<?php
session_start();
require_once __DIR__."/../config/config.php";
require_once __DIR__."/../config/curd.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['tambahpesan'])) {
        $cek = insert('pesan',
        [
            'kode_pesan' => $_POST['kodepesan'],
            'isi_pesan' => $_POST['isipesan']
        ]);
        if ($cek) {
            $_SESSION['notice'] = 'success';
            header('Location: ../?hal=pengu');
        }else{
            $_SESSION['notice'] = 'error';
            echo "<script>history.back();</script>";
        }
    }elseif (isset($_POST['editpesan'])) {
        $cek = edit('pesan',
        [
            'kode_pesan' => $_POST['kodepesan'],
            'isi_pesan' => $_POST['isipesan']
        ],
        [
            'id_pesan', $_POST['nomor']
        ]);
        if ($cek) {
            $_SESSION['notice'] = 'success';
            header('Location: ../?hal=pengu');
        }else{
            $_SESSION['notice'] = 'error';
            echo "<script>history.back();</script>";
        }
    }
}

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    if (isset($_GET['hal'])) {
        if ($_GET['hal'] == 'hapusk') {
            $cek = delete('pesan',$_GET['nomor']);
            if ($cek) {
                $_SESSION['notice'] = 'success';
                header('Location: ../?hal=pengu');
            }else{
                $_SESSION['notice'] = 'error';
                echo "<script>history.back();</script>";
            }
        }
    }
}
?>