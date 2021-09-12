@include('layouts.headeradmin')
</div>

<div class="content-page"> 
    <div class="container-fluid">
        <form action="{{ route('simpan-sdm3')}}" method="post" enctype="multipart/form-data">
        @csrf
            <div class="row">
                <div class="card col-md-12">

                    <div class="form-group pt-1">
                        <p>KKPH</p>
                        <div class="form-group">
                            <input type="number" class="form-control" name="kkph" id="kkph" placeholder="Input only number"  required autofocus>
                        </div>
                    </div>
                    <div class="form-group pt-1">
                        <p>	Kepala seksi</p>
                        <div class="form-group" id="only-number">
                        <input type="number" class="form-control" name="kepala_seksi" id="kepala_seksi" placeholder="Input only number" required autofocus>                        </div>
                    </div>
                    <div class="form-group pt-1">
                        <p>Tata usaha</p>
                        <div class="form-group" id="only-number">
                        <input type="number" class="form-control" name="tata_usaha" id="tata_usaha" placeholder="Input only number" required autofocus>                        </div>
                    </div>
                    <div class="form-group pt-1">
                        <p>Kepala Resort</p>
                        <div class="form-group" id="only-number">
                        <input type="number" class="form-control" name="kepala_resort" id="kepala_resort" placeholder="Input only number" required autofocus>                        </div>
                    </div>
                    <div class="form-group pt-1">
                        <p>Staf PNS</p>
                        <div class="form-group" id="only-number">
                        <input type="number" class="form-control" name="staf_pns" id="staf_pns" placeholder="Input only number" required autofocus>                        </div>
                    </div>
                    <div class="form-group pt-1">
                        <p>Staf Honorer</p>
                        <div class="form-group" id="only-number">
                        <input type="number" class="form-control" name="staf_honorer" id="staf_honorer" placeholder="Input only number" required autofocus>                        </div>
                    </div>
                    <div class="form-group pt-1">
                        <p>Tenaga Kontrak</p>
                        <div class="form-group" id="only-number">
                        <input type="number" class="form-control" name="tenaga_kontrak" id="tenaga_kontrak" placeholder="Input only number" required autofocus>                        </div>
                    </div>
                    <div class="form-group pt-1">
                        <p>Tenaga Brigdalkarhutla(PNS)</p>
                        <div class="form-group" id="only-number">
                        <input type="number" class="form-control" name="tenaga_brigdalkarhutlapns" id="tenaga_brigdalkarhutlapns" placeholder="Input only number" required autofocus>                        </div>
                    </div>
                    <div class="form-group pt-1">
                        <p>Tenaga Brigdalkarhutla(non PNS)</p>
                        <div class="form-group" id="only-number">
                        <input type="number" class="form-control" name="tenaga_brigdalkarhutlanonpns" id="tenaga_brigdalkarhutlanonpns" placeholder="Input only number" required autofocus>                        </div>
                    </div>
                    <div class="form-group pt-1">
                        <p>PAMHUT</p>
                        <div class="form-group" id="only-number">
                        <input type="number" class="form-control" name="pamhut" id="pamhut" placeholder="Input only number" required autofocus>                        </div>
                    </div>
                    <div class="form-group pt-1">
                        <p>SDM Pemda</p>
                        <div class="form-group" id="only-number">
                        <input type="number" class="form-control" name="sdm_pemda" id="sdm_pemda" placeholder="Input only number" required autofocus>                        </div>
                    </div>
                    <div class="form-group pt-1">
                        <p>Bakti Rimbawan Sebelum Tahun 2015</p>
                        <div class="form-group" id="only-number">
                        <input type="number" class="form-control" name="bukti_rimbawa_sebelum_2015" id="bukti_rimbawa_sebelum_2015" placeholder="Input only number" required autofocus>                        </div>
                    </div>
                    <div class="form-group pt-1">
                        <p>Bakti Rimbawan 2015</p>
                        <div class="form-group" id="only-number">
                        <input type="number" class="form-control" name="bakti_rimbawa_2015" id="bakti_rimbawa_2015" placeholder="Input only number" required autofocus>                        </div>
                    </div>
                    <div class="form-group pt-1">
                        <p>Bakti Rimbawan 2016</p>
                        <div class="form-group" id="only-number">
                        <input type="number" class="form-control" name="bakti_rimbawa_2016" id="bakti_rimbawa_2016" placeholder="Input only number" required autofocus>                        </div>
                    </div>
                    <div class="form-group pt-1">
                        <p>Bakti Rimbawan 2017</p>
                        <div class="form-group" id="only-number">
                        <input type="number" class="form-control" name="bakti_rimbawa_2017" id="bakti_rimbawa_2017" placeholder="Input only number" required autofocus>                        </div>
                    </div>
                    <div class="form-group pt-1">
                        <p>Bakti Rimbawan 2018</p>
                        <div class="form-group" id="only-number">
                        <input type="number" class="form-control" name="bakti_rimbawa_2018" id="bakti_rimbawa_2018" placeholder="Input only number" required autofocus>                        </div>
                    </div>
                        <div class="form-group pt-1">
                        <p>	Total Bakti Rimbawan</p>
                        <div class="form-group" id="only-number">
                        <input type="number" class="form-control" name="total_bakti_rimbawan" id="total_bakti_rimbawan" placeholder="Input only number" required autofocus>                        </div>
                    </div>
                </div> 
                <button type="submit" class="btn btn-success ml-auto">Simpan</button>
            </div>
        </form>

      
        </div>
    </div>

    @include('layouts.footer')

