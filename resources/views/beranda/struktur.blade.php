@include('layouts.header')
</div>
<div class="content-page" style="background: url('{{ asset('img/backgroundadmin.png') }}');background-size:850px;background-repeat: repeat-y;background-position:center ;">
    <div class="container-fluid ">
        <div class="card">
                        <center>
                            <h1 class="text-center" style="font-size:36px; font-family:Poppins;"> Struktur Organisasi </h1><br>
                              @forelse ($blogs as $blog)
                              <div class="row card">
                                 <img style="width: 100%; height:100%" src="{{ asset( $blog->image ) }}">
                              </div>
                              <div class="row card">
                                 <img style="width: 100%; height:100%" src="{{ asset( $blog->image2 ) }}">
                              </div>

                              @empty
                                  <div class="alert alert-danger">
                                      Data Struktur belum Tersedia.
                                  </div>
                              @endforelse

                        </center>
        </div>
                    </div>
                </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    <script>
        //message with toastr
        @if(session()-> has('success'))

            toastr.success('{{ session('success') }}', 'BERHASIL!');
        @elseif(session()-> has('error'))
            toastr.error('{{ session('error') }}', 'GAGAL!');

        @endif
    </script>


@include('layouts.footer')
