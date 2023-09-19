<?php
session_start();
include "../../../db/config.php";

$nama = $_POST['nama'];
$username = $_POST['username'];
$email = $_POST['email'];
$notelp = $_POST['notelp'];
$password = $_POST['password'];
$biaya = 100000;
$order_id= rand();
$transaction_status= 1;
$transaction_id="";

mysqli_query($con,"insert into user values('','$nama','$username','$email','$notelp','$password','$biaya','$order_id','$transaction_status','$transaction_id')");
 
$_SESSION['username'] = $username;
$_SESSION['order_id'] = $order_id;
header("location:../../../payment/examples/snap/checkout-process-simple-version.php?order_id=$order_id");


?>


