<div class="content row">
  <div class="col-lg-6">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">UNDUH SEMUA DATA PENDAFTAR</h3>
      </div>
      <!-- /.card-header -->
      <div class="card-body">
        <p>silahkan tekan tombol di bawah ini untuk melakukan pengunduhan data pendaftar</p>
        <div class="form-group">
          <a href="proses/export.php" class="btn btn-success" target="_blank" rel="noopener noreferrer">DOWNLOAD</a>
        </div>
      </div>
      <!-- /.card-body -->
    </div>
  </div>
  <div class="col-lg-6">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">UNDUH DATA PENDAFTAR</h3>
      </div>
      <!-- /.card-header -->
      <div class="card-body">
        <form action="proses/exportsiswa.php" method="get">
            <label for="kode" class="form-label">MASUKAN NOMOR PENDAFTARAN</label>
            <div class="form-group">
              <input type="text" name="nomor" id="kode" class="form-control" required>
            </div>
            <div class="form-group">
              <button type="submit" name="cari" class="btn btn-success">DOWNLOAD</button>
            </div>
        </form>
      </div>
      <!-- /.card-body -->
    </div>
  </div>            <!-- /.card -->
</div>