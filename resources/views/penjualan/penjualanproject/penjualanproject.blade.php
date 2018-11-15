@extends('main')

@section('content')

@include('penjualan.penjualanproject.termin_penjualanproject')

<article class="content">

	<div class="title-block text-primary">
	    <h1 class="title"> Penjualan Project </h1>
	    <p class="title-description">
	    	<i class="fa fa-home"></i>&nbsp;<a href="{{url('/home')}}">Home</a> 
	    	/ <span>Penjualan</span> 
	    	/ <span class="text-primary font-weight-bold">Penjualan Project</span>
	     </p>
	</div>

	<section class="section">

		<div class="row">

			<div class="col-12">
				
                <ul class="nav nav-pills mb-3">
                    <li class="nav-item">
                        <a href="" class="nav-link active" data-target="#pos" aria-controls="pos" data-toggle="tab" role="tab">Form Penjualan Project</a>
                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-link" data-target="#list_pos" aria-controls="list_pos" data-toggle="tab" role="tab">List Penjualan</a>
                    </li>
                </ul>

                <div class="tab-content">

                	@include('penjualan.penjualanproject.tab_penjualan')
                	@include('penjualan.penjualanproject.tab_list_penjualan')

	            </div>

			</div>

		</div>

	</section>

</article>

@endsection