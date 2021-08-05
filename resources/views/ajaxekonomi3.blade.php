@include('layouts.headeradmin')
</div>
<div class="content-page" style="background: url('{{ asset('img/backgroundadmin.png') }}');background-size:850px;background-repeat: repeat-y;background-position:center ;">
    <div class="container-fluid ">


        <nav class="nav" id="menu">
            <a class="nav-link active" href="javascript:void()" onclick="klikhome()">Potensi</a>
            <a class="nav-link" href="javascript:void()" onclick="potensiekonomi()">Jasa Lingkungan</a>
          </nav>

		<div class="konten" id="konten">

		</div>
		 <script>
			function klikhome(){
                $.get("{{url('showpotensiekonomi3')}}", function(data) {
                $("#konten").html(data);
                });
            }
            function potensiekonomi(){
                $.get("{{url('showjasalingkungan3')}}", function(data2) {
                $("#konten").html(data2);
                });
            }


		 </script>



@include('layouts.footer')
