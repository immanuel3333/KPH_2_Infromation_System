@include('layouts.header')
</div>

<div class="content-page">
    <div class="container-fluid">
       <!--==========================
                Portfolio Section
        ============================-->
        <div class="card" style="margin-top:50px;">
         <h1 class="text-center" style="font-size:36px; font-family:Poppins;">Galeri UPT</h1>
                        <div class="card-group">
                            <div class="row">
                                @foreach($gl as $gl)
                                            <div class="col-md-4 mt-4">
                                                <div class="card" style="width:20rem">
                                                    <a href="{{ asset($gl->gambar)}}" class="fancybox" data-fancybox = "galery1">
                                                        <img class="card-img-top" src="{{ asset($gl->gambar)}}" style="width:100%">
                                                    </a>
                                                    <div class="card-body">
                                                        <p class="card-text">{{$gl->keterangan}}</p>
                                                        <p class="card-text"><small class="text-muted">{{$gl->tanggal}}</small></p>
                                                    </div>
                                                </div>

                                            </div>
                                @endforeach
                            </div>
                        </div>
                        <br>

        </div>
    </div>

                </section>



    </div>

    @include('layouts.footer')

