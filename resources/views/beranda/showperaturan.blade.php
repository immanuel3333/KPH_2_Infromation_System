@include('layouts.header')
<div class="content-page" style="background: url('{{ asset('img/backgroundadmin.png') }}');background-size:850px;background-repeat: repeat-y;background-position:center ;">
    <div class="container-fluid " style="margin-top: -110px">
    <div class="card" style="padding-top:100px;">
        <p class="text-center " style="font-size:39px;">Peraturan</p><br>

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
</div>
</div>
    @include('layouts.footer')
