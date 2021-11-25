<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePowersupplyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('powersupply', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('manufactur');
            $table->string('type');
            $table->string('maxpower');
            $table->string('modular');
            $table->bigInteger('harga');
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
        Schema::dropIfExists('powersupply');
    }
}
