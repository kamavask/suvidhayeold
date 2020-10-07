<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id')->nullable();
            $table->string('customer_code');
            $table->string('f_name')->nullable();
            $table->string('s_name')->nullable();
            $table->string('dob')->nullable();
            $table->string('phoneno')->nullable();
            $table->string('profile_pic')->nullable();
            $table->string('coupon_used')->nullable();
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
        Schema::dropIfExists('customers');
    }
}
