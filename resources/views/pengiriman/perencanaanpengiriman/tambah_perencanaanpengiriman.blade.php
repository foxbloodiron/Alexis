@extends('main')

@section('content')

<article class="content">

  <div class="title-block text-primary">
      <h1 class="title"> Tambah Perencanaan Pengiriman </h1>
      <p class="title-description">
        <i class="fa fa-home"></i>&nbsp;<a href="{{url('/home')}}">Home</a> 
        / <span>Pengiriman</span> 
        / <a href="{{route('perencanaanpengiriman')}}"> Perencanaan perencanaanpengiriman</a>
        / <span class="text-primary font-weight-bold" >Tambah Perencanaan Pengiriman</span>
       </p>
  </div>

  <section class="section">

    <div class="row">

      <div class="col-12">
        
        <div class="card">
            <div class="card-header bordered p-2">
              <div class="header-block">
                  <h3 class="title"> Tambah Perencanaan Pengiriman </h3>
              </div>
              <div class="header-block pull-right">
                <a href="{{route('perencanaanpengiriman')}}" class="btn btn-secondary btn-sm"><i class="fa fa-arrow-left"></i></a>
              </div>
            </div>
            <div class="card-block">
                <section>
                    <div class="row">
                      <div class="col-md-3 col-sm-6 col-12">
                        <label>Nota</label>
                      </div>

                      <div class="col-md-3 col-sm-6 col-12">
                        <div class="form-group">
                          <select class="form-control form-control-sm select2">
                            <option value="" selected="" disabled="">--Pilih--</option>
                          </select>
                        </div>
                      </div>

                      <div class="col-md-3 col-sm-6 col-12">
                        <label>Nama Customer</label>
                      </div>

                      <div class="col-md-3 col-sm-6 col-12">
                        <div class="form-group">
                          <input type="text " class="form-control form-control-sm" readonly="" name="">
                        </div>
                      </div>
                    </div>
                </section>
            </div>
            <div class="card-footer text-right">
              <button class="btn btn-primary" type="button">Simpan</button>
              <a href="{{route('perencanaanpengiriman')}}" class="btn btn-secondary">Kembali</a>
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
    
  });
</script>
@endsection