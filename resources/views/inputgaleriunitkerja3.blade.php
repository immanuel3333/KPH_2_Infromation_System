@include('layouts.headeradminunit3')
</div>

<div class="content-page">
    <div class="container-fluid">
        <p class="text-center " style="font-size:39px;">Galeri UPT</p><br>
        <form action="{{ route('simpan-galeriunitkerja3')}}" method="post" enctype="multipart/form-data">
        @csrf
            <div class="row">
                <div class="card col-md-12">
                    <p>Masukkan gambar </p>
                    <div class="form-group">
                        <input type="file" id="gambar" name="gambar">
                    </div>

                    <p>Tanggal Kegiatan </p>
                        <label>
                            <input type="date" name="tanggal" id="tanggal" >
                        </label>

                    <div class="form-group pt-4">
                        <p>Keterangan Kegiatan</p>
                        <textarea name="keterangan" id="keterangan" cols="150" rows="20">
                        </textarea>
                        <script>CKEDITOR.replace('keterangan');</script>
                    </div>

                </div>
                <button type="submit" class="btn btn-success ml-auto">Simpan</button>
            </div>
        </form>


        </div>
    </div>

    @include('layouts.footer')

