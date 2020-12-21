<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\penjualan;

class penjualancontroller extends Controller
{
    //
    public function index(){
        return view ('penjualan',[
            "penjualan" => \App\Models\penjualan::all()
        ]);
    }

    public function hapuspenjualan($id){

        penjualan::destroy($id);
        return redirect()->back();
    }


    public function buatpenjualan(Request $request){



        penjualan::create([
            "idkaryawan" => $request->idkaryawan,
            "idpelanggan" => $request->idpelanggan,
            "id_barang" => $request->id_barang,
            "namabarang" => $request->namabarang,
            "tanggalpenjualan" => $request->tanggalpenjualan,
            "jumlah" => $request->jumlah,
            "harga" => $request->harga
        ]);

        return redirect()->route("penjualan");
    }
}
