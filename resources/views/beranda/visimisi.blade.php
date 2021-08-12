@include('layouts.header')
</div>

<div class="content-page" style="background: url('{{ asset('img/backgroundadmin.png') }}');background-size:850px;background-repeat: repeat-y;background-position:center ;">
    <div class="container-fluid">
    <h1 class="text-center" style="font-size:50px; font-family:Balthazar;">Visi dan Misi</h1>
     <div class=" col-md-12 bg1">
     <p class="text-justify" style="font-size:35px; font-family:Balthazar;">   Sebagai bagian dari perangkat pembangunan, proses penyusunan visi dan misi dirumuskan atas dasar kondisi, masalah dan isu-isu strategis yang menjadi tantangan dalam pengelolaan hutan saat ini dan harapan di masa yang akan datang, dengan memperhitungkan modal dasar yang dimiliki KPH Wilayah-II. Berikut adalah lampiran visi dan misi yang telah disusun :</p>
            @foreach($vm as $vm)
        <p style="font-size:40px; font-family:Balthazar;"> Visi : </p><br>
               {!! $vm->visi !!}
        <p style="font-size:40px; font-family:Balthazar;"> Misi : </p><br>
                {!! $vm->misi !!}
            <br>

            </div>
        @endforeach
     </div>
    </div>

    @include('layouts.footer')