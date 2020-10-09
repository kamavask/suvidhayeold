<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDescriptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('descriptions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('product_id')->nullable();
            $table->string('content1')->nullable();
            $table->string('content2')->nullable();
            $table->string('content3')->nullable();
            $table->string('content4')->nullable();
            $table->string('content5')->nullable();
            $table->string('images1')->nullable();
            $table->string('images2')->nullable();
            $table->string('images3')->nullable();
            $table->string('images4')->nullable();
            $table->string('images5')->nullable();
            $table->foreign('product_id')->references('id')->on('products');
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
        Schema::dropIfExists('descriptions');
    }
}
