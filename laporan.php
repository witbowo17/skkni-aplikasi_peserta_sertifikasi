<?php 
  include 'koneksi.php';
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Aplikasi Data Peserta Sertifikasi</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap-css/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css-me/mycss.css">
  <link rel="stylesheet" href="media/css/dataTables.bootstrap.css">
</head>
<body style="background-color:blue;">

<div class="container-fluid">
  <div style="margin-bottom:0px;" class="jumbotron">
	<h1 style="text-align:center;">APLIKASI DATA PESERTA SERTIFIKASI</h1> 
  </div>
  <nav style="margin-bottom:5px;" class="navbar navbar-inverse">
  <div class="container-fluid">
	<div class="navbar-header">
	  <a class="navbar-brand" href="index.php">SKKNI</a>
	</div>
	<ul class="nav navbar-nav">
	  <li class="active"><a href="index.php">PESERTA</a></li>
	  <li class="active"><a href="laporan.php">LAPORAN</a></li>
	</ul>
  </div>
</nav>

 		<?php
			if (isset($_COOKIE['sukses']))
			 {
				 echo $_COOKIE['sukses'];
			 }
				 elseif (isset($_COOKIE['gagal']))
			 {
				 echo $_COOKIE['gagal'];
			 } 
		?>

		<div style="margin-top:10px; margin-bottom:10px;" class="panel panel-primary">
		  <!-- Default panel contents -->
		  <div class="panel-heading"><span class="glyphicon glyphicon-th-list"></span>&nbsp;&nbsp; PESERTA</div>
		  <div class="panel-body">
		  <a href="index.php"><button class="btn btn-primary"><span class="glyphicon glyphicon-pencil"></span>&nbsp; KEMBALI</button></a>
		  
		  <?php include 'koneksi.php'; 
			$sql = mysqli_query($con, "SELECT skema_sertifikasi, COUNT(*) AS Jumlah FROM peserta GROUP BY skema_sertifikasi") or die(mysqli_error()); ?>
		  
		<div id="tabel1">
		  <div class="table-responsive">
		  <!-- Table -->
		  <table class="table table-striped table-bordered table-responsive" id="example1" style="width:100%; font-size:90%;">
			<thead>
			  <tr>
			   <th style="font-size:20px; background-color: #4682B4;" colspan="13"> <center>LAPORAN DATA SKEMA SERTIFIKASI</center></th>
			  </tr>
			  <tr style="background-color: #87CEFA;">
				
				<th>skema_sertifikasi</th>
				<th>Jumlah</th>
			  </tr>
			</thead>
			<tbody>
			  <?php 
				  while ($row = mysqli_fetch_array($sql))
				  {
					   ?>
					  <tr>
						
						<td><?php echo $row['skema_sertifikasi']; ?></td>
						<td><?php echo $row['Jumlah']; ?></td>>
					  </tr>

					  <?php 
				}
			   ?>

		  </tbody>
		  </table>

</div>
</div>
</div>
</div>
</body>
</html>