@extends('main')

@section('content')

<article class="content">

  <div class="title-block text-primary">
      <h1 class="title"> Tambah Return Penjualan </h1>
      <p class="title-description">
        <i class="fa fa-home"></i>&nbsp;<a href="{{url('/home')}}">Home</a> 
        / <span>Penjualan</span> 
        / <a href="{{route('returnpenjualan')}}"><span>Return Penjualan</span> </a>
        / <span class="text-primary font-weight-bold">Tambah Return Penjualan</span>
       </p>
  </div>

  <section class="section">

    <div class="row">

      <div class="col-12">
        
        <div class="card">
                    <div class="card-block">
                        <div class="card-title-block">
                            <h3 class="title"> Tambah Return Penjualan </h3>
                        </div>
                        <section>
                            
                          <div class="row">
                            <div class="col-md-3 col-sm-6 col-xs-12">
                              <label>Metode Return</label>
                            </div>

                            <div class="col-md-3 col-sm-6 col-xs-12">
                              <div class="form-group">
                                <select class="form-control form-control-sm">
                                  <option value=""> - Pilih Metode Return</option>
                                  <option value="PN"> Potong Nota </option>
                                  <option value="TB"> Tukar Barang </option>
                                  <option value="SB"> Salah Barang </option>
                                  <option value="SA"> Salah Alamat </option>
                                </select>
                              </div>
                            </div>
                          </div>

                          <div id="salah_barang">
                            <fieldset>
                              <div class="row">

                                <div class="col-md-3 col-sm-6 col-xs-12">
                                  <label>Nota Penjualan</label>
                                </div>

                                <div class="col-md-3 col-sm-6 col-xs-12">
                                  <div class="form-group">
                                    <select class="form-control form-control-sm select2">
                                      <option>--Pilih--</option>
                                    </select>
                                  </div>
                                </div>

                                <div class="col-md-3 col-sm-6 col-xs-12">
                                  <label>No Resi dari Cus</label>
                                </div>

                                <div class="col-md-3 col-sm-6 col-xs-12">
                                  <div class="form-group">
                                    <input type="text" class="form-control form-control-sm" name="">
                                  </div>
                                </div>

                                <div class="col-md-3 col-sm-6 col-xs-12">
                                  <label>Tanggal Return</label>
                                </div>

                                <div class="col-md-3 col-sm-6 col-xs-12">
                                  <div class="form-group">
                                    <input type="text" class="form-control form-control-sm datepicker" value="{{date('d-m-Y')}}" name="">
                                  </div>
                                </div>

                                <div class="col-md-3 col-sm-6 col-xs-12">
                                  <label>Metode Pembayaran</label>
                                </div>

                                <div class="col-md-3 col-sm-6 col-xs-12">
                                  <div class="form-group">
                                    <input type="text" class="form-control form-control-sm" readonly="" name="">
                                  </div>
                                </div>

                              </div>
                            </fieldset>

                            <div class="row mt-3">

                              <div class="col-md-3 col-sm-12">
                                <label>Detail Pelanggan</label>
                              </div>

                              <div class="col-md-9 col-sm-12">
                                <div class="form-group">
                                  <input type="text" class="form-control form-control-sm" readonly="" name="">
                                </div>
                              </div>

                              <div class="col-md-3 col-sm-6 col-xs-12">
                                <label>Kirim</label>
                              </div>

                              <div class="col-md-3 col-sm-6 col-xs-12">
                                <div class="form-group">
                                  <input type="text" class="form-control-sm form-control" readonly="" name="">
                                </div>
                              </div>

                              <div class="col-md-3 col-sm-6 col-xs-12">
                                <label>S Gross</label>
                              </div>

                              <div class="col-md-3 col-sm-6 col-xs-12">
                                <div class="form-group">
                                  <input type="text" class="form-control-sm form-control" readonly="" name="">
                                </div>
                              </div>

                              <div class="col-md-3 col-sm-6 col-xs-12">
                                <label>Total Diskon</label>
                              </div>

                              <div class="col-md-3 col-sm-6 col-xs-12">
                                <div class="form-group">
                                  <input type="text" class="form-control-sm form-control" readonly="" name="">
                                </div>
                              </div>

                              <div class="col-md-3 col-sm-6 col-xs-12">
                                <label>Total Penjualan (NETT)</label>
                              </div>

                              <div class="col-md-3 col-sm-6 col-xs-12">
                                <div class="form-group">
                                  <input type="text" class="form-control-sm form-control" readonly="" name="">
                                </div>
                              </div>

                            </div>

                            <div class="table-responsive mt-3">
                              <table class="table table-hover table-striped" cellspacing="0">
                                <thead class="bg-primary">
                                  <tr>
                                    <th>Nama</th>
                                    <th>Jumlah</th>
                                    <th>Kirim</th>
                                    <th>Satuan</th>
                                    <th>Harga</th>
                                    <th>Disc Percent</th>
                                    <th>Disc Value</th>
                                    <th>Jumlah Kirim</th>
                                    <th>Total Barang Sesuai</th>
                                  </tr>
                                </thead>
                              </table>
                            </div>

                            <h4>Masukkan Item Salah Kirim :</h4>

                            <fieldset class="mt-3">
                              <div class="row">

                                <div class="col-md-6 col-sm-6 col-xs-12">
                                  <label>Masukan Kode / Nama</label>
                                  <div class="form-group">
                                    <select class="form-control form-control-sm select2">
                                      <option>--Pilih--</option>
                                    </select>
                                  </div>
                                </div>

                                <div class="col-md-3 col-sm-3 col-xs-12">
                                  <label>Masukan Jumlah</label>
                                  <div class="form-group">
                                    <div class="input-group">
                                      <input type="number" class="form-control form-control-sm" name="">
                                      <div class="input-group-append">
                                        <button class="btn btn-sm btn-primary" type="button"><i class="fa fa-plus"></i></button>
                                      </div>
                                    </div>
                                  </div>
                                </div>

                                <div class="col-md-3 col-sm-3 col-xs-12">
                                  <label>Kuantitas Stok</label>
                                  <div class="form-group">
                                    <input type="text" class="form-control form-control-sm" readonly="" name="">
                                  </div>
                                </div>

                              </div>
                            </fieldset>

                            <div class="table-responsive mt-3">
                              <table class="table table-hover table-striped data-table" cellspacing="0">
                                <thead class="bg-primary">
                                  <tr>
                                    <th>Nama</th>
                                    <th width="15%">Jumlah</th>
                                    <th width="15%">Satuan</th> 
                                    <th width="10%"></th>
                                  </tr>
                                </thead>
                              </table>
                            </div>
                          </div>

                        </section>
                    </div>
                    <div class="card-footer text-right">
                      <button class="btn btn-primary" type="button">Simpan</button>
                      <a href="{{route('returnpenjualan')}}" class="btn btn-secondary">Kembali</a>
                    </div>
                </div>

      </div>

    </div>

  </section>

</article>

@endsection