<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOsKompatibilitasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('os_kompatibilitas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('osId');
            $table->unsignedBigInteger('webcamId');
            $table->unsignedBigInteger('keyboardId');
            $table->unsignedBigInteger('mouseId');
            $table->unsignedBigInteger('softwareId');
            $table->unsignedBigInteger('networkId');
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
        Schema::dropIfExists('os_kompatibilitas');
    }
}
