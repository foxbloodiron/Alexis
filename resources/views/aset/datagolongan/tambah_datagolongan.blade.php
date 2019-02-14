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
                <button class="btn btn-primary" data-toggle="modal" data-target="#tambah"><i class="fa fa-plus"></i>&nbsp;Tambah Data</button>
              </div>

            </div>
            <div class="card-block">
                <section>
                  <div class="row">
                    <div class="col-md-6 col-sm-12">
                      
                      <div class="row">
                        
                        <div class="col-md-3 col-sm-4 col-12">
                          <label>Nama Group Aset</label>
                        </div>

                        <div class="col-md-9 col-sm-8 col-12">
                          <div class="form-group">
                            <div class="input-group">
                              <input type="text" class="form-control form-control-sm" readonly="" placeholder="Di isi oleh Admin" name="">
                              <div class="input-group-append">
                                <button class="btn btn-primary btn-sm"><i class="fa fa-search"></i></button>
                              </div>
                            </div>
                          </div>
                        </div>

                      </div>

                    </div>

                    <div class="col-md-6 col-sm-12">
                      
                    </div>
                  </div>
                </section>
            </div>
        </div>

      </div>

    </div>

  </section>

</article>

@endsection