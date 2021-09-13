
<div class="container col-md-12" style="padding-bottom:50px;">
    <table class="table table-striped table-hover" id="fasilitas-table">
        <thead>
            <tr>
                <th>No</th>
                <th>Aspek</th>
                <th>Jumlah</th>
                <th>Kondisi</th>
                <th>Status</th>
                <th>Sumber Dana</th>
            </tr>
         </thead>

         <tbody>
            <?php $no = 0;?>
                @foreach ($fs as $fs)
            <?php $no++ ;?>

			<tr>
                <td>{{$no}}</td>
                <td>{{$fs->aspek}}</td>
                <td>{{$fs->jumlah}}</td>
                <td>{{$fs->kondisi}}</td>
                <td>{{$fs->status}}</td>
                <td>{{$fs->sumberdana}}</td>
			</tr>
			@endforeach

		</tbody>

    </table>
</div>






