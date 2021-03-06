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
        <form action="{{ route('update-ekologi', $pe->id) }}" method="post" enctype="multipart/form-data">
        @csrf
            <div class="row">
                <div class="card col-md-12">

                    <div class="form-group pt-4">
                        <p>Jenis Tanah</p>
                        <textarea name="jenis_tanah" id="jenis_tanah" cols="150" rows="20">{{$pe->jenis_tanah}}
                        </textarea>
                        <script>CKEDITOR.replace('jenis_tanah');</script>
                    </div>

                    <div class="form-group pt-4">
                        <p>Jenis Kayu</p>
                        <textarea name="jenis_kayu" id="jenis_kayu" cols="150" rows="20">{{$pe->jenis_kayu}}
                        </textarea>
                        <script>CKEDITOR.replace('jenis_kayu');</script>
                    </div>

                    <div class="form-group pt-4">
                        <p>Fauna/Satwa	</p>
                        <textarea name="fauna_satwa" id="fauna_satwa" cols="150" rows="20">{{$pe->fauna_satwa}}
                        </textarea>
                        <script>CKEDITOR.replace('fauna_satwa');</script>
                    </div>

                    <div class="form-group pt-4">
                        <p>Kelerengan</p>
                        <textarea name="kelerengan" id="kelerengan" cols="150" rows="20">{{$pe->kelerengan}}
                        </textarea>
                        <script>CKEDITOR.replace('kelerengan');</script>
                    </div>

                    <div class="form-group pt-4">
                        <p>DAS</p>
                        <textarea name="DAS" id="DAS" cols="150" rows="20">{{$pe->DAS}}
                        </textarea>
                        <script>CKEDITOR.replace('DAS');</script>
                    </div>
                    <button type="submit" class="btn btn-success ml-auto">Simpan</button>
                </div> 
                
            </div>
        </form>

        </div>

    </div>

    @include('layouts.footer')

