<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MonitoringController extends Controller
{
    public function front()
    {
        return view('pages.front.monitoring.monitoring');
    }
    public function pemohon()
    {
        return view('pages.pemohon.monitoring');
    }
}
