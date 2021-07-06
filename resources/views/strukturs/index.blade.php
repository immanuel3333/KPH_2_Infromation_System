@include('layouts.headeradmin')
</div>
<div class="content-page">
    <div class="container-fluid ">
        <div class="card ml-4">
                        <center>
                        <a href="{{ route('strukturs.create') }}" class="btn btn-md btn-success mb-3">TAMBAH BLOG</a>
                        <p><b> Struktur Organisasi </p><br>
                              @forelse ($blogs as $blog)
                                        <p><img src="{{ asset( $blog->image ) }}"></p><br>
                                        <p><img src="{{ asset( $blog->image2 ) }}"></p><br>
                                        <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('strukturs.destroy', $blog->id) }}" method="POST">
                                            <a href="{{ route('strukturs.edit', $blog->id) }}" class="btn btn-sm btn-primary">EDIT</a>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                                        </form>
                              @empty
                                  <div class="alert alert-danger">
                                      Data Blog belum Tersedia.
                                  </div>
                              @endforelse
                          {{ $blogs->links() }}
                        <p>Keterangan Struktur Organisasi</p><br></b>
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
