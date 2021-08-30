
<center>
<h1 class="text-center">Kelola Lembaga</h1>
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
                @foreach ($lm as $lm)

              <tr>
                <th scope="row">1</th>
                <td>Unit</td>
                <td>{{$lm->unit}}</td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>Provinsi</td>
                <td>{{$lm->provinsi}}</td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td>Jenis Kelembagaan</td>
                <td>{{$lm->jenislembaga}}</td>
              </tr>
              <tr>
                <th scope="row">4</th>
                <td>Kepala Seksi</td>
                <td>{{$lm->kepseksi}}</td>
              </tr>
              <tr>
                <th scope="row">5</th>
                <td>Petugas Kph</td>
                <td>{{$lm->petugaskph}}</td>
              </tr>
              <tr>
                <th scope="row">6</th>
                <td>No Handphone Petugas</td>
                <td>{{$lm->teleponpetugas}}</td>
              </tr>
              <tr>
                <th scope="row">7</th>
                <td>Email Petugas</td>
                <td>{{$lm->emailpetugas}}</td>
              </tr>
              <tr>
                <th scope="row">8</th>
                <td>SK Lembaga</td>
                <td>{{$lm->sklembaga}}</td>
              </tr>
              <tr>
                <th scope="row">9</th>
                <td>Tanggal SK Lembaga</td>
                <td>{{$lm->tglsklembaga}}</td>
              </tr>
              <tr>
                <th scope="row">10</th>
                <td>Dokumen SK Lembaga</td>
                <td>{{$lm->doksklembaga}}</td>
              </tr>
              <tr>
                <th scope="row">11</th>
                <td>Status Blud</td>
                <td>{{$lm->statblud}}</td>
              </tr>
              <tr>
                <th scope="row">12</th>
                <td>SK Blud</td>
                <td>{{$lm->skblud}}</td>
              </tr>
              <tr>
                <th scope="row">13</th>
                <td>Dokumen SK Blud</td>
                <td>{{$lm->dokskblud}}</td>
              </tr>
              @endforeach
            </tbody>
          </table>

          <a href="{{url('/viewlembaga4')}}/{{$lm->id}}" class="btn btn-sm btn-primary pl-10">EDIT</a>
    </div>
</center><br>

