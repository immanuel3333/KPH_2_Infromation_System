@include('layouts.headeradmin')
</div>
<div class="content-page" style="background: url('{{ asset('img/backgroundadmin.png') }}');background-size:850px;background-repeat: repeat-y;background-position:center ;">
    <div class="container-fluid " style="margin-top: -110px">
    <div class="card" style="padding-top:100px;">
        <h1 class="text-center" style="font-size:36px; font-family:Poppins;">Kelola Data Umum</h1><br>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.1.1.min.js"></script>

        <nav class="nav" id="menu">
            <a class="nav-link active" href="javascript:void()" onclick="klikhome()">Identitas</a>
            <a class="nav-link" href="javascript:void()" onclick="kepalakph()">KepalaKPH</a>
            <a class="nav-link" href="javascript:void()" onclick="fasilitas()">Fasilitas</a>
            <a class="nav-link" href="javascript:void()" onclick="lembaga()">Lembaga</a>
            <a class="nav-link" href="javascript:void()" onclick="rphjp()">RPHJP</a>
          </nav>
        <hr>
		<div class="konten" id="konten">

		</div>
        <div>
</div>
</div>
</div>
    </div>
		 <script type="text/javascript">

			function klikhome(){
                $.get("{{url('identitas4')}}", function(data) {
                $("#konten").html(data);
                });
            }
            function kepalakph(){
                $.get("{{url('kepalakph4')}}", function(data2) {
                $("#konten").html(data2);
                });
            }
            function fasilitas(){
                $.get("{{url('fasilitas4')}}", function(data3) {
                $("#konten").html(data3);
                });
            }
            function lembaga(){
                $.get("{{url('lembaga4')}}", function(data4) {
                $("#konten").html(data4);
                });
            }
            function rphjp(){
                $.get("{{url('rphjp4')}}", function(data5) {
                $("#konten").html(data5);
                });
            }

            $('.konten').load("{{url('identitas4')}}");


		 </script>

@include('layouts.footer')
