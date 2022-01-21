<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSellersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sellers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('phone',191)->unique();
            $table->string('email',191)->unique();
            $table->string('social_id',191)->unique();
            $table->string('refferal_id',191)->unique();
            $table->enum('role',array('1','2','3'))->default('2');
            $table->string('aadhar_card',191);
            $table->string('pan_card',191);
            $table->string('gst',191);
            $table->enum('status',array('active','deactive'))->default('deactive');
            $table->enum('is_verify',array('0','1'))->default('0');
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
        Schema::dropIfExists('sellers');
    }
}
