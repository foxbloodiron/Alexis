@extends('main')

@section('content')

<article class="content">

  <div class="title-block text-primary">
      <h1 class="title"> Tambah Pencatatan Produksi Dengan Rencana </h1>
      <p class="title-description">
        <i class="fa fa-home"></i>&nbsp;<a href="{{url('/home')}}">Home</a> 
        / <span>Produksi</span> 
        / <a href="{{route('produksirencana')}}">Pencatatan Produksi Dengan Rencana</a>
        / <span class="text-primary font-weight-bold">Tambah Pencatatan Produksi Dengan Rencana</span>
       </p>
  </div>

  <section class="section">

    <div class="row">

      <div class="col-12">
        
        <div class="card">
                    <div class="card-header bordered p-2">
                      <div class="header-block">
                          <h3 class="title"> Tambah Pencatatan Produksi Dengan Rencana </h3>
                      </div>
                      <div class="header-block pull-right">
                        <a href="{{route('produksirencana')}}" class="btn btn-secondary"><i class="fa fa-arrow-left"></i></a>
                      </div>
                    </div>
                    <div class="card-block">
                        <section>
                          
                          <div class="row">

                            <div class="col-md-3 col-sm-6 col-12">
                              <label>Kode Rencana</label>
                            </div>

                            <div class="col-md-9 col-sm-6 col-12">
                              <div class="form-group">
                                <input type="text" class="form-control form-control-sm" readonly="" name="">
                              </div>
                            </div>
                            
                            <div class="col-md-3 col-sm-6 col-12">
                              <label>Kode POS Order</label>
                            </div>

                            <div class="col-md-3 col-sm-6 col-12">
                              <div class="form-group">
                                <select class="form-control form-control-sm select2">
                                  <option disabled="" selected="">--Pilih Kode POS Order--</option>
                                  <option>PO/20190129/1</option>
                                </select>
                              </div>
                            </div>


                            <div class="col-md-3 col-sm-6 col-12">
                              <label>Nama Customer</label>
                            </div>

                            <div class="col-md-3 col-sm-6 col-12">
                              <div class="form-group">
                                <input type="text" class="form-control form-control-sm" readonly="" name="">
                              </div>
                            </div>

                            <div class="col-md-3 col-sm-6 col-12">
                              <label>Nama Mesin</label>
                            </div>

                            <div class="col-md-9 col-sm-6 col-12">
                              <div class="form-group">
                                <select class="form-control form-control-sm select2">
                                </select>
                              </div>
                            </div>
                            

                            <div class="col-md-3 col-sm-6 col-12">
                              <label>Tanggal Rencana Produksi</label>
                            </div>

                            <div class="col-md-3 col-sm-6 col-12">
                              <div class="form-group">
                                <input type="text" class="form-control form-control-sm" id="tanggal_rencana" name="tanggal_rencana">
                              </div>
                            </div>
                            
                            <div class="col-md-3 col-sm-6 col-12">
                              <label>Lama Produksi</label>
                            </div>

                            <div class="col-md-3 col-sm-6 col-12">
                              <div class="form-group">
                                <div class="input-group">
                                  <input type="number" min="0" class="form-control form-control-sm" id="jumlah_hari" name="jumlah_hari">
                                  <span class="input-group-addon">
                                    Hari
                                  </span>
                                </div>
                              </div>
                            </div>
                            
                            <div class="col-md-3 col-sm-6 col-12">
                              <label>Target Selesai </label>
                            </div>

                            <div class="col-md-3 col-sm-6 col-12">
                              <div class="form-group">
                                <input type="text" class="form-control form-control-sm" readonly="" id="target_selesai" name="target_selesai">
                              </div>
                            </div>
                            
                            
                          </div>

                          <div class="table-responsive">
                            <table class="table table-bordered table-striped table-hover" cellspacing="0" id="table_produksi">
                              
                              <thead class="bg-primary">
                                <tr>
                                  <th>Barang</th>
                                  <th>Satuan</th>
                                </tr>
                              </thead>
                              <tbody></tbody>


                            </table>
                          </div>
                          

                        </section>
                    </div>
                    <div class="card-footer text-right">
                      <button class="btn btn-primary" id="btn-simpan-rencana"{{--masa depanku dengannya--}} type="button">Proses</button>
                      <a class="btn btn-secondary" href="{{route('produksirencana')}}">Kembali</a>
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

    var table = $('#table_produksi').DataTable({
      searching : false,
      paging : false
    });

    $('#tanggal_rencana').datepicker({
      enableOnReadonly:false,
      format:'dd-mm-yyyy'
    }).on('changeDate', function(){

      var ini   = $(this).datepicker('getDate');
      var hari  = parseInt($('#jumlah_hari').val());

      if($('#jumlah_hari').val() === ''){
        hari = parseInt(0);
      }

      ini.setDate(ini.getDate() + hari);


      $('#target_selesai').datepicker('setDate', ini);
      console.log(ini);
    });

    $('#jumlah_hari').keyup(function(){

      if($('#tanggal_rencana').val() === '' || $('#tanggal_rencana').val().length === 0){
        $('#tanggal_rencana').datepicker('setDate', '0d');        
      }

      var tanggal_rencana = $('#tanggal_rencana').datepicker('getDate');
      var ini             = parseInt($(this).val());


      tanggal_rencana.setDate(tanggal_rencana.getDate() + ini);

      $('#target_selesai').datepicker('setDate', tanggal_rencana);
    });

    $('#target_selesai').datepicker({
      format:'dd-mm-yyyy',
      enableOnReadonly:false
    });


  });

</script>
@endsection