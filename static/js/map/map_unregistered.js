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
    iconSize: [37.5, 45],
    iconAnchor: [16, 32]
});

var pinIcon2 = L.icon({
    iconUrl: '../../static/img/map/pin2.png',
    iconSize: [37.5, 45],
    iconAnchor: [16, 32]
});


document.addEventListener('DOMContentLoaded', function () {
    function addMarker(lat, lon) {
        L.marker([lat, lon]); // Perlu ditambahkan ke peta
    }

    var markerList = document.getElementById('marker-list');

    if (markerList) {
        var listItems = markerList.getElementsByTagName('li');
        for (var i = 0; i < listItems.length; i++) {
            var lat = parseFloat(listItems[i].getAttribute('data-lat'));
            var lon = parseFloat(listItems[i].getAttribute('data-lon'));
            addMarker(lat, lon);

            // Add a click event to each list item to pan to the corresponding marker
            listItems[i].addEventListener('click', function () {
                var lat = parseFloat(this.getAttribute('data-lat'));
                var lon = parseFloat(this.getAttribute('data-lon'));
                map.flyTo([lat, lon], 18);
            });
        }
    }
});


function createTourTemplate(id, title, imageSrc, link, description) {
    return `
        <div class="container tplat">
            <div class="image-container">
                <img src="${imageSrc}" style="width:100%">
                <div class="gradient-bg">
                    <a href="${link}">
                        <button class="btn btn-primary" style="border:none;border-radius:12px;font-size:18px">Mulai Tur</button>
                    </a>
                </div>
            </div>
            <br>
            <h3>${title}</h3>
            <hr>
            <p style="text-align: justify;">${description}</p>
        </div>
    `;
}


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
                icon: pinIcon2
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

            var lockedItems = document.querySelectorAll('.locked-item');
            if (lockedItems) {
                lockedItems.forEach(function(item) {
                    item.classList.add('locked-text'); // Add a CSS class for gray text color
                });
            }
            

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
var FabLabFree = [
    {
        title: "Rest Area Banjaratma",
        coords: {
            lat: 108.9783136,
            lon: -6.9061762
        },
        template: createTourTemplate(
            4,
            "Rest Area Banjaratma",
            "../../static/img/map/thumb/thumb_banjaratma.jpg",
            "../../Tours/Brebes/VT_Banjaratma/index.html",
            "PG Bandjaratma dibangun pada tahun 1908 oleh Handelsvereniging Amsterdam (HVA) yang merupakan perusahaan perkebunan Belanda berpusat di Amsterdam, kemudian dibentuklah N.V. Cultuurmaatschappij Bandjaratma yang bertujuan untuk menjalankan pengoperasian pada perusahaan industri gula Banjaratma. Pabrik gula yang dibangun pada tahun 1908 ini merupakan pabrik gula paling muda yang ada di Kabupaten Brebes. Namun PG Banjaratma ini baru mulai beroperasi di tahun 1913. <br/><br/> Kemudian pada 16 Agustus 1952 telah terjadi penjarah disejumlah pabrik gula didaerah Tegal dan Brebes. Pabrik Gula Banjaratma sendiri mengalami penjarahan besar-besaran pada msein-mesinnya, rumah-rumah karyawan dan seluruh area pabrik berhasil diduduki oleh para pemberontak. Hal ini termuat pada surat kabar De Vrije pers : ochtendbulletin yang diterbitkan ditahun 1952. <br/><br/> Pada tahun 1957, perusahaan industri gula Banjaratma ini dinasionalisasi oleh pemerintah Indonesia, hal tersebut menandakan berakhirnya kepemilikan Pabrik Gula Banjaratma dari tangan Belanda yang diserahkan kepada pemerintah Indonesia. <br/><br/> Pada tahun 1997 Pabrik Gula Banjaratma berhenti beroperasi karena kerugian terjadi secara terus menerus, biaya operasional tidak sebanding dengan keuntungan yang diperoleh. Beberapa bagian mesin yang masih dapat digunakan dipindahkan ke pabrik gula lain seperti Pabrik Gula Jatibarang untuk menggantikan kerusakan mesin di pabrik gula tersebut. <br/><br/> Kini bangunan utama pabrik ini diperbaiki dan dipercantik tanpa mengubah struktur bentuk aslinya. Namun saat ini Pabrik Gula Banjaratma telah beralih fungsi menjadi Rest Area Kilometer 260 Banjaratma di ruas Tol Pejagan-Pemalang. Rest area yang digunakan untuk lokasi istirahat ini dilengkapi Masjid, Stasiun Pengisian Bahan Bakar Umum (SPBU), serta berbagai macam pedagang makanan. Area yang luas memungkinkan pemudik ataupun pelancong singgah untuk berkeliling menikati suasana di bekas pabrik gula ini."
        ),
    },
    {
        title: "Pelabuhan Kluwut",
        coords: {
            lat: 108.9203818,
            lon: -6.8743005
        },
        template: createTourTemplate(
            6,
            "Pelabuhan Kluwut",
            "../../static/img/map/thumb/thumb_kluwut.jpg",
            "../../Tours/Brebes/VT_Pelabuhan_Kluwut/index.html",
            "Pelabuhan Kluwut, meskipun tidak sebesar pelabuhan Tegal atau Cirebon, masih tetap aktif sebagai pelabuhan nelayan yang cukup ramai di Pantura Kabupaten Brebes. Pelabuhan ini terletak di Sungai Kluwut dan memiliki fasilitas seperti Tempat Pelelangan Ikan (TPI) yang terintegrasi dengan Pusat Pendaratan Ikan. Meskipun ada rencana untuk membangun pelabuhan perikanan di Desa Kluwut seperti yang ada di Tegal, rencana ini dihentikan karena penolakan dari masyarakat yang tidak ingin dipindahkan dari pemukiman mereka. Sejarah menunjukkan bahwa wilayah Kabupaten Brebes memiliki sejumlah kampung nelayan di sepanjang aliran sungai Cipamali, termasuk Sungai Kluwut, yang telah menjadi bagian dari wilayah kekuasaan Belanda hingga Selat Madura pada awal abad XVIII."
        ),
    },
    {
        title: "Wisata Kesehatan Jamu Kalibakung",
        coords: {
            lat: 109.1320071,
            lon: -7.1038733
        },
        template: createTourTemplate(
            7,
            "Wisata Kesehatan Jamu Kalibakung",
            "../../static/img/map/thumb/thumb_kalibakung.jpg",
            "../../Tours/KabupatenTegal/VT_Kalibakung/index.html",
            "Wisata Kesehatan Jamu Kalibakung berdiri di tanah seluas 2,5 hektare di lereng Gunung Slamet dan memiliki sekitar 245 jenis toga yang ditanam dan ditata rapi. Objek wisata ini sering menerima kunjungan dari rombongan siswa sekolah dan ibu-ibu PKK yang ingin mengetahui mengenai toga dan manfaatnya. Selain taman toga, WKJ Kalibakung juga melayani pasien pengobatan herbal. Hampir sama seperti rumah sakit mini, di tempat ini tersedia ruang pendaftaran, ruang tunggu pasien, ruang periksa. Namun bedanya, peran apotek di WKJ digantikan dengan griya jamu. Setelah mengidentifikasi penyakit yang diderita pasien, dokter akan berkoordinasi dengan apoteker untuk menyiapkan racikan jamu yang terdiri dari bermacam ramuan. Harga yang dibanderol untuk satu ramuan jamu cukup terjangkau, yaitu Rp.15.000 saja."
        ),
    },
];

