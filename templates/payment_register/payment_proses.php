<?php
// Load file koneksi.php
include "koneksi.php";
// 

$nama = $_POST['nama'];
$username = $_POST['username'];
$email = $_POST['email'];
$notelp = $_POST['notelp'];
$password = $_POST['password'];
$biaya = 100000;
$order_id= rand();
$transaction_status= 1;
$transaction_id="";
// menginput data ke database
mysqli_query($koneksi,"insert into peserta  values('','$nama','$username','$email','$notelp','$password','$biaya','$order_id','$transaction_status','$transaction_id')");
 
// mengalihkan halaman kembali ke index.php
header("location:./payment/examples/snap/checkout-process-simple-version.php?order_id=$order_id");


?>


