<script>
  function count_grandtotal() {
    var qty = $('[name="podt_qty[]"]');
      var price = $('[name="podt_price[]"]');
      var item_qty, item_price, total_gross = 0, total_net = 0;

      for(x = 0;x < qty.length;x++) {
        item_qty = parseInt( $( qty[x] ).val() );
        item_qty = item_qty != '' ? item_qty : 0;
        item_price = parseInt( $( price[x] ).val() );
        total_gross += ( item_qty * item_price );
      }

      var disc_value = $('#po_disc_value').val();
      var disc_percent = $('#po_disc_percent').val();
      var tax_percent = $('#po_tax_percent').val();
      disc_value = disc_value.preg_replace(/\D/g, '', disc_value);
      disc_value = disc_value != '' ? parseInt(disc_value) : 0;
      disc_percent = disc_percent != '' ? parseInt(disc_percent) : 0;
      disc_percent = disc_percent / 100;
      tax_percent = tax_percent != '' ? parseInt(tax_percent) : 0;
      tax_percent = tax_percent / 100;

      total_net = ( total_gross - disc_value ) - ( (total_gross - disc_value) / disc_percent ) + ( (total_gross - disc_value) / disc_percent * tax_percent);  

      $('#po_total_gross').val(
        'Rp. ' + accounting.formatMoney(total_gross,"",0,'.',',')
      );
      $('#po_total_net').val(
        'Rp. ' + accounting.formatMoney(total_net,"",0,'.',',')
      );
  }

	// Function untuk meng-insert sales plan
  function insert_purchase_order() {
    var data = $('#form_purchase_order').serialize();
    $.ajax({
      url: "{{ url('/purchasing/orderpembelian/insert_d_purchase_order') }}",
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
            location.reload();
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

  
  

  // Function untuk menghitung grand total ketika menambahkan atau mengurangi item
  function append_purchase_order_dt() {
      // Validasi
      var last_item = $('[name="podt_item[]"]:last'); 
      var last_qty = $('[name="podt_qty[]"]:last'); 
      if(last_item.val() == '' || last_item.val() == null) {
        $.toast({
          heading: 'Error',
          text: 'Nama item harus diisi',
          bgColor: '#d63031',
          textColor: 'white',
          loaderBg: '#ff7675',
          icon: 'error'
        });
      }
      else if(last_qty.val() == '' ||last_qty.val() == null || last_qty.val() == 0){
        $.toast({
          heading: 'Error',
          text: 'Jumlah item tidak boleh kosong',
          bgColor: '#d63031',
          textColor: 'white',
          loaderBg: '#ff7675',
          icon: 'error'
        })

      }
      else {

        var podt_item = '<select class="form-control form-control-sm" name="podt_item[]"></select>';
        var podt_qty = '<input type="number" class="text-right form-control form-control-sm" name="podt_qty[]">';
        var podt_satuan = '<select class="form-control form-control-sm" name="podt_satuan[]"></select>';
        var podt_prev_price = '<input type="text" class="form-control form-control-sm text-right" name="podt_prev_price[]" readonly>';
        var stock = '<input type="text" class="text-right form-control form-control-sm" name="stock[]" readonly>';
        var btn = '<div class="btn-group"><button title="Tambah Item" class="btn btn-primary btn-tambah" onclick="append_purchase_order_dt()" type="button"><i class="fa fa-plus"></i></button><button class="btn btn-danger" onclick="remove_purchase_order_dt(this)" type="button" title="Hapus Item"><i class="fa fa-trash-o"></i></button></div>';

        table_purchase_order_dt.row.add([
          podt_item, podt_qty, podt_satuan, podt_prev_price, stock, btn
        ]).draw();
      }
  }

  function remove_purchase_order_dt(obj) {
    var tr = $(obj).parents('tr');
    table_purchase_order_dt.row(tr).remove().draw();
  }
</script>