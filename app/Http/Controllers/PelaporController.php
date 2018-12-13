<?php

namespace App\Http\Controllers;

use App\User;
use Auth;
use App\laporan;
use Illuminate\Http\Request;

class PelaporController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    public function showProfile(){
      $pelapor = User::find(Auth::user()->id);
      return view('dashboard.pelapor.profile',compact('pelapor'));
    }
    public function show()
    {
        // code...
        $pelapor = User::find(Auth::user()->id);
        $data = laporan::find(Auth::user()->laporan);
        return view('dashboard.pelapor.index',compact('pelapor','data'));

    }
    public function update(){
      $pelapor = User::find(Auth::user()->id);
      $data = laporan::find(Auth::user()->laporan);
      return view('dashboard.pelapor.index',compact('pelapor','data'));
    }
}
