var map = L.map('map_registered');
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


var FabLab = [{
        id: 1,
        title: "Pelabuhan Jongor",
        coords: {
            lat: 109.1287918,
            lon: -6.8515864
        },
        template: createTourTemplate(
            1,
            "Pelabuhan Jongor",
            "../../static/img/map/thumb/thumb_jongor.jpg",
            "../../Tours/KotaTegal/VT_Pelabuhan_Jongor/index.html",
            "Description"
        ),
    },
    {
        id: 2,
        title: "Learning Center Bawang Putih",
        coords: {
            lat: 109.140785,
            lon: -7.1638959
        },
        template: createTourTemplate(
            2,
            "Learning Center Bawang Putih",
            "../../static/img/map/thumb/thumb_learningcenters.jpg",
            "../../Tours/KabupatenTegal/VT_LearningCentre_Bawahputih/index.html",
            "Learning Center Bawang Putih berada di Desa Tuwel, Kecamatan Bojong, yang pernah menjadi daerah sentra bawang putih pada era 80-90-an. Pendirian pusat pembelajaran bawang putih nasional mulai dari budidaya hingga pengolahan pasca panen ini merupakan hasil kolaborasi antara Bank Indonesia (BI), Institut Pertanian Bogor (IPB), serta pemerintah daerah."
        ),
    },
    {
        id: 3,
        title: "Penyulingan Cengkeh",
        coords: {
            lat: 109.1388895,
            lon: -7.1697392
        },
        template: createTourTemplate(
            3,
            "Penyulingan Cengkeh",
            "../../static/img/map/thumb/thumb_penyulingan.jpg",
            "../../Tours/KabupatenTegal/VT_Penyulingan_Cengkeh/index.html",
            "Usaha penyulingan daun cengkeh tradisional yang berada di Muncanglarang, Kecamatan Bumijawa, Kabupaten Tegal, Jawa Tengah 52466. Untuk satu tungku penyulingan, setidaknya diperlukan empat kwintal daun cengkeh kering yang akan menghasilkan sekitar 15 hingga 20 kilogram minyak cengkeh."
        ),
    },
    {
        id: 4,
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
        id: 5,
        title: "Pasar Bawang Sengon",
        coords: {
            lat: 108.8200917,
            lon: -6.886062
        },
        template: createTourTemplate(
            5,
            "Pasar Bawang Sengon",
            "../../static/img/map/thumb/thumb_sengon.jpg",
            "../../Tours/Brebes/VT_Pasar_Sengon/index.html",
            "Pasar dengan aktivitas transaksi bawang paling massif di Brebes. Ramai pembeli dan pedagang dari berbagai daerah. Lebih dari jam 7 pagi dijamin pasar sudah mulai sepi. Karena pasar mulai buka dari ba'da isya. Tidak hanya bawang merah Brebes yang dijual di sini. Tapi dari daerah lain juga ada. Khususnya dari Jawa Timur. Namun, berdasarkan hasil obrolan dari salah satu juragan, bawang merah Brebes lebih sedep dibanding yang lain. Meskipun mungkin bentuknya lebih kecil. Kalah ukuran tapi tetap mempesona."
        ),
    },
    {
        id: 6,
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
        id: 7,
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
    {
        id: 8,
        title: "Ayam Panggang H. Bari",
        coords: {
            lat: 109.6171926,
            lon: -6.8926827
        },
        template: createTourTemplate(
            8,
            "Ayam Panggang H. Bari",
            "../../static/img/map/thumb/thumb_hbari.jpg",
            "../../Tours/Pekalongan/VT_HBari/index.html",
            "RM. Ayam Panggang Haji Bari adalah Rumah Makan Ayam Panggang dengan olahan rempah-rempah yang khas di Pekalongan."
        ),
    },
    {
        id: 9,
        title: "Museum Batik Pekalongan",
        coords: {
            lat: 109.6755195,
            lon: -6.8786839
        },
        template: createTourTemplate(
            9,
            "Museum Batik Pekalongan",
            "../../static/img/map/thumb/thumb_museum.jpg",
            "../../Tours/Pekalongan/VT_Museum_Batik/index.html",
            "Museum Batik Pekalongan adalah museum batik yang beralamat di Jalan Jetayu No.1 Pekalongan, Jawa Tengah. Museum ini memiliki luas tanah dan bangunan 40 meter persegi dan memiliki 1149 koleksi batik, antara lain wayang beber dari kain batik yang berusia ratusan tahun dan alat tenun tradisional atau dikenal sebagai alat tenun bukan mesin. Museum Batik Pekalongan merupakan Unit Pelaksana Teknis Daerah (UPTD). </br> Gedung museum ini sebelumnya adalah bekas kantor balai kota Pekalongan, pada masa penjajahan kolonial Belanda gedung tersebut merupakan kantor keuangan yang membawahi tujuh pabrik gula di karesidenan Pekalongan. Pada tahun 1972, terbentuk komunitas bernama Paguyuban Pecinta Batik Pekalongan (PPBP) yang digagas oleh masyarakat dan pembatik Pekalongan. Pada tanggal 29 Desember 2005 diadakan pertemuan forum bisnis Orang Pekalongan (OPEK) yang membahas tawaran Kota Pekalongan sebagai lokasi peringatan hari Koperasi Tingkat Nasional ke-59. Pembentukan lembaga museum batik melibatkan Yayasan Kadin Indonesia dengan pemerintah Kota Pekalongan, Yayasan Batik Indonesia, Paguyuba Berkah, Yayasan Kadin Kota Pekalongan, Paguyuban Pecinta Batik Pekalongan, serta pakar batik Asmoro Damais yang bersedia menjadi curator museum. Akhirnya pada tanggal 12 Juli 2006 museum ini diresmikan oleh Presiden Republik Indonesia, Susilo Bambang Yudhoyono bersamaan dengan perayaan Hari Koperasi Nasional ke-59. Museum batik ini dijadikan pusat data dan informasi mengenai batik; sebagai pusat riset dan pengembangan ilmu desain batik, perpustakaan dan acuan dalam hal perbatikan; mengkoleksi batik klasik, batik lawasan dan batik kontemporer."
        ),
    },
    {
        id: 10,
        title: "Pelabuhan Perikanan Nusantara Pekalongan",
        coords: {
            lat: 109.692065,
            lon: -6.8579016
        },
        template: createTourTemplate(
            10,
            "Pelabuhan Perikanan Nusantara Pekalongan",
            "../../static/img/map/thumb/thumb_perikanan.jpg",
            "../../Tours/Pekalongan/VT_Perikanan_Pekalongan/index.html",
            "Pelabuhan Pekalongan semula merupakan pelabuhan umum. Terhitung sejak bulan Desember 1974 pengelolaan dan asetnya diserahkan kepada Departemen Pertanian Direktorat Jenderal Perikanan dan diubah statusnya menjadi Pelabuhan Khusus Perikanan . Berdasarkan SK Menteri Pertanian no.310/Kpts/5/1978 tanggal 25 Mei 1978, Pelabuhan Perikanan ini resmi menjadi Pelabuhan Perikanan Nusantara Pekalongan sebagai UPT Direktorat Jenderal Perikanan Departemen Pertanian dan mulai 1 Mei 2001, PPN Pekalongan merupakan UPT Direktorat Jenderal Perikanan Tangkap Kementerian Kelautan dan Perikanan. Sebagai salah satu pelabuhan perikanan tertua di Indonesia, PPN Pekalongan sejak dulu telah memiliki kontribusi besar terhadap perikanan tangkap dan pernah menjdi salah satu tempat pendaratan ikan terbesar di Indonesia bahkan di Asia Tenggara."
        ),
    },
    {
        id: 11,
        title: "Cafe Limun Oriental Cap",
        coords: {
            lat: 109.6765347,
            lon: -6.8788489
        },
        template: createTourTemplate(
            11,
            "Cafe Limun Oriental Cap",
            "../../static/img/map/thumb/thumb_cafe.jpg",
            "../../Tours/Pekalongan/VT_Limun_Oriental/index.html",
            "Minuman Legendaris dari Pekalongan berkarbonasi ringan dan menyegarkan."
        ),
    },
    {
        id: 12,
        title: "Kota Lama Semarang",
        coords: {
            lat: 110.4284367,
            lon: -6.9683012
        },
        template: createTourTemplate(
            12,
            "Kota Lama Semarang",
            "../../static/img/map/thumb/thumb_kotalama.jpg",
            "../../Tours/Semarang/VT_Kota_Lama/index.html",
            "Kota Lama Semarang adalah suatu kawasan di Semarang yang menjadi pusat perdagangan pada abad 19–20 . Pada masa itu, untuk mengamankan warga dan wilayahnya, kawasan itu dibangun benteng, yang dinamai benteng Vijfhoek. Untuk mempercepat jalur perhubungan antar ketiga pintu gerbang di benteng itu maka dibuat jalan-jalan perhubungan, dengan jalan utamanya dinamai Heerenstraat. Saat ini bernama Jl. Letjen Soeprapto. Salah satu lokasi pintu benteng yang ada sampai saat ini adalah Jembatan Berok, yang disebut De Zuider Por. Kata 'Berok' sendiri merupakan hasil pelafalan masyarakat Pribumi yang kesulitan melafalkan kata 'Burg' dalam bahasa Belanda. <br/><br/>Di sekitar Kota Lama dibangun kanal-kanal air yang keberadaannya masih bisa disaksikan hingga kini meski tidak terawat. Hal inilah yang menyebabkan Kota Lama mendapat julukan sebagai Little Netherland. Lokasinya yang terpisah dengan lanskap mirip kota di Eropa serta kanal yang mengelilinginya menjadikan Kota Lama seolah miniatur Belanda di Semarang. <br/><br/> Kawasan Kota Lama juga dilengkapi dengan Museum bernama Museum Kota Lama yang terletak di kawasan Jalan Cenderawasih, Semarang Tengah."
        ),
    },
    {
        id: 13,
        title: "Masjid Agung Demak",
        coords: {
            lat: 110.637289,
            lon: -6.8946499
        },
        template: createTourTemplate(
            13,
            "Masjid Agung Demak",
            "../../static/img/map/thumb/thumb_masjidagung.jpg",
            "../../Tours/Demak/VT_Masjid_Agung/index.html",
            "Masjid Agung Demak adalah salah satu masjid tertua yang ada di Indonesia. Masjid ini terletak di Kampung Kauman, Kelurahan Bintoro, Kecamatan Demak, Kabupaten Demak, Jawa Tengah. <br/><br/> Masjid ini dipercayai pernah menjadi tempat berkumpulnya para ulama (wali) yang menyebarkan agama Islam di tanah Jawa yang disebut dengan Walisongo. Pendiri masjid ini diperkirakan adalah Raden Patah, yaitu raja pertama dari Kesultanan Demak sekitar abad ke-15 Masehi. <br/> Raden Patah bersama Wali Songo mendirikan masjid yang karismatik ini dengan memberi gambar serupa bulus. Ini merupakan candra sengkala memet, dengan arti Sarira Sunyi Kiblating Gusti yang bermakna tahun 1401 Saka. Gambar bulus terdiri atas kepala yang berarti angka 1 (satu), 4 kaki berarti angka 4 (empat), badan bulus berarti angka 0 (nol), ekor bulus berarti angka 1 (satu). Dari simbol ini diperkirakan Masjid Agung Demak berdiri pada tahun 1401 Saka. Masjid ini didirikan pada tanggal 1 Shofar. <br/> Masjid ini mempunyai bangunan-bangunan induk dan serambi. Bangunan induk memiliki empat tiang utama yang disebut saka guru. Salah satu dari tiang utama tersebut konon berasal dari serpihan-serpihan kayu, sehingga dinamai saka tatal. Bangunan serambi merupakan bangunan terbuka. Atapnya berbentuk limas yang ditopang delapan tiang yang disebut Saka Majapahit. Atap limas Masjid terdiri dari tiga bagian yang menggambarkan ; (1) Iman, (2) Islam, dan (3) Ihsan. Di Masjid ini juga terdapat “Pintu Bledeg”, mengandung candra sengkala, yang dapat dibaca Naga Mulat Salira Wani, dengan makna tahun 1388 Saka atau 1466 M, atau 887 H. <br/><br/> Di dalam lokasi kompleks Masjid Agung Demak, terdapat beberapa makam raja-raja Kesultanan Demak termasuk di antaranya adalah Sultan Fattah yang merupakan raja pertama kasultanan demak dan para abdinya. Di kompleks ini juga terdapat Museum Masjid Agung Demak, yang berisi berbagai hal mengenai riwayat Masjid Agung Demak."
        ),
    }
    ,
    {
        id: 14,
        title: "Perkebunan Cengkeh Dukuh Pereng",
        coords: {
            lat: 109.1149315,
            lon: -7.1718185
        },
        template: createTourTemplate(
            14,
            "Perkebunan Cengkeh Dukuh Pereng",
            "../../static/img/map/thumb/thumb_cengkeh1.jpg",
            "../../Tours/KabupatenTegal/VT_KebunCengkah_DukuhPereng/index.html",
            "Salah satu area sudah beralih fungsi. Dari perkebunan menjadi tanah kapling. Mungkin lebih menjanjikan daripada menunggu cengkeh yang tak kunjung berbuah. Area yang lain juga terlihat sudah tidak kopen. Entah bagaimana nasib ke depannya. Apakah menunggu waktu untuk gulung tikar juga."
        ),
    }    ,
    {
        id: 15,
        title: "Perkebunan Cengkeh Bumijawa",
        coords: {
            lat: 109.1315015,
            lon: -7.1663593
        },
        template: createTourTemplate(
            15,
            "Perkebunan Cengkeh Bumijawa",
            "../../static/img/map/thumb/thumb_cengkeh2.jpg",
            "../../Tours/KabupatenTegal/VT_KebunCengkah_Bumijawa/index.html",
            "Deskripsi"
        ),
    }   ,
    {
        id: 16,
        title: "Lapak Bawang Luwungragi",
        coords: {
            lat: 108.9805909,
            lon: -6.8674085
        },
        template: createTourTemplate(
            16,
            "Lapak Bawang Luwungrag",
            "../../static/img/map/thumb/thumb_luwungragi.jpg",
            "../../Tours/Brebes/VT_Luwungragi/index.html",
            "Desa Luwungragi berbatasan langsung dengan desa klampok kecamatan wanasri di sebelah utara, dengan desa Siwuluh di sebelah selatan, dengan Desa Bangsri disebelah barat dan dengan Desa Sigentong Kecamatan Wanasari di sebelah timur. <br/><br/> Desa Luwungragi merupakan Desa dengan lahan pertanian yang luas dengan sebagian besar masyarakat nya bermatapencaharian sebagai petani khususnya tanaman bawang merah yang menjadi ikon kota brebes sebagai kota bawang merah. <br/><br/> Produk-produk unggulan yang ada di desa luwungragi tidak jauh dari bawang merah yakni produksi bawang goreng yang sudah dikenal dan di produksi secara rutin dan di pasarkan hingga ke kota-kota besar terutama di jakarta."
        ),
    }
];



var pinIcon = L.icon({
    iconUrl: '../../static/img/map/pin.png',
    iconSize: [37., 45],
    iconAnchor: [16, 32]
});

// Pastikan kode dijalankan setelah dokumen selesai dimuat
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


for (var i = 0; i < FabLab.length; i++) {
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
    })(FabLab[i]);
}