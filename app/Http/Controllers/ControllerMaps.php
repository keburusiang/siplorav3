<?php

namespace App\Http\Controllers;
use App\laporan;

use DB;

use Illuminate\Http\Request;

class ControllerMaps extends Controller
{
    //
    public function index()
    {
        $map = laporan::all();
        return view('home.maps', compact('map'));
    }
}
