<script>
  $(document).ready(function(){
    var addr_url = '{{ url("master/produk/find_m_item") }}';
  addr_url+= '?i_type=BT';
  $("#i_name").select2({
          placeholder: "Pilih Barang",
          ajax: {
            url: addr_url,
            dataType: 'json',
            data: function (params) {
              var i_supplier = $('#it_supplier').val();
              return {
                  keyword: $.trim(params)
              };
            },
            results: function (res) {
              
              var unit;
              if(res.data.length > 0) {
                for(x = 0;x < res.data.length;x++) {
                  
                res.data[x]['id'] = res.data[x].i_id;
                res.data[x]['text'] = res.data[x].i_name;
              

                  
                }
              }

                return {
                    results: res.data
                };
            },
            cache: true
          }, 
        });
  $("#i_name").on('change', function(e){
    var data = $(this).select2('data');
    $('#stock').val( data.stock );
    $('#qty').focus();
    $(this).val('');
  });

  $('#qty').keypress(function(e){
    if( e.keyCode == 13 || e.which == 13) {
      e.preventDefault();
      if( parseInt($(this).val()) == 0 || $(this).val() == '' ) {

        iziToast.error({
                      position: "center",
                      title: '', 
                      timeout: 1000,
                      message: 'Qty tidak boleh kosong'
              });
      }
      else {
        
        append_item();
        // Mengosongkan qty dan barang
        $(this).val('');
        $("#i_name").select2('open');
      }
    }
  });

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
  });
</script>