@include('layouts.header')
</div>
<div class="content-page" style="background: url('{{ asset('img/backgroundadmin.png') }}');background-size:850px;background-repeat: repeat-y;background-position:center ;">
    <div class="container-fluid ">
        <div class="card">
                        <center>
                        <p style="font-size:50px; font-family:balthazar;"><b> Struktur Organisasi </p><br>
                              @forelse ($blogs as $blog)
                                        <p><img src="{{ asset( $blog->image ) }}" width="592px" height="438px"></p><br>
                                        <p><img src="{{ asset( $blog->image2 ) }}" width="592px" height="391px"></p><br>
                            
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
