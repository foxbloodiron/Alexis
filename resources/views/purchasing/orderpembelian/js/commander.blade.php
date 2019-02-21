<script>
  purchase_order = { po_id : null};
  tabel_purchase_order = null;
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
    $('#tgl_awal_history').val(
      moment().subtract(7, 'days').format('DD/MM/YYYY')
    );
    $('#tgl_akhir_history').val(
      moment().format('DD/MM/YYYY')
    );
    $('#tgl_akhir, #tgl_awal').datepicker({
      format : 'dd/mm/yyyy'
    });

    tabel_purchase_order = $("#tabel_purchase_order").DataTable({
      "processing" : true,
      "serverside" : true,
      ajax: {
        "url": "{{ url('purchasing/orderpembelian/find_d_purchase_order') }}",
        
        data: {
          "_token": "{{ csrf_token() }}",
        },
      },
      columns: [
        { data : 'po_tanggal_label' },
    		{ data : 'po_code' },
    		{ data : 'name' },
    		{ data : 's_name' },
        { data : 'po_tanggal_approve_label' },
		{ 
			data : null,
			render : function(res) {
        var classbadge;
        if(res.po_status == 'WT') {
          classbadge = 'badge-info';
        }
        else if(res.po_status == 'AP') {
          classbadge = 'badge-primary';
        }
        else if(res.po_status == 'NAP') {
          classbadge = 'badge-danger';
        }
				var outp = '<span class="badge ' + classbadge + '">' + res.po_status_label + '</span>';
				return outp;
			} 
		},
		{ 
			data : null,
			render : function(res) {
        is_disabled = 'disabled';
        if(res.po_status == 'WT') {
          is_disabled = '';
        }
				var outp = '<button ' + is_disabled + ' class="btn btn-info" title="Approve" data-toggle="modal" data-target="#modal_update_status" onclick="open_form_update_status(this)"><i class="fa fa-check"></i></button>';
				return outp;
			} 
		},
        
        { 
          data : null,
          render : function(res) {
          	is_disabled = 'disabled';
            if(res.po_status == 'WT') {	
            	is_disabled = '';
            }
            var btn = '<div class="btn-group btn-group-sm"><button onclick="open_form_detail(this) "type="button" class="btn btn-info order_detail" title="Detail" data-toggle="modal" data-target="#detail_order"><i class="fa fa-list"></i></button><button type="button" ' + is_disabled + ' class="btn btn-warning order_edit" title="Edit" onclick="open_form_update(this)" data-toggle="modal" data-target="#detail_order_edit"><i class="fa fa-pencil"></i></button><button ' + is_disabled + ' type="button" class="btn btn-danger order_hapus" title="Hapus" onclick="hapus(this)"><i class="fa fa-trash-o"></i></button></div>';

            return btn;
          } 
        }
      ],
      columnDefs : [{
        targets : [5, 6],
        className : 'text-center'
      }]
    });

    tabel_history_purchase_order = $("#tabel_history_purchase_order").DataTable({
      "processing" : true,
      "serverside" : true,
      ajax: {
        "url": "{{ url('purchasing/orderpembelian/find_d_purchase_order') }}",
        
        data: {
          "_token": "{{ csrf_token() }}",
        },
      },
      columns: [
        { data : 'po_tanggal_label' },
    		{ data : 'po_code' },
    		{ data : 'name' },
    		{ data : 's_name' },
        { data : 'po_tanggal_approve_label' },
    		{ 
    			data : null,
    			render : function(res) {
            var classbadge = "badge-primary";
            if( res.po_status_po == 'NA') {
              classbadge = 'badge-danger';
            }
    				var outp = '<span class="badge ' + classbadge + '">' + res.po_status_po_label + '</span>';
    				return outp;
    			} 
    		},
		
      ]
    });
  });
</script>