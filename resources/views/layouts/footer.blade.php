<div class="mm-footer">
    <div class="text-center" style="background-color:#0C3310;">
        <div class="container-fluid">
            <div class="row text-center">
                <div class="col-md-4">
                    <img style="width: 10em; height: auto;" src="{{ asset('img/Logo3.png')}}">
                    <hr class="light">
                    <p class="">Nomor Telepon</p>
                    <p>+62 0622-21216 </p>
                    <p>Email</p>
                    <p>uptkphwilayah2siantar@gmail.com</p>
                </div>
                <div class="col-md-4">
                    <hr class="light">
                    <h5>Media Social</h5>
                    <hr class="light">
                    <div class="social ">    
                        <a href="#"><i class="fab fa-facebook"></i></a>
                        <a href="#"><i class="fab fa-youtube"></i></a>
                    </div>
                    <p>KPH Pematangsiantar</p>
                </div>
                <div class="col-md-4">
                    <hr class="light">
                    <h5>Lokasi</h5>
                    <hr class="light">
                    <p>Jln. Gunung Simanuk-manuk No.9, Pematangsiantar 
                        (dekat Siantar Zoo, Depan Rumah Sakit Tentara Siantar) </p>
                    <!-- Histats.com  (div with counter) --><div id="histats_counter"></div>
                    <!-- Histats.com  START  (aync)-->
                    <script type="text/javascript">var _Hasync= _Hasync|| [];
                    _Hasync.push(['Histats.start', '1,4575688,4,321,112,62,00011001']);
                    _Hasync.push(['Histats.fasi', '1']);
                    _Hasync.push(['Histats.track_hits', '']);
                    (function() {
                    var hs = document.createElement('script'); hs.type = 'text/javascript'; hs.async = true;
                    hs.src = ('//s10.histats.com/js15_as.js');
                    (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(hs);
                    })();</script>
                    <noscript><a href="/" target="_blank"><img  src="//sstatic1.histats.com/0.gif?4575688&101" alt="html hit counter" border="0"></a></noscript>
                    <!-- Histats.com  END  -->
                </div>
                <div class="col-12">
                    <hr class="light-100">
                    <h5>Copyright &copy; 2021</h5>
                </div>
            </div>
        </div>
    </div>
</div>
    <!-- script komentar -->
    <script>
        function balasKomentar(id, title) {
            $('#formReplyComment').show();
            $('#parent_id').val(id)
            $('#replyComment').val(title)
        }
    </script>


    <!-- script leaflet -->
    <script>
        var map = L.map('mapid').setView([2.951442, 99.057523], 10);

        // L.esri.basemapLayer('ImageryFirefly').addTo(map);
                googleStreets = L.tileLayer('http://{s}.google.com/vt/lyrs=m&x={x}&y={y}&z={z}',{
            maxZoom: 30,
            subdomains:['mt0','mt1','mt2','mt3']
        }).addTo(map);

        // googleHybrid = L.tileLayer('http://{s}.google.com/vt/lyrs=s,h&x={x}&y={y}&z={z}',{
        // maxZoom: 20,
        // subdomains:['mt0','mt1','mt2','mt3']
        // }).addTo(map);

        //         googleSat = L.tileLayer('http://{s}.google.com/vt/lyrs=s&x={x}&y={y}&z={z}',{
        //     maxZoom: 20,
        //     subdomains:['mt0','mt1','mt2','mt3']
        // }).addTo(map);

//         googleTerrain = L.tileLayer('http://{s}.google.com/vt/lyrs=p&x={x}&y={y}&z={z}',{
//     maxZoom: 20,
//     subdomains:['mt0','mt1','mt2','mt3']
// }).addTo(map);


// kph2
var greenIcon = L.icon({
    iconUrl: 'img/kph2.png',
    iconSize:     [50, 75], // size of the icon
    shadowSize:   [50, 64], // size of the shadow
    iconAnchor:   [22, 94], // point of the icon which will correspond to marker's location
    shadowAnchor: [4, 62],  // the same for the shadow
    popupAnchor:  [-3, -76] // point from which the popup should open relative to the iconAnchor
});

L.marker([2.9514596123305656, 99.05752741133092], {icon: greenIcon}).addTo(map);

var LeafIcon = L.Icon.extend({
    options: {
        shadowUrl: 'img/kph2.png',
        iconSize:     [38, 95],
        shadowSize:   [50, 64],
        iconAnchor:   [22, 94],
        shadowAnchor: [4, 62],
        popupAnchor:  [-3, -76]
    }
});

// var greenIcon = new LeafIcon({iconUrl: 'img/kph2.png'});

L.icon = function (options) {
    return new L.Icon(options);
};

L.marker([2.9514596123305656, 99.05752741133092], {icon: greenIcon}).addTo(map).bindPopup("UPT.KPH2 Pematangsiantar, Jln. Gunung Simanuk-manuk No.9 Pematangsiantar (dekat Siantar Zoo, depan Rumah Sakit Tentara Siantar)");

// Unit vi
var greenIcon = L.icon({
    iconUrl: 'img/Unit VI mark.png',
    iconSize:     [50, 75], // size of the icon
    shadowSize:   [50, 64], // size of the shadow
    iconAnchor:   [22, 94], // point of the icon which will correspond to marker's location
    shadowAnchor: [4, 62],  // the same for the shadow
    popupAnchor:  [-3, -76] // point from which the popup should open relative to the iconAnchor
});

L.marker([3.10527455742, 98.85584026240], {icon: greenIcon}).addTo(map);

var LeafIcon = L.Icon.extend({
    options: {
        shadowUrl: 'img/Unit VI mark.png',
        iconSize:     [38, 95],
        shadowSize:   [50, 64],
        iconAnchor:   [22, 94],
        shadowAnchor: [4, 62],
        popupAnchor:  [-3, -76]
    }
});

// var greenIcon = new LeafIcon({iconUrl: 'img/kph2.png'});

L.icon = function (options) {
    return new L.Icon(options);
};

L.marker([3.10527455742, 98.85584026240], {icon: greenIcon}).addTo(map).bindPopup("KPHP Unit VI Simalungun, Jln. Sutomo No.01 Kel. Sondi Raya Kec. Raya Kab.SImalungun");


// Unit IX
var greenIcon = L.icon({
    iconUrl: 'img/Unit IX mark.png',
    iconSize:     [50, 75], // size of the icon
    shadowSize:   [50, 64], // size of the shadow
    iconAnchor:   [22, 94], // point of the icon which will correspond to marker's location
    shadowAnchor: [4, 62],  // the same for the shadow
    popupAnchor:  [-3, -76] // point from which the popup should open relative to the iconAnchor
});

L.marker([3.26607360391,98.97242370140], {icon: greenIcon}).addTo(map);

var LeafIcon = L.Icon.extend({
    options: {
        shadowUrl: 'img/Unit IX mark.png',
        iconSize:     [38, 95],
        shadowSize:   [50, 64],
        iconAnchor:   [22, 94],
        shadowAnchor: [4, 62],
        popupAnchor:  [-3, -76]
    }
});

// var greenIcon = new LeafIcon({iconUrl: 'img/kph2.png'});

L.icon = function (options) {
    return new L.Icon(options);
};

L.marker([3.26607360391, 98.97242370140], {icon: greenIcon}).addTo(map).bindPopup("KPHL Unit IX Serdang Bedagai, Jln. Kartini No. 57 Kota Tebing Tinggi Provinsi Sumatera Utara");


// Unit X
var greenIcon = L.icon({
    iconUrl: 'img/Unit X mark.png',
    iconSize:     [50, 75], // size of the icon
    shadowSize:   [50, 64], // size of the shadow
    iconAnchor:   [22, 94], // point of the icon which will correspond to marker's location
    shadowAnchor: [4, 62],  // the same for the shadow
    popupAnchor:  [-3, -76] // point from which the popup should open relative to the iconAnchor
});

L.marker([3.22020055091, 99.63116603670], {icon: greenIcon}).addTo(map);

var LeafIcon = L.Icon.extend({
    options: {
        shadowUrl: 'img/Unit X mark.png',
        iconSize:     [38, 95],
        shadowSize:   [50, 64],
        iconAnchor:   [22, 94],
        shadowAnchor: [4, 62],
        popupAnchor:  [-3, -76]
    }
});

// var greenIcon = new LeafIcon({iconUrl: 'img/kph2.png'});

L.icon = function (options) {
    return new L.Icon(options);
};

L.marker([3.22020055091, 99.63116603670], {icon: greenIcon}).addTo(map).bindPopup("KPHL Unit X Batu Bara, Jln. Lintas Sumatera Desa Petatal Kecamatan Talawi Kabupaten Batu Bara Provinsi Sumatera Utara");


// Unit XII
var greenIcon = L.icon({
    iconUrl: 'img/unit XII mark.png',
    iconSize:     [50, 75], // size of the icon
    shadowSize:   [50, 64], // size of the shadow
    iconAnchor:   [22, 94], // point of the icon which will correspond to marker's location
    shadowAnchor: [4, 62],  // the same for the shadow
    popupAnchor:  [-3, -76] // point from which the popup should open relative to the iconAnchor
});

L.marker([2.76875899525, 98.98531695260], {icon: greenIcon}).addTo(map);

var LeafIcon = L.Icon.extend({
    options: {
        shadowUrl: 'img/unit XII mark.png',
        iconSize:     [38, 95],
        shadowSize:   [50, 64],
        iconAnchor:   [22, 94],
        shadowAnchor: [4, 62],
        popupAnchor:  [-3, -76]
    }
});

// var greenIcon = new LeafIcon({iconUrl: 'img/kph2.png'});

L.icon = function (options) {
    return new L.Icon(options);
};

L.marker([2.76875899525, 98.98531695260], {icon: greenIcon}).addTo(map).bindPopup("KPHP Unit XII Simalungun, Jln. Gunung Simanuk-manuk No.9 Pematangsiantar (dekat Siantar Zoo, depan Rumah Sakit Tentara Siantar)");







    </script>
    <!-- Backend Bundle JavaScript -->
    <script src="{{ asset('assets/js/backend-bundle.min.js') }}"></script>

    <!-- Flextree Javascript-->
    <script src="{{ asset('assets/js/flex-tree.min.js') }}"></script>
    <script src="{{ asset('assets/js/tree.js') }}"></script>

    <!-- Table Treeview JavaScript -->
    <script src="{{ asset('assets/js/table-treeview.js') }}"></script>

    <!-- Masonary Gallery Javascript -->
    <script src="{{ asset('assets/js/masonry.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/js/imagesloaded.pkgd.min.js') }}"></script>

    <!-- Mapbox Javascript -->
    <script src="{{ asset('assets/js/mapbox-gl.js') }}"></script>
    <script src="{{ asset('assets/js/mapbox.js') }}"></script>

    <!-- Fullcalender Javascript -->
    <script src='{{ asset('assets/vendor/fullcalendar/core/main.js') }}'></script>
    <script src='{{ asset('assets/vendor/fullcalendar/daygrid/main.js') }}'></script>
    <script src='{{ asset('assets/vendor/fullcalendar/timegrid/main.js') }}'></script>
    <script src='{{ asset('assets/vendor/fullcalendar/list/main.js') }}'></script>

    <!-- SweetAlert JavaScript -->
    <script src="{{ asset('assets/js/sweetalert.js') }}"></script>

    <!-- Vectoe Map JavaScript -->
    <script src="{{ asset('assets/js/vector-map-custom.js') }}"></script>

    <!-- Chart Custom JavaScript -->
    <script src="{{ asset('assets/js/customizer.js') }}"></script>

    <!-- Chart Custom JavaScript -->
    <script src="{{ asset('assets/js/chart-custom.js') }}"></script>
    <script src="{{ asset('assets/js/charts/01.js') }}"></script>
    <script src="{{ asset('assets/js/charts/02.js') }}"></script>

    <!-- slider JavaScript -->
    <script src="{{ asset('assets/js/slider.js') }}"></script>

    <!-- Emoji picker -->
    <script src="{{ asset('assets/vendor/emoji-picker-element/index.js') }}" type="module"></script>

    <!-- app JavaScript -->
    <script src="{{ asset('assets/js/app.js') }}"></script>
    <script type="text/javascript">
    $(document).ready(function(){
        var halaman=getCookie("halaman");
        if (halaman == "") {
            setCookie("halaman", "home.php", 30);
            $('.halaman-menu').load(getCookie("halaman"));
        } else {
            $('.halaman-menu').load(getCookie("halaman"));
        }

        $('.nav-menu').click(function(){
            var menu = $(this).attr('id');
            setCookie("halaman", menu + ".php", 30);
            $('.halaman-menu').load(getCookie("halaman"));
        });
    });

    function setCookie(cname,cvalue,exdays) {
      var d = new Date();
      d.setTime(d.getTime() + (30*24*60*60*1000));
      var expires = "expires=" + d.toGMTString();
      document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
    }

    function getCookie(cname) {
      var name = cname + "=";
      var decodedCookie = decodeURIComponent(document.cookie);
      var ca = decodedCookie.split(';');
      for(var i = 0; i < ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') {
          c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
          return c.substring(name.length, c.length);
        }
      }
      return "";
    }
</script>
@include('sweetalert::alert')
</body>
</html>
