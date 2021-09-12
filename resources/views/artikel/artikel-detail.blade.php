@include('layouts.header')
</div>
<div class="content-page pt-5" style="background: url('{{ asset('img/backgroundadmin.png') }}');background-size:850px;background-repeat: repeat-y;background-position:center ;">
    <div class="container-fluid ">
    <div class="card" style="padding-top:100px;">
<p style="font-size: 28px"><strong>Baca Artikel</strong></p>

                            <div class="row">
                                <!-- Post content -->
                                <div class="col-md-12">
                                    <div class="section-row sticky-container">
                                        <div class="text-center">
                                            <h3>{{$artikel_detail->judul}}</h3>

                                            <figure class="figure-img">
                                                <img class="img-responsive" src="{{ asset($artikel_detail->gambar)}}"
                                                    width="600px" height="300px" alt="">
                                            </figure>
                                        </div>
                                        <div class="text-justify">
                                            {!! $artikel_detail->artikel !!}
                                        </div>
                                    </div>



                                </div>

                            </div>

        </div>
    </div>
    </div>



@include('layouts.footer')
