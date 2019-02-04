@extends('main')

@section('content')

<article class="content">

  <div class="title-block text-primary">
      <h1 class="title"> Data Ongkos Kirim </h1>
      <p class="title-description">
        <i class="fa fa-home"></i>&nbsp;<a href="{{url('/home')}}">Home</a> 
        / <span>Master</span> 
        / <span class="text-primary font-weight-bold">Data Ongkos Kirim</span>
       </p>
  </div>

  <section class="section">

    <div class="row">


      <div class="col-12">
        
        <div class="card">
                    <div class="card-header bordered p-2">
                      <div class="header-block">
                        <h3 class="title"> Data Ongkos Kirim </h3>
                      </div>
                      <div class="header-block pull-right">
                        <a href="{{route('tambah_ongkoskirim')}}" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah Data</a>
                      </div>
                    </div>
                    <div class="card-block">
                        <section>

                            <div class="table-responsive">
                              <table class="table table-bordered table-hover table-striped data-table" cellspacing="0">
                                <thead class="bg-primary">
                                  <tr>
                                    <th>No</th>
                                    <th>Nama Barang</th>
                                    <th>Satuan</th>
                                    <th>Jumlah Barang</th>
                                    <th>Ongkos Pengiriman</th>
                                    <th>Aksi</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <td>1</td>
                                    <td>Paving Abu</td>
                                    <td>PCS</td>
                                    <td>100</td>
                                    <td>
                                      <span class="pull-left">Rp.</span>
                                      <span class="pull-right">2.000,00</span>
                                    </td>
                                    <td>
                                      <div class="btn-group btn-group-sm">
                                        <button class="btn btn-warning"type="button" title="Edit"><i class="fa fa-pencil"></i></button>
                                        <button class="btn btn-danger" type="button" title="Delete"><i class="fa fa-times-circle"></i></button>
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