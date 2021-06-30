@include('layouts.headeradmin')
</div>

<div class="content-page">
    <div class="card">
        <p>Profil</p><br>
        <a>Visi dan Misi</a>
    </div>
    <div class="container-fluid ">
     <div class="card col-12">

       <form action="#" method="post">
      @csrf
            <div class="form-group">
                <textarea name="visi" id="visi" cols="150" placeholder="visi" rows="20" value="{{$vm->misi}}">
                </textarea>
                <script>CKEDITOR.replace('visi');</script>
            </div>
            <div class="form-group">
                <textarea name="misi" id="misi" cols="150" placeholder="misi" rows="20" value="{{$vm->misi}}">
                </textarea>
                <script>CKEDITOR.replace('misi');</script>
            </div>
            <button type="submit" class="btn btn-primary ml-auto">Ubah Data</button>


       </form>

     </div>
    </div>

    @include('layouts.footer')

    <script>CKEDITOR.replace('misi');</script>

