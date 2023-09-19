
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rempahtour</title>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.0.1/dist/leaflet.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
    <link href="../../static/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link href="../../static/css/map/map.css" rel="stylesheet">
    <!-- <link href="../../static/css/main.css" rel="stylesheet"> -->

    <style>
        /* Efek hover untuk marker */
        .leaflet-marker-icon:hover {
            transform: scale(1.2);
            /* Ubah ukuran marker saat dihover */
            transition: transform 0.2s ease-in-out;
            /* Animasikan perubahan ukuran */
        }

        .leaflet-container {
            height: 600px;
        }


    </style>


</head>

<body>

    <header class="header fixed-top d-flex align-items-center">
        <?php include '../components/mapnav.php';?>
    </header>
    <div id="map"  style="width: 100%; height:100vh;"></div>


    <div class="modal fade" id="markerModal" tabindex="-1" role="dialog" aria-labelledby="markerModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered  modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="markerModalLabel"></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" id="markerModalBody">
                </div>

            </div>
        </div>
    </div>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
<script>
    AOS.init({
        duration: 1000, // Set the duration of the animation
        once: true, // Only trigger the animation once
    });
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.0.1/leaflet.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
<script src="../../static/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="../../static/js/map/map.js"></script>

</html>