

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Rempahtour</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <!-- <link href="static/img/favicon.png" rel="icon"> -->

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Amatic+SC:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
  <link href="static/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="static/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="static/vendor/aos/aos.css" rel="stylesheet">
  <link href="static/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="static/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="static/css/main.css" rel="stylesheet">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>

<body>

  <header id="header" class="header fixed-top d-flex align-items-center">
    <?php include 'templates/components/navbar.php';?>
  </header>
  
  <main id="main">
    <?php include 'templates/landingpage/hero.php';?>
    <?php include 'templates/landingpage/about.php';?>
    <?php include 'templates/landingpage/list.php';?>
  </main>
 
  <footer id="footer" class="footer">
    <?php include 'templates/components/footer.php';?>
  </footer>

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <div id="preloader"></div>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bodymovin/5.10.1/lottie.min.js"></script>
<script>

var animation = bodymovin.loadAnimation({
    container: document.getElementById('bm'),
    renderer: 'svg',
    loop: true,
    autoplay: true,
    path: 'static/img/header/data.json'
})
</script>
  <script src="static/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="static/vendor/aos/aos.js"></script>
  <script src="static/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="static/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="static/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/js/all.min.js"></script>
  <script src="static/js/main.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>