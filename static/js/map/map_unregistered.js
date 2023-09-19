// var map = L.map('map_unregistered');
// var osmUrl = 'http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png';
// var osmAttrib = 'Map data © <a href="http://openstreetmap.org">OpenStreetMap</a> contributors';
// var osm = new L.TileLayer(osmUrl, {
//     minZoom: 10,
//     maxZoom: 20,
//     attribution: osmAttrib
// });

// map.zoomControl.setPosition('bottomright');

// var southWest = L.latLng(-10.916113381667994, 95.30668963658125); // Define the southwest corner of your desired boundary
// var northEast = L.latLng(5.375971217562974, 143.46868061958256); // Define the northeast corner of your desired boundary
// var bounds = L.latLngBounds(southWest, northEast); // Create the bounds object
// map.setView(new L.LatLng(-6.8730, 109.0970), 12);
// map.addLayer(osm);
// map.setMaxBounds(bounds);

// function registeredCTA(orderId) {
//     return `
//         <div class="container tplat">
//             <h3>Mohon maaf anda belum registrasi</h3>
//             <p>Untuk mendapatkan akses ke semua lokasi, dimohon untuk melakukan registrasi berbayar terlebih dahulu</p>
//             <p>Silahkan klik tombol dibawah ini untuk melakukan registrasi</p>
//             <a href="../../../rempahtour/payment/examples/snap/checkout-process-simple-version.php?order_id=${orderId}">
//                 <button class="btn btn-primary">Mulai Registrasi</button>
//             </a>
//         </div>
//     `;
// }

// // Membuat permintaan AJAX untuk mendapatkan orderId dari server
// const xhr = new XMLHttpRequest();
// xhr.open('GET', 'get_order_id.php', true);

// xhr.onload = function () {
//     if (xhr.status === 200) {
//         const orderId = xhr.responseText;
//         // Kemudian gunakan orderId dalam JavaScript
//         const registeredCTAContent = registeredCTA(orderId);

//         // Tempatkan 'registeredCTAContent' ke dalam elemen HTML yang sesuai di halaman Anda.
//         const container = document.getElementById('registered-cta-container');
//         container.innerHTML = registeredCTAContent;
//     }
// };

// xhr.send();



