<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserMasyarakatController extends Controller
{
    public function index()
    {
        return view('pages.front.masyarakat.index');
    }
}
