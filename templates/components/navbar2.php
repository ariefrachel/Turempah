


<?php
session_start();

if(isset($_SESSION['email'])) {?>
    <div class="container-fluid shadow-sm p-2 mb-5 bg-body">
        <div class="container d-flex align-items-center justify-content-between mt-5">
            <a href="#" class="logo d-flex align-items-center me-auto me-lg-0">
                <img src="static/img/logo/logo.png" alt="logo" style="width: 80%;">
            </a>
    
            <nav id="navbar" class="navbar">
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Tentang kami</a></li>
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
    // Jika pengguna belum login, tampilkan tombol "Login"
?>
    <div class="container-fluid shadow-sm p-2 mb-5 bg-body">
        <div class="container d-flex align-items-center justify-content-between mt-5">
            <a href="#" class="logo d-flex align-items-center me-auto me-lg-0">
                <img src="static/img/logo/logo.png" alt="logo" style="width: 80%;">
            </a>
    
            <nav id="navbar" class="navbar">
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Tentang kami</a></li>
                    <li><a class="btn-primary" href="templates/map/map.php">Lihat peta</a></li>
                    <li><a href="templates/login/login.php">Login</a></li> <!-- Tambahkan link untuk login -->
                </ul>
            </nav>
    
            <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
            <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
        </div>
    </div>
<?php
}
?>
