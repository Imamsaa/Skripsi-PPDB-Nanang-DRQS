<?php
session_start();
require_once __DIR__."/../config/config.php";
require_once __DIR__."/../config/curd.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['simpan'])) {
        $edit = edit('pengumuman',['pengumuman' => $_POST['text']], ['id_pengumuman',1]);
        if ($edit) {
            $_SESSION['notice'] = 'success';
            header('Location: ../?hal=pengu');
        }else{
            $_SESSION['notice'] = 'error';
            echo "<script>history.back();</script>";
        }
    }
}
?>