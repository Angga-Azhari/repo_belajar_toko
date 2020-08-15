<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;
use Illuminate\Support\Facades\Validator;

class CustomerController extends Controller
{
    public function store(Request $request)
    {
        $validator=Validator::make($request->all(),
            [
                'id_pembeli' => 'required',
                'nama_pembeli' => 'required',
                'alamat_pembeli' => 'required',
                'no_telp' => 'required',
                'id_barang' => 'required'
            ]
        );
        if($validator->fails()) {
            return Response()->json($validator->errors());
        }
        $simpan = Customer::create([
            'id_pembeli' => $request->id_pembeli,
            'nama_pembeli' => $request->nama_pembeli,
            'alamat_pembeli' => $request->alamat_pembeli,
            'no_telp' => $request->no_telp,
            'id_barang' => $request->id_barang
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
