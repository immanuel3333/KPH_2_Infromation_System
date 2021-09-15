@include('layouts.headeradmin')
</div>

<div class="content-page">
    <div class="card">
        <h1 class="text-center" style="font-size:36px; font-family:Poppins;">Visi dan Misi</h1>
    </div>
    <div class="container-fluid ">
     <div class="card col-12">
     @foreach($vm as $vm)
       <form method="POST" action="{{url('/update-visimisi')}}/{{$vm->id}}" >
        @csrf
        @endforeach

            <div class="form-group">
                <textarea name="visi" id="visi" cols="150" placeholder="visi" rows="20">{{$vm->visi}}
                </textarea>
                <script>CKEDITOR.replace('visi');</script>
            </div>
            <div class="form-group">
                <textarea name="misi" id="misi" cols="150" placeholder="misi" rows="20">{{$vm->misi}}
                </textarea>
                <script>CKEDITOR.replace('misi');</script>
            </div>
            <button type="submit" class="btn btn-primary ml-auto">Ubah Data</button>

       </form>


     </div>
    </div>
    </div>

    @include('layouts.footer')
