<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SKUController extends Controller
{
    public function index()
    {
        return view('pages.front.permohonan.sku');
    }
}