// var FabLab = [{
//         id: 1,
//         title: "Pelabuhan Jongor",
//         coords: {
//             lat: 109.1287918,
//             lon: -6.8515864
//         },
//         template: `
//         <div class="container tplat">
//             <div class="image-container">
//                 <img src="../../static/img/map/thumb/thumb2.jpg" style="width:100%">
//                 <div class="gradient-bg">
//                     <a href="../../Tours/KotaTegal/VT_Pelabuhan_Jongor/index.html">
//                     <button class="btn btn-primary" style="border:none;border-radius:12px;font-size:18px">Mulai Tur</button>
//                     </a>
//                 </div>
//             </div>
//             <br>
//             <h3>Title</h3>
//             <hr>
//             <p style="text-align: justify;">Description</p>
//         </div>
//     `,
//     },
//     {
//         id: 2,
//         title: "Learning Center Bawang Putih",
//         coords: {
//             lat: 109.140785,
//             lon: -7.1638959
//         },
//         template: `
//         <div class="container tplat">
//         <div class="image-container">
//             <img src="../../static/img/map/thumb/thumb2.jpg" style="width:100%">
//             <div class="gradient-bg">
//                 <a href="">
//                 <button class="btn btn-primary" style="border:none;border-radius:12px;font-size:18px">Mulai Tur</button>
//                 </a>
//             </div>
//         </div>
//         <br>
//         <h3>Title</h3>
//         <hr>
//         <p style="text-align: justify;">Description</p>
//         </div>
//             `,
//     },
//     {
//         id: 3,
//         title: "Penyulingan Cengkeh",
//         coords: {
//             lat: 109.1388895,
//             lon: -7.1697392
//         },
//         template: registeredCTA(orderId),
//     },
//     {
//         id: 4,
//         title: "Rest Area Banjaratma",
//         coords: {
//             lat: 108.9783136,
//             lon: -6.9061762
//         },
//         template: registeredCTA(orderId),
//     },
//     {
//         id: 5,
//         title: "Pasar Bawang Sengon",
//         coords: {
//             lat: 108.8200917,
//             lon: -6.886062
//         },
//         template: registeredCTA(orderId),
//     },
//     {
//         id: 6,
//         title: "Pelabuhan Kluwut",
//         coords: {
//             lat: 108.9203818,
//             lon: -6.8743005
//         },
//         template: registeredCTA(orderId),
//     },
//     {
//         id: 7,
//         title: "Wisata Kesehatan Jamu Kalibakung",
//         coords: {
//             lat: 109.1320071,
//             lon: -7.1038733
//         },
//         template: registeredCTA(),
//     },
//     {
//         id: 8,
//         title: "Ayam Panggang H. Bari",
//         coords: {
//             lat: 109.6171926,
//             lon: -6.8926827
//         },
//         template: registeredCTA(),
//     },
//     {
//         id: 9,
//         title: "Museum Batik Pekalongan",
//         coords: {
//             lat: 109.6755195,
//             lon: -6.8786839
//         },
//         template: registeredCTA(),
//     },
//     {
//         id: 10,
//         title: "Pelabuhan Perikanan Nusantara Pekalongan",
//         coords: {
//             lat: 109.692065,
//             lon: -6.8579016
//         },
//         template: registeredCTA(),
//     },
//     {
//         id: 11,
//         title: "Cafe Limun Oriental Cap",
//         coords: {
//             lat: 109.6765347,
//             lon: -6.8788489
//         },
//         template: registeredCTA(),
//     },
//     {
//         id: 12,
//         title: "Kota Lama Semarang",
//         coords: {
//             lat: 110.4284367,
//             lon: -6.9683012
//         },
//         template: registeredCTA(),
//     },
//     {
//         id: 13,
//         title: "Masjid Agung Demak",
//         coords: {
//             lat: 110.637289,
//             lon: -6.8946499
//         },
//         template: registeredCTA(),
//     }
//     ,
//     {
//         id: 14,
//         title: "Perkebunan Cengkeh Dukuh Pereng",
//         coords: {
//             lat: 109.1149315,
//             lon: -7.1718185
//         },
//         template: registeredCTA(),
//     }    ,
//     {
//         id: 15,
//         title: "Perkebunan Cengkeh Bumijawa",
//         coords: {
//             lat: 109.1315015,
//             lon: -7.1663593
//         },
//         template: registeredCTA(),
//     }
// ];



// var pinIcon = L.icon({
//     iconUrl: '../../static/img/map/pin.png',
//     iconSize: [37., 45],
//     iconAnchor: [16, 32]
// });

// // Pastikan kode dijalankan setelah dokumen selesai dimuat
// document.addEventListener('DOMContentLoaded', function () {
//     function addMarker(lat, lon) {
//         L.marker([lat, lon]); // Perlu ditambahkan ke peta
//     }

//     var markerList = document.getElementById('marker-list');

//     if (markerList) {
//         var listItems = markerList.getElementsByTagName('li');
//         for (var i = 0; i < listItems.length; i++) {
//             var lat = parseFloat(listItems[i].getAttribute('data-lat'));
//             var lon = parseFloat(listItems[i].getAttribute('data-lon'));
//             addMarker(lat, lon);

//             // Add a click event to each list item to pan to the corresponding marker
//             listItems[i].addEventListener('click', function () {
//                 var lat = parseFloat(this.getAttribute('data-lat'));
//                 var lon = parseFloat(this.getAttribute('data-lon'));
//                 map.flyTo([lat, lon], 18);
//             });
//         }
//     }
// });


// for (var i = 0; i < FabLab.length; i++) {
//     (function (lab) {
//         var marker = new L.marker([lab.coords.lon, lab.coords.lat], {
//             icon: pinIcon
//         });

//         // Tambahkan konten popup ke marker
//         var popupContent = lab.title;
//         marker.bindPopup(popupContent);

//         // Tambahkan event listener untuk menampilkan popup saat hover
//         marker.on('mouseover', function () {
//             this.openPopup();
//         });



//         marker.on('click', function () {
//             document.getElementById('markerModalBody').innerHTML = lab.template;
//             $('#markerModal').modal('show');
//         });

//         marker.addTo(map);

//         // Use setTimeout to add the 'show' class with a delay
//         setTimeout(function () {
//             marker._icon.classList.add('show');
//         }, 200 * i); // Delay the animation for 100 milliseconds multiplied by index
//     })(FabLab[i]);
// }


