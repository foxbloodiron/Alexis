<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class StokController extends Controller
{
    // Data Adonan
    public function dataadonan()
    {
    	return view('stok/dataadonan/dataadonan');
    }
    public function tambah_dataadonan()
    {
        return view('stok/dataadonan/tambah_dataadonan');
    }
    public function edit_dataadonan()
    {
        return view('stok/dataadonan/edit_dataadonan');
    }

    // Opname Bahan Baku
    public function opnamebahanbaku()
    {
    	return view('stok/opnamebahanbaku/opnamebahanbaku');
    }

    // Pencatatan Barang Masuk
    public function pencatatanbarangmasuk()
    {
    	return view('stok/pencatatanbarangmasuk/pencatatanbarangmasuk');
    }
    public function tambah_pencatatanbarangmasuk()
    {
        $getNota = DB::table('d_purchase_order')->where('po_status', 'AP')->select('po_id','po_code')->get();
        return view('stok/pencatatanbarangmasuk/tambah_pencatatanbarangmasuk')->with(compact('getNota'));
    }

    // Penggunaan Bahan Baku
    public function penggunaanbahanbaku()
    {
    	return view('stok/penggunaanbahanbaku/penggunaanbahanbaku');
    }
    public function tambah_penggunaanbahanbaku()
    {
        return view('stok/penggunaanbahanbaku/tambah_penggunaanbahanbaku');
    }

    // Tipe Menghitung HPP
    public function tipemenghitunghpp()
    {
    	return view('stok/tipemenghitunghpp/tipemenghitunghpp');
    }
}
