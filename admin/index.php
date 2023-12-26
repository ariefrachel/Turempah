<?php
session_start(); 

if (isset($_SESSION['username'])) {
    $username = $_SESSION['username'];

} else {
    header("Location: login.php");
    exit;
}
?>
<?php
include 'config.php'; // Pastikan ini mengarah ke file konfigurasi database Anda

function getVisitorCount($interval, $date) {
    global $con;

    $query = "";

    switch ($interval) {
        case 'day':
            $query = "SELECT SUM(jumlah) AS total FROM pengunjung WHERE tanggal = '$date'";
            break;
        case 'week':
            $startOfWeek = date('Y-m-d', strtotime('last sunday', strtotime($date)));
            $query = "SELECT SUM(jumlah) AS total FROM pengunjung WHERE tanggal BETWEEN '$startOfWeek' AND '$date'";
            break;
        case 'month':
            $startOfMonth = date('Y-m-01', strtotime($date));
            $query = "SELECT SUM(jumlah) AS total FROM pengunjung WHERE tanggal BETWEEN '$startOfMonth' AND '$date'";
            break;
        default:
            break;
    }

    $result = mysqli_query($con, $query);
    $row = mysqli_fetch_assoc($result);

    return $row['total'] ?? 0;
}

function getTotalVisitors() {
    global $con;

    $query = "SELECT SUM(jumlah) AS total FROM pengunjung";
    $result = mysqli_query($con, $query);
    $row = mysqli_fetch_assoc($result);

    return $row['total'] ?? 0;
}
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>DATA </title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://unpkg.com/bootstrap-table@1.21.0/dist/bootstrap-table.min.css">
    <link href="../static/css/main.css" rel="stylesheet">
  </head>
  <body>
  <header id="header" class="header fixed-top d-flex align-items-center">
    <?php include 'components/navbar.php';?>
  </header>
         <div class="container">
  <div class="row">
     
   <h1> <br>
      <br>Selamat Datang di Admin</h1>
      <div class="container">
      <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jumlah Pengunjung</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
<div class="container mt-5">
        <h1>Jumlah Pengunjung</h1>

        <div class="mb-3">
            <label for="tanggal" class="form-label">Filter Tanggal:</label>
            <input type="date" class="form-control" id="tanggal" name="tanggal">
            <button class="btn btn-primary mt-3" onclick="filterByDate()">Filter</button>
        </div>

        <h3>Hari Ini: <?php echo getVisitorCount('day', date('Y-m-d')); ?></h3>
        <h3>Minggu Ini: <?php echo getVisitorCount('week', date('Y-m-d')); ?></h3>
        <h3>Bulan Ini: <?php echo getVisitorCount('month', date('Y-m-d')); ?></h3>
        <h3>Total Pengunjung: <?php echo getTotalVisitors(); ?></h3>
    </div>

    <script>
        function filterByDate() {
            const selectedDate = document.getElementById('tanggal').value;
            window.location.href = `count_visitors.php?date=${selectedDate}`;
        }
    </script>
</body>

</html>

      </div>
<br>

<script src="https://unpkg.com/bootstrap-table@1.21.0/dist/bootstrap-table.min.js"></script>


</div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/jquery/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/bootstrap-table@1.21.0/dist/bootstrap-table.min.js"></script>
  </body>
</html>