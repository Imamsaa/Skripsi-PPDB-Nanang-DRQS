<?php
$nomor = $_GET['nomor'];
?>
<header class="masthead">
    <div class="container px-5">
        <div class="row gx-5 align-items-center">
            <div class="col-lg-6">
                <!-- Mashead text and app badges-->
                <div class="mb-5 mb-lg-0 text-center text-lg-start">
                    <h1 class="display-1 lh-1 mb-3">Formulir Telah Terkirim</h1>
                    <p class="lead fw-normal text-muted mb-5">Silahkan Cek WhastApp atau Email Anda Untuk Mendapatkan Info Selanjutnya</p>
                    <div class="d-flex flex-column flex-lg-row align-items-center">
                        <a class="btn btn-success btn-lg" style="width:100%; border-radius:50px; color:white; font-weight:bold;" target="_blank" href="./printdata.php?nomor=<?= $nomor ?>">Download Bukti Pendaftaran</a>
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

