<?php
include 'login/koneksi.php';

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
if (!$conn) {
	die ('Gagal terhubung MySQL: ' . mysqli_connect_error());	
}
$sql = 'SELECT * FROM berita INNER JOIN kategori ON berita.id_kategori=kategori.id_kategori WHERE id_privasi=1 ORDER BY id DESC LIMIT 6';

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
                              <h5 class="card-title"> '.$row['kategori'].' </h5>
                              <p class="card-text"> '.substr($row['konten'], 0, 50).'.... </p>
                              <a href="detail.php?id='.$id.'" class="btn btn-primary">Read More</a>
                          </div>
                          <div class="card-footer">
                            <small class="text-muted"><img src="icon/png/eye-2x.png"> View : '.$row['visitor'].'</small> &nbsp; &nbsp;
                            <small class="text-muted mr-auto"><img src="icon/png/data-transfer-download-2x.png"> Downloaded : '.$row['downloaded'].'</small>
                          </div>
                      </div>
                      &nbsp;';
}


// Apakah kita perlu menjalankan fungsi mysqli_free_result() ini? baca bagian VII
mysqli_free_result($query);

// Apakah kita perlu menjalankan fungsi mysqli_close() ini? baca bagian VII
mysqli_close($conn);
?>  