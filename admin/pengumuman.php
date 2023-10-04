<?php
require_once __DIR__."/config/config.php";
require_once __DIR__."/config/curd.php";

$result = selectSimple("SELECT pengumuman FROM pengumuman WHERE id_pengumuman=1");
$data = $result->fetch();
?>
<div class="container col-lg-12">
	<div class="card ">
              <div class="card-header">
                <h3 class="card-title">Edit Pengumuman</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form action="proses/pengumuman.php" id="pengumuman" name="pengumuman" method="post">
                  <div class="row">
                    <div class="col-sm-12">
                      <textarea id="mytextarea" name="text" class="form-control"><?= $data['pengumuman'] ?></textarea>
                    </div>
                  </div>
                  <br>
                  <div class="row">
                    <div class="col-sm-8">
                      
                    </div>
                    <div class="col-sm-4">
                      <button class="btn btn-block btn-success" type="button" data-toggle="modal" data-target="#modalpengu">SAVE</button>
                    </div>
                  </div>
                </form>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
</div>
<div class="container col-lg-12">
	<div class="card ">
              <div class="card-header">
                <h3 class="card-title">Edit Pesan</h3>
              </div>
              
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example5" class="table table-bordered table-striped">
                    <thead>
                            <tr>
                              <th>No</th>
                              <th>Kode Pesan</th>
                              <th>Pesan</th>
                              <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                              $no = 1;
                              $result = selectSimple("SELECT * FROM pesan");
                              while ($data = $result->fetch()) { ?>
                              <tr>
                                <td><?= $no ?></td>
                                <td><?= $data['kode_pesan'] ?></td>
                                <td><?= $data['isi_pesan'] ?></td>
                                <td>
                                <button type="button" data-toggle="modal" data-target="#modaleditpesan<?= $data['id_pesan'] ?>" class="btn btn-warning">EDIT</button>
                                  <a href="./?hal=kirimpesan&kode=<?= $data['kode_pesan'] ?>" class="btn btn-primary">KIRIM</a>
                                  <?php
                                  if ($data['sistem'] == 'no') {
                                    ?>
                                      <button type="button" data-toggle="modal" data-target="#modalhapuspesan<?= $data['id_pesan'] ?>" class="btn btn-danger">HAPUS</button>
                                    <?php
                                  }
                                  ?>
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
                              <th>Kode Pesan</th>
                              <th>Pesan</th>
                              <th>Action</th>
                            </tr>
                            </tfoot>
                    </table>
                    <div class="row">
                    <div class="col-sm-12">
                      <button class="btn btn-block btn-primary" type="button" data-toggle="modal" data-target="#modaltambahpesan">TAMBAH PESAN</button>
                    </div>
                  </div>       
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
</div>
<script type="text/javascript">
  tinymce.init({
  selector: 'textarea#mytextarea'
});
</script>