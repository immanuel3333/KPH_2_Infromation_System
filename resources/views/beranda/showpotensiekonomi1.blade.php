
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
                    <td>Potensi Kayu</td>
                    <td> {!! $pe->kayu !!} </td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Potensi Non-Kayu</td>
                    <td> {!! $pe->nonkayu !!} </td>
                </tr>

                <tr>
                    <th scope="row">3</th>
                    <td>Potensi Jasa Lingkungan</td>
                    <td> {!! $pe->jasalingkungan !!} </td>
                </tr>
                <tr>
                    <th scope="row">4</th>
                    <td>Rencana Bisnis</td>
                    <td> {!! $pe->bisnis !!} </td>
                </tr>
                <tr>
                    <th scope="row">5</th>
                    <td>Dukungan Donor</td>
                    <td> {!! $pe->donor !!} </td>
                </tr>
            </tbody>
        </table>
        @endforeach



    </div>


    </div>
