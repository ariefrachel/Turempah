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
