<?php session_start(); ?>

            <div class="container-fluid shadow-sm p-2 mb-5 bg-body">
                <div class="container d-flex align-items-center justify-content-between mt-5">
                <a href="#" class="logo d-flex align-items-center me-auto me-lg-0">
                    <img src="../../../static/img/logo/logo.png" alt="logo" style="width: 80%;">
                </a>
                <nav class="navbar">
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="admin/menus/tempat/tempat.php">Daftar Tempat</a></li>
                        <li><a href="./menus/users/data_user.php">Data User</a></li>
                    </ul>
                </nav>
                <nav id="navbar" class="navbar">
                    <ul>
                        <li><a href="#">Logout</a></li> <!-- Tambahkan link untuk logout -->
                    </ul>
                </nav>
        
                <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
                <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
            </div>
            </div>
