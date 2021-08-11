@include('layouts.headeradmin')
<div class="container" style="padding-bottom:50px;">
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
                @foreach ($law as $hasil)
            <?php $no++ ;?>

			<tr>
                <td>{{ $no }}</td>
				<td>{{ $hasil->judul }}</td>
                <td>{{ $hasil->keterangan }}</td>
                <td>
                    <a href="{{ asset($hasil->file)}}" data-lightbox="portfolio" data-title="App 1" class="link-preview" title="Preview">{{ $hasil->file }}</a>
                </td>
				<td>
                    <a href="{{url('/viewperaturan12')}}/{{$hasil->id}}" class="btn btn-sm btn-primary pl-10">EDIT</a>
				</td>
			</tr>
			@endforeach

		</tbody>
	</table>
@include('layouts.footeradmin')




