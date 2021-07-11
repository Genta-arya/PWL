<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class inputController extends Controller
{
    //
    public function view()
    {
        // \App\Models\inputbarang::create($request->all());
        // return redirect('/input')->with('berhasil','Data telah di tambahkan') ;
        // \App\Models\add::create($request->all());
        $barang=DB::table('barangs')->get();
        return  view('input',['barangs'=>$barang]);
        # code...
    }
    public function add(Request $request)
    {
        \App\Models\Barang::create($request->all());
        return redirect('/input') ;
        # code...
    }
}
