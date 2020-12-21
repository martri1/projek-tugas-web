<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\pelanggan;

class pelanggancontroller extends Controller
{
    //
    public function index(){
        return view ('pelanggan',[
            "pelanggan" => \App\Models\pelanggan::all()
        ]);
    }

    public function hapuspelanggan($id){

        pelanggan::destroy($id);
        return redirect()->back();
    }


    public function buatpelanggan(Request $request){



        pelanggan::create([
            "idpelanggan" => $request->idpelanggan,
            "namapelanggan" => $request->namapelanggan,
            "alamatpelanggan" => $request->alamatpelanggan,
            "notelepon" => $request->notelepon
        ]);

        return redirect()->route("pelanggan");
    }
}
