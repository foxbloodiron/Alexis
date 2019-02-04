@extends('main')

@section('content')

<article class="content">

	<div class="title-block text-primary">
	    <h1 class="title"> Pencatatan Hasil Produksi </h1>
	    <p class="title-description">
	    	<i class="fa fa-home"></i>&nbsp;<a href="{{url('/home')}}">Home</a> 
	    	/ <span>Produksi</span> 
	    	/ <span class="text-primary font-weight-bold">Pencatatan Hasil Produksi</span>
	     </p>
	</div>


	<ul class="nav nav-pills">
		<li class="nav-item">
			<a href="" class="nav-link active" data-toggle="tab" data-target="#tab-1">Pencatatan Produksi Dengan Rencana</a>
		</li>
		<li class="nav-item">
			<a href="" class="nav-link" data-toggle="tab" data-target="#tab-2">Pencatatan Produksi Tanpa Rencana</a>
		</li>
		<li class="nav-item">
			<a href="" class="nav-link" data-toggle="tab" data-target="#tab-3">History Produksi</a>
		</li>
	</ul>


	<section class="section">

		<div class="row">

			<div class="col-12">
				
				<div class="tab-content">

					<div class="tab-pane fade in active show" id="tab-1">
						<div class="card">
		                    <div class="card-header bordered p-2">
		                    	<div class="header-block">
			                        <h3 class="title"> Pencatatan Hasil Produksi Dengan Rencana</h3>
			                    </div>
		                    </div>
		                    <div class="card-block">
		                        <section>
		                        	
		                        	<div class="table-responsive">
			                            <table class="table data-table table-hover tabel-striped table-bordered" cellspacing="0">
			                                <thead class="bg-primary">
			                                    <tr>
									                <th>Kode SPK</th>
									                <th>Nama Barang</th>
									                <th>Jumlah Produksi</th>
									                <th>Tanggal Produksi</th>
									                <th>Status</th>
									                <th>Aksi</th>
									            </tr>
			                                </thead>
			                                <tbody>
			                                	<tr>
			                                		<td>SPK/PR/20181115/1</td>
			                                		<td>Paving</td>
			                                		<td>150</td>
			                                		<td>15 Nov 2018</td>
			                                		<td><span class="badge badge-info badge-pill">Menunggu diproses</span></td>
			                                		<td align="center"><a class="btn btn-primary btn-sm" href="{{route('proses_pencatatanhasil')}}">Proses</a></td>
			                                	</tr>

									        </tbody>
			                            </table>
			                        </div>
		                        </section>
		                    </div>
		                </div>

		            </div>

		            <div class="tab-pane fade in" id="tab-2">
						<div class="card">
		                    <div class="card-header bordered p-2">
		                    	<div class="header-block">
			                        <h3 class="title"> Pencatatan Hasil Produksi Tanpa Rencana</h3>
			                    </div>
		                    </div>
		                    <div class="card-block">
		                        <section>
		                        	
		                        	<div class="table-responsive">
			                            <table class="table data-table table-hover tabel-striped table-bordered" cellspacing="0">
			                                <thead class="bg-primary">
			                                    <tr>
									                <th>Kode SPK</th>
									                <th>Nama Item</th>
									                <th>Jumlah Produksi</th>
									                <th>Tanggal Produksi</th>
									                <th>Status</th>
									                <th>Aksi</th>
									            </tr>
			                                </thead>
			                                <tbody>
			                                	<tr>
			                                		<td>SPK/PTR/20181115/1</td>
			                                		<td>Paving</td>
			                                		<td>150</td>
			                                		<td>15 Nov 2018</td>
			                                		<td><span class="badge badge-info badge-pill">Menunggu diproses</span></td>
			                                		<td align="center"><a class="btn btn-primary btn-sm" href="{{route('proses_pencatatanhasil')}}">Proses</a></td>
			                                	</tr>

									        </tbody>
			                            </table>
			                        </div>
		                        </section>
		                    </div>
		                </div>
		            </div>

		            <div class="tab-pane fade in" id="tab-3">
						<div class="card">
		                    <div class="card-header bordered p-2">
		                    	<div class="header-block">
			                        <h3 class="title"> History Pencatatan Hasil Produksi</h3>
			                    </div>
		                    </div>
		                    <div class="card-block">
		                        <section>
                	            	<div class="row">

					                    <div class="col-md-3 col-sm-12">
					                      <label class="font-weight-bold">Tanggal Produksi</label>
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
			                            <table class="table data-table table-hover tabel-striped table-bordered" cellspacing="0">
			                                <thead class="bg-primary">
			                                    <tr>
									                <th>Kode SPK</th>
									                <th>Nama Item</th>
									                <th>Jumlah Produksi</th>
									                <th>Tanggal Produksi</th>
									                <th>Status</th>
									            </tr>
			                                </thead>
			                                <tbody>
			                                	<tr>
			                                		<td>SPK/PR/20181115/2</td>
			                                		<td>Paving Abu</td>
			                                		<td>100</td>
			                                		<td>13 Nov 2018</td>
			                                		<td><span class="badge badge-success badge-pill">Sudah diproses</span></td>
			                                		
			                                	</tr>
			                                	<tr>
			                                		<td>SPK/PTR/20181115/2</td>
			                                		<td>Paving Abu</td>
			                                		<td>100</td>
			                                		<td>13 Nov 2018</td>
			                                		<td><span class="badge badge-success badge-pill">Sudah diproses</span></td>
			                                		
			                                	</tr>
									        </tbody>
			                            </table>
			                        </div>
		                        </section>
		                    </div>
		                </div>		            	
		            </div>

		        </div>

			</div>

		</div>

	</section>

</article>

@endsection