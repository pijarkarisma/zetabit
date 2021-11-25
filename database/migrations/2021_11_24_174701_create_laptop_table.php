<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLaptopTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('laptop', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nomorSeri');
            $table->string('manufactur');
            $table->unsignedBigInteger('osId');
            $table->unsignedBigInteger('vgaId');
            $table->unsignedBigInteger('memoryId');
            $table->unsignedBigInteger('storageId');
            $table->unsignedBigInteger('batteryId');
            $table->boolean('punyaOpticalDrive');
            $table->string('audio');
            $table->string('camera');
            $table->string('network');
            $table->string('slots');
            $table->string('dimensi');
            $table->string('display');
            $table->string('berat');
            $table->bigInteger('harga');
            $table->datetime('tanggalRilis');
            $table->integer('stok');
            $table->integer('terjual');
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
        Schema::dropIfExists('laptop');
    }
}
