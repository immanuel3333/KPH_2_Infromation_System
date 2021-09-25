@include('layouts.headeradmin')
<div class="content-page" style="background: url('{{ asset('img/backgroundadmin.png') }}');background-size:850px;background-repeat: repeat-y;background-position:center ;">
<div class="container-fluid " style="margin-top: -110px">
    <div class="card" style="padding-top:100px;">
        <h1 class="text-center" style="font-size:36px; font-family:Poppins;">Kelola Akun</h1><br>
        <a href="{{url('/inputakun')}}" >
            <button type="submit" class="btn" style="background-color: #99F07A; float:right;">Tambah</button>
        </a>
    <table class="table table-striped table-hover table-sm table-bordered">
		<thead>
			<tr>
                <th>No</th>
				<th>Username</th>
                <th>Email</th>
				<th>Password</th>
				<th>Level</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
            <?php $no = 0;?>
                @foreach ($akun as $akun)
            <?php $no++ ;?>

			<tr>
                <td>{{ $no }}</td>
				<td>{{ $akun->name }}</td>
                <td>{{ $akun->email }}</td>
                <td>{{ $akun->password }}</td>
                <td>{{$akun->level}}</td>
				<td>
                    <a href="{{url('/viewakun')}}/{{$akun->id}}" class="btn btn-sm btn-primary pl-10">EDIT</a>
                    <a href="{{url('/deleteakun')}}/{{$akun->id}}" class="ml-auto">
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




