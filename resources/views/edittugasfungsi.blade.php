@include('layouts.headeradmin')
</div>

<div class="content-page">
    <div class="card">
        <h1 class="text-center" style="font-size:36px; font-family:Poppins;">Tugas dan Fungsi</h1>
    </div>
    <div class="container-fluid ">
     <div class="card col-12">
     @foreach($tf as $tf)
       <form method="POST" action="{{url('/update-tugasfungsi')}}/{{$tf->id}}" >
        @csrf
        @endforeach

            <div class="form-group">
                <textarea name="tugas" id="tugas" cols="150" placeholder="visi" rows="20">{{$tf->tugas}}
                </textarea>
                <script>CKEDITOR.replace('tugas');</script>
            </div>
            <div class="form-group">
                <textarea name="fungsi" id="fungsi" cols="150" placeholder="fungsi" rows="20">{{$tf->fungsi}}
                </textarea>
                <script>CKEDITOR.replace('fungsi');</script>
            </div>
            <button type="submit" class="btn btn-primary ml-auto">Ubah Data</button>

       </form>


     </div>
    </div>
    </div>

    @include('layouts.footer')
