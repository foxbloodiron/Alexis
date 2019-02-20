<script>
  $(document).ready(function(){
    table_purchase_order_dt = $('#table_purchase_order_dt').DataTable({
      "createdRow": function( row, data, dataIndex ) {
        }
    });

    $('#po_supplier').select2({
      placeholder: "Pilih Supplier",
      ajax: {
        url: '{{ url("/purchasing/orderpembelian/find_m_supplier") }}',
        dataType: 'json',
        data: function (params) {
          return {
              keyword: $.trim(params.term)
          }
        },
        processResults: function (res) {
            for(x in res.data) {
              res.data[x].id = res.data[x].s_id; 
              res.data[x].text = res.data[x].s_name; 
            }
            return {
                results: res.data
            };
        }
     }, 
    });

    $('#po_purchase_plan').select2({
      placeholder: "Pilih Rencana Pembelian",
      ajax: {
        url: '{{ url("/purchasing/rencanapembelian/find_d_purchase_plan") }}',
        dataType: 'json',
        data: function (params) {
          return {
              keyword: $.trim(params.term)
          }
        },
        processResults: function (res) {
            for(x in res.data) {
              res.data[x].id = res.data[x].pp_id; 
              res.data[x].text = res.data[x].pp_code; 
            }
            return {
                results: res.data
            };
        }
     }, 
    });
 
    $('#po_purchase_plan').change(function(){
      $.ajax({
        url: "{{ url('/purchasing/orderpembelian/insert_d_purchase_order') }}",
        type: 'POST',
        data: data,
        dataType: 'json',
        success: function (response) {
          var d_purchase_order_dt = response.purchase_plan_dt;
          var unit;
          if(d_purchase_order_dt.length > 0) {
            for(x in d_purchase_order_dt) {
              unit = d_purchase_order_dt[x];
              var podt_item = "<input name='podt_item[]' value='" + unit.i_id + "' type='hidden'>" + unit.i_name;
              var podt_qty = "<input name='podt_qty[]' value='" + unit.ppdt_qty + "' type='number' class='form-control'>" ;
              var podt_satuan = "<input name='podt_satuan[]' value='" + unit.ppdt_satuan + "' type='hidden' class='form-control'>" + unit.ppdt_satuan;
              var podt_prev_price = "<input name='podt_prev_price[]' value='" + unit.ppdt_prev_price + "' type='hidden'>";
              var podt_price = "<input name='podt_price[]' value='" + unit.ppdt_prev_price + "' type='text'>";
              var stock = unit.stock;
              var harga_total = unit.i_buy * $('#qty').val();
              harga_total = 'Rp ' + accounting.formatMoney(harga_total,"",0,'.',',') + ',00';
              var aksi = '<button type="button" class="btn btn-danger btn-hapus"><i class="glyphicon glyphicon-trash"></i></button>';

              
              table_purchase_order_dt.row.add([
                podt_item, podt_qty, podt_satuan, podt_prev_price, podt_price, harga_total, stock, aksi
              ]);
            }

            table_purchase_order_dt.draw();
          }
        }
      });
    });
  });
</script>