<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCasingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('casing', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('manufactur');
            $table->string('type');
            $table->string('material');
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
        Schema::dropIfExists('casing');
    }
}
