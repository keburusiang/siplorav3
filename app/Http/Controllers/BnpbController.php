<?php

namespace App\Http\Controllers;

use App\laporan;
use App\User;
use Illuminate\Http\Request;
use DB;

class BnpbController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware('auth:bnpb');
    }

    public function show()
    {
        return view('dashboard.bnpb.index');
    }
    public function showTable()
    {
        // $data = laporan::all();
        // $data = DB::table('laporans')
        //         ->join('users', 'laporans.user_id','=','users.id')
        //         ->select('laporans.jenis_laporan', 'laporans.alamat','laporans.kode_laporan', 'users.namaDepan')
        //         ->get();
        $data = DB::table('laporans')
                ->join('users', 'laporans.user_id','=','users.id')
                ->select('laporans.jenis_laporan', 'laporans.status_id' , 'laporans.alamat','laporans.kode_laporan', 'users.namaDepan')
                ->where('laporans.status_id', '1')
                ->get();
        $data2 = DB::table('laporans')
                ->join('users', 'laporans.user_id','=','users.id')
                ->select('laporans.created_at','laporans.id','laporans.jenis_laporan', 'laporans.status_id' , 'laporans.alamat','laporans.kode_laporan', 'users.namaDepan')
                ->where('laporans.status_id', '2')
                ->get();
        return view('dashboard.bnpb.table', compact('data','data2'));
    }
    public function showMap()
    {
        $count1 = laporan::where('status_id', 1)->count();
        $count2 = laporan::where('status_id', 2)->count();
        $count3 = laporan::where('status_id', 3)->count();
        $map = laporan::all();
        return view('dashboard.bnpb.maps',compact('map','count1','count2','count3'));
    }

    public function verif(Request $request, $id)
    {
      $data = laporan::find($id);
      $data->status_id = $request->status;
      $data->save();
      return redirect()->back();
    }
}
