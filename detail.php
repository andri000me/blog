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
    </head>
    <body id="home">
       
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
       
        <!--   Conten   -->
        <?php

        include 'login/koneksi.php';
        $id = $_GET['id'];
        $conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
        if (!$conn) {
            die ('Gagal terhubung MySQL: ' . mysqli_connect_error());	
        }

        $sql = 'SELECT * FROM berita inner join kategori on berita.id_kategori=kategori.id_kategori where id='.$id.'';
		$query = mysqli_query($conn, $sql);


        if (!$query) {
            die ('SQL Error: ' . mysqli_error($conn));
        }

        echo ' <div class="container">
                <div class="row">
                    <div class="col-md-8" id="site-content">
                    <article class="posts">
            ';
		
        while ($row = mysqli_fetch_array($query)) {
            $i = 'UPDATE berita SET visitor=visitor+1 WHERE id='.$row['id'].'';
            $e = mysqli_query($conn, $i);
            echo '
                    <h3 class="title-post">'.$row['judul'].'</h3>
                         <div class="meta-post">
                        <span><em class="#"></em>'.$row['kategori'].'</span>
                         </div>
                            <br>
                             <div class="content">
                                 <p>'.$row['konten'].'</p>
                                 <center>
                                 <a class="btn btn-primary" href="file/'.$row['gambar'].'" role="button">Download</a>
                                 </center>
                            </div>';
        }
        echo '</div>';
        include 'sidebar.php';
        echo '
                </div>
            </div>';
?>  
        
        <!-- Main Footer -->
      <?php include 'footer.php'; ?>
      
     <!-- Optional JavaScript -->
 <!-- jQuery first, then Popper.js, then Bootstrap JS -->
       <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
       <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
       <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
    </body>
</html>