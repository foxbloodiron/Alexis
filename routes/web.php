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


Auth::routes();

Route::group(['middleware' => 'guest'], function(){

Route::get('/', function () {
    return view('home');
});
	Route::get('/home', 'HomeController@index')->name('home');

	// Master
	Route::get('/master/databarang/databarang', 'MasterController@databarang');
	Route::get('/master/datasuplier/datasuplier', 'MasterController@datasuplier');
	Route::get('/master/datacustomerkontraktor/datacustomerkontraktor', 'MasterController@datacustomerkontraktor');
	Route::get('/master/dataarmada/dataarmada', 'MasterController@dataarmada');
	Route::get('/master/datacustomerharian/datacustomerharian', 'MasterController@datacustomerharian');
	Route::get('/master/datapegawai/datapegawai', 'MasterController@datapegawai');

	// Aset
	Route::get('/aset/pengadaan/pengadaan', 'AsetController@pengadaan');	
	Route::get('/aset/penyusutan/penyusutan', 'AsetController@penyusutan');	

	// Biaya dan Beban
	Route::get('/biayadanbeban/alattuliskantor/alattuliskantor', 'BiayaController@alattuliskantor');
	Route::get('/biayadanbeban/biayabahanbakar/biayabahanbakar', 'BiayaController@biayabahanbakar');
	Route::get('/biayadanbeban/biayakesehatan/biayakesehatan', 'BiayaController@biayakesehatan');
	Route::get('/biayadanbeban/biayakonsumsi/biayakonsumsi', 'BiayaController@biayakonsumsi');
	Route::get('/biayadanbeban/biayaoperasional/biayaoperasional', 'BiayaController@biayaoperasional');
	Route::get('/biayadanbeban/maintenance/maintenance', 'BiayaController@maintenance');
	Route::get('/biayadanbeban/sewalahan/sewalahan', 'BiayaController@sewalahan');
	Route::get('/biayadanbeban/upahborongan/upahborongan', 'BiayaController@upahborongan');
	Route::get('/biayadanbeban/upahbulanan/upahbulanan', 'BiayaController@upahbulanan');
	Route::get('/biayadanbeban/upahharian/upahharian', 'BiayaController@upahharian');

	// Customer
	Route::get('/customer/historitransaksi/historitransaksi', 'CustomerController@historitransaksi');

	// Dana Sosial
	Route::get('/danasosial/kampung/kampung', 'DanaController@kampung');
	Route::get('/danasosial/koramil/koramil', 'DanaController@koramil');
	Route::get('/danasosial/masjid/masjid', 'DanaController@masjid');
	Route::get('/danasosial/polsek/polsek', 'DanaController@polsek');
	Route::get('/danasosial/sumbangan/sumbangan', 'DanaController@sumbangan');

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

	// Pengiriman
	Route::get('/pengiriman/perencanaanpengiriman/perencanaanpengiriman', 'PengirimanController@perencanaanpengiriman');
	Route::get('/pengiriman/suratjalan/suratjalan', 'PengirimanController@suratjalan');
	Route::get('/pengiriman/upahboronganpengiriman/upahboronganpengiriman', 'PengirimanController@upahboronganpengiriman');

	// Penjualan
	Route::get('/penjualan/diskonpenjualan/diskonpenjualan', 'PenjualanController@diskonpenjualan');
	Route::get('/penjualan/penjualanorder/penjualanorder', 'PenjualanController@penjualanorder');
	Route::get('/penjualan/penjualanproject/penjualanproject', 'PenjualanController@penjualanproject');
	Route::get('/penjualan/penjualantanpaorder/penjualantanpaorder', 'PenjualanController@penjualantanpaorder');
	Route::get('/penjualan/returnpenjualan/returnpenjualan', 'PenjualanController@returnpenjualan');

	// Produksi
	Route::get('/produksi/pencatatanhasil/pencatatanhasil', 'ProduksiController@pencatatanhasil');
	Route::get('/produksi/perencanaanproduksi/perencanaanproduksi', 'ProduksiController@perencanaanproduksi');
	Route::get('/produksi/produksirencana/produksirencana', 'ProduksiController@produksirencana');
	Route::get('/produksi/produksitanparencana/produksitanparencana', 'ProduksiController@produksitanparencana');
	Route::get('/produksi/upahboronganproduksi/upahboronganproduksi', 'ProduksiController@upahboronganproduksi');

	// Purchasing
	Route::get('/purchasing/kebutuhanbahanbaku/kebutuhanbahanbaku', 'PurchaseController@kebutuhanbahanbaku');
	Route::get('/purchasing/kebutuhansparepart/kebutuhansparepart', 'PurchaseController@kebutuhansparepart');

	// Stok
	Route::get('/stok/dataadonan/dataadonan', 'StokController@dataadonan');
	Route::get('/stok/opnamebahanbaku/opnamebahanbaku', 'StokController@opnamebahanbaku');
	Route::get('/stok/pencatatanbarangmasuk/pencatatanbarangmasuk', 'StokController@pencatatanbarangmasuk');
	Route::get('/stok/penggunaanbahanbaku/penggunaanbahanbaku', 'StokController@penggunaanbahanbaku');
	Route::get('/stok/tipemenghitunghpp/tipemenghitunghpp', 'StokController@tipemenghitunghpp');

	// Suplier
	Route::get('/suplier/barangsuplier/barangsuplier', 'SuplierController@barangsuplier');
	Route::get('/suplier/dataarmada/dataarmada', 'SuplierController@dataarmada');

	// Admin System
	Route::get('/system/manajemenhakakses/manajemenhakakses', 'SystemController@manajemenhakakses');
	Route::get('/system/manajemenuser/manajemenuser', 'SystemController@manajemenuser');
	Route::get('/system/profilperusahaan/profilperusahaan', 'SystemController@profilperusahaan');
	Route::get('/system/tahunfinansial/tahunfinansial', 'SystemController@tahunfinansial');
});
