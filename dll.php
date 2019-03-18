<?php
include 'login/koneksi.php';

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
if (!$conn) {
	die ('Gagal terhubung MySQL: ' . mysqli_connect_error());	
}

$sql = 'SELECT * FROM berita WHERE id_kategori= 4 AND id_privasi=1';
		
$query = mysqli_query($conn, $sql);
$page = (isset($_GET['page']))? $_GET['page'] : 1;


if (!$query) {
	die ('SQL Error: ' . mysqli_error($conn));
}

echo ' <section id="example1" class="bg-light text-muted py-5">
              <div class="container">
               <div class="row">
               ';
		
while ($row = mysqli_fetch_array($query))
{
    $id = $row['id'];
    $i = 'UPDATE berita SET visitor=visitor+1 WHERE id='.$row['id'].'';
    $e = mysqli_query($conn, $i);
	echo '
                <div class="col-md-6">
                      <div class="card">
                          <div class="card-header">
                              '.substr($row['judul'],0, 60).'
                          </div>
                          <div class="card-body">
                              <h5 class="card-title"> '.$row['tanggal'].' </h5>
                              <p class="card-text"> '.substr($row['konten'], 0, 50).'.... </p>
                              <a href="detail.php?id='.$id.'" class="btn btn-primary">Read More</a>
                          </div>
                          <div class="card-footer">
                            <small class="text-muted"><img src="icon/png/eye-2x.png"> View : '.$row['visitor'].'</small> &nbsp; &nbsp;
                            <small class="text-muted mr-auto"><img src="icon/png/data-transfer-download-2x.png"> Downloaded : '.$row['downloaded'].'</small>
                          </div>
                      </div>
                   </div>';
}
echo '
	</div>
            </div>
            </section>';



// Apakah kita perlu menjalankan fungsi mysqli_free_result() ini? baca bagian VII
mysqli_free_result($query);

// Apakah kita perlu menjalankan fungsi mysqli_close() ini? baca bagian VII
mysqli_close($conn);
?>  