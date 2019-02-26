@extends('main')

@section('content')


<article class="content">

  <div class="title-block text-primary">
      <h1 class="title"> Tambah Data Barang </h1>
      <p class="title-description">
        <i class="fa fa-home"></i>&nbsp;<a href="{{url('/home')}}">Home</a>
         / <span>Master Data</span>
         / <a href="{{route('databarang')}}"><span>Data Barang</span></a>
         / <span class="text-primary" style="font-weight: bold;">Tambah Data Barang</span>
       </p>
  </div>
<form id="formsukses">
  <section class="section">

    <div class="row">

      <div class="col-12">
        
        <div class="card">
                    <div class="card-header bordered p-2">
                      <div class="header-block">
                        <h3 class="title">Tambah Data Barang </h3>
                      </div>
                      <div class="header-block pull-right">
                        <a href="{{route('databarang')}}" class="btn btn-secondary"><i class="fa fa-arrow-left"></i></a>
                      </div>
                    </div>
                    <div class="card-block">
                        <section>

                          <div class="row">

                            <div class="col-md-3 col-sm-6 col-xs-12">
                              <label>Nama Barang</label>
                            </div>

                            <div class="col-md-9 col-sm-6 col-xs-12">
                              <div class="form-group">
                                <input type="text" class="form-control form-control-sm data" name="nama_barang" required="">
                              </div>
                            </div>

                            <div class="col-md-3 col-sm-6 col-xs-12">
                              <label>Type Barang</label>
                            </div>

                            <div class="col-md-9 col-sm-6 col-xs-12">
                              <div class="form-group">
                                <select class="form-control form-control-sm tipe_barang data" name="tipe_barang" required="">
                                  <option value="" selected="" disabled="">--Pilih Type Barang--</option>
                                  <option value="BB">Bahan Baku</option>
                                  <option value="SP">Spare Part</option>
                                  <option value="BJ">Barang Jual</option>
                                  <option value="LL">Lain-lain</option>
                                  <option value="BP">Barang Produksi</option>
                                </select>
                              </div>
                            </div>

                            <div class="col-md-3 col-sm-6 col-xs-12">
                              <label>Kelompok Barang</label>
                            </div>

                            <div class="col-md-9 col-sm-6 col-xs-12">
                              <div class="form-group">
                                <select class="form-control form-control-sm data" name="kelompok_barang" required="">
                                  <option value="" selected="" disabled="">--Pilih Kelompok Barang--</option>
                               
                                  <option value="BSJ">Barang Setengah Jadi</option>
                                  <option value="BJD">Barang Jadi</option>
                                </select>
                              </div>
                            </div>
                            
                            <div class="col-md-3 col-sm-6 col-xs-12">
                              <label>Kode Barang</label>
                            </div>

                            <div class="col-md-3 col-sm-6 col-xs-12">
                              <div class="form-group">
                                <input type="text" class="form-control form-control-sm kode_barang data" readonly="" name="kode_barang" required="">
                              </div>
                            </div>

                            <div class="col-md-3 col-sm-6 col-xs-12">
                              <label>Min Stock</label>
                            </div>

                            <div class="col-md-3 col-sm-6 col-xs-12">
                              <div class="form-group">
                                <input type="number" class="form-control form-control-sm data" name="min_stock" required="">
                              </div>
                            </div>

                            <div class="col-md-3 col-sm-6 col-xs-12">
                              <label>Satuan Utama</label>
                            </div>

                            <div class="col-md-3 col-sm-6 col-xs-12">
                              <div class="form-group">
                                <select class="form-control form-control-sm satuan_utama data" name="satuan_utama" required="">
                                  <option value="">--Pilih--</option>
                                   @foreach($data['satuan'] as $satuan)
                                    <option value="{{$satuan->s_id}}"> {{$satuan->s_name}} </option>
                                  @endforeach
                                </select>
                              </div>
                            </div>

                            <div class="col-md-3 col-sm-6 col-xs-12">
                              <label>Isi Satuan Utama</label>
                            </div>

                            <div class="col-md-3 col-sm-6 col-xs-12">
                              <div class="form-group">
                               <input type="number" class="form-control-sm form-control isi_satuan_utama data" min="0"  name="isi_satuan_utama" required="" readonly="" value="1">
                                <input type="hidden" class="form-control-sm form-control"  value="1" name="username">
                              </div>
                            </div>

                            <div class="col-md-3 col-sm-6 col-xs-12">
                              <label>Satuan Alternatif 1</label>
                            </div>

                            <div class="col-md-3 col-sm-6 col-xs-12">
                              <div class="form-group">
                                <select class="form-control form-control-sm satuan_1" name="satuan_1" required="">
                                  <option value="">--Pilih--</option>
                                   @foreach($data['satuan'] as $satuan)
                                    <option value="{{$satuan->s_id}}"> {{$satuan->s_name}} </option>
                                  @endforeach
                                </select>
                              </div>
                            </div>

                            <div class="col-md-3 col-sm-6 col-xs-12">
                              <label>Isi Satuan Alternatif 1</label>
                            </div>

                            <div class="col-md-3 col-sm-6 col-xs-12">
                              <div class="form-group">
                               <input type="number" class="form-control-sm form-control isi_satuan_1" min="0" name="isi_satuan_1">
                              </div>
                            </div>

                            <div class="col-md-3 col-sm-6 col-xs-12">
                              <label>Satuan Alternatif 2</label>
                            </div>

                            <div class="col-md-3 col-sm-6 col-xs-12">
                              <div class="form-group">
                                <select class="form-control form-control-sm satuan_2" name="satuan_2">
                                  <option value="">--Pilih--</option>
                                  @foreach($data['satuan'] as $satuan)
                                    <option value="{{$satuan->s_id}}"> {{$satuan->s_name}} </option>
                                  @endforeach
                                </select>
                              </div>
                            </div>

                            <div class="col-md-3 col-sm-6 col-xs-12">
                              <label>Isi Satuan Alternatif 2</label>
                            </div>

                            <div class="col-md-3 col-sm-6 col-xs-12">
                              <div class="form-group">
                               <input type="number" class="form-control-sm form-control isi_satuan_2" min="0" name="isi_satuan_2">
                              </div>
                            </div>


                            <div class="col-md-3 col-sm-6 col-xs-12">
                              <label>Harga Persatuan</label>
                            </div>
                            
                            <div class="col-md-3 col-sm-6 col-xs-12">
                              <label>Harga Satuan Utama</label>
                              <div class="form-group">
                               <input type="text" class="form-control-sm form-control harga harga_satuan_utama text-right data" name="harga_satuan_utama" required="">
                              </div>
                            </div>

                            <div class="col-md-3 col-sm-6 col-xs-12">
                              <label>Harga Satuan Alternatif 1</label>
                              <div class="form-group">
                               <input type="text" class="form-control-sm form-control harga harga_satuan_1 text-right" name="harga_satuan_1" readonly="">
                              </div>
                            </div>

                            <div class="col-md-3 col-sm-6 col-xs-12">
                              <label>Harga Satuan Alternatif 2</label>
                              <div class="form-group">
                               <input type="text" class="form-control-sm form-control harga harga_satuan_2  text-right" name="harga_satuan_2" readonly="">
                              </div>
                            </div>

                            <div class="col-md-3 col-sm-6 col-xs-12">
                              <label>Detail</label>
                            </div>

                            <div class="col-md-9 col-sm-6 col-xs-12">
                              <div class="form-group">
                                <textarea class="form-control data" name="detail" required=""></textarea>
                              </div>
                            </div>

                            <div class="col-md-3 col-sm-6 col-xs-12">
                              <label>Persentase Produksi Rusak</label>
                            </div>

                            <div class="col-md-3 col-sm-6 col-xs-12">
                              <div class="form-group">
                                <div class="input-group">
                                  <input type="number" class="form-control-sm form-control persentase data" max="100" min="0" step="0.1" name="persentase" required="">
                                  <span class="input-group-addon">
                                    %
                                  </span>
                                </div>
                              </div>
                            </div>



                          </div>

                        </section>
                    </div>

                    <div class="card-footer text-right">
                      <button class="btn btn-primary btn-submit simpan" type="button">Simpan</button>
                      <a href="{{route('databarang')}}" class="btn btn-secondary">Kembali</a>
                    </div>
                </div>

      </div>

    </div>

  </section>
