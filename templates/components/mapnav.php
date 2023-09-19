<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../static/css/map/mapnav.css">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css">
</head>
<body>
    <div class="navmap">
    <header class="headermap" id="headermap">
        <nav class="navbarmap containermap">
           <section class="navbar-left">
               <a href="../../index.php" class="logo d-flex align-items-center me-auto me-lg-0">
                  <img src="../../static/img/logo/logo.png" alt="logo" style="width:150px">
               </a>
           </section>
           <section class="navbar-center">
              <span class="overlay"></span>
              <div class="menumap" id="menumap">
                 <div class="menu-header">
                    <span class="menu-arrow"><i class="bx bx-chevron-left"></i></span>
                    <span class="menu-title"></span>
                 </div>
                 <ul class="menu-inner">
                    <li class="menu-item"><a href="../../index.php" class="menu-link ">Home</a></li>
                    <li class="menu-item menu-dropdown">
                       <span class="menu-link ">Daftar Tempat<i class="bx bx-chevron-right"></i></span>
                       <div class="submenu megamenu megamenu-column-4" id="marker-list">
                          <div class="submenu-inner" >
                             <h4 class="submenu-title">Kota Tegal</h4>
                             <ul class="submenu-list" >
                                <li class="submenu-item" data-lat="-6.8515864" data-lon="109.1287918"><a  href="#" class="submenu-link">Pelabuhan Jongor</a></li>

                             </ul>
                             <br>
                             <h4 class="submenu-title">Demak</h4>
                             <ul class="submenu-list">
                                <li class="submenu-item" data-lat="-6.8946499" data-lon="110.637289"><a class="submenu-link" href="#">Masjid Agung Demak</a></li>
                             </ul>
                             <br>
                             <h4 class="submenu-title">Semarang</h4>
                             <ul class="submenu-list">
                                <li class="submenu-item" data-lat="-6.9683012" data-lon="110.4284367"><a class="submenu-link" href="#">Kota Lama Semarang</a></li>
                             </ul>
                             
                          </div>
                          <div class="submenu-inner">
                             <h4 class="submenu-title">Brebes</h4>
                             <ul class="submenu-list">
                                <li class="submenu-item" data-lat="-6.9061762" data-lon="108.9783136"><a href="#" class="submenu-link">Rest Area Banjaratma</a></li>
                                <li class="submenu-item" data-lat="-6.886062" data-lon="108.8200917"><a href="#" class="submenu-link">Pasar Bawang Sengon</a></li>
                                <li class="submenu-item" data-lat="-6.8743005" data-lon="108.9203818"><a href="#" class="submenu-link">Pelabuhan Kluwut</a></li>
                                <li class="submenu-item" data-lat="-6.8674085" data-lon="108.9805909"><a href="#" class="submenu-link">Lapak Bawang Luwungragi</a></li>
                             </ul>
                             <br>
                             <h4 class="submenu-title">Kab. Tegal</h4>
                             <ul class="submenu-list" >
                                <li class="submenu-item" data-lat="-7.1638959" data-lon="109.140785"><a href="#" class="submenu-link">Learning Center Bawang Putih</a></li>
                                <li class="submenu-item" data-lat="-7.1697392" data-lon="109.1388895"><a href="#" class="submenu-link">Penyulingan Cengkeh</a></li>
                                <li class="submenu-item" data-lat="-7.1038733" data-lon="109.1320071"><a href="#" class="submenu-link">Wisata Kesehatan Jamu Kalibakung</a></li>
                                <li class="submenu-item" data-lat="-7.1718185" data-lon="109.1149315"><a href="#" class="submenu-link">Perkebunan Cengkeh Dukuh Pereng</a></li>
                                <li class="submenu-item" data-lat="-7.1663593" data-lon="109.1315015"><a href="#" class="submenu-link">Perkebunan Cengkeh Bumijawa</a></li>
                             </ul>


                          </div>
                          <div class="submenu-inner">
                            <h4 class="submenu-title">Pekalongan</h4>
                             <ul class="submenu-list">
                                <li class="submenu-item" data-lat="-6.8926827" data-lon="109.6171926"><a href="#" class="submenu-link">Ayam Panggang H. Bari</a></li>
                                <li class="submenu-item" data-lat="-6.8786839" data-lon="109.6755195"><a href="#" class="submenu-link">Museum Batik Pekalongan</a></li>
                                <li class="submenu-item" data-lat="-6.8579016" data-lon="109.692065"><a href="#" class="submenu-link">Pelabuhan Perikanan Nusantara Pekalongan</a></li>
                                <li class="submenu-item" data-lat="-6.8788489" data-lon="109.6765347"><a class="submenu-link" href="#">Cafe Limun Oriental Cap</a></li>
                             </ul>
                          </div>

                       </div>
                    </li>
                 </ul>
              </div>
           </section>
           <section class="navbar-right">
           <div class="burger" id="burger">
                 <span class="burger-line"></span>
                 <span class="burger-line"></span>
                 <span class="burger-line"></span>
              </div>
           </section>
        </nav>
     </header>
    </div>
    
</body>
</html>
<script src="../../static/js/map/mapnav.js"></script>