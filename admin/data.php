<div class="content row">
  <div class="col-lg-2">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Belum Wawancara</h3>
      </div>
      <div class="card-body row">
        <div class="col-sm-12">
          <p>Unduh Absensi Wawancara</p>
        </div>
        <div class="col-sm-12">
          <button type="button" data-toggle="modal" data-target="#modalabsensiwawancara" class="btn btn-primary">UNDUH</button>
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-10">
<div class="card">
              <div class="card-header">
                <h3 class="card-title">Wawancara Calon Wali Murid</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example3" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Asal Sekolah</th>
                    <th>Kode</th>
                    <th>Jalur</th>
                    <th>Status</th>
                    <th>Wawancar</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php
                    $no = 1;
                    $result = selectSimple("SELECT nama_lengkap,data_siswa.nomor_pendaftaran AS nomor_daftar,asal_sekolah,jalur,pembayaran,wawancara FROM data_siswa INNER JOIN data_jalur ON data_siswa.nomor_pendaftaran = data_jalur.nomor_pendaftaran INNER JOIN data_pendaftaran ON data_siswa.nomor_pendaftaran = data_pendaftaran.nomor_pendaftaran WHERE pembayaran='SUDAH' AND pengumpulan_berkas='SUDAH' AND wawancara='BELUM'");
                    while ($data = $result->fetch()) { ?>
                    <tr>
                      <td><?= $no ?></td>
                      <td><?= $data['nama_lengkap'] ?></td>
                      <td><?= $data['asal_sekolah'] ?></td>
                      <td><?= $data['nomor_daftar'] ?></td>
                      <td><?= $data['jalur'] ?></td>
                      <td><?= $data['wawancara'] ?></td>
                      <td><button type="button" data-toggle="modal" data-target="#modalwawancara<?= $data['nomor_daftar'] ?>" class="btn btn-success">SUDAH</button></td>
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
                    <th>Asal Sekolah</th>
                    <th>Kode</th>
                    <th>Jalur</th>
                    <th>Status</th>
                    <th>Wawancar</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
</div>      <!-- /.card -->
</div>
<div class="content row">
  <div class="col-lg-2">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Sudah wawancara</h3>
      </div>
      <div class="card-body row">
        <div class="col-sm-12">
          <p>Unduh Absensi Wawancara</p>
        </div>
        <div class="col-sm-12">
        <button type="button" data-toggle="modal" data-target="#modalabsensiwawancarasudah" class="btn btn-primary">UNDUH</button>
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-10">
<div class="card">
              <div class="card-header">
                <h3 class="card-title">Wawancara Calon Wali Murid</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Asal Sekolah</th>
                    <th>Nomor Pendaftaran</th>
                    <th>Jalur</th>
                    <th>Wawancar</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php
                    $no = 1;
                    $result = selectSimple("SELECT nama_lengkap,data_siswa.nomor_pendaftaran AS nomor_daftar,asal_sekolah,jalur,pembayaran,wawancara FROM data_siswa INNER JOIN data_jalur ON data_siswa.nomor_pendaftaran = data_jalur.nomor_pendaftaran INNER JOIN data_pendaftaran ON data_siswa.nomor_pendaftaran = data_pendaftaran.nomor_pendaftaran WHERE pembayaran='SUDAH' AND pengumpulan_berkas='SUDAH' AND wawancara='SUDAH'");
                    while ($data = $result->fetch()) { ?>
                    <tr>
                      <td><?= $no ?></td>
                      <td><?= $data['nama_lengkap'] ?></td>
                      <td><?= $data['asal_sekolah'] ?></td>
                      <td><?= $data['nomor_daftar'] ?></td>
                      <td><?= $data['jalur'] ?></td>
                      <td><?= $data['wawancara'] ?></td>
                      <td><button type="button" data-toggle="modal" data-target="#modalbelumwawancara<?= $data['nomor_daftar'] ?>" class="btn btn-warning">BELUM</button></td>
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
                    <th>Asal Sekolah</th>
                    <th>Nomor Pendaftaran</th>
                    <th>Jalur</th>
                    <th>Wawancar</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
</div>      <!-- /.card -->
</div>