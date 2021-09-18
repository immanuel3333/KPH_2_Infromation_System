@include('layouts.header')
</div>

<div class="content-page" style="background: url('{{ asset('img/backgroundadmin.png') }}');background-size:850px;background-repeat: repeat-y;background-position:center ;">
 <div class="container-fluid">
    <div class="card" style="margin-top:50px;">
    <h1 class="text-center" style="font-size:36px; font-family:Poppins;">Tugas dan Fungsi</h1>
     <div class=" col-md-12 bg1">
        <p class="text-justify" style="font-size:16px; font-family:Poppins;">Sesuai dengan Peraturan Daerah Provinsi Sumatera Utara Nomor 8 Tahun 2008 tanggal 28 November 2008 tentang Organisasi dan Tata Kerja Dinas-Dinas Daerah Provinsi Sumatera Utara, Dinas Kehutanan menyelenggarakan tugas dan fungsi sebagai berikut :</p>
            @foreach($tf as $tf)
        <p style="font-size:24px; font-family:Poppins;"> Tugas : </p>
        <p style="font-size:16px; font-family:Poppins;"> {!! $tf->tugas !!} </p>
        <p style="font-size:24px; font-family:Poppins;"> Fungsi : </p>
        <p style="font-size:16px; font-family:Poppins;"> {!! $tf->fungsi !!} </p>
            <br>

            </div>
        @endforeach
     </div>
    </div>
    </div>

    @include('layouts.footer')
