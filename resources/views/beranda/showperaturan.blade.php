@include('layouts.header')
<div class="container" style="padding-bottom:50px;">
    <table class="table table-striped table-hover table-sm table-bordered">
		<thead>
			<tr>
                <th>No</th>
				<th>Judul</th>
				<th>Keterangan</th>
				<th>Download File</th>

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

			</tr>
			@endforeach

		</tbody>
	</table>
@include('layouts.footeradmin')




