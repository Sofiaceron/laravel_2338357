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
            $table->date('inicio_fecha');
            $table->date('fin_fecha');
            $table->unsignedBigInteger('habitacion_id');
            $table->foreign("habitacion_id")->references("id")->on("rooms")->onDelete("cascade")->onUpdate("cascade");
            $table->unsignedBigInteger('huesped_id');
            $table->foreign("huesped_id")->references("id")->on("guests")->onDelete("cascade")->onUpdate("cascade");
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
