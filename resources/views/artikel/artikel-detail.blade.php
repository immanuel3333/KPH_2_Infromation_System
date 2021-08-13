@include('layouts.header')
</div>

<div class="content-page" style="background: url('{{ asset('img/backgroundadmin.png') }}');background-size:850px;background-repeat: repeat-y;background-position:center ;">

<!-- section -->
<div class="section">
        <!-- row -->
        <div class="row">
            <!-- Post content -->
            <div class="col-md-8">
                <div class="section-row sticky-container">
                    <div class="text-center">
                        <h3>{{$artikel_detail->judul}}</h3>
                        <figure class="figure-img">
                            <img class="img-responsive" src="{{ asset($artikel_detail->gambar)}}"
                                width="600px" height="600px" alt="">
                        </figure>
                        {!! $artikel_detail->artikel !!}
                    </div>
                </div>



            </div>
            
        </div>
        <!-- /row -->
</div>
<!-- /section -->

@include('layouts.footeradmin')
