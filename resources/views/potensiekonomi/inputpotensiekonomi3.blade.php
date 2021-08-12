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

                    <div class="form-group pt-4">
                        <p>Potensi Kayu</p>
                        <textarea name="kayu" id="kayu" cols="150" rows="20">
                        </textarea>
                        <script>CKEDITOR.replace('kayu');</script>
                    </div>

                    <div class="form-group pt-4">
                        <p>Potensi Non-Kayu</p>
                        <textarea name="nonkayu" id="nonkayu" cols="150" rows="20">
                        </textarea>
                        <script>CKEDITOR.replace('nonkayu');</script>
                    </div>

                    <div class="form-group pt-4">
                        <p>Potensi Jasa Lingkungan	</p>
                        <textarea name="jasalingkungan" id="jasalingkungan" cols="150" rows="20">
                        </textarea>
                        <script>CKEDITOR.replace('jasalingkungan');</script>
                    </div>

                    <div class="form-group pt-4">
                        <p>Rencana Bisnis</p>
                        <textarea name="bisnis" id="bisnis" cols="150" rows="20">
                        </textarea>
                        <script>CKEDITOR.replace('bisnis');</script>
                    </div>

                    <div class="form-group pt-4">
                        <p>Dukungan Donor</p>
                        <textarea name="donor" id="donor" cols="150" rows="20">
                        </textarea>
                        <script>CKEDITOR.replace('donor');</script>
                    </div>
                   
                </div> 
                <button type="submit" class="btn btn-success ml-auto">Simpan</button>
            </div>
        </form>

      

    </div>

    @include('layouts.footer')

