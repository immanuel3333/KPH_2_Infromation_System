@include('layouts.headeradmin')
</div>
<div class="content-page" style="background: url('{{ asset('img/backgroundadmin.png') }}');background-size:850px;background-repeat: repeat-y;background-position:center ;">
    <div class="container-fluid " style="margin-top: -110px">
    <div class="card" style="padding-top:100px;">
        <h1 class="text-center" style="font-size:36px; font-family:Poppins;">Kelola Data Ekonomi</h1><br>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.1.1.min.js"></script>

        <nav class="nav" id="menu">
            <a class="nav-link active" href="javascript:void()" onclick="potensiekonomi()">Potensi</a>
            <a class="nav-link" href="javascript:void()" onclick="jasalingkungan1()">Jasa Lingkungan</a>
          </nav>
        <hr>
		<div class="konten" id="konten">

		</div>
    </div>
</div>
</div>
		 <script type="text/javascript">

			function potensiekonomi(){
                $.get("{{url('showpotensiekonomi1')}}", function(data) {
                $("#konten").html(data);
                });
            }
            function jasalingkungan1(){
                $.get("{{url('showjasalingkungan1')}}", function(data2) {
                $("#konten").html(data2);
                });
            }
            $('.konten').load("{{url('showpotensiekonomi1')}}");


		 </script>

@include('layouts.footer')
