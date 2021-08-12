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
<div class="content-page" style="background: url('{{ asset('img/backgroundadmin.png') }}');background-size:850px;background-repeat: repeat-y;background-position:center ;">
<div class="container-fluid">
    <div class="animated fadeIn">
      <div class="row">
        <div class="col-sm-12 col-md-8 col-lg-8 col-xl-8">
              <div class="card-body">
                <form method="POST" action="{{ route('update-lembaga', $lm->id) }}" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="card col-md-12">
                            <div class="form-group pt-1">
                                <p>Unit</p>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="unit" value="{{$lm->unit}}">
                                </div>
                        </div>
                        <div class="form-group pt-1">
                            <p>Provinsi</p>
                            <div class="form-group">
                                <input type="text" class="form-control" name="provinsi" value="{{$lm->provinsi}}">
                            </div>
                        </div>
                        <div class="form-group pt-1">
                            <p>Jenis Kelembagaan</p>
                            <div class="form-group">
                                <input type="text" class="form-control" name="jenislembaga" value="{{$lm->jenislembaga}}">
                            </div>
                        </div>
                        <div class="form-group pt-1">
                            <p>Kepala Seksi</p>
                            <div class="form-group">
                                <input type="text" class="form-control" name="kepseksi" value="{{$lm->kepseksi}}">
                            </div>
                        </div>
                        <div class="form-group pt-1">
                            <p>Petugas Kph</p>
                            <div class="form-group">
                                <input type="text" class="form-control" name="petugaskph" value="{{$lm->petugaskph}}">
                            </div>
                        </div>
                        <div class="form-group pt-1">
                            <p>No Handphone Petugas</p>
                            <div class="form-group">
                                <input type="text" class="form-control" name="teleponpetugas" value="{{$lm->teleponpetugas}}">
                            </div>
                        </div>
                        <div class="form-group pt-1">
                            <p>Email Petugas</p>
                            <div class="form-group">
                                <input type="text" class="form-control" name="emailpetugas" value="{{$lm->emailpetugas}}">
                            </div>
                        </div>
                        <div class="form-group pt-1">
                            <p>SK Lembaga</p>
                            <div class="form-group">
                                <input type="text" class="form-control" name="sklembaga" value="{{$lm->sklembaga}}">
                            </div>
                        </div>
                        <div class="form-group pt-1">
                            <p>Tanggal SK Lembaga</p>
                            <div class="form-group">
                                <input type="date" class="form-control" name="tglsklembaga" value="{{$lm->tglsklembaga}}">
                            </div>
                        </div>
                        <div class="form-group pt-1">
                            <p>Dokumen SK Lembaga</p>
                            <div class="form-group">
                                <input type="file" class="form-control" name="doksklembaga" value="">
                            </div>
                        </div>
                        <div class="form-group pt-1">
                            <p>Status Blud</p>
                            <div class="form-group">
                                <input type="text" class="form-control" name="statblud" value="{{$lm->statblud}}">
                            </div>
                        </div>
                        <div class="form-group pt-1">
                            <p>SK Blud</p>
                            <div class="form-group">
                                <input type="text" class="form-control" name="skblud" value="{{$lm->skblud}}">
                            </div>
                        </div>
                        <div class="form-group pt-1">
                            <p>Dokumen SK Blud</p>
                            <div class="form-group">
                                <input type="file" class="form-control" name="dokskblud" value="">
                            </div>
                        </div>
                        </div>
                      <br>
                      <div class="col-md-12">
                        <button type="submit" class="btn btn-success ml-auto">Simpan</button>
                  </form>
              </div>
      </div>
    </div>
  </div>

  @include('layouts.footer')
