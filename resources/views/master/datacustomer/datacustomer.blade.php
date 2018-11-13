@extends('main')

@section('content')

<article class="content">

	<div class="title-block text-primary">
	    <h1 class="title"> Data Customer Harian </h1>
	    <p class="title-description">
	    	<i class="fa fa-home"></i>&nbsp;<a href="{{url('/home')}}">Home</a>
	    	 / <span>Master Data</span>
	    	 / <span class="text-primary" style="font-weight: bold;">Data Customer Harian</span>
	     </p>
	</div>

	<section class="section">

		<div class="row">

			<div class="col-12">
				
				<div class="card">
                    <div class="card-block">
                        <div class="card-title-block">
                            <h3 class="title"> Data Customer Harian </h3>
                        </div>
                        <section>
                        	
                    		<div class="col-12" align="right" style="margin-bottom: 15px;">
                    			<a class="btn btn-primary" href="{{route('tambah_datacustomer')}}"><i class="fa fa-plus"></i>&nbsp;Tambah Data</a>
                    		</div>
                        	
                        	<div class="table-responsive">
	                            <table class="table data-table table-hover" cellspacing="0">
	                                <thead class="bg-primary">
	                                    <tr>
							                <th width="1%">No</th>
							                <th>ID</th>
							                <th>Nama</th>
							                <th>E-mail</th>
							                <th>No HP</th>
							                <th>Tipe Customer</th>
							                <th>Aksi</th>
							            </tr>
	                                </thead>
	                                <tbody>
	                                	<tr>
	                                		<td>1</td>
	                                		<td>CUS/0001</td>
	                                		<td>Alpha</td>
	                                		<td>alpha@alpha.com</td>
	                                		<td>0843123123123</td>
	                                		<td>Kontraktor</td>
	                                		<td>
	                                			<div class="btn-group btn-group-sm">
	                                				<button class="btn btn-warning" type="button" title="Edit"><i class="fa fa-pencil"></i></button>
	                                				<button class="btn btn-danger" type="button" title="Delete"><i class="fa fa-trash-o"></i></button>
	                                			</div>
	                                		</td>
	                                	</tr>
	                                	<tr>
	                                		<td>2</td>
	                                		<td>CUS/0001</td>
	                                		<td>Bravo</td>
	                                		<td>Bravo@Bravo.com</td>
	                                		<td>0843123123123</td>
	                                		<td>Harian</td>
	                                		<td>
	                                			<div class="btn-group btn-group-sm">
	                                				<button class="btn btn-warning" type="button" title="Edit"><i class="fa fa-pencil"></i></button>
	                                				<button class="btn btn-danger" type="button" title="Delete"><i class="fa fa-trash-o"></i></button>
	                                			</div>
	                                		</td>
	                                	</tr>
	                                	<tr>
	                                		<td>3</td>
	                                		<td>CUS/0001</td>
	                                		<td>Charlie</td>
	                                		<td>Charlie@Charlie.com</td>
	                                		<td>0843123123123</td>
	                                		<td>Kontraktor</td>
	                                		<td>
	                                			<div class="btn-group btn-group-sm">
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