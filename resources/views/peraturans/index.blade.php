@include('layouts.headeradmin')
<div class="container" style="padding-bottom:50px;">
    <div class="card-body">
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
                <td>{{ $hasil->file }}</td>
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

    </div>
    @include('layouts.footer')

