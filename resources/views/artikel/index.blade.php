@include('layouts.headeradmin')
<div class="container" style="padding-bottom:50px;">
<a href="{{url('/inputartikel')}}" >
    <button type="submit" class="btn" style="background-color: #99F07A; float:right;">Tambah</button>  
</a>

    <table class="table table-striped table-hover table-sm table-bordered">
		<thead>
			<tr>
                <th>No</th>
				<th>Judul</th>
				<th>File</th>
				<th>Keterangan</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
            <?php $no = 0;?>
                @foreach ($art as $art)
            <?php $no++ ;?>
			
			<tr>
                <td>{{ $no }}</td>
				<td>{{ $art->judul }}</td>
                <td><img src="{{ asset($art->gambar)}}" alt="" width=250px; height=250px; ></td>
                <td>{!! $art->artikel !!}</td>
				<td>
                    <a href="{{url('/viewartikel')}}/{{$art->id}}" class="btn btn-sm btn-primary pl-10">EDIT</a>
                    <a href="{{url('/deleteartikel')}}/{{$art->id}}" class="ml-auto">
                        <button type="submit" class="btn bg-danger">Hapus</button>
                    </a>
					<a href="{{ route('detail-artikel',$art->id) }}" class="btn btn-sm btn-primary pl-10">Show</a>
				</td>
			</tr>
			@endforeach

		</tbody>
	</table>
@include('layouts.footeradmin')




