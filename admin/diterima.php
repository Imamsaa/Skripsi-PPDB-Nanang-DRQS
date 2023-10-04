<div class="container">
	<div class="card">
              <div class="card-header">
                <h3 class="card-title">DataTable with default features</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Nomor Pendaftaran</th>
                    <th>Asal Sekolah</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php
                    $no =1;
                    $datas = tampildata($conn, "SELECT * FROM data WHERE daftar_ulang=1");
                    foreach ($datas as $data) { ?>
                      <tr>
                        <td><?= $no; ?></td>
                        <td><?= $data['nama_lengkap']; ?></td>
                        <td><?= $data['no_pendaftaran']; ?></td>
                        <td><?= $data['asal_sekolah']; ?></td>
                        <td><?= $data['jenis_kelamin']; ?></td>
                        <td><?= $data['nisn']; ?></td>
                        <td><?= $data['tempat_lahir']; ?></td>
                        <td><?= $data['tanggal_lahir']; ?></td>
                        <td><?= $data['alamat'].','.$data['rt'].','.$data['rw'].','.$data['dusun'].','.$data['desa'].','.$data['kecamatan'].','.$data['kabupaten'].','.$data['provinsi']; ?></td>
                        <td><?= $data['rt']; ?></td>
                        <td> 4</td>
                        <td>X</td>
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
                    <th>Action</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
</div>