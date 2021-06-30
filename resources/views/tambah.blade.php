@include('layouts.headeradmin')
</div>

<div class="content-page">
    <div class="card">
        <p>Profil</p><br>
        <a>Visi dan Misi</a>
    </div>
    <div class="container-fluid ">
     <div class="card col-12">
        @foreach($visimisi as $vm)
        <form action="/visimisi/store" method="post">
            {{ csrf_field() }}
            <p ><b> Visi dan Misi </p><br>
                <input type="hidden" name="id" value="{{ $vm->id }}"> <br/>
                <label>VISI :</label>
                <textarea required="required" id="visi" name="visi">{{ $vm->visi }}</textarea><br>
                <script>CKEDITOR.replace('visi');</script>
            <br>
                <label>MISI :</label>
                <textarea required="required" id="misi" name="misi">{{ $vm->misi }}</textarea><br>
                <script>CKEDITOR.replace('misi');</script>

            <br>
            <div class="form-group row">
                <input type="submit" value="Simpan Data">
            </div>
        </form>
        @endforeach
     </div>
    </div>

    @include('layouts.footer')
