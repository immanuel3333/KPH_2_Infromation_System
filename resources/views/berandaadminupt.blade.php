@include('layouts.headeradmin')
    <div class="content-page " >
        <h1 class="text-center" style="font-size:36px; font-family:Poppins;">Selamat Datang di Halaman Pengaturan</h1>
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
                                <table class="table table-striped">
    <thead>
      <tr>
        <th>Comments</th>
        <th>Approval</th>
      </tr>
    </thead>

    <tbody>
    @forelse($comments as $comment)
      <tr>
        <td>
            <b>Pengirim:  {{$comment->username}} </b> <br>
            <p>Pesan : {{$comment->comment}}</p>
        </td>
        <td>
              <form action="{{url('/toggle-approve')}}" method="POST">
                  {{csrf_field()}}
                  <input <?php if($comment->approve == 1){echo "checked";}?>  type="checkbox" name='approve' style="width: 20px; height: 20px;" >

                     <input type="hidden" name="commentId" value="{{$comment->id}}">
                  <input class="btn btn-primary" type="submit" value="Done">

              </form>
        </td>
      </tr>
      @empty
      <h4>No Data</h4>
      @endforelse
    </tbody>
  </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    </div>
@include('layouts.footer')
