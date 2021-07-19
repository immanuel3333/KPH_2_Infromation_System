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
                  <form action="{{ route('simpan-identitas')}}" method="post" enctype="multipart/form-data">
                      @csrf
                      <div class="row">
                          <div class="col-md-12 ">
                              <label>Nama KPH</label>
                              <input class="form-control" type="text" name="nama" id="nama" required autofocus>

                              <label>Unit KPH</label>
                              <input class="form-control" type="text" name="unit" id="unit" required autofocus>

                              <label>Kategori</label>
                              <input class="form-control" type="text" name="kategori" id="kategori" required autofocus>

                              <label>Tahun Realisasi Fasilitasi</label>
                              <input class="form-control" type="text" name="tahun" id="tahun" required autofocus>

                              <label>Provinsi</label>
                              <input class="form-control" type="text" name="provinsi" id="provinsi" required autofocus>

                              <label>Nama Panggil</label>
                              <input class="form-control" type="text" name="nickname" id="nickname" required autofocus>

                              <label>KPH Alias</label>
                              <input class="form-control" type="text" name="alias" id="alias" required autofocus>

                              <label>Organisasi Pasca UU 23 tahun 2014</label>
                              <input class="form-control" type="text" name="organisasi" id="organisasi" required autofocus>

                              <label>Jenis KPH</label>
                              <input class="form-control" type="text" name="jeniskph" id="jeniskph" required autofocus>

                              <label>Alamat Kantor</label>
                              <input class="form-control" type="text" name="alamat" id="alamat" required autofocus>
                          </div>
                          <div class="col-md-12 ">
                              <label>Aksesibilitas</label>
                              <input class="form-control" type="text" name="aksesibilitas" id="aksesibilitas" autofocus>

                              <label>Email</label>
                              <input class="form-control" type="text" name="email" id="email" autofocus>

                              <label>Telepon</label>
                              <input class="form-control" type="text" name="telepon" id="telepon" autofocus>

                              <label>Longitude</label>
                              <input class="form-control" type="text" name="longitude" id="longitude" autofocus>

                              <label>Latitude</label>
                              <input class="form-control" type="text" name="latitude" id="latitude" required autofocus>
                          </div>
                      </div>
                      <div class="col-md-12">
                        <button type="submit" class="btn btn-success ml-auto">Simpan</button>
                  </form>
              </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  @include('layouts.footer')
