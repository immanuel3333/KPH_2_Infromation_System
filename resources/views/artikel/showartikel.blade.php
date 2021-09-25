@include('layouts.header')
</div>

<div class="content-page" >
    <h1>Artikel dan Berita</h1>
                    <form class="form" method="get" action="{{ route('search') }}">
                        <div class="form-group w-100 mb-3">
                            <center>
                            <label for="search" class="d-block mr-2"></label>
                            <input type="text" name="search" class="form-control w-75 d-inline" id="search" placeholder="Masukkan kata kunci">
                            <button type="submit" class="btn btn-primary mb-1">Cari</button>
                            </center>
                        </div>
                    </form>
                    <div class="col-md-12 mt-10 pt-3">
                    <div class="card mt-3 mb-20">
                        <div class="card-body">
                    @foreach($artikels as $a)
                                        <div class="row ">
                                            <div class="col-md-5 mt-4">
                                                    <img src="{{ is_null($a->gambar) ? asset('public/artikel/No image.png') : $a->gambar }}">
                                            </div>
                                            <div class="col-md mt-4">
                                                <a href="{{ route('detail-artikel',$a->id) }}">
                                                <p class="font-weight-bold" style="font-size:16px;">{{$a->judul}}</p>
                                                </a>
                                                <p style="font-size:12px; overflow:hidden; display: -webkit-box; -webkit-line-clamp:3; -webkit-box-orient:vertical;">{{$a->artikel}}</p>
                                            </div>

                                        </div>
                    @endforeach
                     {{ $artikels->links() }}
        </div></div>

</div>

</div>


@include('layouts.footer')
