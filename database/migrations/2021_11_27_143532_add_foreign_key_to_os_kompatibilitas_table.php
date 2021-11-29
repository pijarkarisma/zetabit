<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeyToOsKompatibilitasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('os_kompatibilitas', function (Blueprint $table) {
            $table->foreign('osId')
                ->references('id')
                ->on('os')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            
            $table->foreign('webcamId')
                ->references('id')
                ->on('webcam')
                ->onUpdate('cascade')
                ->onDelete('cascade');

            $table->foreign('keyboardId')
                ->references('id')
                ->on('keyboard')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            
            $table->foreign('mouseId')
                ->references('id')
                ->on('mouse')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            
            $table->foreign('softwareId')
                ->references('id')
                ->on('software')
                ->onUpdate('cascade')
                ->onDelete('cascade');

            $table->foreign('networkId')
                ->references('id')
                ->on('network')
                ->onUpdate('cascade')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('os_kompatibilitas', function (Blueprint $table) {
            //
        });
    }
}
