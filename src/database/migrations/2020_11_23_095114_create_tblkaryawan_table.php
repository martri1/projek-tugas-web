<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblkaryawanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tblkaryawan', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("idkaryawan");
            $table->foreign("idkaryawan")->references("id")->on("users");
            $table->string('nik',20);
            $table->string('namakaryawan',100);
            $table->string('alamatkaryawan',100);
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
        Schema::dropIfExists('tblkaryawan');
    }
}
