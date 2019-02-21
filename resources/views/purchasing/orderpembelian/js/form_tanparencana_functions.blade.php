<script>
  function append_item(){
        
        var m_item = $('#i_name').select2('data');
        var is_exists = $("[name='podt_item[]'][value='" + m_item.i_id + "']");
        if(is_exists.length == 0) {
          var podt_item = "<input name='podt_item[]' value='" + m_item.i_id + "' type='hidden'>" + m_item.i_name;
          var qty = $('#qty').val();
          var podt_qty = "<input name='podt_qty[]' value='" + qty + "' type='number' class='form-control'>" ;
          var podt_price = "<input name='podt_price[]' value='" + m_item.i_buy + "' type='hidden'>" + m_item.i_buy_label;
          var harga_total = m_item.i_buy * $('#qty').val();
          harga_total = 'Rp. ' + accounting.formatMoney(harga_total,"",0,'.',',') + ',00';
          var aksi = '<button type="button" class="btn btn-danger btn-hapus"><i class="glyphicon glyphicon-trash"></i></button>';

          
          table_purchase_plan_dt.row.add([
            podt_item, podt_qty, podt_price, harga_total, aksi
          ]).draw();
        }
        else {
          var tr = is_exists.parents('tr');
          var qty = $('#qty').val()
          var unit_qty = qty != '' ? parseInt( qty ) : 0;
          var new_qty = parseInt( $('#qty').val() );
          var old_qty = tr.find('[name="podt_qty[]"]').val();
          old_qty = parseInt(old_qty)
          new_qty = new_qty + old_qty;
          tr.find('[name="podt_qty[]"]').val(new_qty)
          var unit_price = parseInt(
            tr.find('[name="podt_price[]"]').val()
          );
          var harga_total =  unit_price * new_qty;
          harga_total = 'Rp. ' + accounting.formatMoney(harga_total,"",0,'.',',');
          tr.children('td:eq(3)').text(harga_total);
          count_grandtotal();
        }

      
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