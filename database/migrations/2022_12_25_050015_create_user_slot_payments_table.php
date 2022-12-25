<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_slot_payments', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('users_id');
            $table->integer('booking_time_slots_id');
            $table->string('payment');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_slot_payments');
    }
};
