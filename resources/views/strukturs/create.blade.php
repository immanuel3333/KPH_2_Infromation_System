@include('layouts.headeradmin')
</div>
<div class="content-page" style="background: url('{{ asset('img/backgroundadmin.png') }}');background-size:850px;background-repeat: repeat-y;background-position:center ;">
    <div class="container-fluid ">
        <div class="card">
                        <center>
                        <form action="{{ route('strukturs.store') }}" method="POST" enctype="multipart/form-data">
                            <h1 class="text-center" style="font-size:36px; font-family:Poppins;">Menambah Struktur</h1>
                            @csrf

                            <div class="form-group">
                                <label class="font-weight-bold">GAMBAR</label>
                                <input type="file" class="form-control @error('image') is-invalid @enderror" name="image">

                                <!-- error message untuk title -->
                                @error('image')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">GAMBAR 2</label>
                                <input type="file" class="form-control @error('image2') is-invalid @enderror" name="image2">

                                <!-- error message untuk title -->
                                @error('image2')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-md btn-primary">SIMPAN</button>

                        </form>
                    </div>
                </div>
            </center>
            </div>
        </div>
    </div>
    </div>

<script>
    CKEDITOR.replace( 'content' );
</script>
@include('layouts.footer')
