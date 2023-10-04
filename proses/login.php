<?php
session_start();
require_once __DIR__."/../config/config.php";
require_once __DIR__."/../config/curd.php";
require_once __DIR__."/../config/validation.php";



if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    if (isset($_POST['submit'])) {
        $result = selectSimple("SELECT * FROM user WHERE email='$email' AND password='$password'");
        $data = $result->fetch();
        if ($email = $data['email'] && $password == $data['password']) {
            $_SESSION['masuk'] = 'success';
            $_SESSION['message'] = 'LOGIN BERHASIL';
            $_SESSION['login'] = 'yes';
            $_SESSION['name'] = $data['nama_lengkap'];
            header('Location: ../admin/');
        }else{
            $_SESSION['gagal'] = 'error';
            $_SESSION['message'] = 'Username atau Password Salah';
            echo "<script>history.back();</script>";
        }
    }
}
?>