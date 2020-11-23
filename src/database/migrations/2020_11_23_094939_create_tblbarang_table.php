<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblbarangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tblbarang', function (Blueprint $table) {
            $table->id();
            $table->string('kodebarang',5);
            $table->string('namabarang',100);
            $table->string('merek',50);
            $table->string('ukuran',10);
            $table->string('satuan',10);
            $table->string('harga',20);
            $table->string('stok',20);
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
        Schema::dropIfExists('tblbarang');
    }
}
