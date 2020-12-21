<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblpenjualanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tblpenjualan', function (Blueprint $table) {
            $table->id();
            $table->string("idkaryawan",20);
            $table->string("idpelanggan",20);
            $table->string("id_barang",20);
            $table->string("namabarang",100);
            $table->date("tanggalpenjualan");
            $table->string("jumlah",5);
            $table->string("harga",20);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tblpenjualan');
    }
}
