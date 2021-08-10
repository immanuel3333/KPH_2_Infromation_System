@include('layouts.headeradmin')
</div>

<div class="content-page">
    <div class="card">
        <h1>Artikel</h1>
    </div>
    <div class="container-fluid ">
     <div class="card col-12">
     <form action="{{ route('update-artikel', $art->id) }}" method="post" enctype="multipart/form-data">
        @csrf
            <div class="form-group">
                <input type="file" id="gambar" name="gambar">
            </div>
            <div class="form-group">
                <p>Judul</p>
                <div class="form-group">
                    <input type="text" class="form-control" name="judul" value="{{$art->judul}}">
                </div>
            </div>
            <div class="form-group">
                <textarea name="artikel" id="artikel" cols="150" placeholder="artikel" rows="20">{{$art->artikel}}
                </textarea>
                <script>CKEDITOR.replace('artikel');</script>
            </div>
            <button type="submit" class="btn btn-primary ml-auto">Ubah Data</button>

       </form>


     </div>
    </div>

    @include('layouts.footer')
