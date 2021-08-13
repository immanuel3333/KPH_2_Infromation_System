@include('layouts.header')
        <div class="content-page">
            <div class="container-fluid padding">                  
            <h1 class="col-12 text-center">Artikel Terbaru</h1>
            
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    @foreach($artikel as $a)
                        <li data-target="#carouselExampleIndicators" data-slide-to="{{ $loop->index }}" class="{{ $loop->first ? 'active' : '' }}"></li>
                    @endforeach
                </ol>
                <div class="carousel-inner">
                    @foreach( $artikel as $a )
                    <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                        <img src="{{ is_null($a->gambar) ? asset('public/artikel/No image.png') : $a->gambar }}" class="d-block w-100">
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
                                <img src="img/contoh1.png" style="" class="img-fluid" alt="">
                                <a href="img/contoh1.png" data-lightbox="portfolio" data-title="App 1" class="link-preview" title="Preview"><i class="ion ion-eye"></i></a>
                                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                            </figure>

                            <div class="portfolio-info">
                                <h5><a href="{{ route('bshowgaleriunitkerja') }}">Galeri Unit VI Simalungun </a></h5>

                            </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 portfolio-item filter-web wow fadeInUp" data-wow-delay="0.1s">
                            <div class="portfolio-wrap">
                            <figure>
                                <img src="img/contoh1.png" class="img-fluid" alt="">
                                <a href="img/contoh1.png" class="link-preview" data-lightbox="portfolio" data-title="Web 3" title="Preview"><i class="ion ion-eye"></i></a>
                                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                            </figure>

                            <div class="portfolio-info">
                                <h5><a href="{{ route('bshowgaleriunitkerja2') }}">Galeri Unit IX Sergai</a></h5>

                            </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 portfolio-item filter-app wow fadeInUp" data-wow-delay="0.2s">
                            <div class="portfolio-wrap">
                            <figure>
                                <img src="img/contoh1.png" class="img-fluid" alt="">
                                <a href="img/contoh1.png" class="link-preview" data-lightbox="portfolio" data-title="App 2" title="Preview"><i class="ion ion-eye"></i></a>
                                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                            </figure>

                            <div class="portfolio-info">
                                <h5><a href="{{ route('bshowgaleriunitkerja3') }}">Galeri Unit X Batubara</a></h5>

                            </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 portfolio-item filter-app wow fadeInUp" data-wow-delay="0.2s">
                            <div class="portfolio-wrap">
                            <figure>
                                <img src="img/contoh1.png" class="img-fluid" alt="">
                                <a href="img/contoh1.png" class="link-preview" data-lightbox="portfolio" data-title="App 2" title="Preview"><i class="ion ion-eye"></i></a>
                                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                            </figure>

                            <div class="portfolio-info">
                                <h5><a href="{{ route('bshowgaleriunitkerja4') }}">Galeri Unit XII Simalungun</a></h5>

                            </div>
                            </div>
                        </div>
                    </div>


                </section><!-- #portfolio -->

               <div class="">
                <div class="card-group portfolio-wrap">
                        <div class="portfolio-item card col-md-8" id="mapid" style="width:100%;">
                        </div>
                        <section class="pl-4 card col-md-4"  id="portfolio">
                        <div class="portfolio-item filter-app wow fadeInUp" data-wow-delay="0.2s">
                                <div class="">
                                    <figure>
                                        <img src="img/contoh1.png" class="img-fluid" alt="">
                                        <a href="img/contoh1.png" class="link-preview" data-lightbox="portfolio" data-title="App 2" title="Preview"><i class="ion ion-eye"></i></a>
                                        <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                                    </figure>
                                    <div class="portfolio-info">
                                        <h4><a href="{{ route('galeriupt') }}">Galeri Foto KPH</a></h4>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
               </div>








                    <!-- Fungsi komentar -->
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card mt-3">
                                    <div class="card-body">
                                        <h5>Kritik dan Saran</h5>
                                        <div class="row auto">
                                            <div class="col-md-6">
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
                                            <br>
                                            <h5>Pesan dari Pengunjung</h5>
                                        <hr>

                                        <div class="col-md-6">
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
                        </div>
                    </div>
                </div>

  




            </div>
        </div>
@include('layouts.footer')
