@include('layouts.headeradmin')
</div>

<div class="content-page">
    <div class="card">
        <p>Profil</p><br>
        <a>Visi dan Misi</a>
    </div>
    <div class="container-fluid ">
     <div class="card col-12">

        <form action="{{url('/showvisimisi')}}" method="POST" class="needs-validation" novalidate>
            @csrf
            <p ><b> Visi dan Misi </p><br>

                <label>VISI :</label>
                <textarea class="form-control" id="visi" name="visi"></textarea>
                <script>CKEDITOR.replace('visi');</script>
            <br>
                <label>MISI :</label>
                <textarea class="form-control" id="misi" name="misi"></textarea>
                <script>CKEDITOR.replace('misi');</script>

            <br>
            <div class="form-group row">
                    <button type="submit" class="btn btn-dark ml-auto">Simpan</button>
            </div>
        </form>

     </div>
    </div>

    @include('layouts.footer')
