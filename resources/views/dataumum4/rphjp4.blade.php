<center>
<h1 class="text-center">Kelola RPHJP</h1>
    <div class="col-md-9 ">
        <table class="table table-bordered-2">
            <thead class="thead-black">
              <tr style="background-color: lightgreen">
                <th scope="col">No</th>
                <th scope="col">Aspek</th>
                <th scope="col">Isi</th>
              </tr>
            </thead>
            <tbody style="background-color: white">
                @foreach ($rp as $rp)

              <tr>
                <th scope="row">1</th>
                <td>Upaya</td>
                <td>{{$rp->upaya}}</td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>Kendala</td>
                <td>{{$rp->kendala}}</td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td>Progres</td>
                <td>{{$rp->progres}}</td>
              </tr>
              @endforeach
            </tbody>
          </table>
          <a href="{{url('/viewrphjp4')}}/{{$rp->id}}" class="btn btn-sm btn-primary pl-10">EDIT</a>
    </div>
</center><br>

