<?php
  try {
$con = mysqli_connect("localhost","root","","rempahtour");
    
  }
  catch(Exception $e) {
    //re-throw exception
    echo $e;
  }
$con = mysqli_connect("localhost","root","","rempahtour");

if (mysqli_connect_errno()){
	echo "Gagal melakukan koneksi ke Database: " . mysqli_connect_error();
}
?>