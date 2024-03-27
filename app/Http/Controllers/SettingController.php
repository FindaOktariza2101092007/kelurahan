<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function admin()
    {
        return view('pages.admin.setting');
    }
    public function front()
    {
        return view('pages.front.setting');
    }
}
