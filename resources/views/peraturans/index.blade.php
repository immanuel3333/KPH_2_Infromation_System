@include('layouts.headeradmin')
</div>
<div class="content-page" style="background: url('{{ asset('img/backgroundadmin.png') }}');background-size:850px;background-repeat: repeat-y;background-position:center ;">
    <div class="container-fluid ">
        <a href="{{ route('peraturans.create') }}" class="btn btn-info btn-sm">Tambah Post</a>
        <br><br>

        <table class="table table-striped table-hover table-sm table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Judul</th>
                    <th>Keterangan</th>
                    <th>File</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 0;?>
                @foreach ($blogs as $blog)
                <?php $no++ ;?>
                <tr>
                    <td>{{ $no }}</td>
                    <td>{{ $blog->judul }}</td>
                    <td>{{ $blog->keterangan }}</td>
                    <td><img src="{{ asset( $blog->file ) }}" class="img-fluid" style="width:100px"></td>
                    <td>
                        <form action="{{ route('peraturans.destroy', $blog->id )}}" method="POST">
                            @csrf
                            @method('delete')
                        <a href="{{ route('peraturans.edit', $blog->id ) }}" class="btn btn-primary btn-sm">Edit</a>
                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach

            </tbody>
        </table>

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
