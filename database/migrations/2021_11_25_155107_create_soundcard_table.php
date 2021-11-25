<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSoundcardTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('soundcard', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('manufactur');
            $table->string('interface');
            $table->string('channels');
            $table->string('digitalaudio');
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
        Schema::dropIfExists('soundcard');
    }
}
