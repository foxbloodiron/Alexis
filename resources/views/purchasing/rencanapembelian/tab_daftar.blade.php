<div class="tab-pane fade in active show" id="daftar_rencana">
	<div class="card">
        <div class="card-header bordered p-2">
        	<div class="header-block">
                <h3 class="title"> Daftar Rencana Pembelian </h3>
            </div>
            <div class="header-block pull-right">
    			<a class="btn btn-primary" href="{{route('tambah_rencanapembelian')}}"><i class="fa fa-plus"></i>&nbsp;Tambah Data</a>
    		</div>
        </div>
        <div class="card-block">
            <section>
            	
            	<div class="row">

                    <div class="col-md-3 col-sm-12">
                      <label class="font-weight-bold">Tanggal Rencana</label>
                    </div>

                    <div class="col-md-6 col-sm-12">
                      <div class="form-group">
                        <div class="input-group input-group-sm input-daterange">
                          <input type="text" class="form-control" id="tgl_awal" name="">
                          <span class="input-group-addon">-</span>
                          <input type="text" id="tgl_akhir" class="form-control" name="">
                          <div class="input-group-append">
                          	<button class="btn btn-primary" type="button"><i class="fa fa-search"></i></button>
                          	<button class="btn btn-secondary" type="button"><i class="fa fa-refresh"></i></button>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="col-md-3 col-sm-12">
                        <div class="form-group">
                            <select name="pp_status" id="pp_status" class="form-control form-control-sm">
                                <option value="">Tampilkan Data : Semua</option>
                                <option value="wait">Tampilkan Data : Waiting</option>
                                <option value="confirm">Tampilkan Data : Disetujui</option>
                            </select>
                        </div>
                    </div>

            	</div>

            	
                	<div class="table-responsive">
                		
                		<table class="table table-hover table-striped" cellspacing="0" id="tabel_purchase_plan">
                			<thead class="bg-primary">
                				<tr>
                					<th>Tgl Dibuat</th>
                					<th>Kode Rencana</th>
                					<th>Staff</th>
                					<th>Suplier</th>
                					<th>Tgl Disetujui</th>
                                    <th>Status</th>
                					<th>Approve</th>
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