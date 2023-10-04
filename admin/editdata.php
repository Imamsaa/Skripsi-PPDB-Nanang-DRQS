<?php
require_once __DIR__ . "/config/config.php";
require_once __DIR__ . "/config/curd.php";
$conn = getConn();
if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    $nomor = $_GET['nomor'];
    if ($_GET['hal'] == 'edit') {
        // Data Siswa
        $resultsiswa = selectSimple("
        SELECT * FROM data_siswa WHERE nomor_pendaftaran = '" . $nomor . "'
        ");
        $siswa = $resultsiswa->fetch();

        //Data Prestasi
        $resultprestasi = selectSimple("
        SELECT * FROM data_prestasi WHERE nomor_pendaftaran = '" . $nomor . "'
        ");
        $prestasi = $resultprestasi->fetch();

        //Data Ayah
        $resultayah = selectSimple("
        SELECT * FROM data_ayah WHERE nomor_pendaftaran = '" . $nomor . "'
        ");
        $ayah = $resultayah->fetch();

        //Data Ibu
        $resultibu = selectSimple("
        SELECT * FROM data_ibu WHERE nomor_pendaftaran = '" . $nomor . "'
        ");
        $ibu = $resultibu->fetch();

        //Data Wali
        $resultwali = selectSimple("
        SELECT * FROM data_wali WHERE nomor_pendaftaran = '" . $nomor . "'
        ");
        $wali = $resultwali->fetch();

        // Jalur Pendaftaran
        $resultjalur = selectSimple("
        SELECT * FROM data_jalur WHERE nomor_pendaftaran = '" . $nomor . "'
        ");
        $jalur = $resultjalur->fetch();
    }
    $query = "SELECT DISTINCT asal_sekolah FROM data_siswa";
    $sekolah = $conn->query($query);

    // tempat lahir
    $query2 = "SELECT DISTINCT tempat_lahir FROM data_siswa";
    $tempat = $conn->query($query2);

    $query3 = "SELECT DISTINCT alamat FROM data_siswa";
    $alamat = $conn->query($query3);

    $query4 = "SELECT DISTINCT dusun FROM data_siswa";
    $dusun = $conn->query($query4);

    $query5 = "SELECT DISTINCT desa FROM data_siswa";
    $desa = $conn->query($query5);

    $query6 = "SELECT DISTINCT kecamatan FROM data_siswa";
    $kecamatan = $conn->query($query6);

    $query7 = "SELECT DISTINCT kabupaten FROM data_siswa";
    $kabupaten = $conn->query($query7);

    $query8 = "SELECT DISTINCT provinsi FROM data_siswa";
    $provinsi = $conn->query($query8);

    $query9 = "SELECT DISTINCT domisili FROM data_siswa";
    $domisili = $conn->query($query9);
}
?>
<div class="content">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">UBAH JALUR PENDAFTARAN</h3>
            </div>
            <div class="card-body">
                <div class="col-lg-12">
                    <p>Pilih Jalur Pendaftaran</p>
                </div>
                <div class="form-group">
                    <form class="form-group row" method="post" action="proses/bayar.php">
                        <input type="hidden" name="nomor" value="<?= $nomor ?>">
                        <label for="jalur" class="col-lg-3 col-form-label">JALUR PENDAFTARAN : <span style="color:red;"><strong>*</strong></span></label>
                        <div class="col-lg-6">
                            <select class="custom-select" id="jalur" name="jalur">
                                <option value="<?= $jalur['jalur'] ?>" selected><?= $jalur['jalur'] ?></option>
                                <option value="PRESTASI">PRESTASI</option>
                                <option value="REGULER">REGULER</option>
                            </select>
                        </div>
                        <div class="col-lg-3">
                            <input type="submit" class="btn btn-success" name="editjalur" value="UBAH JALUR">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">EDIT DATA PENDAFTAR</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <form id="daftarppdb" name="daftarppdb" action="proses/bayar.php" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="nomor" value="<?= $nomor ?>">
                    <div class="form-group row">
                        <!-- <label for="bukti" class="col-sm-5 col-form-label">jpg/jpeg/png/pdf max : 2MB </label> -->
                        <label for="fotosiswa" class="col-sm-3 col-form-label">UPLOAD FOTO SISWA<span style="color:red;"><strong>*</strong></span></label>
                        <div class="col-sm-3">
                            <img class="img-thumbnail" id="blah" src="../assets/img/<?= $siswa['fotosiswa']; ?>" alt="FOTO SISWA" />
                        </div>
                        <div class="col-sm-6">
                            <input class="form-control" type="file" id="fotosiswa" name="fotosiswa" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="nama_lenkap" class="col-sm-3 col-form-label">NAMA LENGKAP : <span style="color:red;"><strong>*</strong></span></label>
                        <div class="col-sm-9">
                            <input class="form-control" value="<?= $siswa['nama_lengkap'] ?>" type="text" id="nama_lenkap" name="nama_lengkap" placeholder="NAMA LENGKAP" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="asal_sekolah" class="col-sm-3 col-form-label">ASAL SEKOLAH : <span style="color:red;"><strong>*</strong></span></label>
                        <div class="col-sm-9">
                            <input list="sekolah" class="form-control" value="<?= $siswa['asal_sekolah'] ?>" type="text" id="asal_sekolah" name="asal_sekolah" placeholder="ASAL SEKOLAH" required>
                            <datalist id="sekolah">
                                <?php while ($se = $sekolah->fetch()) :  ?>
                                    <option value="<?= $se['asal_sekolah']; ?>"><?= $se['asal_sekolah']; ?></option>
                                <?php endwhile; ?>
                            </datalist>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="jenis_kelamin" class="col-sm-3 col-form-label">JENIS KELAMIN : <span style="color:red;"><strong>*</strong></span></label>
                        <div class="col-sm-4">
                            <select class="custom-select" id="jenis_kelamin" name="jenis_kelamin" required>
                                <option value="<?= $siswa['jenis_kelamin'] ?>" selected><?= $siswa['jenis_kelamin'] ?></option>
                                <option value="LAKI-LAKI">LAKI-LAKI</option>
                                <option value="PEREMPUAN">PEREMPUAN</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="nisn" class="col-sm-3 col-form-label">NISN :</label>
                        <div class="col-sm-7">
                            <input class="form-control" type="text" value="<?= $siswa['nisn'] ?>" id="nisn" name="nisn" placeholder="MASUKAN NISN JIKA ADA">
                        </div>
                        <div class="col-sm-2">
                            <a href="https://nisn.data.kemdikbud.go.id/index.php/Cindex/formcaribynama" target="_blank" class="btn btn-success">CARI NISN</a>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="tempat_lahir" class="col-sm-3 col-form-label">TEMPAT LAHIR : <span style="color:red;"><strong>*</strong></span></label>
                        <div class="col-sm-9">
                            <input list="tempat" class="form-control" type="text" value="<?= $siswa['tempat_lahir'] ?>" id="tempat_lahir" name="tempat_lahir" placeholder="TEMPAT LAHIR" required>
                            <datalist id="tempat">
                                <?php while ($te = $tempat->fetch()) : ?>
                                    <option value="<?= $te['tempat_lahir']; ?>"><?= $te['tempat_lahir']; ?></option>
                                <?php endwhile; ?>
                            </datalist>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="tanggal_lahir" class="col-sm-3 col-form-label">TANGGAL LAHIR : <span style="color:red;"><strong>*</strong></span></label>
                        <div class="col-sm-4">
                            <input type="date" class="form-control" value="<?= $siswa['tanggal_lahir'] ?>" name="tanggal_lahir" id="tanggal_lahir" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="alamat" class="col-sm-3 col-form-label">ALAMAT : <span style="color:red;"><strong>*</strong></span></label>
                        <div class="col-sm-9">
                            <input class="form-control" list="alamatsiswa" type="text" id="alamat" name="alamat" value="<?= $siswa['alamat'] ?>" placeholder="NAMA JALAN / DUSUN" required>
                            <datalist id="alamatsiswa">
                                <?php while ($al = $alamat->fetch()) : ?>
                                    <option value="<?= $al['alamat']; ?>"><?= $al['alamat']; ?></option>
                                <?php endwhile; ?>
                            </datalist>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="rt" class="col-sm-3">RT :</label>
                        <div class="col-sm-3">
                            <input type="number" id="rt" class="form-control" value="<?= $siswa['rt'] ?>" placeholder="00" name="rt">
                        </div>
                        <label for="rw" class="col-sm-1">RW :</label>
                        <div class="col-sm-3">
                            <input type="number" id="rw" class="form-control" value="<?= $siswa['rw'] ?>" placeholder="00" name="rw">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="dusun" class="col-sm-3">DUSUN :</label>
                        <div class="col-sm-3">
                            <input type="text" list="listdusun" id="dusun" class="form-control" value="<?= $siswa['dusun'] ?>" placeholder="NAMA DUSUN" name="dusun">
                            <datalist id="listdusun">
                                <?php while ($dsn = $dusun->fetch()) : ?>
                                    <option value="<?= $dsn['dusun']; ?>"><?= $dsn['dusun']; ?></option>
                                <?php endwhile; ?>
                            </datalist>
                        </div>
                        <label for="desa" class="col-sm-1">DESA :</label>
                        <div class="col-sm-5">
                            <input type="text" list="listdesa" id="desa" class="form-control" value="<?= $siswa['desa'] ?>" placeholder="NAMA DESA" name="desa">
                            <datalist id="listdesa">
                                <?php while ($ds = $desa->fetch()) : ?>
                                    <option value="<?= $ds['desa']; ?>"><?= $ds['desa']; ?></option>
                                <?php endwhile; ?>
                            </datalist>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="kecamatan" class="col-sm-3">KECAMATAN : <span style="color:red;"><strong>*</strong></span></label>
                        <div class="col-sm-3">
                            <input type="text" list="listkecamatan" id="kecamatan" value="<?= $siswa['kecamatan'] ?>" class="form-control" placeholder="NAMA KECAMATAN" name="kecamatan" required>
                            <datalist id="listkecamatan">
                                <?php while ($ke = $kecamatan->fetch()) :  ?>
                                    <option value="<?= $ke['kecamatan']; ?>"><?= $ke['kecamatan']; ?></option>
                                <?php endwhile; ?>
                            </datalist>
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
                            <input type="text" list="listkabupaten" id="kabupaten" value="<?= $siswa['kabupaten'] ?>" class="form-control" placeholder="NAMA KABUPATEN" name="kabupaten" required>
                            <datalist id="listkabupaten">
                                <?php while ($kb = $kabupaten->fetch()) :  ?>
                                    <option value="<?= $kb['kabupaten']; ?>"><?= $kb['kabupaten']; ?></option>
                                <?php endwhile; ?>
                            </datalist>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="provinsi" class="col-sm-3">PROVINSI : <span style="color:red;"><strong>*</strong></span></label>
                        <div class="col-sm-3">
                            <input type="text" list="listprov" id="provinsi" class="form-control" value="<?= $siswa['provinsi'] ?>" placeholder="NAMA PROVINSI" name="provinsi" required>
                            <datalist id="listprov">
                                <?php while ($pr = $provinsi->fetch()) :  ?>
                                    <option value="<?= $pr['provinsi']; ?>"><?= $pr['provinsi']; ?></option>
                                <?php endwhile; ?>
                            </datalist>
                        </div>
                        <!-- <label for="kabupaten" class="col-sm-2">KABUPATEN :</label>
                    <div class="col-sm-4">
                        <input type="text" id="kabupaten" class="form-control" placeholder="KABUPATEN" name="kabupaten">
                    </div> -->
                    </div>
                    <div class="form-group row">
                        <label for="warga_negara" class="col-sm-3 col-form-label">KEWARGANEGARAAN : <span style="color:red;"><strong>*</strong></span></label>
                        <div class="col-sm-4">
                            <select class="custom-select" id="warga_negara" name="warga_negara" required>
                                <option value="<?= $siswa['warga_negara'] ?>" selected><?= $siswa['warga_negara'] ?></option>
                                <option value="WARGA NEGARA INDONESIA">WARGA NEGARA INDONESIA</option>
                                <option value="WARGA NEGARA ASING">WARGA NEGARA ASING</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="nomor_wa" class="col-sm-3 col-form-label">NOMOR TELEPHON/WHASTAPP : <span style="color:red;"><strong>*</strong></span></label>
                        <div class="col-sm-4">
                            <input class="form-control" type="text" value="<?= $siswa['nomor_wa'] ?>" id="nomor_wa" name="nomor_wa" placeholder="82300000000">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="email" class="col-sm-3 col-form-label">EMAIL : </label>
                        <div class="col-sm-4">
                            <input class="form-control" type="email" id="email" name="email" value="<?= $siswa['email'] ?>" placeholder="email@gmail.com (OPTIONAL)">
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
                            <input class="form-control" value="<?= $siswa['riwayat_penyakit'] ?>" type="text" id="riwayat_penyakit" name="riwayat_penyakit" placeholder="RIWAYAT PENYAKIT (OPSIONAL)">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="difabel" class="col-sm-3 col-form-label">BERKEBUTUHAN KHUSUS :</label>
                        <div class="col-sm-9">
                            <input class="form-control" type="text" id="difabel" value="<?= $siswa['difabel'] ?>" name="difabel" placeholder="BERKEBUTUHAN KHUSUS (OPSIONAL)">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="domisili" class="col-sm-3 col-form-label">TEMPAT TINGGAL/DOMISILI : <span style="color:red;"><strong>*</strong></span></label>
                        <div class="col-sm-9">
                            <input class="form-control" list="do" type="text" id="domisili" value="<?= $siswa['domisili'] ?>" name="domisili" placeholder="NAMA DAERAH TINGGAL" required>
                            <datalist id="do">
                                <?php while ($do = $domisili->fetch()) :  ?>
                                    <option value="<?= $do['domisili']; ?>"><?= $do['domisili']; ?></option>
                                <?php endwhile; ?>
                            </datalist>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="anak_ke" class="col-sm-3 col-form-label">ANAK KE : <span style="color:red;"><strong>*</strong></span></label>
                        <div class="col-sm-3">
                            <input class="form-control" type="number" value="<?= $siswa['anak_ke'] ?>" id="anak_ke" name="anak_ke" placeholder=" 1/2/dst" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="hobi" class="col-sm-3 col-form-label">HOBI :</label>
                        <div class="col-sm-9">
                            <input class="form-control" type="text" value="<?= $siswa['hobi'] ?>" id="hobi" name="hobi" placeholder="HOBI (OPTIONAL)">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="prestasi_1" class="col-sm-3 col-form-label">PRESTASI :</label>
                        <div class="col-sm-9">
                            <input class="form-control" value="<?= $prestasi['prestasi_1'] ?>" type="text" id="prestasi_1" name="prestasi_1" placeholder="PRESTASI 1 (OPTIONAL)">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="prestasi_2" class="col-sm-3 col-form-label"></label>
                        <div class="col-sm-9">
                            <input class="form-control" value="<?= $prestasi['prestasi_2'] ?>" type="text" id="prestasi_2" name="prestasi_2" placeholder="PRESTASI 2 (OPTIONAL)">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="prestasi_3" class="col-sm-3 col-form-label"></label>
                        <div class="col-sm-9">
                            <input class="form-control" value="<?= $prestasi['prestasi_3'] ?>" type="text" id="prestasi_3" name="prestasi_3" placeholder="PRESTASI 3 (OPTIONAL)">
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
                            <input class="form-control" value="<?= $ayah['nik'] ?>" type="text" id="data_ayah_nik" name="data_ayah_nik" placeholder="NOMOR NIK" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="data_ayah_nama_lengkap" class="col-sm-3 col-form-label">NAMA LENGKAP : <span style="color:red;"><strong>*</strong></span></label>
                        <div class="col-sm-9">
                            <input class="form-control" value="<?= $ayah['nama_lengkap'] ?>" type="text" id="data_ayah_nama_lengkap" name="data_ayah_nama_lengkap" placeholder="NAMA LENGKAP" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="data_ayah_alamat" class="col-sm-3 col-form-label">ALAMAT : <span style="color:red;"><strong>*</strong></span></label>
                        <div class="col-sm-9">
                            <input class="form-control" list="alamatsiswa" value="<?= $ayah['alamat'] ?>" type="text" id="data_ayah_alamat" name="data_ayah_alamat" placeholder="NAMA JALAN/DUSUN" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="data_ayah_pendidikan" class="col-sm-3 col-form-label">PENDIDIKAN : <span style="color:red;"><strong>*</strong></span></label>
                        <div class="col-sm-4">
                            <select class="custom-select" id="data_ayah_pendidikan" name="data_ayah_pendidikan" required>
                                <option value="<?= $ayah['pendidikan'] ?>" selected><?= $ayah['pendidikan'] ?></option>
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
                            <input class="form-control" list="tempat" value="<?= $ayah['tempat_lahir'] ?>" type="text" id="data_ayah_tempat_lahir" name="data_ayah_tempat_lahir" placeholder="TEMPAT LAHIR" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="data_ayah_tanggal_lahir" class="col-sm-3 col-form-label">TANGGAL LAHIR : <span style="color:red;"><strong>*</strong></span></label>
                        <div class="col-sm-4">
                            <input type="date" value="<?= $ayah['tanggal_lahir'] ?>" class="form-control" name="data_ayah_tanggal_lahir" id="data_ayah_tanggal_lahir" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="data_ayah_status" class="col-sm-3 col-form-label">STATUS : <span style="color:red;"><strong>*</strong></span></label>
                        <div class="col-sm-4">
                            <select class="custom-select" id="data_ayah_status" name="data_ayah_status" required>
                                <option value="<?= $ayah['status'] ?>" selected><?= $ayah['status'] ?></option>
                                <option value="HIDUP">HIDUP</option>
                                <option value="MENINGGAL">MENINGGAL</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="data_ayah_pekerjaan" class="col-sm-3 col-form-label">PEKERJAAN : <span style="color:red;"><strong>*</strong></span></label>
                        <div class="col-sm-9">
                            <input class="form-control" value="<?= $ayah['pekerjaan'] ?>" type="text" id="data_ayah_pekerjaan" name="data_ayah_pekerjaan" placeholder="PEKERJAAN" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="data_ayah_penghasilan" class="col-sm-3 col-form-label">PENGHASILAN/BULAN : <span style="color:red;"><strong>*</strong></span></label>
                        <div class="col-sm-4">
                            <select class="custom-select" id="data_ayah_penghasilan" name="data_ayah_penghasilan" required>
                                <option value="<?= $ayah['penghasilan'] ?>" selected><?= $ayah['penghasilan'] ?></option>
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
                            <input class="form-control" value="<?= $ayah['nomor_wa'] ?>" type="text" id="data_ayah_nomor_wa" name="data_ayah_nomor_wa" placeholder="82300000000" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="data_ayah_hubungan_pendaftar" class="col-sm-3 col-form-label">HUBUNGAN DENGAN PENDAFTAR : <span style="color:red;"><strong>*</strong></span></label>
                        <div class="col-sm-4">
                            <select class="custom-select" id="data_ayah_hubungan_pendaftar" name="data_ayah_hubungan_pendaftar" required>
                                <option value="<?= $ayah['hubungan_pendaftar'] ?>" selected><?= $ayah['hubungan_pendaftar'] ?></option>
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
                            <input class="form-control" value="<?= $ibu['nik'] ?>" type="text" id="data_ibu_nik" name="data_ibu_nik" placeholder="NOMOR NIK" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="data_ibu_nama_lengkap" class="col-sm-3 col-form-label">NAMA LENGKAP : <span style="color:red;"><strong>*</strong></span></label>
                        <div class="col-sm-9">
                            <input class="form-control" value="<?= $ibu['nama_lengkap'] ?>" type="text" id="data_ibu_nama_lengkap" name="data_ibu_nama_lengkap" placeholder="NAMA LENGKAP" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="data_ibu_alamat" class="col-sm-3 col-form-label">ALAMAT : <span style="color:red;"><strong>*</strong></span></label>
                        <div class="col-sm-9">
                            <input class="form-control" list="alamatsiswa" value="<?= $ibu['alamat'] ?>" type="text" id="data_ibu_alamat" name="data_ibu_alamat" placeholder="NAMA JALAN/DUSUN" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="data_ibu_pendidikan" class="col-sm-3 col-form-label">PENDIDIKAN : <span style="color:red;"><strong>*</strong></span></label>
                        <div class="col-sm-4">
                            <select class="custom-select" id="data_ibu_pendidikan" name="data_ibu_pendidikan" required>
                                <option value="<?= $ibu['pendidikan'] ?>" selected><?= $ibu['pendidikan'] ?></option>
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
                            <input class="form-control" list="tempat" value="<?= $ibu['tempat_lahir'] ?>" type="text" id="data_ibu_tempat_lahir" name="data_ibu_tempat_lahir" placeholder="TEMPAT LAHIR" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="data_ibu_tanggal_lahir" class="col-sm-3 col-form-label">TANGGAL LAHIR : <span style="color:red;"><strong>*</strong></span></label>
                        <div class="col-sm-4">
                            <input type="date" value="<?= $ibu['tanggal_lahir'] ?>" class="form-control" name="data_ibu_tanggal_lahir" id="data_ibu_tanggal_lahir" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="data_ibu_status" class="col-sm-3 col-form-label">STATUS : <span style="color:red;"><strong>*</strong></span></label>
                        <div class="col-sm-4">
                            <select class="custom-select" id="data_ibu_status" name="data_ibu_status" required>
                                <option value="<?= $ibu['status'] ?>" selected><?= $ibu['status'] ?></option>
                                <option value="HIDUP">HIDUP</option>
                                <option value="MENINGGAL">MENINGGAL</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="data_ibu_pekerjaan" class="col-sm-3 col-form-label">PEKERJAAN : </label>
                        <div class="col-sm-9">
                            <input class="form-control" value="<?= $ibu['pekerjaan'] ?>" type="text" id="data_ibu_pekerjaan" name="data_ibu_pekerjaan" placeholder="PEKERJAAN (OPTIONAL)">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="data_ibu_penghasilan" class="col-sm-3 col-form-label">PENGHASILAN/BULAN : <span style="color:red;"><strong>*</strong></span></label>
                        <div class="col-sm-4">
                            <select class="custom-select" id="data_ibu_penghasilan" name="data_ibu_penghasilan">
                                <option value="<?= $ibu['penghasilan'] ?>" selected><?= $ibu['penghasilan'] ?></option>
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
                            <input class="form-control" value="<?= $ibu['nomor_wa'] ?>" type="text" id="data_ibu_nomor_wa" name="data_ibu_nomor_wa" placeholder="82300000000" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="data_ibu_hubungan_pendaftar" class="col-sm-3 col-form-label">HUBUNGAN DENGAN PENDAFTAR : <span style="color:red;"><strong>*</strong></span></label>
                        <div class="col-sm-4">
                            <select class="custom-select" id="data_ibu_hubungan_pendaftar" name="data_ibu_hubungan_pendaftar" required>
                                <option value="<?= $ibu['hubungan_pendaftar'] ?>" selected><?= $ibu['hubungan_pendaftar'] ?></option>
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
                            <input class="form-control" value="<?= $wali['nik'] ?>" type="text" id="data_wali_nik" name="data_wali_nik" placeholder="NOMOR NIK">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="data_wali_nama_lengkap" class="col-sm-3 col-form-label">NAMA LENGKAP :</label>
                        <div class="col-sm-9">
                            <input class="form-control" value="<?= $wali['nama_lengkap'] ?>" type="text" id="data_wali_nama_lengkap" name="data_wali_nama_lengkap" placeholder="NAMA LENGKAP">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="data_wali_alamat" class="col-sm-3 col-form-label">ALAMAT :</label>
                        <div class="col-sm-9">
                            <input class="form-control" list="alamatsiswa" value="<?= $wali['alamat'] ?>" type="text" id="data_wali_alamat" name="data_wali_alamat" placeholder="NAMA JALAN/DUSUN">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="data_wali_pendidikan" class="col-sm-3 col-form-label">PENDIDIKAN :</label>
                        <div class="col-sm-4">
                            <select class="custom-select" id="data_wali_pendidikan" name="data_wali_pendidikan">
                                <option value="<?= $wali['pendidikan'] ?>" selected><?= $wali['pendidikan'] ?></option>
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
                            <input class="form-control" list="tempat" value="<?= $wali['tempat_lahir'] ?>" type="text" id="data_wali_tempat_lahir" name="data_wali_tempat_lahir" placeholder="TEMPAT LAHIR">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="data_wali_tanggal_lahir" class="col-sm-3 col-form-label">TANGGAL LAHIR :</label>
                        <div class="col-sm-4">
                            <input type="date" value="<?= $wali['tanggal_lahir'] ?>" class="form-control" name="data_wali_tanggal_lahir" id="data_wali_tanggal_lahir">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="data_wali_pekerjaan" class="col-sm-3 col-form-label">PEKERJAAN :</label>
                        <div class="col-sm-9">
                            <input class="form-control" type="text" value="<?= $wali['pekerjaan'] ?>" id="data_wali_pekerjaan" name="data_wali_pekerjaan" placeholder="PEKERJAAN">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="data_wali_penghasilan" class="col-sm-3 col-form-label">PENGHASILAN/BULAN :</label>
                        <div class="col-sm-4">
                            <select class="custom-select" id="data_wali_penghasilan" name="data_wali_penghasilan">
                                <option value="<?= $wali['penghasilan'] ?>" selected><?= $wali['penghasilan'] ?></option>
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
                            <input class="form-control" value="<?= $wali['nomor_wa'] ?>" type="text" id="data_wali_nomor_wa" name="data_wali_nomor_wa" placeholder="82300000000">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="data_wali_hubungan_pendaftar" class="col-sm-3 col-form-label">HUBUNGAN DENGAN PENDAFTAR :</label>
                        <div class="col-sm-4">
                            <input class="form-control" value="<?= $wali['hubungan_pendaftar'] ?>" type="text" id="data_wali_hubungan_pendaftar" name="data_wali_hubungan_pendaftar" placeholder="KAKAK/PAMAN/KAKEK/DST">
                        </div>
                    </div>
            </div>
            <div class="form-group row">
                <div class="col-lg-6">

                </div>
                <div class="form-group row col-lg-6">
                    <div class="col-sm-6">
                        <a href="./" style="margin-top:10px;" class="btn btn-danger btn-block">BATAL</a>
                    </div>
                    <div class="col-sm-6">
                        <input type="submit" style="margin-top:10px;" name="editdata" value="EDIT" class="btn btn-primary btn-block">
                    </div>
                </div>
            </div>
            </form>
        </div>
        <!-- /.card-body -->
    </div>
</div> <!-- /.card -->
</div>
<script>
    fotosiswa.onchange = evt => {
        const [file] = fotosiswa.files
        if (file) {
            blah.src = URL.createObjectURL(file)
        }
    }
</script>