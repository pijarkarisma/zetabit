<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeyToLaptopTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('laptop', function (Blueprint $table) {
            $table->foreign('osId')
                ->references('id')
                ->on('os')
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
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('laptop', function (Blueprint $table) {
            //
        });
    }
}
