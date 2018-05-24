<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SuplierController extends Controller
{
    public function barangsuplier()
    {
    	return view('suplier/barangsuplier/barangsuplier');
    }
    public function dataarmada()
    {
    	return view('suplier/dataarmada/dataarmada');
    }
}
