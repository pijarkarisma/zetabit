<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCpuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cpu', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('motherboardId');
            $table->unsignedBigInteger('heatsinkId');
            $table->unsignedBigInteger('powersupplyId');
            $table->unsignedBigInteger('vgaId');
            $table->unsignedBigInteger('memoryId');
            $table->unsignedBigInteger('storageId');
            $table->unsignedBigInteger('batteryId');
            $table->unsignedBigInteger('casingId');
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
        Schema::dropIfExists('cpu');
    }
}
