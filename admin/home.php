<?php
require_once __DIR__."/config/config.php";
require_once __DIR__."/config/curd.php";
?>
<!-- Awal Jumlah Pendaftar -->
<div class="container">
  <div class="row">
          <div class="col-lg-4 col-6">
            <!-- small card -->
            <div class="small-box bg-info">
              <div class="inner">
                  <?php
                $himbau = selectSimple("SELECT count(*) AS data_jumlah FROM data_pendaftaran WHERE pembayaran='SUDAH'");
                $datahimbau = $himbau->fetch();
              ?>
                <h3>
                  <?= 
                   $datahimbau['data_jumlah']; 
                  ?>
                </h3>

                <p>Jumlah Pendaftar</p>
              </div>
              <div class="icon">
                <i class="fas fa-user"></i>
              </div>
            </div>
          </div>
          <!-- ./col -->
          
          <!-- ./col -->
          <div class="col-lg-4 col-6">
            <!-- small card -->
            <div class="small-box bg-warning">
              <div class="inner">
                <?php
                $berkas = selectSimple("SELECT count(*) AS data_jumlah FROM data_pendaftaran WHERE pengumpulan_berkas='SUDAH'");
                $databerkas = $berkas->fetch();
              ?>
                <h3><?php 
                echo $databerkas['data_jumlah'];
                 ?></h3>

                <p>Verifikasi Berkas</p>
              </div>
              <div class="icon">
                <i class="fas fa-copy"></i>
              </div>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-4 col-6">
            <!-- small card -->
            <div class="small-box bg-danger">
              <div class="inner">
                <?php
                $du = selectSimple("SELECT count(*) AS data_jumlah FROM data_pendaftaran WHERE daftar_ulang='SUDAH'");
                $datadu = $du->fetch();
              ?>
                <h3><?= 
                 $datadu['data_jumlah']; 
                ?>
                </h3>

                <p>Daftar Ulang</p>
              </div>
              <div class="icon">
                <i class="fas fa-chart-pie"></i>
              </div>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
<!-- Akhir Jumlah Pendaftar -->
<div class="card">
        <div class="card-header">
          <h3 class="card-title">Aplikasi Penerimaan Peserta Didik Baru</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
          </div>
        </div>
        <div class="card-body">
          Selamat datang 
          <?=
          " ".$_SESSION['name']; 
           ?>
        </div>
        <!-- /.card-body -->
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->
<div class="card">
        <div class="card-header">
          <h3 class="card-title">Pengumuman</h3>
          <div class="card-tools">
            
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
          </div>
            
        </div>
        <div class="card-body">
          <?php
              $result = selectSimple("SELECT * FROM pengumuman WHERE id_pengumuman=1");
              $data_pengu = $result->fetch();
              ?>
            <p>
              <?= $data_pengu['pengumuman'] ?>
            </p>
    
        </div>
        <!-- /.card-body -->
        <!-- /.card-footer-->
      </div>
    <!-- /.content -->
</div>