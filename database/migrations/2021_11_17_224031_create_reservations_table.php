<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservations', function (Blueprint $table) {
            $table->id();
            $table->String('user_id')->nullable();
            $table->String('name')->nullable();
            $table->String('email')->nullable();
            $table->String('phone')->nullable();
            $table->String('guest')->nullable();
            $table->String('date')->nullable();
            $table->String('time')->nullable();
            $table->String('message')->nullable();
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
        Schema::dropIfExists('reservations');
    }
}
