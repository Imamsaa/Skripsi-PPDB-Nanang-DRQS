<?php
require_once __DIR__."/config/config.php";
require_once __DIR__."/config/curd.php";
$conn = getConn();
if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    $nomor = $_GET['nomor'];
    if ($_GET['hal'] == 'lihat') {
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
    }
}
?>
<div class="content">
  <div class="col-lg-12">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Kembali Ke Halaman Sebelumnya</h3>
      </div>
      <div class="card-body">
        <div class="form-group">
            <div class="col-lg-12">
                <a href="./?hal=keputusan" class="btn btn-success">KEMBALI</a>
            </div>
        </div>
    </div>
    </div>
  </div>
  <div class="col-lg-12">
    <div class="card">
              <div class="card-header">
                <h3 class="card-title">LIHAT DATA PENDAFTAR</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form id="daftarppdb" name="daftarppdb" method="post" enctype="multipart/form-data">
                <input type="hidden" name="nomor" value="<?= $nomor ?>">    
                <div class="form-group row">
                    <label for="nama_lenkap" class="col-sm-3 col-form-label">NAMA LENGKAP : <span style="color:red;"><strong>*</strong></span></label>
                    <div class="col-sm-9">
                        <input class="form-control" value="<?= $siswa['nama_lengkap']?>" type="text" id="nama_lenkap" name="nama_lengkap" placeholder="NAMA LENGKAP" disabled required>
                    </div>
                    </div>
                    <div class="form-group row">
                    <label for="asal_sekolah" class="col-sm-3 col-form-label">ASAL SEKOLAH : <span style="color:red;"><strong>*</strong></span></label>
                    <div class="col-sm-9">
                        <input class="form-control" value="<?= $siswa['asal_sekolah']?>" type="text" id="asal_sekolah" name="asal_sekolah" placeholder="ASAL SEKOLAH" disabled required>
                    </div>
                    </div>
                    <div class="form-group row">
                    <label for="jenis_kelamin" class="col-sm-3 col-form-label">JENIS KELAMIN : <span style="color:red;"><strong>*</strong></span></label>
                    <div class="col-sm-4">
                        <select class="custom-select" id="jenis_kelamin" name="jenis_kelamin" disabled required>
                        <option value="<?= $siswa['jenis_kelamin']?>" selected><?= $siswa['jenis_kelamin']?></option>
                        <option value="LAKI-LAKI">LAKI-LAKI</option>
                        <option value="PEREMPUAN">PEREMPUAN</option>
                        </select>
                    </div>
                    </div>
                    <div class="form-group row">
                    <label for="nisn" class="col-sm-3 col-form-label">NISN :</label>
                    <div class="col-sm-7">
                        <input class="form-control" type="text" value="<?= $siswa['nisn']?>" id="nisn" name="nisn" placeholder="MASUKAN NISN JIKA ADA" disabled>
                    </div>
                    <div class="col-sm-2">
                        
                    </div>
                    </div>
                    <div class="form-group row">
                    <label for="tempat_lahir" class="col-sm-3 col-form-label">TEMPAT LAHIR : <span style="color:red;"><strong>*</strong></span></label>
                    <div class="col-sm-9">
                        <input class="form-control" type="text" value="<?= $siswa['tempat_lahir']?>" id="tempat_lahir" name="tempat_lahir" placeholder="TEMPAT LAHIR" disabled required>
                    </div>
                    </div>
                    <div class="form-group row">
                    <label for="tanggal_lahir" class="col-sm-3 col-form-label">TANGGAL LAHIR : <span style="color:red;"><strong>*</strong></span></label>
                    <div class="col-sm-4">
                        <input type="date" class="form-control" value="<?= $siswa['tanggal_lahir']?>" name="tanggal_lahir" id="tanggal_lahir" disabled required>
                    </div>
                    </div>
                    <div class="form-group row">
                    <label for="alamat" class="col-sm-3 col-form-label">ALAMAT : <span style="color:red;"><strong>*</strong></span></label>
                    <div class="col-sm-9">
                        <input class="form-control" type="text" id="alamat" name="alamat" value="<?= $siswa['alamat']?>" placeholder="NAMA JALAN / DUSUN" disabled required>
                    </div>
                    </div>
                    <div class="form-group row">
                    <label for="rt" class="col-sm-3">RT :</label>
                    <div class="col-sm-3">
                        <input type="number" id="rt" class="form-control" value="<?= $siswa['rt']?>" placeholder="00" name="rt" disabled>
                    </div>
                    <label for="rw" class="col-sm-1">RW :</label>
                    <div class="col-sm-3">
                        <input type="number" id="rw" class="form-control" value="<?= $siswa['rw']?>" placeholder="00" name="rw" disabled>
                    </div>
                    </div>
                    <div class="form-group row">
                    <label for="dusun" class="col-sm-3">DUSUN :</label>
                    <div class="col-sm-3">
                        <input type="text" id="dusun" class="form-control" value="<?= $siswa['dusun']?>" placeholder="NAMA DUSUN" name="dusun" disabled>
                    </div>
                    <label for="desa" class="col-sm-1">DESA :</label>
                    <div class="col-sm-5">
                        <input type="text" id="desa" class="form-control" value="<?= $siswa['desa']?>" placeholder="NAMA DESA" name="desa" disabled>
                    </div>
                    </div>
                    <div class="form-group row">
                    <label for="kecamatan" class="col-sm-3">KECAMATAN : <span style="color:red;"><strong>*</strong></span></label>
                    <div class="col-sm-3">
                        <input type="text" id="kecamatan" value="<?= $siswa['kecamatan']?>" class="form-control" placeholder="NAMA KECAMATAN" name="kecamatan" disabled required>
                    </div>
                    <!-- <label for="kabupaten" class="col-sm-2">KABUPATEN :</label>
                    <div class="col-sm-4">
                        <input type="text" id="kabupaten" class="form-control" placeholder="KABUPATEN" name="kabupaten">
                    </div> -->
                    </div>
                    <div class="form-group row">
                    <!-- <label for="kecamatan" class="col-sm-3">KECAMATAN :</label>
                    <div class="col-sm-3">
                        <input type="text" id="kecamatan" class="form-control" placeholder="KECAMATAN" name="kecamatan">
                    </div> -->
                    <label for="kabupaten" class="col-sm-3">KABUPATEN : <span style="color:red;"><strong>*</strong></span></label>
                    <div class="col-sm-3">
                        <input type="text" id="kabupaten" value="<?= $siswa['kabupaten']?>" class="form-control" placeholder="NAMA KABUPATEN" name="kabupaten" disabled required>
                    </div>
                    </div>
                    <div class="form-group row">
                    <label for="provinsi" class="col-sm-3">PROVINSI : <span style="color:red;"><strong>*</strong></span></label>
                    <div class="col-sm-3">
                        <input type="text" id="provinsi" class="form-control" value="<?= $siswa['provinsi']?>" placeholder="NAMA PROVINSI" name="provinsi" disabled required>
                    </div>
                    <!-- <label for="kabupaten" class="col-sm-2">KABUPATEN :</label>
                    <div class="col-sm-4">
                        <input type="text" id="kabupaten" class="form-control" placeholder="KABUPATEN" name="kabupaten">
                    </div> -->
                    </div>
                    <div class="form-group row">
                    <label for="warga_negara" class="col-sm-3 col-form-label">KEWARGANEGARAAN : <span style="color:red;"><strong>*</strong></span></label>
                    <div class="col-sm-4">
                        <select class="custom-select" id="warga_negara" name="warga_negara" disabled required>
                        <option value="<?= $siswa['warga_negara']?>" selected><?= $siswa['warga_negara']?></option>
                        <option value="WARGA NEGARA INDONESIA">WARGA NEGARA INDONESIA</option>
                        <option value="WARGA NEGARA ASING">WARGA NEGARA ASING</option>
                        </select>
                    </div>
                    </div>
                    <div class="form-group row">
                    <label for="nomor_wa" class="col-sm-3 col-form-label">NOMOR TELEPHON/WHASTAPP : <span style="color:red;"><strong>*</strong></span></label>
                    <div class="col-sm-4">
                        <input class="form-control" type="text" value="<?= $siswa['nomor_wa']?>" id="nomor_wa" name="nomor_wa" placeholder="82300000000" disabled>
                    </div>
                    </div>
                    <div class="form-group row">
                    <label for="email" class="col-sm-3 col-form-label">EMAIL : </label>
                    <div class="col-sm-4">
                        <input class="form-control" type="email" id="email" name="email" value="<?= $siswa['email']?>" placeholder="email@gmail.com (OPTIONAL)" disabled>
                    </div>
                    </div>
                    <div class="form-group row">
                    <label for="agama" class="col-sm-3 col-form-label">AGAMA : <span style="color:red;"><strong>*</strong></span></label>
                    <div class="col-sm-4">
                        <input class="form-control" type="text" id="agama" name="agama" value="ISLAM" placeholder="AGAMA" disabled required>
                    </div>
                    </div>
                    <div class="form-group row">
                    <label for="riwayat_penyakit" class="col-sm-3 col-form-label">RIWAYAT PENYAKIT :</label>
                    <div class="col-sm-9">
                        <input class="form-control" value="<?= $siswa['riwayat_penyakit']?>" type="text" id="riwayat_penyakit" name="riwayat_penyakit" placeholder="RIWAYAT PENYAKIT (OPSIONAL)" disabled>
                    </div>
                    </div>
                    <div class="form-group row">
                    <label for="difabel" class="col-sm-3 col-form-label">BERKEBUTUHAN KHUSUS :</label>
                    <div class="col-sm-9">
                        <input class="form-control" type="text" id="difabel" value="<?= $siswa['difabel']?>" name="difabel" placeholder="BERKEBUTUHAN KHUSUS (OPSIONAL)" disabled>
                    </div>
                    </div>
                    <div class="form-group row">
                    <label for="domisili" class="col-sm-3 col-form-label">TEMPAT TINGGAL/DOMISILI : <span style="color:red;"><strong>*</strong></span></label>
                    <div class="col-sm-9">
                        <input class="form-control" type="text" id="domisili" value="<?= $siswa['domisili']?>" name="domisili" placeholder="NAMA DAERAH TINGGAL" disabled required>
                    </div>
                    </div>
                    <div class="form-group row">
                    <label for="anak_ke" class="col-sm-3 col-form-label">ANAK KE : <span style="color:red;"><strong>*</strong></span></label>
                    <div class="col-sm-3">
                        <input class="form-control" type="number" value="<?= $siswa['anak_ke']?>" id="anak_ke" name="anak_ke" placeholder=" 1/2/dst" disabled required>
                    </div>
                    </div>
                    <div class="form-group row">
                    <label for="hobi" class="col-sm-3 col-form-label">HOBI :</label>
                    <div class="col-sm-9">
                        <input class="form-control" type="text" value="<?= $siswa['hobi']?>" id="hobi" name="hobi" placeholder="HOBI (OPTIONAL)" disabled>
                    </div>
                    </div>
                    <div class="form-group row">
                    <label for="prestasi_1" class="col-sm-3 col-form-label">PRESTASI :</label>
                    <div class="col-sm-9">
                        <input class="form-control" value="<?= $prestasi['prestasi_1']?>" type="text" id="prestasi_1" name="prestasi_1" placeholder="PRESTASI 1 (OPTIONAL)" disabled>
                    </div>
                    </div>
                    <div class="form-group row">
                    <label for="prestasi_2" class="col-sm-3 col-form-label"></label>
                    <div class="col-sm-9">
                        <input class="form-control" value="<?= $prestasi['prestasi_2']?>" type="text" id="prestasi_2" name="prestasi_2" placeholder="PRESTASI 2 (OPTIONAL)" disabled>
                    </div>
                    </div>
                    <div class="form-group row">
                    <label for="prestasi_3" class="col-sm-3 col-form-label"></label>
                    <div class="col-sm-9">
                        <input class="form-control" value="<?= $prestasi['prestasi_3']?>" type="text" id="prestasi_3" name="prestasi_3" placeholder="PRESTASI 3 (OPTIONAL)" disabled>
                    </div>
                    </div>
                    <hr>
                    <h4>DATA ORANG TUA / WALI</h4>
                    <br>
                    <h5>A. DATA AYAH</h5>
                    <br>
                    <div class="form-group row">
                    <label for="data_ayah_nik" class="col-sm-3 col-form-label">NOMOR NIK : <span style="color:red;"><strong>*</strong></span></label>
                    <div class="col-sm-9">
                        <input class="form-control" value="<?= $ayah['nik']?>" type="text" id="data_ayah_nik" name="data_ayah_nik" placeholder="NOMOR NIK" disabled required>
                    </div>
                    </div>
                    <div class="form-group row">
                    <label for="data_ayah_nama_lengkap" class="col-sm-3 col-form-label">NAMA LENGKAP : <span style="color:red;"><strong>*</strong></span></label>
                    <div class="col-sm-9">
                        <input class="form-control" value="<?= $ayah['nama_lengkap']?>" type="text" id="data_ayah_nama_lengkap" name="data_ayah_nama_lengkap" placeholder="NAMA LENGKAP" disabled required>
                    </div>
                    </div>
                    <div class="form-group row">
                    <label for="data_ayah_alamat" class="col-sm-3 col-form-label">ALAMAT : <span style="color:red;"><strong>*</strong></span></label>
                    <div class="col-sm-9">
                        <input class="form-control" value="<?= $ayah['alamat']?>" type="text" id="data_ayah_alamat" name="data_ayah_alamat" placeholder="NAMA JALAN/DUSUN" disabled required>
                    </div>
                    </div>
                    <div class="form-group row">
                    <label for="data_ayah_pendidikan" class="col-sm-3 col-form-label">PENDIDIKAN : <span style="color:red;"><strong>*</strong></span></label>
                    <div class="col-sm-4">
                        <select class="custom-select" id="data_ayah_pendidikan" name="data_ayah_pendidikan" disabled required>
                        <option value="<?= $ayah['pendidikan']?>" selected><?= $ayah['pendidikan']?></option>
                        <option value="SD Sederajat">SD Sederajat</option>
                        <option value="SMP Sederajat">SMP Sederajat</option>
                        <option value="SMA Sederajat">SMA Sederajat</option>
                        <option value="D3">D3</option>
                        <option value="S1">S1</option>
                        <option value="S2">S2</option>
                        <option value="S3">S3</option>
                        </select>
                    </div>
                    </div>
                    <div class="form-group row">
                    <label for="data_ayah_tempat_lahir" class="col-sm-3 col-form-label">TEMPAT LAHIR : <span style="color:red;"><strong>*</strong></span></label>
                    <div class="col-sm-9">
                        <input class="form-control" value="<?= $ayah['tempat_lahir']?>" type="text" id="data_ayah_tempat_lahir" name="data_ayah_tempat_lahir" placeholder="TEMPAT LAHIR" disabled required>
                    </div>
                    </div>
                    <div class="form-group row">
                    <label for="data_ayah_tanggal_lahir" class="col-sm-3 col-form-label">TANGGAL LAHIR : <span style="color:red;"><strong>*</strong></span></label>
                    <div class="col-sm-4">
                        <input type="date" value="<?= $ayah['tanggal_lahir']?>" class="form-control" name="data_ayah_tanggal_lahir" id="data_ayah_tanggal_lahir" disabled required>
                    </div>
                    </div>
                    <div class="form-group row">
                    <label for="data_ayah_status" class="col-sm-3 col-form-label">STATUS : <span style="color:red;"><strong>*</strong></span></label>
                    <div class="col-sm-4">
                        <select class="custom-select" id="data_ayah_status" name="data_ayah_status" disabled required>
                        <option value="<?= $ayah['status']?>" selected><?= $ayah['status']?></option>
                        <option value="HIDUP">HIDUP</option>
                        <option value="MENINGGAL">MENINGGAL</option>
                        </select>
                    </div>
                    </div>
                    <div class="form-group row">
                    <label for="data_ayah_pekerjaan" class="col-sm-3 col-form-label">PEKERJAAN : <span style="color:red;"><strong>*</strong></span></label>
                    <div class="col-sm-9">
                        <input class="form-control" value="<?= $ayah['pekerjaan']?>" type="text" id="data_ayah_pekerjaan" name="data_ayah_pekerjaan" placeholder="PEKERJAAN" disabled required>
                    </div>
                    </div>
                    <div class="form-group row">
                    <label for="data_ayah_penghasilan" class="col-sm-3 col-form-label">PENGHASILAN/BULAN : <span style="color:red;"><strong>*</strong></span></label>
                    <div class="col-sm-4">
                        <select class="custom-select" id="data_ayah_penghasilan" name="data_ayah_penghasilan" disabled required>
                        <option value="<?= $ayah['penghasilan']?>" selected><?= $ayah['penghasilan']?></option>
                        <option value="Kurang Dari Rp. 1 Juta">Kurang Dari Rp. 1 Juta</option>
                        <option value="Rp. 1 Juta sampai Rp. 2 Juta">Rp. 1 Juta sampai Rp. 2 Juta</option>
                        <option value="Rp. 2 Juta sampai Rp. 4 Juta">Rp. 2 Juta sampai Rp. 4 Juta</option>
                        <option value="Rp. 4 Juta sampai Rp. 5 Juta">Rp. 4 Juta sampai Rp. 5 Juta</option>
                        <option value="Di Atas Rp. 5 Juta">Di Atas Rp. 5 Juta</option>
                        </select>
                    </div>
                    </div>
                    <div class="form-group row">
                    <label for="data_ayah_nomor_wa" class="col-sm-3 col-form-label">NOMOR TELEPHON/WHASTAPP : <span style="color:red;"><strong>*</strong></span></label>
                    <div class="col-sm-4">
                        <input class="form-control" value="<?= $ayah['nomor_wa']?>" type="text" id="data_ayah_nomor_wa" name="data_ayah_nomor_wa" placeholder="82300000000" disabled required>
                    </div>
                    </div>
                    <div class="form-group row">
                    <label for="data_ayah_hubungan_pendaftar" class="col-sm-3 col-form-label">HUBUNGAN DENGAN PENDAFTAR : <span style="color:red;"><strong>*</strong></span></label>
                    <div class="col-sm-4">
                        <select class="custom-select" id="data_ayah_hubungan_pendaftar" name="data_ayah_hubungan_pendaftar" disabled required>
                        <option value="<?= $ayah['hubungan_pendaftar']?>" selected><?= $ayah['hubungan_pendaftar']?></option>
                        <option value="AYAH KANDUNG">AYAH KANDUNG</option>
                        <option value="AYAH ANGKAT">AYAH ANGKAT</option>
                        </select>
                    </div>
                    </div>
                    <br>
                    <h5>B. DATA IBU</h5>
                    <br>
                    <div class="form-group row">
                    <label for="data_ibu_nik" class="col-sm-3 col-form-label">NOMOR NIK : <span style="color:red;"><strong>*</strong></span></label>
                    <div class="col-sm-9">
                        <input class="form-control" value="<?= $ibu['nik']?>" type="text" id="data_ibu_nik" name="data_ibu_nik" placeholder="NOMOR NIK" disabled required>
                    </div>
                    </div>
                    <div class="form-group row">
                    <label for="data_ibu_nama_lengkap" class="col-sm-3 col-form-label">NAMA LENGKAP : <span style="color:red;"><strong>*</strong></span></label>
                    <div class="col-sm-9">
                        <input class="form-control" value="<?= $ibu['nama_lengkap']?>" type="text" id="data_ibu_nama_lengkap" name="data_ibu_nama_lengkap" placeholder="NAMA LENGKAP" disabled required>
                    </div>
                    </div>
                    <div class="form-group row">
                    <label for="data_ibu_alamat" class="col-sm-3 col-form-label">ALAMAT : <span style="color:red;"><strong>*</strong></span></label>
                    <div class="col-sm-9">
                        <input class="form-control" value="<?= $ibu['alamat']?>" type="text" id="data_ibu_alamat" name="data_ibu_alamat" placeholder="NAMA JALAN/DUSUN" disabled required>
                    </div>
                    </div>
                    <div class="form-group row">
                    <label for="data_ibu_pendidikan" class="col-sm-3 col-form-label">PENDIDIKAN : <span style="color:red;"><strong>*</strong></span></label>
                    <div class="col-sm-4">
                        <select class="custom-select" id="data_ibu_pendidikan" name="data_ibu_pendidikan" disabled required>
                        <option value="<?= $ibu['pendidikan']?>" selected><?= $ibu['pendidikan']?></option>
                        <option value="SD Sederajat">SD Sederajat</option>
                        <option value="SMP Sederajat">SMP Sederajat</option>
                        <option value="SMA Sederajat">SMA Sederajat</option>
                        <option value="D3">D3</option>
                        <option value="S1">S1</option>
                        <option value="S2">S2</option>
                        <option value="S3">S3</option>
                        </select>
                    </div>
                    </div>
                    <div class="form-group row">
                    <label for="data_ibu_tempat_lahir" class="col-sm-3 col-form-label">TEMPAT LAHIR : <span style="color:red;"><strong>*</strong></span></label>
                    <div class="col-sm-9">
                        <input class="form-control" value="<?= $ibu['tempat_lahir']?>" type="text" id="data_ibu_tempat_lahir" name="data_ibu_tempat_lahir" placeholder="TEMPAT LAHIR" disabled required>
                    </div>
                    </div>
                    <div class="form-group row">
                    <label for="data_ibu_tanggal_lahir" class="col-sm-3 col-form-label">TANGGAL LAHIR : <span style="color:red;"><strong>*</strong></span></label>
                    <div class="col-sm-4">
                        <input type="date" value="<?= $ibu['tanggal_lahir']?>" class="form-control" name="data_ibu_tanggal_lahir" id="data_ibu_tanggal_lahir" disabled required>
                    </div>
                    </div>
                    <div class="form-group row">
                    <label for="data_ibu_status" class="col-sm-3 col-form-label">STATUS : <span style="color:red;"><strong>*</strong></span></label>
                    <div class="col-sm-4">
                        <select class="custom-select" id="data_ibu_status" name="data_ibu_status" disabled required>
                        <option value="<?= $ibu['status']?>" selected><?= $ibu['status']?></option>
                        <option value="HIDUP">HIDUP</option>
                        <option value="MENINGGAL">MENINGGAL</option>
                        </select>
                    </div>
                    </div>
                    <div class="form-group row">
                    <label for="data_ibu_pekerjaan" class="col-sm-3 col-form-label">PEKERJAAN : </label>
                    <div class="col-sm-9">
                        <input class="form-control" value="<?= $ibu['pekerjaan']?>" type="text" id="data_ibu_pekerjaan" name="data_ibu_pekerjaan" placeholder="PEKERJAAN (OPTIONAL)" disabled>
                    </div>
                    </div>
                    <div class="form-group row">
                    <label for="data_ibu_penghasilan" class="col-sm-3 col-form-label">PENGHASILAN/BULAN : <span style="color:red;"><strong>*</strong></span></label>
                    <div class="col-sm-4">
                        <select class="custom-select" id="data_ibu_penghasilan" name="data_ibu_penghasilan" disabled>
                        <option value="<?= $ibu['penghasilan']?>" selected><?= $ibu['penghasilan']?></option>
                        <option value="Kurang Dari Rp. 1 Juta">Kurang Dari Rp. 1 Juta</option>
                        <option value="Rp. 1 Juta sampai Rp. 2 Juta">Rp. 1 Juta sampai Rp. 2 Juta</option>
                        <option value="Rp. 2 Juta sampai Rp. 4 Juta">Rp. 2 Juta sampai Rp. 4 Juta</option>
                        <option value="Rp. 4 Juta sampai Rp. 5 Juta">Rp. 4 Juta sampai Rp. 5 Juta</option>
                        <option value="Di Atas Rp. 5 Juta">Di Atas Rp. 5 Juta</option>
                        </select>
                    </div>
                    </div>
                    <div class="form-group row">
                    <label for="data_ibu_nomor_wa" class="col-sm-3 col-form-label">NOMOR TELEPHON/WHASTAPP : <span style="color:red;"><strong>*</strong></span></label>
                    <div class="col-sm-4">
                        <input class="form-control" value="<?= $ibu['nomor_wa']?>" type="text" id="data_ibu_nomor_wa" name="data_ibu_nomor_wa" placeholder="82300000000" disabled required>
                    </div>
                    </div>
                    <div class="form-group row">
                    <label for="data_ibu_hubungan_pendaftar" class="col-sm-3 col-form-label">HUBUNGAN DENGAN PENDAFTAR : <span style="color:red;"><strong>*</strong></span></label>
                    <div class="col-sm-4">
                        <select class="custom-select" id="data_ibu_hubungan_pendaftar" name="data_ibu_hubungan_pendaftar" disabled required>
                        <option value="<?= $ibu['hubungan_pendaftar']?>" selected><?= $ibu['hubungan_pendaftar']?></option>
                        <option value="IBU KANDUNG">IBU KANDUNG</option>
                        <option value="IBU ANGKAT">IBU ANGKAT</option>
                        </select>
                    </div>
                    </div>
                    <br>
                    <h5>C. DATA WALI (BILA DIPERLUKAN)</h5>
                    <br>
                    <div class="form-group row">
                    <label for="data_wali_nik" class="col-sm-3 col-form-label">NOMOR NIK : </label>
                    <div class="col-sm-9">
                        <input class="form-control" value="<?= $wali['nik']?>" type="text" id="data_wali_nik" name="data_wali_nik" placeholder="NOMOR NIK" disabled>
                    </div>
                    </div>
                    <div class="form-group row">
                    <label for="data_wali_nama_lengkap" class="col-sm-3 col-form-label">NAMA LENGKAP :</label>
                    <div class="col-sm-9">
                        <input class="form-control" value="<?= $wali['nama_lengkap']?>" type="text" id="data_wali_nama_lengkap" name="data_wali_nama_lengkap" placeholder="NAMA LENGKAP" disabled>
                    </div>
                    </div>
                    <div class="form-group row">
                    <label for="data_wali_alamat" class="col-sm-3 col-form-label">ALAMAT :</label>
                    <div class="col-sm-9">
                        <input class="form-control" value="<?= $wali['alamat']?>" type="text" id="data_wali_alamat" name="data_wali_alamat" placeholder="NAMA JALAN/DUSUN" disabled>
                    </div>
                    </div>
                    <div class="form-group row">
                    <label for="data_wali_pendidikan" class="col-sm-3 col-form-label">PENDIDIKAN :</label>
                    <div class="col-sm-4">
                        <select class="custom-select" id="data_wali_pendidikan" name="data_wali_pendidikan" disabled>
                        <option value="<?= $wali['pendidikan']?>" selected><?= $wali['pendidikan']?></option>
                        <option value="SD Sederajat">SD Sederajat</option>
                        <option value="SMP Sederajat">SMP Sederajat</option>
                        <option value="SMA Sederajat">SMA Sederajat</option>
                        <option value="D3">D3</option>
                        <option value="S1">S1</option>
                        <option value="S2">S2</option>
                        <option value="S3">S3</option>
                        </select>
                    </div>
                    </div>
                    <div class="form-group row">
                    <label for="data_wali_tempat_lahir" class="col-sm-3 col-form-label">TEMPAT LAHIR :</label>
                    <div class="col-sm-9">
                        <input class="form-control" value="<?= $wali['tempat_lahir']?>" type="text" id="data_wali_tempat_lahir" name="data_wali_tempat_lahir" placeholder="TEMPAT LAHIR" disabled>
                    </div>
                    </div>
                    <div class="form-group row">
                    <label for="data_wali_tanggal_lahir" class="col-sm-3 col-form-label">TANGGAL LAHIR :</label>
                    <div class="col-sm-4">
                        <input type="date" value="<?= $wali['tanggal_lahir']?>" class="form-control" name="data_wali_tanggal_lahir" id="data_wali_tanggal_lahir" disabled>
                    </div>
                    </div>
                    <div class="form-group row">
                    <label for="data_wali_pekerjaan" class="col-sm-3 col-form-label">PEKERJAAN :</label>
                    <div class="col-sm-9">
                        <input class="form-control" type="text" value="<?= $wali['pekerjaan']?>" id="data_wali_pekerjaan" name="data_wali_pekerjaan" placeholder="PEKERJAAN" disabled>
                    </div>
                    </div>
                    <div class="form-group row">
                    <label for="data_wali_penghasilan" class="col-sm-3 col-form-label">PENGHASILAN/BULAN :</label>
                    <div class="col-sm-4">
                        <select class="custom-select" id="data_wali_penghasilan" name="data_wali_penghasilan" disabled>
                        <option value="<?= $wali['penghasilan']?>" selected><?= $wali['penghasilan']?></option>
                        <option value="Kurang Dari Rp. 1 Juta">Kurang Dari Rp. 1 Juta</option>
                        <option value="Rp. 1 Juta sampai Rp. 2 Juta">Rp. 1 Juta sampai Rp. 2 Juta</option>
                        <option value="Rp. 2 Juta sampai Rp. 4 Juta">Rp. 2 Juta sampai Rp. 4 Juta</option>
                        <option value="Rp. 4 Juta sampai Rp. 5 Juta">Rp. 4 Juta sampai Rp. 5 Juta</option>
                        <option value="Di Atas Rp. 5 Juta">Di Atas Rp. 5 Juta</option>
                        </select>
                    </div>
                    </div>
                    <div class="form-group row">
                    <label for="data_wali_nomor_wa" class="col-sm-3 col-form-label">NO TELEPHON/WHASTAPP :</label>
                    <div class="col-sm-4">
                        <input class="form-control" value="<?= $wali['nomor_wa']?>" type="text" id="data_wali_nomor_wa" name="data_wali_nomor_wa" placeholder="82300000000" disabled>
                    </div>
                    </div>
                    <div class="form-group row">
                    <label for="data_wali_hubungan_pendaftar" class="col-sm-3 col-form-label">HUBUNGAN DENGAN PENDAFTAR :</label>
                    <div class="col-sm-4">
                        <input class="form-control" value="<?= $wali['hubungan_pendaftar']?>" type="text" id="data_wali_hubungan_pendaftar" name="data_wali_hubungan_pendaftar" placeholder="KAKAK/PAMAN/KAKEK/DST" disabled>
                    </div>
                    </div>
                    </div>
                    <div class="form-group row">
                    <div class="col-lg-6">
                    </div>
                </form>
              </div>
              <!-- /.card-body -->
            </div>
</div>      <!-- /.card -->
</div>