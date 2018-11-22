@extends('main')

@section('content')

@include('pengiriman.upahboronganpengiriman.tambah_upahboronganpengiriman')

<article class="content">

	<div class="title-block text-primary">
	    <h1 class="title"> Upah Borongan Pengiriman </h1>
	    <p class="title-description">
	    	<i class="fa fa-home"></i>&nbsp;<a href="{{url('/home')}}">Home</a> / <span>Pengiriman</span> / <span class="text-primary" style="font-weight: bold;">Upah Borongan Pengiriman</span>
	     </p>
	</div>

	<section class="section">

		<div class="row">

			<div class="col-12">

				<ul class="nav nav-pills mb-3">
                    <li class="nav-item">
                        <a href="" class="nav-link active" data-target="#pengiriman" aria-controls="pengiriman" data-toggle="tab" role="tab">Operasional Jalan</a>
                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-link" data-target="#upah" aria-controls="upah" data-toggle="tab" role="tab">Upah Borongan Pengiriman</a>
                    </li>
                </ul>
				
				<div class="tab-content">
					<div class="tab-pane active fade in show" id="pengiriman">
						<div class="card">
		                    <div class="card-block">
		                        <div class="card-title-block">
		                            <h3 class="title"> Operasional Jalan </h3>
		                        </div>
		                        <section>
		                        	
		                        	<div class="table-responsive">
			                            <table class="table data-table table-hover" cellspacing="0">
			                                <thead class="bg-primary">
			                                    <tr>
									                <th>Nota</th>
									                <th>Sopir</th>
									                <th>Armada</th>
									                <th>Jadwal</th>
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
		            <div class="tab-pane fade in" id="upah">
		            	<div class="card">

		            		<div class="card-block">
		            			
		            			<div class="card-title-block">
		            				<h3 class="title">Upah Borangan Pengiriman</h3>
		            			</div>
		            			<section>

		                    		<div class="d-block mb-3" align="right">
		                    			<button class="btn btn-primary" data-toggle="modal" data-target="#tambah"><i class="fa fa-plus"></i>&nbsp;Tambah Data</button>
		                    		</div>
		                        	
		            				<h1>COntent</h1>
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