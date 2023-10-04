<!-- Awal Container -->
<div class="container">

  <!-- Awal Bagian Banner PPDB -->
  
  <div class="card mb-3">
    <img class="card-img-top" src="asset/img/ppdbsmp.png" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title p-center">FORMULIR PENDAFTARAN</h5>
      <hr>
      <h4>DATA PENDAFTAR</h1>
        <br>
      <form id="daftarppdb" name="daftarppdb" action="proses/daftar.php" method="post">
        <div class="form-group row">
          <label for="nama" class="col-sm-3 col-form-label">NAMA LENGKAP : <span style="color:red;"><strong>*</strong></span></label>
          <div class="col-sm-9">
            <input class="form-control" type="text" id="nama" name="nama" placeholder="NAMA LENGKAP" required>
          </div>
        </div>
        <div class="form-group row">
          <label for="sekolahasal" class="col-sm-3 col-form-label">ASAL SEKOLAH : <span style="color:red;"><strong>*</strong></span></label>
          <div class="col-sm-9">
            <input class="form-control" type="text" id="sekolahasal" name="sekolahasal" placeholder="ASAL SEKOLAH" required>
          </div>
        </div>
        <div class="form-group row">
          <label for="jeniskelamin" class="col-sm-3 col-form-label">JENIS KELAMIN : <span style="color:red;"><strong>*</strong></span></label>
          <div class="col-sm-4">
            <select class="custom-select" id="jeniskelamin" name="jeniskelamin" required>
              <option selected>PILIH JENIS KELAMIN</option>
              <option value="PUTRA">PUTRA</option>
              <option value="PUTRI">PUTRI</option>
            </select>
          </div>
        </div>
        <div class="form-group row">
          <label for="nisn" class="col-sm-3 col-form-label">NISN :</label>
          <div class="col-sm-7">
            <input class="form-control" type="text" id="nisn" name="nisn" placeholder="MASUKAN NISN">
          </div>
          <div class="col-sm-2">
            <a href="https://nisn.data.kemdikbud.go.id/index.php" target="_blank" class="btn btn-success">CARI NISN</a>
          </div>
        </div>
        <div class="form-group row">
          <label for="tempatlahir" class="col-sm-3 col-form-label">TEMPAT LAHIR : <span style="color:red;"><strong>*</strong></span></label>
          <div class="col-sm-9">
            <input class="form-control" type="text" id="tempatlahir" name="tempatlahir" placeholder="EX : PURWODADI" required>
          </div>
        </div>
        <div class="form-group row">
          <label for="pickupdate" class="col-sm-3 col-form-label">TANGGAL LAHIR : <span style="color:red;"><strong>*</strong></span></label>
          <div class="col-sm-4">
            <input type="date" class="form-control" name="tanggallahir" id="pickupdate" required>
          </div>
        </div>
        <div class="form-group row">
          <label for="alamat" class="col-sm-3 col-form-label">ALAMAT : <span style="color:red;"><strong>*</strong></span></label>
          <div class="col-sm-9">
            <input class="form-control" type="text" id="alamat" name="alamat" placeholder="EX : JALAN TAMAN MAKAM PAHLAWAN NO.19 PURWODADI" required>
          </div>
        </div>
        <div class="form-group row">
          <label for="rt" class="col-sm-3">RT :</label>
          <div class="col-sm-3">
            <input type="text" id="rt" class="form-control" placeholder="RT" name="rt">
          </div>
          <label for="rw" class="col-sm-1">RW :</label>
          <div class="col-sm-3">
            <input type="text" id="rw" class="form-control" placeholder="RW" name="rw">
          </div>
        </div>
        <div class="form-group row">
          <label for="dusun" class="col-sm-3">DUSUN :</label>
          <div class="col-sm-3">
            <input type="text" id="dusun" class="form-control" placeholder="DUSUN" name="dusun">
          </div>
          <label for="desa" class="col-sm-1">DESA :</label>
          <div class="col-sm-5">
            <input type="text" id="desa" class="form-control" placeholder="DESA" name="desa">
          </div>
        </div>
        <div class="form-group row">
          <label for="kecamatan" class="col-sm-3">KECAMATAN : <span style="color:red;"><strong>*</strong></span></label>
          <div class="col-sm-3">
            <input type="text" id="kecamatan" class="form-control" placeholder="KECAMATAN" name="kecamatan" required>
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
            <input type="text" id="kabupaten" class="form-control" placeholder="KABUPATEN" name="kabupaten" required>
          </div>
        </div>
        <div class="form-group row">
          <label for="provinsi" class="col-sm-3">PROVINSI : <span style="color:red;"><strong>*</strong></span></label>
          <div class="col-sm-3">
            <input type="text" id="provinsi" class="form-control" placeholder="PROVINSI" name="provinsi" required>
          </div>
          <!-- <label for="kabupaten" class="col-sm-2">KABUPATEN :</label>
          <div class="col-sm-4">
            <input type="text" id="kabupaten" class="form-control" placeholder="KABUPATEN" name="kabupaten">
          </div> -->
        </div>
        <div class="form-group row">
          <label for="wgnegara" class="col-sm-3 col-form-label">KEWARGANEGARAAN : <span style="color:red;"><strong>*</strong></span></label>
          <div class="col-sm-9">
            <input class="form-control" type="text" id="wgnegara" name="wgnegara" placeholder="EX : Indonesia">
          </div>
        </div>
        <div class="form-group row">
          <label for="nowa" class="col-sm-3 col-form-label">NO HP/WA : <span style="color:red;"><strong>*</strong></span></label>
          <div class="col-sm-4">
            <input class="form-control" type="text" id="nowa" name="nowa" placeholder="EX : 081548xxxxxx">
          </div>
        </div>
        <div class="form-group row">
          <label for="email" class="col-sm-3 col-form-label">E-MAIL : </label>
          <div class="col-sm-4">
            <input class="form-control" type="email" id="email" name="email" placeholder="email@gmail.com">
          </div>
        </div>
        <div class="form-group row">
          <label for="agama" class="col-sm-3 col-form-label">AGAMA : <span style="color:red;"><strong>*</strong></span></label>
          <div class="col-sm-4">
            <input class="form-control" type="text" id="agama" name="agama" placeholder="AGAMA" required>
          </div>
        </div>
        <div class="form-group row">
          <label for="rpenyakit" class="col-sm-3 col-form-label">RIWAYAT PENYAKIT :</label>
          <div class="col-sm-9">
            <input class="form-control" type="text" id="rpenyakit" name="rpenyakit" placeholder="RIWAYAT PENYAKIT">
          </div>
        </div>
        <div class="form-group row">
          <label for="difable" class="col-sm-3 col-form-label">BERKEBUTUHAN KHUSUS :</label>
          <div class="col-sm-9">
            <input class="form-control" type="text" id="difable" name="difable" placeholder="EX : DIFABLE">
          </div>
        </div>
        <div class="form-group row">
          <label for="tinggal" class="col-sm-3 col-form-label">TEMPAT TINGGAL/DOMISILI : <span style="color:red;"><strong>*</strong></span></label>
          <div class="col-sm-9">
            <input class="form-control" type="text" id="tinggal" name="tinggal" placeholder="..." required>
          </div>
        </div>
        <div class="form-group row">
          <label for="uanak" class="col-sm-3 col-form-label">ANAK KE :</label>
          <div class="col-sm-3">
            <input class="form-control" type="text" id="uanak" name="uanak" placeholder="EX : 1">
          </div>
        </div>
        <div class="form-group row">
          <label for="hoby" class="col-sm-3 col-form-label">HOBY :</label>
          <div class="col-sm-9">
            <input class="form-control" type="text" id="hoby" name="hoby" placeholder="EX : MENGGAMBAR">
          </div>
        </div>
        <div class="form-group row">
          <label for="prestasi1" class="col-sm-3 col-form-label">PRESTASI :</label>
          <div class="col-sm-9">
            <input class="form-control" type="text" id="prestasi1" name="prestasi1" placeholder="PRESTASI 1">
          </div>
        </div>
        <div class="form-group row">
          <label for="prestasi2" class="col-sm-3 col-form-label"></label>
          <div class="col-sm-9">
            <input class="form-control" type="text" id="prestasi2" name="prestasi2" placeholder="PRESTASI 2">
          </div>
        </div>
        <div class="form-group row">
          <label for="prestasi3" class="col-sm-3 col-form-label"></label>
          <div class="col-sm-9">
            <input class="form-control" type="text" id="prestasi3" name="prestasi3" placeholder="PRESTASI 3">
          </div>
        </div>
        <hr>
        <h4>DATA ORANG TUA / WALI</h4>
        <br>
        <h5>A. DATA AYAH</h5>
        <br>
        <div class="form-group row">
          <label for="nikayah" class="col-sm-3 col-form-label">NOMOR NIK : <span style="color:red;"><strong>*</strong></span></label>
          <div class="col-sm-9">
            <input class="form-control" type="text" id="nikayah" name="nikayah" placeholder="EX : 3315xxxxxxxxxx" required>
          </div>
        </div>
        <div class="form-group row">
          <label for="namaayah" class="col-sm-3 col-form-label">NAMA LENGKAP : <span style="color:red;"><strong>*</strong></span></label>
          <div class="col-sm-9">
            <input class="form-control" type="text" id="namaayah" name="namaayah" placeholder="NAMA LENGKAP" required>
          </div>
        </div>
        <div class="form-group row">
          <label for="alamatayah" class="col-sm-3 col-form-label">ALAMAT : <span style="color:red;"><strong>*</strong></span></label>
          <div class="col-sm-9">
            <input class="form-control" type="text" id="alamatayah" name="alamatayah" placeholder="EX : JALAN TAMAN MAKAM PAHLAWAN NO.19 PURWODADI" required>
          </div>
        </div>
        <div class="form-group row">
          <label for="pendidikanayah" class="col-sm-3 col-form-label">PENDIDIKAN : <span style="color:red;"><strong>*</strong></span></label>
          <div class="col-sm-4">
            <select class="custom-select" id="pendidikanayah" name="pendidikanayah" required>
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
          <label for="tempatlahirayah" class="col-sm-3 col-form-label">TEMPAT LAHIR : <span style="color:red;"><strong>*</strong></span></label>
          <div class="col-sm-9">
            <input class="form-control" type="text" id="tempatlahirayah" name="tempatlahirayah" placeholder="EX : PURWODADI" required>
          </div>
        </div>
        <div class="form-group row">
          <label for="pickupdate" class="col-sm-3 col-form-label">TANGGAL LAHIR : <span style="color:red;"><strong>*</strong></span></label>
          <div class="col-sm-4">
            <input type="date" class="form-control" name="tanggallahirayah" id="pickupdate" required>
          </div>
        </div>
        <div class="form-group row">
          <label for="statusayah" class="col-sm-3 col-form-label">STATUS : <span style="color:red;"><strong>*</strong></span></label>
          <div class="col-sm-4">
            <select class="custom-select" id="statusayah" name="statusayah" required>
              <option selected>PILIH STATUS</option>
              <option value="HIDUP">HIDUP</option>
              <option value="MENINGGAL">MENINGGAL</option>
            </select>
          </div>
        </div>
        <div class="form-group row">
          <label for="pekerjaanayah" class="col-sm-3 col-form-label">PEKERJAAN : <span style="color:red;"><strong>*</strong></span></label>
          <div class="col-sm-9">
            <input class="form-control" type="text" id="pekerjaanayah" name="pekerjaanayah" placeholder="..." required>
          </div>
        </div>
        <div class="form-group row">
          <label for="penghasilanayah" class="col-sm-3 col-form-label">PENGHASILAN/BULAN : <span style="color:red;"><strong>*</strong></span></label>
          <div class="col-sm-4">
            <select class="custom-select" id="penghasilanayah" name="penghasilanayah" required>
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
          <label for="nohpayah" class="col-sm-3 col-form-label">NO HP/WA : <span style="color:red;"><strong>*</strong></span></label>
          <div class="col-sm-4">
            <input class="form-control" type="text" id="nohpayah" name="nohpayah" placeholder="..." required>
          </div>
        </div>
        <div class="form-group row">
          <label for="hubayah" class="col-sm-3 col-form-label">HUBUNGAN DENGAN PENDAFTAR : <span style="color:red;"><strong>*</strong></span></label>
          <div class="col-sm-4">
            <input class="form-control" type="text" id="hubayah" name="hubayah" placeholder="EX : AYAH KANDUNG" required>
          </div>
        </div>
        <br>
        <h5>B. DATA IBU</h5>
        <br>
        <div class="form-group row">
          <label for="nikibu" class="col-sm-3 col-form-label">NOMOR NIK : <span style="color:red;"><strong>*</strong></span></label>
          <div class="col-sm-9">
            <input class="form-control" type="text" id="nikibu" name="nikibu" placeholder="EX : 3315xxxxxxxxxx" required>
          </div>
        </div>
        <div class="form-group row">
          <label for="namaibu" class="col-sm-3 col-form-label">NAMA LENGKAP : <span style="color:red;"><strong>*</strong></span></label>
          <div class="col-sm-9">
            <input class="form-control" type="text" id="namaibu" name="namaibu" placeholder="NAMA LENGKAP" required>
          </div>
        </div>
        <div class="form-group row">
          <label for="alamatibu" class="col-sm-3 col-form-label">ALAMAT : <span style="color:red;"><strong>*</strong></span></label>
          <div class="col-sm-9">
            <input class="form-control" type="text" id="alamatibu" name="alamatibu" placeholder="EX : JALAN TAMAN MAKAM PAHLAWAN NO.19 PURWODADI" required>
          </div>
        </div>
        <div class="form-group row">
          <label for="pendidikanibu" class="col-sm-3 col-form-label">PENDIDIKAN : <span style="color:red;"><strong>*</strong></span></label>
          <div class="col-sm-4">
            <select class="custom-select" id="pendidikanibu" name="pendidikanibu" required>
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
          <label for="tempatlahiribu" class="col-sm-3 col-form-label">TEMPAT LAHIR : <span style="color:red;"><strong>*</strong></span></label>
          <div class="col-sm-9">
            <input class="form-control" type="text" id="tempatlahiribu" name="tempatlahiribu" placeholder="EX : PURWODADI" required>
          </div>
        </div>
        <div class="form-group row">
          <label for="pickupdate" class="col-sm-3 col-form-label">TANGGAL LAHIR : <span style="color:red;"><strong>*</strong></span></label>
          <div class="col-sm-4">
            <input type="date" class="form-control" name="tanggallahiribu" id="pickupdate" required>
          </div>
        </div>
        <div class="form-group row">
          <label for="statusibu" class="col-sm-3 col-form-label">STATUS : <span style="color:red;"><strong>*</strong></span></label>
          <div class="col-sm-4">
            <select class="custom-select" id="statusibu" name="statusibu" required>
              <option selected>PILIH STATUS</option>
              <option value="HIDUP">HIDUP</option>
              <option value="MENINGGAL">MENINGGAL</option>
            </select>
          </div>
        </div>
        <div class="form-group row">
          <label for="pekerjaanibu" class="col-sm-3 col-form-label">PEKERJAAN :</label>
          <div class="col-sm-9">
            <input class="form-control" type="text" id="pekerjaanibu" name="pekerjaanibu" placeholder="...">
          </div>
        </div>
        <div class="form-group row">
          <label for="penghasilanibu" class="col-sm-3 col-form-label">PENGHASILAN/BULAN : <span style="color:red;"><strong>*</strong></span></label>
          <div class="col-sm-4">
            <select class="custom-select" id="penghasilanibu" name="penghasilanibu" required>
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
          <label for="nohpibu" class="col-sm-3 col-form-label">NO HP/WA : <span style="color:red;"><strong>*</strong></span></label>
          <div class="col-sm-4">
            <input class="form-control" type="text" id="nohpibu" name="nohpibu" placeholder="..." required>
          </div>
        </div>
        <div class="form-group row">
          <label for="hubibu" class="col-sm-3 col-form-label">HUBUNGAN DENGAN PENDAFTAR : <span style="color:red;"><strong>*</strong></span></label>
          <div class="col-sm-4">
            <input class="form-control" type="text" id="hubibu" name="hubibu" placeholder="EX : IBU KANDUNG" required>
          </div>
        </div>
        <br>
        <h5>C. DATA WALI (BILA DIPERLUKAN)</h5>
        <br>
        <div class="form-group row">
          <label for="nikwali" class="col-sm-3 col-form-label">NOMOR NIK : </label>
          <div class="col-sm-9">
            <input class="form-control" type="text" id="nikwali" name="nikwali" placeholder="EX : 3315xxxxxxxxxx">
          </div>
        </div>
        <div class="form-group row">
          <label for="namawali" class="col-sm-3 col-form-label">NAMA LENGKAP :</label>
          <div class="col-sm-9">
            <input class="form-control" type="text" id="namawali" name="namawali" placeholder="NAMA LENGKAP">
          </div>
        </div>
        <div class="form-group row">
          <label for="alamatwali" class="col-sm-3 col-form-label">ALAMAT :</label>
          <div class="col-sm-9">
            <input class="form-control" type="text" id="alamatwali" name="alamatwali" placeholder="EX : JALAN TAMAN MAKAM PAHLAWAN NO.19 PURWODADI">
          </div>
        </div>
        <div class="form-group row">
          <label for="pendidikanwali" class="col-sm-3 col-form-label">PENDIDIKAN :</label>
          <div class="col-sm-4">
            <select class="custom-select" id="pendidikanwali" name="pendidikanwali">
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
          <label for="tempatlahirwali" class="col-sm-3 col-form-label">TEMPAT LAHIR :</label>
          <div class="col-sm-9">
            <input class="form-control" type="text" id="tempatlahirwali" name="tempatlahirwali" placeholder="EX : PURWODADI">
          </div>
        </div>
        <div class="form-group row">
          <label for="pickupdatewali" class="col-sm-3 col-form-label">TANGGAL LAHIR :</label>
          <div class="col-sm-4">
            <input type="date" class="form-control" name="tanggallahirwali" id="pickupdatewali">
          </div>
        </div>
        <div class="form-group row">
          <label for="statuswali" class="col-sm-3 col-form-label">STATUS :</label>
          <div class="col-sm-4">
            <select class="custom-select" id="statuswali" name="statuswali">
              <option selected>PILIH STATUS</option>
              <option value="HIDUP">HIDUP</option>
              <option value="MENINGGAL">MENINGGAL</option>
            </select>
          </div>
        </div>
        <div class="form-group row">
          <label for="pekerjaanwali" class="col-sm-3 col-form-label">PEKERJAAN :</label>
          <div class="col-sm-9">
            <input class="form-control" type="text" id="pekerjaanwali" name="pekerjaanwali" placeholder="...">
          </div>
        </div>
        <div class="form-group row">
          <label for="penghasilanwali" class="col-sm-3 col-form-label">PENGHASILAN/BULAN :</label>
          <div class="col-sm-4">
            <select class="custom-select" id="penghasilanwali" name="penghasilanwali">
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
          <label for="nohpwali" class="col-sm-3 col-form-label">NO HP/WA :</label>
          <div class="col-sm-4">
            <input class="form-control" type="text" id="nohpwali" name="nohpwali" placeholder="...">
          </div>
        </div>
        <div class="form-group row">
          <label for="hubwali" class="col-sm-3 col-form-label">HUBUNGAN DENGAN PENDAFTAR :</label>
          <div class="col-sm-4">
            <input class="form-control" type="text" id="hubwali" name="hubwali" placeholder="...">
          </div>
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
            <a href="./" type="submit" class="btn btn-danger btn-block">BATAL</a>
          </div>
          <div class="col-sm-2">
            <button type="button" data-toggle="modal" data-target="#modaldaftar" class="btn btn-primary btn-block">DAFTAR</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>


    