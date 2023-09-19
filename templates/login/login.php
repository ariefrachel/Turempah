<!DOCTYPE html>
<html>
<head>
    <title>Halaman Login</title>
    <!-- Tambahkan pustaka Bootstrap -->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script type="text/javascript" src='../files/bower_components/sweetalert/js/sweetalert2.all.min.js'></script>
    <link rel="stylesheet" href='../files/bower_components/sweetalert/css/sweetalert2.min.css' media="screen" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link href="../../static/css/main.css" rel="stylesheet">
    <style>
        body {
            position: relative; /* Diperlukan untuk posisi elemen pseudo */
        }

        body::before {
            content: "";
            background-image: url('../../static/img/bg/login_bg.png'); /* Ganti URL_GAMBAR_BACKGROUND dengan URL gambar background Anda */
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
    <div class="overlay"></div> <!-- Overlay hitam transparan -->
    <div class="container">
        <div class="card mt-5 ">
            <div class="card-body">
                <div class="mt-5">
                    <p><a href="../../index.php">&lt; Kembali ke Home</a></p>
                    <hr>
                    <h2>Login</h2>
                </div>
                <form method="POST" action="proses/proses_login.php">
                    <div class="form-group">
                        <label for="username">Username:</label>
                        <input type="username" class="form-control" id="username" name="username" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Password:</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                    </div>
                    <button type="submit" class="btn btn-primary" style="border:none">Login</button>
                </form>
                <hr>
                <p>Belum punya akun? <a href="../../templates/login/register.php">Klik Register</a></p>
            </div>
        </div>
    </div>
</body>
</html>
