@include('layouts.headeradmin')

<div class="container" style="padding-bottom:50px;">
    <table class="table table-striped table-hover" id="jasalingkungan-table">
        <thead>
            <tr>
                <th>Provinsi</th>
                <th>Jenis Jasa Lingkungan</th>
                <th>Satuan</th>
                <th>Keunggulan</th>
                <th>Lokasi</th>
                <th>Pengembangan</th>
                <th>Tahapan</th>
                <th>Periode</th>
                <th>Hasil</th>

            </tr>
         </thead>
    </table>
</div>

<script src="{{asset('js/jquery-3.5.1.min.js')}}" ></script>
<script src="//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js" ></script>
<script src="https://cdn.datatables.net/buttons/1.6.5/js/dataTables.buttons.min.js" ></script>
<script>
    $(document).ready(function(){
		$('#jasalingkungan-table').DataTable({
            "ajax": {
            "url": "{{url('/view5')}}",
            "dataSrc": ""    
        },
            dom: 'Bfrtip',
            buttons: [
                {
                    text: 'Create',
                    action: function ( e, dt, node, config ) {
                        window.location = "{{url('/create2')}}";
                    }
                }
            ],
			columns: [
				{ data: 'provinsi', name: 'provinsi' },
				{ data: 'jenis_jasa_lingkungan', name: 'jenis_jasa_lingkungan', orderable: false },
				{ data: 'satuan', name: 'satuan', orderable: false },
				{ data: 'keunggulan', name: 'keunggulan', orderable: false },
				{ data: 'lokasi', name: 'lokasi', orderable: false },
                { data: 'pengembangan', name: 'pengembangan', orderable: false },
                { data: 'tahapan', name: 'tahapan', orderable: false },
                { data: 'periode', name: 'periode', orderable: false },
                { data: 'hasil', name: 'hasil', orderable: false }
			]
		});
	});
</script>
@include('layouts.footer')



