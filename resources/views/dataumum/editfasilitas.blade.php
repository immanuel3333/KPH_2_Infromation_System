@include('layouts.headeradmin')
@if(count($errors)>0)
<br> <br> <br> <br>
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
        <form action="{{ route('update-fasilitas', $fs->id) }}" method="post" enctype="multipart/form-data">
        @csrf
            <div class="row">
                <div class="card col-md-12">
                    <div class="form-group pt-1">
                        <p>Aspek</p>
                        <div class="form-group">
                            <input type="text" class="form-control" name="aspek" id="aspek" value="{{$fs->aspek}}" placeholder="Aspek...">
                        </div>
                    </div>

                    <div class="form-group pt-1">
                        <p>Jumlah</p>
                        <div class="form-group">
                            <input type="text" class="form-control" name="jumlah" id="jumlah" value="{{$fs->jumlah}}" placeholder="Jumlah...">
                        </div>
                    </div>
                    <div class="form-group pt-1">
                        <p>Kondisi</p>
                        <div class="form-group">
                            <input type="text" class="form-control" name="kondisi" id="kondisi" value="{{$fs->kondisi}}" placeholder="Kondisi...">
                        </div>
                    </div>
                    <div class="form-group pt-1">
                        <p>Status</p>
                        <div class="form-group">
                            <input type="text" class="form-control" name="status" id="status" value="{{$fs->status}}" placeholder="Status...">
                        </div>
                    </div>
                    <div class="form-group pt-1">
                        <p>Sumber Dana</p>
                        <div class="form-group">
                            <input type="text" class="form-control" name="sumberdana" id="sumberdana" value="{{$fs->sumberdana}}" placeholder="Sumber Dana...">
                        </div>
                    </div>

                </div>
                <button type="submit" class="btn btn-success ml-auto">Simpan</button>
            </div>
        </form>

        </div>

    </div>

    @include('layouts.footer')

