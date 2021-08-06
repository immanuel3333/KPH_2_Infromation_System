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
    <div class="card">
        <p>Profil</p><br>
        <a>Visi dan Misi</a>
    </div>
    <div class="container-fluid ">
     <div class="card col-12">
       <form action="{{ route('simpan-visimisi')}}" method="post">
      @csrf
            <div class="form-group">
                <textarea name="visi" id="visi" cols="150" rows="20">
                </textarea>
                <script>CKEDITOR.replace('visi');</script>
            </div>
            <div class="form-group">
                <textarea name="misi" id="misi" cols="150" rows="20">
                </textarea>
                <script>CKEDITOR.replace('misi');</script>
            </div>
            <button type="submit" class="btn btn-success ml-auto">Simpan</button>


       </form>

     </div>
    </div>

    @include('layouts.footer')

