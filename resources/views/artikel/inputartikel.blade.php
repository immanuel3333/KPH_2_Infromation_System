@include('layouts.headeradmin')
</div>

<div class="content-page">
    <div class="card">
        <a>Artikel</a>
    </div>
    <div class="container-fluid ">
     <div class="card col-12">
       <form action="{{ route('simpan-artikel')}}" method="post" enctype="multipart/form-data">
      @csrf
            <div class="form-group">
                <p>Judul</p>
                <div class="form-group">
                    <input type="text" class="form-control" name="judul" id="judul">
                </div>
            </div>
            <div class="form-group">
                <input type="file" id="gambar" name="gambar">
            </div>
            <div class="form-group">
                <textarea name="artikel" id="artikel" cols="150" rows="20">
                </textarea>
                <script>CKEDITOR.replace('artikel');</script>
            </div>
            <button type="submit" class="btn btn-success ml-auto">Simpan</button>


       </form>

     </div>
    </div>
    </div>

    @include('layouts.footer')

