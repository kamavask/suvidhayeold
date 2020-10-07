<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVendorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vendors', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id')->nullable();
            $table->string('vendor_code');
            $table->string('shop_name');
            $table->string('owner_name');
            $table->string('shop_address');
            $table->string('address_proof1');
            $table->string('address_proof2')->nullable();
            $table->string('phoneno1');
            $table->string('phoneno2')->nullable();
            $table->string('phoneno3')->nullable();
            $table->string('orders_completed')->nullable();
            $table->date('doj')->nullable();
            $table->date('dol')->nullable();
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vendors');
    }
}
