<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class updateController extends Controller
{
    //
    public function  view($id)
    {
        $data = \App\Models\Barang::find($id);
        return view('/update',['update'=>$data]);
        # code...   
    }
    public function update(Request $request,$id)
    {
        $data = \App\Models\Barang::find($id);
        $data->update($request->all());
        return redirect('/edit')->with('sukses','Data telah di update');
        # code...
    }
}
