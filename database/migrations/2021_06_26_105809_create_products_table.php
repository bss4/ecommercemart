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
            $table->increments('id');
            $table->unsignedInteger('catalogue_id')->nullable();
            $table->string('name',191)->nullable();
            $table->string('image',191)->nullable();
            $table->string('price',191)->nullable();
            $table->string('quantity',191)->nullable();
            $table->string('discount',191)->nullable();
            $table->enum('status',array('0','1'))->default('0');
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
        Schema::dropIfExists('products');
    }
}
