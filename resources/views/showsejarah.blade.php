@include('layouts.headeradmin')
</div>

<div class="content-page" style="background: url('{{ asset('img/backgroundadmin.png') }}');background-size:850px;background-repeat: repeat-y;background-position:center ;">
    <div class="container-fluid">
    <h1 class="text-center" style="font-size:50px; font-family:Balthazar;">Sejarah</h1>
     <div class=" col-md-12 bg1">
            @foreach($sj as $sj)
            <center>
            <br>
            <img src="{{ asset($sj->gambar)}}" width=1204px; height=571px;>
            </center>
            <div style="font-size:40px; font-family:Balthazar;text-align: justify;"> {!! $sj->sejarah !!} </p>  
            <br>
            <a href="{{url('/view3')}}/{{$sj->id}}" class="ml-auto">
            <button type="submit" class="btn" style="background-color: #99F07A;">Edit</button>  
            </a>
                            
            </div>
        @endforeach
     </div>
    </div>

    @include('layouts.footer')
