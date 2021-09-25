@include('layouts.header')
        <div class="content-page">
            <div class="container-fluid padding">
                <h1 class="col-12 text-center" style="font-size:36px; font-family:Poppins;">Artikel
                    </h1>

            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    @foreach($artikel as $a)
                        <li data-target="#carouselExampleIndicators" data-slide-to="{{ $loop->index }}" class="{{ $loop->first ? 'active' : '' }}"></li>
                    @endforeach
                </ol>
                <div class="carousel-inner">
                    @foreach( $artikel as $a )
                    <div class="carousel-item  {{ $loop->first ? 'active' : '' }}">
                        <img src="{{ is_null($a->gambar) ? asset('public/artikel/No image.png') : $a->gambar }}" class="img-fluid d-block mx-auto" >
                        <div class="carousel-caption d-none d-md-block">
                        <a href="{{ route('detail-artikel',$a->id) }}">
                            <h5 class="display-5 font-weight-bold">{{$a->judul}}</h5>
                        </a>
                        </div>
                    </div>
                    @endforeach
                     <!-- <div class="carousel-item active">
                        <img class="d-block w-100" src="..." alt="First slide">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>...</h5>
                            <p>...</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="..." alt="Second slide">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>...</h5>
                            <p>...</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="..." alt="Third slide">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>...</h5>
                                <p>...</p>
                            </div>
                        </div>
                    </div> -->
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="fas fa-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="fas fa-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>


            <!-- <div class="row">
            @foreach ($artikel as $a)
                <div class="col-md-6">
                    <div class=" bg-secondary text-white">
                        <img src="{{ asset($a->gambar) }}" class="card-img" alt="#" width="700" height="500">
                            <div class="card-img-overlay  d-flex align-items-end" style="padding-bottom:50px;">
                                <a href="{{ route('detail-artikel',$a->id) }}">
                                <h4 class="card-title text-white">{{$a->judul}}</h4>
                                </a>
                            </div>
                            <div>
                                <span style="color:black;">{{$a->created_at->diffForHumans()}}</span>
                            </div>
                    </div>
                </div>
                    @endforeach
            </div> -->



                <!--==========================
                Portfolio Section
                ============================-->
                <section id="portfolio"  class="section-bg" >

                    <div class="row portfolio-container">
                        <div class="col-lg-3 col-md-6 portfolio-item filter-app wow fadeInUp">
                            <div class="portfolio-wrap">
                            <figure>
                                <img style="width: 500px; height: 300px;" src="img/galeriunit6.png" style="" class="img-fluid" alt="">
                            </figure>

                            <div class="portfolio-info">
                                <h5><a href="{{ route('bshowgaleriunitkerja') }}">Galeri Unit VI Simalungun </a></h5>

                            </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 portfolio-item filter-web wow fadeInUp" data-wow-delay="0.1s">
                            <div class="portfolio-wrap">
                            <figure>
                                <img style="width: 500px; height: 300px;" src="img/galeriunit9.jpg" class="img-fluid" alt="">
                            </figure>

                            <div class="portfolio-info">
                                <h5><a href="{{ route('bshowgaleriunitkerja2') }}">Galeri Unit IX Sergai</a></h5>

                            </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 portfolio-item filter-app wow fadeInUp" data-wow-delay="0.2s">
                            <div class="portfolio-wrap">
                            <figure>
                                <img style="width: 500px; height: 300px;" src="img/galeriunit10.jpg" class="img-fluid" alt="">
                            </figure>

                            <div class="portfolio-info">
                                <h5><a href="{{ route('bshowgaleriunitkerja3') }}">Galeri Unit X Batubara</a></h5>

                            </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 portfolio-item filter-app wow fadeInUp" data-wow-delay="0.2s">
                            <div class="portfolio-wrap">
                            <figure >
                                <img style="width: 500px; height: 300px;" src="img/galeriunit12.jpg" class="img-fluid" alt="" >
                           </figure>

                            <div class="portfolio-info">
                                <h5><a href="{{ route('bshowgaleriunitkerja4') }}">Galeri Unit XII Simalungun</a></h5>

                            </div>
                            </div>
                        </div>
                    </div>


                </section><!-- #portfolio -->

               <div class>
                <div class="card-group portfolio-item">
                        <div class="portfolio-wrap card col-md-8" id="mapid" style="width:100%; height:400px;">
                        </div>
                        <section class="pl-4 pr-4 card col-md-4" id="portfolio" style="width: 500px; height: 400px;">
                        <div class="portfolio filter-app wow fadeInUp"  data-wow-delay="0.2s">
                                <div>

                                        <img style="height: 300px"src="img/galeri.jpg" class="img-fluid" alt="">

                                    <div class="portfolio-info">
                                        <h5 class="text-center"><a href="{{ route('galeriupt') }}">Galeri Foto KPH</a></h5>
                                    </div>
                                </div>
                        </div>
                        </section>
                    </div>
               </div>








                    <!-- Fungsi komentar -->
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6 pt-3">
                                <div class="card mt-3 mb-20">
                                    <div class="card-body">
                                        <h5>Kritik dan Saran</h5>
                                        <div class="row">
                                            <div class="col-md">
                                                <form action="{{ url('/comment') }}" method="post">
                                                    @csrf

                                                    <div class="form-group">
                                                        <label for="">Nama</label>
                                                        <input type="text" class="form-control" name="username">
                                                        <p class="text-danger">{{ $errors->first('username') }}</p>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="">Masukkan Kritik dan Saran</label>
                                                        <textarea name="comment" cols="30" rows="10" class="form-control"></textarea>
                                                    </div>
                                                    <button class="btn btn-primary btn-sm">Kirim</button>
                                                </form>
                                            </div>

                                        </div>
                                        <br>

                                        <div class="row">
                                            <h5>Pesan dari Pengunjung</h5>
                                            <hr>

                                            <div class="col-md-12">
                                                @forelse($comments as $comment)
                                                <blockquote>
                                                        <h6>{{ $comment->username }}</h6>
                                                        <hr>
                                                        <p>{{ $comment->comment }}</p><br>
                                                </blockquote>

                                                @empty
                                                <h4>No Comments</h4>
                                                @endforelse
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 mt-10 pt-3">

                                <div class="card mt-3 mb-20">
                                    <div class="card-body">

                                        <h5>Berita dan Artikel</h5>
                                        @foreach($artikels as $a)
                                        <div class="row ">
                                            <div class="col-md-5 mt-4">
                                                    <img src="{{ is_null($a->gambar) ? asset('public/artikel/No image.png') : $a->gambar }}">
                                            </div>
                                            <div class="col-md-7 mt-4">
                                                <a href="{{ route('detail-artikel',$a->id) }}">
                                                <p class="font-weight-bold" style="font-size:16px;">{{$a->judul}}</p>
                                                </a>
                                                <p style="font-size:12px; overflow:hidden; display: -webkit-box; -webkit-line-clamp:3; -webkit-box-orient:vertical;">{{$a->artikel}}</p>
                                            </div>

                                        </div>

                                        @endforeach

                                            {{ $artikels->links() }}
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <br>
                            </div>
                        </div>

                    </div>
                </div>
</div>
</div>






            </div>
        </div>
@include('layouts.footer')
