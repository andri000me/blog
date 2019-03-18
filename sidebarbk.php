<?php
include 'login/koneksi.php';

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
if (!$conn) {
	die ('Gagal terhubung MySQL: ' . mysqli_connect_error());	
}

$sql = 'SELECT * FROM berita_kegiatan WHERE id_privasi=1 ORDER BY tanggal desc LIMIT 4';
		
$query = mysqli_query($conn, $sql);


if (!$query) {
	die ('SQL Error: ' . mysqli_error($conn));
}

echo ' <div class="col-md-4" id="sidebar">
                        <aside class="widgets">
                        <h3 class="widget-title">Latest Post Berita Kegiatan</h3>

               ';
		
while ($row = mysqli_fetch_array($query))
{
	echo '
                        <ul>
                            <li><a href="detail.php?id='.$row['id'].'">'.substr($row['judul'], 0, 60).'</a></li>
                        </ul>
                        <br>';
}
echo '
	</aside>
                    </div>';

// Apakah kita perlu menjalankan fungsi mysqli_free_result() ini? baca bagian VII
mysqli_free_result($query);

// Apakah kita perlu menjalankan fungsi mysqli_close() ini? baca bagian VII
mysqli_close($conn);
?>  
                       

                       
                       
                       
                       
                       
                       
                       
                        
                        