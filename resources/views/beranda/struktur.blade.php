@include('layouts.header')
</div>
<div class="content-page">
    <div class="container-fluid ">
        <div class="card ml-4">
                        <center>
                        <p><b> Struktur Organisasi </p><br>
                              @forelse ($blogs as $blog)
                                        <p><img src="{{ asset( $blog->image ) }}"></p><br>
                                        <p><img src="{{ asset( $blog->image2 ) }}"></p><br>

                              @empty
                                  <div class="alert alert-danger">
                                      Data Blog belum Tersedia.
                                  </div>
                              @endforelse


                        </center>
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
