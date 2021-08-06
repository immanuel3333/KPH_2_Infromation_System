@include('layouts.header')
            <div class="content-page " >
                <div class="container">
                    <div class="myBanner">
                        <div class="col align-self-center">
                        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                            <div class="carousel-item active" style="height:300px">
                                <a id="firsturl" href={{$firstUrl}}>
                                <img id="firstimage" class="img-fluid d-block mx-auto" src="{{$firstImage}}" alt="..." style="width:1110px; height:500px;">
                                </a>
                                <div class="carousel-caption  d-md-block">
                                <p class="title">{{$firstTitle}}</p>
                                </div>
                            </div>

                            <div class="carousel-item" style="height:300px">
                                <a id="secondurl" href={{$secondUrl}}>
                                <img id="secondimage" class="img-fluid d-block mx-auto" src="{{$secondImage}}" alt="..." style="width:1110px; height:500px;">
                                </a>
                                <div class="carousel-caption  d-md-block">
                                <p class="title">{{$secondTitle}}</p>
                                </div>
                            </div>

                            <div class="carousel-item" style="height:300px">
                                <a id="thirdurl" href={{$thirdUrl}}>
                                <img id="thirdimage" class="img-fluid d-block mx-auto" src="{{$thirdImage}}" alt="..." style="width:1110px; height:500px;">
                                </a>
                                <div class="carousel-caption  d-md-block">
                                <p class="title">{{$thirdTitle}}</p>
                                </div>
                            </div>
                            </div>

                            <a id="previous" class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a id="next" class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                            </div>
                        </div>
                    </div>
                </div>

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
                                <h4><a href="#">Galeri Unit 1</a></h4>
                                <p>App</p>
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
                                <h4><a href="#">Galeri Unit 2</a></h4>
                                <p>Web</p>
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
                                <h4><a href="#">Galeri Unit 3</a></h4>
                                <p>App</p>
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
                                <h4><a href="#">Galeri Unit 4</a></h4>
                                <p>App</p>
                            </div>
                            </div>
                        </div>
                    </div>


                </section><!-- #portfolio -->
                <div class="card" id="mapid" style="width:100%;">
                </div>


                    <!-- Fungsi komentar -->
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card mt-3">
                                    <div class="card-body">
                                        <h5>Komentar</h5>
                                        <div class="row auto">
                                            <div class="col-md-6">
                                                <form action="{{ url('/comment') }}" method="post">
                                                    @csrf

                                                    <div class="form-group">
                                                        <label for="">Nama</label>
                                                        <input type="text" class="form-control" name="username">
                                                        <p class="text-danger">{{ $errors->first('username') }}</p>
                                                    </div>
                                                    <div class="form-group" style="display: none" id="formReplyComment">
                                                        <label for="">Balas Komentar</label>
                                                        <input type="text" id="replyComment" class="form-control" readonly>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="">Masukkan Komentar</label>
                                                        <textarea name="comment" cols="30" rows="10" class="form-control"></textarea>
                                                    </div>
                                                    <button class="btn btn-primary btn-sm">Kirim</button>
                                                </form>
                                            </div>
                                            <br>
                                            <h5>List of Comments</h5>
                                        <hr>
                                        <ol>

                                            @forelse($comments as $comment)
                                                <li class="lead">{{$comment->comment}}</li>
                                            @empty
                                                <h4>No Comments</h4>
                                            @endforelse
                                        </ol>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
@include('layouts.footer')
