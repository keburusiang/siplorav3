<?php

namespace App\Http\Controllers;
use App\laporan;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dataLat = laporan::where('latitude')->first();
        $dataLng = laporan::where('longitude')->first();
        return view('/home/index', compact('dataLat','dataLng'));
    }
}
