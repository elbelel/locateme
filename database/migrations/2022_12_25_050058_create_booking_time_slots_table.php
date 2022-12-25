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
        Schema::create('booking_time_slots', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer("bookings_id");
            $table->integer("time_slots_id");
            $table->date("date");
            $table->integer("users_id");
            $table->boolean("status");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('booking_time_slots');
    }
};
