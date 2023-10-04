<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    if ($_GET['hal'] == 'cetak') {
        $nomor = $_GET['nomor'];
        header("Location: ../../printdata.php?nomor=$nomor");
    }
}
?>