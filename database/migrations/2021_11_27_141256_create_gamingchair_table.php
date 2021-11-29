<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGamingchairTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gamingchair', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('produkId');
            $table->string('tipe');
            $table->string('dimensi');
            $table->string('berat');
            $table->string('material');
            $table->string('dekripsi_fitur');
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
        Schema::dropIfExists('gamingchair');
    }
}
