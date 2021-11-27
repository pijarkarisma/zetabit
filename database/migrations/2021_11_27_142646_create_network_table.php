<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNetworkTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('network', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('produkId');
            $table->string('jenis');
            $table->string('tipe');
            $table->string('frekuensi');
            $table->string('kecepatan');
            $table->string('sharingdevice');
            $table->string('jangkauan');
            $table->string('daya');
            $table->string('fitur');
            $table->string('wifi_standard');
            $table->boolean('unlockgsm');
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
        Schema::dropIfExists('network');
    }
}
