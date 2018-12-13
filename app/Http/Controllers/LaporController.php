<?php

namespace App\Http\Controllers;

use App\laporan;
use App\User;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class LaporController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $pelapor = User::all();
        return view('laporan/lapor',compact('pelapor'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $id = Auth::user()->id;
        $laporan = new Laporan();
        $laporan-> kode_laporan = Str::random(5);
        $laporan-> jenis_laporan = $request-> jenisBencana;
        $laporan-> deskripsi = $request-> deskripsi;
        $laporan-> latitude = $request-> latitude;
        $laporan-> longitude = $request-> longitude;
        $laporan-> alamat = $request-> alamat;
        $laporan-> user_id = $id;
        $laporan->save();
        return redirect('/pelapor/dashboard/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {

          $id = Auth::users()->id;
          $laporan = new Laporan();
          $laporan-> kode_laporan = Str::random(5);
          $laporan-> jenis_laporan = $request-> jenisBencana;
          $laporan-> deskripsi = $request-> deskripsi;
          $laporan-> latitude = $request-> latitude;
          $laporan-> longitude = $request-> longitude;
          $laporan-> alamat = $request-> alamat;
          $laporan-> user_id = $id;
          $laporan->save();
          return redirect('/pelapor/dashboard/');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
