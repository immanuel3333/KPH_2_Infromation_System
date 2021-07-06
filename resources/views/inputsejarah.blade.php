@include('layouts.headeradmin')
</div>

<div class="content-page">
    <div class="card">
        <p>Profil</p><br>
        <a>Sejarah</a>
    </div>
    <div class="container-fluid ">
     <div class="card col-12">
       <form action="{{ route('simpan-sejarah')}}" method="post">
      @csrf
            <div class="form-group">
                <textarea name="sejarah" id="sejarah" cols="150" rows="20">
                </textarea>
                <script>CKEDITOR.replace('sejarah');</script>
            </div>
            <button type="submit" class="btn btn-success ml-auto">Simpan</button>


       </form>

     </div>
    </div>

    @include('layouts.footer')

