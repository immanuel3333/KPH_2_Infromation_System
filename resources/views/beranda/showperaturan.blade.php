@include('layouts.header')
<div class="container" style="padding-bottom:50px;">
    <div class="card-body">

        <table id="datatable" class="table data-table table-striped table-bordered" >
            <thead>
               <tr>
                <th>No</th>
				<th>Judul</th>
				<th>Keterangan</th>
				<th>Download File</th>
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
                </tr>
                @endforeach

            </tbody>
       </table>

    </div>
    @include('layouts.footer')
