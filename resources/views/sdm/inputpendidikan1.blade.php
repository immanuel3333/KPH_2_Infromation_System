@include('layouts.headeradmin')
</div>

<div class="content-page"> 
    <div class="container-fluid">
        <form action="{{ route('simpan-pendidikan1')}}" method="post" enctype="multipart/form-data">
        @csrf
            <div class="row">
                <div class="card col-md-12">

                    <div class="form-group pt-1">
                        <p>Dibawah Sekolah Menengah Atas (SMA)</p>
                        <div class="form-group">
                            <input required autofocus type="number" class="form-control" name="dibawah_sma" id="dibawah_sma" placeholder="Input only number">
                        </div>
                    </div>
                    <div class="form-group pt-1">
                        <p>	Sekolah Menengah Atas (SMA)	</p>
                        <div class="form-group" id="only-number">
                        <input required autofocus type="number" class="form-control" name="sma" id="sma" placeholder="Input only number">
                        </div>
                    </div>
                    <div class="form-group pt-1">
                        <p>Diploma (D3)	</p>
                        <div class="form-group" id="only-number">
                        <input required autofocus type="number" class="form-control" name="d3" id="d3" placeholder="Input only number">                        
                        </div>
                    </div>
                    <div class="form-group pt-1">
                        <p>Sarjana (S1)	</p>
                        <div class="form-group" id="only-number">
                        <input required autofocus type="number" class="form-control" name="s1" id="s1" placeholder="Input only number">                       
                         </div>
                    </div>
                    <div class="form-group pt-1">
                        <p>Master (S2)	</p>
                        <div class="form-group" id="only-number">
                        <input required autofocus type="number" class="form-control" name="s2" id="s2" placeholder="Input only number">                        
                        </div>
                    </div>
                    <div class="form-group pt-1">
                        <p>Doktor (S3)	</p>
                        <div class="form-group" id="only-number">
                        <input required autofocus type="number" class="form-control" name="s3" id="s3" placeholder="Input only number">                        
                        </div>
                    </div>
                    <div class="form-group pt-1">
                        <p>Total	</p>
                        <div class="form-group" id="only-number">
                        <input required autofocus type="number" class="form-control" name="total" id="total" placeholder="Input only number">                        
                        </div>
                    </div>
                    <div class="form-group pt-1">
                        <p>Pelatihan Management	</p>
                        <div class="form-group" id="only-number">
                        <input required autofocus type="number" class="form-control" name="management" id="management" placeholder="Input only number">                        
                        </div>
                    </div>
                    <div class="form-group pt-1">
                        <p>Pelatihan Teknis	</p>
                        <div class="form-group" id="only-number">
                        <input required autofocus type="number" class="form-control" name="teknis" id="teknis" placeholder="Input only number">                        
                        </div>
                    </div>
                    <div class="form-group pt-1">
                        <p>Pelatihan Lainnya	</p>
                        <div class="form-group" id="only-number">
                        <input required autofocus type="number" class="form-control" name="lainnya" id="lainnya" placeholder="Input only number">                        
                        </div>
                    </div>
                   
                </div> 
                <button type="submit" class="btn btn-success ml-auto">Simpan</button>
            </div>
        </form>

      

    </div>

    @include('layouts.footer')

