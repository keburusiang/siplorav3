<?php

namespace App\Http\Controllers;
use App\laporan;
use Illuminate\Http\Request;
use DB;

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
     * @return \I9lluminate\Http\Response
     */
    public function index()
    {
        $map = laporan::all();
        return view('home.index', compact('map'));
    }
}
