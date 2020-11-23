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
            $table->unsignedBigInteger("id_karyawan");
            $table->foreign("id_karyawan")->references("id")->on("tblkaryawan");
            $table->unsignedBigInteger("id_pelanggan");
            $table->foreign("id_pelanggan")->references("id")->on("tblpelanggan");
            $table->unsignedBigInteger("id_barang");
            $table->foreign("id_barang")->references("id")->on("tblbarang");
            $table->date("tanggalpenjualan");
            $table->string("jumlah", 5);
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
