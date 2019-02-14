<!-- Modal -->
<div id="list_barang" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">List Barang Transaksi</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">

        <div class="table-responsive">
          <table class="table table-bordered table-striped table-hover" id="table_barang" cellspacing="0">
            <thead class="bg-primary">
              <tr>
                <th>Barang</th>
                <th width="1%">Qty</th>
                <th>Harga</th>
                <th>Disc Persen</th>
                <th>Disc Nilai</th>
                <th>Disc Total</th>
                <th>Total</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Paving 8T</td>
                <td>200</td>                
                <td>
                  <div class="row">
                    <div class="col-5">Rp. </div><div class="col-7 text-right">10.000,00</div>
                  </div>
                </td>
                <td>25%</td>
                <td>
                  <div class="row">
                    <div class="col-5">Rp. </div><div class="col-7 text-right">0,00</div>
                  </div>
                </td>
                <td>
                  <div class="row">
                    <div class="col-5">Rp. </div><div class="col-7 text-right">7.500,00</div>
                  </div>
                </td>
                <td>
                  <div class="row">
                    <div class="col-5">Rp. </div><div class="col-7 text-right">1.000.000,00</div>
                  </div>
                </td>
              </tr>
            </tbody>
          </table>
        </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>