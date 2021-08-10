@include('layouts.header')
</div>

<div class="content-page" style="background: url('{{ asset('img/backgroundadmin.png') }}');background-size:850px;background-repeat: repeat-y;background-position:center ;">

        <!-- <div class="row">
            @foreach ($artikelall as $a)
                <div class="col-md-6">
                    <div class="card bg-secondary text-white">
                        <img src="{{ asset($a->gambar) }}" class="card-img" alt="#" width="700" height="500">
                            <div class="card-img-overlay  d-flex align-items-end" style="padding-bottom:50px;">
                            <a href="#">
                                <h4 class="card-title text-white">{{$a->judul}}</h4>
                            </a>   
                    </div>
                    <div> 
                        <span style="color:black;">{{$a->created_at->diffForHumans()}}</span>
                    </div>
                </div>
        </div>
            @endforeach -->

            <div class="row">  
                @foreach($artikelall as $a)
                <div class="col-md-4"  style="padding-bottom:50px">
                    <img src="{{ asset($a->gambar) }}" width="500px"; height="300px";>  
                </div>
                <div class="col-md-8">  
                    <h2>{{$a->judul}}</h2>  
                     <p style=" white-space: nowrap; overflow: hidden; text-overflow: ellipsis; max-width: 200px;">{{$a->artikel}}</p>  
                    <a href="{{ route('detail-artikel',$a->id) }}" class="btn btn-primary">Baca Selengkapnya</a>   
                    <p>  
                        <a href="" class="btn btn-inverse">Diposkan pada {{$a->created_at->diffForHumans()}}</a> 
                    </p>  
                </div>    

                @endforeach 
            </div>  

</div>




@include('layouts.footer')
