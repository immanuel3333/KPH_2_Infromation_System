@include('layouts.headeradmin')
</div>

<div class="content-page" style="background: url('{{ asset('img/backgroundadmin.png') }}');background-size:850px;background-repeat: repeat-y;background-position:center ;">
    <div class="container-fluid ">
    <h1 class="text-center" style="font-size:50px; font-family:Balthazar;">Tugas dan Fungsi</h1>
     <div class="col-md-12">
     <p class="text-justify" style="font-size:35px; font-family:Balthazar;">Sesuai dengan Peraturan Daerah Provinsi Sumatera Utara Nomor 8 Tahun 2008 tanggal 28 November 2008 tentang Organisasi dan Tata Kerja Dinas-Dinas Daerah Provinsi Sumatera Utara, Dinas Kehutanan menyelenggarakan tugas dan fungsi sebagai berikut :</p>
            @foreach($tf as $tf)
        <p style="font-size:40px; font-family:Balthazar;"> Tugas : </p><br>
               {!! $tf->tugas !!} 
        <p style="font-size:40px; font-family:Balthazar;"> Fungsi : </p><br>
                {!! $tf->fungsi !!}
            <br>
            <a href="{{url('/view2')}}/{{$tf->id}}" class="ml-auto">
            <button type="submit" class="btn" style="background-color: #99F07A;">Edit</button>  
            </a>
                            
            </div>
        @endforeach
     </div>
    </div>

    @include('layouts.footer')