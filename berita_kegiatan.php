<?php
include 'login/koneksi.php';

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
if (!$conn) {
  die ('Gagal terhubung MySQL: ' . mysqli_connect_error()); 
}
$sql = 'SELECT * FROM berita_kegiatan WHERE id_privasi=1 ORDER BY id DESC LIMIT 6';
    
$query = mysqli_query($conn, $sql);
$page = (isset($_GET['page']))? $_GET['page'] : 1;


if (!$query) {
  die ('SQL Error: ' . mysqli_error($conn));
}

while ($row = mysqli_fetch_array($query)) {
    $id = $row['id'];
  echo '
                
                      <div class="card">
                          <div class="card-header">
                              '.substr($row['judul'],0, 60).'
                          </div>
                          <div class="card-body">
                              <h5 class="card-title"> '.$row['tanggal'].' </h5>
                              <p class="card-text"> '.substr($row['konten'], 0, 50).'.... </p>
                              <a href="berita.php?id='.$id.'" class="btn btn-primary">Read More</a>
                          </div>
                          <div class="card-footer">
                            <small class="text-muted"><img src="icon/png/eye-2x.png"> View : '.$row['visitor'].'</small> &nbsp; &nbsp;
                          </div>
                      </div>
                      &nbsp;';
}


// Apakah kita perlu menjalankan fungsi mysqli_free_result() ini? baca bagian VII
mysqli_free_result($query);

// Apakah kita perlu menjalankan fungsi mysqli_close() ini? baca bagian VII
mysqli_close($conn);
?>  