var map = L.map('map_unregistered');
var osmUrl = 'http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png';
var osmAttrib = 'Map data © <a href="http://openstreetmap.org">OpenStreetMap</a> contributors';
var osm = new L.TileLayer(osmUrl, {
    minZoom: 10,
    maxZoom: 20,
    attribution: osmAttrib
});

map.zoomControl.setPosition('bottomright');

var southWest = L.latLng(-10.916113381667994, 95.30668963658125); // Define the southwest corner of your desired boundary
var northEast = L.latLng(5.375971217562974, 143.46868061958256); // Define the northeast corner of your desired boundary
var bounds = L.latLngBounds(southWest, northEast); // Create the bounds object
map.setView(new L.LatLng(-6.8730, 109.0970), 12);
map.addLayer(osm);
map.setMaxBounds(bounds);

var pinIcon = L.icon({
    iconUrl: '../../static/img/map/pin.png',
    iconSize: [37., 45],
    iconAnchor: [16, 32]
});

// Fungsi untuk membuat konten CTA yang tergantung pada orderId
function registeredCTA(orderId) {
    return `
        <div class="container tplat">
            <h3>Mohon maaf anda belum registrasi</h3>
            <p>Untuk mendapatkan akses ke semua lokasi, dimohon untuk melakukan registrasi berbayar terlebih dahulu</p>
            <p>Silahkan klik tombol dibawah ini untuk melakukan registrasi</p>
            <a href="../../../rempahtour/payment/examples/snap/checkout-process-simple-version.php?order_id=${orderId}">
                <button class="btn btn-primary">Mulai Registrasi</button>
            </a>
        </div>
    `;
}

var orderId; // Variabel orderId diinisialisasi di luar fungsi xhr.onload

const xhr = new XMLHttpRequest();
xhr.open('GET', 'get_order_id.php', true);

xhr.onload = function () {
    if (xhr.status === 200) {
        orderId = xhr.responseText; // Memasukkan orderId ke variabel orderId
        // Memanggil fungsi updateFabLab dengan orderId yang diterima
        updateFabLab(orderId);

        // Tempatkan 'registeredCTAContent' ke dalam elemen HTML yang sesuai di halaman Anda.
        const container = document.getElementById('registered-cta-container');
        container.innerHTML = registeredCTA(orderId);

        // Setelah entri ditambahkan ke FabLab, buat marker
        for (var i = 0; i < FabLab.length; i++) {
            console.log('Latitude:', FabLab[i].coords.lat);
            console.log('Longitude:', FabLab[i].coords.lon);

            var marker = new L.marker([FabLab[i].coords.lon, FabLab[i].coords.lat], {
                icon: pinIcon
            });

            // Tambahkan konten popup ke marker
            var popupContent = FabLab[i].title;
            marker.bindPopup(popupContent);

            // Tambahkan event listener untuk menampilkan popup saat hover
            marker.on('mouseover', function () {
                this.openPopup();
            });

            // Simpan nilai i saat ini dalam variabel indexMarker
            // agar dapat digunakan di dalam event listener click
            marker.indexMarker = i;

            marker.on('click', function () {
                // Gunakan nilai indexMarker untuk mengakses entri FabLab yang sesuai
                var index = this.indexMarker;
                document.getElementById('markerModalBody').innerHTML = FabLab[index].template;
                $('#markerModal').modal('show');
            });

            marker.addTo(map);

            // Use setTimeout to add the 'show' class with a delay
            setTimeout(function () {
                marker._icon.classList.add('show');
            }, 200 * i); // Delay the animation for 100 milliseconds multiplied by index
        }
    }
};

xhr.send();
var FabLab = [];

// Fungsi untuk mengupdate FabLab dengan entri yang sesuai dengan orderId
function updateFabLab(orderId) {
    // Buat objek entri baru dengan orderId yang sesuai
    const newEntry = {
        id: FabLab.length + 1, // ID entri baru
        title: "Penyulingan Cengkeh",
        coords: {
            lat: 109.1388895,
            lon: -7.1697392
        },
        template: registeredCTA(orderId) // Memasukkan orderId sebagai argumen
    };

    // Tambahkan entri baru ke dalam FabLab
    FabLab.push(newEntry);
}

document.addEventListener('DOMContentLoaded', function () {

});
