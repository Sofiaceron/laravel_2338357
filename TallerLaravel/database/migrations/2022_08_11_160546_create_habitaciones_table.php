<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHabitacionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('habitaciones', function (Blueprint $table) {
            $table->id();
            $table->float('precio_por_noche',12,2);
            $table->string('piso');
            $table->string('max_personas');
            $table->enum('tiene_cama_base',['Si','No']);
            $table->enum('tiene_ducha',['Si','No']);
            $table->enum('tiene_bano',['Si','No']);
            $table->enum('tiene_balcon',['Si','No']);
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
        Schema::dropIfExists('habitaciones');
    }
}
