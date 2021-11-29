<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKeyboardTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('keyboard', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('produkId');
            $table->string('tipe');
            $table->string('jenis');
            $table->string('dimensi');
            $table->string('berat');
            $table->string('jangkauan');
            $table->string('koneksi');
            $table->string('sumberdaya');
            $table->string('dayatahansumberdaya');
            $table->string('nosukucadang');
            $table->string('warna');
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
        Schema::dropIfExists('keyboard');
    }
}
