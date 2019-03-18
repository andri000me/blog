
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        
                 <div class="container">
                  <a class="navbar-brand" href="index.php">
                      <img src="icon/png/home-2x.png" alt="" >
                  </a>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>

                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav mr-auto">
   
                    <li class="nav-item">
                        <a href="index.php" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Profile
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="visimisi.php">Visi dan Misi</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="struktur-organisasi.php">Struktur Organisasi</a>
                        </div>
                    </li>
                <!--
                    <li class="nav-item">
                        <a href="#create-head-section" class="nav-link">Create</a>
                    </li>
                    <li class="nav-item">
                        <a href="#team-head-section" class="nav-link">Team</a>
                    </li>
                -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Regulasi
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="narkoba.php">Undang-undang narkotika</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="perpres.php">Peraturan Presiden</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="perkbnn.php">Peraturan Kepala BNN</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="lainnya.php">Peraturan Lainnya</a>
                            <div class="dropdown-divider"></div>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a href="kontak.php" class="nav-link">Hubungi Kami</a>
                    </li>

                   </ul>
<!--
                    <form class="form-inline my-2 my-lg-0" method="post" action="search.php" id="form">
                        <input type="text" class="from-control mr-sm-2" aria-label="search" name="search">
                        <button class="btn btn-outline-primary my-2 my-sm-0" type="submit" value="search">Search</button>
                    </form>
-->
                 
                  </div>
              </div>
            </nav>

    
    
<?php
/**
  if(isset($_POST['submit'])){
  if(isset($_GET['go'])){
  if(preg_match("/^[  a-zA-Z]+/", $_POST['name'])){
  $name=$_POST['name'];
  //connect  to the database
  $db=mysql_connect  ("localhost", "root",  "") or die ('I cannot connect to the database  because: ' . mysql_error());
  //-select  the database to use
  $mydb=mysql_select_db("db_carousel");
  //-query  the database table
  $sql="SELECT  id, judul, konten FROM berita WHERE judul LIKE '%" . $judul .  "%' OR konten LIKE '%" . $konten ."%'";
  //-run  the query against the mysql query function
  $result=mysql_query($sql);
  //-create  while loop and loop through result set
  while($row=mysql_fetch_array($result)){
          $judul  =$row['judul'];
          $konten=$row['konten'];
          $id=$row['id'];
  //-display the result of the array
  echo "<ul>\n";
  echo "<li>" . "<a  href=\"search.php?id=$id\">"   .$judul . " " . $konten .  "</a></li>\n";
  echo "</ul>";
  }
  }
  else{
  echo  "<p>Please enter a search query</p>";
  }
  }
  }
  **/
?>