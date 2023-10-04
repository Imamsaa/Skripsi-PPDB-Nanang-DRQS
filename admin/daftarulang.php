<div class="content">
  <div class="card">
              <div class="card-header">
                <h3 class="card-title">Sudah daftar Ulang</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example3" class="table table-bordered table-striped">
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
                    $result = selectSimple("SELECT nama_lengkap,data_siswa.nomor_pendaftaran AS nomor_daftar,diterima,asal_sekolah,jalur,daftar_ulang,pembayaran,wawancara FROM data_siswa INNER JOIN data_jalur ON data_siswa.nomor_pendaftaran = data_jalur.nomor_pendaftaran INNER JOIN data_pendaftaran ON data_siswa.nomor_pendaftaran = data_pendaftaran.nomor_pendaftaran WHERE pembayaran='SUDAH' AND pengumpulan_berkas='SUDAH' AND diterima='DITERIMA' AND daftar_ulang='BELUM'");
                    while ($data = $result->fetch()) { ?>
                    <tr>
                      <td><?= $no ?></td>
                      <td><?= $data['nama_lengkap'] ?></td>
                      <td><?= $data['nomor_daftar'] ?></td>
                      <td><?= $data['asal_sekolah'] ?></td>
                      <td><?= $data['jalur'] ?></td>
                      <td><?= $data['daftar_ulang'] ?></td>
                      <td>
                        <button type="button" data-toggle="modal" data-target="#modaldaftarulang<?= $data['nomor_daftar'] ?>" class="btn btn-success">DAFTAR ULANG</button>
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
                    <th>Nomor Pendaftaran</th>
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
            <!-- /.card -->
    <div class="card">
              <div class="card-header">
                <h3 class="card-title">Daftar Ulang</h3>
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
                    $result = selectSimple("SELECT nama_lengkap,data_siswa.nomor_pendaftaran AS nomor_daftar,diterima,asal_sekolah,jalur,daftar_ulang,pembayaran,wawancara FROM data_siswa INNER JOIN data_jalur ON data_siswa.nomor_pendaftaran = data_jalur.nomor_pendaftaran INNER JOIN data_pendaftaran ON data_siswa.nomor_pendaftaran = data_pendaftaran.nomor_pendaftaran WHERE pembayaran='SUDAH' AND pengumpulan_berkas='SUDAH' AND diterima='DITERIMA' AND daftar_ulang='SUDAH'");
                    while ($data = $result->fetch()) { ?>
                    <tr>
                      <td><?= $no ?></td>
                      <td><?= $data['nama_lengkap'] ?></td>
                      <td><?= $data['nomor_daftar'] ?></td>
                      <td><?= $data['asal_sekolah'] ?></td>
                      <td><?= $data['jalur'] ?></td>
                      <td><?= $data['daftar_ulang'] ?></td>
                      <td>
                        <button type="button" data-toggle="modal" data-target="#modalbataldaftarulang<?= $data['nomor_daftar'] ?>" class="btn btn-danger">BATAL DAFTAR ULANG</button>
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
                    <th>Nomor Pendaftaran</th>
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
            <!-- /.card -->
</div>