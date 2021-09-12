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
        <form action="{{ route('simpan-ekologi')}}" method="post" enctype="multipart/form-data">
        @csrf
            <div class="row">
                <div class="card col-md-12">

                            <div class="form-group pt-1">
                                <p>Jenis Tanah</p>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="jenis_tanah" id="jenis_tanah" placeholder="jenis tanah..." required autofocus>
                                </div>
                            </div>

                            <div class="form-group pt-1">
                                <p>Jenis Kayu</p>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="jenis_kayu" id="jenis_kayu" placeholder="jenis kayu..." required autofocus>
                                </div>
                            </div>

                            <div class="form-group pt-1">
                                <p>Fauna/Satwa</p>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="fauna_satwa" id="fauna_satwa" placeholder="fauna/satwa..." required autofocus>
                                </div>
                            </div>

                            <div class="form-group pt-1">
                                <p>Kelerengan</p>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="kelerengan" id="kelerengan" placeholder="kelerengan..." required autofocus>
                                </div>
                            </div>

                            <div class="form-group pt-1">
                                <p>Kelerengan</p>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="DAS" id="DAS" placeholder="DAS..." required autofocus>
                                </div>
                            </div>
                   
                </div> 
                <button type="submit" class="btn btn-success ml-auto">Simpan</button>
            </div>
        </form>

      
</div>
</div>
    </div>

    @include('layouts.footer')

