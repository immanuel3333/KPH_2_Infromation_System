@include('layouts.header')
</div>
<div class="content-page">
<div class="container-fluid ">
   <div class="row">
    <div class="col-lg-12">
        <div class="card">
           <div class="card-body p-0">
              <div class="mm-edit-list usr-edit">
                 <ul class="mm-edit-profile d-flex nav nav-pills">
                    <li class="col-md-3 ">
                       <a class="nav-link active" data-toggle="pill" href="#personal-information">
                       Data Kepegawaian
                       </a>
                    </li>
                    <li class="col-md-3 ">
                       <a class="nav-link" data-toggle="pill" href="#chang-pwd">
                       Data Pribadi
                       </a>
                    </li>

                 </ul>
              </div>
           </div>
        </div>
     </div>
    </div>

    <div class="col-lg-12 mt-1">
        <div class="mm-edit-list-data">
           <div class="tab-content">
              <div class="tab-pane fade active show" id="personal-information" role="tabpanel">
                 <div class="card">
                    <div class="card-header d-flex justify-content-between">
                       <div class="header-title">
                          <h4 class="card-title">Employee Information</h4>
                       </div>
                    </div>
                    <div class="card-body">
                       <form>
                          <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('NIP') }}</label>
                               <div class="col-md-6">
                               <input id="nnip" type="text" class="form-control " name="nnip" value="" required autocomplete="nnip" autofocus>
                               </div>
                          </div>
                          <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Email') }}</label>
                               <div class="col-md-6">
                               <input id="nemail" type="text" class="form-control " name="nemail" value="" required autocomplete="nemail" autofocus>
                               </div>
                          </div>
                          <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Seksi') }}</label>
                               <div class="col-md-6">
                               <input id="nseksi" type="text" class="form-control " name="nseksi" value="" required autocomplete="nseksi" autofocus>
                               </div>
                          </div>
                       </form>
                    </div>
                 </div>
              </div>
              <div class="tab-pane fade" id="chang-pwd" role="tabpanel">
                 <div class="card">
                    <div class="card-header d-flex justify-content-between">
                       <div class="header-title">
                          <h4 class="card-title">Personal Information</h4>
                       </div>
                    </div>
                    <div class="card-body">
                       <form>
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nama') }}</label>
                               <div class="col-md-6">
                               <input id="nama" type="text" class="form-control " name="nama" value="" required autocomplete="nama" autofocus>
                               </div>
                        </div>
                           <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Tempat / Tanggal Lahir') }}</label>
                               <div class="col-md-6">
                               <input id="ttl" type="text" class="form-control " name="ttl" value="" required autocomplete="ttl" autofocus>
                               </div>
                           </div>
                           <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Jenis Kelamin') }}</label>
                               <div class="col-md-6">
                               <input id="gender" type="text" class="form-control " name="gender" value="" required autocomplete="gender" autofocus>
                               </div>
                           </div>
                           <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Alamat') }}</label>
                               <div class="col-md-6">
                               <input id="alamat" type="text" class="form-control " name="alamat" value="" required autocomplete="alamat" autofocus>
                               </div>
                           </div>
                           <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Agama') }}</label>
                               <div class="col-md-6">
                               <input id="agama" type="text" class="form-control " name="agama" value="" required autocomplete="agama" autofocus>
                               </div>
                           </div>
                           <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('No. Telepon') }}</label>
                               <div class="col-md-6">
                               <input id="telp" type="text" class="form-control " name="telp" value="" required autocomplete="telp" autofocus>
                               </div>
                           </div>

                        </div>
                       </form>
                    </div>
                 </div>
              </div>

           </div>
        </div>
     </div>
  </div>
</div>
</div>
</body>

<!-- Wrapper End-->
<footer class="mm-footer">
    <div class="container-fluid text-center">
        <div class="row">
        <div class="col-lg-3 text-center">
                Kontak
            </div>
            <div class="col-lg-3 text-center">
                Medsos
            </div>
            <div class="col-lg-3 text-center">
                Alamat
            </div>

            <br>
        </div>
    </div>
        <div class="row">
            <div class="col-lg-12 text-center">
                <span class="mr-1">
                    Copyright
                    <script>document.write(new Date().getFullYear())</script>© <a href="#" class="">Tim Forest II KP IT Del</a>
                    All Rights Reserved.
                </span>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">

            </div>
        </div>
    </div>
</footer>



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
        maxZoom: 20,
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
<script src="{{ asset('assets/js/app.js') }}"></script>  </body>
</html>

