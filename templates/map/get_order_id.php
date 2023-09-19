<?php
session_start();

if (isset($_SESSION['order_id'])) {
    $order_id = $_SESSION['order_id'];
    echo $order_id;
} else {
    echo ""; // Jika 'order_id' tidak ada dalam sesi, kembalikan string kosong
}
?>
