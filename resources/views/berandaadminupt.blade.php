
@include('layouts.header')
    <div class="content-page " >
    <h1>Selamat Datang di Halaman Pengaturan</h1>
        <div class="card-deck">
            <div class="card border border-dark">
                <p class="text-center">Kelola Profil</p>
                <img class="card-img-top" src="img/gambar1.png" alt="Card image cap">
                <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text text-justify">Anda dapat mengelola isi dari profil Profil UPT. KPH-II. Yang meliputi visi dan misi, sejarah, struktur organisasi, tugas dan fungsi serta galeri kegiatan UPT. </p>
                </div>
            </div>
            <div class="card border border-dark">
                <p class="text-center ">Kelola Unit Kerja</p>
                <img class="card-img-top" src="img/gambar2.png" alt="Card image cap">
                <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text text-justify">Anda dapat mengelola isi dari unit kerja yang terdiri dari data umum, data ekologi, data ekonomi, data SDM dari unit dinaungi. </p>
                </div>
            </div>
            <div class="card border border-dark">
                <p class="text-center">Kelola Perpu</p>
                <img class="card-img-top" src="img/gambar3.png" alt="Card image cap">
                <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text text-justify">Anda dapat mengelola isi dari peraturan perundangan yang sekarang sedang berlaku. </p>
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
                                            <div class="card col-md-8">
                                                @foreach ($post->comments as $row)
                                                    <blockquote>
                                                        <h6>{{ $row->username }}</h6>
                                                        <hr>
                                                        <p>{{ $row->comment }}</p><br>
                                                        <a href="javascript:void(0)" onclick="balasKomentar({{ $row->id }}, '{{ $row->comment }}')"data-toggle="modal" data-target="#exampleModalCenter">Balas</a>
                                                        <a href="{{url('/home')}}/{{ $row->id }}/delete" class="pl-3">Delete</a>    
                                                     
                            



                                                        <!-- pop up -->
                                                        <!-- Button trigger modal -->
                                                        <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
                                                        Balas
                                                        </button> -->

                                                        <!-- Modal -->
                                                        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                                            <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLongTitle">Balas Komentar</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                            <form action="{{ url('/comment') }}" method="post">
                                                                @csrf
                                                                <input type="hidden" name="id" value="{{ $post->id }}" class="form-control">
                                                                <input type="hidden" name="parent_id" id="parent_id" class="form-control">
                                                                <div class="form-group">
                                                                    <label for="">Nama</label>
                                                                    <input type="text" class="form-control" name="username" value='{{$user->name}}' >
                                                                    
                                                                </div>
                                                                <div class="form-group" style="display: none" id="formReplyComment">
                                                                    <label for="">Balas Komentar</label>
                                                                    <input type="text" id="replyComment" class="form-control" readonly>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="">Masukkan Komentar</label>
                                                                    <textarea name="comment" cols="30" rows="10" class="form-control"></textarea>
                                                                </div>  

                                                        </div>

                                                        <div class="modal-footer">
                                                            <button class="btn btn-primary">Kirim</button>
                                                        </div>
                                                        </div>
                                                    </form>
                                                            
                                                        </div>
                                                        </div>



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
