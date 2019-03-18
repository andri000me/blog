
<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Data Produk Hukum</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Kategori</th>
                            <th>Judul</th>
                            <th>Isi Berita</th>
                            <th>Privasi</th>
<!--                            <th>Action</th>-->
                        </tr>
                    </thead>
                    <tbody>
                       <?php
                            $qu=mysqli_query($con,"SELECT * FROM berita INNER JOIN kategori ON berita.id_kategori=kategori.id_kategori INNER JOIN privasi ON berita.id_privasi=privasi.id_privasi order by id desc");
                            while($has=mysqli_fetch_array($qu))
                            {
                                echo "
                                <tr>
                                    <td>".$has["kategori"]."</td>
                                    <td>".substr(strip_tags($has[4]),0,30)."....</td>
                                    <td>".substr(strip_tags($has[5]),0,30)."....</td>
                                    <td>".$has["tampilan"]."</td>";
//                                    <td style='text-align:center'>
//                        <a href='index.php?page=berita&id=".$has["id"]."'><span data-placement='top' data-toggle='tooltip' title='Edit'><button class='btn btn-primary btn-xs' data-title='Edit' data-toggle='modal' data-target='#edit' ><span class='glyphicon glyphicon-pencil'></span></button><span></a>
//                        
//                        <span data-placement='top' data-toggle='tooltip' title='Delete'><button onclick='datadel(".$has["id"].",&#39;list_berita&#39;)' class='btn btn-danger btn-xs' data-title='Delete' data-toggle='modal' data-target='#myModal' ><span class='glyphicon glyphicon-trash'></span></button><span>
//                                    </td>
                         echo"  </tr>
                                ";
                            }
                       ?>
                    </tbody>
                </table>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </div>
    <!-- /.col -->
<script>
    function datadel(value,jenis){
       document.getElementById('mylink').href="hapus.php?del="+value+"&data="+jenis;
    }
</script>
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Data akan terhapus !</h4>
            </div>
            <div class="modal-body">
                Anda yakin ingin menghapus data ini ?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <a id="mylink" href=""><button type="button" class="btn btn-primary">Delete Data</button></a>
            </div>
        </div>
    </div>
</div>
</div>
<!-- /.row -->