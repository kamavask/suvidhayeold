<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServicemenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('servicemen', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id')->nullable();
            $table->string('servicemen_code')->unique();
            $table->string('f_name');
            $table->string('s_name');
            $table->string('profile_pic')->nullable();
            $table->string('phoneno');
            $table->string('joining_designatiopn')->nullable();
            $table->string('current_designation')->nullable();
            $table->string('serv_comp')->nullable();
            $table->string('failed_req')->nullable();
            $table->string('doj')->nullable();
            $table->string('dol')->nullable();
            $table->string('active_starts')->nullable();
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
        Schema::dropIfExists('servicemen');
    }
}
