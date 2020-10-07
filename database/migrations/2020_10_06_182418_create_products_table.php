<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('prod_code')->nullable();
            $table->string('product_name')->nullable();
            $table->unsignedBigInteger('category_id')->nullable();
            $table->string('brand')->nullable();
            $table->string('highlight')->nullable();
            $table->string('short_desc')->nullable();
            $table->string('specification')->nullable();
            $table->unsignedBigInteger('image_id')->nullable();
            $table->string('dimensions')->nullable();
            $table->string('size')->nullable();
            $table->integer('virtual')->nullable()->default(0);
            $table->integer('downloadable')->nullable()->default(0);
            $table->string('r_price')->nullable();
            $table->string('s_price')->nullable();
            $table->string('sku')->nullable();
            $table->string('stock')->nullable();
            $table->string('stock_alert')->nullable();
            $table->string('backorder')->nullable();
            $table->unsignedBigInteger('tax_id')->nullable();
            $table->unsignedBigInteger('shipping_id')->nullable();
            $table->string('bulk_no')->nullable();
            $table->string('tags')->nullable();
            $table->timestamps();
            $table->foreign('category_id')->references('id')->on('categories');
            $table->foreign('image_id')->references('id')->on('images');
            $table->foreign('tax_id')->references('id')->on('taxes');
            $table->foreign('shipping_id')->references('id')->on('images');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
