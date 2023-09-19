<?php
session_start();

if(isset($_SESSION['username'])) {
    // Jika pengguna sudah login, ambil nilai 'status' dari database
    $username = $_SESSION['username'];
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
    // include "../../db/config.php";
    $query = "SELECT transaction_status FROM user WHERE username='$username'";
    $result = $con->query($query);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $userStatus = $row['transaction_status'];

        // Sekarang kita bisa memeriksa nilai 'status' dan menampilkan konten khusus jika 'status' adalah 2
        if ($userStatus == 2) {
            // Tampilkan konten khusus untuk 'status' 2
?>
            <div class="container-fluid shadow-sm p-2 mb-5 bg-body">
                <div class="container d-flex align-items-center justify-content-between mt-5">
                <a href="#" class="logo d-flex align-items-center me-auto me-lg-0">
                    <img src="static/img/logo/logo.png" alt="logo" style="width: 80%;">
                </a>
                <nav class="navbar">
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Tentang kami</a></li>
                        <li><a href="#">Marketplace</a></li>
                    </ul>
                </nav>
                <nav id="navbar" class="navbar">
                    <ul>
                        <li><a class="btn-primary" href="templates/map/map_registered.php">Lihat peta</a></li>
                        <li><a href="templates/login/logout.php">Logout</a></li> <!-- Tambahkan link untuk logout -->
                    </ul>
                </nav>
        
                <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
                <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
            </div>
            </div>
<?php
        } else {
            // Tampilkan konten default jika 'status' bukan 2
?>
            <div class="container-fluid shadow-sm p-2 mb-5 bg-body">
                <div class="container d-flex align-items-center justify-content-between mt-5">
                <a href="#" class="logo d-flex align-items-center me-auto me-lg-0">
                    <img src="static/img/logo/logo.png" alt="logo" style="width: 80%;">
                </a>
                <nav class="navbar">
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Tentang kami</a></li>
                        <li><a href="#">Marketplace</a></li>
                    </ul>
                </nav>
                <nav id="navbar" class="navbar">
                    <ul>
                        <li><a class="btn-primary" href="templates/map/map_unregistered.php">Lihat peta</a></li>
                        <li><a href="templates/login/logout.php">Logout</a></li> <!-- Tambahkan link untuk login -->
                    </ul>
                </nav>
        
                <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
                <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
        </div>
            </div>
<?php
        }
    }
} else {
    // Jika pengguna belum login, tampilkan tombol "Login"
?>
    <div class="container-fluid shadow-sm p-2 mb-5 bg-body">
    <div class="container d-flex align-items-center justify-content-between mt-5">
                <a href="#" class="logo d-flex align-items-center me-auto me-lg-0">
                    <img src="static/img/logo/logo.png" alt="logo" style="width: 80%;">
                </a>
                <nav class="navbar">
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Tentang kami</a></li>
                        <li><a href="#">Marketplace</a></li>
                    </ul>
                </nav>
                <nav id="navbar" class="navbar">
                    <ul>
                        <li><a class="btn-primary" href="templates/map/map.php">Lihat peta</a></li>
                        <li><a href="templates/login/login.php">Login</a></li> <!-- Tambahkan link untuk login -->
                        <li><a href="templates/login/register.php">Register</a></li> <!-- Tambahkan link untuk login -->
                    </ul>
                </nav>
        
                <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
                <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
        </div>
    </div>
<?php
}
?>
