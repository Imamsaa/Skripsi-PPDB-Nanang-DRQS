<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>PPDB SDIT Al Firdaus Purwodadi</title>
        <link rel="icon" type="image/x-icon" href="assets/icon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Google fonts-->
        <link rel="preconnect" href="https://fonts.gstatic.com" />
        <link href="https://fonts.googleapis.com/css2?family=Newsreader:ital,wght@0,600;1,600&amp;display=swap" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,300;0,500;0,600;0,700;1,300;1,500;1,600;1,700&amp;display=swap" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,400;1,400&amp;display=swap" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	    <link rel="stylesheet" href="vendors/css/style.css">
	    <!-- Font Awesome Icons -->
  		<link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="vendors/js/script.js"></script>
        <link href="css/styles.css" rel="stylesheet" />
	    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <style>
            .unit:hover {
                box-shadow: 2px 2px 2px 2px rgba(0,0,0,0.8);
                padding: 20px;
                border-radius:20px;
            }
            .peta {
                box-shadow: 2px 2px 2px 2px rgba(0,0,0,0.8);
            }
            .bareng{
                background-image:url("assets/img/smpit.jpg");
                background-size:cover;
            }
        </style>
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top shadow-sm" id="mainNav">
            <div class="container px-5">
                <a class="navbar-brand fw-bold" href="#page-top">PPDB SDIT Al Firdaus Purwodadi 
                    <?php
                        if(idate('Y') == 2022){
                            if (idate('m') == 12) {
                                if (idate('d') <= 7) {
                                    echo "Jalur Prestasi";
                                }else if(idate('d') >= 8){
                                    echo "Jalur Reguler";
                                }
                            }else{
                                echo "Jalur Prestasi";
                            }
                        }else{
                            echo "Jalur Reguler";
                        }
                    ?>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="bi-list"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto me-4 my-3 my-lg-0">
                    <li class="nav-item"><a class="nav-link me-lg-3" href="?hal=utama">Daftar</a></li>
                        <li class="nav-item"><a class="nav-link me-lg-3" href="?hal=info">Seleksi Pendaftaran</a></li>
                        <li class="nav-item"><a class="nav-link me-lg-3" href="?hal=info2">Informasi Pendaftaran</a></li>
                        <li class="nav-item"><a class="nav-link me-lg-3" href="?hal=kontak">Kontak Kami</a></li>
                    </ul>
                    <button class="btn btn-primary rounded-pill px-3 mb-2 mb-lg-0" data-bs-toggle="modal" data-bs-target="#feedbackModal">
                        <span class="d-flex align-items-center">
                            <span class="small">Login</span>
                        </span>
                    </button>
                </div>
            </div>
        </nav>
        <!-- Mashead header-->
        <?php
        if (isset($_GET["hal"])) {
            if($_GET["hal"] == "utama"){
                require_once "utama.php";
            }else if($_GET["hal"] == "info"){
                require_once "info.php";
            }else if($_GET["hal"] == "kontak"){
                require_once "kontak.php";
            }else if($_GET["hal"] == "success"){
                require_once "success.php";
            }else if($_GET["hal"] == "cetak"){
                require_once "printdata.php";
            }else if($_GET["hal"] == "info2"){
                require_once "info2.php";
            }else if($_GET["hal"] == "status"){
                require_once "status.php";
            }else{
                require_once "utama.php";
            }
        }else{
            require_once "utama.php";
        }
            
        ?>
        <!-- Footer-->
        <footer class="bg-black text-center py-5">
            <div class="container px-5">
                <div class="text-white-50 small">
                    <div class="mb-2">&copy; PPDB LPIT Al Firdaus Purwodadi 2023. All Rights Reserved.</div>
                    <!-- <a href="#!">Privacy</a>
                    <span class="mx-1">&middot;</span>
                    <a href="#!">Terms</a>
                    <span class="mx-1">&middot;</span>
                    <a href="#!">FAQ</a> -->
                </div>
            </div>
        </footer>
        <!-- Feedback Modal-->
        <div class="modal fade" id="feedbackModal" tabindex="-1" aria-labelledby="feedbackModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header bg-gradient-primary-to-secondary p-4">
                        <h5 class="modal-title font-alt text-white" id="feedbackModalLabel">Login Dasboard</h5>
                        <button class="btn-close btn-close-white" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body border-0 p-4">
                        <!-- * * * * * * * * * * * * * * *-->
                        <!-- * * SB Forms Contact Form * *-->
                        <!-- * * * * * * * * * * * * * * *-->
                        <!-- This form is pre-integrated with SB Forms.-->
                        <!-- To make this form functional, sign up at-->
                        <!-- https://startbootstrap.com/solution/contact-forms-->
                        <!-- to get an API token!-->
                        <form id="contactForm" action="proses/login.php" method="post">
                            <!-- Name input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="email" type="email" placeholder="Enter Your Email" name='email' data-sb-validations="required" />
                                <label for="email">Email</label>
                                <div class="invalid-feedback" data-sb-feedback="name:required">Email</div>
                            </div>
                            <div class="form-floating mb-3">
                                <input class="form-control" id="password" name='password' type="password" placeholder="Enter Your Password" data-sb-validations="required" />
                                <label for="password">Password</label>
                                <div class="invalid-feedback" data-sb-feedback="name:required">Password</div>
                            </div>
                            <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Error sending message!</div></div>
                            <!-- Submit Button-->
                            <div class="d-grid">
                                <input type="submit" class="btn btn-primary rounded-pill btn-lg" id="submitButton" value="SUBMIT" name="submit">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="modaldaftar" style="z-index: 99999;" tabindex="-1" role="dialog" aria-labelledby="modaldaftarLabel" aria-hidden="true">
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
        <button type="submit" name="daftar" form="daftarppdb" class="btn btn-success">DAFTAR</button>
      </div>
    </div>
  </div>
