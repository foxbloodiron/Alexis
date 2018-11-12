<div class="tab-pane fade in active show" id="list_barang">
	<div class="d-block text-right mb-3">
		<a class="btn btn-primary" href="javascript:void(0);"><i class="fa fa-plus"></i> Tambah Data</a>
	</div>
	<div class="table-responsive">
		<table class="table table-hover table-striped data-table" cellspacing="0">
			<thead class="bg-primary">
				<tr>
					<th width="1%">No</th>
					<th>Nama Barang</th>
					<th>Kode Barang</th>
					<th>Qty Suplier</th>
					<th>Aksi</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>1</td>
					<td>Semen</td>
					<td>BRG/001</td>
					<td>3</td>
					<td>
						<div class="btn-group btn-group-sm">
							<button class="btn btn-primary" data-toggle="modal" data-target="#list_suplier_membawa" type="button" title="List Suplier yang membawa"><i class="fa fa-list"></i></button>
							<button class="btn btn-warning" type="button" title="Edit"><i class="fa fa-pencil"></i></button>
							<button class="btn btn-danger" type="button" title="Delete"><i class="fa fa-trash-o"></i></button>
						</div>
					</td>
				</tr>
			</tbody>
		</table>
	</div>
</div>