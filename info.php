<?php
session_start();
require_once __DIR__."/config/config.php";
require_once __DIR__."/config/curd.php";

$seleksi = selectSimple("SELECT * FROM data_siswa INNER JOIN data_pendaftaran ON data_siswa.nomor_pendaftaran = data_pendaftaran.nomor_pendaftaran WHERE data_pendaftaran.pembayaran = 'SUDAH'");
?>
<header class="masthead">
    <div class="container px-5">
        <div class="row gx-5 align-items-center">
            <div class="col-lg-6">
                <!-- Mashead text and app badges-->
                <div class="mb-5 mb-lg-0 text-center text-lg-start">
                    <h1 class="display-1 lh-1 mb-3">Seleksi Pendaftaran</h1>
                    <p class="lead fw-normal text-muted mb-5">Selamat datang di Pendaftaran Online Penerimaan Peserta Didik Baru Lembaga Pendidikan Islam Terpadu Al Firdaus Purwodadi</p>
                    <div class="d-flex flex-column flex-lg-row align-items-center">
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
    <center>
        <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if (isset($_POST['cari'])) {
                $nomor = $_POST['nomor_daftar'];
                $result = selectSimple("SELECT * FROM data_siswa INNER JOIN data_pendaftaran ON data_siswa.nomor_pendaftaran = data_pendaftaran.nomor_pendaftaran WHERE data_siswa.nomor_pendaftaran = '$nomor' AND data_pendaftaran.pembayaran = 'SUDAH'");
                $cari = $result->fetch();
                if (is_array($cari)) {
                    $_SESSION['note'] = 'success'; 
                }else{
                    $_SESSION['note'] = 'error';
                    $_SESSION['message'] = 'Data Tidak Ditemukan';
                    $result = false;
                }
            }
        }else{
            $result = false;
        }
        ?>
        <div class="form-group row center" style="margin-top:30px;margin-bottom:30px;">
        <form action="" method="post">
                <div class="col-sm-10" style="margin-top:10px;">
                    <input class="form-control form-control-lg" type="text" id="nomor_daftar" name="nomor_daftar" placeholder="MASUKAN NOMOR PENDAFTARAN">
                </div>
                <div class="col-sm-2" style="margin-top:10px;">
                    <button type="submit" name="cari" class="btn btn-lg btn-success">TELUSURI</a>
                </div>
        </form>
        </div>
    </center>
    <?php
    if ($result) {
        
        ?>
    <div class="card-body table-responsive">
        <table class="table table-bordered table-striped">
            <thead>
            <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Nomor Pendaftaran</th>
            <th>Asal Sekolah</th>
            <th>Status</th>
            </tr>
            </thead>
            <tbody>
                
                <tr>
                <td>1</td>
                <td><?= $cari['nama_lengkap'] ?></td>
                <td><?= $cari['nomor_pendaftaran'] ?></td>
                <td><?= $cari['asal_sekolah'] ?></td>
                <td><?= $cari['diterima'] ?></td>
                </tr>
            </tbody>
        </table>
    </div>
    <?php   
    }
    ?>
    <div class="card-body table-responsive">
        <table id="tabel-data2" class="table table-bordered table-striped">
            <thead>
            <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Nomor Pendaftaran</th>
            <th>Asal Sekolah</th>
            <th>Status</th>
            </tr>
            </thead>
            <tbody>
            <?php
                $no = 1;
                while ($data_seleksi = $seleksi -> fetch()) {
                ?>
                <tr>
                <td><?= $no ?></td>
                <td><?= $data_seleksi['nama_lengkap'] ?></td>
                <td><?= $data_seleksi['nomor_pendaftaran'] ?></td>
                <td><?= $data_seleksi['asal_sekolah'] ?></td>
                <td><?= $data_seleksi['diterima'] ?></td>
                </tr>
                <?php
                $no++;
                }
                ?>
            </tbody>
            <tfoot>
            <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Nomor Pendaftaran</th>
            <th>Asal Sekolah</th>
            <th>Status</th>
            </tr>
            </tfoot>
        </table>
    </div>
</div>