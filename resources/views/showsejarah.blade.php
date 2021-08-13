@include('layouts.headeradmin')
</div>
<div class="content-page pt-5" style="background: url('{{ asset('img/backgroundadmin.png') }}');background-size:850px;background-repeat: repeat-y;background-position:center ;">
    <div class="container-fluid ">
        <div class="card">
<p style="font-size: 28px font-family:Balthazar"><strong>Sejarah</strong></p>

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

                                        <br>
                                        <a href="{{url('/view3')}}/{{$sj->id}}" class="ml-auto">
                                        <button type="submit" class="btn" style="background-color: #99F07A;">Edit</button>
                                        </a>
                                    </div>
                                    @endforeach


                                </div>

                            </div>

        </div>
    </div>
    </div>


    @include('layouts.footer')
