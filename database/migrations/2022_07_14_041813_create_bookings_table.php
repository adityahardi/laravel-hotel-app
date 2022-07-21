<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->unsignedInteger('kamar_id')->index();
            $table->unsignedInteger('fasilitas_id')->index();
            $table->unsignedInteger('user_id')->index();
            $table->date('tanggal_booking');
            $table->timestamps();

            $table->foreign('kamar_id')->references('id')->on('kamars');
            $table->foreign('fasilitas_id')->references('id')->on('fasilitas');
            $table->foreign('user_id')->references('id')->on('members');
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
