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
			<a href="input_peserta.php"><button class="btn btn-primary"><span class="glyphicon glyphicon-pencil"></span>&nbsp; Input Peserta</button></a>
			<a href="backup.php"><button class="btn btn-primary"><span class="glyphicon glyphicon-pencil"></span>&nbsp; Backup Database</button></a>
			
		  <div class="panel-body">
					  
		  <?php include 'koneksi.php'; 
			$sql = mysqli_query($con, "SELECT * FROM Peserta") or die(mysqli_error());
			$no = 1;
			
		  ?>
		  
		<div id="tabel1">
		  <div class="table-responsive">
		  <!-- Table -->
		  <table class="table table-striped table-bordered table-responsive" id="example1" style="width:100%; font-size:90%;">
			<thead>
			  <tr>
			   <th style="font-size:20px; background-color: #4682B4;" colspan="13"> <center>DATA PESERTA SERTIFIKASI</center></th>
			  </tr>
			  <tr style="background-color: #87CEFA;">
				<th>No.</th>
				<th>NIK</th>
				<th>NAMA</th>
				<th>TGL. LAHIR</th>
				<th>EMAIL</th>
				<th>HP</th>
				<th>ORGANISASI</th>
				<th>SKEMA SERTIFIKASI</th>
				<th>TEMPAT UJI KOMPETENSI</th>
				<th>TGL. TERBIT SERTIFIKAT</th>
				<th>REKOMENDASI</th>
				<th>KELOLA</th>
			  </tr>
			</thead>
			<tbody>
			  <?php 
				  while ($row = mysqli_fetch_array($sql))
				  {
					   ?>
					  <tr>
						<td><?php echo $row['no']; ?></td>
						<td><?php echo $row['nik']; ?></td>
						<td><?php echo $row['nama']; ?></td>
						<td><?php echo $row['tgl_lahir']; ?></td>
						<td><?php echo $row['email']; ?></td>
						<td><?php echo $row['hp']; ?></td>
						<td><?php echo $row['organisasi']; ?></td>
						<td><?php echo $row['skema_sertifikasi']; ?></td>
						<td><?php echo $row['tempat_uji_kompetensi']; ?></td>
						<td><?php echo $row['tgl_terbit_sertifikat']; ?></td>
						<td><?php echo $row['rekomendasi']; ?></td>
						<td width="11%">
							<a href="edit.php?id=<?php echo $row['nik'] ?>">Edit</a> ||
   							<a href="" onClick='return confirm("Apakah Ada yakin menghapus?")'>Hapus</a>
						  </td>
					  </tr>

					  <?php 
						$no++;
				}
			   ?>

		  </tbody>
		  </table>
		  </div>
		</div>

		</div>

		<div class="jumbotron">
		  
		</div>

</div>
	<script src="js/jquery-1.11.2.min.js"></script>
	<script src="bootstrap-css/js/bootstrap.min.js"></script>
	<script src="media/js/jquery.dataTables.min.js"></script>
	<script src="media/js/dataTables.bootstrap.js"></script>
	<script type="text/javascript">
	  $(document).ready(function () {
		$("#example1").DataTable();
	  });
	</script>

</body>
</html>
