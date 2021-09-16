@include('layouts.headeradmin')
<div class="content-page" style="background: url('{{ asset('img/backgroundadmin.png') }}');background-size:850px;background-repeat: repeat-y;background-position:center ;">
<div class="container-fluid " style="margin-top: -110px">
    <div class="card" style="padding-top:100px;">
        <h1 class="text-center" style="font-size:36px; font-family:Poppins;">Kelola Artikel</h1><br>
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
				</td>
			</tr>
			@endforeach

		</tbody>
	</table>
    </div>
</div>
</div>
@include('layouts.footer')




