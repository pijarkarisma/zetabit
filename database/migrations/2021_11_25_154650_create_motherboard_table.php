<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMotherboardTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('motherboard', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('type');
            $table->string('manufactur');
            $table->string('jenis');
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
        Schema::dropIfExists('motherboard');
    }
}
