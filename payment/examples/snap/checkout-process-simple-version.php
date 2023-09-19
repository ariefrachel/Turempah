<?php
// This is just for very basic implementation reference, in production, you should validate the incoming requests and implement your backend more securely.
// Please refer to this docs for snap popup:
// https://docs.midtrans.com/en/snap/integration-guide?id=integration-steps-overview

namespace Midtrans;

session_start();

// Periksa apakah pengguna telah login
if (!isset($_SESSION['username'])) {
    // Jika tidak ada sesi username, arahkan pengguna ke halaman login atau halaman lain sesuai kebijakan Anda.
    header("Location: login.php");
    exit;
}

require_once dirname(__FILE__) . '/../../Midtrans.php';
// Set Your server key
// can find in Merchant Portal -> Settings -> Access keys
Config::$serverKey = 'Mid-server-H0EwJvfMnHUCL0c2ftTM91Mu';
Config::$clientKey = 'Mid-client-0Z1ELBB_2MO0Mhzf';

// non-relevant function only used for demo/example purpose
printExampleWarningMessage();

// Uncomment for production environment
Config::$isProduction = true;
Config::$isSanitized = Config::$is3ds = true;

// Required

include "../../../db/config.php";
$order_id = $_GET['order_id'];

  // Query untuk menampilkan data siswa berdasarkan NIS yang dikirim
  $query = "SELECT * FROM user WHERE order_id='".$order_id."'";
  $sql = mysqli_query($con, $query);  // Eksekusi/Jalankan query dari variabel $query
  $data = mysqli_fetch_array($sql);

  $nama = $data['nama'];
    $email = $data['email'];

    $biaya =$data['biaya'];
$transaction_details = array(
    'order_id' => $order_id,
    'gross_amount' =>  $biaya, // no decimal allowed for creditcard
);
// Optional
$item_details = array (
    array(
        'id' => 'a1',
        'price' => $biaya,
        'quantity' => 1,
        'name' => "REGISTRASI AKSES VIRTUAL TOUR"
    ),
  );
// Optional
$customer_details = array(
    'first_name'    => "$nama",
    'last_name'     => "",
    'email'         => "$email",
    'phone'         => ""
);
// Fill transaction details
$transaction = array(
    'transaction_details' => $transaction_details,
    'customer_details' => $customer_details,
    'item_details' => $item_details,
);

$snap_token = '';
try {
    $snap_token = Snap::getSnapToken($transaction);
}
catch (\Exception $e) {
    echo $e->getMessage();
}


function printExampleWarningMessage() {
    if (strpos(Config::$serverKey, 'your ') != false ) {
        echo "<code>";
        echo "<h4>Please set your server key from sandbox</h4>";
        echo "In file: " . __FILE__;
        echo "<br>";
        echo "<br>";
        echo htmlspecialchars('Config::$serverKey = \'<server key>\';');
        die();
    } 
}


?>

<!DOCTYPE html>
<html>
      <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PAYMENT </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link href="../../../static/css/main.css" rel="stylesheet">
    <style>
        body {
            position: relative; /* Diperlukan untuk posisi elemen pseudo */
        }

        body::before {
            content: "";
            background-image: url('../../../static/img/bg/login_bg.png'); /* Ganti URL_GAMBAR_BACKGROUND dengan URL gambar background Anda */
            background-size: cover;
            background-position: center;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            filter: blur(3px);
            height: 100%;
            z-index: -1; /* Memastikan gambar latar belakang berada di belakang konten */
        }

        .overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5); /* Warna hitam dengan transparansi 50% */
            z-index: -1; /* Memastikan overlay berada di belakang konten */
        }

        .container {
            position: relative; /* Membuat konten dalam container relatif terhadap gambar latar belakang */
        }

        .card {
            background-color: rgba(255, 255, 255, 0.9); /* Menambahkan lapisan transparan pada kartu */
            border: none;
        }
    </style>
</head>
    <body>
    <div class="overlay"></div>
        <br>
        <br>
            <div class="container">
                
<div class="card">
  <div class="card-body">
    <center class="mt-5">
      <img class="mt-2"src="../../../static/img/logo/check.png" alt="" style="max-width:100px">
      <h4 class="mt-4">REGISTRASI BERHASIL</h4>
      <p class="mt-4"style="font-size:18px">Silahkan selesaikan pembayaran untuk mendapatkan <br>akses penuh ke semua lokasi virtual tour.</p>
      <hr>
      <br>
      <button id="pay-button" class="btn btn-primary" style="border:none">PILIH METODE PEMBAYARAN</button>
      
      <p  class="mt-4"><a href="../../../index.php">Bayar nanti</a></p>
    </center>
    <br>
        <!-- TODO: Remove ".sandbox" from script src URL for production environment. Also input your client key in "data-client-key" -->
        <script src="https://app.midtrans.com/snap/snap.js" data-client-key="<?php echo Config::$clientKey;?>"></script>
        <script type="text/javascript">
            document.getElementById('pay-button').onclick = function(){
                // SnapToken acquired from previous step
                snap.pay('<?php echo $snap_token?>');
            };
        </script>
      
          </div>
          </div>
          </div>
          
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>
</html>
