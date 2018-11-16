<!-- Modal -->
<div id="detail" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header bg-gradient-info">
        <h4 class="modal-title">Detail Opaname Bahan Baku</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
                              
        <fieldset class="mb-3">
          <div class="row">

            <div class="col-md-3 col-sm-6 col-xs-12">
              <label>Pemilik Item</label>
            </div>

            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="form-group">
                <select class="form-control form-control-sm select2">
                  <option value="">--Pilih--</option>
                </select>
              </div>
            </div>

            <div class="col-md-3 col-sm-6 col-xs-12">
              <label>Posisi Item</label>
            </div>

            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="form-group">
                <select class="form-control form-control-sm select2">
                  <option value="">--Pilih--</option>
                </select>
              </div>
            </div>

            <div class="col-md-3 col-sm-6 col-xs-12">
              <label>Tanggal Opname</label>
            </div>

            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="form-group">
                <input type="text" class="form-control form-control-sm datepicker" value="{{date('d-m-Y')}}" name="">
              </div>
            </div>

            <div class="col-md-3 col-sm-6 col-xs-12">
              <label>Nama Staff</label>
            </div>

            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="form-group">
                <input type="text" class="form-control form-control-sm" readonly="" name="">
              </div>
            </div>

          </div>
        </fieldset>


        <div class="table-responsive">
            <table class="table data-table table-hover" cellspacing="0">
                <thead class="bg-primary">
                    <tr>
                        <th>Kode | Item</th>
                        <th>Qty Sistem</th>
                        <th>Satuan</th>
                        <th>Qty Real</th>
                        <th>Opname</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>

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