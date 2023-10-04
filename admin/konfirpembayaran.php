<div class="content row">
  <div class="col-lg-12">
  <div class="card">
              <div class="card-header">
                <h3 class="card-title">Silahkan Konfirmasi Pembayaran</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Kode</th>
                    <th>Referensi</th>
                    <th>Jalur</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php
                    $no = 1;
                    $result = selectSimple("SELECT nama_lengkap,bukti,data_siswa.nomor_pendaftaran AS nomor_daftar,jalur,pembayaran,nomor_referensi FROM data_siswa INNER JOIN data_jalur ON data_siswa.nomor_pendaftaran = data_jalur.nomor_pendaftaran INNER JOIN data_pendaftaran ON data_siswa.nomor_pendaftaran = data_pendaftaran.nomor_pendaftaran INNER JOIN bukti_pembayaran ON data_siswa.nomor_pendaftaran = bukti_pembayaran.nomor_pendaftaran WHERE pembayaran='BELUM'");
                    while ($data = $result->fetch()) { ?>
                    <tr>
                      <td><?= $no ?></td>
                      <td><?= $data['nama_lengkap'] ?></td>
                      <td><?= $data['nomor_daftar'] ?></td>
                      <td><?= $data['nomor_referensi'] ?></td>
                      <td><?= $data['jalur'] ?></td>
                      <td>
                        <button type="button" data-toggle="modal" data-target="#modalditerima<?= $data['nomor_daftar'] ?>" class="btn btn-success">TERIMA</button>
                        <a href="../assets/<?= $data['bukti'] ?>" target="_blank" class="btn btn-primary">LIHAT</a>
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
                    <th>Referensi</th>
                    <th>Jalur</th>
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
<div class="col-lg-12">
    <div class="card">
        <div class="card-header">
          <h3 class="card-title">Pembayaran Diterima</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <table id="example5" class="table table-bordered table-striped">
          <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Kode</th>
                    <th>Referensi</th>
                    <th>Jalur</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php
                    $no = 1;
                    $result = selectSimple("SELECT nama_lengkap,bukti,data_siswa.nomor_pendaftaran AS nomor_daftar,jalur,pembayaran,nomor_referensi FROM data_siswa INNER JOIN data_jalur ON data_siswa.nomor_pendaftaran = data_jalur.nomor_pendaftaran INNER JOIN data_pendaftaran ON data_siswa.nomor_pendaftaran = data_pendaftaran.nomor_pendaftaran INNER JOIN bukti_pembayaran ON data_siswa.nomor_pendaftaran = bukti_pembayaran.nomor_pendaftaran WHERE pembayaran='SUDAH'");
                    while ($data = $result->fetch()) { ?>
                    <tr>
                      <td><?= $no ?></td>
                      <td><?= $data['nama_lengkap'] ?></td>
                      <td><?= $data['nomor_daftar'] ?></td>
                      <td><?= $data['nomor_referensi'] ?></td>
                      <td><?= $data['jalur'] ?></td>
                      <td>
                        <button type="button" data-toggle="modal" data-target="#modalditolak<?= $data['nomor_daftar'] ?>" class="btn btn-warning">TOLAK</button>
                        <a href="../assets/<?= $data['bukti'] ?>" target="_blank" class="btn btn-primary">LIHAT</a>
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
                    <th>Referensi</th>
                    <th>Jalur</th>
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