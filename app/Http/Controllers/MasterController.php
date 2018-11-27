<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MasterController extends Controller
{
    public function databarang()
    {
    	return view('master/databarang/databarang');
    }
    public function tambah_databarang()
    {
        return view('master/databarang/tambah_databarang');
    }
    public function datasuplier()
    {
    	return view('master/datasuplier/datasuplier');
    }
    public function datacustomer()
    {
    	return view('master/datacustomer/datacustomer');
    }
    public function tambah_datacustomer()
    {
        return view('master/datacustomer/tambah_datacustomer');
    }
    public function datacustomerkontraktor()
    {
    	return view('master/datacustomerkontraktor/datacustomerkontraktor');
    }
    public function datapegawai()
    {
    	return view('master/datapegawai/datapegawai');
    }
    public function dataarmada()
    {
    	return view('master/dataarmada/dataarmada');
    }
    public function tambah_dataarmada()
    {
        return view('master/dataarmada/tambah_dataarmada');
    }
    public function datasatuan()
    {
        return view('master/datasatuan/datasatuan');
    }
}

