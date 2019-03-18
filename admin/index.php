<?php
extract($_POST);
$con=mysqli_connect('localhost','root','','db_carousel');

?>
    <!DOCTYPE html>
    <html>

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Dashboard</title>
        
	    <!-- Favicon -->
	    <link href="../img/logobnn.png" rel="shortcut icon"/>

        <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet">
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <!-- Bootstrap 3.3.5 -->
        <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="dist/css/AdminLTE.min.css">

        <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
        
        <link rel="stylesheet" type="text/css" href="http://www.shieldui.com/shared/components/latest/css/light-bootstrap/all.min.css" />
        <link id="gridcss" rel="stylesheet" type="text/css" href="http://www.shieldui.com/shared/components/latest/css/dark-bootstrap/all.min.css" />

        <script type="text/javascript" src="http://www.shieldui.com/shared/components/latest/js/shieldui-all.min.js"></script>
        <script type="text/javascript" src="http://www.prepbootstrap.com/Content/js/gridData.js"></script>
        
        <!-- Statistik -->
        <script src="dist/js/highcharts.js"></script>
        <script src="dist/js/exporting.js"></script>


        <!--jquery-->
        <script src="plugins/jQuery/jQuery-2.1.4.min.js"></script>

        <link rel="stylesheet" href="dist/css/summernote.css">
        <script src="dist/js/summernote.js"></script>

    </head>

    <body class="hold-transition skin-blue sidebar-mini">
        <div class="wrapper">
            <header class="main-header">
                <!-- Logo -->
                <a href="#" class="logo">
                    <!-- mini logo for sidebar mini 50x50 pixels -->
                    <span class="logo-mini"><b>A</b>LT</span>
                    <!-- logo for regular state and mobile devices -->
                    <span class="logo-lg"><b>Administrator</b></span>
                </a>
                <!-- Header Navbar: style can be found in header.less -->
                <nav class="navbar navbar-static-top" role="navigation">
                   <ul class="nav navbar-nav navbar-right navbar-user">
                   
                      
                        <a href="logout.php"><button type="button" class="btn btn-danger btn-lg">
                              Logout
                          </button></a>
                      
                    
                </ul>
                    <!-- Sidebar toggle button-->
                    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                        <span class="glyphicon glyphicon-menu-hamburger"></span>
                    </a>
                </nav>
            </header>
            <!-- Left side column. contains the logo and sidebar -->
            <?php include'menu.php'; ?>
                <!-- Content Wrapper. Contains page content -->
                <div class="content-wrapper">
                    <!-- Content Header (Page header) -->
<!--                    <div id="container" style="min-width: 300px; height: 400px; margin: 0 auto"></div>-->
                    
                <!--    <script type="text/javascript">

                       // Highcharts.chart('container', {
