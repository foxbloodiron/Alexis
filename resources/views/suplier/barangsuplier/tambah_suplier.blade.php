@extends('main')

@section('content')


<article class="content">

  <div class="title-block text-primary">
      <h1 class="title"> Data Barang </h1>
      <p class="title-description">
        <i class="fa fa-home"></i>&nbsp;<a href="{{url('/home')}}">Home</a>
         / <span>Suplier</span>
         / <a href="{{route('barangsuplier')}}"><span>Item Barang Suplier</span></a>
         / <span class="text-primary" style="font-weight: bold;">Tambah Barang untuk Suplier</span>
       </p>
  </div>

  <section class="section">

    <div class="row">

      <div class="col-12">
        
        <div class="card">
                    <div class="card-block">
                        <div class="card-title-block">
                            <h3 class="title">Tambah Barang untuk Suplier </h3>
                        </div>
                        <section>

                          <div class="row">

                            <div class="col-md-12">
                              <label>Nama Barang</label>
                            </div>

                            <div class="col-md-12">
                              <div class="form-group">
                                <input type="text" class="form-control form-control-sm" name="">
                              </div>
                            </div>

                            <div class="col-md-12">
                              <label>Daftar Barang (Input nama barang terkait)</label>
                            </div>

                            <div class="col-md-12">
                              <div class="form-group">
                                <div class="input-group">
                                  <select class="form-control form-control-sm" name="">
                                    <option value="">-Pilih-</option>
                                  </select>
                                  <div class="input-group-append">
                                    <button class="btn btn-primary btn-md" title="Tambah" type="button"><i class="fa fa-plus"></i></button>
                                  </div>
                                </div>
                              </div>
                            </div>



                          </div>

                          <div class="table-responsive">
                            <table class="table table-hover data-table table-striped" cellspacing="0">
                              <thead class="bg-primary">
                                <tr>
                                  <th>Nama Barang</th>
                                  <th>Aksi</th>
                                </tr>
                              </thead>
                            </table>
                          </div>

                        </section>
                    </div>

                    <div class="card-footer text-right">
                      <button class="btn btn-primary" type="button">Simpan</button>
                      <a href="{{route('barangsuplier')}}" class="btn btn-secondary">Kembali</a>
                    </div>
                </div>

      </div>

    </div>

  </section>

</article>

@endsection