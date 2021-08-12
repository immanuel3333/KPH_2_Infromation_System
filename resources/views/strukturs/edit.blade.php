@include('layouts.headeradmin')
</div>
    <div class="container mt-5 mb-5 ">
        <div class="row">
            <div class="col-md-12 pl-5">
                <div class="card border-0 shadow rounded" >
                    <div class="card-body" >
                        <p><strong>Edit Struktur</strong></p>
                    @foreach($blogs as $st)
                        <form action="{{ route('strukturs.update', $st->id) }}" method="POST" enctype="multipart/form-data">

                            @csrf
                            @method('PUT')
                    @endforeach
                            <div class="form-group pr-3">
                                <label class="font-weight-bold">GAMBAR</label>
                                <input type="file" class="form-control" name="image">
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">GAMBAR 2</label>
                                <input type="file" class="form-control" name="image2">
                            </div>

                            <button type="submit" class="btn btn-md btn-primary">UPDATE</button>
                            <button type="reset" class="btn btn-md btn-warning">RESET</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

<script>
    CKEDITOR.replace( 'content' );
</script>
@include('layouts.footer')

