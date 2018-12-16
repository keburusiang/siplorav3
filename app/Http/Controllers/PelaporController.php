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
        $data = laporan::where('user_id', Auth::user()->id)->get();
        return view('dashboard.pelapor.index',compact('pelapor','data'));
    }

    public function edit(Request $request)
    {
      $pelapor = User::find(Auth::user()->id);
      $pelapor-> namaDepan = $request-> namaDepan;
      $pelapor-> namaBelakang = $request-> namaBelakang;
      $pelapor-> notelp = $request -> notelp;
      $pelapor-> email = $request-> email;
      $pelapor-> bio = $request-> bio;
      $pelapor-> alamat = $request-> alamat;
      // $pelapor-> password = bcrypt($request-> password);
      $pelapor-> tanggalLahir = $request-> tanggalLahir;
      $pelapor->save();
      return redirect()->back();
    }
}
