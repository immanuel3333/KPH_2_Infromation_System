@include('layouts.headeradmin')
</div>

<div class="content-page"> 
    <div class="container-fluid">
        <form action="{{ route('update-nkk', $jl->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row">
                <div class="card col-md-12">
                <div class="form-group pt-1">
                            <p>Nama Kelompok</p>
                            <select name='nama_kelompok'>
                                <option selected='selected'>--Pilih Nama Kelompok--</option>
                                <option value='Kelompok 1 '>Kelompok 1</option>
                                <option value='Kelompok 2'>Kelompok 2</option>
                            </select>
                    </div>
                    <div class="form-group pt-1">
                            <p>Lokasi</p>
                            <div class="form-group">
                                <input type="text" class="form-control" name="lokasi" id="lokasi" placeholder="Lokasi...">
                            </div>
                    </div>

                    <div class="form-group pt-1">
                            <p>Luas</p>
                            <div class="form-group">
                                <input type="text" class="form-control" name="luas" id="luas" placeholder="Luas...">
                            </div>
                    </div>

                    <div class="form-group pt-1">
                        <p>Jumlah KK</p>
                        <div class="form-group">
                            <input type="number" class="form-control" name="jumlah_kk" id="jumlah_kk" placeholder="Jumlah KK...">                       
                        </div>
                    </div>

                    <div class="form-group pt-1">
                            <p>Fungsi Kawasan</p>
                            <div class="form-group">
                                <input type="text" class="form-control" name="fungsi_kawasan" id="fungsi_kawasan" placeholder="Fungsi Kawasan...">
                            </div>
                    </div>

                    <div class="form-group pt-1">
                            <p>Jenis Kerjasama</p>
                            <div class="form-group">
                                <input type="text" class="form-control" name="jenis_kerjasama" id="jenis_kerjasama" placeholder="Jenis Kerjasama...">
                            </div>
                    </div>

                    <div class="form-group pt-1">
                            <p>Nomor dan TGL NKK</p>
                            <div class="form-group">
                                <input type="text" class="form-control" name="nomor_nkk" id="nomor_nkk" placeholder="Nomor dan TGL NKK...">
                            </div>
                    </div>

                    <div class="form-group pt-1">
                            <p>Nomor dan TGL SK KULIN</p>
                            <div class="form-group">
                                <input type="text" class="form-control" name="nomor_kulin" id="nomor_kulin" placeholder="Nomor dan TGL SK KULIN...">
                            </div>
                    </div>
 
                    <div class="form-group pt-1">
                        <p>Jumlah Pohon PINUS yang DiSadap</p>
                        <div class="form-group">
                            <input type="number" class="form-control" name="jumlah_disadap" id="jumlah_disadap" placeholder="Jumlah Pohon PINUS yang DiSadap ...">                       
                        </div>
                    </div>
                    <div class="form-group pt-1">
                        <p>Jumlah Pohon Pinus yang DiEvaluasi</p>
                        <div class="form-group">
                            <input type="number" class="form-control" name="jumlah_dievaluasi" id="jumlah_dievaluasi" placeholder="Jumlah Pohon Pinus yang DiEvaluasi...">                       
                        </div>
                    </div>

                </div> 
                <button type="submit" class="btn btn-success ml-auto">Simpan</button>
            </div>
        </form>

      

    </div>

    @include('layouts.footer')

