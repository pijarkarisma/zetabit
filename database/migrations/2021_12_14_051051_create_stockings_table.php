<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStockingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stockings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamp('stockDate');
            $table->unsignedBigInteger('productId');
            $table->unsignedBigInteger('supplierId');
            $table->unsignedBigInteger('userId');
            $table->integer('quantity');
            $table->double('price');
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
        Schema::dropIfExists('stockings');
    }
}
