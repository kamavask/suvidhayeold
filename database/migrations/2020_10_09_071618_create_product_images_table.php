<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_images', function (Blueprint $table) {
            $table->id();
            $table->string('def_img')->nullable();
            $table->string('multi_img1')->nullable();
            $table->string('multi_img2')->nullable();
            $table->string('multi_img3')->nullable();
            $table->string('multi_img4')->nullable();
            $table->string('multi_img5')->nullable();
            $table->string('multi_img6')->nullable();
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
        Schema::dropIfExists('product_images');
    }
}
