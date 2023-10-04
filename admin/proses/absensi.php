<?php
session_start();
require_once __DIR__."/../config/config.php";
require_once __DIR__."/../config/curd.php";

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    if (isset($_GET['hal'])) {
        if ($_GET['hal'] == 'unduhabsenbelum') {
            $_SESSION['status'] = $_GET['data'];
            try {
                header('Location: ../../cetakabsensi.php');
            } catch (PDOException $exception) {
                $_SESSION['notice'] = 'error';
                echo "<script>history.back();</script>";
            }
        }elseif ($_GET['hal'] == 'unduhabsensudah') {
            $_SESSION['status'] = $_GET['data'];
            try {
                header('Location: ../../cetakabsensi.php');
            } catch (PDOException $exception) {
                $_SESSION['notice'] = 'error';
                echo "<script>history.back();</script>";
            }
        }
    }
}
?>