
<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Bagian css -->
	<link rel="stylesheet" href="css/style.css">
        <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <link rel="stylesheet" href="css/bootstrap4.min.css">
	<script src="js/jquery-2.1.4.min.js"></script>
	<script src="js/highcharts.js"></script>
	<script>
		var chart1; 
		$(document).ready(function() {
			  chart1 = new Highcharts.Chart({
				 chart: {
					renderTo: 'mygraph',
					type: 'column'
				 },   
				 title: {
					text: 'Internet Browser Statistics '
				 },
				 xAxis: {
					categories: ['Browser']
				 },
				 yAxis: {
					title: {
					   text: 'Total Browser Usage'
					}
				 },
					  series:             
					[
						<?php 
						$con=mysqli_connect("localhost","root","","db_carousel");
						$sql   = "SELECT browser  FROM statistik";
						$query = mysqli_query( $con, $sql )  or die(mysqli_error());
						while( $temp = mysqli_fetch_array( $query ) )
						{
							$trendbrowser=$temp['browser'];                     
							$sql_total   = "SELECT id_statistik FROM statistik WHERE browser='$trendbrowser'";        
							$query_total = mysqli_query($con,$sql_total ) or die(mysql_error());
							while( $data = mysqli_fetch_array( $query_total ) )
							{
								$total = $data['id_statistik'];                 
							}             
						?>
							{
							  name: '<?php echo $trendbrowser; ?>',
							  data: [<?php echo $total; ?>]
							},
							<?php 
						} 	?>
						]
			  });
		   });	
	</script>
</head>
<body>
<!--- Bagian Judul-->	
    <div class="col-lg-4">
        <div class="card bg-light card-form">
		    <div class="panel panel-primary">
			    <div class="panel-heading">The Graph of Browser Trends 2018</div>
				    <div class="panel-body">
					    <div id ="mygraph"></div>
				    </div>
		    </div>
        </div>
    </div>
</body>
</html>
