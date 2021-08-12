@include('layouts.header')
</div>
<div class="content-page">
    <div class="container-fluid">
    <div class>
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



    </div>



    </div>

    @include('layouts.footer')

