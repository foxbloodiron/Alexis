<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StokController extends Controller
{
    public function dataadonan()
    {
    	return view('stok/dataadonan/dataadonan');
    }
    public function opnamebahanbaku()
    {
    	return view('stok/opnamebahanbaku/opnamebahanbaku');
    }
    public function pencatatanbarangmasuk()
    {
    	return view('stok/pencatatanbarangmasuk/pencatatanbarangmasuk');
    }
    public function penggunaanbahanbaku()
    {
    	return view('stok/penggunaanbahanbaku/penggunaanbahanbaku');
    }
    public function tipemenghitunghpp()
    {
    	return view('stok/tipemenghitunghpp/tipemenghitunghpp');
    }
}
