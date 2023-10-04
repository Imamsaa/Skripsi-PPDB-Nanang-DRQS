<?php
session_start();
require_once __DIR__."/../config/config.php";
require_once __DIR__."/../config/curd.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['editpassword'])) {
        $password = $_POST['password_baru'];
        $repassword = $_POST['password_baru_ulang'];

        if ($password == $repassword) {
            $edit = edit('user',['password' => md5($password), 'repassword' => $repassword],['id_user',1]);
            if ($edit) {
                $_SESSION['log'] = 'success';
                header('Location: ../?hal=setting');
            }else{
                $_SESSION['notice'] = 'error';
                echo "<script>history.back();</script>";
            }
        }else{
            $_SESSION['log'] = 'error';
            header('Location: ../?hal=setting');
        }
    }
}
?>