@include('layouts.headeradmin')
</div>
<div class="content-page" style="background: url('{{ asset('img/backgroundadmin.png') }}');background-size:850px;background-repeat: repeat-y;background-position:center ;">
    <div class="container-fluid " style="margin-top: -110px">
        <div class="card mb-15">
        <p class="text-center " style="font-size:39px;">Kelola Data Umum</p><br>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.1.1.min.js"></script>

        <nav class="nav" id="menu">
            <a class="nav-link active" href="javascript:void()" onclick="potensiekonomi()">Potensi</a>
            <a class="nav-link" href="javascript:void()" onclick="jasalingkungan2()">Jasa Lingkungan</a>
          </nav>
        <hr>
      </div>
		<div class="konten" id="konten">

		</div>
    </div>
		 <script type="text/javascript">

			function potensiekonomi(){
                $.get("{{url('showpotensiekonomi2')}}", function(data) {
                $("#konten").html(data);
                });
            }
            function jasalingkungan2(){
                $.get("{{url('showjasalingkungan2')}}", function(data2) {
                $("#konten").html(data2);
                });
            }
            $('.konten').load("{{url('showpotensiekonomi2')}}");


		 </script>

@include('layouts.footer')
