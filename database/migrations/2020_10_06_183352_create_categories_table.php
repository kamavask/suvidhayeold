<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('cat_name')->nullable();
            $table->bigInteger('cat_type')->nullable();
            $table->string('cat_desc')->nullable();
            $table->string('slug')->nullable();
            $table->string('tags')->nullable();
            $table->string('icon')->nullable();
            $table->unsignedBigInteger('parent_cat_id')->nullable();
            $table->foreign('parent_cat_id')->references('id')->on('category');
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
        Schema::dropIfExists('categories');
    }
}
