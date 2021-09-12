<center>
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
                @foreach ($kkph as $kkph)

              <tr>
                <th scope="row">1</th>
                <td>Nama KKPH</td>
                <td>{{$kkph->namakph}}</td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>Jenis Kelamin</td>
                <td>{{$kkph->gender}}</td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td>NIP</td>
                <td>{{$kkph->nip}}</td>
              </tr>
              <tr>
                <th scope="row">4</th>
                <td>No. Handphone</td>
                <td>{{$kkph->telepon}}</td>
              </tr>
              <tr>
                <th scope="row">5</th>
                <td>Email</td>
                <td>{{$kkph->email}}</td>
              </tr>
              <tr>
                <th scope="row">6</th>
                <td>Pangkat</td>
                <td>{{$kkph->pangkat}}</td>
              </tr>
              <tr>
                <th scope="row">7</th>
                <td>Uji Kompetensi</td>
                <td>{{$kkph->ujikompetensi}}</td>
              </tr>
              <tr>
                <th scope="row">8</th>
                <td>Diklat</td>
                <td>{{$kkph->diklat}}</td>
              </tr>
              <tr>
                <th scope="row">9</th>
                <td>Pendidikan</td>
                <td>{{$kkph->pendidikan}}</td>
              </tr>
              <tr>
                <th scope="row">10</th>
                <td>Periode</td>
                <td>{{$kkph->tanggalmulai}} sampai {{$kkph->tanggalselesai}}</td>
              </tr>
              <tr>
                <th scope="row">11</th>
                <td>Gambar</td>
                <td>
                    <p><img src="{{ asset( $kkph->gambar ) }}" width="592px" height="391px"></p><br>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>

          <a href="{{url('/viewkepalakph2')}}/{{$kkph->id}}" class="btn btn-sm btn-primary pl-10">EDIT</a>
    </div>
</center><br>

