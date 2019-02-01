@extends('main')

@section('content')

<article class="content">

  <div class="title-block text-primary">
      <h1 class="title"> Tambah Data Customer </h1>
      <p class="title-description">
        <i class="fa fa-home"></i>&nbsp;<a href="{{url('/home')}}">Home</a>
         / <span>Master Data</span>
         / <a href="{{route('datacustomer')}}"><span>Data Customer</span></a>
         / <span class="text-primary" style="font-weight: bold;"> Tambah Data Customer</span>
       </p>
  </div>

  <section class="section">

    <div class="row">

      <div class="col-12">
        
        <div class="card">

                    <div class="card-header bordered p-2">
                      <div class="header-block">
                        <h3 class="title"> Tambah Data Customer </h3>
                      </div>
                      <div class="header-block pull-right">
                        <a href="{{route('datacustomer')}}" class="btn btn-secondary"><i class="fa fa-arrow-left"></i></a>
                      </div>
                    </div>

                    <div class="card-block">
                        <section>
                          
                          <div class="row">
                            
                            <div class="col-md-3 col-sm-6 col-xs-12">
                              <label>ID Customer</label>
                            </div> 

                            <div class="col-md-3 col-sm-6 col-xs-12">
                              <div class="form-group">
                                <input type="text" class="form-control form-control-sm" readonly="" name="">
                              </div>
                            </div>

                            <div class="col-md-3 col-sm-6 col-xs-12">
                              <label>Nama Customer</label>
                            </div> 

                            <div class="col-md-3 col-sm-6 col-xs-12">
                              <div class="form-group">
                                <input type="text" class="form-control form-control-sm" name="">
                              </div>
                            </div>

                            <div class="col-md-3 col-sm-6 col-xs-12">
                              <label>E-mail</label>
                            </div> 

                            <div class="col-md-3 col-sm-6 col-xs-12">
                              <div class="form-group">
                                <input type="text" class="form-control form-control-sm" name="">
                              </div>
                            </div>


                            <div class="col-md-3 col-sm-6 col-xs-12">
                              <label>No HP</label>
                            </div> 

                            <div class="col-md-3 col-sm-6 col-xs-12">
                              <div class="form-group">
                                <input type="text" class="form-control form-control-sm" name="">
                              </div>
                            </div>

                            <div class="col-md-3 col-sm-6 col-xs-12">
                              <label>Type Customer</label>
                            </div> 

                            <div class="col-md-3 col-sm-6 col-xs-12">
                              <div class="form-group">
                                <select class="form-control form-control-sm" id="type_cus">
                                  <option value="">-Pilih-</option>
                                  <option value="kontrak">Kontraktor</option>
                                  <option value="harian">Harian</option>
                                </select>
                              </div>
                            </div>

                            <div class="col-md-offset-9 col-md-3 col-sm-6 col-xs-12 d-none 120mm">
                              <label id="label_type_cus"></label>
                            </div> 

                            <div class="col-md-3 col-sm-6 col-xs-12 d-none 120mm">
                              <div class="form-group">
                                <input type="text" class="form-control form-control-sm" min="1" id="jumlah_hari_bulan" name="jumlah_hari_bulan">
                              </div>
                            </div>

                            <div class="col-md-offset-9 col-md-3 col-sm-6 col-xs-12 d-none 122mm">
                              <label>Pagu</label>
                            </div> 

                            <div class="col-md-3 col-sm-6 col-xs-12 d-none 122mm">
                              <div class="form-group">
                                <input type="text" style="text-align: right;"class="form-control form-control-sm  input-rupiah" id="pagu" name="pagu">
                              </div>
                            </div>

                            <div class="col-md-3 col-sm-6 col-xs-12 d-none 125mm">
                              <label>Armada</label>
                            </div> 

                            <div class="col-md-3 col-sm-6 col-xs-12 d-none 125mm">
                              <div class="form-group">
                                <select class="form-control form-control-sm select2" id="armada">
                                  <option value="">--Pilih--</option>
                                </select>
                              </div>
                            </div>


                          </div>
                          <div class="row">

                            <div class="col-md-3 col-sm-6 col-xs-12">
                              <label>Alamat</label>
                            </div> 

                            <div class="col-md-9 col-sm-6 col-xs-12">
                              <div class="form-group">
                                <textarea class="form-control" name="" id="" cols="30" rows="3"></textarea>
                              </div>
                            </div>

                          </div>

                          <div class="table-responsive">
                            
                            <table class="table table-bordered table-striped table-hover" id="tabel_nopol" cellspacing="0">
                              
                              <thead class="bg-primary">
                                <tr>
                                  <th rowspan="2">No</th>
                                  <th colspan="3">Plat Nomor Kendaraan</th>
                                  <th rowspan="2">Aksi</th>
                                </tr>
                                <tr>
                                  <th>Kode Wilayah</th>
                                  <th>Nomor Polisi</th>
                                  <th>Huruf Belakang</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <td>#</td>
                                  <td><input type="text" class="form-control form-control-sm" id="kode_wilayah" name=""></td>
                                  <td><input type="text" class="form-control form-control-sm" id="nomor_polisi" name=""></td>
                                  <td><input type="text" class="form-control form-control-sm" id="huruf_belakang" name=""></td>
                                  <td>
                                    <button class="btn btn-success btn-sm" id="btn-simpan"><i class="fa fa-check-square"></i></button>
                                    <button class="btn btn-warning btn-sm d-none" id="btn-edit"><i class="fa fa-pencil"></i></button>
                                  </td>
                                </tr>
                              </tbody>

                            </table>

                          </div>

                          <div class="table-responsive">

                            <table class="table table-bordered table-hover table-striped" id="tabel_kubik" cellspacing="0">

                              <thead class="bg-primary">
                                <tr>
                                  <th rowspan="2">No</th>
                                  <th rowspan="2">Suplier</th>
                                  <th rowspan="2">Plat Kendaraan</th>
                                  <th rowspan="2">Panjang</th>
                                  <th rowspan="2">Lebar</th>
                                  <th colspan="2">Tinggi</th>
                                  <th colspan="2">Kubikasi M<sup>3</sup></th>
                                </tr>
                                <tr>
                                  <th>Bak</th>
                                  <th>Muatan</th>
                                  <th>Bak</th>
                                  <th>Muatan</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <td>#</td>
                                  <td><input type="text" class="form-control form-control-sm" name=""></td>
                                  <td><input type="text" class="form-control form-control-sm" id="plat_nomor" readonly="" name=""></td>
                                  <td><input type="text" class="form-control form-control-sm" name=""></td>
                                  <td><input type="text" class="form-control form-control-sm" name=""></td>
                                  <td><input type="text" class="form-control form-control-sm" name=""></td>
                                  <td><input type="text" class="form-control form-control-sm" name=""></td>
                                  <td><input type="text" class="form-control form-control-sm" name=""></td>
                                  <td><input type="text" class="form-control form-control-sm" name=""></td>
                                </tr>
                              </tbody>

                            </table>

                          </div>
                        
                        </section>
                    </div>
                    <div class="card-footer text-right">
                      <button class="btn btn-primary btn-submit" type="button">Simpan</button>
                      <a href="{{route('datacustomer')}}" class="btn btn-secondary">Kembali</a>
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
    $('#type_cus').change(function(){
      if($(this).val() === 'kontrak'){
        $('#label_type_cus').text('Jatuh tempo');
        $('#jumlah_hari_bulan').val('');
        $('#pagu').val('');
        $('#armada').prop('selectedIndex', 0).trigger('change');
        $('.120mm').removeClass('d-none');
        $('.125mm').addClass('d-none');
        $('.122mm').removeClass('d-none');
      } else if($(this).val() === 'harian'){
        $('#label_type_cus').text('Jumlah Hari');
        $('#armada').prop('selectedIndex', 0).trigger('change');
        $('#pagu').val('');
        $('#jumlah_hari_bulan').val('');
        $('.122mm').addClass('d-none');
        $('.120mm').removeClass('d-none');
        $('.125mm').removeClass('d-none');
      } else {
        $('#jumlah_hari_bulan').val('');
        $('#armada').prop('selectedIndex', 0).trigger('change');
        $('#pagu').val('');
        $('.122mm').addClass('d-none');
        $('.120mm').addClass('d-none');
        $('.125mm').addClass('d-none');
      }
    });
    $(document).on('click', '.btn-submit', function(){
			$.toast({
				heading: 'Success',
				text: 'Data Berhasil di Simpan',
				bgColor: '#00b894',
				textColor: 'white',
				loaderBg: '#55efc4',
				icon: 'success'
			})
		});

    $('#btn-simpan').click(function(){
      console.log('simpan');

      var kode_wilayah, nomor_polisi, huruf_belakang, nopol;

      kode_wilayah =  $('#kode_wilayah').val();
      nomor_polisi =  $('#nomor_polisi').val();
      huruf_belakang =  $('#huruf_belakang').val();

      nopol = kode_wilayah + ' ' + nomor_polisi + ' ' + huruf_belakang;

      $('#plat_nomor').val(nopol);

      $('#tabel_nopol tbody').find('input').attr('readonly', true);


      $('#btn-edit').removeClass('d-none');
      $(this).addClass('d-none');

    });

    $('#btn-edit').click(function(){
      console.log('edit');
      $('#tabel_nopol tbody').find('input').attr('readonly', false);

      $('#btn-simpan').removeClass('d-none');
      $(this).addClass('d-none');

    });
  });
</script>
@endsection