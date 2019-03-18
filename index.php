<?php
// Menyisipkan file Koneksi ke database
// File ini diperlukan saat berinteraksi dengan database Seperti INSERT, UPDATE, DELETE dan SELECT
require 'login/koneksi.php';

// Menyisipkan file functions.php agar function yang kita buat dapat dipakai dihalaman ini
require 'functions.php';

/**
 * Test
 * echo ip_user();
 * echo "<br/>";
 * echo browser_user();
 * echo "<br/>";
 * echo os_user();
 */

// rekam data user yang sudah mengakses website kita
$ip      = ip_user();
$browser = browser_user();
$os      = os_user();

// Check bila sebelumnya data pengunjung sudah terrekam
if (! isset($_COOKIE['VISITOR'])) {

    // Masa akan direkam kembali
    // Tujuan untuk menghindari merekam pengunjung yang sama dihari yang sama.
    // Cookie akan disimpan selama 24 jam
    $duration = time()+60*60*24;

    // simpan kedalam cookie browser
    setcookie('VISITOR',$browser,$duration);

    // SQL Command atau perintah SQL INSERT
    $sql = "INSERT INTO statistik (ip, os, browser) VALUES ('$ip', '$os', '$browser')";

    // variabel { $db } adalah perwakilan dari koneksi database lihat config.php
    $query = $db->query($sql);
}
?>

<!DOCTYPE html>
<html>
    <head>
	    <title>JDIH BNN</title>
	    <!-- Favicon -->
	    <link href="img/logobnn.png" rel="shortcut icon"/>
	    <link rel="stylesheet" href="css/style.css">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- Bootstrap CSS -->
	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
	    <link rel="stylesheet" href="css/bootstrap4.min.css">
      <!-- autocomplete search -->
      <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
    </head>
    <body id="home"> 
      <!-- Page Preloder -->

        <div id="preloder">
            <div class="loader">
                <img src="img/logobnn.png" alt="">
                <h2>Loading.....</h2>
            </div>
        </div>

        <!-- Atas -->
        <?php include 'atas.php'; ?>
        <!-- navbar -->
        <?php include 'navbar.php'; ?>

        <!-- Banner section -->
       <header id="banner-section">
           <div id="carouselExampleSlidesOnly" class="carousel slide" data="carousel">
               <div class="carousel-inner">
                   <div class="carousel-item active">
                       <img src="img/banner.jpg" alt="Banner" class="d-block w-100">
                   </div>
               </div>
           </div>
       </header> 
       
<!-- Search -->
       <?php include 'cari.php' ?>
                     
         <!-- Artikel -->
        <section id="example1" class="bg-light text-muted py-5">
          <div class="container">
             <div class="row">
                <div class="col">
                  <h3 class="new">Produk Hukum Terbaru</h3>
                </div>
                <div class="col">
                  <h3 class="new">Berita Kegiatan</h3>
                </div>
              </div>
               <div class="row">
                <div class="col-md-6">
                  <?php include 'produk_hukum.php'; ?>
                </div>
                <div class="col-md-6">
                  <?php include 'berita_kegiatan.php'; ?>
                </div>
            </div>
          </div>
        </section>
        
<!-- Pagination -->
      <?php ##include 'page.php' ?>
       
       <section class="content">
            <?php 
           if(isset($_GET['page'])) {
            switch($_GET['page']) {
                    
                #Berita
                case 'struktur-organisasi': include'struktur-organisasi.php'; break; 
                case 'visi-misi': include'visimisi.php'; break;
                    
            }   
            }
            ?>
        </section>
      
<!-- Main Footer -->
<?php include 'footer.php'; ?>
      
      
 <!-- Optional JavaScript -->
 <!-- jQuery first, then Popper.js, then Bootstrap JS -->
       <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
       <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
       <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
    <!-- HighCharts -->
       <script src="js/highcharts.js"></script>
       
       <script src="js/jquery-2.1.4.min.js"></script>
       <script src="js/magnific-popup.min.js"></script>
       <script src="js/owl.carousel.min.js"></script>
       <script src="js/circle-progress.min.js"></script>
       <script src="js/main.js"></script>
       <!-- autocomplete search -->
       <script src="//code.jquery.com/jquery-1.10.2.js"></script>
       <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
    </body>
</html>