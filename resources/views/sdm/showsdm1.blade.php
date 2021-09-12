</div>
<div class>
        <table class="table">
            <thead class="bg-success">
                <tr>
                <th scope="col">No</th>
                <th scope="col">Aspek</th>
                <th scope="col">Isi</th>
                </tr>
            </thead>
            <tbody>
            @foreach($pe as $pe)
                <tr>
                    <th scope="row">1</th>
                    <td>KKPH</td>
                    <td> {!! $pe->kkph !!} </td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Kepala Seksi</td>
                    <td> {!! $pe->kepala_seksi !!} </td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Tata Usaha</td>
                    <td> {!! $pe->tata_usaha !!} </td>
                </tr>

                <tr>
                    <th scope="row">4</th>
                    <td>Kepala Resort</td>
                    <td> {!! $pe->kepala_resort !!} </td>
                </tr>
                <tr>
                    <th scope="row">5</th>
                    <td>Staf PNS</td>
                    <td> {!! $pe->staf_pns !!} </td>
                </tr>
                <tr>
                    <th scope="row">6</th>
                    <td>Staf Honorer</td>
                    <td> {!! $pe->staf_honorer !!} </td>
                </tr>
                <tr>
                    <th scope="row">7</th>
                    <td>Tenaga Kontrak</td>
                    <td> {!! $pe->tenaga_kontrak !!} </td>
                </tr>
                <tr>
                    <th scope="row">8</th>
                    <td>Tenaga Brigdalkarhutla(PNS)</td>
                    <td> {!! $pe->tenaga_brigdalkarhutlapns !!} </td>
                </tr>
                <tr>
                    <th scope="row">9</th>
                    <td>Tenaga Brigdalkarhutla(non PNS)</td>
                    <td> {!! $pe->tenaga_brigdalkarhutlanonpns !!} </td>
                </tr>
                <tr>
                    <th scope="row">10</th>
                    <td>PAMHUT</td>
                    <td> {!! $pe->pamhut !!} </td>
                </tr>
                <tr>
                    <th scope="row">11</th>
                    <td>SDM Pemda</td>
                    <td> {!! $pe->sdm_pemda !!} </td>
                </tr>
                <tr>
                    <th scope="row">12</th>
                    <td>Bakti Rimbawan Sebelum Tahun 2015</td>
                    <td> {!! $pe->bukti_rimbawa_sebelum_2015 !!} </td>
                </tr>
                <tr>
                    <th scope="row">13</th>
                    <td>Bakti Rimbawan 2015</td>
                    <td> {!! $pe->bakti_rimbawa_2015 !!} </td>
                </tr>
                <tr>
                    <th scope="row">14</th>
                    <td>Bakti Rimbawan 2016</td>
                    <td> {!! $pe->bakti_rimbawa_2016 !!} </td>
                </tr>
                <tr>
                    <th scope="row">15</th>
                    <td>Bakti Rimbawan 2017</td>
                    <td> {!! $pe->bakti_rimbawa_2017 !!} </td>
                </tr>
                <tr>
                    <th scope="row">16</th>
                    <td>Bakti Rimbawan 2018</td>
                    <td> {!! $pe->bakti_rimbawa_2018 !!} </td>
                </tr>
                <tr>
                    <th scope="row">17</th>
                    <td>Total Bakti Rimbawan</td>
                    <td> {!! $pe->total_bakti_rimbawan !!} </td>
                </tr>
            </tbody>
        </table>
        @endforeach


        <a href="{{url('/viewsdm1')}}/{{$pe->id}}" class="ml-auto">
        <button type="submit" class="btn" style="background-color: #99F07A;">Edit</button>
    </div>


    </div>



