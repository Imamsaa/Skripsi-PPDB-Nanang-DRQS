<?php
require_once __DIR__ . '/config/config.php';
require_once __DIR__ . '/config/curd.php';
$conn = getConn();
session_start();
if (!isset($_SESSION['login'])) {
  header('Location:../');
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Dasboard Admin PPDB SMPIT Al Firdaus Purwodadi</title>
  <link rel="shortcut icon" href="asset/icon/favicon.ico">
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <script src="plugins/toast/lib/vanilla-toast.min.js"></script>
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- IonIcons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">

  <script type="text/javascript" src='https://cdn.tiny.cloud/1/no-api-key/tinymce/6/tinymce.min.js' referrerpolicy="origin">
  </script>

</head>

<body class="hold-transition sidebar-mini">
  <div class="wrapper">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="index.php" class="nav-link">Home</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="logout.php" class="nav-link">Logout</a>
        </li>
      </ul>

      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">

        <li class="nav-item">
          <a class="nav-link" data-widget="fullscreen" href="#" role="button">
            <i class="fas fa-expand-arrows-alt"></i>
          </a>
        </li>
      </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="#" class="brand-link">
        <img src="asset/img/logo.png" alt="Logo LPIT" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">PPDB Al FIRDAUS</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->


        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <li class="nav-item menu-open">
              <a href="index.php?hal=home" class="nav-link <?php if (isset($_GET['hal'])) {
                                                              if ($_GET['hal'] == 'home') {
                                                                echo 'active';
                                                              }
                                                            } ?>">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                  Dashboard
                </p>
              </a>
              <!-- <ul class="nav nav-treeview"> -->
              <!-- <li class="nav-item">
                <a href="./index.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard v1</p>
                </a>
              </li> -->
              <!-- <li class="nav-item">
                <a href="./index2.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard v2</p>
                </a>
              </li> -->
              <!-- <li class="nav-item">
                <a href="./index3.html" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard v3</p>
                </a>
              </li> -->
              <!-- </ul> -->
            <li class="nav-header">PENDAFTARAN</li>
            <li class="nav-item">
              <a href="index.php?hal=pembayaran" class="nav-link <?php if (isset($_GET['hal'])) {
                                                                    if ($_GET['hal'] == 'pembayaran') {
                                                                      echo 'active';
                                                                    }
                                                                  } ?>">
                <i class="nav-icon fas fa-wallet"></i>
                <p>
                  Data Siswa
                </p>
                <?php

                ?>
                <span class="badge badge-info right"><?php
                                                      // echo $bayar; 
                                                      ?></span>
              </a>
            </li>
            <li class="nav-item">
              <a href="index.php?hal=konpembayaran" class="nav-link <?php if (isset($_GET['hal'])) {
                                                                      if ($_GET['hal'] == 'konpembayaran') {
                                                                        echo 'active';
                                                                      }
                                                                    } ?>">
                <i class="nav-icon fas fa-money-bill-wave"></i>
                <p>
                  Konfirmasi Pembayaran
                </p>
                <?php

                ?>
                <span class="badge badge-info right"><?php
                                                      // echo $bayar; 
                                                      ?></span>
              </a>
            </li>
            <li class="nav-item">
              <a href="index.php?hal=verifikasi" class="nav-link <?php if (isset($_GET['hal'])) {
                                                                    if ($_GET['hal'] == 'verifikasi') {
                                                                      echo 'active';
                                                                    }
                                                                  } ?>">
                <i class="nav-icon fas fa-copy"></i>
                <p>
                  Verifikasi Berkas
                </p>
                <?php

                ?>
                <span class="badge badge-info right"><?php
                                                      //  echo $verifi; 
                                                      ?></span>
              </a>
            </li>
            <li class="nav-item">
              <a href="index.php?hal=wawancara" class="nav-link <?php if (isset($_GET['hal'])) {
                                                                  if ($_GET['hal'] == 'wawancara') {
                                                                    echo 'active';
                                                                  }
                                                                } ?>">
                <i class="nav-icon fas fa-table"></i>
                <p>
                  Wawancara
                </p>


              </a>
            </li>
            <li class="nav-item">
              <a href="index.php?hal=keputusan" class="nav-link <?php if (isset($_GET['hal'])) {
                                                                  if ($_GET['hal'] == 'keputusan') {
                                                                    echo 'active';
                                                                  }
                                                                } ?>">
                <i class="nav-icon fas fa-columns"></i>
                <p>
                  Keputusan Diterima
                </p>
                <?php

                ?>
                <span class="badge badge-info right"><?php
                                                      // echo $du; 
                                                      ?></span>
              </a>
            </li>
            <li class="nav-item">
              <a href="index.php?hal=daftarulang" class="nav-link <?php if (isset($_GET['hal'])) {
                                                                    if ($_GET['hal'] == 'daftarulang') {
                                                                      echo 'active';
                                                                    }
                                                                  } ?>">
                <i class="nav-icon far fa-plus-square"></i>
                <p>
                  Daftar Ulang
                </p>
                <?php

                ?>
                <span class="badge badge-info right"><?php
                                                      // echo $du; 
                                                      ?></span>
              </a>
            </li>
            <li class="nav-header">PELAPORAN</li>
            <li class="nav-item">
              <a href="index.php?hal=lapor" class="nav-link <?php if (isset($_GET['hal'])) {
                                                              if ($_GET['hal'] == 'lapor') {
                                                                echo 'active';
                                                              }
                                                            } ?>">
                <i class="nav-icon far fa-copy"></i>
                <p>
                  Pelaporan
                </p>
              </a>
            </li>
            <li class="nav-header">DATA LAINYA</li>
            <li class="nav-item">
              <a href="index.php?hal=setting" class="nav-link <?php if (isset($_GET['hal'])) {
                                                                if ($_GET['hal'] == 'setting') {
                                                                  echo 'active';
                                                                }
                                                              } ?>">
                <i class="nav-icon far fa-plus-square"></i>
                <p>
                  Setting
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="index.php?hal=pengu" class="nav-link <?php if (isset($_GET['hal'])) {
                                                              if ($_GET['hal'] == 'pengu') {
                                                                echo 'active';
                                                              }
                                                            } ?>">
                <i class="nav-icon far fa-paper-plane"></i>
                <p>
                  Pengumuman
                </p>
              </a>
            </li>
            <!-- <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Pelaporan
              </p>
            </a>
          </li> -->
            <!-- <li class="nav-header">DATA LAINYA (SAMPAH)</li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                Data Siswa
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="index.php?hal=diterima" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Siswa Diterima</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="index.php?hal=ditolak" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Siswa Ditolak</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="index.php?hal=diadmin" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Proses Administrasi</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="index.php?hal=ditotal" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Total Pendaftar</p>
                </a>
              </li>
            </ul>
          </li> -->
          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <br>
      <?php
      if (isset($_GET['hal'])) {
        if ($_GET['hal'] == "home") {
          include 'home.php';
        } elseif ($_GET['hal'] == "daftar") {
          include 'daftar.php';
        } elseif ($_GET['hal'] == "himbauan") {
          include 'himbauan.php';
        } elseif ($_GET['hal'] == "pembayaran") {
          include 'pembayaran.php';
        } elseif ($_GET['hal'] == "verifikasi") {
          include 'verifikasi.php';
        } elseif ($_GET['hal'] == "wawancara") {
          include 'data.php';
        } elseif ($_GET['hal'] == "keputusan") {
          include 'keputusan.php';
        } elseif ($_GET['hal'] == "daftarulang") {
          include 'daftarulang.php';
        } elseif ($_GET['hal'] == "pengu") {
          include 'pengumuman.php';
        } elseif ($_GET['hal'] == "success") {
          include 'home.php';
        } elseif ($_GET['hal'] == "lapor") {
          include 'pelaporan.php';
        } elseif ($_GET['hal'] == "setting") {
          include 'set.php';
        } elseif ($_GET['hal'] == "edit") {
          include 'editdata.php';
        } elseif ($_GET['hal'] == "lihat") {
          include 'lihatdata.php';
        } elseif ($_GET['hal'] == "konpembayaran") {
          include 'konfirpembayaran.php';
        } elseif ($_GET['hal'] == "kirimpesan") {
          include 'kirimpesan.php';
        }
      } else {
        include 'home.php';
      }
      ?>


    </div>
    <!-- /.content-wrapper -->

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->

    <!-- Main Footer -->
    <footer class="main-footer">
      <strong>Copyright &copy; 2023 <a href="https://binainsanigrobogan.sch.id">PPDB LIPT AL FIRDAUS PURWODADI</a>.</strong>
      All rights reserved.
    </footer>
  </div>
  <!-- Modal Pembayaran-->
  <?php
  $result = selectSimple("SELECT nama_lengkap,data_siswa.nomor_pendaftaran AS nomor_daftar,jalur,pembayaran FROM data_siswa INNER JOIN data_jalur ON data_siswa.nomor_pendaftaran = data_jalur.nomor_pendaftaran INNER JOIN data_pendaftaran ON data_siswa.nomor_pendaftaran = data_pendaftaran.nomor_pendaftaran WHERE pembayaran='SUDAH' AND pengumpulan_berkas='BELUM'");
  while ($data = $result->fetch()) {
  ?>
    <div class="modal fade" id="modalverify<?= $data['nomor_daftar'] ?>" style="z-index: 99999;" tabindex="-1" role="dialog" aria-labelledby="modaldaftarLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="modaldaftarLabel">VERIFIKASI</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            Apakah anda yakin untuk memverifikasi berkas ini?
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">BATAL</button>
            <a href="proses/verify.php?hal=verify&nomor=<?= $data['nomor_daftar'] ?>" class="btn btn-success">VERIFIKASI</a>
          </div>
        </div>
      </div>
    </div>
  <?php
  }
  ?>

  <?php
  $result = selectSimple("SELECT nama_lengkap,data_siswa.nomor_pendaftaran AS nomor_daftar,asal_sekolah,jalur,pembayaran,wawancara FROM data_siswa INNER JOIN data_jalur ON data_siswa.nomor_pendaftaran = data_jalur.nomor_pendaftaran INNER JOIN data_pendaftaran ON data_siswa.nomor_pendaftaran = data_pendaftaran.nomor_pendaftaran WHERE pembayaran='SUDAH' AND pengumpulan_berkas='SUDAH' AND wawancara='BELUM'");
  while ($data = $result->fetch()) {
  ?>
    <div class="modal fade" id="modalwawancara<?= $data['nomor_daftar'] ?>" style="z-index: 99999;" tabindex="-1" role="dialog" aria-labelledby="modaldaftarLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="modaldaftarLabel">VERIFIKASI</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            Apakah anda yakin Pendaftar telah melakukan wawancara?
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">BATAL</button>
            <a href="proses/wawancara.php?hal=donewawancara&nomor=<?= $data['nomor_daftar'] ?>" class="btn btn-success">KONFIRMASI</a>
          </div>
        </div>
      </div>
    </div>
  <?php
  }
  ?>

  <?php
  $result = selectSimple("SELECT nama_lengkap,data_siswa.nomor_pendaftaran AS nomor_daftar,asal_sekolah,jalur,pembayaran,wawancara FROM data_siswa INNER JOIN data_jalur ON data_siswa.nomor_pendaftaran = data_jalur.nomor_pendaftaran INNER JOIN data_pendaftaran ON data_siswa.nomor_pendaftaran = data_pendaftaran.nomor_pendaftaran WHERE pembayaran='SUDAH' AND pengumpulan_berkas='SUDAH' AND wawancara='SUDAH'");
  while ($data = $result->fetch()) {
  ?>
    <div class="modal fade" id="modalbelumwawancara<?= $data['nomor_daftar'] ?>" style="z-index: 99999;" tabindex="-1" role="dialog" aria-labelledby="modaldaftarLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="modaldaftarLabel">VERIFIKASI</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            Apakah anda yakin Untuk Membatalkan Status Wawancara?
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">BATAL</button>
            <a href="proses/wawancara.php?hal=belumwawancara&nomor=<?= $data['nomor_daftar'] ?>" class="btn btn-success">KONFIRMASI</a>
          </div>
        </div>
      </div>
    </div>
  <?php
  }
  ?>
  <!-- ./wrapper -->
  <!-- Modal-->

  <div class="modal fade" id="modalabsensiwawancara" style="z-index: 99999;" tabindex="-1" role="dialog" aria-labelledby="modaldaftarLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modaldaftarLabel">VERIFIKASI</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          Apakah anda yakin untuk mengunduh Absensi wawancara?
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">BATAL</button>
          <a target="_blank" href="proses/absensi.php?hal=unduhabsenbelum&data=BELUM" class="btn btn-success">DOWNLOAD</a>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="modalabsensiwawancarasudah" style="z-index: 99999;" tabindex="-1" role="dialog" aria-labelledby="modaldaftarLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modaldaftarLabel">VERIFIKASI</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          Apakah anda yakin untuk mengunduh Absensi wawancara?
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">BATAL</button>
          <a target="_blank" href="proses/absensi.php?hal=unduhabsensudah&data=SUDAH" class="btn btn-success">DOWNLOAD</a>
        </div>
      </div>
    </div>
  </div>

  <?php
  $result = selectSimple("SELECT nama_lengkap,data_siswa.nomor_pendaftaran AS nomor_daftar,diterima,asal_sekolah,jalur,pembayaran,wawancara FROM data_siswa INNER JOIN data_jalur ON data_siswa.nomor_pendaftaran = data_jalur.nomor_pendaftaran INNER JOIN data_pendaftaran ON data_siswa.nomor_pendaftaran = data_pendaftaran.nomor_pendaftaran WHERE pembayaran='SUDAH' AND pengumpulan_berkas='SUDAH' AND diterima='PENDING'");
  while ($data = $result->fetch()) {
  ?>
    <div class="modal fade" id="modalditerima<?= $data['nomor_daftar'] ?>" style="z-index: 99999;" tabindex="-1" role="dialog" aria-labelledby="modaldaftarLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="modaldaftarLabel">VERIFIKASI</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            Apakah anda yakin untuk melakukan verifikasi penerimaan?
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">BATAL</button>
            <a href="proses/final.php?hal=diterima&nomor=<?= $data['nomor_daftar'] ?>" class="btn btn-success">TERIMA</a>
          </div>
        </div>
      </div>
    </div>
  <?php
  }
  ?>

  <?php
  $result = selectSimple("SELECT nama_lengkap,data_siswa.nomor_pendaftaran AS nomor_daftar,diterima,asal_sekolah,jalur,pembayaran,wawancara FROM data_siswa INNER JOIN data_jalur ON data_siswa.nomor_pendaftaran = data_jalur.nomor_pendaftaran INNER JOIN data_pendaftaran ON data_siswa.nomor_pendaftaran = data_pendaftaran.nomor_pendaftaran WHERE pembayaran='SUDAH' AND pengumpulan_berkas='SUDAH' AND diterima='PENDING'");
  while ($data = $result->fetch()) {
  ?>
    <div class="modal fade" id="modalditolak<?= $data['nomor_daftar'] ?>" style="z-index: 99999;" tabindex="-1" role="dialog" aria-labelledby="modaldaftarLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="modaldaftarLabel">VERIFIKASI</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            Apakah anda yakin untuk melakukan verifikasi penolakan?
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">BATAL</button>
            <a href="proses/final.php?hal=ditolak&nomor=<?= $data['nomor_daftar'] ?>" class="btn btn-success">TOLAK</a>
          </div>
        </div>
      </div>
    </div>
  <?php
  }
  ?>

  <?php
  $result = selectSimple("SELECT nama_lengkap,data_siswa.nomor_pendaftaran AS nomor_daftar,diterima,asal_sekolah,jalur,pembayaran,wawancara FROM data_siswa INNER JOIN data_jalur ON data_siswa.nomor_pendaftaran = data_jalur.nomor_pendaftaran INNER JOIN data_pendaftaran ON data_siswa.nomor_pendaftaran = data_pendaftaran.nomor_pendaftaran WHERE pembayaran='SUDAH' AND pengumpulan_berkas='SUDAH' AND diterima='DITERIMA'");
  while ($data = $result->fetch()) {
  ?>
    <div class="modal fade" id="modalditerimapending<?= $data['nomor_daftar'] ?>" style="z-index: 99999;" tabindex="-1" role="dialog" aria-labelledby="modaldaftarLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="modaldaftarLabel">VERIFIKASI</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            Apakah anda yakin untuk melakukan verifikasi PENDING?
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">BATAL</button>
            <a href="proses/final.php?hal=dipending&nomor=<?= $data['nomor_daftar'] ?>" class="btn btn-success">PENDING</a>
          </div>
        </div>
      </div>
    </div>
  <?php
  }
  ?>

  <?php
  $result = selectSimple("SELECT nama_lengkap,data_siswa.nomor_pendaftaran AS nomor_daftar,diterima,asal_sekolah,jalur,pembayaran,wawancara FROM data_siswa INNER JOIN data_jalur ON data_siswa.nomor_pendaftaran = data_jalur.nomor_pendaftaran INNER JOIN data_pendaftaran ON data_siswa.nomor_pendaftaran = data_pendaftaran.nomor_pendaftaran WHERE pembayaran='SUDAH' AND pengumpulan_berkas='SUDAH' AND diterima='TIDAK DITERIMA'");
  while ($data = $result->fetch()) {
  ?>
    <div class="modal fade" id="modalditolakpending<?= $data['nomor_daftar'] ?>" style="z-index: 99999;" tabindex="-1" role="dialog" aria-labelledby="modaldaftarLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="modaldaftarLabel">VERIFIKASI</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            Apakah anda yakin untuk melakukan verifikasi PENDING?
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">BATAL</button>
            <a href="proses/final.php?hal=dipending&nomor=<?= $data['nomor_daftar'] ?>" class="btn btn-success">PENDING</a>
          </div>
        </div>
      </div>
    </div>
  <?php
  }
  ?>

  <?php
  $result = selectSimple("SELECT nama_lengkap,data_siswa.nomor_pendaftaran AS nomor_daftar,diterima,asal_sekolah,jalur,daftar_ulang,pembayaran,wawancara FROM data_siswa INNER JOIN data_jalur ON data_siswa.nomor_pendaftaran = data_jalur.nomor_pendaftaran INNER JOIN data_pendaftaran ON data_siswa.nomor_pendaftaran = data_pendaftaran.nomor_pendaftaran WHERE pembayaran='SUDAH' AND pengumpulan_berkas='SUDAH' AND diterima='DITERIMA' AND daftar_ulang='BELUM'");
  while ($data = $result->fetch()) {
  ?>
    <div class="modal fade" id="modaldaftarulang<?= $data['nomor_daftar'] ?>" style="z-index: 99999;" tabindex="-1" role="dialog" aria-labelledby="modaldaftarLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="modaldaftarLabel">VERIFIKASI DAFTAR ULANG</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            Apakah anda yakin untuk melakukan verifikasi Daftar Ulang?
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">BATAL</button>
            <a href="proses/daftarulang.php?hal=daftarulang&nomor=<?= $data['nomor_daftar'] ?>" class="btn btn-success">DAFTAR ULANG</a>
          </div>
        </div>
      </div>
    </div>
  <?php
  }
  ?>

  <?php
  $result = selectSimple("SELECT nama_lengkap,data_siswa.nomor_pendaftaran AS nomor_daftar,diterima,asal_sekolah,jalur,daftar_ulang,pembayaran,wawancara FROM data_siswa INNER JOIN data_jalur ON data_siswa.nomor_pendaftaran = data_jalur.nomor_pendaftaran INNER JOIN data_pendaftaran ON data_siswa.nomor_pendaftaran = data_pendaftaran.nomor_pendaftaran WHERE pembayaran='SUDAH' AND pengumpulan_berkas='SUDAH' AND diterima='DITERIMA' AND daftar_ulang='SUDAH'");
  while ($data = $result->fetch()) {
  ?>
    <div class="modal fade" id="modalbataldaftarulang<?= $data['nomor_daftar'] ?>" style="z-index: 99999;" tabindex="-1" role="dialog" aria-labelledby="modaldaftarLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="modaldaftarLabel">VERIFIKASI MEMBATALKAN DAFTAR ULANG</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            Apakah anda yakin untuk melakukan verifikasi Membatalkan Daftar Ulang?
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">BATAL</button>
            <a href="proses/daftarulang.php?hal=bataldaftarulang&nomor=<?= $data['nomor_daftar'] ?>" class="btn btn-success">BATAL DAFTAR ULANG</a>
          </div>
        </div>
      </div>
    </div>
  <?php
  }
  ?>

  <div class="modal fade" id="modalpengu" style="z-index: 99999;" tabindex="-1" role="dialog" aria-labelledby="modaldaftarLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modaldaftarLabel">VERIFIKASI</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          Simpan Perubahan?
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">BATAL</button>
          <button type="submit" name="simpan" value="kirim" form="pengumuman" class="btn btn-success">SIMPAN</button>
        </div>
      </div>
    </div>
  </div>
  <?php
  $result = selectSimple("SELECT nama_lengkap,data_siswa.nomor_pendaftaran AS nomor_daftar,jalur,pembayaran,nomor_referensi FROM data_siswa INNER JOIN data_jalur ON data_siswa.nomor_pendaftaran = data_jalur.nomor_pendaftaran INNER JOIN data_pendaftaran ON data_siswa.nomor_pendaftaran = data_pendaftaran.nomor_pendaftaran INNER JOIN bukti_pembayaran ON data_siswa.nomor_pendaftaran = bukti_pembayaran.nomor_pendaftaran WHERE pembayaran='BELUM'");
  while ($data = $result->fetch()) {
  ?>
    <div class="modal fade" id="modalditerima<?= $data['nomor_daftar'] ?>" style="z-index: 99999;" tabindex="-1" role="dialog" aria-labelledby="modaldaftarLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="modaldaftarLabel">VERIFIKASI</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            Apakah anda yakin untuk melakukan verifikasi Pembayaran?
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">BATAL</button>
            <a href="proses/konfinal.php?hal=diterima&nomor=<?= $data['nomor_daftar'] ?>" class="btn btn-success">TERIMA</a>
          </div>
        </div>
      </div>
    </div>
  <?php
  }
  ?>

  <?php
  $result = selectSimple("SELECT nama_lengkap,bukti,data_siswa.nomor_pendaftaran AS nomor_daftar,jalur,pembayaran,nomor_referensi FROM data_siswa INNER JOIN data_jalur ON data_siswa.nomor_pendaftaran = data_jalur.nomor_pendaftaran INNER JOIN data_pendaftaran ON data_siswa.nomor_pendaftaran = data_pendaftaran.nomor_pendaftaran INNER JOIN bukti_pembayaran ON data_siswa.nomor_pendaftaran = bukti_pembayaran.nomor_pendaftaran WHERE pembayaran='SUDAH'");
  while ($data = $result->fetch()) {
  ?>
    <div class="modal fade" id="modalditolak<?= $data['nomor_daftar'] ?>" style="z-index: 99999;" tabindex="-1" role="dialog" aria-labelledby="modaldaftarLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="modaldaftarLabel">VERIFIKASI</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            Apakah anda yakin untuk melakukan Penolakan pembayaran?
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">BATAL</button>
            <a href="proses/konfinal.php?hal=ditolak&nomor=<?= $data['nomor_daftar'] ?>" class="btn btn-success">TOLAK</a>
          </div>
        </div>
      </div>
    </div>
  <?php
  }
  ?>
  <?php
  $result = selectSimple("SELECT * FROM pesan");
  while ($data = $result->fetch()) {
  ?>
    <div class="modal fade" id="modalhapuspesan<?= $data['id_pesan'] ?>" style="z-index: 99999;" tabindex="-1" role="dialog" aria-labelledby="modalhapuspesanLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="modalhapuspesanLabel">HAPUS PESAN</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            Apakah anda yakin untuk menghapus pesan ini?
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">BATAL</button>
            <a href="proses/pesan.php?hal=hapusk&nomor=<?= $data['id_pesan'] ?>" class="btn btn-danger">HAPUS</a>
          </div>
        </div>
      </div>
    </div>
  <?php
  }
  ?>
  <?php
  $result = selectSimple("SELECT * FROM pesan");
  while ($data = $result->fetch()) {
  ?>
    <div class="modal fade" id="modaleditpesan<?= $data['id_pesan'] ?>" style="z-index: 99999;" tabindex="-1" role="dialog" aria-labelledby="modaleditpesanLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="modaleditpesanLabel">EDIT PESAN</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form action="proses/pesan.php" id="editpesan<?= $data['id_pesan'] ?>" name="editpesan<?= $data['id'] ?>" method="post">
              <div class="form-group row">
                <label for="kodepesan" class="col-sm-3 col-form-label">kode : </label>
                <div class="col-sm-9">
                  <input class="form-control" value="<?= $data['kode_pesan'] ?>" type="text" id="kodepesan" name="kodepesan" placeholder="KODE PESAN" required>
                  <input type="hidden" name="nomor" value="<?= $data['id_pesan'] ?>">
                </div>
              </div>
              <div class="form-group row">
                <label for="isipesan" class="col-sm-3 col-form-label">ISI : </label>
                <div class="col-sm-9">
                  <textarea class="form-control" id="isipesan" name="isipesan" placeholder="ISI PESAN" required><?= $data['isi_pesan'] ?></textarea>
                </div>
              </div>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">BATAL</button>
            <button type="submit" name="editpesan" value="editpesan" form="editpesan<?= $data['id_pesan'] ?>" class="btn btn-success">EDIT</button>
          </div>
        </div>
      </div>
    </div>
  <?php
  }
  ?>
  <div class="modal fade" id="modaltambahpesan" style="z-index: 99999;" tabindex="-1" role="dialog" aria-labelledby="modaldaftarpesanLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modaldaftarpesanLabel">TAMBAH PESAN</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="proses/pesan.php" id="tambahpesan" name="tambahpesan" method="post">
            <div class="form-group row">
              <label for="kodepesan" class="col-sm-3 col-form-label">kode : </label>
              <div class="col-sm-9">
                <input class="form-control" type="text" id="kodepesan" name="kodepesan" placeholder="KODE PESAN" required>
              </div>
            </div>
            <div class="form-group row">
              <label for="isipesan" class="col-sm-3 col-form-label">ISI : </label>
              <div class="col-sm-9">
                <textarea class="form-control" id="isipesan" name="isipesan" placeholder="ISI PESAN" required></textarea>
              </div>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">BATAL</button>
          <button type="submit" name="tambahpesan" value="tambahpesan" form="tambahpesan" class="btn btn-success">TAMBAH</button>
        </div>
      </div>
    </div>
  </div>
  <!-- Master -->
  <div class="modal fade" id="modaldaftaradmin" style="z-index: 99999;" tabindex="-1" role="dialog" aria-labelledby="modaldaftarLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modaldaftarLabel">VERIFIKASI</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          Apakah anda yakin untuk melanjutkan pendaftaran?
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">BATAL</button>
          <button type="submit" name="daftaradmin" value="kirim" form="daftarppdbadmin" class="btn btn-success">DAFTAR</button>
        </div>
      </div>
    </div>
  </div>
  <!-- OPTIONAL SCRIPTS -->
  <script src="plugins/chart.js/Chart.min.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="dist/js/demo.js"></script>
  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
  <script src="dist/js/pages/dashboard3.js"></script>
  <!-- jQuery -->
  <script src="plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- DataTables  & Plugins -->
  <script src="plugins/datatables/jquery.dataTables.min.js"></script>
  <script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
  <script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
  <script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
  <script src="plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
  <script src="plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
  <script src="plugins/jszip/jszip.min.js"></script>
  <script src="plugins/pdfmake/pdfmake.min.js"></script>
  <script src="plugins/pdfmake/vfs_fonts.js"></script>
  <script src="plugins/datatables-buttons/js/buttons.html5.min.js"></script>
  <script src="plugins/datatables-buttons/js/buttons.print.min.js"></script>
  <script src="plugins/datatables-buttons/js/buttons.colVis.min.js"></script>

  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.6.9/dist/sweetalert2.all.min.js"></script>
  <script>
    // function redirect(){
    // 	window.location="http://alamatbaru.html";
    // }
  </script>
  <?php if (@$_SESSION['log'] == "success") { ?>
    <script>
      Swal.fire({
        icon: 'success',
        title: 'Your work has been saved',
        showConfirmButton: false,
        timer: 1500
      });
    </script>
    <!-- jangan lupa untuk menambahkan unset agar sweet alert tidak muncul lagi saat di refresh -->
  <?php unset($_SESSION['log']);
  } ?>
  <?php if (@$_SESSION['log'] == "error") { ?>
    <script>
      Swal.fire({
        icon: 'error',
        title: 'Your work has been saved',
        showConfirmButton: false,
        timer: 1500
      });
    </script>
    <!-- jangan lupa untuk menambahkan unset agar sweet alert tidak muncul lagi saat di refresh -->
  <?php unset($_SESSION['log']);
  } ?>

  <script>

  </script>
  <?php if (@$_SESSION['masuk'] == "success") { ?>
    <script>
      swal("Success!", "<?php echo $_SESSION['message']; ?>", "success").then(function() {
        window.location = "./?hal=success";
      });
    </script>
    <!-- jangan lupa untuk menambahkan unset agar sweet alert tidak muncul lagi saat di refresh -->
  <?php unset($_SESSION['masuk']);
  } ?>
  <!-- AdminLTE App -->
  <script src="dist/js/adminlte.min.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="dist/js/demo.js"></script>
  <!-- Page specific script -->

  <?php if (@$_SESSION['notice'] == "success") { ?>
    <script>
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
        title: 'Perubahan Data Berhasil!'
      })
    </script>
    <!-- jangan lupa untuk menambahkan unset agar sweet alert tidak muncul lagi saat di refresh -->
  <?php unset($_SESSION['notice']);
  } ?>
  <?php if (@$_SESSION['notice'] == "error") { ?>
    <script>
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
        title: 'Perubahan Data Gagal!'
      })
    </script>
    <!-- jangan lupa untuk menambahkan unset agar sweet alert tidak muncul lagi saat di refresh -->
  <?php unset($_SESSION['notice']);
  } ?>
  <script>
    $(function() {
      $("#example1").DataTable({
        "responsive": true,
        "lengthChange": false,
        "autoWidth": false,
        "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
      }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
      $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true
      }).container().appendTo('#example2_wrapper .col-md-6:eq(0)');
    });
  </script>
  <script>
    $(function() {
      $("#example3").DataTable({
        "responsive": true,
        "lengthChange": false,
        "autoWidth": false,
        "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
      }).buttons().container().appendTo('#example3_wrapper .col-md-6:eq(0)');
      $('#example4').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
      });
    });
  </script>
  <script>
    $(function() {
      $("#example5").DataTable({
        "responsive": true,
        "lengthChange": false,
        "autoWidth": false,
        "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
      }).buttons().container().appendTo('#example5_wrapper .col-md-6:eq(0)');
      $('#example6').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
      });
    });
  </script>
</body>

</html>