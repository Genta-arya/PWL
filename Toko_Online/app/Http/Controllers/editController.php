<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class editController extends Controller
{
    //
    public function view()
    {
        $barang=DB::table('barangs')->get();
        return  view('edit',['barangs'=>$barang]);
        # code...
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
    public function delete($id)
    {
        $data = \App\Models\Barang::find($id);
        $data->delete();
        return redirect('/edit')->with('berhasil','Data Berhasil Dihapus');
        # code...
    }

   
}
