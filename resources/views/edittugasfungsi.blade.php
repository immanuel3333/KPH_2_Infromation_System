@include('layouts.headeradmin')
</div>

<div class="content-page">
    <div class="card">
        <p>Profil</p><br>
        <a>Visi dan Misi</a>
    </div>
    <div class="container-fluid ">
     <div class="card col-12">

       <form action="{{ route('update-tugasfungsi')}}" method="post">
      @csrf
            <div class="form-group">
                <textarea name="tugas" id="tugas" cols="150" placeholder="visi" rows="20" value="{{$tf->tugas}}">
                </textarea>
                <script>CKEDITOR.replace('tugas');</script>
            </div>
            <div class="form-group">
                <textarea name="fungsi" id="fungsi" cols="150" placeholder="fungsi" rows="20" value="{{$tf->fungsi}}">
                </textarea>
                <script>CKEDITOR.replace('fungsi');</script>
            </div>
            <button type="submit" class="btn btn-primary ml-auto">Ubah Data</button>


       </form>

     </div>
    </div>

    @include('layouts.footer')

