@extends('main')

@section('content')

<article class="content">

  <div class="title-block text-primary">
      <h1 class="title"> Tambah Data Golongan Aset </h1>
      <p class="title-description">
        <i class="fa fa-home"></i>&nbsp;<a href="{{url('/home')}}">Home</a> 
        / <span>Aset</span> 
        / <a href="{{route('datagolongan')}}">Data Golongan Aset</a>
        / <span class="text-primary font-weight-bold">Tambah Data Golongan Aset</span>
       </p>
  </div>

  <section class="section">

    <div class="row">

      <div class="col-12">
        
        <div class="card">
            <div class="card-header bordered p-2">
              <div class="header-block">
                
                  <h3 class="title"> Tambah Data Golongan Aset </h3>
              </div>
              
              <div class="header-block pull-right">
                <a class="btn btn-secondary btn-sm" href="{{route('datagolongan')}}" title="Kembali"><i class="fa fa-arrow-left"></i></a>
              </div>

            </div>
            <div class="card-block">
                <section>
                  <div class="row">
                    <div class="col-md-6 col-sm-12">
                      
                      <div class="row">
                        
                        <div class="col-md-4 col-sm-5 col-12">
                          <label>Nama Group Aset</label>
                        </div>

                        <div class="col-md-8 col-sm-7 col-12">
                          <div class="form-group">
                            <div class="input-group">
                              <input type="text" class="form-control form-control-sm" readonly="" placeholder="Di isi oleh Admin" name="">
                              <div class="input-group-append">
                                <button class="btn btn-primary btn-sm"><i class="fa fa-search"></i></button>
                              </div>
                            </div>
                          </div>
                        </div>


                        <div class="col-md-4 col-sm-5 col-12">
                          <label>Golongan Group <span class="text-danger">*</span></label>
                        </div>

                        <div class="col-md-8 col-sm-7 col-12">
                          <div class="form-group">
                            <div class="input-group">
                              <select class="form-control form-control-sm select2" name="">
                                <option value="" selected="" disabled="">--Pilih--</option>
                              </select>
                              <div class="input-group-addon" title="Parameter golongan digunakan untuk pencarian data">
                                <i class="fa fa-question-circle"></i>
                              </div>
                            </div>
                          </div>
                        </div>


                        <div class="col-md-4 col-sm-5 col-12">
                          <label>Nama Group Aset <span class="text-danger">*</span></label>
                        </div>

                        <div class="col-md-8 col-sm-7 col-12">
                          <div class="form-group">
                            <input type="text" class="form-control form-control-sm" placeholder="contoh: Inventaris Kantor" name="">
                          </div>
                        </div>



                        <div class="col-md-4 col-sm-5 col-12">
                          <label>Keterangan Group</label>
                        </div>

                        <div class="col-md-8 col-sm-7 col-12">
                          <div class="form-group">
                            <input type="text" class="form-control form-control-sm" placeholder="contoh: Kumpulan Aset Inventaris Kantor" name="">
                          </div>
                        </div>

                        <hr>
                        

                      </div>

                    </div>

                    <div class="col-md-6 col-sm-12">
                      
                    </div>
                  </div>
                </section>
            </div>
            <div class="card-footer text-right">
              <button class="btn btn-primary" type="button">Simpan</button>
              <a href="{{route('datagolongan')}}" class="btn btn-secondary">Kembali</a>
            </div>
        </div>

      </div>

    </div>

  </section>

</article>

@endsection