<div class="tab-pane fade in active show" id="return_pembelian_tab">
	<div class="card">
        <div class="card-header bordered p-2">
        	<div class="header-block">
                <h3 class="title"> Return Pembelian </h3>
            </div>
            <div class="header-block pull-right">
            	
    			<a class="btn btn-primary" href="{{route('tambah_returnpembelian')}}"><i class="fa fa-plus"></i>&nbsp;Tambah Data</a>
            </div>
        </div>
        <div class="card-block">
            <section>

            	<div class="row">

                    <div class="col-md-3 col-sm-12">
                      <label class="font-weight-bold">Tanggal Return</label>
                    </div>

                    <div class="col-md-6 col-sm-12">
                      <div class="form-group">
                        <div class="input-group input-group-sm input-daterange">
                          <input type="text" class="form-control" name="">
                          <span class="input-group-addon">-</span>
                          <input type="text" class="form-control" name="">
                          <div class="input-group-append">
                          	<button class="btn btn-primary" type="button"><i class="fa fa-search"></i></button>
                          	<button class="btn btn-secondary" type="button"><i class="fa fa-refresh"></i></button>
                          </div>
                        </div>
                      </div>
                    </div>
                	
            	
            	</div>

            	

                	<div class="table-responsive">
                        <table class="table data-table table-hover" cellspacing="0">
                            <thead class="bg-primary">
                                <tr>
					                <th>No</th>
					                <th>Tgl Return</th>
					                <th>ID Return</th>
					                <th>Staff</th>
					                <th>Metode</th>
					                <th>Suplier</th>
					                <th>Total Return</th>
					                <th>Status</th>
					                <th>Aksi</th>
					            </tr>
                            </thead>
                            <tbody>

					        </tbody>
                        </table>
                    </div>

                
            </section>
        </div>
    </div>
</div>