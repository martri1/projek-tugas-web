<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\karyawan;

class karyawancontroller extends Controller
{
    //
    public function index(){
        return view ('karyawan',[
            "karyawan" => \App\Models\karyawan::all()
        ]);
    }

    public function hapuskaryawan($id){

        karyawan::destroy($id);
        return redirect()->back();
    }


    public function buatkaryawan(Request $request){



            karyawan::create([
            "idkaryawan" => $request->idkaryawan,
            "nik" => $request->nik,
            "namakaryawan" => $request->namakaryawan,
            "alamatkaryawan" => $request->alamatkaryawan,
            "notelepon" => $request->notelepon
        ]);

        return redirect()->route("karyawan");
    }
}
