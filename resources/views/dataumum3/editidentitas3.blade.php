@include('layouts.headeradmin')
</div>
<div class="content-page" style="background: url('{{ asset('img/backgroundadmin.png') }}');background-size:850px;background-repeat: repeat-y;background-position:center ;">
<div class="container-fluid">
    <div class="animated fadeIn">
      <div class="row">
        <div class="col-sm-12 col-md-8 col-lg-8 col-xl-8">
          <div class="card">
              <div class="card-header">
                <p>Test</p>
              <div class="card-body">
                  <form method="POST" action="{{ route('update-identitas3', $idn->id) }}" enctype="multipart/form-data">
                      @csrf
                      <div class="row">
                          <div class="col-md-12 ">
                              <label>Nama KPH</label>
                              <input class="form-control" type="text" name="nama" value="{{$idn->nama}}" required autofocus>

                              <label>Unit KPH</label>
                              <input class="form-control" type="text" name="unit" value="{{$idn->unit}}" required autofocus>

                              <label>Kategori</label>
                              <input class="form-control" type="text" name="kategori" value="{{$idn->kategori}}" required autofocus>

                              <label>Tahun Realisasi Fasilitasi</label>
                              <input class="form-control" type="text" name="tahun" value="{{$idn->tahun}}" required autofocus>

                              <label>Provinsi</label>
                              <input class="form-control" type="text" name="provinsi" value="{{$idn->provinsi}}" required autofocus>

                              <label>Nama Panggil</label>
                              <input class="form-control" type="text" name="nickname" value="{{$idn->nickname}}" required autofocus>

                              <label>KPH Alias</label>
                              <input class="form-control" type="text" name="alias" value="{{$idn->alias}}" required autofocus>

                              <label>Organisasi Pasca UU 23 tahun 2014</label>
                              <input class="form-control" type="text" name="organisasi" value="{{$idn->organisasi}}" required autofocus>

                              <label>Jenis KPH</label>
                              <input class="form-control" type="text" name="jeniskph" value="{{$idn->jeniskph}}" required autofocus>

                              <label>Alamat Kantor</label>
                              <input class="form-control" type="text" name="alamat" value="{{$idn->alamat}}" required autofocus>
                          </div>
                          <div class="col-md-12 ">
                              <label>Aksesibilitas</label>
                              <input class="form-control" type="text" name="aksesibilitas" value="{{$idn->aksesibilitas}}" autofocus>

                              <label>Email</label>
                              <input class="form-control" type="text" name="email" value="{{$idn->email}}" autofocus>

                              <label>Telepon</label>
                              <input class="form-control" type="text" name="telepon" value="{{$idn->telepon}}" autofocus>

                              <label>Longitude</label>
                              <input class="form-control" type="text" name="longitude" value="{{$idn->longitude}}" autofocus>

                              <label>Latitude</label>
                              <input class="form-control" type="text" name="latitude" value="{{$idn->latitude}}" required autofocus>
                          </div>
                      </div>
                      <div class="col-md-12">
                        <button type="submit" class="btn btn-success ml-auto">Simpan</button>
                      </div>
                  </form>
              </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  @include('layouts.footer')