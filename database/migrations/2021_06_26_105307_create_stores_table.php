<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stores', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('seller_id');
            $table->string('name',191)->unique();
            $table->string('logo',191)->nullable();
            $table->string('address',191)->nullable();
            $table->string('city',191)->nullable();
            $table->string('state',191)->nullable();
            $table->string('country',191)->nullable();
            $table->string('pin_code',191)->nullable();
            $table->string('theme_color',191)->nullable();
            $table->string('tag_line',191)->nullable();
            $table->string('slideshow',191)->nullable();
            $table->string('explore_more',191)->nullable();
            $table->string('new_arrival',191)->nullable();
            $table->string('single_product')->nullable();
            $table->string('recommended_for_you')->nullable();
            $table->string('customer_review')->nullable();
            $table->string('image_action')->nullable();
            $table->enum('status',array('lock','unlock'))->default('unlock');
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
        Schema::dropIfExists('stores');
    }
}
