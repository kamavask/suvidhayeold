<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('order_code')->nullable();
            $table->string('user_id')->nullable();
            $table->string('product_id')->nullable();
            $table->integer('quantity')->nullable();
            $table->float('subtotal')->nullable();
            $table->float('grandtotal')->nullable();
            $table->integer('order_status')->nullable();
            $table->string('deliverymen_id')->nullable();
            $table->string('coupon_id')->nullable();
            $table->string('payment_mode')->default('razorpay');
            $table->float('due_amount')->nullable();
            $table->string('reviews')->nullable();
            $table->float('ratings')->nullable();
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
        Schema::dropIfExists('orders');
    }
}
