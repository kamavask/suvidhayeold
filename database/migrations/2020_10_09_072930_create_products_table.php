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
            $table->string('prod_name')->nullable()->unique();
            $table->unsignedBigInteger('category_id')->nullable();
            $table->string('brand')->nullable();
            $table->mediumText('highlight')->nullable();
            $table->mediumText('short_description')->nullable();
            $table->longText('specification')->nullable();
            $table->unsignedBigInteger('image_id')->nullable();
            $table->string('dimensions')->nullable();
            $table->string('weight')->nullable();
            $table->string('size')->nullable();
            $table->boolean('virtual')->nullable();
            $table->boolean('downloadable')->nullable();
            $table->string('r_price')->nullable();
            $table->string('s_price')->nullable();
            $table->integer('variant_id')->nullable();
            $table->string('sku')->nullable();
            $table->integer('stock')->nullable();
            $table->integer('stock_alert')->nullable();
            $table->integer('backorder')->nullable();
            $table->unsignedBigInteger('tax_id')->nullable();
            $table->unsignedBigInteger('shipping_id')->nullable();
            $table->integer('bulk_order_no')->nullable();
            $table->string('tags')->nullable();
            $table->timestamps();
            $table->foreign('category_id')->references('id')->on('categories');
            $table->foreign('image_id')->references('id')->on('product_images');
            $table->foreign('tax_id')->references('id')->on('taxes');
            $table->foreign('shipping_id')->references('id')->on('shipping_classes');
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
