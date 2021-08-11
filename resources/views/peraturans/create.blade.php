@include('layouts.headeradmin')
</div>
    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow rounded">
                    <div class="card-body">
                        <form action="{{ route('simpan-peraturan') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label>Judul</label>
                                <input type="text" class="form-control" name="judul">
                            </div>
                            <div class="form-group">
                                <label>Keterangan</label>
                                <textarea class="form-control" name="keterangan" id="keterangan"></textarea>
                            </div>
                            <div class="form-group">
                                <label>File</label>
                                <input type="file" name="file" class="form-control">
                            </div>

                            <div class="form-group">
                                <button class="btn btn-primary btn-block">Simpan Post</button>
                            </div>

                            </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


<script>
    CKEDITOR.replace( 'content' );
</script>

@include('layouts.footeradmin')
