@extends('main')

@section('content')

<article class="content">

	<div class="title-block text-primary">
	    <h1 class="title"> Point of Sales </h1>
	    <p class="title-description">
	    	<i class="fa fa-home"></i>&nbsp;<a href="{{url('/home')}}">Home</a> 
	    	/ <span>Penjualan</span> 
	    	/ <span class="text-primary font-weight-bold">Point of Sales</span>
	     </p>
	</div>

	<section class="section">

		<div class="row">

			<div class="col-12">
				
				<div class="card">
                    <div class="card-block">
                        <div class="card-title-block">
                            <h3 class="title"> Point of Sales </h3>
                        </div>
                        <section>
                        	
                        	<fieldset class="mb-3">
	                        	<div class="row">

	                        		<div class="col-md-9 col-sm-12">
	                        			<label>Nama Pelanggan</label>
	                        			<div class="form-group">
	                        				<div class="input-group">
		                        				<select class="form-control form-control-sm select2">
		                        					<option value="">--Pilih--</option>
		                        				</select>
		                        				<div class="input-group-append">
		                        					<button class="btn btn-primary btn-sm" type="button"><i class="fa fa-plus"></i></button>
		                        				</div>
		                        			</div>
	                        			</div>
	                        		</div>

	                        		<div class="col-md-9 col-sm-12">
	                        			<label>Alamat Pelanggan</label>
	                        			<div class="form-group">
	                        				<input type="text" class="form-control-sm form-control" readonly="" name="">
	                        			</div>
	                        		</div>

	                        		<div class="col-md-3 col-sm-12">
	                        			<label>Tanggal Faktur</label>
	                        			<div class="form-group">
	                        				<input type="text" readonly="" class="form-control form-control-sm" value="{{date('d-m-Y')}}" name="">
	                        			</div>
	                        		</div>

	                        		<div class="col-md-3 offset-md-9 col-sm-12">
	                        			<label>Jatuh Tempo</label>
	                        			<div class="form-group">
	                        				<input type="text" class="form-control form-control-sm datepicker" name="">
	                        			</div>
	                        		</div>
	                        	</div>
	                        </fieldset>

	                        <fieldset class="mb-3">
	                        	<div class="row">

	                        		<div class="col-md-6 col-sm-12">
	                        			<label>Pilih Barang</label>
	                        			<div class="form-group">
	                        				<select class="select2 form-control-sm form-control">
	                        					<option value="">--Pilih--</option>
	                        				</select>
	                        			</div>
	                        		</div>

	                        		<div class="col-md-3 col-sm-12">
	                        			<label>Qty</label>
	                        			<div class="form-group">
	                        				<div class="input-group">
		                        				<input type="number" min="0" class="form-control form-control-sm" name="">
		                        				<div class="input-group-append">
		                        					<button class="btn btn-primary btn-sm" type="button" title="Tambah"><i class="fa fa-plus"></i></button>
		                        				</div>
		                        			</div>
	                        			</div>
	                        		</div>

	                        		<div class="col-md-3 col-sm-12">
	                        			<label>Kuantitas Stok</label>
	                        			<div class="form-group">
	                        				<input type="text" readonly="" class="form-control form-control-sm" name="">
	                        			</div>
	                        		</div>

	                        	</div>
	                        </fieldset>

	                        <div class="table-responsive mb-3">
	                        	<table class="table table-hover table-striped table-bordered data-table" cellspacing="0">
	                        		<thead class="bg-primary">
	                        			<tr>
	                        				<th>Nama</th>
	                        				<th>Jumlah</th>
	                        				<th>Satuan</th>
	                        				<th>Harga</th>
	                        				<th>Disc Percent</th>
	                        				<th>Disc Value</th>
	                        				<th>Total</th>
	                        				<th></th>
	                        			</tr>
	                        		</thead>
	                        	</table>
	                        </div>

	                        	<div class="row">
	                        		<div class="col-md-4 offset-md-8 col-sm-5 offset-sm-7 col-xs-12">
				                        <fieldset>
		                        			<div class="row">
		                        				<div class="col-md-12">
		                        					<label>Total Penjualan</label>
		                        					<div class="form-group">
		                        						<input type="text" class="form-control form-control-sm" readonly="" name="">
		                        					</div>
		                        				</div>
		                        				<div class="col-md-12">
		                        					<label>Total Discount</label>
		                        					<div class="form-group">
		                        						<input type="text" class="form-control form-control-sm" readonly="" name="">
		                        					</div>
		                        				</div>
		                        				<div class="col-md-12">
		                        					<label>PPn</label>
		                        					<div class="form-group">
		                        						<input type="text" class="form-control form-control-sm" readonly="" name="">
		                        					</div>
		                        				</div>
		                        				<div class="col-md-12">
		                        					<label>Total Amount</label>
		                        					<div class="form-group">
		                        						<input type="text" class="form-control form-control-sm" readonly="" name="">
		                        					</div>
		                        				</div>
		                        			</div>
				                        </fieldset>
	                        		</div>
	                        	</div>
                        </section>
                    </div>
                    <div class="card-footer text-right">
                    	<button class="btn btn-primary" type="button">Simpan</button>
                    </div>
                </div>

			</div>

		</div>

	</section>

</article>

@endsection