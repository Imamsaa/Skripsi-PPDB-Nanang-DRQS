<header class="masthead">
            <div class="container px-5">
                <div class="row gx-5 align-items-center">
                    <div class="col-lg-6">
                        <!-- Mashead text and app badges-->
                        <div class="mb-5 mb-lg-0 text-center text-lg-start">
                            <h1 class="display-1 lh-1 mb-3">SDIT Al Firdaus Purwodadi</h1>
                            <p class="lead fw-normal text-muted mb-5">Selamat datang di Pendaftaran Online Penerimaan Peserta Didik Baru SD Islam Terpadu Al Firdaus Purwodadi</p>
                            <div class="d-flex flex-column flex-lg-row align-items-center">
                                <!-- <a class="btn btn-warning" style="width:100%; border-radius:50px; color:white; font-weight:bold;" href="#features">DAFTAR SEKARANG</a> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <!-- Masthead device mockup feature-->
                        <div class="masthead-device-mockup">
                            <img class="col-sm-12" style="max-width:100%" src="assets/img/anakpiala.png" alt="Foto Anak Berprestasi">
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Quote/testimonial aside-->
        <div class="container">

  <!-- Awal Bagian Banner PPDB -->
  <br>
  <div class="card mb-3">
    <div class="card-body">
      <h5 class="card-title p-center">FORMULIR PENDAFTARAN</h5>
      <hr>
      <h4>DATA PENDAFTAR</h1>
        <br>
      <form id="daftarppdb" name="daftarppdb" action="proses/daftar.php" method="post" enctype="multipart/form-data">
        <div class="form-group row">
          <label for="nama_lenkap" class="col-sm-3 col-form-label">NAMA LENGKAP : <span style="color:red;"><strong>*</strong></span></label>
          <div class="col-sm-9">
            <input class="form-control" type="text" id="nama_lenkap" name="nama_lengkap" placeholder="NAMA LENGKAP" required>
          </div>
        </div>
        <div class="form-group row">
          <label for="asal_sekolah" class="col-sm-3 col-form-label">ASAL SEKOLAH : <span style="color:red;"><strong>*</strong></span></label>
          <div class="col-sm-9">
            <input class="form-control" type="text" id="asal_sekolah" name="asal_sekolah" placeholder="ASAL SEKOLAH" required>
          </div>
        </div>
        <div class="form-group row">
          <label for="jenis_kelamin" class="col-sm-3 col-form-label">JENIS KELAMIN : <span style="color:red;"><strong>*</strong></span></label>
          <div class="col-sm-4">
            <select class="custom-select" id="jenis_kelamin" name="jenis_kelamin" required>
              <option selected>PILIH JENIS KELAMIN</option>
              <option value="LAKI-LAKI">LAKI-LAKI</option>
              <option value="PEREMPUAN">PEREMPUAN</option>
            </select>
          </div>
        </div>
        <div class="form-group row">
          <label for="nisn" class="col-sm-3 col-form-label">NISN :</label>
          <div class="col-sm-7">
            <input class="form-control" type="text" id="nisn" name="nisn" placeholder="MASUKAN NISN JIKA ADA">
          </div>
          <div class="col-sm-2">
            <a href="https://nisn.data.kemdikbud.go.id/index.php/Cindex/formcaribynama" target="_blank" class="btn btn-success">CARI NISN</a>
          </div>
        </div>
        <div class="form-group row">
          <label for="tempat_lahir" class="col-sm-3 col-form-label">TEMPAT LAHIR : <span style="color:red;"><strong>*</strong></span></label>
          <div class="col-sm-9">
            <input class="form-control" type="text" id="tempat_lahir" name="tempat_lahir" placeholder="TEMPAT LAHIR" required>
          </div>
        </div>
        <div class="form-group row">
          <label for="tanggal_lahir" class="col-sm-3 col-form-label">TANGGAL LAHIR : <span style="color:red;"><strong>*</strong></span></label>
          <div class="col-sm-4">
            <input type="date" class="form-control" name="tanggal_lahir" id="tanggal_lahir" required>
          </div>
        </div>
        <div class="form-group row">
          <label for="alamat" class="col-sm-3 col-form-label">ALAMAT : <span style="color:red;"><strong>*</strong></span></label>
          <div class="col-sm-9">
            <input class="form-control" type="text" id="alamat" name="alamat" placeholder="NAMA JALAN / DUSUN" required>
          </div>
        </div>
        <div class="form-group row">
          <label for="rt" class="col-sm-3">RT :</label>
          <div class="col-sm-3">
            <input type="number" id="rt" class="form-control" placeholder="00" name="rt">
          </div>
          <label for="rw" class="col-sm-1">RW :</label>
          <div class="col-sm-3">
            <input type="number" id="rw" class="form-control" placeholder="00" name="rw">
          </div>
        </div>
        <div class="form-group row">
          <label for="dusun" class="col-sm-3">DUSUN :</label>
          <div class="col-sm-3">
            <input type="text" id="dusun" class="form-control" placeholder="NAMA DUSUN" name="dusun">
          </div>
          <label for="desa" class="col-sm-1">DESA :</label>
          <div class="col-sm-5">
            <input type="text" id="desa" class="form-control" placeholder="NAMA DESA" name="desa">
          </div>
        </div>
        <div class="form-group row">
          <label for="kecamatan" class="col-sm-3">KECAMATAN : <span style="color:red;"><strong>*</strong></span></label>
          <div class="col-sm-3">
            <input type="text" id="kecamatan" class="form-control" placeholder="NAMA KECAMATAN" name="kecamatan" required>
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
            <input type="text" id="kabupaten" class="form-control" placeholder="NAMA KABUPATEN" name="kabupaten" required>
          </div>
        </div>
        <div class="form-group row">
          <label for="provinsi" class="col-sm-3">PROVINSI : <span style="color:red;"><strong>*</strong></span></label>
          <div class="col-sm-3">
            <input type="text" id="provinsi" class="form-control" placeholder="NAMA PROVINSI" name="provinsi" required>
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
              <option selected>PILIH KEWARGANEGARAAN</option>
              <option value="WARGA NEGARA INDONESIA">WARGA NEGARA INDONESIA</option>
              <option value="WARGA NEGARA ASING">WARGA NEGARA ASING</option>
            </select>
          </div>
        </div>
        <div class="form-group row">
          <label for="nomor_wa" class="col-sm-3 col-form-label">NOMOR TELEPHON/WHASTAPP : <span style="color:red;"><strong>*</strong></span></label>
          <div class="col-sm-4">
            <input class="form-control" type="text" id="nomor_wa" name="nomor_wa" placeholder="6282300000000">
          </div>
        </div>
        <div class="form-group row">
          <label for="email" class="col-sm-3 col-form-label">EMAIL : </label>
          <div class="col-sm-4">
            <input class="form-control" type="email" id="email" name="email" placeholder="email@gmail.com (OPTIONAL)">
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
            <input class="form-control" type="text" id="riwayat_penyakit" name="riwayat_penyakit" placeholder="RIWAYAT PENYAKIT (OPSIONAL)">
          </div>
        </div>
        <div class="form-group row">
          <label for="difabel" class="col-sm-3 col-form-label">BERKEBUTUHAN KHUSUS :</label>
          <div class="col-sm-9">
            <input class="form-control" type="text" id="difabel" name="difabel" placeholder="BERKEBUTUHAN KHUSUS (OPSIONAL)">
          </div>
        </div>
        <div class="form-group row">
          <label for="domisili" class="col-sm-3 col-form-label">TEMPAT TINGGAL/DOMISILI : <span style="color:red;"><strong>*</strong></span></label>
          <div class="col-sm-9">
            <input class="form-control" type="text" id="domisili" name="domisili" placeholder="NAMA DAERAH TINGGAL" required>
          </div>
        </div>
        <div class="form-group row">
          <label for="anak_ke" class="col-sm-3 col-form-label">ANAK KE : <span style="color:red;"><strong>*</strong></span></label>
          <div class="col-sm-3">
            <input class="form-control" type="number" id="anak_ke" name="anak_ke" placeholder=" 1/2/dst" required>
          </div>
        </div>
        <div class="form-group row">
          <label for="hobi" class="col-sm-3 col-form-label">HOBI :</label>
          <div class="col-sm-9">
            <input class="form-control" type="text" id="hobi" name="hobi" placeholder="HOBI (OPTIONAL)">
          </div>
        </div>
        <div class="form-group row">
          <label for="prestasi_1" class="col-sm-3 col-form-label">PRESTASI :</label>
          <div class="col-sm-9">
            <input class="form-control" type="text" id="prestasi_1" name="prestasi_1" placeholder="PRESTASI 1 (OPTIONAL)">
          </div>
        </div>
        <div class="form-group row">
          <label for="prestasi_2" class="col-sm-3 col-form-label"></label>
          <div class="col-sm-9">
            <input class="form-control" type="text" id="prestasi_2" name="prestasi_2" placeholder="PRESTASI 2 (OPTIONAL)">
          </div>
        </div>
        <div class="form-group row">
          <label for="prestasi_3" class="col-sm-3 col-form-label"></label>
          <div class="col-sm-9">
            <input class="form-control" type="text" id="prestasi_3" name="prestasi_3" placeholder="PRESTASI 3 (OPTIONAL)">
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
            <input class="form-control" type="text" id="data_ayah_nik" name="data_ayah_nik" placeholder="NOMOR NIK" required>
          </div>
        </div>
        <div class="form-group row">
          <label for="data_ayah_nama_lengkap" class="col-sm-3 col-form-label">NAMA LENGKAP : <span style="color:red;"><strong>*</strong></span></label>
          <div class="col-sm-9">
            <input class="form-control" type="text" id="data_ayah_nama_lengkap" name="data_ayah_nama_lengkap" placeholder="NAMA LENGKAP" required>
          </div>
        </div>
        <div class="form-group row">
          <label for="data_ayah_alamat" class="col-sm-3 col-form-label">ALAMAT : <span style="color:red;"><strong>*</strong></span></label>
          <div class="col-sm-9">
            <input class="form-control" type="text" id="data_ayah_alamat" name="data_ayah_alamat" placeholder="NAMA JALAN/DUSUN" required>
          </div>
        </div>
        <div class="form-group row">
          <label for="data_ayah_pendidikan" class="col-sm-3 col-form-label">PENDIDIKAN : <span style="color:red;"><strong>*</strong></span></label>
          <div class="col-sm-4">
            <select class="custom-select" id="data_ayah_pendidikan" name="data_ayah_pendidikan" required>
              <option selected>PILIH PENDIDIKAN</option>
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
            <input class="form-control" type="text" id="data_ayah_tempat_lahir" name="data_ayah_tempat_lahir" placeholder="TEMPAT LAHIR" required>
          </div>
        </div>
        <div class="form-group row">
          <label for="data_ayah_tanggal_lahir" class="col-sm-3 col-form-label">TANGGAL LAHIR : <span style="color:red;"><strong>*</strong></span></label>
          <div class="col-sm-4">
            <input type="date" class="form-control" name="data_ayah_tanggal_lahir" id="data_ayah_tanggal_lahir" required>
          </div>
        </div>
        <div class="form-group row">
          <label for="data_ayah_status" class="col-sm-3 col-form-label">STATUS : <span style="color:red;"><strong>*</strong></span></label>
          <div class="col-sm-4">
            <select class="custom-select" id="data_ayah_status" name="data_ayah_status" required>
              <option selected>PILIH STATUS</option>
              <option value="HIDUP">HIDUP</option>
              <option value="MENINGGAL">MENINGGAL</option>
            </select>
          </div>
        </div>
        <div class="form-group row">
          <label for="data_ayah_pekerjaan" class="col-sm-3 col-form-label">PEKERJAAN : <span style="color:red;"><strong>*</strong></span></label>
          <div class="col-sm-9">
            <input class="form-control" type="text" id="data_ayah_pekerjaan" name="data_ayah_pekerjaan" placeholder="PEKERJAAN" required>
          </div>
        </div>
        <div class="form-group row">
          <label for="data_ayah_penghasilan" class="col-sm-3 col-form-label">PENGHASILAN/BULAN : <span style="color:red;"><strong>*</strong></span></label>
          <div class="col-sm-4">
            <select class="custom-select" id="data_ayah_penghasilan" name="data_ayah_penghasilan" required>
              <option selected>PILIH PENGHASILAN</option>
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
            <input class="form-control" type="text" id="data_ayah_nomor_wa" name="data_ayah_nomor_wa" placeholder="6282300000000" required>
          </div>
        </div>
        <div class="form-group row">
          <label for="data_ayah_hubungan_pendaftar" class="col-sm-3 col-form-label">HUBUNGAN DENGAN PENDAFTAR : <span style="color:red;"><strong>*</strong></span></label>
          <div class="col-sm-4">
            <select class="custom-select" id="data_ayah_hubungan_pendaftar" name="data_ayah_hubungan_pendaftar" required>
              <option selected>PILIH HUBUNGAN</option>
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
            <input class="form-control" type="text" id="data_ibu_nik" name="data_ibu_nik" placeholder="NOMOR NIK" required>
          </div>
        </div>
        <div class="form-group row">
          <label for="data_ibu_nama_lengkap" class="col-sm-3 col-form-label">NAMA LENGKAP : <span style="color:red;"><strong>*</strong></span></label>
          <div class="col-sm-9">
            <input class="form-control" type="text" id="data_ibu_nama_lengkap" name="data_ibu_nama_lengkap" placeholder="NAMA LENGKAP" required>
          </div>
        </div>
        <div class="form-group row">
          <label for="data_ibu_alamat" class="col-sm-3 col-form-label">ALAMAT : <span style="color:red;"><strong>*</strong></span></label>
          <div class="col-sm-9">
            <input class="form-control" type="text" id="data_ibu_alamat" name="data_ibu_alamat" placeholder="NAMA JALAN/DUSUN" required>
          </div>
        </div>
        <div class="form-group row">
          <label for="data_ibu_pendidikan" class="col-sm-3 col-form-label">PENDIDIKAN : <span style="color:red;"><strong>*</strong></span></label>
          <div class="col-sm-4">
            <select class="custom-select" id="data_ibu_pendidikan" name="data_ibu_pendidikan" required>
              <option selected>PILIH PENDIDIKAN</option>
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
            <input class="form-control" type="text" id="data_ibu_tempat_lahir" name="data_ibu_tempat_lahir" placeholder="TEMPAT LAHIR" required>
          </div>
        </div>
        <div class="form-group row">
          <label for="data_ibu_tanggal_lahir" class="col-sm-3 col-form-label">TANGGAL LAHIR : <span style="color:red;"><strong>*</strong></span></label>
          <div class="col-sm-4">
            <input type="date" class="form-control" name="data_ibu_tanggal_lahir" id="data_ibu_tanggal_lahir" required>
          </div>
        </div>
        <div class="form-group row">
          <label for="data_ibu_status" class="col-sm-3 col-form-label">STATUS : <span style="color:red;"><strong>*</strong></span></label>
          <div class="col-sm-4">
            <select class="custom-select" id="data_ibu_status" name="data_ibu_status" required>
              <option selected>PILIH STATUS</option>
              <option value="HIDUP">HIDUP</option>
              <option value="MENINGGAL">MENINGGAL</option>
            </select>
          </div>
        </div>
        <div class="form-group row">
          <label for="data_ibu_pekerjaan" class="col-sm-3 col-form-label">PEKERJAAN : </label>
          <div class="col-sm-9">
            <input class="form-control" type="text" id="data_ibu_pekerjaan" name="data_ibu_pekerjaan" placeholder="PEKERJAAN (OPTIONAL)">
          </div>
        </div>
        <div class="form-group row">
          <label for="data_ibu_penghasilan" class="col-sm-3 col-form-label">PENGHASILAN/BULAN : <span style="color:red;"><strong>*</strong></span></label>
          <div class="col-sm-4">
            <select class="custom-select" id="data_ibu_penghasilan" name="data_ibu_penghasilan">
              <option selected>PILIH PENGHASILAN</option>
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
            <input class="form-control" type="text" id="data_ibu_nomor_wa" name="data_ibu_nomor_wa" placeholder="6282300000000" required>
          </div>
        </div>
        <div class="form-group row">
          <label for="data_ibu_hubungan_pendaftar" class="col-sm-3 col-form-label">HUBUNGAN DENGAN PENDAFTAR : <span style="color:red;"><strong>*</strong></span></label>
          <div class="col-sm-4">
            <select class="custom-select" id="data_ibu_hubungan_pendaftar" name="data_ibu_hubungan_pendaftar" required>
              <option selected>PILIH HUBUNGAN</option>
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
            <input class="form-control" type="text" id="data_wali_nik" name="data_wali_nik" placeholder="NOMOR NIK">
          </div>
        </div>
        <div class="form-group row">
          <label for="data_wali_nama_lengkap" class="col-sm-3 col-form-label">NAMA LENGKAP :</label>
          <div class="col-sm-9">
            <input class="form-control" type="text" id="data_wali_nama_lengkap" name="data_wali_nama_lengkap" placeholder="NAMA LENGKAP">
          </div>
        </div>
        <div class="form-group row">
          <label for="data_wali_alamat" class="col-sm-3 col-form-label">ALAMAT :</label>
          <div class="col-sm-9">
            <input class="form-control" type="text" id="data_wali_alamat" name="data_wali_alamat" placeholder="NAMA JALAN/DUSUN">
          </div>
        </div>
        <div class="form-group row">
          <label for="data_wali_pendidikan" class="col-sm-3 col-form-label">PENDIDIKAN :</label>
          <div class="col-sm-4">
            <select class="custom-select" id="data_wali_pendidikan" name="data_wali_pendidikan">
              <option selected>PILIH PENDIDIKAN</option>
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
            <input class="form-control" type="text" id="data_wali_tempat_lahir" name="data_wali_tempat_lahir" placeholder="TEMPAT LAHIR">
          </div>
        </div>
        <div class="form-group row">
          <label for="data_wali_tanggal_lahir" class="col-sm-3 col-form-label">TANGGAL LAHIR :</label>
          <div class="col-sm-4">
            <input type="date" class="form-control" name="data_wali_tanggal_lahir" id="data_wali_tanggal_lahir">
          </div>
        </div>
        <div class="form-group row">
          <label for="data_wali_pekerjaan" class="col-sm-3 col-form-label">PEKERJAAN :</label>
          <div class="col-sm-9">
            <input class="form-control" type="text" id="data_wali_pekerjaan" name="data_wali_pekerjaan" placeholder="PEKERJAAN">
          </div>
        </div>
        <div class="form-group row">
          <label for="data_wali_penghasilan" class="col-sm-3 col-form-label">PENGHASILAN/BULAN :</label>
          <div class="col-sm-4">
            <select class="custom-select" id="data_wali_penghasilan" name="data_wali_penghasilan">
              <option selected>PILIH PENGHASILAN</option>
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
            <input class="form-control" type="text" id="data_wali_nomor_wa" name="data_wali_nomor_wa" placeholder="6282300000000">
          </div>
        </div>
        <div class="form-group row">
          <label for="data_wali_hubungan_pendaftar" class="col-sm-3 col-form-label">HUBUNGAN DENGAN PENDAFTAR :</label>
          <div class="col-sm-4">
            <input class="form-control" type="text" id="data_wali_hubungan_pendaftar" name="data_wali_hubungan_pendaftar" placeholder="KAKAK/PAMAN/KAKEK/DST">
          </div>
        </div>
        <br>
        <h5>D. BUKTI PEMBAYARAN</h5>
        <br>
        <div class="form-group row">
          <label for="nomor_referensi" class="col-sm-3 col-form-label">NOMOR REFERENSI TRANSFER :<span style="color:red;"><strong>*</strong></span></label>
          <div class="col-sm-9">
            <input class="form-control" type="text" id="nomor_referensi" name="nomor_referensi" placeholder="NOMOR REFERENSI TRANSFER">
          </div>
        </div>
        <div class="form-group row">
          <label for="bukti" class="col-sm-3 col-form-label">UPLOAD BUKTI PEMBAYARAN :<span style="color:red;"><strong>*</strong></span></label>
          <div class="col-sm-4">
            <input class="form-control" type="file" id="bukti" name="bukti" required>
          </div>
          <label for="bukti" class="col-sm-5 col-form-label">jpg/jpeg/png/pdf max : 2MB </label>
        </div>
        <div class="col-auto my-1">
          <div class="form-check">
            <input class="form-check-input" type="checkbox" id="setuju" required>
            <label class="form-check-label" for="setuju">
              Saya menyetujui ketentuan dan telah memasukan data yang sebenar-benarnya.
            </label>
          </div>
        </div>
        <div class="form-group row">
          <div class="col-sm-8">
            
          </div>
          <div class="col-sm-2">
            <a href="./" style="margin-top:10px;" class="btn btn-danger btn-block">BATAL</a>
          </div>
          <div class="col-sm-2">
            <input type="submit" style="margin-top:10px;" name="daftar" value="DAFTAR" class="btn btn-primary btn-block">
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
