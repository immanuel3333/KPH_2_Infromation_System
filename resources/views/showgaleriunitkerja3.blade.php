@include('layouts.headeradminunit3')
</div>

<div class="content-page">
    <div class="container-fluid">
       <!--==========================
                Portfolio Section
        ============================-->

                <section id="portfolio"  class="section-bg" >

                    <div class="row col-md-12 portfolio-container justify-content-center">
                    @foreach($gl3 as $gl3)
                        <div class="col-lg-4 portfolio-item filter-app wow fadeInUp">
                            <div class="portfolio-wrap">
                                <figure>
                                    <img src="{{ asset($gl3->gambar)}}"  class="img-fluid" alt="" width="400" height="400">
                                    <a href="{{ asset($gl3->gambar)}}" data-lightbox="portfolio" data-title="App 1" class="link-preview" title="Preview"><i class="ion ion-eye"></i></a>
                                    <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                                </figure>
                                <div class="portfolio-info">
                                    <p style="padding-left:350px;">{{$gl3->tanggal}}</p>
                                    <h4><a href="#">{{$gl3->keterangan}}</a></h4>
                                    <a href="{{ url('viewgaleriunitkerja3',$gl3->id)}}"><i class="fas fa-edit"></i></a>
                                    <a href="{{ url('destroygaleriunitkerja3',$gl3->id)}}"><i class="fas fa-trash-alt" style="color:red;"></i></a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <div style="padding-right:100px;">
                        <br>
                        <a href="{{url('/inputgaleriunitkerja3')}}" >
                            <button type="submit" class="btn" style="background-color: #99F07A; float:right;">Tambah</button>
                        </a>
                    </div>


                </section>



    </div>

    @include('layouts.footer')

