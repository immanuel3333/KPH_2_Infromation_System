
<div class="container" style="padding-bottom:50px;">
    <div class="card">
    <table class="table table-striped table-hover table-sm table-bordered">
		<thead>
			<tr>
                <th>No</th>
				<th>Provinsi</th>
				<th>Jenis Jasa Lingkungan</th>
				<th>Satuan</th>
				<th>Keunggulan</th>
                <th>Lintang</th>
                <th>Bujur</th>
                <th>Pengembangan</th>
                <th>Tahapan</th>
                <th>Periode</th>
                <th>Keunggulan</th>
                <th>Hasil</th>

			</tr>
		</thead>
		<tbody>
            <?php $no = 0;?>
                @foreach ($jl as $jl)
            <?php $no++ ;?>

			<tr>
                <td>{{ $no }}</td>
				<td>{{ $jl->provinsi }}</td>
                <td>{{ $jl->jenis_jasa_lingkungan }}</td>
                <td>{{ $jl->satuan }}</td>
                <td>{{ $jl->keunggulan }}</td>
                <td>{{ $jl->lintang }}</td>
                <td>{{ $jl->bujur }}</td>
                <td>{{ $jl->pengembangan }}</td>
                <td>{{ $jl->tahapan }}</td>
                <td>{{ $jl->periode }}</td>
                <td>{{ $jl->keunggulan }}</td>
                <td>{{ $jl->hasil }}</td>
			</tr>
			@endforeach

		</tbody>
	</table>
    </div>

