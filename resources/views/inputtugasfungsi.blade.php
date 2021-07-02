@include('layouts.headeradmin')
</div>

<div class="content-page">
    <div class="card">
        <p>Profil</p><br>
        <a>Tugas dan Fungsi</a>
    </div>
    <div class="container-fluid ">
     <div class="card col-12">
       <form action="{{ route('simpan-tugasfungsi')}}" method="post">
      @csrf
            <div class="form-group">
                <textarea name="tugas" id="tugas" cols="150" rows="20">
                </textarea>
                <script>CKEDITOR.replace('tugas');</script>
            </div>
            <div class="form-group">
                <textarea name="fungsi" id="fungsi" cols="150" rows="20">
                </textarea>
                <script>CKEDITOR.replace('fungsi');</script>
            </div>
            <button type="submit" class="btn btn-success ml-auto">Simpan</button>


       </form>

     </div>
    </div>

    @include('layouts.footer')

