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
                @foreach ($idn as $idn)

              <tr>
                <th scope="row">1</th>
                <td>Nama KPH</td>
                <td>{{$idn->nama}}</td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>Unit KPH</td>
                <td>{{$idn->unit}}</td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td>Kategori</td>
                <td>{{$idn->kategori}}</td>
              </tr>
              <tr>
                <th scope="row">4</th>
                <td>Tahun Realisasi Fasilitasi</td>
                <td>{{$idn->tahun}}</td>
              </tr>
              <tr>
                <th scope="row">5</th>
                <td>Provinsi</td>
                <td>{{$idn->provinsi}}</td>
              </tr>
              <tr>
                <th scope="row">6</th>
                <td>Nama Panggil</td>
                <td>{{$idn->nickname}}</td>
              </tr>
              <tr>
                <th scope="row">7</th>
                <td>KPH Alias</td>
                <td>{{$idn->alias}}</td>
              </tr>
              <tr>
                <th scope="row">8</th>
                <td>Organisasi Pasca UU 23 tahun 2014</td>
                <td>{{$idn->organisasi}}</td>
              </tr>
              <tr>
                <th scope="row">9</th>
                <td>Jenis KPH</td>
                <td>{{$idn->jeniskph}}</td>
              </tr>
              <tr>
                <th scope="row">10</th>
                <td>Alamat Kantor</td>
                <td>{{$idn->alamat}}</td>
              </tr>
              <tr>
                <th scope="row">11</th>
                <td>Aksesibilitas</td>
                <td>{{$idn->aksesibilitas}}</td>
              </tr>
              <tr>
                <th scope="row">12</th>
                <td>Email</td>
                <td>{{$idn->email}}</td>
              </tr>
              <tr>
                <th scope="row">13</th>
                <td>Telepon</td>
                <td>{{$idn->telepon}}</td>
              </tr>
              <tr>
                <th scope="row">14</th>
                <td>Longitude</td>
                <td>{{$idn->longitude}}</td>
              </tr>
              <tr>
                <th scope="row">15</th>
                <td>Latitude</td>
                <td>{{$idn->longitude}}</td>
              </tr>
              @endforeach
            </tbody>
          </table>
          <a href="{{url('/viewidentitas')}}/{{$idn->id}}" class="btn btn-sm btn-primary pl-10">EDIT</a>
    </div>
</center><br>

