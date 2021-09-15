@include('layouts.headeradmin')
@if(count($errors)>0)
  	@foreach($errors->all() as $error)
  	<div class="alert alert-danger" style="padding-left:100px;" role="alert">
      {{ $error }}
	</div>  		
  	@endforeach
  @endif

  @if(Session::has('success'))
  	<div class="alert alert-success" role="alert">
      {{ Session('success') }}
	</div> 
  @endif
</div>

<div class="content-page"> 
    <div class="container-fluid">
        <form action="{{ route('update-jasalingkungan1', $jl->id) }}" method="post" enctype="multipart/form-data">
        @csrf
            <div class="row">
                <div class="card col-md-12">
                    <div class="form-group pt-1">
                            <p>Provinsi</p>
                            <div class="form-group">
                                <input type="text" class="form-control" name="provinsi" id="provinsi" value="{{$jl->provinsi}}" placeholder="Provinsi...">
                            </div>
                    </div>

                    <div class="form-group pt-1">
                            <p>Jenis Jasa Lingkungan</p>
                            <select name='jenis_jasa_lingkungan'>
                                <option selected='selected'>--Pilih Jasa Lingungan--</option>
                                <option value='Pemanfaatan Air '>Pemanfaatan Air</option>
                                <option value='Pemanfaatan Jasa Aliran Air'>Pemanfaatan Jasa Aliran Air</option>
                                <option value='Penyelamatan dan Perlindungan Lingkungan'>Penyerapan dan Perlindungan Lingkungan</option>
                                <option value='Penyerapan atau Penyimpanan Karbon'>Penyerapan atau Penyimpanan Karbon</option>
                                <option value='Perlindungan Keanekaragaman Hayati'>Perlindungan Keanekaragaman Hayati</option>
                                <option value='Wisata Alam'>Wisata Alam</option>
                                <option value='Lain-Lain'>Lain-Lain</option>
                            </select>
                    </div>

                    <div class="form-group pt-1">
                            <p>Satuan</p>
                            <select name='satuan'>
                                <option selected='selected'>--Pilih Satuan--</option>
                                <option value='m3/ha '>m3/ha</option>
                                <option value='liter'>liter</option>
                                <option value='kg'>kg</option>
                                <option value='ton'>ton</option>
                                <option value='ikat'>ikat</option>
                                <option value='biji/buah'>biji/buah</option>
                                
                            </select>
                    </div>

                    <div class="form-group pt-1">
                            <p>Keunggulan</p>
                            <div class="form-group">
                                <input type="text" class="form-control" name="keunggulan" id="keunggulan" placeholder="Keunggulan..." value="{{$jl->keunggulan}}">
                            </div>
                    </div>

                    <div class="form-group pt-1">
                            <p>Lintang</p>
                            <div class="form-group">
                                <input type="text" class="form-control" name="lintang" id="lintang" placeholder="lintang..." value="{{$jl->lintang}}">
                            </div>
                    </div>

                    <div class="form-group pt-1">
                            <p>Bujur</p>
                            <div class="form-group">
                                <input type="text" class="form-control" name="bujur" id="bujur" placeholder="bujur..." value="{{$jl->bujur}}">
                            </div>
                    </div>

                    <div class="form-group pt-1">
                            <p>Pengembangan</p>
                            <select name='pengembangan'>
                                <option selected='selected'>--Pilih Pengembangan--</option>
                                <option value='Swakelola '>Swakelola</option>
                                <option value='Kemitraan'>Kemitraan</option>
                                <option value='Kerjasama'>Kerjasama</option>
                                <option value='Izin'>Izin</option>
                            </select>
                    </div>

                    <div class="form-group pt-1">
                            <p>Tahapan</p>
                            <select name='tahapan'>
                                <option selected='selected'>--Pilih Tahapan--</option>
                                <option value='Rencana '>Rencana</option>
                                <option value='Implementasi'>Implementasi</option>                            
                            </select>
                    </div>

                    <div class="form-group pt-1">
                            <p>Periode</p>
                            <select name='periode'>
                                <option selected='selected'>--Pilih Periode--</option>
                                <option value='per hari '>per hari</option>
                                <option value='per minggu'>per minggu</option>   
                                <option value='per bulan'>per bulan</option>   
                                <option value='per tahun'>per tahun</option>                            
                            </select>
                    </div>

                    <div class="form-group pt-1">
                        <p>Hasil</p>
                        <div class="form-group">
                            <input type="number" class="form-control" name="hasil" id="hasil" placeholder="Hasil..." value="{{$jl->hasil}}">                       
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success ml-auto">Simpan</button>
                </div> 
                
            </div>
        </form>

        </div>

    </div>

    @include('layouts.footer')

