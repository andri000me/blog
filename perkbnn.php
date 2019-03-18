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
    </head>
    <body>
      <!-- Page Preloder -->

        <div id="preloder">
            <div class="loader">
                <img src="img/logobnn.png" alt="">
                <h2>Loading.....</h2>
            </div>
        </div>
       
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
       
        <h3 class="new"><center>Peraturan Kepala BNN</center></h3>
<!-- Search with kategori -->


                     
         <!-- Artikel -->
        <?php include 'pkb.php' ?>
        
<!-- Pagination -->
      <?php ##include 'page.php' ?>
       
       <section class="content">
            <?php 
           if(isset($_GET['page'])) {
            switch($_GET['page']) {
                    
                #Berita
                case 'struktur-organisasi': include'struktur-organisasi.php'; break; 
                case 'visi-misi': include'visimisi.php'; break;
                #Account     
                case 'logout': include'logout.php';break;
                case 'add': include'add.php';break;
                #Home
                case 'home': include'index.php';break;
                    
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
       <script src="js/jquery-2.1.4.min.js"></script>
       <script src="js/magnific-popup.min.js"></script>
       <script src="js/owl.carousel.min.js"></script>
       <script src="js/circle-progress.min.js"></script>
       <script src="js/main.js"></script>
    </body>
</html>