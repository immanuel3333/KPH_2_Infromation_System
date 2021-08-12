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
        <form action="{{ route('simpan-lembaga2')}}" method="post" enctype="multipart/form-data">
        @csrf
            <div class="row">
                <div class="card col-md-12">
                    <div class="form-group pt-1">
                            <p>Unit</p>
                            <div class="form-group">
                                <input type="text" class="form-control" name="unit" id="unit" placeholder="Unit...">
                            </div>
                    </div>
                    <div class="form-group pt-1">
                        <p>Provinsi</p>
                        <div class="form-group">
                            <input type="text" class="form-control" name="provinsi" id="provinsi" placeholder="Provinsi...">
                        </div>
                    </div>
                    <div class="form-group pt-1">
                        <p>Jenis Kelembagaan</p>
                        <div class="form-group">
                            <input type="text" class="form-control" name="jenislembaga" id="jenislembaga" placeholder="Jenis Kelembagaan...">
                        </div>
                    </div>
                    <div class="form-group pt-1">
                        <p>Kepala Seksi</p>
                        <div class="form-group">
                            <input type="text" class="form-control" name="kepseksi" id="kepseksi" placeholder="Status...">
                        </div>
                    </div>
                    <div class="form-group pt-1">
                        <p>Petugas Kph</p>
                        <div class="form-group">
                            <input type="text" class="form-control" name="petugaskph" id="petugaskph" placeholder="Petugas Kph...">
                        </div>
                    </div>
                    <div class="form-group pt-1">
                        <p>No Handphone Petugas</p>
                        <div class="form-group">
                            <input type="text" class="form-control" name="teleponpetugas" id="teleponpetugas" placeholder="No Handphone Petugas...">
                        </div>
                    </div>
                    <div class="form-group pt-1">
                        <p>Email Petugas</p>
                        <div class="form-group">
                            <input type="text" class="form-control" name="emailpetugas" id="emailpetugas" placeholder="Email Petugas...">
                        </div>
                    </div>
                    <div class="form-group pt-1">
                        <p>SK Lembaga</p>
                        <div class="form-group">
                            <input type="text" class="form-control" name="sklembaga" id="sklembaga" placeholder="">
                        </div>
                    </div>
                    <div class="form-group pt-1">
                        <p>Tanggal SK Lembaga</p>
                        <div class="form-group">
                            <input type="date" class="form-control" name="tglsklembaga" id="tglsklembaga" placeholder="">
                        </div>
                    </div>
                    <div class="form-group pt-1">
                        <p>Dokumen SK Lembaga</p>
                        <div class="form-group">
                            <input type="file" class="form-control" name="doksklembaga" id="doksklembaga" placeholder="">
                        </div>
                    </div>
                    <div class="form-group pt-1">
                        <p>Status Blud</p>
                        <div class="form-group">
                            <input type="text" class="form-control" name="statblud" id="statblud" placeholder="">
                        </div>
                    </div>
                    <div class="form-group pt-1">
                        <p>SK Blud</p>
                        <div class="form-group">
                            <input type="text" class="form-control" name="skblud" id="skblud" placeholder="">
                        </div>
                    </div>
                    <div class="form-group pt-1">
                        <p>Dokumen SK Blud</p>
                        <div class="form-group">
                            <input type="file" class="form-control" name="dokskblud" id="dokskblud" placeholder="">
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-success ml-auto">Simpan</button>
            </div>
        </form>



    </div>

    @include('layouts.footer')

