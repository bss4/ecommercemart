<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id')->nullable();
            $table->unsignedInteger('catalogue_id')->nullable();
            $table->unsignedInteger('product_id')->nullable();
            $table->string('quantity',191)->nullable();
            $table->string('discount',191)->nullable();
            $table->string('price',191)->nullable();
            $table->enum('status',array('Pending','Inprogress','Return','Delivered','Shipped','Cancelled'))->default('Pending');
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
        Schema::dropIfExists('orders');
    }
}
