@include('layouts.headeradminunit4')
</div>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>
<script src="https://code.iconify.design/1/1.0.6/iconify.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>
<script src="https://code.iconify.design/1/1.0.6/iconify.min.js"></script>

<div class="content-page">
    <div class="container-fluid">
       <!--==========================
                Portfolio Section
        ============================-->
        <h1 class="text-center" style="font-size:36px; font-family:Poppins;">Galeri Unit </h1>

            <div class="card-deck">
                    @foreach($gl4 as $gl)
                                <div class="col-md-4 mt-4">
                                    <div class="card" style="width:20rem">
                                        <a href="{{ asset($gl->gambar)}}" class="fancybox" data-fancybox = "galery1">
                                            <img class="card-img-top" src="{{ asset($gl->gambar)}}" style="width:100%">
                                        </a>
                                        <div class="card-body">
                                            <p class="card-text">{{$gl->keterangan}}</p>
                                            <p class="card-text"><small class="text-muted">{{$gl->tanggal}}</small></p>
                                            <a href="{{ url('viewgaleriunitkerja4',$gl->id)}}"><i class="fas fa-edit"></i></a>
                                            <a href="{{ url('destroygaleriunitkerja4',$gl->id)}}"><i class="fas fa-trash-alt" style="color:red;"></i></a>
                                        </div>
                                    </div>

                                </div>
                    @endforeach
                </div>
            </div>

                        <br>
                        <a href="{{url('/inputgaleriunitkerja4')}}" >
                            <button type="submit" class="btn" style="background-color: #99F07A; float:right;">Tambah</button>
                        </a>

    </div>
</div>

    @include('layouts.footer')

