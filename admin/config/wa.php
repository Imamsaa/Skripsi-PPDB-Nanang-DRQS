<?php
// Nomor yang digunakan menjadi device
$pengirim = 6281548811047;

// API key yang digunakan 
$apiKey = 'N7UKZNLkuZSs0MtcR4Ndm4oee3Gvbt';

//Fungsi Variable dalam pesan
function parseVariable(string $nomor, string $pesan) : string {
    $query = selectSimple("
    SELECT * FROM data_siswa WHERE nomor_pendaftaran = '$nomor'
    ");
    $siswa = $query->fetch();
    $nama = $siswa['nama_lengkap'];
    $nodaftar = $nomor;

    $kata = explode("!",$pesan);

    foreach ($kata as $value) {
        if ($value == 'nama') {
            $hasil .= $nama;
        }elseif ($value == 'nodaftar') {
            $hasil .= $nodaftar;
        }
        else{
            $hasil .= $value;
        } 
    }
    return $hasil;    
}
?>