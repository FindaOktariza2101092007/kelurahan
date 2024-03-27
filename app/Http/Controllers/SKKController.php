<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SKKController extends Controller
{
    public function index()
    {
        return view('pages.front.permohonan.skk');
    }
}
