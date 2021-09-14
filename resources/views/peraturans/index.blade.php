@include('layouts.headeradmin')
<div class="content-page" style="background: url('{{ asset('img/backgroundadmin.png') }}');background-size:850px;background-repeat: repeat-y;background-position:center ;">
    <div class="container-fluid " style="margin-top: -110px">
    <div class="card" style="padding-top:100px;">
        <h1 class="text-center" style="font-size:36px; font-family:Poppins;">Kelola Peraturan</h1><br>
        <a href="{{url('/inputperaturan')}}" >
            <button type="submit" class="btn" style="background-color: #99F07A; float:right;">Tambah</button>
        </a>

        <table id="datatable" class="table data-table table-striped table-bordered" >
            <thead>
               <tr>
                <th>No</th>
				<th>Judul</th>
				<th>Keterangan</th>
				<th>Download File</th>
                <th>Aksi</th>
               </tr>
            </thead>
            <tbody>
                @php
                    $n = 0;
                @endphp
                @foreach ($law as $hasil)
                @php
                    $n++
                @endphp

                <tr>
                    <td>{{ $n }}</td>
                    <td>{{ $hasil->judul }}</td>
                <td>{{ $hasil->keterangan }}</td>
                <td>
                    <a href="{{ asset($hasil->file)}}" data-lightbox="portfolio" data-title="App 1" class="link-preview" title="Preview">{{ $hasil->file }}</a>
                </td>
                <td>
                    <form action="{{url('/destroyperaturan')}}/{{$hasil->id}}" method="POST">
                        @csrf
                    <a href="{{url('/viewperaturan12')}}/{{$hasil->id}}" class="btn btn-primary btn-sm">Edit</a>
                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                    </form>
                </td>
                </tr>
                @endforeach

            </tbody>
       </table>

    </div></div></div>
    @include('layouts.footer')

