<?php

namespace App\Http\Controllers;

use App\User;
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
      return view('dashboard.pelapor.index',compact('pelapor'));
    }
}
