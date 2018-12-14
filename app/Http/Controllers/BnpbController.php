<?php

namespace App\Http\Controllers;
use App\laporan;
use App\User;
use Illuminate\Http\Request;
use DB;

class BnpbController extends Controller
{
    //

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
                                ->select('laporans.jenis_laporan', 'laporans.status_id' , 'laporans.alamat','laporans.kode_laporan', 'users.namaDepan')
                                ->where('laporans.status_id', '2')
                                ->get();
        return view('dashboard.bnpb.table', compact('data','data2'));
    }
    public function showMap()
    {
        $map = laporan::all();
        return view('dashboard.bnpb.maps',compact('map'));
    }
}
