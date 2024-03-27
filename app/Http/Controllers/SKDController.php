<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SKDController extends Controller
{
    public function index()
    {
        return view('pages.front.permohonan.skd');
    }
}
