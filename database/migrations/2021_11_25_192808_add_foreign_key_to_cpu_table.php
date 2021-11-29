<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeyToCpuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('cpu', function (Blueprint $table) {
            $table->foreign('motherboardId')
                ->references('id')
                ->on('motherboard')
                ->onUpdate('cascade')
                ->onDelete('cascade');

            $table->foreign('processorId')
                ->references('id')
                ->on('processor')
                ->onUpdate('cascade')
                ->onDelete('cascade');

            $table->foreign('heatsinkId')
                ->references('id')
                ->on('heatsink')
                ->onUpdate('cascade')
                ->onDelete('cascade');

            $table->foreign('powersupplyId')
                ->references('id')
                ->on('powersupply')
                ->onUpdate('cascade')
                ->onDelete('cascade');

            $table->foreign('vgaId')
                ->references('id')
                ->on('vga')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            
            $table->foreign('memoryId')
                ->references('id')
                ->on('ram')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            
            $table->foreign('storageId')
                ->references('id')
                ->on('storage')
                ->onUpdate('cascade')
                ->onDelete('cascade');

            $table->foreign('batteryId')
                ->references('id')
                ->on('battery')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            
            $table->foreign('casingId')
                ->references('id')
                ->on('casing')
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
        Schema::table('cpu', function (Blueprint $table) {
            //
        });
    }
}
