<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Barang;

class barangcontroller extends Controller
{
    //
    public function tampilform(){
        return view("barang.form");
    }

    public function hapusbarang($id){

        Barang::destroy($id);
        return redirect()->back();
    }


    public function buatbarang(Request $request){



            Barang::create([
            "kodebarang" => $request->kodebarang,
            "namabarang" => $request->namabarang,
            "ukuran" => $request->ukuran,
            "merek" => $request->merek,
            "satuan" => $request->satuan,
            "harga" => $request->harga,
            "stok" => $request->stok
        ]);

        return redirect()->route("home");
    }
}
