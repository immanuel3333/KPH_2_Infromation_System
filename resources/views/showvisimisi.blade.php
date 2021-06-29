@include('layouts.headeradmin')
</div>

<div class="content-page">
    <div class="card">
        <p>Profil</p><br>
        <a>Visi dan Misi</a>
    </div>
    <div class="container-fluid ">
     <div class="card col-12">
        <p ><b> Visi dan Misi </p><br>
        <p ><b> VISI : </p><br>
            <p>
                {{$var_visi}}
            </p>
        <p ><b> MISI : </p><br>
            <p>
                {{$var_misi}}
            </p>
            <br>
        <div class="row">
            <div class="col-md-4">

            </div>
            <div class="col-md-4">

            </div>
            <div class="col-md-4">
                <a href="{{route('inputvisimisi')}}"button type="button" class="btn btn-dark">Atur</a>
            </div>
        </div>
     </div>
    </div>

    @include('layouts.footer')
