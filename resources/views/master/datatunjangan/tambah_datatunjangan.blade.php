@extends('main')

@section('content')

<article class="content">

	<div class="title-block text-primary">
	    <h1 class="title"> Tambah Data Tunjangan </h1>
	    <p class="title-description">
	    	<i class="fa fa-home"></i>&nbsp;<a href="{{url('/home')}}">Home</a> 
	    	/ <span>Master</span> 
	    	/ <a href="{{route('datatunjangan')}}">Data Tunjangan</a>
	    	/ <span class="text-primary font-weight-bold">Tambah Data Tunjangan</span>
	     </p>
	</div>

	<section class="section">

		<div class="row">

			<div class="col-12">
				
				<div class="card">
                    <div class="card-header bordered p-3">
                    	<div class="header-block">
	                        <h3 class="title"> Tambah Data Tunjangan </h3>
	                    </div>
	                    <div class="header-block pull-right">
	                    	
                			<a href="{{route('datatunjangan')}}" class="btn btn-secondary btn-sm" ><i class="fa fa-arrow-left"></i></a>
	                    </div>
                    </div>
                    <div class="card-block">
                        <section>
                     		<div class="row">
                     			<div class="col-md-3 col-sm-4 col-12">
                     				<label>Nama Tunjangan</label>
                     			</div>

                     			<div class="col-md-9 col-md-8 col-12">
                     				<div class="form-group">
                     					<input type="text" class="form-control form-control-sm" name="">
                     				</div>
                     			</div>


                     			<div class="col-md-3 col-sm-4 col-12">
                     				<label>Jumlah Tunjangan</label>
                     			</div>

                     			<div class="col-md-9 col-md-8 col-12">
                     				<div class="form-group">
                     					<input type="text" class="form-control form-control-sm text-right input-rupiah" name="">
                     				</div>
                     			</div>
                     		</div>
                        </section>
                    </div>
                    <div class="card-footer text-right">
                    	<button type="button" class="btn btn-primary">Simpan</button>
            			<a href="{{route('datatunjangan')}}" class="btn btn-secondary" >Kembali</i></a>

                    </div>
                </div>

			</div>

		</div>

	</section>

</article>

@endsection