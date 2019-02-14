<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Auth::routes();

Route::group(['middleware' => 'guest'], function(){

	Route::get('/home', 'HomeController@index')->name('home');

	// Master
	Route::get('/master/databarang/index', 'MasterBarangController@databarang')->name('databarang');
	Route::get('/master/databarang/create', 'MasterBarangController@tambah_databarang')->name('tambah_databarang');
	Route::get('/master/databarang/edit/{id}', 'MasterBarangController@edit_databarang')->name('edit_databarang');
	Route::get('/master/databarang/tipe_barang', 'MasterBarangController@tipe_barang');
	Route::post('/master/databarang/save', 'MasterBarangController@save_barang');
	Route::post('/master/databarang/update', 'MasterBarangController@update');
	Route::get('/master/databarang/disabled', 'MasterBarangController@disabled');


	Route::get('/master/datasuplier/index', 'MasterController@datasuplier')->name('datasuplier');
	Route::get('/master/datasuplier/create', 'MasterController@tambah_datasuplier')->name('tambah_datasuplier');
	Route::get('/master/datasuplier/edit', 'MasterController@edit_datasuplier')->name('edit_datasuplier');
	Route::get('/master/dataarmada/index', 'MasterController@dataarmada')->name('dataarmada');
	Route::get('/master/dataarmada/create', 'MasterController@tambah_dataarmada_own')->name('tambah_dataarmada_own');
	Route::get('/master/dataarmada/suplier/create', 'MasterController@tambah_dataarmada')->name('tambah_dataarmada');
	Route::get('/master/dataarmada/suplier/edit', 'MasterController@edit_dataarmada')->name('edit_dataarmada');
	Route::get('/master/dataarmada/customer/create', 'MasterController@tambah_dataarmada_customer')->name('tambah_dataarmada_customer');
	Route::get('/master/dataarmada/modal_dataarmada', 'MasterController@modal_dataarmada')->name('modal_dataarmada');
	Route::get('/master/datacustomer/datacustomer', 'MasterController@datacustomer')->name('datacustomer');
	Route::get('/master/datacustomer/tambah_datacustomer', 'MasterController@tambah_datacustomer')->name('tambah_datacustomer');
	Route::get('/master/datacustomer/edit_datacustomer', 'MasterController@edit_datacustomer')->name('edit_datacustomer');
	Route::get('/master/datapegawai/datapegawai', 'MasterController@datapegawai')->name('datapegawai');
	Route::get('/master/datapegawai/tambah_datapegawai', 'MasterController@tambah_datapegawai')->name('tambah_datapegawai');
	Route::get('/master/datapegawai/edit_datapegawai', 'MasterController@edit_datapegawai')->name('edit_datapegawai');
	

	Route::get('/master/datasatuan/datasatuan', 'MasterController@datasatuan')->name('datasatuan');
	Route::get('/master/datasatuan/tambah_datasatuan', 'MasterController@tambah_datasatuan')->name('tambah_datasatuan');
	Route::get('/master/datasatuan/edit_datasatuan/{id}', 'MasterController@edit_datasatuan');
	Route::post('/master/datasatuan/save', 'MasterController@save_datasatuan');
	Route::post('/master/datasatuan/update', 'MasterController@update_satuan');
	Route::post('/master/datasatuan/disabled', 'MasterController@disabeld_satuan');

	Route::get('/master/datamesin/datamesin', 'MasterController@datamesin')->name('datamesin');
	Route::get('/master/datamesin/tambah_datamesin', 'MasterController@tambah_datamesin')->name('tambah_datamesin');
	Route::get('/master/datamesin/edit_datamesin', 'MasterController@edit_datamesin')->name('edit_datamesin');
	Route::get('/master/datacustomer/index', 'MasterController@datacustomer')->name('datacustomer');
	Route::get('/master/datacustomer/create', 'MasterController@tambah_datacustomer')->name('tambah_datacustomer');
	Route::get('/master/datacustomer/edit', 'MasterController@edit_datacustomer')->name('edit_datacustomer');
	Route::get('/master/datapegawai/index', 'MasterController@datapegawai')->name('datapegawai');
	Route::get('/master/datapegawai/create', 'MasterController@tambah_datapegawai')->name('tambah_datapegawai');
	Route::get('/master/datapegawai/edit', 'MasterController@edit_datapegawai')->name('edit_datapegawai');
	Route::get('/master/datasatuan/index', 'MasterController@datasatuan')->name('datasatuan');
	Route::get('/master/datasatuan/create', 'MasterController@tambah_datasatuan')->name('tambah_datasatuan');
	Route::get('/master/datasatuan/edit', 'MasterController@edit_datasatuan')->name('edit_datasatuan');
	Route::get('/master/barangsuplier/barangsuplier', 'MasterController@barangsuplier')->name('barangsuplier');
	Route::get('/master/barangsuplier/tambah_barang', 'MasterController@tambah_barang')->name('tambah_barang');
	Route::get('/master/barangsuplier/edit_barang', 'MasterController@edit_barang')->name('edit_barang');
	Route::get('/master/barangsuplier/tambah_suplier', 'MasterController@tambah_suplier')->name('tambah_suplier');
	Route::get('/master/barangsuplier/edit_suplier', 'MasterController@edit_suplier')->name('edit_suplier');
	Route::get('/master/ongkoskirim/index', 'MasterController@ongkoskirim')->name('ongkoskirim');
	Route::get('/master/ongkoskirim/create', 'MasterController@tambah_ongkoskirim')->name('tambah_ongkoskirim');

	Route::get('/master/datatunjangan/index', 'MasterController@datatunjangan')->name('datatunjangan');
	Route::get('/master/datatunjangan/create', 'MasterController@tambah_datatunjangan')->name('tambah_datatunjangan');


	// Purchasing
	Route::get('/purchasing/rencanapembelian/rencanapembelian', 'PurchaseController@rencanapembelian')->name('rencanapembelian');
	Route::get('/purchasing/rencanapembelian/tambah_rencanapembelian', 'PurchaseController@tambah_rencanapembelian')->name('tambah_rencanapembelian');
	Route::get('/purchasing/orderpembelian/orderpembelian', 'PurchaseController@orderpembelian')->name('orderpembelian');
	Route::get('/purchasing/orderpembelian/tambah_orderpembelian', 'PurchaseController@tambah_orderpembelian')->name('tambah_orderpembelian');
	Route::get('/purchasing/orderpembelian/tambah_orderpembelian_tanparencana', 'PurchaseController@tambah_orderpembelian_tanparencana')->name('tambah_orderpembelian_tanparencana');
	Route::get('/purchasing/returnpembelian/returnpembelian', 'PurchaseController@returnpembelian')->name('returnpembelian');
	Route::get('/purchasing/returnpembelian/tambah_returnpembelian', 'PurchaseController@tambah_returnpembelian')->name('tambah_returnpembelian');
	Route::get('/purchasing/rencanabahanbaku/rencanabahanbaku', 'PurchaseController@rencanabahanbaku')->name('rencanabahanbaku');

	// Stok
	Route::get('/stok/dataadonan/index', 'StokController@dataadonan')->name('dataadonan');
	Route::get('/stok/dataadonan/create', 'StokController@tambah_dataadonan')->name('tambah_dataadonan');
	Route::get('/stok/dataadonan/edit', 'StokController@edit_dataadonan')->name('edit_dataadonan');
	Route::get('/stok/opnamebahanbaku/index', 'StokController@opnamebahanbaku')->name('opnamebahanbaku');
	Route::get('/stok/pencatatanbarangmasuk/index', 'StokController@pencatatanbarangmasuk')->name('pencatatanbarangmasuk');
	Route::get('/stok/pencatatanbarangmasuk/create', 'StokController@tambah_pencatatanbarangmasuk')->name('tambah_pencatatanbarangmasuk');
	Route::get('/stok/penggunaanbahanbaku/index', 'StokController@penggunaanbahanbaku')->name('penggunaanbahanbaku');
	Route::get('/stok/penggunaanbahanbaku/create', 'StokController@tambah_penggunaanbahanbaku')->name('tambah_penggunaanbahanbaku');
	Route::get('/stok/tipemenghitunghpp/index', 'StokController@tipemenghitunghpp')->name('tipemenghitunghpp');


	// Produksi
	Route::get('/produksi/pencatatanhasil/index', 'ProduksiController@pencatatanhasil')->name('pencatatanhasil');
	Route::get('/produksi/pencatatanhasil/denganrencana/process', 'ProduksiController@proses_pencatatanhasil')->name('proses_pencatatanhasil');
	Route::get('/produksi/pencatatanhasil/tanparencana/process', 'ProduksiController@proses_pencatatanhasiltanparencana')->name('proses_pencatatanhasiltanparencana');
	Route::get('/produksi/perencanaanproduksi/perencanaanproduksi', 'ProduksiController@perencanaanproduksi')->name('perencanaanproduksi');
	Route::get('/produksi/produksirencana/index', 'ProduksiController@produksirencana')->name('produksirencana');
	Route::get('/produksi/produksirencana/create', 'ProduksiController@tambah_produksirencana')->name('tambah_produksirencana');
	Route::get('/produksi/produksitanparencana/index', 'ProduksiController@produksitanparencana')->name('produksitanparencana');
	Route::get('/produksi/produksitanparencana/create', 'ProduksiController@tambah_produksitanparencana')->name('tambah_produksitanparencana');
	Route::get('/produksi/upahboronganproduksi/upahboronganproduksi', 'ProduksiController@upahboronganproduksi')->name('upahboronganproduksi');
	Route::get('/produksi/upahboronganproduksi/proses_upahboronganproduksi', 'ProduksiController@proses_upahboronganproduksi')->name('proses_upahboronganproduksi');
	Route::get('/produksi/spk/spk', 'ProduksiController@spk')->name('spk_produksi');

	// Customer
	Route::get('/customer/historitransaksi/index', 'CustomerController@historitransaksi')->name('historitransaksi');

	// Penjualan
	Route::get('/penjualan/diskonpenjualan/index', 'PenjualanController@diskonpenjualan')->name('diskonpenjualan');
	Route::get('/penjualan/diskonpenjualan/create', 'PenjualanController@tambah_diskonpenjualan')->name('tambah_diskonpenjualan');
	Route::get('/penjualan/penjualanorder/index', 'PenjualanController@penjualanorder')->name('penjualanorder');
	Route::get('/penjualan/penjualanproject/index', 'PenjualanController@penjualanproject')->name('penjualanproject');
	Route::get('/penjualan/penjualantanpaorder/index', 'PenjualanController@penjualantanpaorder')->name('penjualantanpaorder');
	Route::get('/penjualan/penjualantanpaorder/create', 'PenjualanController@tambah_penjualantanpaorder')->name('tambah_penjualantanpaorder');
	Route::get('/penjualan/returnpenjualan/index', 'PenjualanController@returnpenjualan')->name('returnpenjualan');
	Route::get('/penjualan/returnpenjualan/create', 'PenjualanController@tambah_returnpenjualan')->name('tambah_returnpenjualan');


	// Pengiriman
	Route::get('/pengiriman/perencanaanpengiriman/index', 'PengirimanController@perencanaanpengiriman')->name('perencanaanpengiriman');
	Route::get('/pengiriman/perencanaanpengiriman/create', 'PengirimanController@tambah_perencanaanpengiriman')->name('tambah_perencanaanpengiriman');
	Route::get('/pengiriman/suratjalan/index', 'PengirimanController@suratjalan')->name('suratjalan');
	Route::get('/pengiriman/suratjalan/create', 'PengirimanController@tambah_suratjalan')->name('tambah_suratjalan');
	Route::get('/pengiriman/suratjalan/print', 'PengirimanController@print_suratjalan')->name('print_suratjalan');
	Route::get('/pengiriman/upahboronganpengiriman/index', 'PengirimanController@upahboronganpengiriman')->name('upahboronganpengiriman');
	Route::get('/pengiriman/upahboronganpengiriman/upah/process', 'PengirimanController@proses_upahboronganpengiriman')->name('proses_upahboronganpengiriman');
	Route::get('/pengiriman/upahboronganpengiriman/operasional/process', 'PengirimanController@proses_operasionaljalan')->name('proses_operasionaljalan');

	// Biaya dan Beban
	Route::get('/biayadanbeban/alattuliskantor/alattuliskantor', 'BiayaController@alattuliskantor')->name('alattuliskantor');
	Route::get('/biayadanbeban/biayabahanbakar/biayabahanbakar', 'BiayaController@biayabahanbakar')->name('biayabahanbakar');
	Route::get('/biayadanbeban/biayakesehatan/biayakesehatan', 'BiayaController@biayakesehatan')->name('biayakesehatan');
	Route::get('/biayadanbeban/biayakonsumsi/biayakonsumsi', 'BiayaController@biayakonsumsi')->name('biayakonsumsi');
	Route::get('/biayadanbeban/biayaoperasional/biayaoperasional', 'BiayaController@biayaoperasional')->name('biayaoperasional');
	Route::get('/biayadanbeban/maintenance/maintenance', 'BiayaController@maintenance')->name('maintenance');
	Route::get('/biayadanbeban/sewalahan/sewalahan', 'BiayaController@sewalahan')->name('sewalahan');
	Route::get('/biayadanbeban/upahborongan/upahborongan', 'BiayaController@upahborongan')->name('upahborongan');
	Route::get('/biayadanbeban/upahborongan/tambah_upahborongan', 'BiayaController@tambah_upahborongan')->name('tambah_upahborongan');
	Route::get('/biayadanbeban/upahbulanan/upahbulanan', 'BiayaController@upahbulanan')->name('upahbulanan');
	Route::get('/biayadanbeban/upahharian/upahharian', 'BiayaController@upahharian')->name('upahharian');

	// Dana Sosial

	Route::get('/danasosial/index', 'DanaController@danasosial')->name('danasosial');

	// Route::get('/danasosial/kampung/kampung', 'DanaController@kampung');
	// Route::get('/danasosial/koramil/koramil', 'DanaController@koramil');
	// Route::get('/danasosial/masjid/masjid', 'DanaController@masjid');
	// Route::get('/danasosial/polsek/polsek', 'DanaController@polsek');
	// Route::get('/danasosial/sumbangan/sumbangan', 'DanaController@sumbangan');

	// Aset
	Route::get('/aset/datagolongan/index', 'AsetController@datagolongan')->name('datagolongan');	
	Route::get('/aset/datagolongan/create', 'AsetController@tambah_datagolongan')->name('tambah_datagolongan');	
	Route::get('/aset/dataaset/index', 'AsetController@dataaset')->name('dataaset');	

	// Keuangan
	Route::get('/keuangan/a_3bottomline/a_3bottomline', 'KeuanganController@a_3bottomline');
	Route::get('/keuangan/a_cashflow/a_cashflow', 'KeuanganController@a_cashflow');
	Route::get('/keuangan/a_commonsize/a_commonsize', 'KeuanganController@a_commonsize');
	Route::get('/keuangan/a_net/a_net', 'KeuanganController@a_net');
	Route::get('/keuangan/a_pertumbuhanaset/a_pertumbuhanaset', 'KeuanganController@a_pertumbuhanaset');
	Route::get('/keuangan/a_progress/a_progress', 'KeuanganController@a_progress');
	Route::get('/keuangan/a_rasiokeuangan/a_rasiokeuangan', 'KeuanganController@a_rasiokeuangan');
	Route::get('/keuangan/a_roe/a_roe', 'KeuanganController@a_roe');
	Route::get('/keuangan/laporaninputtransaksi/laporaninputtransaksi', 'KeuanganController@laporaninputtransaksi');
	Route::get('/keuangan/laporankeuangan/laporankeuangan', 'KeuanganController@laporankeuangan');
	Route::get('/keuangan/prosesinputtransaksi/prosesinputtransaksi', 'KeuanganController@prosesinputtransaksi');

	// Suplier
	// Route::get('/suplier/barangsuplier/barangsuplier', 'SuplierController@barangsuplier')->name('barangsuplier');
	// Route::get('/suplier/barangsuplier/tambah_barang', 'SuplierController@tambah_barang')->name('tambah_barang');
	// Route::get('/suplier/barangsuplier/edit_barang', 'SuplierController@edit_barang')->name('edit_barang');
	// Route::get('/suplier/barangsuplier/tambah_suplier', 'SuplierController@tambah_suplier')->name('tambah_suplier');
	// Route::get('/suplier/barangsuplier/edit_suplier', 'SuplierController@edit_suplier')->name('edit_suplier');
	// Route::get('/suplier/dataarmada/dataarmada', 'SuplierController@dataarmada');

	// Admin System
	Route::get('/system/manajemenhakakses/index', 'SystemController@manajemenhakakses')->name('manajemenhakakses');
	Route::get('/system/manajemenhakakses/create', 'SystemController@tambah_manajemenhakakses')->name('tambah_manajemenhakakses');
	Route::get('/system/manajemenuser/index', 'SystemController@manajemenuser')->name('manajemenuser');
	Route::get('/system/profilperusahaan/index', 'SystemController@profilperusahaan')->name('profilperusahaan');
	Route::get('/system/tahunfinansial/index', 'SystemController@tahunfinansial')->name('tahunfinansial');

}); // End Route Group




























































































































































































// 1 + 1 = 322