<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function admin()
    {
        return view('pages.admin.dashboard');
    }
    public function front()
    {
        return view('pages.front.dashboard');
    }
    public function verifikator()
    {
        return view('pages.verifikator.dashboard-verifikator');
    }
    public function lurah()
    {
        return view('pages.lurah.dashboard-lurah');
    }
    public function pemohon()
    {
        return view('pages.pemohon.menulayanan');
    }
}
