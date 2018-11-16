@extends('main')

@section('content')

<article class="content">

	<div class="title-block text-primary">
	    <h1 class="title"> Tambah Data Adonan </h1>
	    <p class="title-description">
	    	<i class="fa fa-home"></i>&nbsp;<a href="{{url('/home')}}">Home</a> 
	    	/ <span>Stok</span> 
	    	/ <a href="{{route('dataadonan')}}"><span>Data Adonan</span> </a>
	    	/ <span class="text-primary font-weight-bold">Tambah Data Adonan</span>
	     </p>
	</div>

	<section class="section">

		<div class="row">

			<div class="col-12">
				
				<div class="card">
                    <div class="card-block">
                        <div class="card-title-block">
                            <h3 class="title"> Tambah Data Adonan </h3>
                        </div>
                        <section>

                        	<fieldset>
                        		<div class="row">
                        			<div class="col-lg-12">
                        				<label>Bahan</label>
                        				<div class="form-group">
                    					
                        					<select class="form-control form-control-sm select2">
                        						<option value="">--Pilih--</option>
                        						<option value="">Semen</option>
                        						<option value="">Air</option>
                        						<option value="">Pasir</option>
                        					</select>	
	                        					
                        				</div>
                        			</div>
                        			<div class="col-lg-12 text-right">
                						<button class="btn btn-primary" type="button"><i class="fa fa-plus"></i> Tambah</button>
                					</div>
                        		</div>
                        	</fieldset>

                        	<div class="table-responsive mt-3">
                        		<table class="table table-hover table-bordered table-striped data-table" cellspacing="0">
                        			<thead class="bg-primary">
                        				<tr>
                        					<th>Bahan</th>
                        					<th width="1%"></th>
                        				</tr>
                        			</thead>
                        		</table>
                        	</div>

                        </section>
                    </div>

                    <div class="card-footer text-right">
                    	<button class="btn btn-primary" type="button">Simpan</button>
                    	<a href="{{route('dataadonan')}}" class="btn btn-secondary">Kembali</a>
                    </div>
                </div>

			</div>

		</div>

	</section>

</article>

@endsection