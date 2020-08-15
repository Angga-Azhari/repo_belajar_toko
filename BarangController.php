<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Barang;
use Illuminate\Support\Facades\Validator;

class BarangController extends Controller
{
    public function store(Request $request)
    {
        $validator=Validator::make($request->all(),
            [
                'nama_barang' => 'required',
                'harga' => 'required',
                'stok' => 'required'
            ]
        );
        if($validator->fails()) {
            return Response()->json($validator->errors());
        }
        $simpan = Barang::create([
            'nama_barang' => $request->nama_barang,
            'harga' => $request->harga,
            'stok' => $request->stok
        ]);
        if($simpan)
        {
            return Response()->json(['status' => 1]);
        }
        else
        {
            return Response()->json(['status' => 0]);
        }
    }
}
