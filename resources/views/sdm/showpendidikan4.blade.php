</div>
<div>
        <table class="table">
            <thead class="bg-success">
                <tr>
                <th scope="col">No</th>
                <th scope="col">Aspek</th>
                <th scope="col">Isi</th>
                </tr>
            </thead>
            @foreach($pe as $pe)
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Dibawah Sekolah Menengah Atas (SMA)</td>
                    <td> {!! $pe->dibawah_sma !!} </td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Sekolah Menengah Atas (SMA)</td>
                    <td> {!! $pe->sma !!} </td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Diploma (D3)</td>
                    <td> {!! $pe->d3 !!} </td>
                </tr>

                <tr>
                    <th scope="row">4</th>
                    <td>Sarjana (S1)</td>
                    <td> {!! $pe->s1 !!} </td>
                </tr>
                <tr>
                    <th scope="row">5</th>
                    <td>Master (S2)</td>
                    <td> {!! $pe->s2 !!} </td>
                </tr>
                <tr>
                    <th scope="row">6</th>
                    <td>Doktor (S3)</td>
                    <td> {!! $pe->s3 !!} </td>
                </tr>
                <tr>
                    <th scope="row">7</th>
                    <td>Total</td>
                    <td> {!! $pe->total !!} </td>
                </tr>
                <tr>
                    <th scope="row">8</th>
                    <td>Pelatihan Management</td>
                    <td> {!! $pe->management !!} </td>
                </tr>
                <tr>
                    <th scope="row">9</th>
                    <td>Pelatihan Teknis	</td>
                    <td> {!! $pe->teknis !!} </td>
                </tr>
                <tr>
                    <th scope="row">10</th>
                    <td>Pelatihan Lainnya</td>
                    <td> {!! $pe->lainnya !!} </td>
                </tr>
            </tbody>
        </table>
        @endforeach


        <a href="{{url('/viewpendidikan4')}}/{{$pe->id}}" class="ml-auto">
        <button type="submit" class="btn" style="background-color: #99F07A;">Edit</button>
    </div>


    </div>