</form>
</article>

@endsection
@section('extra_script')
<script type="text/javascript">

   function addCommas(nStr) {
            nStr += '';
            x = nStr.split('.');
            x1 = x[0];
            x2 = x.length > 1 ? ',' + x[1] : '';
            var rgx = /(\d+)(\d{3})/;
            while (rgx.test(x1)) {
                x1 = x1.replace(rgx, '$1' + '.' + '$2');
            }
            return x1 + x2;
    }

  $('.isi_satuan_1').change(function(){
    isi_satuan_1 = $(this).val();
    satuan_1 = $('.satuan_1').val();
    harga = $('.harga_satuan_utama').val();
    if(satuan_1 == ''){
       $.toast({
              heading: 'Warning',
              text: 'Satuan Alternatif 1 Tidak di isi :)',
              showHideTransition: 'plain',
              icon: 'warning'
          });
         $(this).val('');
    }
    else {
      if(harga != ''){
        if(isi_satuan_1 != ''){
                 harga = harga.replace(/\./g,'');
                 harga = harga.replace(/,/g,'.');
        
                 hasilharga2 = parseFloat(parseFloat(isi_satuan_1) * parseFloat(harga)).toFixed(2);
        
                $('.harga_satuan_1').val(addCommas(hasilharga2));
          }
          else {
            $('.harga_satuan_1').val('');
          }
      }
    }
  });


   $('.isi_satuan_2').change(function(){
    isi_satuan_1 = $(this).val();
    satuan_1 = $('.satuan_2').val();
    harga = $('.harga_satuan_utama').val();
    if(satuan_1 == ''){
       $.toast({
              heading: 'Warning',
              text: 'Satuan Alternatif 2 Tidak di isi :)',
              showHideTransition: 'plain',
              icon: 'warning'
          });
         $(this).val('');
    }
    else {
      if(harga != ''){
         if(isi_satuan_1 != ''){
              harga = harga.replace(/\./g,'');
             harga = harga.replace(/,/g,'.');

             hasilharga2 = parseFloat(parseFloat(isi_satuan_1) * parseFloat(harga)).toFixed(2);

            $('.harga_satuan_2').val(addCommas(hasilharga2));
         }
         else {
          $('.harga_satuan_2').val('');
         }
      }
    }
  });
   $('.harga_satuan_utama').change(function(){
    satuan_1 = $('.satuan_1').val();
    harga = $(this).val();
    harga = harga.replace(/\./g,'');
    harga = harga.replace(/,/g,'.');
    if(satuan_1 != ''){
      isi_satuan_1 = $('.isi_satuan_1').val();
      

       hasilharga = parseFloat(parseFloat(isi_satuan_1) * parseFloat(harga));
       $('.harga_satuan_1').val(hasilharga);
    }

      satuan_2 = $('.satuan_2').val();
    if(satuan_2 != ''){
      isi_satuan_2 = $('.isi_satuan_2').val();
      if(isi_satuan_2 != ''){
          hasilharga2 = parseFloat(parseFloat(isi_satuan_2) * parseFloat(harga)).toFixed(2);

        $('.harga_satuan_2').val(addCommas(hasilharga2));
      }     
    }
   });

   $('.harga_satuan_1').change(function(){
      isi_satuan_1 = $(this).val();
      satuan_1 = $('.satuan_1').val();

    
      if(satuan_1 == ''){
         $.toast({
                heading: 'Warning',
                text: 'Satuan Alternatif 1 Tidak di isi :)',
                showHideTransition: 'plain',
                icon: 'warning'
            });
           $(this).val('');
      }


   });

   $('.harga_satuan_2').change(function(){
      isi_satuan_1 = $(this).val();
      satuan_1 = $('.satuan_2').val();
      if(satuan_1 == ''){
         $.toast({
                heading: 'Warning',
                text: 'Satuan Alternatif 2 Tidak di isi :)',
                showHideTransition: 'plain',
                icon: 'warning'
            });
           $(this).val('');
      }
   });

  $('.tipe_barang').change(function(){
    tipe_barang = $(this).val();

    $.ajax({
      data : {tipe_barang},
      type : "get",
      url : baseUrl + '/master/databarang/tipe_barang',
      dataType : "json",
      success : function(response){
        console.log(response);
        console.log('response');
          $('.kode_barang').val(response);
      }
    })
  })

  $('.harga').maskMoney({thousands:'.', decimal:',', precision:2});

  $(document).ready(function(){
    $(document).on('click', '.btn-submit', function(){
      form_data = $('#formsukses').serialize();
      satuan_utama = $('.satuan_utama').val();
      satuan_1 = $('.satuan_1').val();
      satuan_2 = $('.satuan_2').val();

      if(satuan_utama != ''){
        isi_satuan_utama = $('.isi_satuan_utama').val();
        harga_satuan_utama = $('.harga_satuan_utama').val();

        if(isi_satuan_utama == ''){
          $.toast({
              heading: 'Warning',
              text: 'Satuan Utama Belum di isi :)',
              showHideTransition: 'plain',
              icon: 'warning'
          });
          return false;
        }
        if(harga_satuan_utama == ''){
           $.toast({
              heading: 'Warning',
              text: 'Harga Utama Belum di isi :)',
              showHideTransition: 'plain',
              icon: 'warning'
          });
            return false;
        }

      } // satuan utama

      if(satuan_1 != ''){
        isi_satuan_1 = $('.isi_satuan_1').val();
       harga_satuan_1 = $('.harga_satuan_1').val();

        if(isi_satuan_1 == ''){
           $.toast({
              heading: 'Warning',
              text: 'Satuan Alternatif 1 Belum di isi :)',
              showHideTransition: 'plain',
              icon: 'warning'
          });
            return false;
        }
        if(harga_satuan_1== ''){
           $.toast({
              heading: 'Warning',
              text: 'Harga Satuan 1 Belum di isi :)',
              showHideTransition: 'plain',
              icon: 'warning'
          });
            return false;
        }
      } // satuan 1

      if(satuan_2 != ''){
        isi_satuan_2 = $('.isi_satuan_2').val();
        harga_satuan_2 = $('.harga_satuan_2').val();

        if(isi_satuan_2 == ''){
           $.toast({
              heading: 'Warning',
              text: 'Satuan Alternatif 2 Belum di isi :)',
              showHideTransition: 'plain',
              icon: 'warning'
          });
            return false;
        }

        if(harga_satuan_2 == ''){
           $.toast({
              heading: 'Warning',
              text: 'Harga Alternatif 2 Belum di isi :)',
              showHideTransition: 'plain',
              icon: 'warning'
          });
            return false;
        }
      } // end satuan 2

      data = $('.data').val();
      if(data == ''){
         $.toast({
              heading: 'Warning',
              text: 'Mohon Lengkapi Data :)',
              showHideTransition: 'plain',
              icon: 'warning'
          });
            return false;
      }

       $.confirm({
        animation: 'RotateY',
        closeAnimation: 'scale',
        icon: 'fa fa-disc',
          title: 'Simpan',
        content: 'Apa anda yakin mau Simpan data ini?',
        theme: 'disable',
          buttons: {
              info: {
            btnClass: 'btn-blue',
                text:'Ya',
                action : function(){
                 
                    $.ajax({
                      data : form_data,
                      url : baseUrl + '/master/databarang/save',
                      dataType : "json",
                      type : "post",
                      success : function(response){
                        $(this).attr('disabled' , true);
                        $.toast({
                            heading: 'Success',
                            text: 'Data Berhasil di Simpan',
                            bgColor: '#00b894',
                            textColor: 'white',
                            loaderBg: '#55efc4',
                            icon: 'success'
                          })
                          $('.simpan').attr('disabled' , true);

                          setTimeout(function(){
                          window.location.href = baseUrl + '/master/databarang/index';
                             
                            },500);
                      }
                    });
             
                }
              },
              cancel:{
                text: 'Tidak',
              action: function () {
                      // tutup confirm
                  }
              }
          }
      });
			
		});




    $('.persentase').on('keyup blur focus', function(){
      // console.log('persentase');
      var min, max, ini;

      ini = $(this);

      min = 0;

      max = 100;

      if(parseFloat(ini.val()) > max){
        ini.val(max);
      }

    });
  });
</script>
@endsection