//                            chart: {
//                                type: 'column'
//                            },
//                            title: {
//                                text: 'Statistik Pengunjung'
//                            },
//                            subtitle: {
//                                text: 'Source: <a href="http://en.wikipedia.org/wiki/List_of_cities_proper_by_population">Wikipedia</a>'
//                            },
//                            xAxis: {
//                                type: 'category',
//                                labels: {
//                                    rotation: -45,
//                                        style: {
//                                            fontSize: '13px',
//                                            fontFamily: 'Verdana, sans-serif'
//                                        }
//                                }
//                            },
//                            yAxis: {
//                                min: 0,
//                                title: {
//                                    text: 'Banyaknya Akses'
//                                }
//                            },
//                            legend: {
//                                enabled: false
//                            },
//                            tooltip: {
//                                pointFormat: 'Population in 2008: <b>{point.y:.1f} millions</b>'
//                            },
//                            series: [{
//                                name: 'Population',
//                                data: [
//                                    ['Januari', 23.7],
//                                    ['Februari', 16.1],
//                                    ['Maret', 14.2],
//                                    ['April', 14.0],
//                                    ['Mei', 12.5],
//                                    ['Juni', 12.1],
//                                    ['Juli', 11.8],
//                                    ['Agustus', 11.7],
//                                    ['September', 11.1],
//                                    ['Oktober', 11.1],
//                                    ['November', 10.5],
//                                    ['Desember', 10.4],
//                                ],
//                            dataLabels: {
//                                enabled: true,
//                                rotation: -90,
//                                color: '#FFFFFF',
//                                align: 'right',
//                                format: '{point.y:.1f}', // one decimal
//                                y: 10, // 10 pixels down from the top
//                                style: {
//                                    fontSize: '13px',
//                                    fontFamily: 'Verdana, sans-serif'
//                                }
//                            }
//                        }]
//                    });
		</script>

                    <!-- Main content -->
                    <section class="content">
                        <?php 
                if(isset($_GET['page']))
                {
                 switch($_GET['page'])
                {
                    #Produk Hukum
                    case 'produk_hukum': include'form_b.php'; break; 
                    case 'list_produk_hukum': include'list_produk_hukum.php';$order=3; break;
                    #Kegiatan Berita
                    case 'berita': include'berita.php'; break;
                    case 'list_berita': include 'list_berita.php';$order=3; break;
                    #Account     
                    case 'edit': include'edit.php';break;
                    case 'add': include 'add.php';break;
                    #Home
                    case 'home': include'index.php';break;
                    
                }   
                }
            ?>
                    </section>
                </div>
                <!-- /.content-wrapper -->
                <footer class="main-footer">
                    <div class="pull-right hidden-xs">
                        <b>Version</b> 2.3.0
                    </div>
                    <strong>Copyright &copy; 2015<a href="#">Detailed Technology Center</a>.</strong> All rights reserved.
                </footer>
                <div class="control-sidebar-bg"></div>
        </div>
        <!-- ./wrapper -->
        <!-- Bootstrap 3.3.5 -->
       
        <script src="../bootstrap/js/bootstrap.min.js"></script>
        <script>
            $(document).ready(function () {
                $('.konten').summernote({
                    height: 300, // set editor height
                    minHeight: null, // set minimum height of editor
                    maxHeight: null, // set maximum height of editor
                    focus: true, // set focus to editable area after initializing summernote
                    toolbar: [
                        ['style', ['style']],
                        ['font', ['bold', 'italic', 'underline', 'clear']],
                        ['fontname', ['fontname']],
                        ['color', ['color']],
                        ['para', ['ul', 'ol', 'paragraph']],
                        ['height', ['height']],
                        ['table', ['table']],
                        ['insert', ['link', 'hr']],
                        ['view', ['fullscreen', 'codeview']]
                    ],
                    
					onPaste: function (e) {
                        var bufferText = ((e.originalEvent || e).clipboardData || window.clipboardData).getData('Text');
                        e.preventDefault();
                        setTimeout(function () {
                            document.execCommand('insertText', false, bufferText);
                        }, 10);
					 }
					
					
					
                });
				
				
            });
        </script>
        <script src="plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="plugins/datatables/dataTables.bootstrap.min.js"></script>
        <script>
            $(function () {
                $("#example1").DataTable({
                    "order": [[<?php echo $order; ?>, "desc"]]
                });
            });
        </script>
        <script>
            $.widget.bridge('uibutton', $.ui.button);
        </script>
        <!-- Sparkline -->
        <script src="plugins/sparkline/jquery.sparkline.min.js"></script>
        <!-- jvectormap -->
        <script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
        <script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
        <!-- jQuery Knob Chart -->
        <script src="plugins/knob/jquery.knob.js"></script>
        <!-- daterangepicker -->
        <!--<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js"></script>-->
        <script src="plugins/daterangepicker/daterangepicker.js"></script>
        <!-- datepicker -->
        <script src="plugins/datepicker/bootstrap-datepicker.js"></script>
        <!-- Slimscroll -->
        <script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
        <!-- FastClick -->
        <script src="plugins/fastclick/fastclick.min.js"></script>
        <!-- AdminLTE App -->
        <script src="dist/js/app.min.js"></script>
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src="dist/js/pages/dashboard.js"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="dist/js/demo.js"></script>
        <script>
            $('#tgl_agenda').datepicker({
                format: 'dd-mm-yyyy'
            })
        </script>
    </body>
    </html>