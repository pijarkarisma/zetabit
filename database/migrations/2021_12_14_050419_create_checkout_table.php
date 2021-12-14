<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCheckoutTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('checkout', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('orderId');
            $table->double('costSum');
            $table->string('phoneNumber');
            $table->string('paymentMethod');
            $table->unsignedBigInteger('deliveryId');
            $table->string('deliveryMode');            
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
        Schema::dropIfExists('checkout');
    }
}
