<?php
date_default_timezone_set('Asia/Jakarta');
if(isset($_POST['save']))
{    
    
    $getId=mysqli_fetch_row(mysqli_query($con,"select max(id) from berita, kategori"));
    
    if(!empty($_FILES['foto']['tmp_name']))
    { 
        $ext=strtolower(substr($_FILES['foto']['name'],-3));
        if($ext=='pdf')
            $ext=".pdf";
        else
            $ext=".png";
        move_uploaded_file($_FILES['foto']['tmp_name'], "../img/" . basename(($getId[0]+1).$ext));
    }
    
    mysqli_query($con,"insert into berita values('', '$id_kategori','".date('Y-m-d')."','".($getId[0]+1).$ext."','$judul','$konten','$id_privasi', '$visitor', '$downloaded')");
    
      echo "
    <script>
    location.assign('index.php?page=produk_hukum&ps=true1');
    </script>
    ";
}
elseif(isset($_POST['update']))
{
    if(!empty($_FILES['foto']['tmp_name']))
    { 
        unlink("../img/$gambar");
        $ext=strtolower(substr($_FILES['foto']['name'],-3));
        if($ext=='pdf')
            $ext=".pdf";
        else
            $ext=".png";
        move_uploaded_file($_FILES['foto']['tmp_name'], "../img/" . basename(($_GET['id']).$ext));
        
        mysqli_query($con,"update berita set id_kategori='$id_kategori', gambar='".$_GET['id'].$ext."', judul='$judul', konten='$konten', id_privasi'$id_privasi', '$visitor', '$downloaded', where id='".$_GET['id']."'");
    }
    else
        mysqli_query($con,"update berita set id_kategori='$id_kategori', judul='$judul', konten='$konten', where id='".$_GET['id']."'");
    
    echo "
    <script>
    location.assign('index.php?page=produk_hukum&ps=true2');
    </script>
    ";
}

/*pesan berhasil update*/
if(isset($_GET['ps'])=='true2')
    echo "<div class='alert alert-success' role='alert'>Data Berhasil Terupdate</div>";
elseif(isset($_GET['ps'])=='true1')
    echo "<div class='alert alert-success' role='alert'>Data Berhasil Terimpan</div>";

if(isset($_GET['id']))
$data=mysqli_fetch_row(mysqli_query($con,"select * from berita, kategori where id='".$_GET['id']."'"));

?>
    <style>
        #image-holder {
            margin-top: 8px;
        }
        
        #image-holder img {
            border: 8px solid #DDD;
            max-width:100%;
        }
    </style>
    <div class="row">
        <div class="col-md-12">
            <div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="box-title">Form Input Produk Hukum</h3>
                </div>
                <form class="form-horizontal" method="post" enctype="multipart/form-data">
                   <input type="hidden" name="id" value="<?php echo isset($_GET['id'])?$_GET['id']:''; ?>">
                   <input type="hidden" name="gambar" value="<?php echo isset($data[3])?$data[3]:''; ?>">
                    <div class="box-body">

                        <div class="form-group">
                            <label for="dua" class="col-sm-2 control-label">Tanggal</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="dua" value="<?php echo isset($_GET['id'])?$data[2]:date('d-m-Y'); ?>" disabled>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="tiga" class="col-sm-2 control-label">Judul Produk Hukum</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" placeholder="Judul" name="judul" id="tiga" value="<?php echo isset($data[4])?$data[4]:''; ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="tiga" class="col-sm-2 control-label">Isi Produk Hukum</label>
                            <div class="col-sm-10">
                                <textarea class="form-control konten" placeholder="Isi Berita" name="konten"><?php echo isset($data[5])?$data[5]:''; ?></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="tiga" class="col-sm-2 control-label">Kategori</label>
                            <div class="col-sm-10">
                            <select class="form-control" name="id_kategori" name="select">
                                <option value="belum milih" selected>- Pilih Kategori -</option>
                                <option value='1'>Undang-Undang Narkoba</option>
                                <option value='2'>Peraturan Presiden</option>
                                <option value='3'>Peraturan Kepala BNN</option>
                                <option value='4'>Peraturan Lainnya</option>
                                <?php echo isset($_GET['select'])?$data[1]:''; ?>
                              </select>
                            </div>
                        </div>
                        <!--input file-->
                        <div class="form-group">
                            <label for="tiga" class="col-sm-2 control-label">File</label>
                            <div class="col-sm-10">
                                <input type="file" accept="image/*" name="foto" class="form-control" id="foto">
                                <div id="image-holder">
                                   <?php
                                    if(isset($_GET['id']))
                                        echo "<img src='../img/$data[3].'?rand='".rand()."' alt=''>";
                                    ?>
                                </div>
                                <script>
                                    $("#foto").on('change', function () {

                                        //Get count of selected files
                                        var countFiles = $(this)[0].files.length;

                                        var imgPath = $(this)[0].value;
                                        var extn = imgPath.substring(imgPath.lastIndexOf('.') + 1).toLowerCase();
                                        var image_holder = $("#image-holder");
                                        image_holder.empty();

                                        var x = document.getElementById("foto");
                                        var file = x.files[0];

                                        if (extn == "png" || extn == "jpg" || extn == "jpeg" || extn == "pdf") {
                                            if (typeof (FileReader) != "undefined") {

                                                //loop for each file selected for uploaded.
                                                for (var i = 0; i < countFiles; i++) {

                                                    var reader = new FileReader();
                                                    reader.onload = function (e) {
                                                        $("<img />", {
                                                            "src": e.target.result,
                                                            "class": "thumb-image"
                                                        }).appendTo(image_holder);
                                                    }

                                                    image_holder.show();
                                                    reader.readAsDataURL($(this)[0].files[i]);
                                                }

                                            } else {
                                                alert("This browser does not support FileReader.");
                                            }
                                        } else {
                                            alert("hanya boleh foto bertype PNG, JPG dan PDF");
                                            var control = $("#foto");
                                            control.replaceWith(control.val('').clone(true));
                                        }
                                    });
                                </script>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="tiga" class="col-sm-2 control-label">Privasi Berita</label>
                            <div class="col-sm-10">
                            <select class="form-control" name="id_privasi" name="select">
                                <option value="belum milih" selected>- Pilih Privasi -</option>
                                <option value='1'>Umum</option>
                                <option value='2'>Private</option>
                                <?php echo isset($_GET['select'])?$data[6]:''; ?>
                              </select>
                            </div>
                        </div>
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">
                        <input onclick="change_url()" type="submit" class="btn btn-info pull-right" value="Save" name="<?php echo isset($_GET['id'])?'update':'save'; ?>">
                    </div>
                    <!-- /.box-footer -->
                </form>
            </div>
        </div>
        <!--/.col (right) -->
    </div>
    <!-- /.row -->