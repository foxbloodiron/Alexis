<script>
	// Function untuk memperbarui sales plan
	function open_form_update_status(obj) {
		var tr = $(obj).parents('tr');
		var data = tabel_purchase_order.row(tr).data();
		var po_id = data.po_id;
		$('#form_update_status [name="po_id"]').val(po_id);
	}



  function approve_purchase_order() {
    var data = $('#form_update_status').serialize();
    $.ajax({
      url: "{{ url('/purchasing/orderpembelian/approve_d_purchase_order') }}",
      type: 'GET',
      data: data,
      dataType: 'json',
      success: function (response) {
        if(response.status == 'sukses') {
          
          $.toast({  
            heading: 'Sukses',
            text: 'Data berhasil disimpan',
            icon: 'success'
          });

          tabel_purchase_order.ajax.reload();
          setTimeout(function(){
            $('#modal_update_status').modal('hide');
          }, 3000);
        }
        else {
          $.toast({
            heading: 'Error',
            text: 'Terjadi kesalahan',
            bgColor: '#d63031',
            textColor: 'white',
            loaderBg: '#ff7675',
            icon: 'error'
          });          
        }
      }
    });
  }

  function update_purchase_order() {
    var data = $('#form_update_purchase_order').serialize();
    $.ajax({
      url: "{{ url('/purchasing/orderpembelian/update_d_purchase_order') }}",
      type: 'POST',
      data: data,
      dataType: 'json',
      success: function (response) {
        if(response.status == 'sukses') {
          
          $.toast({  
            heading: 'Sukses',
            text: 'Data berhasil disimpan',
            icon: 'success'
          });

          setTimeout(function(){
            $('#detail_order_edit').modal('hide');
          }, 3000);
        }
        else {
          $.toast({
            heading: 'Error',
            text: 'Terjadi kesalahan',
            bgColor: '#d63031',
            textColor: 'white',
            loaderBg: '#ff7675',
            icon: 'error'
          });          
        }
      }
    });
  }


	function open_form_update(obj) {
		var tr = $(obj).parents('tr');
		var data = tabel_purchase_order.row(tr).data();
		var id = data.po_id;
		$('#po_id').val(id);
        var screen = $('#detail_order_edit');
        screen.find('.po_tanggal_label').text( data.po_tanggal_label ); 
		screen.find('.po_code').text( data.po_code ); 
		screen.find('.name').text( data.name ); 
		screen.find('.s_name').text( data.s_name ); 
		screen.find('.po_status_label').text( data.po_status_label ); 
		var status_class = '';
		if(data.po_status == 'WT') {
			status_class = 'badge-primary';
		}
		else if(data.po_status == 'AP') {
			status_class = 'badge-success';
		}
		else if(data.po_status == 'NAP') {
			status_class = 'badge-danger';
		}
		screen.find('.po_status_label').addClass(status_class);
		tabel_detail_edit.clear().draw();
		$.ajax({
	       type: "get",
	       url: '{{ url("/purchasing/orderpembelian/preview_orderpembelian") }}/' + id,
	       success: function(response){
	       		var unit;
	       		if(response.purchase_order_dt.length > 0) {
	       			for(x in response.purchase_order_dt) {
	       				unit = response.purchase_order_dt[x];
	       				i_code = "<input class='form-control text-right form-control-sm' type='hidden' name='podt_item[]' value='" + unit.podt_item + "'>" + unit.i_code;
	       				i_name = unit.i_name;
	       				qty = "<input class='form-control text-right form-control-sm' type='number' name='podt_qty[]' value='" + unit.podt_qty + "'>";
	       				s_name = unit.s_name;
	       				stock = unit.stock;
	       				tabel_detail_edit.row.add([i_code, i_name, qty, s_name, stock])
	       			}

	       			tabel_detail_edit.draw()
	       		}
	       }      
	    })
	}

	function open_form_detail(obj) {
		var tr = $(obj).parents('tr');
		var data = tabel_purchase_order.row(tr).data();
		var id = data.po_id;
		$('#po_id').val(id);
        var screen = $('#detail_order');
        screen.find('.po_tanggal_label').text( data.po_tanggal_label ); 
		screen.find('.po_code').text( data.po_code ); 
		screen.find('.name').text( data.name ); 
		screen.find('.s_name').text( data.s_name ); 
		screen.find('.po_status_label').text( data.po_status_label ); 
		var status_class = '';
		if(data.po_status == 'WT') {
			status_class = 'badge-primary';
		}
		else if(data.po_status == 'AP') {
			status_class = 'badge-success';
		}
		else if(data.po_status == 'NAP') {
			status_class = 'badge-danger';
		}
		screen.find('.po_status_label').addClass(status_class);
		tabel_detail_edit.clear().draw();
		$.ajax({
	       type: "get",
	       url: '{{ url("/purchasing/orderpembelian/preview_orderpembelian") }}/' + id,
	       success: function(response){
	       		var unit;
	       		if(response.purchase_order_dt.length > 0) {
	       			for(x in response.purchase_order_dt) {
	       				unit = response.purchase_order_dt[x];
	       				i_code = "<input class='form-control text-right form-control-sm' type='hidden' name='podt_item[]' value='" + unit.podt_item + "'>" + unit.i_code;
	       				i_name = unit.i_name;
	       				qty = unit.podt_qty;
	       				s_name = unit.s_name;
	       				stock = unit.stock;
	       				tabel_detail.row.add([i_code, i_name, qty, s_name, stock])
	       			}

	       			tabel_detail.draw()
	       		}
	       }      
	    })
	}

	function hapus(obj) {
	  var tr = $(obj).parents('tr');
	  var data = tabel_purchase_order.row(tr).data();
	  var id = data.po_id;
	  // alert(id);
	  $.confirm({
                animation: 'RotateY',
				closeAnimation: 'scale',
				icon: 'fa fa-exclamation-triangle',
			    title: 'Informasi',
				content: 'Apa anda yakin mau menghapus data ini?',
				theme: 'disable',
			    buttons: {
			        info: {
						btnClass: 'btn-blue',
			        	text:'Ya',
			        	action : function(){
							$.ajax({
						       type: "get",
						       url: '{{ url("/purchasing/orderpembelian/delete_d_purchase_order") }}/' + id,
						       success: function(response){
						       	console.log(response);
						            if (response.status =='sukses') {
						              $.toast({  
							            heading: 'Sukses',
							            text: 'Data berhasil disimpan',
							            icon: 'success'
							          });
						              tabel_purchase_order.ajax.reload();
						            }
						            else {

						              toastr.error('Data gagal di simpan.');
						            }
						          }
						    })
				        }
			        },
			        cancel:{
			        	text: 'Tidak',
					    action: function () {
    			            // tutup confirm
    			        }
    			    }
			    }
			});

	}

	// Mencari data
	function cari(){
	  var tgl_awal = $('[name="tgl_awal"]').val();
	  var tgl_akhir = $('[name="tgl_akhir"]').val();
	  var url_target = '{{ url("/purchasing/orderpembelian/find_d_purchase_order/?") }}tgl_awal=' + tgl_awal + '&tgl_akhir=' + tgl_akhir + '&_token={{ csrf_token() }}'; 
	  tablex.ajax.url(url_target).load();
	}


	// mereset data
	function resetData(){  
	  $('[name="tgl_awal"]').val( moment().subtract(7, 'days').format('DD/MM/YYYY') );
	  $('[name="tgl_akhir"]').val( moment().format('DD/MM/YYYY') );
	  var url_target = '{{ url("/purchasing/orderpembelian/find_d_purchase_order/?") }}tgl_awal=' + tgl_awal + '&tgl_akhir=' + tgl_akhir + '&_token={{ csrf_token() }}'; 
	  tablex.ajax.url(url_target).load();
	}
</script>