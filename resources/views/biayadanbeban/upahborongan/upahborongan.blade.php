@extends('main')

@section('content')

@include('biayadanbeban.upahborongan.tambah_upahborongan')

<article class="content">

	<div class="title-block text-primary">
	    <h1 class="title"> Upah Borongan </h1>
	    <p class="title-description">
	    	<i class="fa fa-home"></i>&nbsp;<a href="{{url('/home')}}">Home</a> / <span>Biaya dan Beban</span> / <span class="text-primary" style="font-weight: bold;">Upah Borongan</span>
	     </p>
	</div>

	<section class="section">

		<div class="row">

			<div class="col-12">
				
				<div class="card">
                    <div class="card-header bordered p-2">
                    	<div class="header-block">
	                        <h3 class="title"> Upah Borongan </h3>
	                    </div>
	                    <div class="header-block pull-right">
                			<button class="btn btn-primary" data-toggle="modal" data-target="#tambah"><i class="fa fa-plus"></i>&nbsp;Tambah Data</button>
	                    	
	                    </div>
                    </div>
                    <div class="card-block">
                        <section>
                        	
                        	<div class="table-responsive">
	                            <table class="table data-table table-hover" cellspacing="0">
	                                <thead class="bg-primary">
	                                    <tr>
							                <th width="1%">No</th>
							                <th>Tanggal Input</th>
							                <th>Tipe Upah Borongan</th>
							                <th width="25%">Nama</th>
							                <th width="20%">Jumlah</th>
							                <th width="15%">Aksi</th>
							            </tr>
	                                </thead>
	                                <tbody>
	                                	<tr>
	                                		<td>1</td>
	                                		<td>12-12-2012 12:12:12</td>
	                                		<td>Produksi</td>
	                                		<td>Upah Kerja Rodi 1</td>
	                                		<td>
	                                			<div class="float-left">
	                                				Rp.
	                                			</div>
	                                			<div class="float-right">
	                                				2.000,00
	                                			</div>
	                                		</td>
	                                		<td align="center">
	                                			<div class="btn-group">
	                                				<button class="btn btn-warning" type="button" title="Edit"><i class="fa fa-pencil"></i></button>
	                                				<button class="btn btn-danger" type="button" title="Delete"><i class="fa fa-trash-o"></i></button>
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