</div>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
        <script type="text/javascript">

// Awal Script Untuk Image Galeri otomatis di Home Page
$('#carousel-example').on('slide.bs.carousel', function (e) {
    /*
        CC 2.0 License Iatek LLC 2018 - Attribution required
    */
    var $e = $(e.relatedTarget);
    var idx = $e.index();
    var itemsPerSlide = 5;
    var totalItems = $('.carousel-item').length;
 
    if (idx >= totalItems-(itemsPerSlide-1)) {
        var it = itemsPerSlide - (totalItems - idx);
        for (var i=0; i<it; i++) {
            // append slides to end
            if (e.direction=="left") {
                $('.carousel-item').eq(i).appendTo('.carousel-inner');
            }
            else {
                $('.carousel-item').eq(0).appendTo('.carousel-inner');
            }
        }
    }
});
// Awal Script Untuk Image Galeri otomatis di Home Page
</script>
<!-- Akhiran Kode Java Script -->

<!-- Awal Script Modal Image Galeri -->
<script type="text/javascript">
	// Get the modal
	var modal = document.getElementById("myModal");

	// Get the image and insert it inside the modal - use its "alt" text as a caption
	var img = document.getElementById("myImg");
	var modalImg = document.getElementById("img01");
	var captionText = document.getElementById("caption");
	img.onclick = function(){
	  modal.style.display = "block";
	  modalImg.src = this.src;
	  captionText.innerHTML = this.alt;
	}

	// Get the <span> element that closes the modal
	var span = document.getElementsById("close1")[0];

	// When the user clicks on <span> (x), close the modal
	span.onclick = function() {
	  modal.style.display = "none";
	}
</script>
<script type="text/javascript">
	// Get the modal
	var modal = document.getElementById("myModal2");

	// Get the image and insert it inside the modal - use its "alt" text as a caption
	var img = document.getElementById("myImg2");
	var modalImg = document.getElementById("img02");
	var captionText = document.getElementById("caption2");
	img.onclick = function(){
	  modal.style.display = "block";
	  modalImg.src = this.src;
	  captionText.innerHTML = this.alt;
	}

	// Get the <span> element that closes the modal
	var span = document.getElementsById("close2")[0];

	// When the user clicks on <span> (x), close the modal
	span.onclick = function() {
	  modal.style.display = "none";
	}
</script>
<!-- Akhir Script Modal Image Galeri -->
<!-- AWAL DATE PICKER -->
<script type="text/javascript">
	
</script>
<!-- AKHIR DATE PICKER -->
<!-- AWAL SCRIPT DATATABLES -->
<script>
    $(document).ready(function(){
        $('#tabel-data').DataTable();
    });
</script>
<script>
    $(document).ready(function(){
        $('#tabel-data2').DataTable();
    });
</script>
<!-- Bootstrap 4 -->
<script src="admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="admin/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="admin/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="admin/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="admin/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="admin/plugins/jszip/jszip.min.js"></script>
<script src="admin/plugins/pdfmake/pdfmake.min.js"></script>
<script src="admin/plugins/pdfmake/vfs_fonts.js"></script>
<script src="admin/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="admin/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="admin/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>

<!--Sweet Alert--> 
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.6.9/dist/sweetalert2.all.min.js"></script>
<script>
// function redirect(){
// 	window.location="http://alamatbaru.html";
// }

</script>
<?php if(@$_SESSION['note'] == "success"){ ?>
    <script>
        Swal.fire({
        icon: 'success',
        title: 'Your work has been saved',
        showConfirmButton: false,
        timer: 1500
      });
    </script>
<!-- jangan lupa untuk menambahkan unset agar sweet alert tidak muncul lagi saat di refresh -->
<?php unset($_SESSION['note']); } ?>
<?php if(@$_SESSION['note'] == "error"){ ?>
    <script>
       Swal.fire({
        icon: 'error',
        title: 'Data Tidak Ditemukan',
        showConfirmButton: true
      });
    </script>
<!-- jangan lupa untuk menambahkan unset agar sweet alert tidak muncul lagi saat di refresh -->
<?php unset($_SESSION['note']); } ?>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.6.9/dist/sweetalert2.all.min.js"></script>
<?php if(@$_SESSION['log'] == "success"){ ?>
    <script>
        Swal.fire({
        icon: 'success',
        title: '<?php echo $_SESSION['message']; ?>',
        showConfirmButton: true
      });
    </script>
<!-- jangan lupa untuk menambahkan unset agar sweet alert tidak muncul lagi saat di refresh -->
<?php unset($_SESSION['log']); } ?>
<?php if(@$_SESSION['log'] == "error"){ ?>
    <script>
        Swal.fire({
        icon: 'error',
        title: '<?php echo $_SESSION['message']; ?>',
        showConfirmButton: false,
        timer: 1500
      });
    </script>
<!-- jangan lupa untuk menambahkan unset agar sweet alert tidak muncul lagi saat di refresh -->
<?php unset($_SESSION['log']); } ?>

<?php if(@$_SESSION['gagal'] == "error"){ ?>
    <script>
        Swal.fire({
        icon: 'error',
        title: 'Password Atau Username yang Anda masukan salah!',
        showConfirmButton: false,
        timer: 1500
      });
</script>
<!-- jangan lupa untuk menambahkan unset agar sweet alert tidak muncul lagi saat di refresh -->
<?php unset($_SESSION['gagal']); } ?>

<script>
  $(function () {
    $("#tabel1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": true,"searching": false
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('tabel2').DataTable({
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
