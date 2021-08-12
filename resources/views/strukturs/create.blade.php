@include('layouts.headeradmin')
</div>
    <div class="container mt-5 mb-5">
        <div class="row pr-5">
            <div class="col-md-12 ">
                <center>
                <div class="card border-0 shadow rounded">
                    <div class="card-body pl-4">
                        <form action="{{ route('strukturs.store') }}" method="POST" enctype="multipart/form-data">
                            <p><strong>Menambah Struktur</strong></p>
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

<script>
    CKEDITOR.replace( 'content' );
</script>
@include('layouts.footeradmin')
