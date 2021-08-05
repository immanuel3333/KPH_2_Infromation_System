@include('layouts.headeradmin')
</div>
<div class="content-page" style="background: url('{{ asset('img/backgroundadmin.png') }}');background-size:850px;background-repeat: repeat-y;background-position:center ;">
<div class="container-fluid">
    <div class="animated fadeIn">
      <div class="row">
        <div class="col-sm-12 col-md-8 col-lg-8 col-xl-8">
              <div class="card-body">
                <form method="POST" action="{{ route('update-kepalakph4', $kkph->id) }}" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="card col-md-12">
                            <div class="form-group pt-1">
                                    <p>Nama KKPH</p>
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="namakph" value="{{$kkph->namakph}}">
                                    </div>
                            </div>

                            <div class="form-group pt-1">
                                    <p>Jenis Kelamin</p>
                                    <select name='gender'>
                                        <option selected='selected'>--Pilih Jenis Kelamin--</option>
                                        <option value='Laki-laki'>Laki-laki</option>
                                        <option value='Perempuan'>Perempuan</option>
                                    </select>
                            </div>

                            <div class="form-group pt-1">
                                <p>NIP</p>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="nip" value="{{$kkph->nip}}">
                                </div>
                            </div>
                            <div class="form-group pt-1">
                              <label>No Handphone</label>
                              <input class="form-control" type="text" name="telepon" value="{{$kkph->telepon}}" >
                                </div>
                                <div class="form-group pt-1">
                              <label>Email KKPH</label>
                              <input class="form-control" type="text" name="email" value="{{$kkph->email}}" >
                                </div>
                                <div class="form-group pt-1">
                              <label>Pangkat/Golongan</label>
                              <input class="form-control" type="text" name="pangkat" value="{{$kkph->pangkat}}" >
                                </div>
                                <div class="form-group pt-1">
                              <label>Hasil Uji Kompetensi</label>
                              <input class="form-control" type="text" name="ujikompetensi" value="{{$kkph->ujikompetensi}}" >
                                </div>
                                <div class="form-group pt-1">
                              <label>Diklat</label>
                              <input class="form-control" type="text" name="diklat" value="{{$kkph->diklat}}" >
                                </div>
                                <div class="form-group pt-1">
                                    <p>Pendidikan</p>
                                    <select name='pendidikan'>
                                        <option selected='selected'>--Pilih Pendidikan--</option>
                                        <option value='SD'>SD</option>
                                        <option value='SMP'>SMP</option>
                                        <option value='SMP'>SMA</option>
                                        <option value='SMP'>D3</option>
                                        <option value='SMP'>S1</option>
                                        <option value='SMP'>S2</option>
                                        <option value='SMP'>S3</option>
                                    </select>
                                </div>
                                <div class="form-group pt-1">
                                    <label>Periode Jabatan</label>
                                    <input class="form-control" type="date" name="tanggalmulai" value="{{$kkph->tanggalmulai}}" >
                                </div>
                                <div class="form-group pt-1">
                                    <label>Sampai</label>
                                    <input class="form-control" type="date" name="tanggalselesai" value="{{$kkph->tanggalselesai}}" >
                                </div>
                                <div class="form-group pt-1">
                                    <label>Photo KKPH</label>
                                    <input class="form-control" type="file" name="gambar" value="{{$kkph->gambar}}" >
                                </div>
                        </div>
                      <br>
                      <div class="col-md-12">
                        <button type="submit" class="btn btn-success ml-auto">Simpan</button>
                  </form>
              </div>
      </div>
    </div>
  </div>

  @include('layouts.footer')
