
@include('layouts.header')
            <div class="content-page">
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

                <div class="row">
                <div class="pl-2">
                    <div class="card-deck">
                        <div class="card col-md-3">
                            <img class="card-img-top" src="..." alt="Card image cap">
                            <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                        </div>
                        <div class="card col-md-3">
                            <img class="card-img-top" src="..." alt="Card image cap">
                            <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                        </div>
                        <div class="card col-md-3">
                            <img class="card-img-top" src="..." alt="Card image cap">
                            <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                        </div>
                        <div class="card col-md-3">
                            <img class="card-img-top" src="..." alt="Card image cap">
                            <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                        </div>
                    </div>

                        <div class="row">
                            <div class=" card col-md-12">
                                <div id="mapid" style=width:100%;></div>
                            </div>
                        </div>
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
                                                    <input type="hidden" name="id" value="{{ $post->id }}" class="form-control">
                                                    <input type="hidden" name="parent_id" id="parent_id" class="form-control">
                                                    <div class="form-group">
                                                        <label for="">Username</label>
                                                        <input type="text" class="form-control" name="username">
                                                        <p class="text-danger">{{ $errors->first('username') }}</p>
                                                    </div>
                                                    <div class="form-group" style="display: none" id="formReplyComment">
                                                        <label for="">Balas Komentar</label>
                                                        <input type="text" id="replyComment" class="form-control" readonly>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="">Komentar</label>
                                                        <textarea name="comment" cols="30" rows="10" class="form-control"></textarea>
                                                    </div>
                                                    <button class="btn btn-primary btn-sm">Kirim</button>
                                                </form>
                                            </div>
                                            <div class="col-md-6">
                                                @foreach ($post->comments as $row)
                                                    <blockquote>
                                                        <h6>{{ $row->username }}</h6>
                                                        <hr>
                                                        <p>{{ $row->comment }}</p><br>
                                                        <a href="javascript:void(0)" onclick="balasKomentar({{ $row->id }}, '{{ $row->comment }}')">Balas</a>
                                                    </blockquote>
                                                    @foreach ($row->child as $val)
                                                        <div class="child-comment">
                                                            <blockquote>
                                                                <h6>{{ $val->username }}</h6>
                                                                <hr>
                                                                <p>{{ $val->comment }}</p><br>
                                                            </blockquote>
                                                        </div>
                                                    @endforeach
                                                @endforeach
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
