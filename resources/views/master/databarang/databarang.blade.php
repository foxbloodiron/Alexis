@extends('main')

@section('content')



<article class="content">

	<div class="title-block text-primary">
	    <h1 class="title"> Data Barang </h1>
	    <p class="title-description">
	    	<i class="fa fa-home"></i>&nbsp;<a href="{{url('/home')}}">Home</a>
	    	 / <span>Master Data</span>
	    	 / <span class="text-primary" style="font-weight: bold;">Data Barang</span>
	     </p>
	</div>

	<section class="section">

		<div class="row">

			<div class="col-12">
				
				<div class="card">
                    <div class="card-header bordered p-2">
                    	<div class="header-block">
                            <h3 class="title"> Data Barang </h3>
                        </div>
                        <div class="header-block pull-right">
                        	
                			<a class="btn btn-primary" href="{{route('tambah_databarang')}}"><i class="fa fa-plus"></i>&nbsp;Tambah Data</a>
                        </div>
                    </div>
                    <div class="card-block">
                        <section>
                        	
                        	<div class="table-responsive">
	                            <table class="table data-table table-hover" cellspacing="0">
	                                <thead class="bg-primary">
	                                    <tr>
	                                    	<th>No</th>
	                                		<th>Kode Barang</th>
	                                		<th>Nama Barang</th>
	                                		<th>Satuan</th>
	                                		<th>Kelompok Barang</th>
	                                		<th>Harga Beli</th>
	                                		<th>Aksi</th>
	                                	</tr>
	                                </thead>
	                                <tbody>
	                                	<tr>
	                                		<td>1</td>
	                                		<td>BRG/001</td>
	                                		<td>Semen</td>
	                                		<td>Karung</td>
	                                		<td>Bahan Baku</td>
	                                		<td></td>
	                                		<td>
	                                			<div class="btn-group">
	                                				<button class="btn btn-primary btn-sm" type="button" title="Edit"><i class="fa fa-pencil"></i></button>
	                                				<button class="btn btn-danger btn-sm" type="button" title="Delete"><i class="fa fa-trash"></i></button>
	                                			</div>
	                                		</td>
	                                	</tr>
	                                	<tr>
	                                		<td>2</td>
	                                		<td>BRG/002</td>
	                                		<td>Pasir</td>
	                                		<td>Butir</td>
	                                		<td>Bahan Baku</td>
	                                		<td></td>
	                                		<td>
	                                			<div class="btn-group">
	                                				<button class="btn btn-primary btn-sm" type="button" title="Edit"><i class="fa fa-pencil"></i></button>
	                                				<button class="btn btn-danger btn-sm" type="button" title="Delete"><i class="fa fa-trash"></i></button>
	                                			</div>
	                                		</td>
	                                	</tr>
	                                	<tr>
	                                		<td>3</td>
	                                		<td>BRG/003</td>
	                                		<td>Cat</td>
	                                		<td>Kaleng</td>
	                                		<td>Bahan Baku</td>
	                                		<td></td>
	                                		<td>
	                                			<div class="btn-group">
	                                				<button class="btn btn-primary btn-sm" type="button" title="Edit"><i class="fa fa-pencil"></i></button>
	                                				<button class="btn btn-danger btn-sm" type="button" title="Delete"><i class="fa fa-trash"></i></button>
	                                			</div>
	                                		</td>
	                                	</tr>
	                                </tbody>
	                            </table>
	                        </div>
                        </section>
                    </div>
                </div>

			</div>

		</div>

	</section>

</article>

@endsection