<?php
require_once __DIR__."/config/config.php";
require_once __DIR__."/config/curd.php";

$conn = getConn();
if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    $nomor = $_GET['nomor'];
        // Data Siswa
        $resultsiswa = selectSimple("
        SELECT * FROM data_siswa WHERE nomor_pendaftaran = '".$nomor."'
        ");
        $siswa = $resultsiswa->fetch();

        //Data Prestasi
        $resultprestasi = selectSimple("
        SELECT * FROM data_prestasi WHERE nomor_pendaftaran = '".$nomor."'
        ");
        $prestasi = $resultprestasi->fetch();

        //Data Ayah
        $resultayah = selectSimple("
        SELECT * FROM data_ayah WHERE nomor_pendaftaran = '".$nomor."'
        ");
        $ayah = $resultayah->fetch();

        //Data Ibu
        $resultibu = selectSimple("
        SELECT * FROM data_ibu WHERE nomor_pendaftaran = '".$nomor."'
        ");
        $ibu = $resultibu->fetch();

        //Data Wali
        $resultwali = selectSimple("
        SELECT * FROM data_wali WHERE nomor_pendaftaran = '".$nomor."'
        ");
        $wali = $resultwali->fetch();

        // Jalur Pendaftaran
        $resultjalur = selectSimple("
        SELECT * FROM data_jalur WHERE nomor_pendaftaran = '".$nomor."'
        ");
        $jalur = $resultjalur->fetch();

        // Status Pendaftaran
        $resultstatus = selectSimple("
        SELECT * FROM data_pendaftaran WHERE nomor_pendaftaran = '".$nomor."'
        ");
        $status = $resultstatus->fetch();
}

function hasilstatus($status) : string {
    if ($status['pembayaran'] == 'BELUM') {
        return 'BELUM MELAKUKAN PEMBAYARAN';
    } elseif($status['pembayaran'] == 'SUDAH') {
        if ($status['pengumpulan_berkas'] == 'SUDAH') {
            if ($status['diterima'] == 'DITERIMA') {
                return 'CALON PESERTA DIDIK DITERIMA';
            }elseif ($status['diterima'] == 'PENDING') {
                return 'CALON PESERTA DIDIK MENUNGGU PENGUMUMAN';
            }elseif ($status['diterima'] == 'TIDAK DITERIMA') {
                return 'CALON PESERTA DIDIK DITOLAK';
            }
        }else{
            return 'BELUM MELAKUKAN VERIFIKASI BERKAS';
        }
    }else{
        return 'MENUNGGU INFORMASI LEBIH LANJUT';
    }
}

$valuestatus = hasilstatus($status);
?>
<header class="masthead">
    <h2 class="lh-1 text-center">DATA STATUS CALON PESERTA DIDIK
        <br>SDIT AL FIRDAUS PURWODADI
    </h2>
</header>
<div class="container table-responsive">
    <table class="table table-striped table-bordered">
        <tr>
            <th>STATUS</th>
            <td><?= $valuestatus ?></td>
        </tr>
        <tr>
            <th>NAMA</th>
            <td><?= $siswa['nama_lengkap']?></td>
        </tr>
        <tr>
            <th>NOMOR PENDAFTARAN</th>
            <td><?= $nomor ?></td>
        </tr>
        <tr>
            <th>ASAl SEKOLAH</th>
            <td><?= $siswa['asal_sekolah']?></td>
        </tr>
        <tr>
            <th>JALUR</th>
            <td><?= $jalur['jalur']?></td>
        </tr>
    </table>
</div>
<br><br><br><br>