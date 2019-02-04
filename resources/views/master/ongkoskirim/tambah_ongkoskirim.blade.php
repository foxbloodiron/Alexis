@extends('main')

@section('content')

<article class="content">

  <div class="title-block text-primary">
      <h1 class="title"> Tambah Data Ongkos Kirim </h1>
      <p class="title-description">
        <i class="fa fa-home"></i>&nbsp;<a href="{{url('/home')}}">Home</a> 
        / <span>Master</span> 
        / <a href="{{route('ongkoskirim')}}">Data Ongkos Kirim</a>
        / <span class="text-primary font-weight-bold">Tambah Data Ongkos Kirim</span>
       </p>
  </div>

  <section class="section">

    <div class="row">


      <div class="col-12">
        
        <div class="card">
                    <div class="card-header bordered p-2">
                      <div class="header-block">
                        <h3 class="title"> Tambah Data Ongkos Kirim </h3>
                      </div>
                      <div class="header-block pull-right">
                        <a href="{{route('ongkoskirim')}}" class="btn btn-secondary btn-sm"><i class="fa fa-arrow-left"></i></a>
                      </div>
                    </div>
                    <div class="card-block">
                        <section>
                          
                            <div class="row">
                              
                              <div class="col-md-4 col-sm-5 col-12">
                                <label>Nama Barang</label>
                              </div>

                              <div class="col-md-8 col-sm-7 col-12">
                                <div class="form-group">
                                  <select class="form-control form-control-sm">
                                    <option>--Pilih--</option>
                                  </select>
                                </div>
                              </div>



                              <div class="col-md-4 col-sm-5 col-12">
                                <label>Satuan</label>
                              </div>

                              <div class="col-md-5 col-sm-7 col-12">
                                <div class="form-group">
                                  <select class="form-control form-control-sm">
                                    <option>--Pilih--</option>
                                  </select>
                                </div>
                              </div>


                              <div class="col-md-4 col-sm-5 col-12">
                                <label>Jumlah Barang</label>
                              </div>

                              <div class="col-md-5 col-sm-7 col-12">
                                <div class="form-group">
                                  <input type="number" min="0" class="form-control form-control-sm" name="">
                                </div>
                              </div>

                              <div class="col-md-4 col-sm-5 col-12">
                                <label>Ongkos Kirim</label>
                              </div>

                              <div class="col-md-5 col-sm-7 col-12">
                                <div class="form-group">
                                  <input type="text" class="form-control form-control-sm input-rupiah" name="">
                                </div>
                              </div>

                            </div>

                        </section>
                    </div>
                    <div class="card-footer text-right">
                      <button class="btn btn-primary" type="button">Simpan</button>
                      <a href="{{route('ongkoskirim')}}" class="btn btn-secondary">Kembali</a>
                    </div>
                </div>

      </div>

    </div>

  </section>

</article>

@endsection