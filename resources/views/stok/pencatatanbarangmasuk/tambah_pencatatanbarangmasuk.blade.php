@extends('main')

@section('content')

@include('stok.pencatatanbarangmasuk.modal_muatan')

<article class="content">

  <div class="title-block text-primary">
      <h1 class="title"> Tambah Pencatatan Barang Masuk </h1>
      <p class="title-description">
        <i class="fa fa-home"></i>&nbsp;<a href="{{url('/home')}}">Home</a> 
        / <span>Stok</span> 
        / <a class="{{route('pencatatanbarangmasuk')}}"><span>Pencatatan Barang Masuk</span> </a>
        / <span class="text-primary font-weight-bold">Tambah Pencatatan Barang Masuk</span>
       </p>
  </div>

  <section class="section">

    <div class="row">

      <div class="col-12">
        
        <div class="card">
                    <div class="card-header bordered p-2">
                      <div class="header-block">
                        <h3 class="title"> Tambah Pencatatan Barang Masuk </h3>
                      </div>
                      <div class="header-block pull-right">
                        <a href="{{route('pencatatanbarangmasuk')}}" class="btn btn-secondary btn-sm"><i class="fa fa-arrow-left"></i></a>
                      </div>
                    </div>
                    <div class="card-block">
                        <section>

                          <fieldset>
                            <div class="row">

                              <div class="col-md-3 col-sm-6 col-xs-12">
                                <label>Nota Order Pembelian</label>
                              </div>

                              <div class="col-md-3 col-sm-6 col-xs-12">
                                <div class="form-group">
                                  <select class="form-control form-control-sm select2" id="nota_order" name="nota_order">
                                    <option value="">--Pilih--</option>
                                    <option value="1">PO/20190123/1</option>

                                  </select>
                                </div>
                              </div>

                              <div class="col-md-3 col-sm-6 col-xs-12">
                                <label>Tanggal Order Pembelian</label>
                              </div>

                              <div class="col-md-3 col-sm-6 col-xs-12">
                                <div class="form-group">
                                  <input type="text" class="form-control form-control-sm" readonly="">
                                </div>
                              </div>
                              
                              <div class="col-md-3 col-sm-6 col-xs-12">
                                <label>Staff</label>
                              </div>

                              <div class="col-md-3 col-sm-6 col-xs-12">
                                <div class="form-group">
                                  <input type="text" class="form-control form-control-sm" readonly="">
                                </div>
                              </div>
                              
                              <div class="col-md-3 col-sm-6 col-xs-12">
                                <label>Suplier</label>
                              </div>

                              <div class="col-md-3 col-sm-6 col-xs-12">
                                <div class="form-group">
                                  <input type="text" class="form-control form-control-sm" readonly="">
                                </div>
                              </div>

                              <div class="col-md-3 col-sm-6 col-xs-12">
                                <label>Cara Bayar</label>
                              </div>

                              <div class="col-md-3 col-sm-6 col-xs-12">
                                <div class="form-group">
                                  <input type="text" class="form-control form-control-sm" readonly="">
                                </div>
                              </div>

                              <div class="col-12">
                                <button class="btn btn-primary btn-block btn-proses" type="button">Tampilkan</button>
                              </div>
                            </div>
                          </fieldset>

                          <div id="table-for">

                            <fieldset class="mt-3 d-none" id="front-end-show">

                              <h4><b>Pasir</b></h4> 
                              <span class="badge badge-pill badge-secondary">2 Rit</span>
                              <hr>

                              <div class="table-responsive mt-3">
                                
                                <table class="table table-bordered table-striped table-hover" id="table_barangmasuk" cellspacing="0">
                                  <thead class="bg-primary">
                                    <tr>
                                      <th>Kode | Barang</th>
                                      <th>Tanggal Datang</th>
                                      <th>Jam Datang</th>
                                      <th>Surat Jalan</th>
                                      <th>Plat Nomor</th>
                                      <th>Detail Kendaraan</th>
                                      <th>Kubikasi Muatan Bak (m<sup>3</sup>)</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <tr>
                                      <td>BRG/1</td>
                                      <td><input type="text" class="form-control-sm form-control datepicker" name=""></td>
                                      <td><input type="text" class="form-control-sm form-control datetimepicker" name=""></td>
                                      <td><input type="text" class="form-control-sm form-control" name=""></td>
                                      <td>
                                        <select class="select2 form-control form-control-sm">
                                          <option value="" selected="" disabled="">--Pilih--</option>
                                        </select>
                                      </td>
                                      <td align="center">
                                        <button type="button" class="btn btn-info btn-xs" data-toggle="modal" data-target="#detail_muatan">Detail</button>
                                      </td>
                                      <td><input type="text" class="form-control-sm form-control" name=""></td>

                                    </tr>
                                    <tr>
                                      <td>BRG/1</td>
                                      <td><input type="text" class="form-control-sm form-control datepicker" name=""></td>
                                      <td><input type="text" class="form-control-sm form-control datetimepicker" name=""></td>
                                      <td><input type="text" class="form-control-sm form-control" name=""></td>
                                      <td>
                                        <select class="select2 form-control form-control-sm">
                                          <option value="" selected="" disabled="">--Pilih--</option>
                                        </select>
                                      </td>
                                      <td align="center">
                                        <button type="button" class="btn btn-info btn-xs" data-toggle="modal" data-target="#detail_muatan">Detail</button>
                                      </td>
                                      <td><input type="text" class="form-control-sm form-control" name=""></td>

                                    </tr>
                                  </tbody>
                                </table>

                              </div>
                            </fieldset>

                          </div>

                        </section>
                    </div>
                    <div class="card-footer text-right">
                      <button class="btn btn-primary" type="button">Simpan</button>
                      <a href="{{route('pencatatanbarangmasuk')}}" class="btn btn-secondary">Kembali</a>
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

    var table = $('#table_barangmasuk').DataTable();
    var tabel_muatan = $('#tabel_muatan').DataTable({
                                          searching:false,
                                          paging:false
                                        });

    $('.btn-proses').click(function(){
      if($('#nota_order').val() === ''){
        $.toast({
          text:'Pilih Nota Terlebih Dahulu!',
          icon:'error'

        });
        $('#front-end-show').addClass('d-none');
      } else {
        $('#front-end-show').removeClass('d-none');
      }
    });



  });

</script>
@endsection