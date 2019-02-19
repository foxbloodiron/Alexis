<script>
  purchase_plan = { pp_id : null};
  tabel_purchase_plan = null;
  $(document).ready(function(){
  	tabel_detail_edit = $('#tabel_detail_edit').DataTable({
  		'columnDefs' : [{
  			'targets' : 4,
  			'className' : 'text-right'
  		}]
  	});
  	tabel_detail = $('#tabel_detail').DataTable({
  		'columnDefs' : [
	  		{
	  			'targets' : [2, 4],
	  			'className' : 'text-right'
	  		},
  		]
  	});

    $('#tgl_awal').val(
      moment().subtract(7, 'days').format('DD/MM/YYYY')
    );
    $('#tgl_akhir').val(
      moment().format('DD/MM/YYYY')
    );
    $('#tgl_akhir, #tgl_awal').datepicker({
      format : 'dd/mm/yyyy'
    });

    tabel_purchase_plan = $("#tabel_purchase_plan").DataTable({
      "processing" : true,
      "serverside" : true,
      ajax: {
        "url": "{{ url('purchasing/rencanapembelian/find_d_purchase_plan') }}",
        
        data: {
          "_token": "{{ csrf_token() }}",
        },
      },
      columns: [
        { data : 'pp_tanggal_label' },
    		{ data : 'pp_code' },
    		{ data : 'name' },
    		{ data : 's_name' },
        { data : 'pp_tanggal_approve_label' },
		{ 
			data : null,
			render : function(res) {
				var outp = '<span class="badge badge-info ">' + res.pp_status_label + '</span>';
				return outp;
			} 
		},
		{ 
			data : null,
			render : function(res) {
				var outp = '<button class="btn btn-info" title="Approve"><i class="fa fa-check"></i></button>';
				return outp;
			} 
		},
        
        { 
          data : null,
          render : function(res) {
          	is_disabled = 'disabled';
            if(res.pp_status == 'WT') {	
            	is_disabled = '';
            }
            var btn = '<div class="btn-group btn-group-sm"><button onclick="open_form_detail(this) "type="button" class="btn btn-info rencana_detail" title="Detail" data-toggle="modal" data-target="#detail_rencana"><i class="fa fa-list"></i></button><button type="button" ' + is_disabled + ' class="btn btn-warning rencana_edit" title="Edit" onclick="open_form_update(this)" data-toggle="modal" data-target="#detail_rencana_edit"><i class="fa fa-pencil"></i></button><button ' + is_disabled + ' type="button" class="btn btn-danger rencana_hapus" title="Hapus" onclick="hapus(this)"><i class="fa fa-trash-o"></i></button></div>';

            return btn;
          } 
        }
      ],
      columnDefs : [{
        targets : [5, 6],
        className : 'text-center'
      }]
    });
  });
</script>