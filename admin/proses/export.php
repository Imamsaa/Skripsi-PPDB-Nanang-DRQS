<?php 
 //koneksi kedatabase
require_once __DIR__."/../config/config.php";
require_once __DIR__."/../config/curd.php";

 // nama file
 $filename="data siswa-".date('Ymd').".xls";

 //header info for browser
 header("Content-Type: application/vnd-ms-excel"); 
    header('Content-Disposition: attachment; filename="' . $filename . '";');

    //menampilkan data sebagai array dari tabel produk
 $out = array();
 $result = selectSimple("SELECT data_siswa.id_data_siswa AS ID,data_siswa.nomor_pendaftaran AS NOMOR_DAFTAR, data_siswa.nama_lengkap AS NAMA_SISWA, data_siswa.asal_sekolah AS ASAL_SEKOLAH, data_siswa.jenis_kelamin AS JENIS_KELAMIN, data_siswa.nisn AS NISN, data_siswa.tempat_lahir AS TEMPAT_LAHIR_SISWA, data_siswa.tanggal_lahir AS TANGGAL_LAHIR_SISWA, data_siswa.alamat AS ALAMAT_SISWA,data_siswa.rt AS RT, data_siswa.rw AS RW, data_siswa.dusun AS DUSUN, data_siswa.desa AS DESA, data_siswa.kecamatan AS KECAMATAN, data_siswa.kabupaten AS KABUPATEN, data_siswa.provinsi AS PROVINSI, data_siswa.warga_negara AS KEWARGANEGARAAN, data_siswa.nomor_wa AS NOMOR_WA_SISWA, data_siswa.email AS EAMIL, data_siswa.agama AS AGAMA, data_siswa.riwayat_penyakit AS RIWAYAT_PENYAKIT, data_siswa.difabel AS BERKEBUTUHAN_KHUSUS, data_siswa.domisili AS DOMISILI, data_siswa.anak_ke AS ANAK_KE, data_siswa.hobi AS HOBI, data_prestasi.prestasi_1 AS PRESTASI1, data_prestasi.prestasi_2 AS PRESTASI2, data_prestasi.prestasi_3 AS PRESTASI3, data_ayah.nik AS NIK_AYAH, data_ayah.nama_lengkap AS NAMA_AYAH, data_ayah.alamat AS ALAMAT_AYAH, data_ayah.pendidikan AS PENDIDIKAN_AYAH, data_ayah.tempat_lahir AS TEMPAT_LAHIR_AYAH, data_ayah.tanggal_lahir AS TANGGAL_LAHIR_AYAH, data_ayah.status AS STATUS_AYAH, data_ayah.penghasilan AS PENGHASILAN_AYAH, data_ayah.pekerjaan AS PEKERJAAN_AYAH, data_ayah.nomor_wa AS NOMOR_WA_AYAH, data_ayah.hubungan_pendaftar AS HUBUNGAN_AYAH, data_ibu.nik AS NIK_IBU, data_ibu.nama_lengkap AS NAMA_IBU,data_ibu.alamat AS ALAMAT_IBU, data_ibu.pendidikan AS PENDIDIKAN_IBU, data_ibu.tempat_lahir AS TEMPAT_LAHIR_IBU, data_ibu.tanggal_lahir AS TANGGAL_LAHIR_IBU, data_ibu.status AS STATUS_IBU, data_ibu.penghasilan AS PENGHASILAN_IBU, data_ibu.pekerjaan AS PEKERJAAN_IBU, data_ibu.nomor_wa AS NOMOR_WA_IBU, data_ibu.hubungan_pendaftar AS HUBUNGAN_IBU, data_wali.nik AS NIK_WALI, data_wali.nama_lengkap AS NAMA_WALI, data_wali.alamat AS ALAMAT_WALI, data_wali.pendidikan AS PENDIDIKAN_WALI, data_wali.tempat_lahir AS TEMPAT_LAHIR_WALI, data_wali.tanggal_lahir AS TANGGAL_LAHIR_WALI, data_wali.penghasilan AS PENGHASILAN_WALI, data_wali.pekerjaan AS PEKERJAAN_WALI, data_wali.nomor_wa AS NOMOR_WA_WALI, data_wali.hubungan_pendaftar AS HUBUNGAN_WALI, data_jalur.jalur AS JALUR_PENDAFTARAN,
data_pendaftaran.pembayaran AS VERIFIKASI_PEMBAYARAN, data_pendaftaran.pengumpulan_berkas AS VERIFIKASI_BERKAS, data_pendaftaran.wawancara AS WAWANCARA, data_pendaftaran.diterima AS KEPUTUSAN_DITERIMA, data_pendaftaran.daftar_ulang AS DAFTAR_ULANG FROM data_siswa INNER JOIN data_prestasi ON data_siswa.nomor_pendaftaran = data_prestasi.nomor_pendaftaran INNER JOIN data_ayah ON data_siswa.nomor_pendaftaran = data_ayah.nomor_pendaftaran INNER JOIN data_ibu ON data_siswa.nomor_pendaftaran = data_ibu.nomor_pendaftaran INNER JOIN data_wali ON data_siswa.nomor_pendaftaran = data_wali.nomor_pendaftaran INNER JOIN data_jalur ON data_siswa.nomor_pendaftaran = data_jalur.nomor_pendaftaran INNER JOIN data_pendaftaran ON data_siswa.nomor_pendaftaran = data_pendaftaran.nomor_pendaftaran WHERE data_pendaftaran.pembayaran = 'SUDAH'");
 while($data = $result->fetch(PDO::FETCH_ASSOC)) $out[] = $data;

 $show_coloumn = false;
 foreach($out as $record) {
 if(!$show_coloumn) {
 //menampilkan nama kolom di baris pertama
 echo implode("\t", array_keys($record)) . "\n";
 $show_coloumn = true;
 }
 // looping data dari database
 echo implode("\t", array_values($record)) . "\n";
 } 
 exit;
?>