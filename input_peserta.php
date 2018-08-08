<?php 
	/*untuk koneksi ke database*/
  include ('koneksi.php');
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

<script>
		function hanyaAngka(evt) {
		  var charCode = (evt.which) ? evt.which : event.keyCode
		   if (charCode > 31 && (charCode < 48 || charCode > 57))
 
		    return false;
		  return true;
		}
	</script>


		<div style="margin-top:10px; margin-bottom:10px;" class="panel panel-primary">
		  <!-- Default panel contents -->
		  <div class="panel-heading"><span class="glyphicon glyphicon-th-list"></span>&nbsp;&nbsp; PESERTA</div>
		  <div class="panel-body">
			 <a href="index.php"><button class="btn btn-primary"><span class="glyphicon glyphicon-chevron-left"></span> Kembali</button></a>
					   
					   </br></br>
					   
					   <div class="well" style="padding-bottom:1px;">
						   <form class="form-horizontal" role="form" method="post" action="">
						   
								</br>
								<div class="form-group">
									<label class="col-md-2 control-label">NIK</label>
									<div class="col-md-3">
										<input type="text" name="nik" class="form-control" onkeypress="return hanyaAngka(event)" required>
									</div>
									<label class="col-md-2 control-label">TGL. LAHIR</label>
									<div class="col-md-3">
										<input type="date" name="tgl_lahir" class="form-control" required>

									</div>
								</div>
								
								<div class="form-group">
									<label class="col-md-2 control-label">Nama</label>
									<div class="col-md-3">
										<input type="text" name="nama" class="form-control" required>
									</div>
									<label class="col-md-2 control-label">Email</label>
									<div class="col-md-3">
										<input type="text" name="email" class="form-control" required>
									</div>
								</div>
								
								<div class="form-group">
									<label class="col-md-2 control-label">Handphone</label>
									<div class="col-md-3">
										<input type="text" name="hp" class="form-control" onkeypress="return hanyaAngka(event)" required>
									</div>
									<label class="col-md-2 control-label">Organisasi</label>
									<div class="col-md-3">
										<input type="text" name="organisasi" class="form-control" required>
									</div>
								</div>

								<div class="form-group">
									<label class="col-md-2 control-label">Skema Sertifikasi</label>
									<div class="col-md-2">
										<select class="form-control" name="skema_sertifikasi" required="">
											<option selected="selected"></option>
											<option>Programing Madya</option>
											<option>Multimedia Madya</option>
											<option>Jaringan Madya</option>
										  </select>
									</div>
									<label class="col-md-3 control-label">Tempat Uji Kompetensi</label>
									<div class="col-md-3">
										<input type="text" name="tempat_uji_kompetensi" class="form-control" required>
									</div>
								</div>

								<div class="form-group">
									<label class="col-md-2 control-label">TGL. Terbit Sertifikat</label>
									<div class="col-md-3">
										<input type="date" name="tgl_terbit_sertifikat" class="form-control" required>
									</div>
									<label class="col-md-2 control-label">Rekomendasi</label>
									<div class="col-md-3">
										<select class="form-control" name="rekomendasi" required="">
											<option selected="selected"></option>
											<option>Rekomendasi</option>
											<option>Belum Rekomendasi</option>
										  </select>
									</div>
								</div>
			
								</br> 
								<div class="form-group">
									<div class="col-md-2 col-md-offset-2">
										<button type="submit" name="tambah" class="btn btn-primary"><span class="glyphicon glyphicon-ok"></span> Simpan</button>
										<button type="reset" name="reset" class="btn btn-danger"><span class="glyphicon glyphicon-remove"></span> Reset</button>
									</div>
								</div>
								</br>
						   </form>

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

<?php
		include "koneksi.php";
		if (isset($_POST['tambah'])){
			
		$nik        = $_POST['nik'];
		$nama       = $_POST['nama'];
		$tgl_lahir 	= $_POST['tgl_lahir'];    
		$email  	= $_POST['email'];
		$hp 	    = $_POST['hp'];
		$organisasi = $_POST['organisasi'];
		$skema_sertifikasi      = $_POST['skema_sertifikasi'];
		$tempat_uji_kompetensi 	= $_POST['tempat_uji_kompetensi'];    
		$tgl_terbit_sertifikat 	= $_POST['tgl_terbit_sertifikat'];
		$rekomendasi	    	= $_POST['rekomendasi'];

		$query = mysqli_query($con, "insert into peserta (no, nama, nik, hp, email, skema_sertifikasi, tempat_uji_kompetensi, rekomendasi, tgl_terbit_sertifikat, tgl_lahir, organisasi) 
		values (0,'".$nama."','".$nik."','".$hp."','".$email."','".$skema_sertifikasi."','".$tempat_uji_kompetensi."','".$rekomendasi."','".$tgl_terbit_sertifikat."','".$tgl_lahir."','".$organisasi."')");
				
		if($query){
			setcookie("sukses","
					<div class='alert alert-info alert-dismissible' role='alert'>
					  <a href=''> <button type='button' class='close' data-dismiss='alert'><span aria-hidden='true'>&times;</span><span class='sr-only'>Close</span></button></a>
					  <center><strong>Data berhasil tersimpan!</strong></center>
					</div>",time()+5);
					header("location:index.php");
		}
		else{
			setcookie("gagal","
					<div class='alert alert-danger alert-dismissible' role='alert'>
					  <a href=''> <button type='button' class='close' data-dismiss='alert'><span aria-hidden='true'>&times;</span><span class='sr-only'>Close</span></button></a>
					  <center><strong>Data gagal tersimpan!</strong></center>
					</div>",time()+5);
					header("location:index.php");

				}
		}
?>