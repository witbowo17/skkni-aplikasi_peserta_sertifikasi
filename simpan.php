<?php
include "konek.php";

$query = "insert into siswa

set

nis = '$_POST[nis]',

nama = '$_POST[nama]',

kelas = '$_POST[kelas]'";

if( $mysqli->query($query) ) {

header("location:view.php");

}else{

echo "Data tidak tersimpan";

}

$mysqli->close();

?>