<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PesananController extends Controller
{
    //
    public function pesanan()
    {
        $pesanan=DB::table('pesanans')->get();
        return  view('pesanan',['pesanans'=>$pesanan]);
    }
    public function tambahPesanan(Request $request)
    {
        \App\Models\Pesanan::create($request->all());
        return redirect('/pesanan') ;
        # code...
    }
    public function  viewPesanan($id)
    {
        $data = \App\Models\Pesanan::find($id);
        return view('updatePesan',['update'=>$data]);
        # code...   
    }
}

