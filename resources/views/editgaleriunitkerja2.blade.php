@include('layouts.headeradminunit2')
</div>

<div class="content-page">
    <div class="container-fluid">
        <p class="text-center " style="font-size:39px;">Galeri Unit Kerja</p><br>

        <form method="POST" action="{{ route('update-galeriunitkerja2', $gl->id) }}"  enctype="multipart/form-data">
        @csrf


            <div class="row">
                <div class="card col-md-6">
                    <p>Tanggal Kegiatan </p>
                        <label>
                            <input type="date" name="tanggal" id="tanggal" value="{{$gl2->tanggal}}" >
                        </label>

                    <div class="form-group pt-4">
                        <p>Keterangan Kegiatan</p>
                        <textarea name="keterangan" id="keterangan" cols="150" rows="20">{{$gl2->keterangan}}
                        </textarea>
                        <script>CKEDITOR.replace('keterangan');</script>
                    </div>

                </div>
                <div class="card col-md-6 ">
                <center>
                <img src="{{ asset($gl2->gambar)}}" alt="" width=250px; height=250px; >
                <br>

                    <p style="padding-left:50px;">Masukkan gambar </p>
                    <div class="form-group">
                        <input type="file" id="gambar" name="gambar">
                    </div>
                </div>
                </center>




                <button type="submit" class="btn btn-success ml-auto">Simpan</button>
            </div>
        </form>



    </div>

    @include('layouts.footer')

