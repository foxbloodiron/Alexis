<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PurchaseController extends Controller
{
    public function kebutuhanbahanbaku()
    {
    	return view('purchasing/kebutuhanbahanbaku/kebutuhanbahanbaku');
    }
    public function kebutuhansparepart()
    {
    	return view('purchasing/kebutuhansparepart/kebutuhansparepart');
    }
}
