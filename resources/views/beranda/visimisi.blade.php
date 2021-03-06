@include('layouts.header')
</div>

<div class="content-page" style="background: url('{{ asset('img/backgroundadmin.png') }}');background-size:850px;background-repeat: repeat-y;background-position:center ;">
 <div class="container-fluid">
    <div class="card" style="margin-top:50px;">
    <h1 class="text-center" style="font-size:36px; font-family:Poppins;">Visi dan Misi</h1>
     <div class=" col-md-12 bg1">
     <p class="text-justify" style="font-size:16px; font-family:Poppins;">   Sebagai bagian dari perangkat pembangunan, proses penyusunan visi dan misi dirumuskan atas dasar kondisi, masalah dan isu-isu strategis yang menjadi tantangan dalam pengelolaan hutan saat ini dan harapan di masa yang akan datang, dengan memperhitungkan modal dasar yang dimiliki KPH Wilayah-II. Berikut adalah lampiran visi dan misi yang telah disusun :</p>
            @foreach($vm as $vm)
        <p style="font-size:24px; font-family:Balthazar;"> Visi : </p>
        <p style="font-size:16px; font-family:Balthazar;"> {!! $vm->visi !!} </p>
        <p style="font-size:24px; font-family:Balthazar;"> Misi : </p>
        <p style="font-size:16px; font-family:Balthazar;"> {!! $vm->misi !!} </p>
            <br>
            </div>
        @endforeach
     </div>
    </div>
</div>
    @include('layouts.footer')
