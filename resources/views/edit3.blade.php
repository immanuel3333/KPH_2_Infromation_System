@include('layouts.headeradmin')
</div>

<div class="content-page">
    <div class="card">
        <h1>Visi dan Misi</h1>
    </div>
    <div class="container-fluid ">
     <div class="card col-12">
     @foreach($sj as $sj)
       <form method="POST" action="{{url('/update-sejarah')}}/{{$sj->id}}" enctype="multipart/form-data">
        @csrf 
        @endforeach
            <div class="form-group">
                <input type="file" id="gambar" name="gambar">
            </div>
            <div class="form-group">
                <textarea name="sejarah" id="sejarah" cols="150" placeholder="sejarah" rows="20">{{$sj->sejarah}}
                </textarea>
                <script>CKEDITOR.replace('sejarah');</script>
            </div>
            <button type="submit" class="btn btn-primary ml-auto">Ubah Data</button>
           
       </form>
    

     </div>
    </div>

    @include('layouts.footer')