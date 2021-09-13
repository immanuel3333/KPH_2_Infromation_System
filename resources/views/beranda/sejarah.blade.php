@include('layouts.header')
</div>
<div class="content-page pt-5" style="background: url('{{ asset('img/backgroundadmin.png') }}');background-size:850px;background-repeat: repeat-y;background-position:center ;">
    <div class="container-fluid ">
        <div class="card">
            <h1 class="text-center" style="font-size:36px; font-family:Poppins;"><strong>Sejarah</strong></h1>

                            <div class="row">
                                <!-- Post content -->
                                <div class="col-md-12">
                                    @foreach($sj as $sj)
                                    <div class="section-row sticky-container">
                                        <div class="text-center">

                                            <figure class="figure-img">
                                                <img class="img-responsive" src="{{ asset($sj->gambar)}}"
                                                    width="600px" height="300px" alt="">
                                            </figure>
                                        </div>
                                        <div class="text-justify">
                                            {!! $sj->sejarah !!}
                                        </div>


                                    </div>
                                    @endforeach


                                </div>

                            </div>

        </div>
    </div>
    </div>



    @include('layouts.footer')
