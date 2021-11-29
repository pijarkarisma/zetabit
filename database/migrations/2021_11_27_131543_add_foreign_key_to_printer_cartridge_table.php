<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeyToPrinterCartridgeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('printer_cartridge', function (Blueprint $table) {
            $table->foreign('printerId')
                ->references('id')
                ->on('printer')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            
            $table->foreign('cartridgeId')
                ->references('id')
                ->on('cartridge')
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
        Schema::table('printer_cartridge', function (Blueprint $table) {
            //
        });
    }
}