// Fungsi untuk mengupdate FabLab dengan entri yang sesuai dengan orderId
function updateFabLab(orderId) {
    // Buat objek entri baru dengan orderId yang sesuai
    const pin = {
        id: FabLab.length + 1, // ID entri baru
        title: "Pelabuhan Jongor",
        coords: {
            lat: 109.1287918,
            lon: -6.8515864
        },
        template: registeredCTA(orderId) // Memasukkan orderId sebagai argumen
    };

    const pin2 = {
        id: FabLab.length + 1, // ID entri baru
        title: "Learning Center Bawang Putih",
        coords: {
            lat: 109.140785,
            lon: -7.1638959
        },
        template: registeredCTA(orderId) // Memasukkan orderId sebagai argumen
    };

    const pin3 = {
        id: FabLab.length + 1, // ID entri baru
        title: "Penyulingan Cengkeh",
        coords: {
            lat: 109.1388895,
            lon: -7.1697392
        },
        template: registeredCTA(orderId) // Memasukkan orderId sebagai argumen
    };

    const pin4 = {
        id: FabLab.length + 1, // ID entri baru
        title: "Pasar Bawang Sengon",
        coords: {
            lat: 108.8200917,
            lon: -6.886062
        },
        template: registeredCTA(orderId) // Memasukkan orderId sebagai argumen
    };

    const pin5 = {
        id: FabLab.length + 1, // ID entri baru
        title: "Ayam Panggang H. Bari",
        coords: {
            lat: 109.6171926,
            lon: -6.8926827
        },
        template: registeredCTA(orderId) // Memasukkan orderId sebagai argumen
    };

    const pin6 = {
        id: FabLab.length + 1, // ID entri baru
        title: "Museum Batik Pekalongan",
        coords: {
            lat: 109.6755195,
            lon: -6.8786839
        },
        template: registeredCTA(orderId) // Memasukkan orderId sebagai argumen
    };

    const pin7 = {
        id: FabLab.length + 1, // ID entri baru
        title: "Pelabuhan Perikanan Nusantara Pekalongan",
        coords: {
            lat: 109.692065,
            lon: -6.8579016
        },
        template: registeredCTA(orderId) // Memasukkan orderId sebagai argumen
    };

    const pin8 = {
        id: FabLab.length + 1, // ID entri baru
        title: "Cafe Limun Oriental Cap",
        coords: {
            lat: 109.6765347,
            lon: -6.8788489
        },
        template: registeredCTA(orderId) // Memasukkan orderId sebagai argumen
    };

    const pin9 = {
        id: FabLab.length + 1, // ID entri baru
        title: "Kota Lama Semarang",
        coords: {
            lat: 110.4284367,
            lon: -6.9683012
        },
        template: registeredCTA(orderId) // Memasukkan orderId sebagai argumen
    };

    const pin10 = {
        id: FabLab.length + 1, // ID entri baru
        title: "Masjid Agung Demak",
        coords: {
            lat: 110.637289,
            lon: -6.8946499
        },
        template: registeredCTA(orderId) // Memasukkan orderId sebagai argumen
    };

    const pin11 = {
        id: FabLab.length + 1, // ID entri baru
        title: "Perkebunan Cengkeh Dukuh Pereng",
        coords: {
            lat: 109.1149315,
            lon: -7.1718185
        },
        template: registeredCTA(orderId) // Memasukkan orderId sebagai argumen
    };

    const pin12 = {
        id: FabLab.length + 1, // ID entri baru
        title: "Perkebunan Cengkeh Bumijawa",
        coords: {
            lat: 109.1315015,
            lon: -7.1663593
        },
        template: registeredCTA(orderId) // Memasukkan orderId sebagai argumen
    };

    const pin13 = {
        id: FabLab.length + 1, // ID entri baru
        title: "Lapak Bawang Luwungragi",
        coords: {
            lat: 108.9805909,
            lon: -6.8674085
        },
        template: registeredCTA(orderId) // Memasukkan orderId sebagai argumen
    };
    // Tambahkan entri baru ke dalam FabLab
    FabLab.push(pin,pin2,pin3,pin4,pin5,pin6,pin7,pin8,pin9,pin10,pin11,pin12,pin13);
}

for (var i = 0; i < FabLabFree.length; i++) {
    (function (lab) {
        var marker = new L.marker([lab.coords.lon, lab.coords.lat], {
            icon: pinIcon
        });

        // Tambahkan konten popup ke marker
        var popupContent = lab.title;
        marker.bindPopup(popupContent);

        // Tambahkan event listener untuk menampilkan popup saat hover
        marker.on('mouseover', function () {
            this.openPopup();
        });



        marker.on('click', function () {
            document.getElementById('markerModalBody').innerHTML = lab.template;
            $('#markerModal').modal('show');
        });

        marker.addTo(map);

        // Use setTimeout to add the 'show' class with a delay
        setTimeout(function () {
            marker._icon.classList.add('show');
        }, 200 * i); // Delay the animation for 100 milliseconds multiplied by index
    })(FabLabFree[i]);
}