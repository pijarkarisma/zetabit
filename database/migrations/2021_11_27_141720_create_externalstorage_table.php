<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExternalstorageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('externalstorage', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('produkId');
            $table->string('jenis');
            $table->string('tipe');
            $table->string('berat');
            $table->string('kecepatan');
            $table->string('kapasitas');
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
        Schema::dropIfExists('externalstorage');
    }
}
