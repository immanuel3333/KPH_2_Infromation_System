@include('layouts.headeradmin')
@if(count($errors)>0)
  	@foreach($errors->all() as $error)
  	<div class="alert alert-danger" style="padding-left:100px;" role="alert">
      {{ $error }}
	</div>  		
  	@endforeach
  @endif

  @if(Session::has('success'))
  	<div class="alert alert-success" role="alert">
      {{ Session('success') }}
	</div> 
  @endif
</div>

<div class="content-page"> 
    <div class="container-fluid">
        <form action="{{ route('simpan-potensiekonomi3')}}" method="post" enctype="multipart/form-data">
        @csrf
            <div class="row">
                <div class="card col-md-12">

                <div class="form-group pt-1">
                        <p>Potensi Kayu</p>
                        <div class="form-group">
                            <input type="text" class="form-control" name="kayu" id="kayu"  required autofocus>                        
                        </div>
                    </div>

                    <div class="form-group pt-1">
                        <p>Potensi Non-Kayu</p>
                        <div class="form-group" >
                        <input type="text" class="form-control" name="nonkayu" id="nonkayu"  required autofocus>                        
                    </div>
                    </div>

                    <div class="form-group pt-1">
                        <p>Potensi Jasa Lingkungan</p>
                        <div class="form-group" >
                        <input type="text" class="form-control" name="jasalingkungan" id="jasalingkungan"  required autofocus>                       
                     </div>
                    </div>

                    <div class="form-group pt-1">
                        <p>Rencana Bisnis</p>
                        <div class="form-group" >
                        <input type="text" class="form-control" name="bisnis" id="bisnis"  required autofocus>                        
                    </div>
                    </div>

                    <div class="form-group pt-1">
                        <p>Dukungan Donor</p>
                        <div class="form-group" id="only-number">
                        <input type="number" class="form-control" name="donor" id="donor" required autofocus>                        
                    </div>
                    </div>
                   
                </div> 
                <button type="submit" class="btn btn-success ml-auto">Simpan</button>
            </div>
        </form>

      
        </div>
    </div>

    @include('layouts.footer')

