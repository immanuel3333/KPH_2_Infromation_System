@include('layouts.headeradminunit2')
</div>

<div class="content-page">
    <div class="container-fluid">
       <!--==========================
                Portfolio Section
        ============================-->

        <h1 class="text-center" style="font-size:36px; font-family:Poppins;">Galeri Unit</h1>
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
                                                        <a href="{{ url('viewgaleriunitkerja',$gl->id)}}"><i class="fas fa-edit"></i></a>
                                                        <a href="{{ url('destroygaleriunitkerja',$gl->id)}}"><i class="fas fa-trash-alt" style="color:red;"></i></a>
                                                    </div>
                                                </div>

                                            </div>
                                @endforeach
                            </div>
                        </div>
                        <br>
                        <a href="{{url('/inputgaleriunitkerja2')}}" >
                            <button type="submit" class="btn" style="background-color: #99F07A; float:right;">Tambah</button>
                        </a>
                    </div>


                </section>



    </div>

    @include('layouts.footer')

