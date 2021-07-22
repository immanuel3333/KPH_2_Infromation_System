@include('layouts.headeradmin')
<div class="container" style="padding-bottom:50px;">
    <table class="table table-striped table-hover" id="nkk-table">
        <thead>
            <tr>
                <th>Nama Kelompok</th>
                <th>Nomor</th>
                <th>Tanggal</th>
                <th>Aksi</th>

            </tr>
         </thead>
    </table>
</div>

<script src="{{asset('js/jquery-3.5.1.min.js')}}" ></script>
<script src="//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js" ></script>
<script src="https://cdn.datatables.net/buttons/1.6.5/js/dataTables.buttons.min.js" defer ></script>
<!-- defer itu untuk menjalankan secara asinkronus -->
<script>
$(document).ready(function(){
		$('#nkk-table').DataTable({
            "ajax": {
            "url": "{{url('/nkk')}}",
            "dataSrc": ""    
        },
            dom: 'Bfrtip',
            buttons: [
                {
                    text: 'Create',
                    action: function ( e, dt, node, config ) {
                        window.location = "{{url('/inputnkk')}}";
                    }
                }
            ],
			columns: [
				{ data: 'nama_kelompok', name: 'nama_kelompok' },
				{ data: 'nomor_nkk', name: 'nomor_nkk', orderable: false },
				{ data: 'created_at', name: 'created_at', orderable: false },
                { data: 'action', name: 'action', orderable: false }
			]
		});
	});
</script>
@include('layouts.footeradmin')
    



