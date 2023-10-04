<?php
session_start();
require_once __DIR__."/config/config.php";
require_once __DIR__."/config/curd.php";

$seleksi = selectSimple("SELECT * FROM data_siswa INNER JOIN data_pendaftaran ON data_siswa.nomor_pendaftaran = data_pendaftaran.nomor_pendaftaran WHERE data_pendaftaran.pembayaran = 'SUDAH'");
?>
<?php
    $result = selectSimple("SELECT * FROM pengumuman WHERE id_pengumuman=1");
    $data_pengu = $result->fetch();
    ?>
<header class="masthead">
    <div class="container px-5">
        <div class="row gx-5 align-items-center">
            <div class="col-lg-6">
                <!-- Mashead text and app badges-->
                <div class="mb-5 mb-lg-0 text-center text-lg-start">
                    <h1 class="display-1 lh-1 mb-3">Informasi Pendaftaran</h1>
                    <p class="lead fw-normal text-muted mb-5"><?= $data_pengu['pengumuman'] ?></p>
                    <div class="d-flex flex-column flex-lg-row align-items-center">
                    <!--<iframe width="560" height="315" src="https://www.youtube.com/embed/SXz_jU6G0Bk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>-->    
                    <!-- <a class="btn btn-warning" style="width:100%; border-radius:50px; color:white; font-weight:bold;" href="#features">DAFTAR SEKARANG</a> -->
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <!-- Masthead device mockup feature-->
                <div class="masthead-device-mockup">
                    <img class="col-sm-12" style="max-width:100%" src="assets/img/juarasilat.png" alt="Foto Anak Berprestasi">
                </div>
            </div>
        </div>
    </div>
</header>
<div class="container">
    <br>
        <!--<div class="col-lg-12">
            <img src="assets/img/ppdb1.jpg" style="max-width:100%">
            <br>
        </div>
        <br>-->
        <!--
        <div class="col-lg-12">
            <img src="assets/img/alur1.jpg" style="max-width:100%">
            <br>
        </div>
        <br>
        <div class="col-lg-12">
            <img src="assets/img/alur2.jpg" style="max-width:100%">
            <br>
        </div>
        <br>
        -->
    </div>
</div>