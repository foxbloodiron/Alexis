@extends('main')

@section('content')

@include('penjualan.penjualanorder.modal_cust')

<article class="content">

	<div class="title-block text-primary">
	    <h1 class="title"> Pencatatan Penjualan Dengan Order </h1>
	    <p class="title-description">
	    	<i class="fa fa-home"></i>&nbsp;<a href="{{url('/home')}}">Home</a> 
	    	/ <span>Penjualan</span> 
	    	/ <span class="text-primary font-weight-bold">Pencatatan Penjualan Dengan Order</span>
	     </p>
	</div>

	<section class="section">

     	   <ul class="nav nav-pills">
            <li class="nav-item">
                <a href="" class="nav-link active" data-target="#pos" aria-controls="pos" data-toggle="tab" role="tab">Penjualan Dengan Order</a>
            </li>
            <li class="nav-item">
                <a href="" class="nav-link" data-target="#list_pos" aria-controls="list_pos" data-toggle="tab" role="tab">List Penjualan</a>
            </li>
        </ul>

		<div class="row">

			<div class="col-12">
				
				<div class="tab-content">

					@include('penjualan.penjualanorder.tab_formpenjualan')
					@include('penjualan.penjualanorder.tab_list')

				</div>

			</div>

		</div>

	</section>

</article>

@endsection
@section('extra_script')
<script type="text/javascript">
	var table = $('#table_penjualan').DataTable();
	var counter = 0;
	function table_tambah(){
		table.row.add([
			'<input type="text" readonly="" class="form-control form-control-sm" value="'+$('#barang option:selected').text()+'">'+
			'<input type="hidden" value="'+$('#barang').val()+'" class="barang">',
			'<input type="number" min="0" class="form-control form-control-sm" value="'+$('#qty').val()+'">',
			'<input type="text" readonly="" class="form-control form-control-sm">',
			'<input type="text" readonly="" class="form-control form-control-sm">',
			'<input type="text" readonly="" class="form-control form-control-sm">',
			'<input type="text" readonly="" class="form-control form-control-sm">',
			'<input type="text" readonly="" class="form-control form-control-sm">',
			'<button class="btn btn-danger btn-hapus-kenangan" type="button" title="Delete"><i class="fa fa-trash-o"></i></button>'
			]).draw(false);

		counter++;

		$('#qty').val('');
		$('#barang').prop('selectedIndex', 0).trigger('change');
	}

	function hapus_row(a){
		table.row($(a).parents('tr')).remove().draw();
	}

	$(document).ready(function(){
		$('#qty').on('keypress', function(e){
			if(e.keypress === 13 || e.keyCode === 13){
				table_tambah();
			}
		});

		$('.btn-tambah').on('click', function(){
			table_tambah();
		});

		$('#table_penjualan tbody').on('click', '.btn-hapus-kenangan', function(){
			hapus_row($(this));
		});
	});

	$('#btn-modal-customer').click(function(){

		$('#tambah_cust').modal('show');

	});
</script>
@endsection