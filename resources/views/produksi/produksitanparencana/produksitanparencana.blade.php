@extends('main')

@section('content')

@include('produksi.produksitanparencana.tambah_produksitanparencana')

<article class="content">

	<div class="title-block text-primary">
	    <h1 class="title"> Pencatatan Produksi Tanpa Rencana </h1>
	    <p class="title-description">
	    	<i class="fa fa-home"></i>&nbsp;<a href="{{url('/home')}}">Home</a> / <span>Produksi</span> / <span class="text-primary" style="font-weight: bold;">Pencatatan Produksi Tanpa Rencana</span>
	     </p>
	</div>

	<section class="section">

		<div class="row">

			<div class="col-12">
				
				<div class="card">
                    <div class="card-block">
                        <div class="card-title-block">
                            <h3 class="title"> Pencatatan Produksi Tanpa Rencana </h3>
                        </div>
                        <section>
                        	
                    		<div class="col-12" align="right" style="margin-bottom: 15px;">
                    			<button class="btn btn-primary" data-toggle="modal" data-target="#tambah"><i class="fa fa-plus"></i>&nbsp;Tambah Data</button>
                    		</div>
                        	
                        	<div class="table-responsive">
	                            <table class="table data-table table-hover table-striped table-bordered" cellspacing="0">
	                                <thead class="bg-primary">
	                                    <tr>
	                                    	<th>Kode Produksi Tanpa Rencana</th>
							                <th>Tanggal</th>
							                <th>Kode Item</th>
							                <th>Nama Item</th>
							                <th>Jumlah Produksi</th>
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

		</div>

	</section>

</article>

@endsection