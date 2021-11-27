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
            $table->unsignedBigInteger('produkId');
            $table->string('nomorSeri');
            $table->unsignedBigInteger('processorId');
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
