@include('layouts.headeradmin')
</div>
<div class="content-page" style="background: url('{{ asset('img/backgroundadmin.png') }}');background-size:850px;background-repeat: repeat-y;background-position:center ;">
<div class="container-fluid " style="margin-top: -110px">
<div class="card" style="padding-top:100px;">
<p class="text-center " style="font-size:39px;">Kelola Data Ekologi</p><br>
    @foreach($pe as $pe)
        <table class="table">
            <thead class="bg-success">
                <tr>
                <th scope="col">No</th>
                <th scope="col">Aspek</th>
                <th scope="col">Isi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Jenis Tanah</td>
                    <td> {!! $pe->jenis_tanah !!} </td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Jenis Kayu</td>
                    <td> {!! $pe->jenis_kayu !!} </td>
                </tr>

                <tr>
                    <th scope="row">3</th>
                    <td>Fauna/Satwa</td>
                    <td> {!! $pe->fauna_satwa !!} </td>
                </tr>
                <tr>
                    <th scope="row">4</th>
                    <td>Kelerengan</td>
                    <td> {!! $pe->kelerengan !!} </td>
                </tr>
                <tr>
                    <th scope="row">5</th>
                    <td>DAS</td>
                    <td> {!! $pe->DAS !!} </td>
                </tr>
            </tbody>
        </table>
        @endforeach

    
        <a href="{{url('/viewekologi3')}}/{{$pe->id}}" class="ml-auto">
        <button type="submit" class="btn" style="background-color: #99F07A;">Edit</button>  
        </a>
    </div>
    </div>   
    </div>

    @include('layouts.footer')

