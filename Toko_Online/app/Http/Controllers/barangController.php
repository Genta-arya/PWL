<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class barangController extends Controller
{

    // public function index(Request $request)
    // {
    //     if($request->has('search')){
    //         $barang = \App\Models\Barang::where('nama','LIKE','%'.$request->search.'%')->get();
    //     }else{
    //         $barang = \App\Models\Baranng::all();
    //     }

    //     return view('barang.index',['barangs' => $barang]);
    //     # code...
    // }
    public function barang()
    {
       $barang = DB::table('barangs')->get();
        return view('barang',['barangs'=>$barang]);
       
    }

    public function cari(Request $request)
    {
        if($request->has('search')){
            $cari= \App\Models\Barang::where('nama_brg','LIKE','%'.$request->search.'%')->get();
        }else
        {
            $cari= \App\Models\Barang::all();
        }

        return view('barang',['barangs' => $cari]);
        
    }
    
}
