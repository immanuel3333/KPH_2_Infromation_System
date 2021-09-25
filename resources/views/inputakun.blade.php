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
    <div class="card">
        <a>Akun</a>
    </div>
    <div class="container-fluid ">
     <div class="card col-12">
       <form action="{{ route('simpan-akun')}}" method="post" enctype="multipart/form-data">
      @csrf
            <div class="form-group">
                <p>Username</p>
                <div class="form-group">
                    <input type="text" class="form-control" name="name">
                </div>
            </div>
            <div class="form-group">
                <p>Email</p>
                <div class="form-group">
                    <input type="text" class="form-control" name="email">
                </div>
            </div>
            <div class="form-group">
                <p>Password</p>
                <div class="form-group">
                    <input type="text" class="form-control" name="password">
                </div>
            </div>
            <div class="form-group">
                <p>Level</p>
                <div class="form-group">
                <select name='level'>
                    <option value='adminupt'>adminupt</option>
                    <option value='adminunit'>adminunit</option>
                    <option value='adminunit2'>adminunit2</option>
                    <option value='adminunit3'>adminunit3</option>
                    <option value='adminunit4'>adminunit4</option>
                </select>
                </div>
            </div>
            <button type="submit" class="btn btn-success ml-auto">Simpan</button>


       </form>

     </div>
    </div>
    </div>

    @include('layouts.footer')

