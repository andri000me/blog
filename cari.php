<section id="search-section">
           <div class="container">
               <div class="row">
                   <div class="col-lg-4">
                        <div class="card bg-light card-form">
                                <div class="card">
                                  <div class="card-header">
                                   <div class="cat-produk">
                                    Kategori Produk Hukum
                                    </div>
                                  </div>
                                  <ul class="list-group list-group-flush">
                                    <li class="list-group-item"><a href="narkoba.php">Undang-Undang Narkotika</a></li>
                                    <li class="list-group-item"><a href="perpres.php">Peraturan Presiden</a></li>
                                    <li class="list-group-item"><a href="perkbnn.php">Peraturan Kepala BNN</a></li>
                                    <li class="list-group-item"><a href="lainnya.php">Peraturan Lainnya</a></li>
                                  </ul>
                                </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-4">
                        <div class="card bg-light card-form">
                            <div class="card-body">
                                <h3>Cari Produk Hukum</h3>
                                <br>
                                <form method="post" action="search.php" id="form" onSubmit="validasi()">
                                    <div class="form-group align-center">
                                        <input name="search" id="search" type="text" class="form-control form-control-lg" placeholder="Nomor" aria-label="search">
                                        <br>
                                        <input name="search" id="search" type="text" class="form-control form-control-lg" placeholder="Tahun" aria-label="search">
                                        <br>
                                        <input name="search" id="search" type="text" class="form-control form-control-lg" placeholder="Tentang" aria-label="search">
                                        <br>
                                        <div class="form-group">
                                            <select id="idkategori" class="form-control" name="kategori" method="post">
                                                <option value="show-all" selected="selected">Regulasi</option>
                                                <option value="1">Undang-Undang Narkotika</option>
                                                <option value="2">Peraturan Presiden</option>
                                                <option value="3">Peraturan Kepala BNN</option>
                                                <option value="4">Peraturan Lainnya</option>
                                            </select>
                                        </div>
                                    </div>
                                    <button class="btn btn-outline-primary btn-block" type="submit" value="search" name="kategori">Cari</button>
                                </form>
                            </div>
                        </div>
                    </div>
<!-- Graph -->
                   
                    
               </div>
               <script type="text/javascript">
               $(document).ready(function() {
                   $("#idkategori").change(function() {
                       //alret($(this).find("option:selected").text()+' clicked!');
                       var terpilih =$(this).find("option:selected").text();
                       $("#form :input[name='kategori']").val(terpilih);
                   });
               });
               </script>
           </div>
       </section>