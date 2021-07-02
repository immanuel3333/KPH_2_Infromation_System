@include('layouts.headeradmin')
</div>

<div class="content-page">
    <div class="card">
        <p>Profil</p><br>
        <a>Tugas dan Fungsi</a>
    </div>
    <div class="container-fluid ">
     <div class="card col-12">
        <p ><b> Visi dan Misi </p><br>
            @foreach($tf as $tf)
        <p ><b> Tugas : </p><br>
            <p>
                {{ $tf->tugas }}
            </p>
        <p ><b> Fungsi : </p><br>
            <p>
                {{ $tf->fungsi }}
            </p>
            <br>
        <div class="row">
            <div class="col-md-4">
            <a href="{{url('/view')}}/{{$tf->id}}"button type="button" class="btn btn-dark">Edit</a>
            </div>
            <div class="col-md-4">

            </div>
            <div class="col-md-4">
                <a href="{{route('inputtugasfungsi')}}"button type="button" class="btn btn-dark">Atur</a>
            </div>
        </div>
        @endforeach
     </div>
    </div>

    @include('layouts.footer')
