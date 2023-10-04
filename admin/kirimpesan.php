<?php
    $kode = $_GET['kode'];
    $datapesan = selectSimple("SELECT * FROM pesan WHERE kode_pesan = '$kode'");
    $resultdata = $datapesan->fetch();
?>
<div class="content row">
    <div class="col-lg-12">
      <div class="card">
              <div class="card-header">
                <h3 class="card-title">Broadcast Semua Pesan</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                    <div class="row">
                        <div class="col-sm-10">
                            <h3>Pesan WhastApp</h3>
                            <p>Kode : <?= $resultdata['kode_pesan'] ?></p>
                            <p><?= $resultdata['isi_pesan'] ?></p>
                        </div>
                        <div class="col-sm-2">
                        <a href="proses/broadcast.php?kirim=auto&kode=<?= $resultdata['kode_pesan'] ?>" class="btn btn-primary btn-block">Kirim Semua</a>  
                        </div>
                    </div>          
              </div>
              <!-- /.card-body -->
            </div>
</div>
            <!-- /.card -->
</div>
<div class="content row">
    <div class="col-lg-12">
      <div class="card">
              <div class="card-header">
                <h3 class="card-title">Broadcast Pesan</h3>
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
                    <th>Action</th>
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
                      <td><a href="proses/broadcast.php?kirim=manual&nomor=<?= $data['nomor_daftar'] ?>&kode=<?= $resultdata['kode_pesan'] ?>" class="btn btn-primary">Kirim</a></td>
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