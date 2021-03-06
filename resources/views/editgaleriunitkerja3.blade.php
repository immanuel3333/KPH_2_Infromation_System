@include('layouts.headeradminunit3')
</div>

<div class="content-page">
    <div class="container-fluid">
        <h1 class="text-center" style="font-size:36px; font-family:Poppins;">Galeri Unit Kerja</h1><br>

        <form method="POST" action="{{ route('update-galeriunitkerja3', $gl3->id) }}"  enctype="multipart/form-data">
        @csrf


            <div class="row">
                <div class="card col-md-6">
                    <p>Tanggal Kegiatan </p>
                        <label>
                            <input type="date" name="tanggal" id="tanggal" value="{{$gl3->tanggal}}" >
                        </label>

                    <div class="form-group pt-4">
                        <p>Keterangan Kegiatan</p>
                        <textarea name="keterangan" id="keterangan" cols="150" rows="20">{{$gl3->keterangan}}
                        </textarea>
                        <script>CKEDITOR.replace('keterangan');</script>
                    </div>

                </div>
                <div class="card col-md-6 ">
                <center>
                <img src="{{ asset($gl3->gambar)}}" alt="" width=250px; height=250px; >
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

