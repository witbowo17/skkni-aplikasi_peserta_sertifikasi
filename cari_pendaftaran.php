<?php
   /*******************************************
	Meload data dari database ke select option
 
	Dibuat oleh : Danni Moring
	pemrograman : PHP
	******************************************/

   /************* Ini untuk koneksi kedatabase nya **********/
   include ("koneksi.php")
   /*********************************************************/
   
   $option = '<option value=""> - Peserta - </option>';
   
   $biaya = isset($_GET['nik']) ?  $_GET['nik'] :'';
   $sql = "select * from peserta where nik='".$nik."'";
   if($res = $database->query($sql)) {
	  while ($row = $res->fetch_assoc()) {
		 $option .= "<option value='".$row['biaya']."'>".$row['potongan']."</option>";
	  }
   }
   echo $option;
?>