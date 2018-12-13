<?php

namespace App\Http\Controllers;

use App\User;
use App\laporan;
use Illuminate\Http\Request;

class PelaporController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    public function showProfile($id){
      $pelapor = User::find($id);
      return view('dashboard.pelapor.profile',compact('pelapor'));
    }
    public function show($id)
    {
      $pelapor = User::find($id);
      $data = laporan::find($pelapor->id);
      return view('dashboard.pelapor.index',compact('pelapor','data'));
    }
}
