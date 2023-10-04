<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<?php
if (isset($_GET['data'])) {
  if ($_GET['data']=='ok') {
    echo "<script>
  const Toast = Swal.mixin({
  toast: true,
  position: 'top-end',
  showConfirmButton: false,
  timer: 3000,
  timerProgressBar: true,
  didOpen: (toast) => {
    toast.addEventListener('mouseenter', Swal.stopTimer)
    toast.addEventListener('mouseleave', Swal.resumeTimer)
  }
})

Toast.fire({
  icon: 'success',
  title: 'Data Berhasil DiSimpan'
})
</script>";
  }elseif($_GET['data']=='no'){
    echo "<script>
  const Toast = Swal.mixin({
  toast: true,
  position: 'top-end',
  showConfirmButton: false,
  timer: 3000,
  timerProgressBar: true,
  didOpen: (toast) => {
    toast.addEventListener('mouseenter', Swal.stopTimer)
    toast.addEventListener('mouseleave', Swal.resumeTimer)
  }
})

Toast.fire({
  icon: 'error',
  title: 'Data Gagal DiSimpan'
})
</script>";
  }else{

  }
}
?>
<div class="content">
	<div class="card">
              <div class="card-header">
                <h3 class="card-title">Tabel Untuk Pemberian Himbauan</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Nama Ayah</th>
                    <th>Via WA</th>
                    <th>Via Email</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php
                    $message = "Terima kasih sudah mendaftar di SMPIT AL FIRDAUS PURWODADI, Selanjutnya silahkan melakukan pembayaran ke nomor rekening BSI : 7180950731 an. SUWATI atau bisa melakukan pembayaran secara langsung ke sekolah. konfirmasi pembayaran ke 087818675019 Info lebih lanjut silahkan kunjungi website ppdbalfirdaus.binainsanigrobogan.sch.id.";
                    $no = 1;
                    $data = tampildata($conn,'SELECT * FROM data WHERE himbauan=0');
                    foreach ($data as $row) {
                    ?>
                      <tr>
                      <td><?= $no;?></td>
                      <td><?= $row['nama_lengkap'];?></td>
                      <td><?= $row['nama_ayah'];?></td>
                      <td><a target="_blank" href="https://api.whatsapp.com/send?phone=62<?= $row['nowa'] ?>&text=Terima%20kasih%20sudah%20mendaftar%20di%20SMPIT%20AL%20FIRDAUS%20PURWODADI%2C%0ASelanjutnya%20silahkan%20melakukan%20pembayaran%20ke%20nomor%20rekening%20BSI%20:%207180950731%20an.%20SUWATI%20atau%20bisa%20melakukan%20pembayaran%20secara%20langsung%20ke%20sekolah.%20konfirmasi%20pembayaran%20ke%20087818675019%0AInfo%20lebih%20lanjut%20silahkan%20kunjungi%20website%20ppdbalfirdaus.binainsanigrobogan.sch.id." class="btn btn-success btn-block"><i class="fab fa-whatsapp"></i> KIRIM</a></td>
                      <td><a target="_blank" href="mailto:<?= $row['email'] ?>?subject=SMPIT%20AL%20FIRDAUS%20PURWODADI&body=<?= $message ?>" class="btn btn-danger btn-block"><i class="far fa-envelope"></i> KIRIM</a></td>
                      <td><a href="proses/himbau.php?masuk=iya&id=<?= $row['id'];?>" class="btn btn-primary btn-block"><i class="fas fa-check"></i></a></td>
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
                    <th>Nama Ayah</th>
                    <th>Via WA</th>
                    <th>Via Email</th>
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
                <h3 class="card-title">Tabel Untuk Pemberian Himbauan</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Nama Ayah</th>
                    <th>Tanggal Pemberitahuan</th>
                    <th>Oleh</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php
                    $no = 1;
                    $data = tampildata($conn,'SELECT * FROM data WHERE himbauan=1 ORDER BY tanggal_himbau DESC');
                    foreach ($data as $row) {
                    ?>
                      <tr>
                      <td><?= $no;?></td>
                      <td><?= $row['nama_lengkap'];?></td>
                      <td><?= $row['nama_ayah'];?></td>
                      <td><?= $row['tanggal_himbau'];?></td>
                      <td><?= $row['op_himbau'];?></td>
                      <td><a href="proses/himbau.php?masuk=tidak&id=<?= $row['id'];?>" class="btn btn-danger btn-block"><i class="fas fa-times"></i></a></td>
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
                    <th>Nama Ayah</th>
                    <th>Tanggal Pemberitahuan</th>
                    <th>Oleh</th>
                    <th>Action</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
</div>
<script>
  if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>