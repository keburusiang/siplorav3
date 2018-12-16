<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DetailController extends Controller
{
	public function index($id){
		$data = laporan::find($id);
		return view('dashboard/bnpb/info', compact('data'));
	}

}
