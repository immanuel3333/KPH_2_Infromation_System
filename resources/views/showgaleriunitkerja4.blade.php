@include('layouts.headeradminunit4')
</div>

<div class="content-page">
    <div class="container-fluid">
       <!--==========================
                Portfolio Section
        ============================-->

                <section id="portfolio"  class="section-bg" >

                    <div class="row col-md-12 portfolio-container justify-content-center">
                    @foreach($gl4 as $gl4)
                        <div class="col-lg-4 portfolio-item filter-app wow fadeInUp">
                            <div class="portfolio-wrap">
                                <figure>
                                    <img src="{{ asset($gl4->gambar)}}"  class="img-fluid" alt="" width="400" height="400">
                                    <a href="{{ asset($gl4->gambar)}}" data-lightbox="portfolio" data-title="App 1" class="link-preview" title="Preview"><i class="ion ion-eye"></i></a>
                                    <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                                </figure>
                                <div class="portfolio-info">
                                    <p style="padding-left:350px;">{{$gl4->tanggal}}</p>
                                    <h4><a href="#">{{$gl4->keterangan}}</a></h4>
                                    <a href="{{ url('viewgaleriunitkerja4',$gl4->id)}}"><i class="fas fa-edit"></i></a>
                                    <a href="{{ url('destroygaleriunitkerja4',$gl4->id)}}"><i class="fas fa-trash-alt" style="color:red;"></i></a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <div style="padding-right:100px;">
                        <br>
                        <a href="{{url('/inputgaleriunitkerja4')}}" >
                            <button type="submit" class="btn" style="background-color: #99F07A; float:right;">Tambah</button>
                        </a>
                    </div>


                </section>



    </div>

    @include('layouts.footer')

