<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->increments('id');
            $table->text('name');
            $table->text('email');
            $table->text('nic');
            $table->text('checkin');
            $table->text('checkout');
            $table->text('country');
            $table->text('luxury');
            $table->integer('lux_num');
            $table->text('double');
            $table->integer('double_num');
            $table->text('normal');
            $table->integer('normal_num');
            $table->text('honeymoon');
            $table->integer('honeymoon_num');
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
        Schema::dropIfExists('bookings');
    }
}
