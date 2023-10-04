<div class="content row">
  <div class="col-lg-12">
  <div class="card">
              <div class="card-header">
                <h3 class="card-title">Pendaftar Status Pending</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Kode</th>
                    <th>Asal Sekolah</th>
                    <th>Jalur</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php
                    $no = 1;
                    $result = selectSimple("SELECT nama_lengkap,data_siswa.nomor_pendaftaran AS nomor_daftar,diterima,asal_sekolah,jalur,pembayaran,wawancara FROM data_siswa INNER JOIN data_jalur ON data_siswa.nomor_pendaftaran = data_jalur.nomor_pendaftaran INNER JOIN data_pendaftaran ON data_siswa.nomor_pendaftaran = data_pendaftaran.nomor_pendaftaran WHERE pembayaran='SUDAH' AND pengumpulan_berkas='SUDAH' AND diterima='PENDING'");
                    while ($data = $result->fetch()) { ?>
                    <tr>
                      <td><?= $no ?></td>
                      <td><?= $data['nama_lengkap'] ?></td>
                      <td><?= $data['nomor_daftar'] ?></td>
                      <td><?= $data['asal_sekolah'] ?></td>
                      <td><?= $data['jalur'] ?></td>
                      <td><?= $data['diterima'] ?></td>
                      <td>
                        <button type="button" data-toggle="modal" data-target="#modalditolak<?= $data['nomor_daftar'] ?>" class="btn btn-warning">TOLAK</button>
                        <button type="button" data-toggle="modal" data-target="#modalditerima<?= $data['nomor_daftar'] ?>" class="btn btn-success">TERIMA</button>
                        <a href="./?hal=lihat&nomor=<?= $data['nomor_daftar'] ?>"  class="btn btn-primary">LIHAT</a>
                      </td>
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
                    <th>Kode</th>
                    <th>Asal Sekolah</th>
                    <th>Jalur</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
</div>
</div>
<div class="content row">
<!-- /.card -->
<div class="col-lg-6">
    <div class="card">
              <div class="card-header">
                <h3 class="card-title">Pendaftar Ditolak</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example3" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Kode</th>
                    <th>Jalur</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php
                    $no = 1;
                    $result = selectSimple("SELECT nama_lengkap,data_siswa.nomor_pendaftaran AS nomor_daftar,diterima,asal_sekolah,jalur,pembayaran,wawancara FROM data_siswa INNER JOIN data_jalur ON data_siswa.nomor_pendaftaran = data_jalur.nomor_pendaftaran INNER JOIN data_pendaftaran ON data_siswa.nomor_pendaftaran = data_pendaftaran.nomor_pendaftaran WHERE pembayaran='SUDAH' AND pengumpulan_berkas='SUDAH' AND diterima='TIDAK DITERIMA'");
                    while ($data = $result->fetch()) { ?>
                    <tr>
                      <td><?= $no ?></td>
                      <td><?= $data['nama_lengkap'] ?></td>
                      <td><?= $data['nomor_daftar'] ?></td>
                      <td><?= $data['jalur'] ?></td>
                      <td><?= $data['diterima'] ?></td>
                      <td>
                        <button type="button" data-toggle="modal" data-target="#modalditolakpending<?= $data['nomor_daftar'] ?>" class="btn btn-warning">PENDING</button>
                      </td>
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
                    <th>Kode</th>
                    <th>Jalur</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
</div>
<div class="col-lg-6">
    <div class="card">
        <div class="card-header">
          <h3 class="card-title">Pendaftar Diterima</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <table id="example5" class="table table-bordered table-striped">
          <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Kode</th>
                    <th>Jalur</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php
                    $no = 1;
                    $result = selectSimple("SELECT nama_lengkap,data_siswa.nomor_pendaftaran AS nomor_daftar,diterima,asal_sekolah,jalur,pembayaran,wawancara FROM data_siswa INNER JOIN data_jalur ON data_siswa.nomor_pendaftaran = data_jalur.nomor_pendaftaran INNER JOIN data_pendaftaran ON data_siswa.nomor_pendaftaran = data_pendaftaran.nomor_pendaftaran WHERE pembayaran='SUDAH' AND pengumpulan_berkas='SUDAH' AND diterima='DITERIMA'");
                    while ($data = $result->fetch()) { ?>
                    <tr>
                      <td><?= $no ?></td>
                      <td><?= $data['nama_lengkap'] ?></td>
                      <td><?= $data['nomor_daftar'] ?></td>
                      <td><?= $data['jalur'] ?></td>
                      <td><?= $data['diterima'] ?></td>
                      <td>
                        <button type="button" data-toggle="modal" data-target="#modalditerimapending<?= $data['nomor_daftar'] ?>" class="btn btn-warning">PENDING</button>
                      </td>
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
                    <th>Kode</th>
                    <th>Jalur</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                  </tfoot>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
</div>
      <!-- /.card -->
</div>