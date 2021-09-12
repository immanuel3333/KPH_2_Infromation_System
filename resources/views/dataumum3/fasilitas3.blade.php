<div class="container" style="padding-bottom:50px;">
    <table class="table table-striped table-hover" id="fasilitas-table">
        <thead>
            <tr>

                <th>Aspek</th>
                <th>Jumlah</th>
                <th>Kondisi</th>
                <th>Status</th>
                <th>Sumber Dana</th>
                <th>Action</th>

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
		$('#fasilitas-table').DataTable({
            "ajax": {
            "url": "{{url('/viewfasilitas3')}}",
            "dataSrc": ""
        },
            dom: 'Bfrtip',
            buttons: [
                {
                    text: 'Create',
                    action: function ( e, dt, node, config ) {
                        window.location = "{{url('/inputfasilitas3')}}";
                    }
                }
            ],
			columns: [

				{ data: 'aspek', name: 'aspek', orderable: false },
				{ data: 'jumlah', name: 'jumlah', orderable: true },
				{ data: 'kondisi', name: 'kondisi', orderable: false },
				{ data: 'status', name: 'status', orderable: false },
                { data: 'sumberdana', name: 'sumberdana', orderable: false },
                { data: 'action', name: 'action', orderable: false }
			]
		});
	});
</script>




