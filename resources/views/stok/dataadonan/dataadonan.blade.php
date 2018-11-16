@extends('main')

@section('content')

@include('stok.dataadonan.list_dataadonan')

<article class="content">

	<div class="title-block text-primary">
	    <h1 class="title"> Data Adonan </h1>
	    <p class="title-description">
	    	<i class="fa fa-home"></i>&nbsp;<a href="{{url('/home')}}">Home</a> 
	    	/ <span>Stok</span> 
	    	/ <span class="text-primary font-weight-bold">Data Adonan</span>
	     </p>
	</div>

	<section class="section">

		<div class="row">

			<div class="col-12">
				
				<div class="card">
                    <div class="card-block">
                        <div class="card-title-block">
                            <h3 class="title"> Data Adonan </h3>
                        </div>
                        <section>
                        	
                    		<div class="d-block text-right mb-3">
                    			<a class="btn btn-primary" href="{{route('tambah_dataadonan')}}"><i class="fa fa-plus"></i>&nbsp;Tambah Data</a>
                    		</div>
                        	
                        	<div class="table-responsive">
	                            <table class="table data-table table-hover" cellspacing="0">
	                                <thead class="bg-primary">
	                                    <tr>
	                                    	<th width="1%">No</th>
							                <th>Nama Adonan</th>
							                <th width="15%">Aksi</th>
							            </tr>
	                                </thead>
	                                <tbody>
	                                	<tr>
	                                		<td>1</td>
	                                		<td>Adonan Semen</td>
	                                		<td>
	                                			<div class="btn-group">
	                                				<button class="btn btn-primary" title="Detail" type="button" data-toggle="modal" data-target="#detail"><i class="fa fa-list"></i></button>
	                                				<button class="btn btn-warning" title="Edit" type="button"><i class="fa fa-pencil"></i></button>
	                                				<button class="btn btn-danger" title="Delete" type="button"><i class="fa fa-trash-o"></i></button>
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