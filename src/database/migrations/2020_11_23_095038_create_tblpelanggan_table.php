<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblpelangganTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tblpelanggan', function (Blueprint $table) {
            $table->id();
            $table->string('idpelanggan',20);
            $table->string('namapelanggan',100);
            $table->string('alamatpelanggan',100);
            $table->string('notelepon',15);
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
        Schema::dropIfExists('tblpelanggan');
    }
}
