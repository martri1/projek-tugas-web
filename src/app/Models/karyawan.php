<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class karyawan extends Model
{
    use HasFactory;
    protected $table = "tblkaryawan";

    protected $fillable = [
        "idkaryawan","nik","namakaryawan","alamatkaryawan","notelepon"
    ];
}
