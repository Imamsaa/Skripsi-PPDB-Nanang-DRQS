<div class="content row">
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
    <div class="col-lg-12">
      <div class="card">
              <div class="card-header">
                <h3 class="card-title">Pembayaran Terkonfirmasi</h3>
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
                    <th>Status</th>
                    <th>Edit</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php

                    $no = 1;
                    $result = selectSimple("SELECT nama_lengkap,data_siswa.nomor_pendaftaran AS nomor_daftar,jalur,pembayaran FROM data_siswa INNER JOIN data_jalur ON data_siswa.nomor_pendaftaran = data_jalur.nomor_pendaftaran INNER JOIN data_pendaftaran ON data_siswa.nomor_pendaftaran = data_pendaftaran.nomor_pendaftaran WHERE pembayaran='SUDAH'");
                    while ($data = $result->fetch()) { ?>
                    <tr>
                      <td><?= $no ?></td>
                      <td><?= $data['nama_lengkap'] ?></td>
                      <td><?= $data['nomor_daftar'] ?></td>
                      <td><?= $data['jalur'] ?></td>
                      <td><?= $data['pembayaran'] ?></td>
                      <td><a href="./?hal=edit&nomor=<?= $data['nomor_daftar'] ?>" class="btn btn-primary">Edit</a></td>
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
                    <th>Edit</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
</div>
            <!-- /.card -->
</div>