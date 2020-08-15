<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Transaksi;
use Illuminate\Support\Facades\Validator;

class TransaksiController extends Controller
{
    public function store(Request $request)
    {
        $validator=Validator::make($request->all(),
            [
                'id_transaksi' => 'required',
                'tanggal_transaksi' => 'required',
                'keterangan' => 'required',
                'id_pembeli' => 'required'
            ]
        );
        if($validator->fails()) {
            return Response()->json($validator->errors());
        }
        $simpan = Transaksi::create([
            'id_transaksi' => $request->id_transaksi,
            'tanggal_transaksi' => $request->tanggal_transaksi,
            'keterangan' => $request->keterangan,
            'id_pembeli' => $request->id_pembeli,
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
