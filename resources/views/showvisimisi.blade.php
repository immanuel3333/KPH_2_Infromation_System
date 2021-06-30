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
            @foreach($visimisi as $vm)
        <p ><b> VISI : </p><br>
            <p>
                {{ $vm->visi }}
            </p>
        <p ><b> MISI : </p><br>
            <p>
                {{ $vm->misi }}
            </p>
            <br>
        <div class="row">
            <div class="col-md-4">
                <a href="{{route('editvisimisi',$vm->id)}}"button type="button" class="btn btn-dark">Edit</a>
            </div>
            <div class="col-md-4">

            </div>
            <div class="col-md-4">
                <a href="{{route('inputvisimisi')}}"button type="button" class="btn btn-dark">Atur</a>
            </div>
        </div>
        @endforeach
     </div>
    </div>

    @include('layouts.footer')
