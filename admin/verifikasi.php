<div class="content row">
  <div class="col-lg-6">
  <div class="card">
              <div class="card-header">
                <h3 class="card-title">Belum Verifikasi Berkas</h3>
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
                    <th>Verivikasi</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php
                    $no = 1;
                    $result = selectSimple("SELECT nama_lengkap,data_siswa.nomor_pendaftaran AS nomor_daftar,jalur,pembayaran FROM data_siswa INNER JOIN data_jalur ON data_siswa.nomor_pendaftaran = data_jalur.nomor_pendaftaran INNER JOIN data_pendaftaran ON data_siswa.nomor_pendaftaran = data_pendaftaran.nomor_pendaftaran WHERE pembayaran='SUDAH' AND pengumpulan_berkas='BELUM'");
                    while ($data = $result->fetch()) { ?>
                  <tr>
                    <td><?= $no ?></td>
                    <td><?= $data['nama_lengkap'] ?></td>
                    <td><?= $data['nomor_daftar'] ?></td>
                    <td><?= $data['jalur'] ?></td>
                    <td><button type="button" data-toggle="modal" data-target="#modalverify<?= $data['nomor_daftar'] ?>" class="btn btn-success">VERIVIKASI</button></td>
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
                    <th>Verivikasi</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
</div>
            <!-- /.card -->
            <div class="col-lg-6">
    <div class="card">
              <div class="card-header">
                <h3 class="card-title">Telah Verifikasi</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Kode</th>
                    <th>Jalur</th>
                    <th>Lihat</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php
                    $no = 1;
                    $result = selectSimple("SELECT nama_lengkap,data_siswa.nomor_pendaftaran AS nomor_daftar,jalur,pembayaran FROM data_siswa INNER JOIN data_jalur ON data_siswa.nomor_pendaftaran = data_jalur.nomor_pendaftaran INNER JOIN data_pendaftaran ON data_siswa.nomor_pendaftaran = data_pendaftaran.nomor_pendaftaran WHERE pembayaran='SUDAH' AND pengumpulan_berkas='SUDAH'");
                    while ($data = $result->fetch()) { ?>
                  <tr>
                    <td><?= $no ?></td>
                    <td><?= $data['nama_lengkap'] ?></td>
                    <td><?= $data['nomor_daftar'] ?></td>
                    <td><?= $data['jalur'] ?></td>
                    <td><a href="proses/cetak.php?hal=cetak&nomor=<?= $data['nomor_daftar'] ?>" target="_blank" class="btn btn-primary">CETAK</a></td>
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
                    <th>Lihat</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
</div>
            <!-- /.card -->
</div>