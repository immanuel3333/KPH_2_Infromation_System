</div>
<div class="bg-light text-muted pt-5" style="position:bottom;">
            <section class="col-md-12 col-sm-12">
                <div class="text-center" style="background-color:#0C3310;">
                    <div class="row">
                        <div class="col-md-3">
                            <img src="{{ asset('img/logo1.png')}}" style="padding-top:50px; padding-leftpx:10px;" alt="" height="200" width="200">
                        </div>
                        <div class="col-md-3" style="text-align:left;">
                            <div class="row">
                                <div class="col-md">
                                    <p style="font-family:Balthazar; font-size:25px; color:white;">Kontak Kami</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md" style="line-height:1px;">
                                    <p style="font-family:Balthazar; font-size:20px; color:#878181;">Nomor Telepon </p>
                                    <p style="font-family:Balthazar; font-size:15px; color:white;">+62 0622-21216 </p>

                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md" style="line-height:0.5px;">
                                    <p style="font-family:Balthazar; font-size:20px; color:#878181;">Email </p>
                                    <p style="font-family:Balthazar; font-size:15px; color:white; height:auto;">uptkphwilayah2siantar@gmail.com </p>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-3" style="text-align:left;">
                            <div class="row">
                                <div class="col-md">
                                    <p style="font-family:Balthazar; font-size:25px;color:white;">Media Sosial</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md">
                                    <img src="img/fb.png" style="padding-left:50px;" alt="">
                                    <br>
                                    <p class="pl-4" style="font-family:Balthazar; font-size:18px; color:white; padding-top:25px;">Kph Pematangsiantar</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3" style="text-align:left;">
                            <div class="row">
                                <div class="col-md">
                                    <p style="font-family:Balthazar; font-size:25px;color:white;">Lokasi</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md">
                                    <p style="font-family:Balthazar; font-size:20px;color:white;">Jln. Gunung Simanuk-manuk No.9 Pematangsiantar
(dekat Siantar Zoo, depan Rumah Sakit Tentara Siantar) </p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <div class="text-center border border-white" style="background-color: #0C3310;">
                © 2021 Copyright:
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
        var map = L.map('mapid').setView([2.951442, 99.057523], 25);

        // L.esri.basemapLayer('ImageryFirefly').addTo(map);
                googleStreets = L.tileLayer('http://{s}.google.com/vt/lyrs=m&x={x}&y={y}&z={z}',{
            maxZoom: 8,
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
    iconSize:     [50, 100], // size of the icon
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

L.marker([2.9514596123305656, 99.05752741133092], {icon: greenIcon}).addTo(map).bindPopup("Kantor dinas kehutanan");

// Unit vi
var greenIcon = L.icon({
    iconUrl: 'img/kph2.png',
    iconSize:     [50, 100], // size of the icon
    shadowSize:   [50, 64], // size of the shadow
    iconAnchor:   [22, 94], // point of the icon which will correspond to marker's location
    shadowAnchor: [4, 62],  // the same for the shadow
    popupAnchor:  [-3, -76] // point from which the popup should open relative to the iconAnchor
});

L.marker([3.10527455742, 98.85584026240], {icon: greenIcon}).addTo(map);

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

L.marker([3.10527455742, 98.85584026240], {icon: greenIcon}).addTo(map).bindPopup("Unit VI Simalungun");


// Unit IX
var greenIcon = L.icon({
    iconUrl: 'img/kph2.png',
    iconSize:     [50, 100], // size of the icon
    shadowSize:   [50, 64], // size of the shadow
    iconAnchor:   [22, 94], // point of the icon which will correspond to marker's location
    shadowAnchor: [4, 62],  // the same for the shadow
    popupAnchor:  [-3, -76] // point from which the popup should open relative to the iconAnchor
});

L.marker([3.26607360391,98.97242370140], {icon: greenIcon}).addTo(map);

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

L.marker([3.26607360391, 98.97242370140], {icon: greenIcon}).addTo(map).bindPopup("Unit IX");


// Unit X
var greenIcon = L.icon({
    iconUrl: 'img/kph2.png',
    iconSize:     [50, 100], // size of the icon
    shadowSize:   [50, 64], // size of the shadow
    iconAnchor:   [22, 94], // point of the icon which will correspond to marker's location
    shadowAnchor: [4, 62],  // the same for the shadow
    popupAnchor:  [-3, -76] // point from which the popup should open relative to the iconAnchor
});

L.marker([3.22020055091, 99.63116603670], {icon: greenIcon}).addTo(map);

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

L.marker([3.22020055091, 99.63116603670], {icon: greenIcon}).addTo(map).bindPopup("Unit X");


// Unit XII
var greenIcon = L.icon({
    iconUrl: 'img/kph2.png',
    iconSize:     [50, 100], // size of the icon
    shadowSize:   [50, 64], // size of the shadow
    iconAnchor:   [22, 94], // point of the icon which will correspond to marker's location
    shadowAnchor: [4, 62],  // the same for the shadow
    popupAnchor:  [-3, -76] // point from which the popup should open relative to the iconAnchor
});

L.marker([2.76875899525, 98.98531695260], {icon: greenIcon}).addTo(map);

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

L.marker([2.76875899525, 98.98531695260], {icon: greenIcon}).addTo(map).bindPopup("Unit XII");







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
