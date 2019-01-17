@extends('main')

@section('content')

<article class="content">

	<div class="title-block text-primary">
	    <h1 class="title"> Data Customer </h1>
	    <p class="title-description">
	    	<i class="fa fa-home"></i>&nbsp;<a href="{{url('/home')}}">Home</a>
	    	 / <span>Master Data</span>
	    	 / <span class="text-primary" style="font-weight: bold;">Data Customer</span>
	     </p>
	</div>

	<section class="section">

		<div class="row">

			<div class="col-12">
				
				<div class="card">
                    <div class="card-header bordered p-2">
                    	<div class="header-block">
	                        <h3 class="title"> Data Customer </h3>
	                    </div>
	                    <div class="header-block pull-right">
                    			<a class="btn btn-primary" href="{{route('tambah_datacustomer')}}"><i class="fa fa-plus"></i>&nbsp;Tambah Data</a>
	                    	
	                    </div>
                    </div>
                    <div class="card-block">
                        <section>
                        	
                        	
                        	<div class="table-responsive">
	                            <table class="table table-striped table-hover" cellspacing="0" id="table_customer">
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
	                                				<button class="btn btn-warning btn-edit" type="button" title="Edit"><i class="fa fa-pencil"></i></button>
	                                				<button class="btn btn-danger btn-hapus" type="button" title="Delete"><i class="fa fa-trash-o"></i></button>
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
	                                				<button class="btn btn-warning btn-edit" type="button" title="Edit"><i class="fa fa-pencil"></i></button>
	                                				<button class="btn btn-danger btn-hapus" type="button" title="Delete"><i class="fa fa-trash-o"></i></button>
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
	                                				<button class="btn btn-warning btn-edit" type="button" title="Edit"><i class="fa fa-pencil"></i></button>
	                                				<button class="btn btn-danger btn-hapus" type="button" title="Delete"><i class="fa fa-trash-o"></i></button>
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
@section('extra_script')
<script type="text/javascript">

	$(document).ready(function(){
		var table = $('#table_customer').DataTable();


		$(document).on('click','.btn-edit',function(){
			window.location.href = baseUrl + '/master/datacustomer/edit_datacustomer';
		});

		$(document).on('click', '.btn-hapus', function(){
			var ini = $(this);
			$.confirm({
			    title: 'Hapus!',
			    content: 'Apa anda yakin mau menghapus data ini?',
			    buttons: {
			        confirm: {
			        	text:'Ya',
			        	action : function(){
					        table_hapus(ini);
				        }
			        },
			        cancel:{
			        	text: 'Tidak',
					    action: function () {
    			            // tutup confirm
    			        }
    			    }
			    }
			});
		});

		function table_hapus(a){
			table.row($(a).parents('tr')).remove().draw();
		}
	});
</script>
@endsection